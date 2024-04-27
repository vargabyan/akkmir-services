<?php
require 'head.php';
?>


<?php
include __DIR__ . '/breadcrumb.php';
breadcrumb([['url' => '/services.php', 'name' => 'Услуги'], ['url' => '', 'name' => 'Зарядка и обслуживание аккумуляторов']]);
?>


<section class="core-container our-works">
    <h1 class="our-works_header site-header">Ремонт ходовой части</h1>
    <div class="our-works_content">
        <div class="our-works_item">
            <img class="our-works_item_background" src="/images/Vector 322.png" alt="icon">
            <p class="our-works_title">Радуем своих клиентов</p>
            <span>с 2016</span>
        </div>
        <div class="our-works_item">
            <img class="our-works_item_background" src="/images/Vector 322.png" alt="icon">
            <p class="our-works_title">Чиним машин в неделю</p>
            <span>210</span>
        </div>
        <div class="our-works_select-car-service">
            <div class="our-works_select-car-service_text-wrapper">
                <span>Работаем с 8:00 до 21:00 (без выходных)</span>
                <p class="our-works_select-car-service_title">Выбрать автосервис и&nbsp;записаться на услугу</p>
                <button class="our-works_select-car-service_btn btn-yellow">Записаться <span>в автосервис</span></button>
            </div>
            <img class="our-works_select-car-service_img" src="/images/Vector 344.png" alt="img">
            <img class="our-works_select-car-service_img" src="/images/Vector 368.png" alt="img">
        </div>
    </div>
</section>


<section class="core-container prices">
    <h1 class="prices_header site-header">Цены <span>*стоимость может варьироваться в зависимости от марки автомобилей</span></h1>
    <div class="prices_content">
        <?php foreach ([1,2,3,4] as $item) { ?>
            <div class="prices_item">
                <img class="prices_item-background" src="/images/Vector 365.png" alt="icon">
                <img class="prices_item-background" src="/images/Vector 368_.png" alt="icon">
                <p class="prices_item_title">
                    <span>Обслуживание аккумулятора</span>
                    Если аккумулятор вашего устройства потерял свою емкость или вовсе не работает, мы сможем восстановить его работоспособность с помощью специального оборудования.
                </p>
                <p class="prices_item_price">от <span>2 560 руб.</span></p>
                <button class="prices_item_btn">записаться</button>
            </div>
        <?php } ?>
    </div>
</section>


<?php

$response_data_sale = [
    [
        'image' =>  '/images/f456d721d16987e0a0d52404d32b06df.png',
        'title' =>  'Ремонт проколов и порезов',
        'subtitle' =>  'Вулканизация шин',
        'discount' =>  '20%',
    ],
    [
        'image' =>  '/images/1bc96a447f4ae50a09b85f369d4cf5c8.png',
        'title' =>  'Замена пасла в двигателе в подарок',
        'subtitle' =>  'При покупке от 4-х дитров моторного масла и масляного фильтра в наших магазинах',
        'discount' =>  '',
    ],
    [
        'image' =>  '/images/f456d721d16987e0a0d52404d32b06df.png',
        'title' =>  'Ремонт проколов и порезов',
        'subtitle' =>  'Вулканизация шин',
        'discount' =>  '20%',
    ],
    [
        'image' =>  '/images/1bc96a447f4ae50a09b85f369d4cf5c8.png',
        'title' =>  'Замена пасла в двигателе в подарок',
        'subtitle' =>  'При покупке от 4-х дитров моторного масла и масляного фильтра в наших магазинах',
        'discount' =>  '',
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
                            <a class="sale_item_link" href="">подробнее</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
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
                                    <span>показать на карте</span>
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
                                <button class="service-centers_address_item_form_btn-submit">Выбрать услугу и записаться</button>
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
                                        <span>показать на карте</span>
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
                                    <button class="service-centers_address_item_form_btn-submit">Выбрать услугу и записаться</button>
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
                    <button class="questions_ask-question_btn">Задать вопрос</button>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
require 'footer.php';
?>



