<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\Inquiry\CreateInquiryRequest;
use App\Repositories\CMS\Post\PostRepository;
use App\Repositories\Inquiry\InquiryRepository;
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


    public function __construct(
        Request $request,
        PostRepository $postRepository,
        InquiryRepository $inquiryRepository
    ) {
        $this->request = $request;
        $this->postRepository = $postRepository;
        $this->inquiryRepository = $inquiryRepository;
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
                    $this->viewData['facility'] = $this->postRepository->findByWithPagination('type', 'facility', 2);
                    $this->viewData['teams'] = $this->postRepository->findByWithPagination('type', 'team', 6);
                    $this->viewData['testimonial'] = $this->postRepository->findByWithPagination('type', 'testimonial', 6);
                    $this->viewData['blogs'] = $this->postRepository->findByWithPagination('type', 'blog', 3);
                    break;
                
                case 'blog':
                    $this->viewData['blogs'] = $this->postRepository->findByWithPagination('type', 'blog', 12);
                    break;

                case 'about':
                    $this->viewData['teams'] = $this->postRepository->findByWithPagination('type', 'team', 6);
                    $this->viewData['banners'] = $this->postRepository->all()->where('type', 'homepage_banner');
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
}
