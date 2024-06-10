@extends('front_new.layouts.app')

@section('content')

    <main class="main-block">
        <div class="main-bg-full"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-6 col-lg-8">
                    <h1 class="with-line line-left">@lang('main.main_text')</h1>
                    <p>@lang('main.main_subtext')</p>
                    <a href="/catalog" class="btn btn-primary">@lang('main.catalog_avto')</a>
                </div>
            </div>
        </div>
    </main>

    <section class="cars">
        <div class="container">
            <div class="global-header text-center">
                <p class="top-title">@lang('main.dostup_avto')</p>
                <p class="title with-line line-center">@lang('main.viberite_luchshii_avto')</p>
                <p class="subtitle">@lang('main.viberite_luchshii_avto_text')</p>
            </div>
            <div data-turbo="false" class="swiper cars-swiper pt-2 pb-5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="car-card">
                            <img src="{{asset('main/img/cars/accent2015.jpg')}}" alt="test">
                            <div class="title">Huyndai Accent - 2015</div>
                            <div class="card-car-chars">
                                <div class="add-li"><i class="material-symbols-outlined">ac_unit</i> @lang('car_once.conditioner')</div>
                                <div class="add-li"><i class="material-symbols-outlined">auto_transmission</i> @lang('car_once.akkp')</div>
                                <div class="add-li"><i class="material-symbols-outlined">groups</i> 5 @lang('car_once.people')</div>
                            </div>
                            <div class="car-card-footer">
                                <div class="cost">
                                    <small>@lang('car_once.base_rent')</small>
                                    <p>14 000 ₸</p>
                                </div>
                                <a href="/accent-2015" class="btn btn-primary">@lang('car_once.rent')</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-card">
                            <img src="{{asset('main/img/cars/accent2023.jpg')}}" alt="test">
                            <div class="title">Huyndai Accent - 2023</div>
                            <div class="card-car-chars">
                                <div class="add-li"><i class="material-symbols-outlined">ac_unit</i> @lang('car_once.conditioner')</div>
                                <div class="add-li"><i class="material-symbols-outlined">auto_transmission</i> @lang('car_once.akkp')</div>
                                <div class="add-li"><i class="material-symbols-outlined">groups</i> 5 @lang('car_once.people')</div>
                            </div>
                            <div class="car-card-footer">
                                <div class="cost">
                                    <small>@lang('car_once.base_rent')</small>
                                    <p>19 000 ₸</p>
                                </div>
                                <a href="/accent-2023" class="btn btn-primary">@lang('car_once.rent')</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-card">
                            <img src="{{asset('main/img/cars/elantra.jpg')}}" alt="test">
                            <div class="title">Huyndai Elantra - 2023</div>
                            <div class="card-car-chars">
                                <div class="add-li"><i class="material-symbols-outlined">ac_unit</i> @lang('car_once.conditioner')</div>
                                <div class="add-li"><i class="material-symbols-outlined">auto_transmission</i> @lang('car_once.akkp')</div>
                                <div class="add-li"><i class="material-symbols-outlined">groups</i> 5 @lang('car_once.people')</div>
                            </div>
                            <div class="car-card-footer">
                                <div class="cost">
                                    <small>@lang('car_once.base_rent')</small>
                                    <p>22 000 ₸</p>
                                </div>
                                <a href="/elantra-2023" class="btn btn-primary">@lang('car_once.rent')</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-card">
                            <img src="{{asset('main/img/cars/camry.jpg')}}" alt="test">
                            <div class="title">Toyota Camry 50-55 - 2016</div>
                            <div class="card-car-chars">
                                <div class="add-li"><i class="material-symbols-outlined">ac_unit</i> @lang('car_once.conditioner')</div>
                                <div class="add-li"><i class="material-symbols-outlined">auto_transmission</i> @lang('car_once.akkp')</div>
                                <div class="add-li"><i class="material-symbols-outlined">groups</i> 5 @lang('car_once.people')</div>
                            </div>
                            <div class="car-card-footer">
                                <div class="cost">
                                    <small>@lang('car_once.base_rent')</small>
                                    <p>21 000 ₸</p>
                                </div>
                                <a href="/camry-2016" class="btn btn-primary">@lang('car_once.rent')</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-card">
                            <img src="{{asset('main/img/cars/sonata.jpg')}}" alt="test">
                            <div class="title">Huyndai Sonata - 2022</div>
                            <div class="card-car-chars">
                                <div class="add-li"><i class="material-symbols-outlined">ac_unit</i> @lang('car_once.conditioner')</div>
                                <div class="add-li"><i class="material-symbols-outlined">auto_transmission</i> @lang('car_once.akkp')</div>
                                <div class="add-li"><i class="material-symbols-outlined">groups</i> 5 @lang('car_once.people')</div>
                            </div>
                            <div class="car-card-footer">
                                <div class="cost">
                                    <small>@lang('car_once.base_rent')</small>
                                    <p>30 000 ₸</p>
                                </div>
                                <a href="/sonata-2022" class="btn btn-primary">@lang('car_once.rent')</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-card">
                            <img src="{{asset('main/img/cars/tucson.jpg')}}" alt="test">
                            <div class="title">Huyndai Tucson - 2023</div>
                            <div class="card-car-chars">
                                <div class="add-li"><i class="material-symbols-outlined">ac_unit</i> @lang('car_once.conditioner')</div>
                                <div class="add-li"><i class="material-symbols-outlined">auto_transmission</i> @lang('car_once.akkp')</div>
                                <div class="add-li"><i class="material-symbols-outlined">groups</i> 5 @lang('car_once.people')</div>
                            </div>
                            <div class="car-card-footer">
                                <div class="cost">
                                    <small>@lang('car_once.base_rent')</small>
                                    <p>32 000 ₸</p>
                                </div>
                                <a href="/tucson-2023" class="btn btn-primary">@lang('car_once.rent')</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-card">
                            <img src="{{asset('main/img/cars/kia-k5.jpg')}}" alt="test">
                            <div class="title">KIA K5 - 2021</div>
                            <div class="card-car-chars">
                                <div class="add-li"><i class="material-symbols-outlined">ac_unit</i> @lang('car_once.conditioner')</div>
                                <div class="add-li"><i class="material-symbols-outlined">auto_transmission</i> @lang('car_once.akkp')</div>
                                <div class="add-li"><i class="material-symbols-outlined">groups</i> 5 @lang('car_once.people')</div>
                            </div>
                            <div class="car-card-footer">
                                <div class="cost">
                                    <small>@lang('car_once.base_rent')</small>
                                    <p>31 000 ₸</p>
                                </div>
                                <a href="/k5-2021" class="btn btn-primary">@lang('car_once.rent')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <section class="section how" id="about">
        <div class="container">
            <div class="global-header text-center">
                <p class="top-title">@lang('main.kak_arendovat')</p>
                <p class="title with-line line-center">@lang('main.arenda_avto_v_dva_scheta')</p>
                <p class="subtitle">@lang('main.arenda_avto_v_dva_scheta_text')</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card-how">
                        <span class="material-symbols-outlined">touch_app</span>
                        <p class="title">@lang('main.udobno')</p>
                        <span class="just-line"></span>
                        <p>@lang('main.udobno_text')</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card-how">
                        <span class="material-symbols-outlined">contact_emergency</span>
                        <p class="title">@lang('main.bistro')</p>
                        <span class="just-line"></span>
                        <p>@lang('main.bistro_text')</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card-how">
                        <span class="material-symbols-outlined">no_crash</span>
                        <p class="title">@lang('main.dostupno')</p>
                        <span class="just-line"></span>
                        <p>@lang('main.dostupno_text')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section about">
        <div class="about-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-6">
                    <div class="global-header">
                        <p class="top-title">@lang('main.o_nas')</p>
                        <p class="title with-line line-left">@lang('main.vigodnyi_prokat_po_vsemu_gorodu')</p>
                    </div>
                    <div class="text">
                        @lang('main.vigodnyi_prokat_po_vsemu_gorodu_text')
                        <br><br>
                        <h4>@lang('main.nasha_missiya')</h4>
                        @lang('main.nasha_missiya_text')
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="react" id="cost">
        <img src="{{asset('main/img/react1.png')}}" alt="react" class="react1">
    </section>
    <section class="section discount">
        <div class="discount-bg"></div>
        <div class="container">
            <div class="global-header text-center text-white">
                <p class="top-title">@lang('main.vigodno_s_nami')</p>
                <p class="title with-line line-center white-line">@lang('main.vigodno_s_nami_text_top') <br>@lang('main.vigodno_s_nami_text_bottom')</p>
            </div>
            <div class="row discount-cards">
                <div class="col-12 col-md-3 mb-md-0 mb-4">
                    <div class="discount-card">
                        <p class="count">10%</p>
                        <p class="title">3 - 5 @lang('main.days2')</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-md-0 mb-4">
                    <div class="discount-card">
                        <p class="count">20%</p>
                        <p class="title">6 - 15 @lang('main.days2')</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-md-0 mb-4">
                    <div class="discount-card">
                        <p class="count">30%</p>
                        <p class="title">16 - 30 @lang('main.days2')</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-md-0 mb-4">
                    <div class="discount-card">
                        <p class="count">40%</p>
                        <p class="title">30+ @lang('main.days2')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="react bg-gray">
        <img src="{{asset('main/img/react2.png')}}" alt="react" class="react2">
    </section>


    <section class="section testimonial" id="testimonial">
        <div class="container">
            <div class="global-header text-center">
                <p class="top-title">@lang('main.otzivi')</p>
                <p class="title with-line line-center">@lang('main.otzivi_text')</p>
            </div>
            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <span class="avatar"><i class="material-symbols-outlined">person</i></span>
                            <div class="name">Владимир Шевелев</div>
                            <div class="text">
                                Благодарю компанию и сотрудников за обслуживание, документы оформили быстро! Машина чистая
                                не битая! Советую всем эту компанию, не пожалеете!
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <span class="avatar"><i class="material-symbols-outlined">person</i></span>
                            <div class="name">Д. Д.</div>
                            <div class="text">
                                Один из самых доступных каршерингов. Приемлемые цены и качественный подход к клиенту. Брал
                                машину в Темиртау, машина в отличном состоянии, цена просто поразила. Рекомендую!
                                Обязательно в будущем буду только к вам обращаться!
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <span class="avatar"><i class="material-symbols-outlined">person</i></span>
                            <div class="name">Амоня Турлыбек</div>
                            <div class="text">
                                Машиналары жақсы және арзан маған ұнады қала сыртына да шығуға болады және условиясы да өте
                                жақсы
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <span class="avatar"><i class="material-symbols-outlined">person</i></span>
                            <div class="name">Дархан Нугуманов</div>
                            <div class="text">
                                Отличный сервис, цены самые низкие в городе, коллектив приветливый, особенно хочу отметить
                                Айман, очень приятная девушка.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <section class="react">
        <img src="{{asset('main/img/react3.png')}}" alt="react" class="react2">
    </section>


    <section class="section faq" id="faq">
        <div class="container">
            <div class="global-header text-center">
                <p class="top-title">FAQ</p>
                <p class="title with-line line-center">@lang('rent_terms.usloviya_arendy')</p>
            </div>


            <div class="row">
                <div class="col-12 col-lg-6 mb-2">
                    <div class="accordion" id="acc1">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="he1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#c1" aria-expanded="true" aria-controls="c1">
                                    @lang('rent_terms.title_trem1')
                                </button>
                            </h2>
                            <div id="c1" class="accordion-collapse collapse show" aria-labelledby="he1"
                                 data-bs-parent="#acc1">
                                <div class="accordion-body">
                                    @lang('rent_terms.text_trem1_1')
                                    <br>
                                    @lang('rent_terms.text_trem1_2')
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="he2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#c2" aria-expanded="true" aria-controls="c2">
                                    @lang('rent_terms.title_trem2')
                                </button>
                            </h2>
                            <div id="c2" class="accordion-collapse collapse" aria-labelledby="he2"
                                 data-bs-parent="#acc1">
                                <div class="accordion-body">
                                    @lang('rent_terms.text_trem2_1')
                                    <br>
                                    @lang('rent_terms.text_trem2_2')
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="he3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#c3" aria-expanded="true" aria-controls="c3">
                                    @lang('rent_terms.title_trem3')
                                </button>
                            </h2>
                            <div id="c3" class="accordion-collapse collapse" aria-labelledby="he3"
                                 data-bs-parent="#acc1">
                                <div class="accordion-body">
                                    @lang('rent_terms.text_trem3_1')
                                    <br>
                                    @lang('rent_terms.text_trem3_2')
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="he4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#c4" aria-expanded="true" aria-controls="c4">
                                    @lang('rent_terms.title_trem4')
                                </button>
                            </h2>
                            <div id="c4" class="accordion-collapse collapse" aria-labelledby="he4"
                                 data-bs-parent="#acc1">
                                <div class="accordion-body">
                                    @lang('rent_terms.text_trem4_1')
                                    <br>
                                    @lang('rent_terms.text_trem4_2')
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="he5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#c5" aria-expanded="true" aria-controls="c5">
                                    @lang('rent_terms.title_trem5')
                                </button>
                            </h2>
                            <div id="c5" class="accordion-collapse collapse" aria-labelledby="he5"
                                 data-bs-parent="#acc1">
                                <div class="accordion-body">
                                    @lang('rent_terms.text_trem5_1')
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="he6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#c6" aria-expanded="true" aria-controls="c6">
                                    @lang('rent_terms.title_trem6')
                                </button>
                            </h2>
                            <div id="c6" class="accordion-collapse collapse" aria-labelledby="he6"
                                 data-bs-parent="#acc1">
                                <div class="accordion-body">
                                    @lang('rent_terms.text_trem6_1')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mb-2">
                    <div class="accordion" id="acc2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="he7">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#c7" aria-expanded="true" aria-controls="c7">
                                    @lang('rent_terms.title_trem7')
                                </button>
                            </h2>
                            <div id="c7" class="accordion-collapse collapse show" aria-labelledby="he7"
                                 data-bs-parent="#acc2">
                                <div class="accordion-body">
                                    @lang('rent_terms.text_trem7_1')
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="he8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#c8" aria-expanded="true" aria-controls="c8">
                                    @lang('rent_terms.title_trem8')
                                </button>
                            </h2>
                            <div id="c8" class="accordion-collapse collapse" aria-labelledby="he8"
                                 data-bs-parent="#acc2">
                                <div class="accordion-body">
                                    @lang('rent_terms.text_trem8_1')
                                    <br>
                                    @lang('rent_terms.text_trem8_2')
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="he9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#c9" aria-expanded="true" aria-controls="c9">
                                    @lang('rent_terms.title_trem9')
                                </button>
                            </h2>
                            <div id="c9" class="accordion-collapse collapse" aria-labelledby="he9"
                                 data-bs-parent="#acc2">
                                <div class="accordion-body">
                                    @lang('rent_terms.text_trem9_1')
                                    <br>
                                    @lang('rent_terms.text_trem9_2')
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="he10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#c10" aria-expanded="true" aria-controls="c10">
                                    @lang('rent_terms.title_trem10')
                                </button>
                            </h2>
                            <div id="c10" class="accordion-collapse collapse" aria-labelledby="he10"
                                 data-bs-parent="#acc2">
                                <div class="accordion-body">
                                    @lang('rent_terms.text_trem10_1')
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="he11">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#c11" aria-expanded="true" aria-controls="c11">
                                    @lang('rent_terms.title_trem11')
                                </button>
                            </h2>
                            <div id="c11" class="accordion-collapse collapse" aria-labelledby="he11"
                                 data-bs-parent="#acc2">
                                <div class="accordion-body">
                                    @lang('rent_terms.text_trem11_1')
                                    <ul>
                                        <li>@lang('rent_terms.text_trem11_2')</li>
                                        <li>@lang('rent_terms.text_trem11_3')</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
