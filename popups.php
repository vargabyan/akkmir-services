<section class="modal-wrapper" data-modal-wrapper data-modal-appointment>
    <div class="modal_content" data-modal-content>
        <button class="modal_btn-close" data-modal-btn-close></button>
        <h1 class="modal_title">
            Запишитесь в автосервис в удобном для вас городе
            <span>Наш менеджер свяжется с вами в ближайшее время для уточнения деталей заявки</span>
        </h1>
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
                <input type="text">
            </label>
            <label class="modal_form_label-core">
                Телефон*
                <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
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
        <h1 class="modal_title">
            Ваша заявка успешно отправлена!
            <span>Мы перезвоним Вам в ближайшее время</span>
        </h1>
        <span class="modal_content_success_icon"></span>
    </div>
</section>


<section class="modal-wrapper" data-modal-wrapper data-modal-ask-question>
    <div class="modal_content" data-modal-content>
        <button class="modal_btn-close" data-modal-btn-close></button>
        <h1 class="modal_title">
            Задайте свой вопрос опытному специалисту
        </h1>
        <form class="modal_form" action="">

            <label class="modal_form_label-core">
                Имя*
                <input type="text">
            </label>
            <label class="modal_form_label-core">
                Телефон*
                <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
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
        <h1 class="modal_title">
            Ваша заявка успешно отправлена!
            <span>Мы перезвоним Вам в ближайшее время</span>
        </h1>
        <span class="modal_content_success_icon"></span>
    </div>
</section>


<section class="modal-wrapper" data-modal-wrapper data-modal-request-a-call>
    <div class="modal_content" data-modal-content>
        <button class="modal_btn-close" data-modal-btn-close></button>
        <h1 class="modal_title">
            Заказать звонок
        </h1>
        <form class="modal_form" action="">

            <label class="modal_form_label-core">
                Имя*
                <input type="text">
            </label>
            <label class="modal_form_label-core">
                Телефон*
                <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
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
        <h1 class="modal_title">
            Ваша заявка успешно отправлена!
            <span>Мы перезвоним Вам в ближайшее время</span>
        </h1>
        <span class="modal_content_success_icon"></span>
    </div>
</section>