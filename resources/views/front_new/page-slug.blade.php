@extends('front_new.layouts.app')
@section('title')
    {!!  $page->name !!}
@endsection
@section('content')
    <section class="page-header mb-5">
        <div class="container">
            <div class="page-header-body breadcrumb-header-body">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="/"><i class="fas fa-home me-1"></i>{{ __('messages.details.home') }}</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)"> Pages</a></li>
                        <li class="breadcrumb-item active">{!! $page->name !!}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 front-custom-page-div">
                    <h1>{{$page->title}}</h1>
                    <!-- start sports-left-section -->
                {{--                        <section class="row">--}}
                {!!  $page->content !!}
                {{--                        </section>--}}
                <!-- end sports-left-section -->
                </div>
            </div>
        </div>
    </section>
@endsection
