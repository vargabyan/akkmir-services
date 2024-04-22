<?php
require 'head.php';
?>


<section class="core-container banner">
    <img class="banner_img" src="/images/Rectangle%205490.png" alt="">
    <div class="banner_content">
        <p class="banner_title site-header">Сервисный центр для вашего автомобиля</p>
        <div class="banner_appointment-wrapper">
            <h1 class="banner_appointment_title">
                <span>Работаем с 8:00 до 21:00 (без выходных)</span>
                Выбрать автосервис
            </h1>
            <button class="banner_appointment_btn btn-yellow">записаться</button>
        </div>
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
]

?>


<section class="services-wrapper" data-services-wrapper>
    <div class="core-container services">
        <h1 class="site-header">Услуги</h1>
        <?php foreach ($response_data_services as $item) { ?>
            <a class="services_item" href="" data-services-item>
                <p class="service_item_title"><?= $item['title'] ?></p>
                <div class="service_item_content">
                    <span>подробнее</span>
                    <img class="service_item_img" src="<?= $item['image'] ?>" alt="img">
                </div>
            </a>
        <?php } ?>
    </div>
    <button class="core-container services_btn-show-all btn-black" data-services_btn-show-all>Смотреть все услуги</button>
</section>


<?php
require 'footer.php';
?>



