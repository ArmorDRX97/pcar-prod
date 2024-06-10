
<!-- start hot-categories-section -->
@if(!empty(getPopulerCategories()))
    <section class="hot-categories-section" style="margin-bottom: 50px;">
        <div class="section-heading border-0 mb-3">
            <div class="row align-items-center">
                <div class="col-12 section-heading-left">
                    <h2 class="text-black mb-0">{{ __('messages.details.hot_categories') }}</h2>
                </div>
            </div>
        </div>
        <div class="hot-categories-post">
            @foreach(array_slice(getPopulerCategories(),0,10) as $category)
                <a href="{{ route('categoryPage',['category' => $category['slug']]) }}" class="hot-category">
                    <div class="desc">
                        <i class="fa-solid fa-list"></i>
                        <span class="fs-16 fw-6 text-black mb-0">{!! $category['name'] !!}</span>
                    </div>
                    <div class="numbers">
                        <span class="fs-14 fw-6">{{ $category['posts_count'] }}</span>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endif
<!-- end hot-categories-section -->

<!-- start popular-news-section -->
@if(!empty(getPopularNews()))
<section class="popular-news-section" style="margin-bottom: 50px;">
    <div class="section-heading border-0 mb-3">
        <div class="row align-items-center">
            <div class="col-12 section-heading-left">
                <h2 class="text-black mb-0">{{ __('messages.details.popular_news') }}</h2>
            </div>
        </div>
    </div>
    <div class="popular-news-post">
        <div class="row">
            <div class="col-xl-12 d-flex flex-wrap justify-content-between">
                @foreach(getPopularNews() as $news)
                    @if(!empty($news))
                        <div class="col-xl-12 w-100 col-sm-6 card-popular-news card card-popular-news d-flex flex-xl-row py-20 pe-xl-0 pe-lg-4 pe-sm-3 mb-3">
                            <div class="row" style="width: 100%;">
                                <div class="col-xl-4 col-5 card-top">
                                    <div class="card-img-top">
                                        <a href="{{route('detailPage',$news['slug'])}}">
{{--                                            <img data-src="{{ $news['post_image'] }}" alt="" src="{{ asset('front_web/images/bg-process.png') }}" class="w-100 h-100 w-300px lazy">--}}
                                            @if($news['post_types'] == \App\Models\Post::AUDIO_TYPE_ACTIVE)
                                                <button class="common-music-icon sidebar-music-icon"
                                                        type="button">
                                                    <i class="icon fa-solid fa-music text-white"></i>
                                                </button>
                                                <img src="{{ $news['post_image'] }}" alt="">
                                            @elseif($news['post_types'] == \App\Models\Post::VIDEO_TYPE_ACTIVE)
                                                @php
                                                    $thumbUrl = !empty($news['post_video']) && !empty($news['post_video']['thumbnail_image_url']) ? $news['post_video']['thumbnail_image_url'] : null;
                                                    $thumbImage = !empty($news['post_video']) && !empty($news['post_video']['uploaded_thumb']) ? $news['post_video']['uploaded_thumb'] : asset('front_web/images/default.jpg')
                                                @endphp
                                                <button class="common-music-icon sidebar-music-icon"
                                                        type="button">
                                                    <i class="icon fa-solid fa-play text-white"></i>
                                                </button>
                                                <img src="{{ (!empty($thumbUrl) ? $thumbUrl : $thumbImage) }}" alt="">
                                            @else
                                                <img src="{{ $news['post_image'] }}" alt="">
                                            @endif
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-7">
                                    <div class="card-body ">
                                        <div class="popular-new-category">{!! $news['category']['name'] !!}
                                        </div>
                                        <p class="card-title mb-0 fs-14 text-black fw-6">
                                            <a href="{{route('detailPage',$news['slug'])}}" class="text-black">
                                                {!!  $news['title'] !!}
                                            </a>
                                        </p>
                                        <span class="card-text fs-12 text-gray">{{ ucfirst(__('messages.common.'.strtolower(\Carbon\Carbon::parse($news['created_at'])->format('F')))) }} {{ \Carbon\Carbon::parse($news['created_at'])->format('d, Y') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                        @if($loop->iteration >= 6)
                            @break
                        @endif
                @endforeach

            </div>
            @if(checkAdSpaced('popular_news'))
                @if(isset(getAdImageDesktop(\App\Models\AdSpaces::ALL_DETAILS_POPULAR_NEWS)->code))
                    <div class="index-top-desktop ad-space-url-desktop">
                        {!! getAdImageDesktop(\App\Models\AdSpaces::ALL_DETAILS_POPULAR_NEWS)->code !!}
                    </div>
                @elseif ($adsDesktop = getAdImageDesktop(\App\Models\AdSpaces::ALL_DETAILS_POPULAR_NEWS))
                <div class="index-top-desktop">
                    <a href="{{$adsDesktop->ad_url}}"
                       target="_blank">
                        <img src="{{asset($adsDesktop->ad_banner)}}"
                             width="800" class="img-fluid">
                    </a>
                </div>
                @endif
                    @if(isset(getAdImageDesktop(\App\Models\AdSpaces::ALL_DETAILS_POPULAR_NEWS)->code))
                        <div class="index-top-mobile ad-space-url-mobile">
                            {!! getAdImageDesktop(\App\Models\AdSpaces::ALL_DETAILS_POPULAR_NEWS)->code !!}
                        </div>
                    @elseif ($adRecord = getAdImageMobile(\App\Models\AdSpaces::ALL_DETAILS_POPULAR_NEWS))
                <div class="index-top-mobile">
                    <a href="{{$adRecord->ad_url}}"
                       target="_blank">
                        <img src="{{asset($adRecord->ad_banner)}}"
                             width="350" class="img-fluid">
                    </a>
                </div>
                    @endif
            @endif
        </div>
    </div>
</section>
@endif
<!-- end popular-news-section -->

<!-- start popular-tag-section -->
@if(count(array_filter(getPopularTags())))
<section class="popular-tag-section py-60">
    <div class="section-heading border-0 mb-3">
        <div class="row align-items-center">
            <div class="col-12 section-heading-left">
                <h2 class="text-black mb-0">{{ __('messages.details.popular_tag') }}</h2>
            </div>
        </div>
    </div>
    <div class="popular-tags">
        @foreach(getPopularTags() as $tag)
                <a href="{{ route('popularTagPage',$tag) }}" class="popular-tag"> {!! $tag !!}</a>
            @if($loop->iteration >= 15)
                @break
            @endif
        @endforeach
    </div>

</section>
@endif
@if(checkAdSpaced('details_side'))
    @if(isset(getAdImageDesktop(\App\Models\AdSpaces::ALL_DETAILS_SIDE)->code))
        <div class="index-top-desktop ad-space-url-desktop">
            {!! getAdImageDesktop(\App\Models\AdSpaces::ALL_DETAILS_SIDE)->code !!}
        </div>
    @elseif ($adRecord = getAdImageMobile(\App\Models\AdSpaces::ALL_DETAILS_SIDE))
    <div class="index-top-desktop mt-5">
        <a href="{{$adRecord->ad_url}}"
           target="_blank">
            <img src="{{asset($adRecord->ad_banner)}}"
                 width="350" class="img-fluid">
        </a>
    </div>
    @endif
@endif

<!-- end popular-tag-section -->
