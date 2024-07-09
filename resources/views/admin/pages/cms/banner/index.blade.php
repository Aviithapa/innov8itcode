@extends('admin.layout.app')

@section('content')

        <!-- start page title -->
                @include('admin.component.breadcrumb', ['title' => "Banner Management"])
        <!-- end page title -->
        
        <!-- Search -->
                @include('admin.component.search', ['route' => "banner.index"])
        <!-- End Search -->

        <!-- Body -->
                @include('admin.component.body', ['page' => "banner", 'modal' => $banner, 'edit' => true, 'delete' => true])
        <!-- End Body -->

@endsection

