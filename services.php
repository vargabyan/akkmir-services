<?php
require 'head.php';
?>


<?php
include __DIR__ . '/breadcrumb.php';
breadcrumb([['url' => '', 'name' => 'Услуги']]);
?>


<?php

$response_data_services = [
    [
        'image' => '/images/9af86cef7963d3bd73f5028b6577c378.jpeg',
        'title' => 'Ремонт ходовой части',
    ],
    [
        'image' => '/images/c228152cc83364e3417834aa6119c49c.png',
        'title' => 'Услуги диагноста-автоэлектрика',
    ],
    [
        'image' => '/images/image 10.png"',
        'title' => 'Шиномонтаж',
    ],
    [
        'image' => '/images/710f2eca8514235077dcf87f872812a4.jpeg',
        'title' => 'Ремонт тормозной системы',
    ],
    [
        'image' => '/images/b3a6b0dcddf8cd717879bf69226d5e6b.png',
        'title' => 'Ремонт рулевого управления',
    ],
    [
        'image' => '/images/b3a6b0dcddf8cd717879bf69226d5e6b.png',
        'title' => 'Ремонт рулевого управления',
    ],
    [
        'image' => '/images/image 79.png',
        'title' => 'Работы по техническому обслуживанию',
    ],
    [
        'image' => '/images/image 78.png',
        'title' => 'Ремонт стартеров и генераторов',
    ],
    [
        'image' => '/images/image 80.png',
        'title' => 'Регулировка углов установки колёс',
    ],
]

?>


<section class="service-page_services core-container" data-services-wrapper>
    <h1 class="service-page_services_header site-header">Услуги <span>которые мы осуществляем</span></h1>
    <div class="services">
        <?php foreach ($response_data_services as $item) { ?>
            <a class="services_item" href="/service-card.php" data-services-item>
                <img class="services_item_background" src="/images/Vector 348.png" alt="icon">
                <p class="service_item_title"><?= $item['title'] ?></p>
                <div class="service_item_content">
                    <span>подробнее</span>
                    <img class="service_item_img" src="<?= $item['image'] ?>" alt="img">
                </div>
            </a>
        <?php } ?>
    </div>
</section>


<section class="core-container">
    <section class="make-an-appointment">
        <h1 class="make-an-appointment_title site-header">Хочешь записаться на ремонт или ТО</h1>
        <img class="make-an-appointment_img" src="/images/snapedit_1711452112239 1.png" alt="img">
        <button class="make-an-appointment_btn" data-btn-appointment>Выбрать автосервис</button>
    </section>
</section>


<?php

$response_data_sale = [
    [
        'image' =>  '/images/f456d721d16987e0a0d52404d32b06df.png',
        'title' =>  'Ремонт проколов и порезов',
        'subtitle' =>  'Вулканизация шин',
        'discount' =>  '20%',
        'id' => '2gf6df65fd6fd65',
        'text' => 'Если аккумулятор вашего устройства потерял свою емкость или вовсе не работает, мы сможем восстановить его работоспособность с помощью специального оборудования.
Если аккумулятор вашего устройства потерял свою емкость или вовсе не работает, мы сможем восстановить его работоспособность с помощью специального оборудования.',
    ],
    [
        'image' =>  '/images/1bc96a447f4ae50a09b85f369d4cf5c8.png',
        'title' =>  'Замена пасла в двигателе в подарок',
        'subtitle' =>  'При покупке от 4-х дитров моторного масла и масляного фильтра в наших магазинах',
        'discount' =>  '',
        'id' => '564fd65d6fd87df5',
        'text' => 'Если аккумулятор вашего устройства потерял свою емкость или вовсе не работает, мы сможем восстановить его работоспособность с помощью специального оборудования.
Если аккумулятор вашего устройства потерял свою емкость или вовсе не работает, мы сможем восстановить его работоспособность с помощью специального оборудования.',
    ],
    [
        'image' =>  '/images/f456d721d16987e0a0d52404d32b06df.png',
        'title' =>  'Ремонт проколов и порезов',
        'subtitle' =>  'Вулканизация шин',
        'discount' =>  '20%',
        'id' => '2j6fgh6df564',
        'text' => 'Если аккумулятор вашего устройства потерял свою емкость или вовсе не работает, мы сможем восстановить его работоспособность с помощью специального оборудования.
Если аккумулятор вашего устройства потерял свою емкость или вовсе не работает, мы сможем восстановить его работоспособность с помощью специального оборудования.',
    ],
    [
        'image' =>  '/images/1bc96a447f4ae50a09b85f369d4cf5c8.png',
        'title' =>  'Замена пасла в двигателе в подарок',
        'subtitle' =>  'При покупке от 4-х дитров моторного масла и масляного фильтра в наших магазинах',
        'discount' =>  '',
        'id' => '8s65sd65fg45',
        'text' => 'Если аккумулятор вашего устройства потерял свою емкость или вовсе не работает, мы сможем восстановить его работоспособность с помощью специального оборудования.
Если аккумулятор вашего устройства потерял свою емкость или вовсе не работает, мы сможем восстановить его работоспособность с помощью специального оборудования.',
    ],
]

?>


<section class="core-container sale">
    <h1 class="sale_title site-header">Акции</h1>
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
            <button class="modal_btn-close" data-modal-for-sale-btn-close></button>
            <div class="modal-for-sale-swiper_text-wrapper">
                <span class="modal-for-sale-swiper_discount <?= $item['discount'] ? 'active' : '' ?>">скидка <?= $item['discount'] ?></span>
                <h1 class="modal-for-sale-swiper_title"><?= $item['title'] ?></h1>
                <p class="modal-for-sale-swiper_text"><?= $item['text'] ?></p>
                <button class="modal-for-sale-swiper_btn-appointment btn-yellow" data-btn-appointment>записаться</button>
            </div>
            <img class="modal-for-sale-swiper_img" src="<?= $item['image'] ?>" alt="img">
        </div>
    <?php } ?>
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
    <h1 class="service-centers_header site-header">Сервисные <span>центры</span></h1>
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
                                <img class="service-centers_address_item-background" src="/images/Vector 355.png" alt="img" data-service-centers-address-item-background>
                                <img class="service-centers_address_item-background active" src="/images/Vector 356.png" alt="img" data-service-centers-address-item-background>
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
                                        <a href="">Ремонт ходовой части</a>
                                        <a href="">Услуги диагноста-автоэлектрика</a>
                                        <a href="">Ремонт тормозной системы</a>
                                        <a href="">Шиномонтаж</a>
                                        <a href="">Ремонт рулевого управления</a>
                                        <a href="">Зарядка и обслуживание аккумуляторов</a>
                                        <a href="">Работы по техническому обслуживанию</a>
                                        <a href="">Ремонт стартеров и генераторов</a>
                                        <a href="">Регулировка углов установки колёс</a>
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
                                <img class="service-centers_address_item-background" src="/images/Vector 355.png" alt="img" data-service-centers-address-item-background>
                                <img class="service-centers_address_item-background active" src="/images/Vector 356.png" alt="img" data-service-centers-address-item-background>
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
                                        <a href="">Ремонт ходовой части</a>
                                        <a href="">Услуги диагноста-автоэлектрика</a>
                                        <a href="">Ремонт тормозной системы</a>
                                        <a href="">Шиномонтаж</a>
                                        <a href="">Ремонт рулевого управления</a>
                                        <a href="">Зарядка и обслуживание аккумуляторов</a>
                                        <a href="">Работы по техническому обслуживанию</a>
                                        <a href="">Ремонт стартеров и генераторов</a>
                                        <a href="">Регулировка углов установки колёс</a>
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
            <h1 class="sale_title site-header">Отзывы</h1>
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
        'answer' => '',
    ],
    [
        'question' => 'Сколько стоят ваши услуги?',
        'answer' => '',
    ],
    [
        'question' => 'Предоставляете ли вы гарантию на свои услуги?',
        'answer' => '',
    ],
]

?>


<section class="questions-wrapper">
    <div class="core-container questions">
        <h1 class="site-header questions_header">Ответы <br> на вопросы</h1>
        <div class="questions_content">
            <img class="questions_core_img" src="/images/094374fefa195448aba7c9bb3e1a2a8f.png" alt="img">
            <div class="questions_items-wrapper">

                <?php foreach ($response_data_questions as $item) { ?>
                    <div class="questions_item">
                        <div class="questions_item_btn">
                            <p><?= $item['question'] ?></p>
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



