<?php
$data = file_get_contents('data.json');
$result = json_decode($data, true);
$response_data_contacts = [];
$key_value = [];

foreach ($result['features'] as $item) {
    if ($key_value) {
        if (!in_array($item['properties']['city'], $key_value)) {
            array_push($key_value, $item['properties']['city']);
        }
    }
    else {
        array_push($key_value, $item['properties']['city']);
    }
}

foreach ($key_value as $key_value_item) {
    array_push($response_data_contacts, ['city' => $key_value_item, "address" => []]);
}

foreach ($result['features'] as $item) {
    foreach ($response_data_contacts as $key => $city_item) {
        if ($city_item['city'] === $item['properties']['city']) {
            array_push($response_data_contacts[$key]['address'], ['name' => $item['properties']['address'], 'location' => $item['properties']['coordinatesForBalloon'], 'services' => $item['properties']['services'], 'tel' => $item['properties']['tel'] ]);
        }
    }
}
?>


<?php
require 'head.php';
?>


<section class="core-container banner">
    <img class="banner_img" src="/images/Rectangle.png" alt="">
    <div class="banner_content">
        <h1 class="banner_title site-header">Сервисный центр для вашего автомобиля</h1>
        <div class="banner_appointment-wrapper">
            <p class="banner_appointment_title">
                <span>Работаем с 8:00 до 21:00 (без выходных)</span>
                Выбрать автосервис
            </p>
            <button class="banner_appointment_btn btn-yellow" data-btn-appointment>записаться</button>
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
                    <form class="modal_form" action="" data-selects-core-wrapper>
                        <div class="modal_form_special_item-wrapper">
                            <div class="contacts_form_item" data-select-wrapper>
                                <span class="contacts_form_item_label">Адреса автосервисов</span>
                                <span class="contacts_form_item_input" data-select-value-and-btn>г. Екатеринбург</span>
                                <div class="contacts_form_select_label-wrapper" data-select-option-wrapper data-contacts-form-city>
                                    <div class="active">
                                        <?php foreach ($response_data_contacts as $city) { ?>
                                            <label class="contacts_form_select_label">
                                                <?= $city['city'] ?>
                                                <input type="radio" name="select-radio-city" value="<?= $city['city'] ?>" data-select-option data-select-contacts-city>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="contacts_form_item" data-select-wrapper>
                                <span class="contacts_form_item_input" data-select-value-and-btn>ул. Шефская 95А</span>
                                <div class="contacts_form_select_label-wrapper" data-select-option-wrapper data-contacts-form-address>
                                    <?php foreach ($response_data_contacts as $key => $city) { ?>
                                        <div class="<?= $key === 0 ? 'active-first' : '' ?>" data-select-collection-city-id="<?= $city['city'] ?>">
                                            <?php foreach ($city['address'] as $address) { ?>
                                                <label class="contacts_form_select_label">
                                                    <?= $address['name'] ?>
                                                    <input type="radio" name="select-radio-address" value="<?= $address['name'] ?>" data-address-location="<?= $address['location'][0] ?>, <?=$address['location'][1] ?>" data-select-option data-select-contacts-address>
                                                </label>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="contacts_form_item" data-select-wrapper>
                            <span class="contacts_form_item_label">Выберите услугу</span>
                            <span class="contacts_form_item_input" data-select-value-and-btn>Замена аккумулятора</span>
                            <div class="contacts_form_select_label-wrapper" data-select-option-wrapper data-contacts-form-services>
                                <?php foreach ($response_data_contacts as $city) { ?>
                                    <?php foreach ($city['address'] as $key => $address) { ?>
                                        <div class="<?= $key === 0 ? 'active-first' : '' ?>" data-select-collection-address-id="<?= $address['name']?>">
                                            <?php foreach ($address['services'] as $service) { ?>
                                                <label class="contacts_form_select_label">
                                                    <?= $service ?>
                                                    <input type="radio" name="select-radio-service" value="<?= $service ?>" data-select-option>
                                                </label>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>

                        <label class="modal_form_label-core">
                            Имя*
                            <input type="text" placeholder="Иван">
                        </label>
                        <label class="modal_form_label-core">
                            Телефон*
                            <input type="tel" pattern="[0-9]{11}" placeholder="8 900 000 00 00">
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

$response_data_services = [
    [
        'image' => '/images/service-1.png',
        'title' => 'Ремонт ходовой части',
    ],
    [
        'image' => '/images/service-2.png',
        'title' => 'Услуги диагноста-автоэлектрика',
    ],
    [
        'image' => '/images/services-10.png"',
        'title' => 'Шиномонтаж',
    ],
    [
        'image' => '/images/service-3.png',
        'title' => 'Ремонт тормозной системы',
    ],
    [
        'image' => '/images/service-4.png',
        'title' => 'Ремонт рулевого управления',
    ],
    [
        'image' => '/images/service-1.png',
        'title' => 'Ремонт ходовой части',
    ],
]

?>


<section class="services-wrapper" data-services-wrapper>
    <div class="core-container services">
        <h2 class="site-header">Услуги</h2>
        <?php foreach ($response_data_services as $item) { ?>
            <a class="services_item" href="/service-card.php" data-services-item>
                <img class="services_item_background" src="/images/border-icon-1.png" alt="icon">
                <p class="service_item_title"><?= $item['title'] ?></p>
                <div class="service_item_content">
                    <span>подробнее</span>
                    <img class="service_item_img" src="<?= $item['image'] ?>" alt="img">
                </div>
            </a>
        <?php } ?>
    </div>
    <div class="core-container">
        <button class="services_btn-show-all btn-black" data-services_btn-show-all>Смотреть все услуги</button>
    </div>
</section>



<section class="core-container">
    <section class="make-an-appointment">
        <h2 class="make-an-appointment_title site-header">Хочешь записаться на ремонт или ТО</h2>
        <img class="make-an-appointment_img" src="/images/make-an-appointment-image.png" alt="img">
        <button class="make-an-appointment_btn" data-btn-appointment>Выбрать автосервис</button>
    </section>
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


<section class="core-container diagnostics">
    <h2 class="diagnostics_header site-header"><span>Почему</span> автовладельцы доверяют диагностику автомобиля <span>нашим мастерам</span></h2>
    <div class="diagnostics_items-wrapper">
        <div class="diagnostics_item">
            <span class="diagnostics_item_title">Сбоственный магазин автозапчастей</span>
            <img class="diagnostics_item_img" src="/images/diagnostics-image-1.png" alt="img">
        </div>
        <div class="diagnostics_item">
            <span class="diagnostics_item_title">Современное оборудование</span>
            <img class="diagnostics_item_img" src="/images/diagnostics-image-2.png" alt="img">
        </div>
        <div class="diagnostics_item">
            <span class="diagnostics_item_title">Команда профессионалов</span>
            <img class="diagnostics_item_img" src="/images/diagnostics-image-3.png" alt="img">
            <img class="diagnostics_item_img" src="/images/diagnostics-image-4.png" alt="img">
        </div>
        <div class="diagnostics_item">
            <span class="diagnostics_item_title">Ремонт авто любых марок</span>
            <div class="diagnostics_item_img-wrapper">
                <img src="/images/model-1.png" alt="img">
                <img src="/images/model-2.png" alt="img">
                <img src="/images/model-3.png" alt="img">
                <img src="/images/model-4.png" alt="img">
                <img src="/images/model-5.png" alt="img">
                <img src="/images/model-6.png" alt="img">
                <img src="/images/model-7.png" alt="img">
                <img src="/images/model-8.png" alt="img">
                <img src="/images/model-9.png" alt="img">
                <img src="/images/model-10.png" alt="img">
            </div>
        </div>
        <div class="diagnostics_item">
            <span class="diagnostics_item_title">Обслуживание корпоративных клиентов</span>
            <img class="diagnostics_item_img" src="/images/diagnostics-image-5.png" alt="img">
        </div>
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


<section class="core-container about-company">
    <h2 class="about-company_header site-header"><span>о компании</span> Мы компания 12&nbsp;ВОЛЬТ <span>радуем своих клиентов</span> с 2010 года</h2>
    <div class="about-company_content">
        <div class="about-company_about-us">
            <p class="about-company_about-us_title">Рассказываем о себе и своем опыте</p>
            <a class="about-company_about-us_link" href="">Подробнее</a>
        </div>
        <div class="about-company_our-team">
            <p class="about-company_our-team_title">Наша команда</p>
            <div class="about-company_our-team_img-wrapper">
                <img class="about-company_our-team_img" src="/images/our-master-809.png" alt="img">
                <img class="about-company_our-team_img" src="/images/our-master-810.png" alt="img">
                <img class="about-company_our-team_img" src="/images/our-master-811.png" alt="img">
                <img class="about-company_our-team_img" src="/images/our-master-812.png" alt="img">
                <img class="about-company_our-team_img" src="/images/our-master-813.png" alt="img">
                <span></span>
            </div>
        </div>
    </div>
</section>


<?php

$response_data_questions = [
    [
        'question' => 'Как долго длится обслуживание одного автомобиля?',
        'answer' => ' Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,',
    ],
    [
        'question' => 'Сколько стоят ваши услуги?',
        'answer' => ' Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,',
    ],
    [
        'question' => 'Предоставляете ли вы гарантию на свои услуги?',
        'answer' => ' Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,',
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



