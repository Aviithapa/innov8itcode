<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\Inquiry\CreateInquiryRequest;
use App\Repositories\Advisor\AdvisorRepository;
use App\Repositories\CMS\Post\PostRepository;
use App\Repositories\Contact\ContactRepository;
use App\Repositories\Course\CourseRepository;
use App\Repositories\Inquiry\InquiryRepository;
use App\Repositories\NewsLetterSubscribe\NewsLetterSubscribeRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController
{
    //

    private $viewData;
    private $postRepository;
    private $request;
    private $inquiryRepository;
    private $advisorRepository;
    private $courseRepository;
    private $newsLetterSubscribeRepository;
    private $contactRepository;



    public function __construct(
        Request $request,
        PostRepository $postRepository,
        InquiryRepository $inquiryRepository,
        AdvisorRepository $advisorRepository,
        CourseRepository  $courseRepository,
        NewsLetterSubscribeRepository $newsLetterSubscribeRepository,
        ContactRepository $contactRepository
    ) {
        $this->request = $request;
        $this->postRepository = $postRepository;
        $this->inquiryRepository = $inquiryRepository;
        $this->advisorRepository = $advisorRepository;
        $this->courseRepository =  $courseRepository;
        $this->newsLetterSubscribeRepository = $newsLetterSubscribeRepository;
        $this->contactRepository = $contactRepository;
        parent::__construct();
    }


    public function slug($slug = null)
    {
        $slug = $slug ? $slug : 'index';
        $file_path = resource_path() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'website/pages' . DIRECTORY_SEPARATOR . $slug . '.blade.php';
        $this->viewData['pageData'] = $this->postRepository->findBy('slug', $slug);
        $this->viewData['clients'] = $this->postRepository->all()->where('type', 'clients');
        $this->viewData['slug'] = $slug;
        $this->viewData['heading_team'] = $this->postRepository->findBy('id', 19, ['title', 'content', 'excerpt']);
        $this->viewData['heading_blog'] = $this->postRepository->findBy('id', 20, ['title', 'content', 'excerpt']);
        $this->viewData['discount'] = $this->postRepository->findBy('id', 15, ['title', 'image', 'content', 'excerpt']);
        if (file_exists($file_path) && $this->viewData['pageData']) {
            switch ($slug) {
                case 'index':
                    $this->viewData['banners'] = $this->postRepository->all()->where('type', 'homepage_banner');
                    $this->viewData['services'] = $this->postRepository->all()->where('type', 'services');
                    $this->viewData['facilities'] = $this->postRepository->findBy('id', 6, ['title', 'image', 'excerpt']);
                    $this->viewData['home_about'] = $this->postRepository->findBy('id', 7, ['image', 'content']);
                    $this->viewData['facility'] = $this->postRepository->findByWithPagination('type', 'facility', 3);
                    $this->viewData['teams'] = $this->advisorRepository->paginatedList(6);
                    $this->viewData['testimonial'] = $this->postRepository->findByWithPagination('type', 'testimonial', 6);
                    $this->viewData['blogs'] = $this->postRepository->findByWithPagination('type', 'blog', 3);
                    $this->viewData['courses'] = $this->courseRepository->paginatedList(3);
                    break;
                
                case 'blog':
                    $this->viewData['blogs'] = $this->postRepository->findByWithPagination('type', 'blog', 12);
                    break;

                case 'about':
                    $this->viewData['about'] = $this->postRepository->findBy('id', 27, ['title', 'image', 'content']);
                    $this->viewData['teams'] = $this->advisorRepository->paginatedList(6);
                    $this->viewData['banners'] = $this->postRepository->all()->where('type', 'homepage_banner');
                    $this->viewData['galleries'] = $this->postRepository->findByWithPagination('type', 'gallery', 6);
                    $this->viewData['services'] = $this->postRepository->findByWithPagination('type', 'services', 2);
                    $this->viewData['about_video'] = $this->postRepository->findBy('id', 29, ['title', 'image', 'excerpt']);

                    break;
                
                case 'advisor-list':
                    $this->viewData['advisors'] = $this->advisorRepository->all();
                    break;

                case 'course': 
                    $this->viewData['courses'] = $this->courseRepository->paginatedList(3);
                    break;
                case 'contact':
                    
                    break;
                default:
                    return view('website.pages.' . $slug,  $this->viewData);
                break;
            }
            return view('website.pages.' . $slug,  $this->viewData);
        }
        return view('website.pages.404');
    }


    public function storeInquiry(CreateInquiryRequest $request){
        $data = $request->all();
        try {
            DB::beginTransaction();
            $inquiry = $this->inquiryRepository->store($data);
            if ($inquiry === false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            DB::commit();
            session()->flash('success', 'Your request has been submitted successfully.');
            return redirect()->back();
        } catch (Exception $e) {
            DB::rollBack();
            session()->flash('danger', 'Oops! Something went wrong.' . $e);
            return redirect()->back()->withInput();
        }
    }


    public function getSingleBlog($id)
    {
        $this->viewData['blog'] = $this->postRepository->findBy('id', $id);
        return view('website.pages.blog-single',  $this->viewData);
    }

    public function getSingleAdvisor($id)
    {
        $this->viewData['advisor'] = $this->advisorRepository->findOrFail($id);
        return view('website.pages.advisor',  $this->viewData);
    }

    public function getSingleCourse($id)
    {
        $this->viewData['course'] = $this->courseRepository->findOrFail($id);
        $this->viewData['discount'] = $this->postRepository->findBy('id', 15, ['title', 'image', 'content', 'excerpt']);
        return view('website.pages.course-details',  $this->viewData);
    }


    public function subscribeNewsLetter(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ]);
        $data = $request->all();
        try {
            DB::beginTransaction();
            $inquiry = $this->newsLetterSubscribeRepository->store($data);
            if ($inquiry === false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            DB::commit();
            session()->flash('success_news', 'Your request has been submitted successfully.');
            return redirect()->back();
        } catch (Exception $e) {
            DB::rollBack();
            session()->flash('danger', 'Oops! Something went wrong.' . $e);
            return redirect()->back()->withInput();
        }
    }

    public function storeContactUsForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:15',
            'message' => 'required|string',
        ]);

        $data = $request->only('name', 'email', 'phone', 'message');
        try {
            DB::beginTransaction();
            $inquiry = $this->contactRepository->store($data);
            if ($inquiry === false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            DB::commit();
            session()->flash('success_contact', 'Your request has been submitted successfully.');
            return redirect()->back();
        } catch (Exception $e) {
            DB::rollBack();
            session()->flash('danger', 'Oops! Something went wrong.' . $e);
            return redirect()->back()->withInput();
        }
    }
}
