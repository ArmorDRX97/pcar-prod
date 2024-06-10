@extends('front_new.layouts.app')
@section('title')
    {{__('messages.post.gallery') }}
@endsection
@section('pageCss')
    <link href="{{asset('front_web/build/scss/gallery.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <section class="page-header mb-5">
        <div class="container">
            <div class="page-header-body breadcrumb-header-body">
                <div class="page-title">{{__('messages.post.gallery') }}</div>
            </div>
        </div>
    </section>
<div class="gallery-page">
    <!-- start gallery-section -->
    <section class="gallery-section">
        <div class="container">
            <div class="gallery-post-section">
                <div class="row">
                    @forelse($galleries as $gallery)
                    <div class="col-lg-4 col-sm-6 mb-4 pb-md-3">
                        <div class="gallery-post mb-2">
                            <a href="{{route('galleryPage',$gallery->album_id)}}" data-turbo="false">
{{--                                <img data-src="{{ !empty($gallery->gallery_image['0']) ? $gallery->gallery_image['0']: asset('front_web/images/default.jpg') }}" alt="" src="{{ asset('front_web/images/bg-process.png') }}" class="w-100 h-100 lazy" />--}}
                                <img src="{{ !empty($gallery->gallery_image['0']) ? $gallery->gallery_image['0']: asset('front_web/images/default.jpg') }}" alt="" class="w-100 h-100 bra-10" />
                            </a>
                        </div>
                        <a href="{{route('galleryPage',$gallery->album_id)}}" class="title-gallery text-black" data-turbo="false">{!! $gallery->album->name !!}</a>
                    </div>
                    @empty
                        <div class="text-center text-dark">
                            <div class="my-5 text-muted">
                                <h5>{{__('messages.no_album_found')}}</h5>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <!-- end gallery-section -->
</div>
@endsection
@section('script')
{{--    <script src="{{ asset('assets/js/front/gallery-page.js') }}"></script>--}}
@endsection
