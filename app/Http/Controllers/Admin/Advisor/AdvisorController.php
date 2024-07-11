<?php

namespace App\Http\Controllers\Admin\Advisor;

use App\Client\FileUpload\FileUploaderInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Advisor\StoreAdvisorRequest;
use App\Http\Requests\Advisor\UpdateAdvisorRequest;
use App\Repositories\Advisor\AdvisorRepository;
use App\Repositories\Media\MediaRepository;
use CreateAdvisorsTable;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdvisorController extends Controller
{
    protected $advisorRepository;
    protected $fileUploader;
    protected $mediaRepository;

    public function __construct(
        AdvisorRepository $advisorRepository,
        FileUploaderInterface $fileUploader,
        MediaRepository $mediaRepository
    ) {
        $this->advisorRepository = $advisorRepository;
        $this->fileUploader = $fileUploader;
        $this->mediaRepository = $mediaRepository;
    }

    public function index(Request $request)
    {
        $advisors = $this->advisorRepository->getPaginatedList($request);
        return view('admin.pages.advisor.index', compact('advisors', 'request'));
    }

    public function create()
    {
        return view('admin.pages.advisor.create');
    }

    public function store(StoreAdvisorRequest $request)
    {
        $data = $request->all();
       
        try {
            DB::beginTransaction();
            $advisor = $this->advisorRepository->store($data);
            if ($advisor === false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            if (isset($data['file'])) {
                $response = $this->fileUploader->upload($data['file'], "images");
                $advisor->image = $response['path'];
                $advisor->save();
                $response['advisor_id'] = $advisor->id;
                $this->mediaRepository->store($response);
            }
            DB::commit();
            session()->flash('success', 'Advisor has been created successfully.');
            return redirect()->route('advisor.index');
        } catch (Exception $e) {
            DB::rollBack();
            session()->flash('danger', 'Oops! Something went wrong.' . $e);
            return redirect()->back()->withInput();
        }
    }

    public function edit($id)
    {
        $advisor = $this->advisorRepository->findOrFail($id);
        return view('admin.pages.advisor.edit', compact('advisor'));
    }

    public function update(UpdateAdvisorRequest $request, $id)
    {
        $data = $request->all();
        try {
            DB::beginTransaction();
            $advisor = $this->advisorRepository->update($id, $data);
            if ($advisor === false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            if (isset($data['file'])) {
                $response = $this->fileUploader->upload($data['file'], "images");
                $advisor = $this->advisorRepository->findOrFail($id);
                $advisor->image = $response['path'];
                $advisor->save();
                $response['advisor_id'] = $advisor->id;
                $this->mediaRepository->store($response);
            }
            DB::commit();
            session()->flash('success', 'Advisor has been updated successfully.');
            return redirect()->route('advisor.index');
        } catch (Exception $e) {
            DB::rollBack();
            session()->flash('danger', 'Oops! Something went wrong.' . $e);
            return redirect()->back()->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $advisor = $this->advisorRepository->delete($id);
            if ($advisor === false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'Advisor has been deleted successfully.');
            return redirect()->route('advisor.index');
        } catch (Exception $e) {
            session()->flash('danger', 'Oops! Something went wrong.' . $e);
            return redirect()->back()->withInput();
        }
    }
}