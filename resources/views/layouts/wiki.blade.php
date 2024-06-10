@extends('layouts.app')
@section('title')
    Список заявок
@endsection
@section('content')
    <style>

        .admin-wiki h4 {
            font-weight: 700;
            margin-bottom: 15px;
        }

        .admin-wiki img {
            border: 2px solid #333;
        }

        .admin-wiki .danger-block {
            background-color: rgba(255, 0, 0, 0.21);
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 16px;
        }

        .admin-wiki .info-block {
            background-color: rgba(23, 162, 184, 0.21);
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 16px;
        }

        .admin-wiki .step {
            margin: 20px 0;
            padding: 0 20px;
            border-left: 5px solid green;
        }

        .admin-wiki .nav-link {
            white-space: nowrap;
            text-align: left;
        }

        .admin-wiki .nav-link.attention {
            color: red;
        }

        .admin-wiki .nav-link.attention.active {
            background-color: red;
            color: #fff;
        }

    </style>
    <section class="admin-wiki px-4 w-100">
        <div class="d-flex align-items-start">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link attention active" id="wiki-tab-0" data-bs-toggle="pill"
                        data-bs-target="#wiki-content-0"
                        type="button" role="tab" aria-controls="wiki-content-0" aria-selected="true">ВАЖНО
                </button>
                <button class="nav-link" id="wiki-tab-1" data-bs-toggle="pill" data-bs-target="#wiki-content-1"
                        type="button" role="tab" aria-controls="wiki-content-1" aria-selected="true">Панель управления
                </button>
                <button class="nav-link" id="wiki-tab-2" data-bs-toggle="pill" data-bs-target="#wiki-content-2"
                        type="button" role="tab" aria-controls="wiki-content-2" aria-selected="true">Список заявок
                </button>
                <button class="nav-link" id="wiki-tab-3" data-bs-toggle="pill" data-bs-target="#wiki-content-3"
                        type="button" role="tab" aria-controls="wiki-content-3" aria-selected="true">Публикации
                </button>
                <button class="nav-link" id="wiki-tab-4" data-bs-toggle="pill" data-bs-target="#wiki-content-4"
                        type="button" role="tab" aria-controls="wiki-content-4" aria-selected="true">Альбомы
                </button>
                <button class="nav-link" id="wiki-tab-5" data-bs-toggle="pill" data-bs-target="#wiki-content-5"
                        type="button" role="tab" aria-controls="wiki-content-5" aria-selected="true">Страницы
                </button>
                <button class="nav-link" id="wiki-tab-6" data-bs-toggle="pill" data-bs-target="#wiki-content-6"
                        type="button" role="tab" aria-controls="wiki-content-6" aria-selected="true">Меню
                </button>
                <button class="nav-link" id="wiki-tab-7" data-bs-toggle="pill" data-bs-target="#wiki-content-7"
                        type="button" role="tab" aria-controls="wiki-content-7" aria-selected="true">Навигация
                </button>
                <button class="nav-link" id="wiki-tab-8" data-bs-toggle="pill" data-bs-target="#wiki-content-8"
                        type="button" role="tab" aria-controls="wiki-content-8" aria-selected="true">Категории
                </button>
                <button class="nav-link" id="wiki-tab-9" data-bs-toggle="pill" data-bs-target="#wiki-content-9"
                        type="button" role="tab" aria-controls="wiki-content-9" aria-selected="true">Подкатегории
                </button>
                <button class="nav-link" id="wiki-tab-10" data-bs-toggle="pill" data-bs-target="#wiki-content-10"
                        type="button" role="tab" aria-controls="wiki-content-10" aria-selected="true">SEO-инструменты
                </button>
                <button class="nav-link" id="wiki-tab-11" data-bs-toggle="pill" data-bs-target="#wiki-content-11"
                        type="button" role="tab" aria-controls="wiki-content-11" aria-selected="true">Языки
                </button>
                <button class="nav-link" id="wiki-tab-12" data-bs-toggle="pill" data-bs-target="#wiki-content-12"
                        type="button" role="tab" aria-controls="wiki-content-12" aria-selected="true">Комментарии
                </button>
                <button class="nav-link" id="wiki-tab-13" data-bs-toggle="pill" data-bs-target="#wiki-content-13"
                        type="button" role="tab" aria-controls="wiki-content-13" aria-selected="true">Настройки
                </button>
            </div>
            <div class="card w-100">
                <div class="card-body">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="wiki-content-0" role="tabpanel"
                             aria-labelledby="wiki-tab-0">
                            За основу администативной панели и блога был взят готовый проект и внедрен в сайт. Из-за
                            некоторых его особенностей он был переписан и модернизирован. В следствии чего был поломан
                            некоторый функционал и ее работа. Поэтому необзодимо соблюдать следующие <b
                                class="text-danger">обязательные
                                пункты</b>:

                            <div class="step">
                                <h4>1. Всегда выбирать русский язык</h4>
                                <p>При создании постов, категорий, альбовом, страниц, пунктов меню всегда нужно выбирать
                                    русский язык. Коротко говоря: везде, где есть выбор языка, <b>всегда нужно выбирать
                                        русский язык</b></p>
                                <small class="text-muted">Такая необходимость появилась потому, что изначальный проект
                                    был рассчитан на то,
                                    что если создавать посты, категории и прочее для одного языка, к примеру
                                    английского,
                                    то любые другое посты, категории и прочее при выборе пользователем другого языка уже
                                    не будут
                                    отображаться (для каждого отдельного языка создается своя структура категорий и свои
                                    посты).</small>
                            </div>

                            <div class="step">
                                <h4>2. Во вкладке "настройки" ничего не трогать</h4>
                                <p>Контактная информация, ссылки на соц. сети прочее хранятся в системе, но нигде не
                                    отображаются.</p>
                                <p>Реклама по умолначию отключена. Если включить, то на сайте появятся рекламные
                                    баннеры, но очень криво и в некоторых местах их уже нет.</p>
                                <small>Настройки оставлены в админ. панели для дальнейших доработок.</small>
                            </div>

                            <div class="step">
                                <h4>3. Минификация изображений</h4>
                                <p>Любые картинки, которые будут прикрепляться к публикациям (любым) нужно
                                    предварительно минифицировать: уменьшить вес и разрешение изображения. Делается это
                                    для уменьшения нагрузки на сайт, а также быстрой загрузки страниц.</p>
                                <p class="text-success">Если необходимо использовать картинку высокого качества с
                                    большим весом, то
                                    ограничений в системе на этот счет никаких нет.</p>
                                <p>Популярный, бесплатный и быстрый онлайн минификатор картинок: <a target="_blank"
                                                                                                    href="https://tinypng.com/">https://tinypng.com/</a>
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="wiki-content-1" role="tabpanel"
                             aria-labelledby="wiki-tab-1">
                            В панели управления просто отображены количество постов, количество черновиков (постов) и
                            статистика просмотров блога (Точно не знаю как считается. Либо уникальный пользователь, либо
                            на каждую статью - 1 статья, 1 просмотр от одного пользователя. Нужно понаблюдать.)
                        </div>
                        <div class="tab-pane fade" id="wiki-content-2" role="tabpanel"
                             aria-labelledby="wiki-tab-2">
                            Весь список заявок на аренду автомобилей. В таблице указаны все данные, которые также
                            приходят в телеграм. Им можно менять статус (новый, в работе, отменен, завершен). Также
                            можно удалять заявки, если они ложные, неправильные, тестовые или просто захламляют список.
                            Имеется фильтрация по статусам.
                        </div>
                        <div class="tab-pane fade" id="wiki-content-3" role="tabpanel"
                             aria-labelledby="wiki-tab-3">
                            <p> Страница со всеми публикациями блога. Тут происходит их создание, редактирование,
                                просмотр и
                                удаление.</p>
                            <p>При нажаии на кнопку "добавить публикацию" вы перейдете на страницу с выбором: статья и
                                галерея.</p>

                            <div class="step">
                                <h4>1. Статья</h4>
                                <p>Классический редактор для создания постов публикаций. Необходимые поля для заполнения
                                    отмечены красной звездочкой (<b class="text-danger">*</b>).</p>
                                <div class="info-block">Поле slug - текст, который будет в URL старницы создаваемой
                                    статьи. Он заполняется
                                    автоматически из поля "заголовок" (как с латиницы, так и с кириллицы). В ручную
                                    писать не рокомендуется. Кириллицей писать нельзя
                                </div>
                                <p>Поле "Ключевые слова" писать через запятую. Нужно для SEO оптимизации.</p>
                                <p>В поле "Тег" можно добавить несколько тегов. После ввода тега нажмите Enter чтобы он
                                    добавился и появилась возможность написать следующий</p>
                                <img src="{{asset('wiki/img/tags.png')}}" alt="" class="img-fluid">

                                <h3 class="text-danger mt-3">Сперва</h3>
                                <p>Перед тем, как создавать статьи, необходимо сперва создать категории. Достаточно
                                    хотябы одну. После можно отредактировать ститьи и распределить по нужным
                                    категориям</p>

                                <h3 class="text-danger mt-3">Важно</h3>
                                <p>Справа есть еще обязательные поля. При выборе языка выбирать "руский"</p>
                                <h3 class="mt-3">Запланированная публикация</h3>
                                <p>Данный функционал работает <b
                                        style="background-color: darkorange; color: #fff; padding: 2px 4px; border-radius: 3px">но
                                        это не точно</b>. Протестируйте на тестовых или реальных статьях</p>
                                <div class="danger-block">
                                    <p> Есть небольшой баг, работающий раз через раз, связанный с выбором языка и
                                        категорий. Если не выбрать их и попытаться
                                        опубликовать статью, может случиться так, что потом список языков и категорий
                                        окажутся
                                        пустым и опубликовать статью уже не получится. Придется перезагружать сраницу.
                                    </p>
                                    <p class="m-0">Чтобы избежать этого, рекомендуется в самом начале выбрать язык
                                        (обязательно русский) и категорию (можно буквально любую. Отредактировать уже
                                        можно без проблем)</p>
                                </div>
                            </div>

                            <div class="step">
                                <h4>2. Галерея</h4>
                                <p>Данный тип статьи подразумевает, что на странице статьи будет N-ное количество
                                    слайдов со своим изображением и своим описанием под этим изображением (пример
                                    ниже).</p>
                                <p>Все остальное, включая правила, рекомендации и запреты, такое же, как и в обычной
                                    статье.</p>
                                <img src="{{asset('wiki/img/gallery-post1.png')}}" alt="" class="img-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <img src="{{asset('wiki/img/cats1.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <img src="{{asset('wiki/img/cats2.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <h4>3. Общее</h4>
                                <p>Все чекбоксы и переключатели не рабочие, кроме "Видимость" и "Показывать только
                                    заегистрированным пользователям".</p>
                                <p>Видимость - это показывать статью на сайте или нет.</p>
                                <p>Показывать только заегистрированным пользователям - <b class="text-danger">не
                                        включать</b>.</p>
                                <small class="text-muted">Остальные пункты предназначены оригинальной главной страницы,
                                    которая была убрана из-за ненадобности. Они оставлены для корректной работы.</small>
                                <div class="row mt-3">
                                    <div class="col-12 col-md-6">
                                        <img src="{{asset('wiki/img/checkboxes.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h4>Весь список</h4>
                            <p>В таблице в списке всех статей переключатели "на главную" и "избранные" не рабочие, но
                                оставлены для корректной работы. "видимость" отвечает за отображение статьи на
                                сайте.</p>
                            <img src="{{asset('wiki/img/table-checkbox.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="tab-pane fade" id="wiki-content-4" role="tabpanel"
                             aria-labelledby="wiki-tab-4">
                            <p>В шапке есть 3 вкладки: Категории альбомов, Изображения и Альбомы. Сперва нужно создать
                                Альбомы</p>
                            <div class="step">
                                <h4>1. Альбомы</h4>
                                <p>Создаются обычные альбомы, будто папки для файлов.</p>
                            </div>
                            <div class="step">
                                <h4>2. Категории альбомов</h4>
                                <p>Создаются категории для конкретного альбома. Будто еще папки внутри папки</p>
                            </div>
                            <div class="step">
                                <h4>2. Изображения</h4>
                                <p>Добавляются картинки в конкретный альбом. Если в этом альбоме есть несколько
                                    категорий, то можно выбрать. По умолчанию выбирается первая.</p>
                                <div class="info-block">
                                    Поле "Заголовок" обязателен, но не отображается на сайте. Можно использовать для
                                    себя как "подсказку" или "описание" коллекции изображений в админ. панели.
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="wiki-content-5" role="tabpanel"
                             aria-labelledby="wiki-tab-5">
                            <p>Здесь создаются обычные страницы сайта, не связаные с основными статьям блога. Они будут
                                отображаться в отдельной вкладке меню "еще"</p>
                            <img src="{{asset('wiki/img/menu-more.png')}}" class="img-fluid mb-4" alt="">
                            <div class="info-block">
                                При создании не забудьте выставить чекбокс "местоположение" в "основное меню".
                                <br>
                                <b class="text-danger">Остальные переключатели не работают. Последний не включать.</b>
                                <img src="{{asset('wiki/img/ch-pages.png')}}" class="img-fluid mt-3" alt="">
                            </div>
                            <div class="info-block">
                                Предупреждение. При вводе текста в поле "заголовок" нужно подождать, пока полностью
                                запонится поле "Slug" перед сохранением. Процесс немного медлителен.
                            </div>
                        </div>
                        <div class="tab-pane fade" id="wiki-content-6" role="tabpanel"
                             aria-labelledby="wiki-tab-6">
                            <p>В данном разделе создаются обычные пункты меню, которые будут просто вести на другие
                                сайты (это может быть любой другой сайт, либо даже этот же, к примеру, на конкретную
                                модель автомобиля. Достаточно
                                ввести полный url)</p>
                            <div class="info-block">
                                <b class="text-danger">ВНИМАНИЕ.</b> Если вы хотите, чтобы родительская ссылка была не
                                нажимающейся, а была только для открытия вложенных меню, то достаточно добавить в поле
                                "ссылка" знак (-) или (#)
                                <img src="{{asset('wiki/img/menu2.png')}}" class="img-fluid mt-3" alt="">
                                <br>
                                <br>
                                В примере ниже пункт меню "Наш новый партнер" не нажимается. Он только выводит вложенные
                                ссылки.
                                <img src="{{asset('wiki/img/menu2-dop.png')}}" class="img-fluid mt-3" alt="">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="wiki-content-7" role="tabpanel"
                             aria-labelledby="wiki-tab-7">
                            <p>Здесь можно расставить нужный вам порядок пунктов меню</p>
                            <div class="info-block">
                                <p>СПРАВКА. "все статьи", "Еще" и "Галерея" всегда остаются на своих местах. Их нельзя
                                    передвинуть.</p>
                                <p class="m-0">Принцип таков: (Все статьи) (меню 1) (меню 2) (меню 3) (меню 4) (Еще)
                                    (Галерея). Меню с 1 по 4 можно менять местами.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="wiki-content-8" role="tabpanel"
                             aria-labelledby="wiki-tab-8">
                            <p>Здесь создаются категории блога</p>
                            <div class="danger-block">
                                Обязательно выбирать язык "русский". Без исключений.
                            </div>
                            <div class="info-block">
                                Предупреждение. При вводе текста в поле "Имя" нужно подождать, пока полностью запонится
                                поле "Slug" перед сохранением. Процесс немного медлителен.
                            </div>
                            <div class="info-block">
                                Переключатель "показывать на главной" не рабочий.
                            </div>
                        </div>
                        <div class="tab-pane fade" id="wiki-content-9" role="tabpanel"
                             aria-labelledby="wiki-tab-9">
                            <p>Здесь создаются подкатегории блога</p>
                            <div class="danger-block">
                                Обязательно выбирать язык "русский". Без исключений.
                            </div>
                            <div class="info-block">
                                Предупреждение. При вводе текста в поле "Имя" нужно подождать, пока полностью запонится
                                поле "Slug" перед сохранением. Процесс немного медлителен.
                            </div>
                        </div>
                        <div class="tab-pane fade" id="wiki-content-10" role="tabpanel"
                             aria-labelledby="wiki-tab-10">
                            <p>В данном разделе заполняются SEO данные сайта. Весь текст будет отображен на всем сайте
                                на всех страницах в meta тегах.</p>
                            <div class="danger-block">
                                Язык всегда должен быть "русский".
                            </div>
                            <div class="danger-block">
                                Поле "Google Analytics" не трогать. Оставлять пустым.
                            </div>
                        </div>
                        <div class="tab-pane fade" id="wiki-content-11" role="tabpanel"
                             aria-labelledby="wiki-tab-11">
                            <p>В данном разделе вы можете отредактировать перевод всех 3-х языков.</p>
                            <div class="info-block">
                                Английский язык - оригинальный перевод всего сайта, включая административную панель. Его
                                можно брать как за основу
                                (имеется ввиду если сложно понять, за что отвечает перевод по ключевому слову над полем
                                ввода, то можно открыть в двух разных окнах переводы на английской и переводы языка,
                                которые вы хотите исправить и сравнивать по ключевым словам).
                            </div>
                        </div>
                        <div class="tab-pane fade" id="wiki-content-12" role="tabpanel"
                             aria-labelledby="wiki-tab-12">
                            <p>Тут отображаются все комментарии, которые пользователи оставляют под статьями.</p>
                            <p>В таблице столбец "статус" - это видимость комментария на сайте.</p>
                            <div class="info-block">
                                В верхнем правом углу есть переключатель "Ожидание отверждения" - "Автоутверждение".
                                Если включен, то все комментраии сразу отображаются (их статус активен сразу). Если
                                выключен, необходимо все комментарии включать вручную.
                            </div>
                        </div>
                        <div class="tab-pane fade" id="wiki-content-13" role="tabpanel"
                             aria-labelledby="wiki-tab-13">
                            <p>Настройки всего сайта. <b class="text-danger">Здесь ничего не трогать</b>.</p>
                            <div class="info-block">
                                Все, кроме "Управление рекламой", убрано из кода. Даже если что-то напишите, ничего не
                                изменится.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
