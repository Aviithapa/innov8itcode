<?php

namespace App\Http\Controllers\Admin\Count;

use App\Client\FileUpload\FileUploaderInterface;
use App\Http\Controllers\Controller;
use App\Repositories\Count\CountRepository;
use App\Repositories\Media\MediaRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CountController extends Controller
{
    private $CountRepository;
    protected $fileUploader;
    protected $mediaRepository;
    protected $crud_actions = ['create', 'read', 'update', 'delete'];
    /**
     * PermissionController constructor.
     * @param CountRepository $CountRepository
     */

    public function __construct(
        CountRepository $CountRepository,
        FileUploaderInterface $fileUploader,
        MediaRepository $mediaRepository
    ) {
        $this->CountRepository = $CountRepository;
        $this->fileUploader = $fileUploader;
        $this->mediaRepository = $mediaRepository;
    }

    /**
     * View all entities
     * @return mixed
     */
    public function index(Request $request)
    {
        $counts = $this->CountRepository->getPaginatedList($request);
        return view('admin.pages.count.index', compact('counts'));
    }

    /**
     * Create new entity
     * @return mixed
     */
    public function create()
    {
        return view('admin.pages.count.form');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        unset($inputs['_token']);
        if (isset($inputs['_wysihtml5_mode'])) unset($inputs['_wysihtml5_mode']);
        try {
            foreach ($inputs as $k => $v) {
                $display_name = Str::ucfirst(Str::replaceFirst('_', ' ', $k));
                $count = $this->CountRepository->findByName($k);

                if ($count != null) {
                    $this->CountRepository->update($count->id, ['name' => $k, 'value' => $v, 'display_name' => $display_name]);
                } else {
                    $this->CountRepository->store(['name' => $k, 'value' => $v, 'display_name' => $display_name]);
                }
            }
            session()->flash('success', 'Counts Updated Successfully');
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('danger', 'Ops! Something went wrong');
            return redirect()->back();
        }
    }

    /**
     * Edit entity
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $site_count = $this->CountRepository->findOrFail($id);
        return view('admin.counts.site-count.edit', compact('site_count'));
    }



    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {

        try {
            $this->CountRepository->delete($id);
            session()->flash('success', 'count deleted successfully');
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back();
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $inputs = $request->all();
        unset($inputs['_token']);
        if (isset($inputs['_wysihtml5_mode'])) unset($inputs['_wysihtml5_mode']);
        try {
            foreach ($inputs as $k => $v) {
                $display_name = Str::ucfirst(Str::replaceFirst('_', ' ', $k));
                $count = $this->CountRepository->findByName($k);
                if ($count != null) {
                    $this->CountRepository->update(['name' => $k, 'value' => $v, 'display_name' => $display_name], $count->id);
                } else {
                    $this->CountRepository->store(['name' => $k, 'value' => $v, 'display_name' => $display_name]);
                }
            }
            session()->flash('success', 'Count Updated Successfully');
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('danger', 'Ops! Something went wrong');
            return redirect()->back();
        }
    }
}
