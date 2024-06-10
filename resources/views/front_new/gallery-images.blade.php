@extends('front_new.layouts.app')
@section('title')
    {{__('messages.post.gallery') }}
@endsection

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    @if(!empty($allSubCategory->first()))
    <section class="page-header mb-5">
        <div class="container">
            <div class="page-header-body breadcrumb-header-body">
                <div class="page-title">{!! $allSubCategory->first()->album->name !!}</div>
            </div>
        </div>
    </section>
    @endif
    <main class="main">
        <div class="gallery-details-page">
            <div class="container">
                @if(!empty($allSubCategory))
                    <div class="filters text-center mb-4">
                        <ul class="nav">
                            <li class="nav-item">
                                <button class="fil-cat btn filter animation nav-category active text-black" id="filter-all" href="javascript:void(0)"
                                        data-rel="all">{{__('messages.all')}}
                                </button>
                            </li>
                            @if(count($allSubCategory) > 1)
                                @foreach($allSubCategory as $category)
                                    @if($category->gallery->count())
                                        <li class="nav-item">
                                            <button class="btn fil-cat filter animation nav-category text-black"
                                                    href="javascript:void(0)" data-rel="{{str_replace(' ','-',$category->name)}}"
                                                    data-filter=".{{str_replace(' ','-',$category->name)}}">
                                                {!! $category->name !!}
                                            </button>
                                        </li>
                                    @endif
                                @endforeach
                            @else
                                <li class="nav-item">
                                    <button class="btn fil-cat filter animation nav-category text-black" href="javascript:void(0)"
                                            data-rel="{{str_replace(' ','-',$allSubCategory->first()->name)}}"
                                            data-filter=".{{str_replace(' ','-',$allSubCategory->first()->name)}}">
                                        {!! $allSubCategory->first()->name !!}
                                    </button>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div id="portfolio" class="gallery-images row column-count">
                            @if(!empty($galleryImages))
                                @foreach($galleryImages as $galleryImage)
                                    @foreach($galleryImage->gallery_image as $gallery)

                                        <div class="tile scale-anm col-12 col-lg-3 col-md-4 mb-4" data-cat="{{str_replace(' ','-',$galleryImage->category->name)}}">
                                            <a href="{{$gallery}}" data-fancybox="gallery" data-caption="Caption #1" class="w-100">
                                                <figure class="mb-0">
                                                    {{--                                                    <img data-src="{{$gallery}}" alt="" src="{{ asset('front_web/images/bg-process.png') }}" class="lazy">--}}
                                                    <img src="{{$gallery}}" alt="" class="img-fluid">
                                                </figure>
                                            </a>
                                        </div>
                                    @endforeach
                                @endforeach
                            @endif
                    </div>

                @endif
            </div>
        </div>
    </main>
    <script>
        Fancybox.bind("[data-fancybox]");
        document.addEventListener("DOMContentLoaded", function() {
            const filterButtons = document.querySelectorAll('.filter');

            filterButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    // Удаляем активный класс у всех кнопок
                    filterButtons.forEach(function(btn) {
                        btn.classList.remove('active');
                    });

                    // Добавляем активный класс к нажатой кнопке
                    button.classList.add('active');

                    const category = button.getAttribute('data-rel');

                    // Скрыть все картинки
                    const images = document.querySelectorAll('.tile');
                    images.forEach(function(image) {
                        image.style.display = 'none';
                    });

                    // Отобразить только картинки выбранной категории
                    const filteredImages = document.querySelectorAll('[data-cat="' + category + '"]');
                    filteredImages.forEach(function(image) {
                        image.style.display = 'block';
                    });
                    if(category === 'all'){
                        images.forEach(function(image) {
                            image.style.display = 'block';
                        });
                    }
                });
            });
        });
    </script>
@endsection
