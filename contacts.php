<?php
require 'head.php';
?>


<?php
include __DIR__ . '/breadcrumb.php';
breadcrumb([['url' => '', 'name' => 'контакты']]);
?>


<section class="core-container contacts">
    <h1 class="contacts_header site-header">Контакты</h1>
    <div class="contacts_content">
        <form class="contacts_form" action="">
            <div class="contacts_form_item" data-select-wrapper>
                <span class="contacts_form_item_label">Выберите город</span>
                <span class="contacts_form_item_input" data-select-value-and-btn>г. Екатеринбург</span>
                <div class="contacts_form_select_label-wrapper" data-select-option-wrapper>
                    <div>
                        <?php foreach ([1,2,3,4,5,6,7,8,9,10] as $item) { ?>
                            <label class="contacts_form_select_label">
                                Нижний Тагил
                                <input type="radio" name="select-radio" value="Нижний Тагил" data-select-option>
                            </label>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="contacts_form_item" data-select-wrapper>
                <span class="contacts_form_item_label">Выберите адрес</span>
                <span class="contacts_form_item_input" data-select-value-and-btn>ул. Шефская 95А</span>
                <div class="contacts_form_select_label-wrapper" data-select-option-wrapper>
                    <div>
                        <?php foreach ([1,2,3,4,5,6,7,8,9,10] as $item) { ?>
                            <label class="contacts_form_select_label">
                                ул. Аппаратная, 5
                                <input type="radio" name="select-radio" value="ул. Аппаратная, 5" data-select-option>
                            </label>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="contacts_form_item" data-select-wrapper>
                <span class="contacts_form_item_label">Выберите услугу</span>
                <span class="contacts_form_item_input" data-select-value-and-btn>Замена аккумулятора</span>
                <div class="contacts_form_select_label-wrapper" data-select-option-wrapper>
                    <div>
                        <?php foreach ([1,2,3,4,5,6,7,8,9,10] as $item) { ?>
                            <label class="contacts_form_select_label">
                                Ремонт тормозной системы
                                <input type="radio" name="select-radio" value="Ремонт тормозной системы" data-select-option>
                            </label>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <label class="contacts_form_input_label">
                Имя*
                <input type="text" placeholder="Иван">
            </label>
            <label class="contacts_form_input_label">
                Телефон*
                <input type="tel" placeholder="8 900 000 00 00" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
            </label>
            <button class="contacts_form_btn-submit btn-black">Записаться в сервисный центр</button>
        </form>
        <div class="contacts_map-wrapper">
            <div class="map-marker-wrapper" data-map-marker-wrapper>
                <div class="map-marker" data-map-marker></div>
                <div class="map-marker_description" data-map-marker-description>
                    <div class="map-marker_description_head">
                        <div class="map-marker_description_title-wrapper">
                            <p class="map-marker_description_title">
                                г. Екатеринбург
                                <span>ул. Шефская 95А</span>
                            </p>
                            <p class="map-marker_description_working-hours">
                                <span>С 8:00 до 21:00</span> без выходных
                            </p>
                        </div>
                        <button class="map-marker_btn-close" data-map-marker-btn-close></button>
                    </div>
                    <a class="map-marker_description_tel" href="tel:+7343261-62-62">+7 343 261-62-62</a>
                    <div class="map-marker_description_footer">
                        <button class="map-marker_description_btn">Выбрать услугу и записаться</button>
                        <button class="map-marker_description_btn">проложить маршрут</button>
                    </div>
                </div>
            </div>
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A199d8316421c34bab0bf81400a1ea3bd857cfb587baa6a6848cb7d87766c765f&amp;source=constructor" width="646" height="665" frameborder="0"></iframe>
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


<section class="core-container our-centers">
    <h2 class="our-centers_header site-header">Фотографии нашего центра <span>и&nbsp;процесса работы</span></h2>
    <div class="our-centers_content">
        <img class="our-centers_img" src="/images/our-centers-image-1.png" alt="img">
        <img class="our-centers_img" src="/images/our-centers-image-2.png" alt="img">
        <img class="our-centers_img" src="/images/our-centers-image-3.png" alt="img">
        <img class="our-centers_img" src="/images/our-centers-image-4.png" alt="img">
        <img class="our-centers_img" src="/images/our-centers-image-5.png" alt="img">
    </div>
</section>


<section class="core-container feedback">
    <div class="feedback_container">
        <h2 class="feedback_header site-header">Форма обратной связи</h2>
        <img class="feedback_img" src="/images/094374fefa195448aba7c9bb3e1a2a8f.png" alt="img">
        <div class="feedback_form-wrapper">
            <form action="">
                <label class="feedback_label">
                    <input type="text" placeholder="Введите ваше имя*">
                </label>
                <label class="feedback_label">
                    <input type="text" placeholder="Введите ваш номер телефона*">
                </label>
                <label class="feedback_label">
                    <textarea name="" placeholder="Напишите ваш вопрос или проблему, с&nbsp;которой столкнулись" cols="30" rows="10"></textarea>
                </label>
                <button class="feedback_btn-submit">Отправить данные</button>
            </form>
            <p class="feedback_policy">Нажимая на кнопку, вы соглашаетесь с <a href="">политикой конфиденциальности</a></p>
        </div>
    </div>
</section>


<?php
require 'footer.php';
?>



