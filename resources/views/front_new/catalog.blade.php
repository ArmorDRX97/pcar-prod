@extends('front_new.layouts.app')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="page-header-body">
                <div class="page-title">@lang('main.catalog_avto')</div>
            </div>
        </div>
    </section>

    <section class="section catalog">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="card card-catalog-left">
                        <div class="card-body">
                            <p class="title">@lang('catalog.vse_predlojeniya_vkl')</p>
                            <ul>
                                <li><i class="material-symbols-outlined">done</i>
                                    <span>@lang('catalog.pr1')</span></li>
                                <li><i class="material-symbols-outlined">done</i>
                                    <span>@lang('catalog.pr2')</span></li>
                                <li><i class="material-symbols-outlined">done</i> <span>@lang('catalog.pr3')</span></li>
                                <li><i class="material-symbols-outlined">done</i> <span>@lang('catalog.pr4')</span></li>
                                <li><i class="material-symbols-outlined">done</i> <span>@lang('catalog.pr5')</span></li>
                                <li><i class="material-symbols-outlined">done</i>
                                    <span>@lang('catalog.pr6')</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="card card-catalog-left2 mt-4">
                        <div class="card-body">
                            <p class="title">@lang('catalog.dr_usloviya')</p>
                            <p class="cr-item">@lang('catalog.dr_usl1')</p>
                            <p class="cr-item">@lang('catalog.dr_usl2')</p>
                            <p class="title m-0">@lang('catalog.pr_usloviya')</p>
                            <a href="/#faq" target="_blank" class="btn-link">@lang('catalog.usl_rent_avto')</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-4">
                            <div class="car-card">
                                <img src="{{asset('main/img/cars/accent2015.jpg')}}" alt="test">
                                <div class="title">Huyndai Accent - 2015</div>
                                <div class="card-car-chars">
                                    <div class="add-li"><i class="material-symbols-outlined">ac_unit</i> @lang('car_once.conditioner')
                                    </div>
                                    <div class="add-li"><i class="material-symbols-outlined">auto_transmission</i> @lang('car_once.akkp')
                                    </div>
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
                        <div class="col-12 col-md-6 mb-4">
                            <div class="car-card">
                                <img src="{{asset('main/img/cars/accent2023.jpg')}}" alt="test">
                                <div class="title">Huyndai Accent - 2023</div>
                                <div class="card-car-chars">
                                    <div class="add-li"><i class="material-symbols-outlined">ac_unit</i> @lang('car_once.conditioner')
                                    </div>
                                    <div class="add-li"><i class="material-symbols-outlined">auto_transmission</i> @lang('car_once.akkp')
                                    </div>
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
                        <div class="col-12 col-md-6 mb-4">
                            <div class="car-card">
                                <img src="{{asset('main/img/cars/elantra.jpg')}}" alt="test">
                                <div class="title">Huyndai Elantra - 2023</div>
                                <div class="card-car-chars">
                                    <div class="add-li"><i class="material-symbols-outlined">ac_unit</i> @lang('car_once.conditioner')
                                    </div>
                                    <div class="add-li"><i class="material-symbols-outlined">auto_transmission</i> @lang('car_once.akkp')
                                    </div>
                                    <div class="add-li"><i class="material-symbols-outlined">groups</i> 5 @lang('car_once.people')</div>
                                </div>
                                <div class="car-card-footer">
                                    <div class="cost">
                                        <small>@lang('car_once.base_rent')</small>
                                        <p>21 000 ₸</p>
                                    </div>
                                    <a href="/elantra-2023" class="btn btn-primary">@lang('car_once.rent')</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-4">
                            <div class="car-card">
                                <img src="{{asset('main/img/cars/camry.jpg')}}" alt="test">
                                <div class="title">Toyota Camry 55 - 2016</div>
                                <div class="card-car-chars">
                                    <div class="add-li"><i class="material-symbols-outlined">ac_unit</i> @lang('car_once.conditioner')
                                    </div>
                                    <div class="add-li"><i class="material-symbols-outlined">auto_transmission</i> @lang('car_once.akkp')
                                    </div>
                                    <div class="add-li"><i class="material-symbols-outlined">groups</i> 5 @lang('car_once.people')</div>
                                </div>
                                <div class="car-card-footer">
                                    <div class="cost">
                                        <small>@lang('car_once.base_rent')</small>
                                        <p>22 000 ₸</p>
                                    </div>
                                    <a href="/camry-2016" class="btn btn-primary">@lang('car_once.rent')</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-4">
                            <div class="car-card">
                                <img src="{{asset('main/img/cars/sonata.jpg')}}" alt="test">
                                <div class="title">Huyndai Sonata - 2022</div>
                                <div class="card-car-chars">
                                    <div class="add-li"><i class="material-symbols-outlined">ac_unit</i> @lang('car_once.conditioner')
                                    </div>
                                    <div class="add-li"><i class="material-symbols-outlined">auto_transmission</i> @lang('car_once.akkp')
                                    </div>
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
                        <div class="col-12 col-md-6 mb-4">
                            <div class="car-card">
                                <img src="{{asset('main/img/cars/tucson.jpg')}}" alt="test">
                                <div class="title">Huyndai Tucson - 2023</div>
                                <div class="card-car-chars">
                                    <div class="add-li"><i class="material-symbols-outlined">ac_unit</i> @lang('car_once.conditioner')
                                    </div>
                                    <div class="add-li"><i class="material-symbols-outlined">auto_transmission</i> @lang('car_once.akkp')
                                    </div>
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
                        <div class="col-12 col-md-6 mb-4">
                            <div class="car-card">
                                <img src="{{asset('main/img/cars/kia-k5.jpg')}}" alt="test">
                                <div class="title">KIA K5 - 2021</div>
                                <div class="card-car-chars">
                                    <div class="add-li"><i class="material-symbols-outlined">ac_unit</i> @lang('car_once.conditioner')
                                    </div>
                                    <div class="add-li"><i class="material-symbols-outlined">auto_transmission</i> @lang('car_once.akkp')
                                    </div>
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
            </div>
        </div>
    </section>
@endsection
