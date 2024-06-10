<?php

if (preg_match('/^www\.(.*)$/', $_SERVER['HTTP_HOST'], $matches)) {
    $new_url = 'https://' . $matches[1] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $new_url);
    exit();
}

if(preg_match("~(/{2,})~", $_SERVER["REQUEST_URI"])){  // Проверяем, есть ли в урле повторяющиеся слеши 
  $temp_redirect = preg_replace('~(/{2,})~', '/', $_SERVER["REQUEST_URI"]); // В переменную заносим новый урл, без повторяющихся слешей

  header("HTTP/1.1 301 Moved Permanently"); // Делаем 301 редирект правильную страницу
  header("Location: ".$temp_redirect); 
  exit(); 
}

$LastModified_unix = strtotime(date("D, d M Y H:i:s", filectime($_SERVER['SCRIPT_FILENAME'])));
$LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix);
$IfModifiedSince = false;
if (isset($_ENV['HTTP_IF_MODIFIED_SINCE']))
    $IfModifiedSince = strtotime(substr($_ENV['HTTP_IF_MODIFIED_SINCE'], 5));
if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']))
    $IfModifiedSince = strtotime(substr($_SERVER['HTTP_IF_MODIFIED_SINCE'], 5));
if ($IfModifiedSince && $IfModifiedSince >= $LastModified_unix) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 304 Not Modified');
    exit;
}
header('Last-Modified: '. $LastModified);

$expires = 30;
if ($_SERVER['REQUEST_URI'] == '/') {
  $expires = 5;
}
else if (in_array($_SERVER['REQUEST_URI'], array('/company/', '/projects/', '/info/', '/articles/'))) {
  $expires = 14;
}
header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + $expires*24*60*60));

?>
<!DOCTYPE html>
<html lang="en">
@php
    $settings = getSettingValue();
@endphp
<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PWB7DBLW');</script>
<!-- End Google Tag Manager -->
    <meta name="geo.placename" content="улица Динмухамеда Кунаева, 2, Астана" />
<meta name="geo.position" content="51.130892;71.418401" />
<meta name="geo.region" content="RU-Астана" />
<meta name="ICBM" content="51.130892, 71.418401" />
    <meta charset="UTF-8">
    <meta name="turbo-visit-control" content="reload">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    @if(!empty(getSEOTools()->keyword))--}}
        <meta name="keywords" content="@yield('meta_tags'),{{!empty(getSEOTools()) ? getSEOTools()->keyword : ''}}">
{{--    @endif--}}
{{--    @if(!empty(getSEOTools()->site_description))--}}
        <meta name="description" content="@if(View::hasSection('meta_description'))@yield('meta_description')
        @else{{!empty(getSEOTools()) ? getSEOTools()->site_description : ''}}@endif">
{{--    @endif--}}

    <!--meta http-equiv="content-language" content="{{ getFrontSelectLanguageName() ?? 'ru' }}"-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:image" content="https://qazqar.kz/main/img/logo.png"/>
    <meta property="og:locale" content="ru_RU">
    <meta property="og:title" content="Прокат автомобилей без водителей в Астане - Qazqar" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://qazqar.kz" />
    <meta property="og:description" content="Прокат автомобилей без водителей в Астане - огромный выбор вариантов от эконом до бизнес и премиум класса. Доступные цены, удобные условия сотрудничества. Оформить заявку и забронировать понравившееся авто можно на нашем сайте." />
    <meta property="og:site_name" content="Прокат автомобилей" />
    <title>Qazqar|{{(!empty(getSEOTools()->site_title)) ? getSEOTools()->site_title : $settings['application_name']}} </title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('main/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('main/css/swiper.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('main/css/app.css') }}" rel="stylesheet" type="text/css">


    @livewireStyles
    {!! reCaptcha()->renderJs() !!}

{{--    @livewireScripts--}}
{{--    <script src="{{ asset('vendor/livewire/livewire.js') }}"></script>--}}
{{--    @include('livewire.livewire-turbo')--}}

    @php
        $langSession = Session::get('frontLanguageChange');
        $frontLanguage = !isset($langSession) ? getSettingValue()['front_language'] : $langSession;
    @endphp

{{--    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"--}}
{{--            data-turbolinks-eval="false" data-turbo-eval="false"></script>--}}
    <script src='https://www.google.com/recaptcha/api.js'></script>
    @routes
    <script src="{{ asset('messages.js') }}"></script>
    <script data-turbo-eval="false">
        let userProfile = '{{ asset('images/avatar.png') }}'
        let siteKey = "{{$settings['site_key']}}"
        let frontLanguage = "{{ App\Models\Language::find($frontLanguage)->iso_code }}"

        Lang.setLocale(frontLanguage)
    </script>
{{--    <script src="{{ mix('assets/js/front-third-party.js') }}"></script>--}}
{{--    <script src="{{ mix('assets/js/front-pages.js') }}"></script>--}}
    <script>
        {!! (!empty(getSEOTools()->google_analytics)) ? getSEOTools()->google_analytics : '' !!}
    </script>

    <script>
        function initializeSiterWPWidget() {
            SiterWPWidget({
                phone: '+7 776 350 4141',
                phoneNormalize: true
            });
        }
        const siterWPWidgetScript = document.createElement('script');
        siterWPWidgetScript.src = `https://siter.kz/widget-wp/main.js?${Date.now()}`;
        siterWPWidgetScript.async = true;
        siterWPWidgetScript.onload = initializeSiterWPWidget;
        document.head.appendChild(siterWPWidgetScript);
    </script>
    <meta name="google-site-verification" content="J3HquU8i9jQSNGIi0_2GJEJIdYELffF0P84oRo2hD60" />
    <meta name="yandex-verification" content="810f43f17501b67d" />

<script type='application/ld+json'> 
{
  "@context": "http://www.schema.org",
  "@type": "Organization",
  "name": "Прокат Автомобилей - Qazqar",
  "url": "https://qazqar.kz/",
  "logo": "https://qazqar.kz/main/img/logo.png",
  "image": "https://qazqar.kz/main/img/logo.png",
  "description": "Широкий ассортимент автомобилей и самые доступные цены по всему городу Астана",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Улица Динмухамед Конаев, 2",
    "addressLocality": "Астана",
    "addressRegion": "Астана",
    "postalCode": "Z05M5E3",
    "addressCountry": "Казахстан"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+7 776 350 41 41"
  }
}
 </script>
 <style>
     .navbar-nav .active {
        border-bottom: 2px solid #eee;
     }
 </style>
 <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(96990592, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-58MYQ1310L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-58MYQ1310L');
</script>
<!-- /Yandex.Metrika counter -->
</head>
<body class="
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
not-main-page @endunless">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PWB7DBLW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="preloader-block">
    <div class="preloader-div">
        <span class="text">Загрузка</span>
        <span class="preloader"></span>
    </div>
</div>
@include('front_new.layouts.header')
<div>
    @yield('content')
</div>
{{--<div class="preloader-block">--}}
{{--    <div class="preloader-div">--}}
{{--        <span class="text">Загрузка</span>--}}
{{--        <span class="preloader"></span>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- start footer section -->
@include('front_new.layouts.footer')
<!-- end footer section -->
<div class="navbar-m-backdrop"></div>
{{--@if($settings['show_cookie'])--}}
{{--    @include('cookie-consent::index')--}}
{{--@endif--}}
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/inputmask.min.js"></script>
<script src="{{ asset('main/js/swiper.min.js') }}"></script>
<script src="{{ asset('main/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('main/js/script.js') }}"></script>
<script>
    var images = document.getElementsByTagName('img');

    // Проходим по каждому изображению
    for (var i = 0; i < images.length; i++) {
        // Получаем значение атрибута src
        var srcValue = images[i].getAttribute('src');

        // Проверяем, начинается ли значение на http://localhost
        if (srcValue && srcValue.startsWith('http://localhost')) {
            // Заменяем только часть значения src
            var newSrcValue = srcValue.replace('http://localhost', '');
            images[i].setAttribute('src', newSrcValue);
        }
    }
</script>
<script>
    $(function () {
    // Проверяем, есть ли элемент с классом 'active' в localStorage
        var activeElement = localStorage.getItem('activeElement');
        if (activeElement) {
            $('.navbar-nav li').removeClass('active');
            $('.navbar-nav li').eq(activeElement).addClass('active');
        }

        // Обрабатываем клик по элементу
        $('.navbar-nav li').click(function() {
            var index = $(this).index();
            localStorage.setItem('activeElement', index);
            $('.navbar-nav li').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>

<script type="text/javascript">(function(w,doc) {
if (!w.__utlWdgt ) {
    w.__utlWdgt = true;
    var d = doc, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == w.location.protocol ? 'https' : 'http')  + '://w.uptolike.com/widgets/v1/uptolike.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
}})(window,document);
</script>
<div data-mobile-view="true" data-share-size="30" data-like-text-enable="false" data-background-alpha="0.0" data-pid="2032680" data-mode="share" data-background-color="#ffffff" data-share-shape="round-rectangle" data-share-counter-size="12" data-icon-color="#ffffff" data-mobile-sn-ids="vk.tw.ok.wh.tm.vb." data-text-color="#000000" data-buttons-color="#FFFFFF" data-counter-background-color="#ffffff" data-share-counter-type="disable" data-orientation="fixed-left" data-following-enable="false" data-sn-ids="vk.tw.ok.wh.tm.vb." data-preview-mobile="false" data-selection-enable="true" data-exclude-show-more="false" data-share-style="1" data-counter-background-alpha="1.0" data-top-button="false" class="uptolike-buttons" ></div>
</body>
</html>
