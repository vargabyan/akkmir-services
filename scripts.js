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

new Swiper('.our-big-team_swiper', {
    loop: true,
    spaceBetween: 20,
    slidesPerView: 1.4,
    navigation: {
        nextEl: '.our-big-team_swiper-button-next',
        prevEl: '.our-big-team_swiper-button-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 1.36,
            spaceBetween: 20,
            slideToClickedSlide: true,
        },
        570: {
            slidesPerView: 2,
            spaceBetween: 20,
            slideToClickedSlide: true,
        },
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


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-service-centers-address-item-btn-open-form]');

    if (btn) {
        const wrapper = e.target.closest('[data-service-centers-address-item]');
        const hiddenEl = wrapper.querySelector('[data-service-centers-address-item-form-label-wrapper]');
        const itemBackground = wrapper.querySelectorAll('[data-service-centers-address-item-background]');

        btn.classList.toggle('active');
        hiddenEl.classList.toggle('active');

        itemBackground.forEach(item => {
            if (item.classList.contains('active')) {
                item.classList.remove('active');
            } else {
                item.classList.add('active');
            }
        })
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-service-centers-btn-show-more]');

    if (btn) {
        const wrapper = e.target.closest('[data-service-centers]');
        const hiddenEl = wrapper.querySelectorAll('[data-service-centers-address-item]');

        btn.classList.toggle('active');

        hiddenEl.forEach(item => {
            item.classList.toggle('active');
        })

        btn.textContent === 'Показать все адреса' ? btn.textContent = 'Скрыть' : btn.textContent = 'Показать все адреса';
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-service-centers-city-id]');

    if (btn) {
        const elId = btn.getAttribute('data-service-centers-city-id')
        const wrapper = e.target.closest('[data-service-centers]');
        const allHiddenEl = wrapper.querySelectorAll(`[data-service-centers-city-address-id]`);
        const hiddenEl = wrapper.querySelector(`[data-service-centers-city-address-id="${elId}"]`);
        const allBtn = wrapper.querySelectorAll(`[data-service-centers-city-id]`);

        allHiddenEl.forEach(item => {
            item.classList.remove('active');
        })
        allBtn.forEach(item => {
            item.classList.remove('active');
        })
        btn.classList.add('active');
        hiddenEl.classList.add('active');
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-select-value-and-btn]');

    if (btn) {
        const selectWrapper = btn.closest('[data-select-wrapper]');
        const optionWrapper = selectWrapper.querySelector('[data-select-option-wrapper]');
        const allOpenOptionWrapper = document.querySelectorAll('.active[data-select-option-wrapper]');

        optionWrapper.classList.toggle('active');
        btn.classList.toggle('rotate');
        allOpenOptionWrapper.forEach(item => {
            item.classList.remove('active');
        })
    }
})

document.addEventListener('change', e => {

    const option = e.target.closest(`[data-select-option]`);

    if (option) {
        const selectWrapper = e.target.closest('[data-select-wrapper]');
        const optionWrapper = selectWrapper.querySelector('[data-select-option-wrapper]');
        const btn = selectWrapper.querySelector('[data-select-value-and-btn]');

        btn.textContent = option.value;
        btn.classList.add('active');
        btn.classList.remove('rotate');
        optionWrapper.classList.remove('active');
    }
})

document.addEventListener('click', e => {
    const optionWrapper = document.querySelector('.active[data-select-option-wrapper]');
    const optionWrapper_ = e.target.closest('.active[data-select-option-wrapper]');
    const btn = e.target.closest('[data-select-value-and-btn]');

    if (optionWrapper && !optionWrapper_ && !btn) {
        const selectWrapper = optionWrapper.closest('[data-select-wrapper]');
        const btn_ = selectWrapper.querySelector('[data-select-value-and-btn]');

        btn_.classList.remove('rotate');
        optionWrapper.classList.remove('active');
    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-modal-btn-close]');

    if (btn) {
        const modalWrapper = btn.closest('[data-modal-wrapper]');
        const content = modalWrapper.querySelector('[data-modal-content]');
        const successContent = modalWrapper.querySelector('[data-modal-success-content]');

        modalWrapper.classList.remove('active');
        content.classList.remove('active');
        successContent.classList.remove('active');
        document.querySelector('body').style['overflow'] = '';
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-btn-ask-question]');

    if (btn) {
        const modalWrapper = document.querySelector('[data-modal-ask-question]');
        const content = modalWrapper.querySelector('[data-modal-content]');

        modalWrapper.classList.add('active');
        content.classList.add('active');
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-modal-btn-submit]');

    if (btn) {
        e.preventDefault();
        const modalWrapper = btn.closest('[data-modal-wrapper]');
        const content = modalWrapper.querySelector('[data-modal-content]');
        const successContent = modalWrapper.querySelector('[data-modal-success-content]');

        content.classList.remove('active');
        successContent.classList.add('active');
    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-btn-appointment]');

    if (btn) {
        const modalWrapper = document.querySelector('[data-modal-appointment]');
        const content = modalWrapper.querySelector('[data-modal-content]');

        modalWrapper.classList.add('active');
        content.classList.add('active');
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-btn-request-a-call]');

    if (btn) {
        const modalWrapper = document.querySelector('[data-modal-request-a-call]');
        const content = modalWrapper.querySelector('[data-modal-content]');

        modalWrapper.classList.add('active');
        content.classList.add('active');
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})



document.addEventListener('click', e => {
    const btn = e.target.closest('[data-modal-for-sale-btn-close]');

    if (btn) {
        const modalWrapper = btn.closest('[data-modal-for-sale-swiper]');
        const modalContent = btn.closest('[data-modal-for-sale-id]');

        modalWrapper.classList.remove('active');
        modalContent.classList.remove('active');
        document.querySelector('body').style['overflow'] = '';
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-btn-open-modal-for-sale-id]');

    if (btn) {
        const modalID = btn.getAttribute('data-btn-open-modal-for-sale-id');
        const modalWrapper = document.querySelector('[data-modal-for-sale-swiper]');
        const modalContent = modalWrapper.querySelector(`[data-modal-for-sale-id="${modalID}"]`);

        modalWrapper.classList.add('active');
        modalContent.classList.add('active');
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-mobile-menu-btn-open]');

    if (btn) {
        const wrapper = btn.closest('[data-data-mobile-menu-core-container]');
        const menuContainer = btn.closest('[data-mobile-menu]');
        const hiddenEl = menuContainer.querySelector('[data-mobile-menu-items-wrapper]');
        const allActiveHiddenEl = wrapper.querySelectorAll('.active[data-mobile-menu-items-wrapper]');

        hiddenEl.classList.toggle('active');
        allActiveHiddenEl.forEach(item => {
            item.classList.remove('active');
        })
    }
})


document.addEventListener('click', e => {
    const closest = e.target.closest('.active[data-mobile-menu-items-wrapper]');
    const btn = e.target.closest('[data-mobile-menu-btn-open]');
    const allActiveHiddenEl = document.querySelectorAll('.active[data-mobile-menu-items-wrapper]');

    if (allActiveHiddenEl.length && !closest && !btn) {
        allActiveHiddenEl.forEach(item => {
            item.classList.remove('active');
        })
    }
})


const MobileMenuActions = () => {
    const innerWidth = window.innerWidth;
    const scrollY = window.scrollY;
    const mobileMenu = document.querySelector('[data-data-mobile-menu-core-container]');
    const positionMobileMenu = mobileMenu.offsetTop;

    if (innerWidth < 1200 && scrollY > positionMobileMenu) {

        mobileMenu.classList.add('active')
    } else {
        mobileMenu.classList.remove('active')
    }
}
window.addEventListener('scroll', () => {
    MobileMenuActions()
})
window.addEventListener('resize', () => {
    MobileMenuActions()
})
document.addEventListener('DOMContentLoaded', () => {
    MobileMenuActions()
})


const MobileBottomMenuActions = () => {
    const innerWidth = window.innerWidth;
    const mobileBottomMenu = document.querySelector('[data-mobile-bottom-menu-wrapper]');

    if (innerWidth < 1200) {

        mobileBottomMenu.classList.add('active')
    } else {
        mobileBottomMenu.classList.remove('active')
    }
}
window.addEventListener('scroll', () => {
    MobileBottomMenuActions();
})
window.addEventListener('resize', () => {
    MobileBottomMenuActions()
})
document.addEventListener('DOMContentLoaded', () => {
    MobileBottomMenuActions()
})







