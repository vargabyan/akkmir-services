document.querySelectorAll('.sale-swiper').forEach((slider, index) => {
    const swiper = document.querySelectorAll('.sale-swiper')[index]
    const btnNext = document.querySelectorAll('.sale-swiper-button-next')[index]
    const btnPrev = document.querySelectorAll('.sale-swiper-button-prev')[index]

    new Swiper(swiper, {
        spaceBetween: 30,
        slidesPerView: 2,
        navigation: {
            nextEl: btnNext,
            prevEl: btnPrev,
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
})

new Swiper('.our-big-team_swiper', {
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
        768: {
            slidesPerView: 3,
            spaceBetween: 20,
            slideToClickedSlide: true,
        },
        992: {
            slidesPerView: 4,
            spaceBetween: 24,
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

        modalWrapper.classList.remove('active');
        content.classList.remove('active');
        document.querySelector('body').style['overflow'] = '';

        const successContent = modalWrapper.querySelector('[data-modal-success-content]');

        if (successContent) {
            successContent.classList.remove('active');
        }
    }
})

document.addEventListener('click', e => {
    const btm = e.target.getAttribute('data-modal-wrapper');

    if (btm !== null) {
        const modalWrapper = e.target.closest('[data-modal-wrapper]');
        const content = modalWrapper.querySelector('[data-modal-content]');

        modalWrapper.classList.remove('active');
        content.classList.remove('active');
        document.querySelector('body').style['overflow'] = '';

        const successContent = modalWrapper.querySelector('[data-modal-success-content]');

        if (successContent) {
            successContent.classList.remove('active');
        }
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
    const btn = e.target.closest('[data-modal-for-sale-swiper-btn-appointment]');

    if (btn) {
        const container = btn.closest('[data-modal-for-sale-swiper-content]');
        const content = container.querySelector('[data-modal-content]');
        const formWrapper = container.querySelector('[data-modal-for-sale-swiper-hidden-elements]');

        container.classList.add('active');
        content.classList.add('active');
        formWrapper.classList.add('active');
        document.querySelector('body').style['overflow'] = 'hidden';
        btn.style['display'] = 'none';
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-modal-for-sale-swiper-btn-submit]');

    if (btn) {
        e.preventDefault();
        const container = btn.closest('[data-modal-for-sale-swiper-content]');
        const content = container.querySelector('[data-modal-content]');
        const successContent = container.querySelector('[data-modal-success-content]');
        const headBlock = container.querySelector('[data-modal-for-sale-swiper-head-block]');
        const line = container.querySelector('[data-modal-for-sale-swiper-line]');

        content.classList.remove('active');
        headBlock.classList.remove('active');
        successContent.classList.add('active');
        line.classList.remove('active');
        container.classList.remove('switchable-style');
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
    const btn = e.target.closest('[data-btn-open-map]');

    if (btn) {
        const modalWrapper = document.querySelector('[data-modal-map]');

        modalWrapper.classList.add('active');
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-map-marker-btn-close]');

    if (btn) {
        const wrapper = btn.closest('[data-map-marker-wrapper]');
        const contentDescription = wrapper.querySelector('[data-map-marker-description]');
        const allContentDescription = document.querySelectorAll('[data-map-marker-description]');

        contentDescription.classList.remove('active');
        allContentDescription.forEach(item => {
            item.classList.remove('active');
        })
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-map-marker]');

    if (btn) {
        const wrapper = btn.closest('[data-map-marker-wrapper]');
        const contentDescription = wrapper.querySelector('[data-map-marker-description]');

        contentDescription.classList.add('active');
    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-btn-select-city-btn]');

    if (btn) {
        const modalWrapper = document.querySelector('[data-modal-select-city]');

        modalWrapper.classList.add('active');
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})

document.addEventListener('click', e => {
    const input = e.target.closest('[data-modal-select-city-input]');

    if (input) {
        const modalWrapper = input.closest('[data-modal-select-city]');
        const btnOpen = document.querySelector('[data-btn-select-city]');

        btnOpen.textContent = input.querySelector('input').value;
        modalWrapper.classList.remove('active');
        document.querySelector('body').style['overflow'] = '';
    }
})

document.addEventListener('input', e => {
    const input = e.target.closest('[data-modal-select-cit-search-input]');

    if (input) {
        const modalWrapper = input.closest('[data-modal-select-city]');
        const formItems = modalWrapper.querySelectorAll('[data-modal-select-city-input]');

        Object.values(formItems).forEach( item => {
            if (item.textContent.toLocaleUpperCase().search(input.value.toLocaleUpperCase()) > -1) {
                item.style['display'] = 'flex';
            } else {
                item.style['display'] = 'none';
            }
        })
    }
})



document.addEventListener('click', e => {
    const btn = e.target.closest('[data-modal-for-sale-btn-close]');

    if (btn) {
        const modalWrapper = btn.closest('[data-modal-for-sale-swiper]');
        const allModalContent = modalWrapper.querySelectorAll('.active[data-modal-for-sale-swiper-content]');
        const allModalSuccessContent = modalWrapper.querySelectorAll('.active[data-modal-success-content]');
        const allFormWrapper = modalWrapper.querySelectorAll('.active[data-modal-for-sale-swiper-hidden-elements]');
        const allLine = modalWrapper.querySelectorAll('.active[data-modal-for-sale-swiper-line]');
        const allBtnAppointment = modalWrapper.querySelectorAll('[data-modal-for-sale-swiper-btn-appointment]');

        modalWrapper.classList.remove('active');
        allModalContent.forEach(item => {
            item.classList.remove('active');
            item.classList.remove('switchable-style');
        })
        allModalSuccessContent.forEach(item => {
            item.classList.remove('active');
        })
        allFormWrapper.forEach(item => {
            item.classList.remove('active');
        })
        allLine.forEach(item => {
            item.classList.remove('active');
        })
        allBtnAppointment.forEach(item => {
            item.style['display'] = 'flex';
        })
        document.querySelector('body').style['overflow'] = '';
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-btn-open-modal-for-sale-id]');

    if (btn) {
        const modalID = btn.getAttribute('data-btn-open-modal-for-sale-id');
        const modalWrapper = document.querySelector('[data-modal-for-sale-swiper]');
        const modalContent = modalWrapper.querySelector(`[data-modal-for-sale-id="${modalID}"]`);
        const modalFormContent = modalContent.querySelector('[data-modal-content]');
        const headBlock = modalContent.querySelector('[data-modal-for-sale-swiper-head-block]');
        const line = modalContent.querySelector('[data-modal-for-sale-swiper-line]');

        modalWrapper.classList.add('active');
        modalContent.classList.add('active');
        modalFormContent.classList.add('active');
        modalContent.classList.add('switchable-style');
        headBlock.classList.add('active');
        line.classList.add('active');
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


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-question-btn]');

    if (btn) {
        const wrapper = btn.closest('[data-question-wrapper]');
        const hiddenEl = wrapper.querySelector('[data-question-hidden]');
        const container = wrapper.closest('[data-questions-items-wrapper]');
        const allItems = container.querySelectorAll('.active[data-question-hidden]');
        const allBtn = container.querySelectorAll('.active[data-question-btn]');

        btn.classList.toggle('active')
        hiddenEl.classList.toggle('active')
        allItems.forEach(item => {
            item.classList.remove('active')
        })
        allBtn.forEach(item => {
            item.classList.remove('active')
        })
    }
})


document.addEventListener('input', e => {
    const btn = e.target.closest('[data-select-contacts-city]');

    if (btn) {
        const btnValue = btn.value;

        document.querySelectorAll(`[data-select-collection-city-id]`).forEach( item => {
            item.classList.remove('active')
            item.classList.remove('active-first')
        })
        document.querySelector(`[data-select-collection-city-id="${btnValue}"]`).classList.add('active')

        document.querySelectorAll('[data-select-collection-city-id] input').forEach( item => {
            const wrapper = item.closest('[data-select-wrapper]');
            const selectValue = wrapper.querySelector('[data-select-value-and-btn]');

            item.checked = false;
            selectValue.classList.remove('active')
            selectValue.textContent = 'ул. Шефская 95А'
        })
        document.querySelectorAll('[data-select-collection-address-id] input').forEach( item => {
            const wrapper = item.closest('[data-select-wrapper]');
            const selectValue = wrapper.querySelector('[data-select-value-and-btn]');

            item.checked = false;
            selectValue.classList.remove('active')
            selectValue.textContent = 'Замена аккумулятора'
        })
    }
})

document.addEventListener('input', e => {
    const btn = e.target.closest('[data-select-contacts-address]');

    if (btn) {
        const btnValue = btn.value;

        document.querySelectorAll(`[data-select-collection-address-id]`).forEach( item => {
            item.classList.remove('active')
            item.classList.remove('active-first')
        })
        document.querySelector(`[data-select-collection-address-id="${btnValue}"]`).classList.add('active')

        document.querySelectorAll('[data-select-collection-address-id] input').forEach( item => {
            const wrapper = item.closest('[data-select-wrapper]');
            const selectValue = wrapper.querySelector('[data-select-value-and-btn]');

            item.checked = false;
            selectValue.classList.remove('active')
            selectValue.textContent = 'Замена аккумулятора'
        })
    }
})


document.addEventListener('input', e => {
    const form = e.target.closest('[data-contacts-form]');

    if (form) {
        const btn = form.querySelector('[data-contacts-form-submit]');
        const city = form.querySelector('[data-contacts-form-city] input:checked');
        const address = form.querySelector('[data-contacts-form-address] input:checked');
        const service = form.querySelector('[data-contacts-form-services] input:checked');
        const fullName = form.querySelector('[data-contacts-form-name]').value;
        const tel = form.querySelector('[data-contacts-form-tel]').value;

        if (city && address && service && fullName && tel) {
            btn.disabled = false;
        }
    }
})



