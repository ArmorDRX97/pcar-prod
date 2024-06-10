@extends('front_new.layouts.app')
@section('title')
    {!! $postDetail->title !!}
@endsection
@section('meta_image')
    {{ $postDetail->post_image }}
@endsection
@section('meta_tags')
    {!! $postDetail->keywords !!}
@endsection
@section('meta_description')
    {!! $postDetail->description !!}
@endsection
@section('pageCss')
    {{--    <link href="{{asset('front_web/build/scss/news-details.css')}}" rel="stylesheet" type="text/css">--}}
    {{--    <link href="{{asset('front_web/css/swiper.min.css')}}" rel="stylesheet" type="text/css">--}}

@endsection
@section('content')
    @php
        $settings = getSettingValue();
    @endphp
    <section class="page-header mb-5">
        <div class="container">
            <div class="page-header-body breadcrumb-header-body">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="/p"><i class="fas fa-home me-1"></i>{{ __('messages.details.home') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{route('categoryPage',$postDetail->category->name)}}">{!! $postDetail->category->name !!}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{!! $postDetail->title !!}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <div class="news-details-page mb-20">
        <!-- start news-details-section -->
        <section class="news-details-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <!-- start news-details-left-section -->
                        <section class="news-details-left pe-xxl-3">
                            <div class="news-details">
                                <h3 class="text-black fw-7 fs-24 my-2">{!! $postDetail->title !!}</h3>
                                <div class="post-content">
                                    <p class="text-gray">{!! $postDetail->description !!}</p>
                                </div>
                                <div class="mb-2">
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="detail-tag">{{$postDetail->category->name}}</a>

                                        <div class="d-flex justify-content-start flex-column">
                                            <span class="fs-14 text-gray">{{ ucfirst(__('messages.common.'.strtolower($postDetail->created_at->format('F')))) }} {{ $postDetail->created_at->format('d, Y') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="news-content-img position-relative">
                                    <div class="news-details-img rounded-10"><a href="#"><img src="{{$postDetail->post_image}}" class="w-100 h-100"></a>
                                    </div>
                                    <div class="news-text mt-2 mb-4">
                                        <div class="desc d-inline-block me-2">
                                            <i class="fa-solid fa-comments fs-12 text-gray me-1"></i>
                                            <span class="fs-14 text-gray me-1">{{ ( $comments->count() ? $comments->count() : 0 ) }}</span>
                                        </div>
                                        <div class="desc d-inline-block me-2">
                                            <i class="fa-solid fa-clock fs-12 text-gray me-1"></i>
                                            <span class="fs-14 text-gray me-1"> {{ getReadingTime($postDetail->sort_list_content) }}</span>
                                        </div>
                                        <div class="desc d-inline-block me-2">
                                            <i class="fa-solid fa-eye fs-12 text-gray me-1"></i>
                                            <span class="fs-14 text-gray me-1"> {{ getPostViewCount($postDetail->id) }} </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="news-desc mb-20">
                                    <p>
                                        @if(isset($postDetail->postArticle->article_content))
                                            {!!  $postDetail->postArticle->article_content !!}
                                        @endif
                                    </p>
                                </div>
                                @if(($postDetail->additional_image))
                                    <div class="mt-4">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12">
                                                <h4 class="">{{ __('messages.common.images') }}</h4>
                                            </div>
                                            <div class="row">
                                                <div class="swiper addition-image-swiper">
                                                    <div class="swiper-wrapper justify-content-center">
                                                        @foreach($postDetail->additional_image as $image)
                                                            <div class="swiper-slide mx-2"> <img src="{{$image}}" alt="" class="w-100" height="400"></div>
                                                        @endforeach
                                                    </div>
                                                    <div class="swiper-button-next"></div>
                                                    <div class="swiper-button-prev"></div>
                                                    <div class="swiper-pagination"></div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if($postDetail->rss_id != null)
                                    @if($postDetail->rssFeed->show_btn == \App\Models\RssFeed::YES)
                                        <div class="d-flex justify-content-end">
                                            <a href="{{$postDetail->rss_link}}" target="_blank"
                                               class="btn btn-success mb-2 text-white rounded-10">Read More</a>
                                        </div>
                                    @endif
                                @endif
                                @if($postDetail->optional_url != null)
                                        <div class="d-flex justify-content-end">
                                            <a href="{{$postDetail->optional_url}}" target="_blank"
                                               class="btn btn-success mb-2 text-white rounded-10">Read More</a>
                                        </div>
                                @endif
                                @if(!empty($postDetail->post_file) && count($postDetail->post_file) )
                                    <div class="mt-4 mb-4">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12">
                                                <h4 class="">{{ __('messages.common.files') }}</h4>
                                                @foreach($postDetail->post_file as $file)
                                                    <div class="file">
                                                        <a href="{{($file)}}"
                                                           class="tag-link">{{basename($file)}}</a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <hr>
                            <!-- start post Reaction -->
                            @include('front_new.detail_pages.post-reaction')


                            <!-- end post Reaction -->

                            <!-- start share-this-post-section -->
                            <section class="share-this-post-section tags-post mt-3 pt-md-3">
                                <div class="row admin-desc d-flex flex-wrap justify-content-between mb-20">
                                    @if(!empty(($postDetail->tags)))
                                        <div class="col-sm-12">
                                            <h5 class="tags-post-title"> {{ __('messages.common.tags') }} </h5>
                                            <div class="tags-post-tags d-flex overflow-auto">
                                                @foreach(explode(',',$postDetail->tags) as $tags)
                                                    <div class="tags-post-tag">
                                                        <a href="{{ route('popularTagPage',$tags) }}"
                                                           class="fs-14 text-black ">{!! $tags !!}</a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="admin-post position-relative pt-60">
                                <div class="navigation-admin-post">
                                    @if(!empty($previousPost))
                                        <a href="{{ route('detailPage',$previousPost->slug) }}"
                                           class='prev-btn fs-16 text-black fw-6'>
                                            <i class="fa-solid fa-angle-left fs-14 me-1"></i>{{ __('messages.details.previous_post') }}
                                        </a>
                                    @endif
                                    @if(!empty($nextPost))
                                        <a href="{{ route('detailPage',$nextPost->slug) }}"
                                           class='next-btn fs-16 text-black fw-6'>{{ __('messages.details.next_post') }}
                                            <i class="fa-solid fa-angle-right fs-14 ms-1"></i>
                                        </a>
                                    @endif
                                </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            @if(!empty($previousPost))
                                                <div class="card-admin-post">
                                                    <a href="{{ route('detailPage',$previousPost->slug) }}">
                                                        <img src="{{ $previousPost->post_image }}" alt=""
                                                             height="100" width="100">
                                                    </a>
                                                    <div class="ms-3">
                                                        <h5 class="card-title text-black">
                                                            <a href="{{ route('detailPage',$previousPost->slug) }}"
                                                               class="text-black position-relative">
                                                                {!! \Illuminate\Support\Str::limit($previousPost['title'],40,'...') !!}
                                                            </a>
                                                        </h5>
                                                        <span class="fs-14 text-gray"> {{ ucfirst(__('messages.common.'.strtolower($previousPost['created_at']->format('M')))) }} {{ $previousPost['created_at']->format('d, Y') }}</span>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            @if(!empty($nextPost))
                                                <div class="card-admin-post">
                                                    <a href="{{ route('detailPage',$nextPost->slug) }}">
                                                        <img src="{{ $nextPost->post_image }}"
                                                             height="100" width="100">
                                                    </a>
                                                    <div class="ms-3">
                                                        <h5 class="card-title text-black">
                                                            <a href="{{ route('detailPage',$nextPost->slug) }}"
                                                               class="text-black position-relative">
                                                                {!! \Illuminate\Support\Str::limit($nextPost['title'],40,'...') !!}
                                                            </a>
                                                        </h5>
                                                        <span class=" fs-14 text-gray">{{ ucfirst(__('messages.common.'.strtolower($nextPost['created_at']->format('M')))) }} {{ $nextPost['created_at']->format('d, Y') }}</span>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- end share-this-post-section -->
                            @if(checkAdSpaced('post_details'))
                                @if(isset(getAdImageDesktop(\App\Models\AdSpaces::POST_DETAILS)->code))
                                    <div class="index-top-desktop ad-space-url-desktop">
                                        {!! getAdImageDesktop(\App\Models\AdSpaces::POST_DETAILS)->code !!}
                                    </div>
                                @elseif ($adsDesktop = getAdImageDesktop(\App\Models\AdSpaces::POST_DETAILS))
                                    <div class="container index-top-desktop">
                                        <a href="{{$adsDesktop->ad_url}}"
                                           target="_blank">
                                            <img src="{{asset($adsDesktop->ad_banner)}}"
                                                 width="800" class="img-fluid">
                                        </a>
                                    </div>
                                @endif
                                @if(isset(getAdImageDesktop(\App\Models\AdSpaces::POST_DETAILS)->code))
                                    <div class="index-top-mobile ad-space-url-mobile">
                                        {!! getAdImageDesktop(\App\Models\AdSpaces::POST_DETAILS)->code !!}
                                    </div>
                                @elseif ($adRecord = getAdImageMobile(\App\Models\AdSpaces::POST_DETAILS))
                                    <div class=" container index-top-mobile">
                                        <a href="{{$adRecord->ad_url}}"
                                           target="_blank">
                                            <img src="{{asset($adRecord->ad_banner)}}"
                                                 width="350" class="img-fluid">
                                        </a>
                                    </div>
                                @endif
                            @endif
                            <!--start related-post-section -->
                            @if($relatedPosts->count() > 0)
                                <hr class="my-40">
                                <section class="related-post-section mb-xl-5 mb-lg-4">
                                    <div class="section-heading border-0 mb-0">
                                        <div class="row align-items-center">
                                            <div class="col-12 section-heading-left">
                                                <h2 class="text-black mb-0"> {{ __('messages.details.related_post') }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="related-post pt-4">
                                        <div class="row">
                                            @foreach($relatedPosts as $relatedPost)
                                                <div class="col-lg-4 col-md-4 col-sm-6 mb-2">
                                                    <div class="card position-relative slide-item">
                                                        <div class="card-img-top">
                                                            <a href="{{ route('detailPage',$relatedPost->slug) }}">
                                                                {{--                                                                <img data-src="{{ $relatedPost['post_image'] }}" alt="" src="{{ asset('front_web/images/bg-process.png') }}" class="w-100 h-100 lazy">--}}
                                                                <img src="{{ $relatedPost['post_image'] }}" alt=""
                                                                     class="w-100 h-100">
                                                            </a>
                                                        </div>
                                                        <div class="card-body">
                                                            <a href="#"
                                                               class="tags position-absolute  fw-7">{{ $relatedPost['category']['name'] }}</a>
                                                            <h5 class="card-title mb-1 fs-16 text-black fw-6">
                                                                <a class="text-black"
                                                                   href="{{ route('detailPage',$relatedPost->slug) }}">
                                                                    {!!  $relatedPost['title'] !!}
                                                                </a>
                                                            </h5>
                                                            <span class="card-text fs-12 text-gray">{{ ucfirst(__('messages.common.'.strtolower($relatedPost['created_at']->format('M')))) }} {{ $relatedPost['created_at']->format('d, Y') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if($loop->iteration >= 6)
                                                    @break
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </section>
                            @endif
                            <!--end related-post-section -->

                            <!-- start post-comment-section -->
                            <section class="post-comment-section bg-light px-30 py-4">
                                <h5 class="fs-16 text-black fw-6 mb-3">{{ __('messages.comment.post_a_comment') }}</h5>
                                <form id="commentForm">
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{ $postDetail->id }}">
                                    <input type="hidden" name="user_id"
                                           value="{{ isset(getLogInUser()->id) ? getLogInUser()->id : null }}">
                                    <div class="row">
                                        @if(!Auth::check())
                                            <div class="col-md-6 mb-3">
                                                <input type="text" class="form-control fs-14 text-gray" name="name"
                                                       id="name"
                                                       placeholder="{{ __('messages.comment.enter_your_name') }}"
                                                       required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <input type="email" name="email" id="email"
                                                       class="form-control fs-14 text-gray"
                                                       placeholder="{{ __('messages.comment.enter_your_email') }}"
                                                       required>
                                            </div>
                                        @endif
                                        <div class="col-12">
                                            <textarea class="form-control fs-14 text-gray" name="comment" id="comment"
                                                      rows="3"
                                                      placeholder="{{ __('messages.comment.type_your_comments') }}"
                                                      required></textarea>
                                        </div>
                                        <div class="col-12 mb-2">
                                            @if($showCaptcha == "1")
                                                <input type="hidden" value="{{ $settings['show_captcha'] }}"
                                                       id="googleCaptch">
                                                <div class="form-group mb-1">
                                                    <div class="g-recaptcha" id="gRecaptchaContainerPostDetails"
                                                         data-sitekey="{{ $settings['site_key'] }}"></div>
                                                    <div id="g-recaptcha-error"></div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <button type="submit"
                                            class="btn btn-primary ">{{ __('messages.common.submit') }}</button>
                                </form>
                            </section>
                            <!-- end post-comment-section -->

                            <!--start comment-section -->
                            <section class="comment-section mt-4 pt-3 blog-post-comment-view">
                                <h3 class=" text-black fw-6 mb-3 comment-data @if(empty($totalComments)) d-none @endif">
                                    {{ __('messages.comments') }} ({{  $totalComments }})
                                </h3>
                                @php
                                    $inStyle = 'style=';
                                    $style   = '"overflow-y: auto; max-height: 325px"';
                                @endphp
                                <div class="comment-view" {!! $totalComments >= 3 ? $inStyle.$style : '' !!}>
                                    @foreach($comments as $comment)
                                        <div class="media d-flex card-view-{{$comment->id}} mt-2">
                                            <div class="media-img me-4 rounded-10">
                                                {{--                                                <img data-src="{{ isset($comment->users->profile_image) ?                                                                               $comment->users->profile_image :asset('web/media/avatars/150-2.jpg') }}" alt="" src="{{ asset('front_web/images/bg-process.png') }}" class="w-100 h-100 rounded-10 lazy">--}}
                                                <img src="{{ isset($comment->users->profile_image) ?                                                                               $comment->users->profile_image : asset('web/media/avatars/150-2.jpg') }}"
                                                     alt="" class="w-100 h-100 rounded-10">
                                            </div>
                                            <div class="media-body comment-content w-100">
                                                <div class="media-title d-flex flex-wrap justify-content-between">
                                                    <h5 class="mt-0 text-black fs-18 mb-1 user-name">{{ $comment->name                                                             }}</h5>
                                                    @if(Auth::check() && $comment->user_id == getLogInUser()->id)
                                                        <button class="delete-btn fs-14 text-danger delete-comment-btn"
                                                                data-id="{{$comment['id']}}">
                                                            <i class="fa fa-trash-can"></i> {{ __('messages.delete') }}
                                                        </button>
                                                    @endif
                                                </div>
                                                <span class="text-gray fs-14 reply-time">{{                                                                                       $comment->created_at->diffForHumans() }}</span>
                                                <p class="fs-14 text-gray mt-1 comment-msg">
                                                    {!! $comment->comment !!}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </section>
                            <!--end comment-section -->

                        </section>
                        <!-- end news-details-left-section -->

                    </div>
                    <div class="col-xl-4 ">
                        @include('front_new.detail_pages.side-menu')
                    </div>
                </div>
            </div>
        </section>
        <!-- end news-details-section -->
        @include('front_new.detail_pages.template.template')
    </div>

@endsection
@section('script')
    {{--    {!! reCaptcha()->renderJs() !!}--}}
    <script>
        let userProfile = '{{ asset('images/avatar.png') }}'
    </script>
@endsection