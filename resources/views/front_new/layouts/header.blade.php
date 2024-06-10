<nav class="navbar navbar-index navbar-expand-lg navbar-light bg-light main @if(app()->getLocale() == 'kz') kz @endif">
    <div class="container py-1">
        <a class="navbar-brand" href="/"><img src="{{asset('main/img/logo.png')}}" alt="logo"></a>
     <div class="d-flex align-items-center">
         @unless(
       Route::currentRouteName() == 'front.home' ||
       Route::currentRouteName() == 'front.catalog' ||
       Route::currentRouteName() == 'front.accent2015' ||
       Route::currentRouteName() == 'front.accent2023' ||
       Route::currentRouteName() == 'front.elantra2023' ||
       Route::currentRouteName() == 'front.camry2016' ||
       Route::currentRouteName() == 'front.sonata2022' ||
       Route::currentRouteName() == 'front.tucson2023' ||
       Route::currentRouteName() == 'front.k52021'
   )
         <span class="blog-menu blog-toggler"><i class="fa-solid fa-magnifying-glass"></i></span>
         @endunless
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
     </div>
        <div class="nav-item dropdown langs langs-pc">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
               aria-expanded="false">
                @if(app()->getLocale() == 'ru')
                    RU <img src="{{asset('main/img/langs/ru.png')}}" alt="ru">
                @elseif(app()->getLocale() == 'kz')
                    KZ <img src="{{asset('main/img/langs/kz.png')}}" alt="kz">
                @elseif(app()->getLocale() == 'en')
                    EN <img src="{{asset('main/img/langs/en.png')}}" alt="en">
                @endif
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                    @if(app()->getLocale() !== 'ru')
                        <a class="lang-item selectLanguage" href="javascript:void(0)" data-id="6">
                            <span>RU</span><img src="{{asset('main/img/langs/ru.png')}}" alt="ru">
                        </a>
                    @endif
                </li>
                <li>
                    @if(app()->getLocale() !== 'kz')
                        <a class="lang-item selectLanguage" href="javascript:void(0)" data-id="7">
                            <span>KZ</span><img src="{{asset('main/img/langs/kz.png')}}" alt="kz">
                        </a>
                    @endif
                </li>
                <li>
                    @if(app()->getLocale() !== 'en')
                        <a class="lang-item selectLanguage" href="javascript:void(0)" data-id="1">
                            <span>EN</span><img src="{{asset('main/img/langs/en.png')}}" alt="en">
                        </a>
                    @endif
                </li>

            </ul>
        </div>

        <a class="header-phone" href="tel:87763504141"><i class="fa fa-phone"></i> +7 776 350 41 41</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">@lang('menu.main')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#about">@lang('menu.about')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#cost">@lang('menu.discount')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#testimonial">@lang('menu.testimonial')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#faq">@lang('menu.terms')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/p">@lang('menu.blog')</a>
                </li>
            </ul>
            <hr>
            <ul class="langs-m">
                <li><a data-id="6" class="lang-item selectLanguage @if(app()->getLocale() == 'ru') active @endif"
                       @if(app()->getLocale() !== 'ru') href="javascript:void(0)" @endif><span>RU</span><img
                            src="{{asset('main/img/langs/ru.png')}}" alt="ru"></a></li>
                <li><a data-id="7" class="lang-item selectLanguage @if(app()->getLocale() == 'kz') active @endif"
                       @if(app()->getLocale() !== 'kz') href="javascript:void(0)" @endif><span>KZ</span><img
                            src="{{asset('main/img/langs/kz.png')}}" alt="en"></a></li>
                <li><a data-id="1" class="lang-item selectLanguage @if(app()->getLocale() == 'en') active @endif"
                       @if(app()->getLocale() !== 'en') href="javascript:void(0)" @endif><span>EN</span><img
                            src="{{asset('main/img/langs/en.png')}}" alt="en"></a></li>
            </ul>
            <hr>
            <a href="/catalog" class="btn btn-primary rental">@lang('menu.catalog')</a>
        </div>
    </div>
    @unless(
        Route::currentRouteName() == 'front.home' ||
        Route::currentRouteName() == 'front.catalog' ||
        Route::currentRouteName() == 'front.accent2015' ||
        Route::currentRouteName() == 'front.accent2023' ||
        Route::currentRouteName() == 'front.elantra2023' ||
        Route::currentRouteName() == 'front.camry2016' ||
        Route::currentRouteName() == 'front.sonata2022' ||
        Route::currentRouteName() == 'front.tucson2023' ||
        Route::currentRouteName() == 'front.k52021'
    )
    <header class="nav-blog header">
        <div class="container">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() == 'allPosts') active @endif" aria-current="page"
                                href="/p">@lang('blog.all_articles')</a>
                            </li>
                                @php
                                    $nav = getNavigationDetails();
                                @endphp
                                @if($nav['navigationsCount'] >= 0)
                                    @foreach($nav['navigations'] as $key => $navigation)
                                        @php
                                            $isSubNav = count($nav['navigationsTakeData'][$navigation->id]) > 0;
                                            $subNavLangs = $nav['navigationsTakeData'][$navigation->id] ;
                                            $menuName = $navigation->navigationable->name ? $navigation->navigationable->name :                                                                      $navigation->navigationable->title;
                                            $langId = false;
                                            foreach($subNavLangs as $subNavLang) {
                                                if($langId){
                                                    continue;
                                                }
                                                if($subNavLang['navigationable_type'] == \App\Models\SubCategory::class) {
                                                    $langId = $subNavLang->navigationable()->where('lang_id',getFrontSelectLanguage())->exists();
                                                }
                                            }
                                        @endphp
                                        <li class="nav-item">
                                            <a class="nav-link   {{ $menuName == ucfirst(last(request()->segments()))
                                                ? 'active': '' }}" aria-current="page"
                                               @if(($navigation->navigationable->link) !== null)
                                                   @if(getNavUrl($navigation->navigationable->link) == 'http://#' || getNavUrl($navigation->navigationable->link) == 'http://-')
                                               href="#"
                                               @else
                                               href="{{getNavUrl($navigation->navigationable->link)}}"
                                                   @endif
                                               @else
                                               href="{{route('categoryPage',$navigation->navigationable->slug)}}"
                                                @endif
                                            >{!! ($navigation->navigationable->name) ? $navigation->navigationable->name :                                                                      $navigation->navigationable->title !!}
                                                @if($isSubNav)
                                                    <i class="fa-solid fa-angle-down icon ms-1 fs-12"></i>
                                                @endif
                                            </a>
                                            @if($isSubNav)
                                                <ul class="dropdown-nav">
                                                    @php
                                                        $path = basename(Request::path());
                                                    @endphp
                                                    @foreach($nav['navigationsTakeData'] as $key => $navSub)
                                                        @if($key == $navigation->id)
                                                            @foreach($navSub as $sub)
                                                                @if($sub->navigationable_type == \App\Models\SubCategory::class)
                                                                    @if( $sub->navigationable()->exists())
                                                                        <li>
                                                                            <a class=" {{ !empty($path) && $path == $sub->navigationable->slug ? 'active' : '' }}"
                                                                               @if(($sub->navigationable->link) !== null)
                                                                               href="{{getNavUrl($sub->navigationable->link)}}"
                                                                               @else
                                                                               href="{{route('categoryPage',                                                                                                                ['category'=>$navigation->navigationable->slug,                                                                                               'slug'=>$sub->navigationable->slug])}}"
                                                                                @endif>{!! ($sub->navigationable->name) ?                                                                                                                 $sub->navigationable->name :
                                                                                          $sub->navigationable->title !!}
                                                                            </a>
                                                                        </li>
                                                                    @endif
                                                                @else
                                                                    <li>
                                                                        <a class=" {{ !empty($path) && $path == $sub->navigationable->slug ? 'active' : '' }}"
                                                                           @if(($sub->navigationable->link) !== null)
                                                                           href="{{getNavUrl($sub->navigationable->link)}}"
                                                                           @else
                                                                           href="{{route('categoryPage',                                                                                                                ['category'=>$navigation->navigationable->slug,                                                                                               'slug'=>$sub->navigationable->slug])}}"
                                                                            @endif
                                                                        >{!! ($sub->navigationable->name) ?
                                                                                    $sub->navigationable->name :
                                                                                    $sub->navigationable->title !!}
                                                                        </a>
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                @endif

                                @if($nav['navigationsCount'] >= 6)
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" aria-current="page" href="#">
                                            <i class="fa-solid fa-ellipsis "></i>
                                        </a>
                                        <ul class="dropdown-nav">
                                            @foreach($nav['navigationsSkipData'] as $key => $navigation)
                                                @php
                                                    $isSubNav = count($nav['navigationsSkipItem'][$navigation->id]) > 0 ;
                                                    $subNavLangs = $nav['navigationsSkipItem'][$navigation->id] ;
                                                     $menuName = $navigation->navigationable->name ? $navigation->navigationable->name :                                                                      $navigation->navigationable->title;
                                                     $langId = false;
                                                     foreach($subNavLangs as $subNavLang) {
                                                         if($langId){
                                                             continue;
                                                         }
                                                         if($subNavLang['navigationable_type'] == \App\Models\SubCategory::class) {
                                                             $langId = $subNavLang->navigationable()->where('lang_id',
                                                             getFrontSelectLanguage())->exists();
                                                         }
                                                     }
                                                @endphp
                                                <li class="dropdown-sub-nav">
                                                    <a href="{{ $navigation->navigationable_type == \App\Models\Menu::class ? $navigation->navigationable->link : route('categoryPage',$navigation->navigationable->slug)}}"
                                                       class=" d-flex justify-content-between {{ $menuName == ucfirst(last(request()->segments())) ? 'active': '' }}">
                                                        {!! ($navigation->navigationable->name) ?
                                                                    $navigation->navigationable->name :
                                                                    $navigation->navigationable->title !!}
                                                        @if(($navigation->navigationable_type == \App\Models\Menu::class) && $isSubNav)
                                                            <i class="fa-solid fa-angle-right fs-12 "></i>
                                                        @endif
                                                    </a>
                                                    @if($langId || $navigation->navigationable_type == \App\Models\Menu::class )
                                                        @if($isSubNav)
                                                            <ul class="dropdown-sub-list ps-0">
                                                                @foreach($nav['navigationsSkipItem'] as $key => $navSub)
                                                                    @if($key == $navigation->id)
                                                                        @foreach($navSub as $sub)
                                                                            @if($sub->navigationable_type == \App\Models\SubCategory::class)
                                                                                @if( $sub->navigationable()->where('lang_id',
                                                                                                    getFrontSelectLanguage())->exists())
                                                                                    <li>
                                                                                        <a class=""
                                                                                           @if(($sub->navigationable->link) !== null)
                                                                                           href="{{getNavUrl($sub->navigationable->link)}}"
                                                                                           @else
                                                                                           href="{{route('categoryPage',                                                                                                                ['category'=>$navigation->navigationable->slug,                                                                                               'slug'=>$sub->navigationable->slug])}}"
                                                                                            @endif
                                                                                        >{!! ($sub->navigationable->name) ?                                                                                                                 $sub->navigationable->name :
                                                                                                  $sub->navigationable->title !!}
                                                                                        </a>
                                                                                    </li>
                                                                                @endif
                                                                            @else
                                                                                <li>
                                                                                    <a class=""
                                                                                       @if(($sub->navigationable->link) !== null)
                                                                                       href="{{getNavUrl($sub->navigationable->link)}}"
                                                                                       @else
                                                                                       href="{{route('categoryPage',                                                                                                                ['category'=>$navigation->navigationable->slug,                                                                                               'slug'=>$sub->navigationable->slug])}}"
                                                                                        @endif
                                                                                    >{!! ($sub->navigationable->name) ?
                                                                                            $sub->navigationable->name :
                                                                                            $sub->navigationable->title !!}
                                                                                    </a>
                                                                                </li>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    @endif
                                                </li>
                                            @endforeach
                                            <li class="">
                                <a class=" d-flex justify-content-between {{ 'Contact' == ucfirst(last(request()->segments())) ? 'active': '' }}"
                                   href="{{route('contact.index')}}">{{ __('messages.details.contact_us') }}</a>
                            </li>
                            <li class="{{ $nav['pages']->count() > 0 ? 'dropdown-sub-nav' : ''}}">
                                @if($nav['pages']->count() > 0)
                                    <a href="#"
                                       class=" d-flex justify-content-between {{ 'Page' == ucfirst(last(request()->segments())) ? 'active': '' }}">{{ __('messages.pages') }}
                                        <i class="fa-solid fa-angle-right fs-12 "></i>
                                    </a>
                                    <ul class="dropdown-sub-list ps-0">
                                        @foreach($nav['pages'] as $page)
                                            <li>
                                                <a class=""
                                                   href="{{route('pages.show-page-slug', $page->slug)}}">
                                                    {!!  $page->name !!}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        </ul>
                    </li>
                @endif
                @if($nav['navigationsCount'] <= 5)
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link  {{ 'Contact' == ucfirst(last(request()->segments())) ? 'active': '' }}"--}}
{{--                           href="{{route('contact.index')}}">{{ __('messages.details.contact_us') }}</a>--}}
{{--                    </li>--}}
                    <li class="nav-item dropdown">
                        @if($nav['pages']->count() > 0)
                            <a class="nav-link  {{ 'Pages' == ucfirst(last(request()->segments())) ? 'active': '' }}"
                               href="javascript:void(0)">{{ __('blog.more') }}
                                <i class="fa-solid fa-angle-down icon ms-1 fs-12"></i>
                            </a>
                        @endif
                        @if($nav['pages']->count() > 0)
                            <ul class="dropdown-nav ps-0">
                                @foreach($nav['pages'] as $page)
                                    <li>
                                        <a class=""
                                           href="{{route('pages.show-page-slug', $page->slug)}}">
                                            {!! $page->name !!}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link  {{ ((Request::is('g')) || (Request::is('g/*'))) ? 'active' : '' }}"
                       href="{{route('galleryPage')}}">{{ __('messages.details.gallery') }}</a>
                </li>
                <!--
                <li>
                    <button class="dropdown-toggle border-0 bg-transparent position-relative" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <a href="javascript:void(0)"><i class="fa-solid fa-magnifying-glass fs-20 "></i></a>
                    </button>
                    <div class="dropdown-menu">
                        <form action="{{ route('allPosts') }}" class="form search-form-box search-input">
                            <div class="form-group border-0 search-input">
                                <input type="text" name="search" id="search" placeholder="{{__('messages.search')}}"
                                       class="form-control bg-light rt-search-control custom-input-control search-input mb-0"
                                       value="">
                                <button type="submit" class="search-submit custom-submit search-input">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </li>
                -->
            </ul>
        </div>
    </header>
    @endunless
</nav>
