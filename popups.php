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


<section class="modal-wrapper" data-modal-wrapper data-modal-appointment>
    <div class="modal_content" data-modal-content>
        <button class="modal_btn-close" data-modal-btn-close></button>
        <h2 class="modal_title">
            Запишитесь в автосервис в удобном для вас городе
            <span>Наш менеджер свяжется с вами в ближайшее время для уточнения деталей заявки</span>
        </h2>
        <form class="modal_form" action="">
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
                    <div class="contacts_form_select_label-wrapper" data-select-option-wrapper>
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
                <div class="contacts_form_select_label-wrapper" data-select-option-wrapper>
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
        <h2 class="modal_title">
            Ваша заявка успешно отправлена!
            <span>Мы перезвоним Вам в ближайшее время</span>
        </h2>
        <span class="modal_content_success_icon"></span>
    </div>
</section>


<section class="modal-wrapper" data-modal-wrapper data-modal-ask-question>
    <div class="modal_content" data-modal-content>
        <button class="modal_btn-close" data-modal-btn-close></button>
        <h2 class="modal_title">
            Задайте свой вопрос опытному специалисту
        </h2>
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
        <h2 class="modal_title">
            Ваша заявка успешно отправлена!
            <span>Мы перезвоним Вам в ближайшее время</span>
        </h2>
        <span class="modal_content_success_icon"></span>
    </div>
</section>


<section class="modal-wrapper" data-modal-wrapper data-modal-request-a-call>
    <div class="modal_content" data-modal-content>
        <button class="modal_btn-close" data-modal-btn-close></button>
        <h2 class="modal_title">
            Заказать звонок
        </h2>
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
        <h2 class="modal_title">
            Ваша заявка успешно отправлена!
            <span>Мы перезвоним Вам в ближайшее время</span>
        </h2>
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
        <h2 class="modal_title">
            Выберите <br> свой город
        </h2>
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
        <button class="modal-map_btn-close" data-modal-btn-close></button>
        <div class="map" id="map"></div>
    </div>
</section>