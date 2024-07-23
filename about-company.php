<?php
require 'head.php';
?>


<?php
include __DIR__ . '/breadcrumb.php';
breadcrumb([['url' => '', 'name' => 'О компании']]);
?>


<section class="core-container our-works">
    <div class="our-works_header-wrapper">
        <h1 class="our-works_header site-header">Мы компания 12ВОЛЬТ</h1>
        <div class="our-works_btn-play-video-wrapper">
            <p>Посмотреть видео <br> о компании</p>
            <button class="our-works_btn-play-video"></button>
        </div>
    </div>
    <div class="our-works_content">
        <div class="our-works_item">
            <img class="our-works_item_background" src="/images/border-icon-1.png" alt="icon">
            <p class="our-works_title">Радуем своих клиентов</p>
            <span>с 2016</span>
        </div>
        <div class="our-works_item">
            <img class="our-works_item_background" src="/images/border-icon-2.png" alt="icon">
            <p class="our-works_title">Чиним машин в неделю</p>
            <span>210</span>
        </div>
        <div class="our-works_select-car-service">
            <div class="our-works_select-car-service_text-wrapper">
                <span>Работаем с 8:00 до 21:00 (без выходных)</span>
                <p class="our-works_select-car-service_title">Выбрать автосервис и&nbsp;записаться на услугу</p>
                <button class="our-works_select-car-service_btn btn-yellow" data-btn-appointment>Записаться <span>в автосервис</span></button>
            </div>
            <img class="our-works_select-car-service_img" src="/images/about-page-image-1.png" alt="img">
            <img class="our-works_select-car-service_img" src="/images/about-page-image-2.png" alt="img">
        </div>
    </div>
</section>


<section class="core-container our-principles">
    <p class="our-principles_header">принципы</p>
    <div class="our-principles_content">
        <div class="our-principles_item">
            <span class="our-principles_item_title">Профессионализм и&nbsp;компетентность</span>
            <p class="our-principles_item_text">
                Наши мастера обладают необходимыми навыками и знаниями для выполнения работ по ремонту и обслуживанию автомобилей. Мы используем современное оборудование и инструменты, чтобы обеспечить высокое качество услуг.
            </p>
        </div>
        <div class="our-principles_item">
            <span class="our-principles_item_title">Соблюдение сроков</span>
            <p class="our-principles_item_text">
                Мы соблюдаем установленные сроки выполнения работ, чтобы клиенты могли планировать своё время. Мы стремимся выполнить работы как можно быстрее, не снижая при этом качества.
            </p>
        </div>
    </div>
</section>


<?php

$response_data_sale = [
    [
        'image' =>  '/images/image-for-slider-1.png',
        'title' =>  'Ремонт проколов и порезов',
        'subtitle' =>  'Вулканизация шин',
        'discount' =>  '20%',
        'id' => '2gf6df65fd6fd65',
        'text' => 'Если аккумулятор вашего устройства потерял свою емкость или вовсе не работает, мы сможем восстановить его работоспособность с помощью специального оборудования.
Если аккумулятор вашего устройства потерял свою емкость или вовсе не работает, мы сможем восстановить его работоспособность с помощью специального оборудования.',
    ],
    [
        'image' =>  '/images/image-for-slider-2.png',
        'title' =>  'Замена пасла в двигателе в подарок',
        'subtitle' =>  'При покупке от 4-х дитров моторного масла и масляного фильтра в наших магазинах',
        'discount' =>  '',
        'id' => '564fd65d6fd87df5',
        'text' => 'Если аккумулятор вашего устройства потерял свою емкость или вовсе не работает, мы сможем восстановить его работоспособность с помощью специального оборудования.
Если аккумулятор вашего устройства потерял свою емкость или вовсе не работает, мы сможем восстановить его работоспособность с помощью специального оборудования.',
    ],
    [
        'image' =>  '/images/image-for-slider-1.png',
        'title' =>  'Ремонт проколов и порезов',
        'subtitle' =>  'Вулканизация шин',
        'discount' =>  '20%',
        'id' => '2gf6df65fd6fd65',
        'text' => 'Если аккумулятор вашего устройства потерял свою емкость или вовсе не работает, мы сможем восстановить его работоспособность с помощью специального оборудования.
Если аккумулятор вашего устройства потерял свою емкость или вовсе не работает, мы сможем восстановить его работоспособность с помощью специального оборудования.',
    ],
]

?>


<section class="core-container sale">
    <h2 class="sale_title site-header">Акции</h2>
    <div class="sale_btn-wrapper">
        <div class="sale-swiper-button-prev"></div>
        <div class="sale-swiper-button-next"></div>
    </div>
    <div class="sale-swiper">
        <div class="swiper-wrapper">
            <?php foreach ($response_data_sale as $item) { ?>
                <div class="swiper-slide">
                    <div class="sale_item">
                        <div class="sale_item_head-wrapper">
                            <span class="<?= $item['discount'] ? 'active' : '' ?>">скидка <?= $item['discount'] ?></span>
                            <img class="sale_item_img" src="<?= $item['image'] ?>" alt="img">
                        </div>
                        <div class="sale_item_footer-wrapper">
                            <p class="sale_item_title"><span><?= $item['subtitle'] ?></span><?= $item['title'] ?></p>
                            <button class="sale_item_link" data-btn-open-modal-for-sale-id="<?= $item['id'] ?>">подробнее</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<section class="modal-wrapper" data-modal-for-sale-swiper>
    <?php foreach ($response_data_sale as $item) { ?>
        <div class="modal-for-sale-swiper_content" data-modal-for-sale-swiper-content data-modal-for-sale-id="<?= $item['id'] ?>">
            <div class="modal-for-sale-swiper_head" data-modal-for-sale-swiper-head-block>
                <button class="modal_btn-close" data-modal-for-sale-btn-close></button>
                <div class="modal-for-sale-swiper_text-wrapper">
                    <span class="modal-for-sale-swiper_discount <?= $item['discount'] ? 'active' : '' ?>">скидка <?= $item['discount'] ?></span>
                    <h2 class="modal-for-sale-swiper_title"><?= $item['title'] ?></h2>
                    <p class="modal-for-sale-swiper_text"><?= $item['text'] ?></p>
                    <button class="modal-for-sale-swiper_btn-appointment btn-yellow" data-modal-for-sale-swiper-btn-appointment>записаться</button>
                </div>
                <img class="modal-for-sale-swiper_img" src="<?= $item['image'] ?>" alt="img">
            </div>
            <div class="modal-for-sale-swiper_hidden_elements" data-modal-for-sale-swiper-hidden-elements>
                <hr class="modal-for-sale-swiper_line" data-modal-for-sale-swiper-line>
                <div class="modal_content" data-modal-content>
                    <h2 class="modal_title">
                        Запишитесь в автосервис в удобном для вас городе
                        <span>Наш менеджер свяжется с вами в ближайшее время для уточнения деталей заявки</span>
                    </h2>
                    <form class="modal_form" action="">
                        <div class="modal_form_special_item-wrapper">
                            <div class="contacts_form_item" data-select-wrapper>
                                <span class="contacts_form_item_label">Адреса автосервисов</span>
                                <span class="contacts_form_item_input" data-select-value-and-btn>г. Екатеринбург</span>
                                <div class="contacts_form_select_label-wrapper" data-select-option-wrapper>
                                    <div>
                                        <?php foreach ([1,2,3,4,5,6,7,8,9,10] as $key) { ?>
                                            <label class="contacts_form_select_label">
                                                Нижний Тагил
                                                <input type="radio" name="select-radio" value="Нижний Тагил" data-select-option>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="contacts_form_item" data-select-wrapper>
                                <span class="contacts_form_item_input" data-select-value-and-btn>ул. Шефская 95А</span>
                                <div class="contacts_form_select_label-wrapper" data-select-option-wrapper>
                                    <div>
                                        <?php foreach ([1,2,3,4,5,6,7,8,9,10] as $key) { ?>
                                            <label class="contacts_form_select_label">
                                                ул. Аппаратная, 5
                                                <input type="radio" name="select-radio" value="ул. Аппаратная, 5" data-select-option>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="contacts_form_item" data-select-wrapper>
                            <span class="contacts_form_item_label">Выберите услугу</span>
                            <span class="contacts_form_item_input" data-select-value-and-btn>Замена аккумулятора</span>
                            <div class="contacts_form_select_label-wrapper" data-select-option-wrapper>
                                <div>
                                    <?php foreach ([1,2,3,4,5,6,7,8,9,10] as $key) { ?>
                                        <label class="contacts_form_select_label">
                                            Ремонт тормозной системы
                                            <input type="radio" name="select-radio" value="Ремонт тормозной системы" data-select-option>
                                        </label>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <label class="modal_form_label-core">
                            Имя*
                            <input type="text" placeholder="Иван">
                        </label>
                        <label class="modal_form_label-core">
                            Телефон*
                            <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="8 900 000 00 00">
                        </label>

                        <div class="modal_footer">
                            <button class="modal_btn-submit btn-yellow" data-modal-for-sale-swiper-btn-submit>Оставить заявку</button>
                            <span class="modal_subtitle">
                        Нажимая на кнопку, вы соглашаетесь с
                        <a href="">политикой конфиденциальности</a>
                    </span>
                        </div>
                    </form>
                </div>
                <div class="modal_content_success" data-modal-success-content>
                    <button class="modal_btn-close" data-modal-for-sale-btn-close></button>
                    <h2 class="modal_title">
                        Ваша заявка успешно отправлена!
                        <span>Мы перезвоним Вам в ближайшее время</span>
                    </h2>
                    <span class="modal_content_success_icon"></span>
                </div>
            </div>
        </div>
    <?php } ?>
</section>


<?php

$response_data_our_team = [
    [
        'image' => '/images/our-master-image-1.png',
        'name' => 'Иван',
        'specialist' => 'Автомастер',
        'experience' => 'Опыт 10 лет',
    ],
    [
        'image' => '/images/our-master-image-2.png',
        'name' => 'Иван',
        'specialist' => 'Автомастер',
        'experience' => 'Опыт 10 лет',
    ],
    [
        'image' => '/images/our-master-image-3.png',
        'name' => 'Иван',
        'specialist' => 'Автомастер',
        'experience' => 'Опыт 10 лет',
    ],
    [
        'image' => '/images/our-master-image-4.png',
        'name' => 'Иван',
        'specialist' => 'Автомастер',
        'experience' => 'Опыт 10 лет',
    ],
]

?>

<section class="core-container our-big-team">
    <h2 class="our-big-team_header site-header">Наша большая <br> команда</h2>
        <div class="our-big-team_swiper">
            <div class="swiper-wrapper">
                <?php foreach ($response_data_our_team as $item) { ?>
                    <div class="swiper-slide">
                        <div class="our-big-team_item">
                            <img class="our-big-team_item_img" src="<?= $item['image'] ?>" alt="img">
                            <span class="our-big-team_item_name"><?= $item['name'] ?></span>
                            <p class="our-big-team_item_text">
                                <span><?= $item['specialist'] ?></span>
                                <?= $item['experience'] ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="our-big-team_btn-wrapper">
            <div class="our-big-team_swiper-button-prev"></div>
            <div class="our-big-team_swiper-button-next"></div>
        </div>
</section>


<?php

$response_data_service_centers = [
    [
        'city' => 'Екатеринбург',
        'id' => 'sd2323',
        'contacts' => [
            [
                'tel' => '+7 343 261-62-62',
                'address' => 'ул. Аппаратная, 5',
            ],
            [
                'tel' => '+7 343 261-62-62',
                'address' => 'ул. Аппаратная, 5',
            ],
            [
                'tel' => '+7 343 261-62-62',
                'address' => 'ул. Аппаратная, 5',
            ],
        ],
    ],
    [
        'city' => 'Нижний Тагил',
        'id' => 'fdf+666',
        'contacts' => [
            [
                'tel' => '+7 343 261-62-00',
                'address' => 'ул. Аппаратная, 10',
            ],
            [
                'tel' => '+7 343 261-62-00',
                'address' => 'ул. Аппаратная, 10',
            ],
            [
                'tel' => '+7 343 261-62-00',
                'address' => 'ул. Аппаратная, 10',
            ],
            [
                'tel' => '+7 343 261-62-00',
                'address' => 'ул. Аппаратная, 10',
            ],
        ],
    ],
    [
        'city' => 'Первоуральск',
        'id' => 'sd2323',
        'contacts' => [
            [
                'tel' => '+7 343 261-62-62',
                'address' => 'ул. Аппаратная, 5',
            ],
            [
                'tel' => '+7 343 261-62-62',
                'address' => 'ул. Аппаратная, 5',
            ],
            [
                'tel' => '+7 343 261-62-62',
                'address' => 'ул. Аппаратная, 5',
            ],
        ],
    ],
    [
        'city' => 'Полевской',
        'id' => 'fdf+666',
        'contacts' => [
            [
                'tel' => '+7 343 261-62-00',
                'address' => 'ул. Аппаратная, 10',
            ],
            [
                'tel' => '+7 343 261-62-00',
                'address' => 'ул. Аппаратная, 10',
            ],
            [
                'tel' => '+7 343 261-62-00',
                'address' => 'ул. Аппаратная, 10',
            ],
            [
                'tel' => '+7 343 261-62-00',
                'address' => 'ул. Аппаратная, 10',
            ],
        ],
    ],
    [
        'city' => 'Серов',
        'id' => 'sd2323',
        'contacts' => [
            [
                'tel' => '+7 343 261-62-62',
                'address' => 'ул. Аппаратная, 5',
            ],
            [
                'tel' => '+7 343 261-62-62',
                'address' => 'ул. Аппаратная, 5',
            ],
            [
                'tel' => '+7 343 261-62-62',
                'address' => 'ул. Аппаратная, 5',
            ],
        ],
    ],
    [
        'city' => 'Сысерть',
        'id' => 'fdf+666',
        'contacts' => [
            [
                'tel' => '+7 343 261-62-00',
                'address' => 'ул. Аппаратная, 10',
            ],
            [
                'tel' => '+7 343 261-62-00',
                'address' => 'ул. Аппаратная, 10',
            ],
            [
                'tel' => '+7 343 261-62-00',
                'address' => 'ул. Аппаратная, 10',
            ],
            [
                'tel' => '+7 343 261-62-00',
                'address' => 'ул. Аппаратная, 10',
            ],
        ],
    ],
    [
        'city' => 'Сысерть',
        'id' => 'sd2323',
        'contacts' => [
            [
                'tel' => '+7 343 261-62-62',
                'address' => 'ул. Аппаратная, 5',
            ],
            [
                'tel' => '+7 343 261-62-62',
                'address' => 'ул. Аппаратная, 5',
            ],
            [
                'tel' => '+7 343 261-62-62',
                'address' => 'ул. Аппаратная, 5',
            ],
        ],
    ],
    [
        'city' => 'Тюмень',
        'id' => 'fdf+666',
        'contacts' => [
            [
                'tel' => '+7 343 261-62-00',
                'address' => 'ул. Аппаратная, 10',
            ],
            [
                'tel' => '+7 343 261-62-00',
                'address' => 'ул. Аппаратная, 10',
            ],
            [
                'tel' => '+7 343 261-62-00',
                'address' => 'ул. Аппаратная, 10',
            ],
            [
                'tel' => '+7 343 261-62-00',
                'address' => 'ул. Аппаратная, 10',
            ],
        ],
    ],
]

?>


<section class="core-container service-centers" data-service-centers>
    <h2 class="service-centers_header site-header">Сервисные <span>центры</span></h2>
    <div class="service-centers_content">
        <ul class="service-centers_city-btn-wrapper">
            <?php foreach ($response_data_service_centers as $key => $item) { ?>
                <?php if ($key < 1 ) { ?>
                    <li>
                        <button class="active" data-service-centers-city-id="<?= $item['id'] ?>"><?= $item['city'] ?></button>
                    </li>
                <?php } else { ?>
                    <li>
                        <button data-service-centers-city-id="<?= $item['id'] ?>"><?= $item['city'] ?></button>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
        <div class="service-centers_address-wrapper">

            <?php foreach ($response_data_service_centers as $key => $item) { ?>
                <?php if ($key < 1 ) { ?>
                    <div class="service-centers_address active" data-service-centers-city-address-id="<?= $item['id'] ?>">
                        <?php foreach ($item['contacts'] as $contact) { ?>
                            <div class="service-centers_address_item" data-service-centers-address-item>
                                <img class="service-centers_address_item-background" src="/images/border-icon-5.png" alt="img" data-service-centers-address-item-background>
                                <img class="service-centers_address_item-background active" src="/images/border-icon-6.png" alt="img" data-service-centers-address-item-background>
                                <div class="service-centers_address_item_head">
                                    <p class="service-centers_address_item_address">
                                        <span>екатеринбург</span>
                                        <?= $contact['address'] ?>
                                        <button data-btn-open-map>показать на карте</button>
                                    </p>
                                    <a class="service-centers_address_item_tel" href="tel:+7343261-62-62"><?= $contact['tel'] ?></a>
                                    <p class="service-centers_address_item_working-hours"><span>Время работы</span>с 10:00 до 19:00 <br> без выходных</p>
                                </div>
                                <div class="service-centers_address_item_form-wrapper">
                                    <button class="service-centers_address_item_btn-open-form" data-service-centers-address-item-btn-open-form>Список оказываемых услуг в данном автосервисе</button>
                                    <div class="service-centers_address_item_form_label-wrapper" data-service-centers-address-item-form-label-wrapper>
                                        <a href="service-card.php">Ремонт ходовой части</a>
                                        <a href="service-card.php">Услуги диагноста-автоэлектрика</a>
                                        <a href="service-card.php">Ремонт тормозной системы</a>
                                        <a href="service-card.php">Шиномонтаж</a>
                                        <a href="service-card.php">Ремонт рулевого управления</a>
                                        <a href="service-card.php">Зарядка и обслуживание аккумуляторов</a>
                                        <a href="service-card.php">Работы по техническому обслуживанию</a>
                                        <a href="service-card.php">Ремонт стартеров и генераторов</a>
                                        <a href="service-card.php">Регулировка углов установки колёс</a>
                                    </div>
                                    <button class="service-centers_address_item_form_btn-submit" data-btn-appointment>Выбрать услугу и записаться</button>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } else { ?>
                    <div class="service-centers_address" data-service-centers-city-address-id="<?= $item['id'] ?>">
                        <?php foreach ($item['contacts'] as $contact) { ?>
                            <div class="service-centers_address_item" data-service-centers-address-item>
                                <img class="service-centers_address_item-background" src="/images/border-icon-5.png" alt="img" data-service-centers-address-item-background>
                                <img class="service-centers_address_item-background active" src="/images/border-icon-6.png" alt="img" data-service-centers-address-item-background>
                                <div class="service-centers_address_item_head">
                                    <p class="service-centers_address_item_address">
                                        <span>екатеринбург</span>
                                        <?= $contact['address'] ?>
                                        <button data-btn-open-map>показать на карте</button>
                                    </p>
                                    <a class="service-centers_address_item_tel" href="tel:+7343261-62-62"><?= $contact['tel'] ?></a>
                                </div>
                                <p class="service-centers_address_item_working-hours"><span>Время работы</span>с 10:00 до 19:00 <br> без выходных</p>
                                <div class="service-centers_address_item_form-wrapper">
                                    <button class="service-centers_address_item_btn-open-form" data-service-centers-address-item-btn-open-form>Список оказываемых услуг в данном автосервисе</button>
                                    <div class="service-centers_address_item_form_label-wrapper" data-service-centers-address-item-form-label-wrapper>
                                        <a href="service-card.php">Ремонт ходовой части</a>
                                        <a href="service-card.php">Услуги диагноста-автоэлектрика</a>
                                        <a href="service-card.php">Ремонт тормозной системы</a>
                                        <a href="service-card.php">Шиномонтаж</a>
                                        <a href="service-card.php">Ремонт рулевого управления</a>
                                        <a href="service-card.php">Зарядка и обслуживание аккумуляторов</a>
                                        <a href="service-card.php">Работы по техническому обслуживанию</a>
                                        <a href="service-card.php">Ремонт стартеров и генераторов</a>
                                        <a href="service-card.php">Регулировка углов установки колёс</a>
                                    </div>
                                    <button class="service-centers_address_item_form_btn-submit" data-btn-appointment>Выбрать услугу и записаться</button>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            <?php } ?>

        </div>
    </div>
    <button class="service-centers_btn-show-more btn-black" data-service-centers-btn-show-more>Показать все адреса</button>
</section>


<section class="core-container service-center">
    <div class="service-center_title-wrapper">
        <h2 class="site-header service-center_header">Сервисный центр</h2>
        <p class="service-center_description">Сервисные центры 12Вольт всегда стремятся превосходить ожидания наших клиентов в отношении качества и исключительного обслуживания, мы гарантированно обеспечим отличное состояние, стабильную и бесперебойную работу вашего автомобиля.</p>
    </div>
    <div class="service-center_items-wrapper">
        <p>Высокое качество запчастей<span>Оригинальные запчасти и качественные аналоги в наличии</span></p>
        <p>Уютная клиентская зона<span>В нашем автосервисе Вы можете выпить чашечку чая, посмотреть TV. Wi-Fi free</span></p>
        <p>Соблюдение сроков ремонта<span>При приеме автомобиля в ремонт составляется акт со сроком выдачи автомобиля</span></p>
    </div>
</section>


<?php

$response_data_reviews = [
    [
        'image' =>  '/images/96e259c27a45189b2da417bf7b3c92d0.png',
        'text' =>  'Отличный магазин, в первую очень из-за персонала. К таким людям хочется возвращаться. Отдельная благодарность сотруднику Владимиру, профессионал своего дела. Во всех вопросах проконсультировал и проявил инициативу в установке! Вернусь и не раз. Владимиру, профессионал своего дела. Во всех вопросах проконсультировал и проявил инициативу в установке! Вернусь и не раз',
        'name' =>  'Иван',
        'grade' =>  5,
    ],
    [
        'image' =>  '/images/96e259c27a45189b2da417bf7b3c92d0.png',
        'text' =>  'Отличный магазин, в первую очень из-за персонала. К таким людям хочется возвращаться. Отдельная благодарность сотруднику Владимиру, профессионал своего дела. Во всех вопросах проконсультировал и проявил инициативу в установке! Вернусь и не раз. Владимиру, профессионал своего дела. Во всех вопросах проконсультировал и проявил инициативу в установке! Вернусь и не раз',
        'name' =>  'Иван',
        'grade' =>  5,
    ],
    [
        'image' =>  '/images/96e259c27a45189b2da417bf7b3c92d0.png',
        'text' =>  'Отличный магазин, в первую очень из-за персонала. К таким людям хочется возвращаться. Отдельная благодарность сотруднику Владимиру, профессионал своего дела. Во всех вопросах проконсультировал и проявил инициативу в установке! Вернусь и не раз. Владимиру, профессионал своего дела. Во всех вопросах проконсультировал и проявил инициативу в установке! Вернусь и не раз',
        'name' =>  'Иван',
        'grade' =>  5,
    ],
    [
        'image' =>  '/images/96e259c27a45189b2da417bf7b3c92d0.png',
        'text' =>  'Отличный магазин, в первую очень из-за персонала. К таким людям хочется возвращаться. Отдельная благодарность сотруднику Владимиру, профессионал своего дела. Во всех вопросах проконсультировал и проявил инициативу в установке! Вернусь и не раз. Владимиру, профессионал своего дела. Во всех вопросах проконсультировал и проявил инициативу в установке! Вернусь и не раз',
        'name' =>  'Иван',
        'grade' =>  5,
    ],
]

?>


<section class="reviews">
    <div class="core-container sale">
        <div class="reviews_header-wrapper">
            <h2 class="sale_title site-header">Отзывы</h2>
            <div class="reviews_total-value"><span></span>4.87</div>
        </div>
        <div class="sale_btn-wrapper">
            <div class="sale-swiper-button-prev"></div>
            <div class="sale-swiper-button-next"></div>
        </div>
        <div class="sale-swiper">
            <div class="swiper-wrapper">
                <?php foreach ($response_data_reviews as $item) { ?>
                    <div class="swiper-slide">
                        <div class="reviews_item">
                            <p class="reviews_item_text"><?= $item['text'] ?></p>
                            <div class="reviews_item_footer-wrapper">
                                <img class="reviews_item_img" src="<?= $item['image'] ?>" alt="img">
                                <div class="reviews_item_name-wrapper">
                                    <div class="reviews_item_stars-wrapper">
                                        <?php for ($i = 0; $i < $item['grade']; $i++) { ?>
                                            <span></span>
                                        <?php } ?>
                                    </div>
                                    <span class="reviews_item_name"><?= $item['name'] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>


<?php

$response_data_questions = [
    [
        'question' => 'Как долго длится обслуживание одного автомобиля?',
        'answer' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,',
    ],
    [
        'question' => 'Сколько стоят ваши услуги?',
        'answer' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,',
    ],
    [
        'question' => 'Предоставляете ли вы гарантию на свои услуги?',
        'answer' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,',
    ],
]

?>


<section class="questions-wrapper">
    <div class="core-container questions">
        <h2 class="site-header questions_header">Ответы <br> на вопросы</h2>
        <div class="questions_content">
            <img class="questions_core_img" src="/images/094374fefa195448aba7c9bb3e1a2a8f.png" alt="img">
            <div class="questions_items-wrapper" data-questions-items-wrapper>

                <?php foreach ($response_data_questions as $item) { ?>
                    <div class="questions_item" data-question-wrapper>
                        <div class="questions_item_btn" data-question-btn>
                            <p><?= $item['question'] ?></p>
                        </div>
                        <div class="questions_item_answer" data-question-hidden>
                            <p>
                                <?= $item['answer'] ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>

                <div class="questions_ask-question">
                    <p class="questions_ask-question_title">Нужна консультация или остались вопросы?</p>
                    <button class="questions_ask-question_btn" data-btn-ask-question>Задать вопрос</button>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
require 'footer.php';
?>



