<?php

namespace App\Http\Controllers\Admin\Course;

use App\Client\FileUpload\FileUploaderInterface;
use App\Http\Controllers\Controller;
use App\Repositories\Advisor\AdvisorRepository;
use App\Repositories\Course\CourseRepository;
use App\Repositories\Media\MediaRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    protected $courseRepository;
    protected $advisorRepository;
    protected $fileUploader;
    protected $mediaRepository;

    public function __construct(
    CourseRepository $courseRepository,
    AdvisorRepository $advisorRepository,
    FileUploaderInterface $fileUploader,
    MediaRepository $mediaRepository)
    {
        $this->courseRepository = $courseRepository;
        $this->advisorRepository = $advisorRepository;
        $this->fileUploader = $fileUploader;
        $this->mediaRepository = $mediaRepository;
    }

    public function index(Request $request)
    {
        $courses = $this->courseRepository->getPaginatedList($request);
        return view('admin.pages.course.index', compact('courses', 'request'));
    }

    public function create()
    {
        $advisors = $this->advisorRepository->all();
        return view('admin.pages.course.create', compact('advisors'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        try {
            DB::beginTransaction();
            $course = $this->courseRepository->store($data);
            if (isset($data['advisors'])) {
                $course->advisors()->sync($data['advisors']);
            }
            if (isset($data['file'])) {
                $response = $this->fileUploader->upload($data['file'], "course");
                $course->image = $response['path'];
                $course->save();
                $response['course_id'] = $course->id;
                $this->mediaRepository->store($response);
            }

            DB::commit();
            session()->flash('success', 'Course has been created successfully.');
            return redirect()->route('course.index');
        } catch (Exception $e) {
            DB::rollBack();
            session()->flash('danger', 'Oops! Something went wrong.' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    public function edit($id)
    {
        $course = $this->courseRepository->findOrFail($id);
        $advisors = $this->advisorRepository->all();
        return view('admin.pages.course.edit', compact('course', 'advisors'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        try {
            DB::beginTransaction();

            $course = $this->courseRepository->update($id, $data);

            if (isset($data['advisors'])) {
                $course = $this->courseRepository->findOrFail($id);
                $course->advisors()->sync($data['advisors']);
            }

            if (isset($data['file'])) {
                $response = $this->fileUploader->upload($data['file'], "course");
                $course = $this->courseRepository->findOrFail($id);
                $course->image = $response['path'];
                $course->save();
                $response['course_id'] = $course->id;
                $this->mediaRepository->store($response);
            }
            DB::commit();

            session()->flash('success', 'Course has been updated successfully.');
            return redirect()->route('course.index');
        } catch (Exception $e) {
            DB::rollBack();
            session()->flash('danger', 'Oops! Something went wrong.' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $this->courseRepository->delete($id);

            session()->flash('success', 'Course has been deleted successfully.');
            return redirect()->route('course.index');
        } catch (Exception $e) {
            session()->flash('danger', 'Oops! Something went wrong.' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }
}
