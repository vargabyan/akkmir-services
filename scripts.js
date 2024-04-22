new Swiper('.sale-swiper', {
    loop: true,
    spaceBetween: 30,
    slidesPerView: 2,
    navigation: {
        nextEl: '.sale-swiper-button-next',
        prevEl: '.sale-swiper-button-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20,
            slideToClickedSlide: true,
        },
        768: {
            slidesPerView: 1.5,
            spaceBetween: 30,
            slideToClickedSlide: true,
        },
        992: {
            slidesPerView: 2,
            spaceBetween: 30,
            slideToClickedSlide: true,
        }
    }
});


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-services_btn-show-all]');

    if (btn) {
        const wrapper = e.target.closest('[data-services-wrapper]');
        const hiddenEl = wrapper.querySelectorAll('[data-services-item]');

        hiddenEl.forEach( item => {
            item.classList.toggle('active');
        })
        btn.textContent === 'Смотреть все услуги' ? btn.textContent = 'Скрыть' : btn.textContent = 'Смотреть все услуги';
    }
})











