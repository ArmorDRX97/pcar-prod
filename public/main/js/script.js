document.addEventListener('DOMContentLoaded', function () {
    document.body.classList.add('loaded');
    var swiper = new Swiper(".cars-swiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            // when window width is >= 480px
            768: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            // when window width is >= 640px
            1200: {
                slidesPerView: 3,
                spaceBetween: 20
            }
        }
    });

    var swiper2 = new Swiper(".testimonial-swiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    var swiper3 = new Swiper(".cars-swiper-more", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            // when window width is >= 480px
            768: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            // when window width is >= 640px
            1200: {
                slidesPerView: 3,
                spaceBetween: 20
            }
        }
    });

    DG.then(function () {
        let map = DG.map('map', {
            center: [51.13089855277678, 71.41817897558214],
            zoom: 16
        });
        // Обработчик клика на карту
        map.on('click', function(e) {
            var latlng = e.latlng;
            var lat = latlng.lat;
            var lng = latlng.lng;

            console.log('Широта:', lat);
            console.log('Долгота:', lng);
        });
        DG.marker([51.13089855277678, 71.41817897558214]).addTo(map);
    });


    const navbarToggler = document.querySelector('.navbar-toggler');
    const blogToggler = document.querySelector('.blog-toggler');
    const navbarBackdrop = document.querySelector('.navbar-m-backdrop');

    if(blogToggler){
        blogToggler.addEventListener('click', function () {
            if (document.body.classList.contains('blog-show')) {
                document.body.classList.remove('blog-show');
            } else {
                document.body.classList.remove('navbar-show');
                document.body.classList.add('blog-show');
            }
        });

    }

    navbarToggler.addEventListener('click', function () {
        if (document.body.classList.contains('navbar-show')) {
            document.body.classList.remove('navbar-show');
        } else {
            document.body.classList.remove('blog-show');
            document.body.classList.add('navbar-show');
        }
    });

    navbarBackdrop.addEventListener('click', function () {
        document.body.classList.remove('navbar-show');
        document.body.classList.remove('blog-show');
    });

    if (window.scrollY > 0) {
        // Если страница не в самом верху при загрузке, добавляем класс "scrolled" к тегу <body>
        document.body.classList.add('scrolled');
    }

// Добавляем обработчик события прокрутки
    window.addEventListener('scroll', function() {
        // Проверяем, находится ли верх страницы в самом верху
        if (window.scrollY > 0) {
            // Если страница прокручена вниз, добавляем класс "scrolled" к тегу <body>
            document.body.classList.add('scrolled');
        } else {
            // Если страница находится в самом верху, удаляем класс "scrolled" у тега <body>
            document.body.classList.remove('scrolled');
        }
    });

    const langs = document.querySelectorAll('.selectLanguage');
    for(let i = 0; i < langs.length; i++){
        langs[i].addEventListener('click', function () {
            const langId = Number(langs[i].getAttribute('data-id'));

            fetch(route('language.change.home'), {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json', // Указываем, что ожидаем ответ в формате JSON
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ data: langId })
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json(); // Преобразуем ответ в JSON
                })
                .then(data => {
                    console.log(data);
                    window.location.href = '/';
                })
                .catch(error => {
                    console.log('There has been a problem with your fetch operation:', error);
                });
        })
    }


    $('.emoji-id').on('click', function (event) {
        let emojiId = $(event.currentTarget).data('emoji')
        let postId = $(event.currentTarget).data('post')
        $('.emoji-id').prop('disabled', true)
        $.ajax({
            url: route('post-reaction'),
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            data: { emojiId: emojiId, postId: postId },
            success: function (data) {
                if (data.success) {
                    $('.post-reaction-count').html(0)
                    $.each(data.data, function(index) {
                        $('.post-reaction-count').closest("#"+index+"").html((data.data[index] != null) ? data.data[index].length : 0)
                    });
                    $('.emoji-id').prop('disabled', false)
                }
            },
        })
    })


    $('#commentForm').on('submit', function (e) {
        console.log('awaeggdagasg');
        e.preventDefault()
        $.ajax({
            url: route('comment.store'),
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            data: $(this).serialize(),
            success: function (result) {
                if (result.success) {
                   window.location.reload();
                } else {
                    displayErrorMessage(result.responseJSON.message)
                }
            },
            error: function (result) {
                displayErrorMessage(result.responseJSON.message)
            },
        })
    })

});

