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
                <img class="services_item_background" src="/images/Vector 348.png" alt="icon">
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
        <h1 class="make-an-appointment_title site-header">Хочешь записаться на ремонт или ТО</h1>
        <img class="make-an-appointment_img" src="/images/snapedit_1711452112239 1.png" alt="img">
        <button class="make-an-appointment_btn">Выбрать автосервис</button>
    </section>
</section>


<section class="core-container service-centers">
    <h1 class="service-centers_header site-header">Сервисные <span>центры</span></h1>
    <div>
        <div>

        </div>
        <div>

        </div>
    </div>
    <button class="btn-black">Показать все адреса</button>
</section>


<section class="core-container diagnostics">
    <h1 class="diagnostics_header site-header"><span>Почему</span> автовладельцы доверяют диагностику автомобиля <span>нашим мастерам</span></h1>
    <div class="diagnostics_items-wrapper">
        <div class="diagnostics_item">
            <span class="diagnostics_item_title">Сбоственный магазин автозапчастей</span>
            <img class="diagnostics_item_img" src="/images/image 65.png" alt="img">
        </div>
        <div class="diagnostics_item">
            <span class="diagnostics_item_title">Современное оборудование</span>
            <img class="diagnostics_item_img" src="/images/image 66.png" alt="img">
        </div>
        <div class="diagnostics_item">
            <span class="diagnostics_item_title">Команда профессионалов</span>
            <img class="diagnostics_item_img" src="/images/image 63.png" alt="img">
            <img class="diagnostics_item_img" src="/images/image 63_.png" alt="img">
        </div>
        <div class="diagnostics_item">
            <span class="diagnostics_item_title">Ремонт авто любых марок</span>
            <div class="diagnostics_item_img-wrapper">
                <img src="/images/image 75.png" alt="img">
                <img src="/images/image 72.png" alt="img">
                <img src="/images/image 74.png" alt="img">
                <img src="/images/image 68.png" alt="img">
                <img src="/images/image 69.png" alt="img">
                <img src="/images/image 69 (1).png" alt="img">
                <img src="/images/image 70.png" alt="img">
                <img src="/images/image 71.png" alt="img">
                <img src="/images/image 73.png" alt="img">
                <img src="/images/image 68 (1).png" alt="img">
            </div>
        </div>
        <div class="diagnostics_item">
            <span class="diagnostics_item_title">Обслуживание корпоративных клиентов</span>
            <img class="diagnostics_item_img" src="/images/image 67.png" alt="img">
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


<section class="core-container about-company">
    <h1 class="about-company_header site-header"><span>о компании</span> Мы компания 12&nbsp;ВОЛЬТ <span>радуем своих клиентов</span> с 2010 года</h1>
    <div class="about-company_content">
        <div class="about-company_about-us">
            <p class="about-company_about-us_title">Рассказываем о себе и своем опыте</p>
            <a class="about-company_about-us_link" href="">Подробнее</a>
        </div>
        <div class="about-company_our-team">
            <p class="about-company_our-team_title">Наша команда</p>
            <div class="about-company_our-team_img-wrapper">
                <img class="about-company_our-team_img" src="/images/Ellipse 809.png" alt="img">
                <img class="about-company_our-team_img" src="/images/Ellipse 810.png" alt="img">
                <img class="about-company_our-team_img" src="/images/Ellipse 811.png" alt="img">
                <img class="about-company_our-team_img" src="/images/Ellipse 812.png" alt="img">
                <img class="about-company_our-team_img" src="/images/Ellipse 813.png" alt="img">
                <span></span>
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



