@extends('front_new.layouts.app')
@section('title')
    {!! $tagName !!}
@endsection
@section('pageCss')
    <link href="{{asset('front_web/build/scss/sports.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <section class="page-header mb-5">
        <div class="container">
            <div class="page-header-body breadcrumb-header-body">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="/p"><i class="fas fa-home"></i>{{ __('blog.all_articles') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> {!! ucfirst(trans($tagName)) !!}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <div class="sports-page">
        <!-- start sports-section -->
        <section class="sports-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <!-- start sports-left-section -->
                        <section class="sports-left-section">
                            @if(isset($tagName))
                                @livewire('popular-tag-page',['tagName' => $tagName])
                            @endif
                        </section>
                        <!-- end sports-left-section -->
                    </div>
                    <div class="col-xl-4 ">
                      @include('front_new.detail_pages.side-menu')
                    </div>
                </div>
            </div>
        </section>
        <!-- end sports-section -->
    </div>
@endsection
