@extends('front_new.layouts.app')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="page-header-body">
                <div class="page-title">@lang('car_once.bron_avto')</div>
                <a href="/catalog" class="btn btn-light">@lang('car_once.return_catalog')</a>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">
            <div class="row flex-md-row-reverse" id="form-first">
                <div class="col-12 col-md-3">
                    <div class="card mb-4">
                        <div class="card-img">
                            <img src="{{asset('main/img/cars/camry.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h1 class="title" id="car-name">Toyota Camry 50-55 - 2016</h1>
                            <div class="subtitle">@lang('car_once.ili_analog')</div>
                            <div class="title-small mt-4 mb-2">@lang('car_once.osobennosti_avto')</div>
                            <div class="card-car-chars">
                                <div class="add-li"><i class="material-symbols-outlined">ac_unit</i> @lang('car_once.conditioner')</div>
                                <div class="add-li"><i class="material-symbols-outlined">auto_transmission</i> @lang('car_once.akkp')
                                </div>
                                <div class="add-li"><i class="material-symbols-outlined">groups</i> 5 @lang('car_once.people')</div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="title-small mb-3">@lang('car_once.base_rent')</div>
                            <div class="li-bl">
                                <div class="li-sp">@lang('car_once.bez_skidki')</div>
                                <div class="li-sp" id="base-without">21 000 ₸</div>
                            </div>
                            <div class="li-bl">
                                <div class="li-sp">@lang('car_once.so_skidki')</div>
                                <div class="li-sp" id="base-with">21 000 ₸</div>
                            </div>
                            <hr>
                            <div class="title-small mb-3">@lang('car_once.obj_cena')</div>
                            <div class="li-bl">
                                <div class="li-sp">@lang('car_once.rent_bez_skidki')</div>
                                <div class="li-sp" id="summ-without">0 ₸</div>
                            </div>
                            <div class="li-bl">
                                <div class="li-sp">@lang('car_once.rent_so_skidki')</div>
                                <div class="li-sp" id="sunn-with">0 ₸</div>
                            </div>
                            <hr>
                            <div class="li-bl">
                                <div class="title">@lang('car_once.total')</div>
                                <div class="title" id="total">0 ₸</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <form method="post">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label for="days" class="form-label">@lang('car_once.form1') <b>*</b></label>
                                            <input type="number" name="days" class="form-control" id="days" value="7" required>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-text" style="margin-top: 33px;">
                                                @lang('car_once.chem_bolshe')
                                                <div class="popup-custom">
                                                    <span>@lang('car_once.usl_skidok') <i class="material-symbols-outlined">help</i></span>
                                                    <div class="popup-block">
                                                        <p>@lang('car_once.usl_skidok_text1')</p>
                                                        <ul>
                                                            <li><b>1-2 @lang('main.days1'):</b> 21 000 ₸</li>
                                                            <li><b>3-5 @lang('main.days2'):</b> 19 000 ₸</li>
                                                            <li><b>6-15 @lang('main.days2'):</b> 17 000 ₸</li>
                                                            <li><b>16-30 @lang('main.days2'):</b> 16 000 ₸</li>
                                                            <li><b>30+ @lang('main.days2'):</b> 15 000 ₸</li>
                                                        </ul>
                                                        <p>@lang('car_once.usl_skidok_text2')</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">@lang('car_once.form2') <b>*</b></label>
                                    <input placeholder="@lang('car_once.plh1')" type="text" class="form-control"
                                           name="pick-up-address" id="pick-up-address" required>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <input type="date" class="form-control" id="pick-up-date" name="pick-up-date" required>
                                        </div>
                                        <div class="col-6">
                                            <input type="time" class="form-control" name="pick-up-time" id="pick-up-time" value="09:00" required>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="mb-3">
                                    <label class="form-label">@lang('car_once.form3') <b>*</b></label>
                                    <input placeholder="@lang('car_once.plh2')" type="text" class="form-control"
                                           name="return-address" id="return-address" required>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <input type="date" class="form-control" id="return-date" name="return-date"
                                                   disabled required>
                                        </div>
                                        <div class="col-6">
                                            <input type="time" class="form-control" id="return-time" name="return-time" value="09:00" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="fiz-comp" id="fiz" value="fiz"
                                               checked>
                                        <label class="form-check-label" for="fiz">@lang('car_once.form4_1')</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="fiz-comp" id="comp" value="comp" required>
                                        <label class="form-check-label" for="comp">@lang('car_once.form4_2')</label>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">@lang('car_once.form5') <b>*</b></label>
                                            <input type="text" class="form-control" name="name" id="name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">@lang('car_once.form7') <b>*</b></label>
                                            <input type="email" class="form-control" name="email" id="email" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="mb-3">
                                            <label for="surname" class="form-label">@lang('car_once.form6') <b>*</b></label>
                                            <input type="text" class="form-control" name="surname" id="surname" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">@lang('car_once.form8') <b>*</b></label>
                                            <input type="text" class="form-control" name="phone" id="phone" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="check1" required>
                                    <label class="form-check-label" for="check1">@lang('car_once.form9')
                                        <b>*</b></label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="check2" required>
                                    <label class="form-check-label" for="check2">@lang('car_once.form10')
                                        <b>*</b></label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 lst-btn">
                            <button type="submit" class="btn btn-primary btn-lg">@lang('car_once.rent_now')</button>
                            <p class="add-text2">@lang('car_once.rent_now_text')</p>
                        </div>
                    </form>
                </div>
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
                                <li><i class="material-symbols-outlined">done</i> <span>@lang('catalog.pr5') 50 000 ₸</span></li>
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

                    <div class="card mt-4">
                        <div class="card-body">
                            <div class="muted-card-text">
                                @lang('car_once.addi1')
                                <br><br>
                                @lang('car_once.addi2')
                                <br><br>
                                @lang('car_once.addi3')
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row form-done" id="form-done" style="display: none;">
                <div class="col-12 col-md-6 offset-md-3">
                    <div class="text-center mb-4">
                        <img src="{{asset('main/img/checked.png')}}" alt="checked" class="form-done-checked">
                        <h5 class="form-done-title">@lang('car_once.vi_uspeshno_bron')</h5>
                        <p class="form-done-subtitle">@lang('car_once.v_blishaishee_vremya')</p>
                        <div class="form-done-danger">
                            @lang('car_once.elsi_v_techenii_24_chasov')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="car-more">
        <div class="container">
            <div class="global-header text-center">
                <p class="top-title">@lang('car_once.dr_variants')</p>
                <p class="title with-line line-center">@lang('car_once.vam_takzhe_mog')</p>
            </div>
            <div class="swiper cars-swiper-more pt-2 pb-5">
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


    <script>
        document.addEventListener('DOMContentLoaded', function () {

            function formatNumberWithSpaces(number) {
            return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        }

            const daysInput = document.getElementById('days');
            const returnDateInput = document.getElementById('return-date');
            const pickUpDateInput = document.getElementById('pick-up-date');
            const baseWith = document.getElementById('base-with');
            const summWithout = document.getElementById('summ-without');
            const summWith = document.getElementById('sunn-with');
            const total = document.getElementById('total');

            const todayDay = new Date().toISOString().split('T')[0];
            pickUpDateInput.setAttribute('min', todayDay);
            function calculateReturnDate() {
                const days = parseInt(daysInput.value);
                if (!isNaN(days)) {
                    const currentDate = new Date(pickUpDateInput.value);
                    returnDateInput.valueAsDate = new Date(currentDate.setDate(currentDate.getDate() + days));
                }
            }

            function calculateOther(days) {
                let discountRate = 21000;

                if (days >= 1 && days <= 2) {
                    discountRate = 21000;
                } else if (days >= 3 && days <= 5) {
                    discountRate = 19000;
                } else if (days >= 6 && days <= 15) {
                    discountRate = 17000;
                } else if (days >= 16 && days <= 30) {
                    discountRate = 16000;
                } else if (days > 30) {
                    discountRate = 166000;
                }

                const baseRate = 21000;
                const totalWithoutDiscount = baseRate * days;
                const totalWithDiscount = discountRate * days;

                baseWith.textContent = formatNumberWithSpaces(discountRate) + ' ₸';
                summWithout.textContent = formatNumberWithSpaces(totalWithoutDiscount) + ' ₸';
                summWith.textContent = formatNumberWithSpaces(totalWithDiscount) + ' ₸';
                total.textContent = formatNumberWithSpaces(totalWithDiscount) + ' ₸';
                if (isNaN(days) || days < 1) {
                    summWithout.textContent = 0 + ' ₸';
                    summWith.textContent = 0 + ' ₸';
                    total.textContent = 0 + ' ₸';
                }
            }

            calculateOther(parseInt(daysInput.value));

            pickUpDateInput.valueAsDate = new Date();
            calculateReturnDate();
            returnDateInput.disabled = true;

            pickUpDateInput.addEventListener('input', calculateReturnDate);
            daysInput.addEventListener('input', function () {
                let days = parseInt(this.value);
                calculateOther(days);
   calculateReturnDate();
            });


            const form = document.querySelector('form');

            const phoneInput = document.getElementById('phone');
            Inputmask({ mask: '+7(999)999-99-99' }).mask(phoneInput);
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                const requiredFields = form.querySelectorAll('[name][required]');

                let isValid = true;
                console.log(requiredFields);
                requiredFields.forEach(function (field) {
                    if (!field.value.trim()) {
                        isValid = false;
                        showError(field, 'Это поле обязательно для заполнения');
                    } else {
                        hideError(field);
                    }
                });

                const radioButtons = document.querySelectorAll('input[name="fiz-comp"]');

                if (isValid) {
                    const formData = new FormData();
                    formData.append('car_name', document.getElementById('car-name').innerText);
                    formData.append('base_price', parseFloat(document.getElementById('base-without').innerText.replace(/\D/g, '')));
                    formData.append('period', parseInt(document.getElementById('days').value));
                    formData.append('services', '123');
                    formData.append('pickup_location', document.getElementById('pick-up-address').value);
                    formData.append('pickup_date', document.getElementById('pick-up-date').value);
                    formData.append('pickup_time', document.getElementById('pick-up-time').value);
                    formData.append('return_location', document.getElementById('return-address').value);
                    formData.append('return_date', document.getElementById('return-date').value);
                    formData.append('return_time', document.getElementById('return-time').value);
                    radioButtons.forEach(function(radioButton) {
                        if (radioButton.checked) {
                            formData.append('customer_type', radioButton.value);
                        }
                    });
                    formData.append('customer_first_name', document.getElementById('name').value);
                    formData.append('customer_last_name', document.getElementById('surname').value);
                    formData.append('customer_email', document.getElementById('email').value);
                    formData.append('customer_phone', document.getElementById('phone').value);


                    fetch('/rental', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            document.getElementById('form-first').style.display = 'none';
                            document.getElementById('form-done').style.display = 'block';
                        })
                        .then(data => {
                            console.log(data);
                        })
                        .catch(error => {
                            console.log('There has been a problem with your fetch operation:', error);
                        });
                }
            });

            function showError(field, errorMessage) {
                const errorDiv = document.createElement('div');
                errorDiv.classList.add('error-message');
                errorDiv.innerText = errorMessage;

                const parentDiv = field.parentElement;
                parentDiv.appendChild(errorDiv);
            }

            function hideError(field) {
                const parentDiv = field.parentElement;
                const errorDiv = parentDiv.querySelector('.error-message');
                if (errorDiv) {
                    parentDiv.removeChild(errorDiv);
                }
            }
        });


    </script>
@endsection
