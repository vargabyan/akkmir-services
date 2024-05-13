<section class="modal-wrapper" data-modal-wrapper data-modal-appointment>
    <div class="modal_content" data-modal-content>
        <button class="modal_btn-close" data-modal-btn-close></button>
        <p class="modal_title">
            Запишитесь в автосервис в удобном для вас городе
            <span>Наш менеджер свяжется с вами в ближайшее время для уточнения деталей заявки</span>
        </p>
        <form class="modal_form" action="">
            <div class="modal_form_special_item-wrapper">
                <div class="contacts_form_item" data-select-wrapper>
                    <span class="contacts_form_item_label">Адреса автосервисов</span>
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

            <label class="modal_form_label-core">
                Имя*
                <input type="text" placeholder="Иван">
            </label>
            <label class="modal_form_label-core">
                Телефон*
                <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="8 900 000 00 00">
            </label>

            <div class="modal_footer">
                <button class="modal_btn-submit btn-yellow" data-modal-btn-submit>Оставить заявку</button>
                <span class="modal_subtitle">
                    Нажимая на кнопку, вы соглашаетесь с
                    <a href="">политикой конфиденциальности</a>
                </span>
            </div>
        </form>
    </div>
    <div class="modal_content_success" data-modal-success-content>
        <button class="modal_btn-close" data-modal-btn-close></button>
        <p class="modal_title">
            Ваша заявка успешно отправлена!
            <span>Мы перезвоним Вам в ближайшее время</span>
        </p>
        <span class="modal_content_success_icon"></span>
    </div>
</section>


<section class="modal-wrapper" data-modal-wrapper data-modal-ask-question>
    <div class="modal_content" data-modal-content>
        <button class="modal_btn-close" data-modal-btn-close></button>
        <p class="modal_title">
            Задайте свой вопрос опытному специалисту
        </p>
        <form class="modal_form" action="">

            <label class="modal_form_label-core">
                Имя*
                <input type="text" placeholder="Иван">
            </label>
            <label class="modal_form_label-core">
                Телефон*
                <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="8 900 000 00 00">
            </label>
            <label class="modal_form_label-core">
                Задать свой вопрос
                <textarea name="" id="" cols="30" rows="10" placeholder="Сколько времени понадобиться на замену и установку аккумулятора?"></textarea>
            </label>

            <div class="modal_footer">
                <button class="modal_btn-submit btn-yellow" data-modal-btn-submit>Оставить заявку</button>
                <span class="modal_subtitle">
                Нажимая на кнопку, вы соглашаетесь с
                <a href="">политикой конфиденциальности</a>
            </span>
            </div>
        </form>
    </div>
    <div class="modal_content_success" data-modal-success-content>
        <button class="modal_btn-close" data-modal-btn-close></button>
        <p class="modal_title">
            Ваша заявка успешно отправлена!
            <span>Мы перезвоним Вам в ближайшее время</span>
        </p>
        <span class="modal_content_success_icon"></span>
    </div>
</section>


<section class="modal-wrapper" data-modal-wrapper data-modal-request-a-call>
    <div class="modal_content" data-modal-content>
        <button class="modal_btn-close" data-modal-btn-close></button>
        <p class="modal_title">
            Заказать звонок
        </p>
        <form class="modal_form" action="">

            <label class="modal_form_label-core">
                Имя*
                <input type="text" placeholder="Иван">
            </label>
            <label class="modal_form_label-core">
                Телефон*
                <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="8 900 000 00 00">
            </label>

            <div class="modal_footer">
                <button class="modal_btn-submit btn-yellow" data-modal-btn-submit>Оставить заявку</button>
                <span class="modal_subtitle">
                Нажимая на кнопку, вы соглашаетесь с
                <a href="">политикой конфиденциальности</a>
            </span>
            </div>
        </form>
    </div>
    <div class="modal_content_success" data-modal-success-content>
        <button class="modal_btn-close" data-modal-btn-close></button>
        <p class="modal_title">
            Ваша заявка успешно отправлена!
            <span>Мы перезвоним Вам в ближайшее время</span>
        </p>
        <span class="modal_content_success_icon"></span>
    </div>
</section>


<?php

$response_data_cities = [
    'Екатеринбург',
    'Нижний Тагил',
    'Первоуральск',
    'Полевской',
    'Серов',
    'Сысерть',
    'Тобольск',
    'Тюмень',
]

?>


<section class="modal-wrapper" data-modal-wrapper data-modal-select-city>
    <div class="modal_content" data-modal-content>
        <button class="modal_btn-close" data-modal-btn-close></button>
        <p class="modal_title">
            Выберите <br> свой город
        </p>
        <label class="modal_label-input-search">
            <input type="text" placeholder="поиск" data-modal-select-cit-search-input>
        </label>
        <form class="modal_form-select-city" action="">
            <?php foreach ($response_data_cities as $item) { ?>
                <label class="modal_form-select-city_label" data-modal-select-city-input>
                    <?= $item ?>
                    <input type="radio" value="<?= $item ?>" name="city">
                </label>
            <?php } ?>
        </form>
    </div>
</section>


<section class="modal-wrapper" data-modal-wrapper data-modal-map>
    <div class="modal-map_content" data-modal-content>
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
        <button class="modal-map_btn-close" data-modal-btn-close></button>
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A199d8316421c34bab0bf81400a1ea3bd857cfb587baa6a6848cb7d87766c765f&amp;source=constructor" width="1076" height="665" frameborder="0"></iframe>
    </div>
</section>