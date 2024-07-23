function init() {
    const coreMap = new ymaps.Map('map', {
        center: [56.8, 60.6],
        zoom: 11,
    }, {
        searchControlProvider: 'yandex#search',
    })

    const objectManager = new ymaps.ObjectManager({
        clusterSize: true,
        gridSize: 32,
        clusterDisableClickZoom: true,
    });

    const newOption = {
        iconLayout: 'default#image',
        iconImageHref: 'images/map-icon.svg',
        iconImageSize: [58, 72],
        iconImageOffset: [-15, -42],
        balloonContentLayout: ymaps.templateLayoutFactory.createClass(
            '                   <div style="display: flex; width: max-content" class="map-marker_description" data-map-marker-description>\n' +
            '                    <div class="map-marker_description_head">\n' +
            '                        <div class="map-marker_description_title-wrapper">\n' +
            '                            <p class="map-marker_description_title">\n' +
            '                                {{ properties.city }}\n' +
            '                                <span>{{ properties.address }}</span>\n' +
            '                            </p>\n' +
            '                            <p class="map-marker_description_working-hours">\n' +
            '                                {{ properties.workHours }}\n' +
            '                            </p>\n' +
            '                        </div>\n' +
            '                    </div>\n' +
            '                    <a class="map-marker_description_tel" href="{{ properties.tel }}">{{ properties.tel }}</a>\n' +
            '                    <div class="map-marker_description_footer">\n' +
            // '                        <button class="map-marker_description_btn" data-btn-soldier-route="{{ properties.coordinatesForBalloon }}">проложить маршрут</button>\n' +
            '                    </div>\n' +
            '                </div>'
        )
    }
    objectManager.objects.options.set(newOption)
    objectManager.clusters.options.set(newOption);


    objectManager.objects.events.add(['mouseenter', 'mouseleave'], function (e) {
        const objectId = e.get('objectId');
        if (e.get('type') === 'mouseenter') {
            objectManager.objects.setObjectOptions(objectId, {
                iconImageHref: 'images/map-icon-yellow.svg' // Путь к иконке при наведении
            });
        } else {
            objectManager.objects.setObjectOptions(objectId, {
                iconImageHref: 'images/map-icon.svg' // Путь к исходной иконке
            });
        }
    });

    objectManager.objects.events.add(['click'], function (e) {
        const objectId = e.get('objectId');
        const currentMarker = objectManager.objects.getById(objectId);

        const citySelector = document.querySelector('[data-contacts-form-city]')
        const citySelectorWrapper = citySelector.closest('[data-select-wrapper]')
        const citySelectorInput = citySelectorWrapper.querySelectorAll('[data-select-wrapper] input')

        citySelectorInput.forEach( item => {
            if (item.value === currentMarker.properties.city) {
                item.checked = true;
                citySelectorWrapper.querySelector('[data-select-value-and-btn]').textContent = currentMarker.properties.city;
                citySelectorWrapper.querySelector('[data-select-value-and-btn]').classList.add('active');
            } else {
                item.checked = false;
            }
        })

        const addressSelector = document.querySelector('[data-contacts-form-address]')
        const addressSelectorWrapper = addressSelector.closest('[data-select-wrapper]')
        const addressSelectorInput = addressSelectorWrapper.querySelectorAll('[data-select-wrapper] input')

        addressSelectorInput.forEach( item => {
            if (item.value === currentMarker.properties.address) {
                item.checked = true;
                addressSelectorWrapper.querySelector('[data-select-value-and-btn]').textContent = currentMarker.properties.address;
                addressSelectorWrapper.querySelector('[data-select-value-and-btn]').classList.add('active');
            } else {
                item.checked = false;
            }
        })
    });


    document.addEventListener('input', e => {
        const input = e.target.closest('[data-address-location]');

        if (input) {
            const address = input.getAttribute('data-address-location');

            let found = false;
            objectManager.objects.each(function (object) {
                if (object.geometry.coordinates[0] === +address.split(', ')[0] && object.geometry.coordinates[1] === +address.split(', ')[1]) {
                    coreMap.setCenter(object.geometry.coordinates, 14);
                    objectManager.objects.balloon.open(object.id);
                    found = true;
                }
            });

            if (!found) {
                alert('Метка с такими координатами не найдена.');
            }
        }
    })


    document.addEventListener('click', e => {
        const btn = e.target.closest('[data-btn-soldier-route]');

        if (btn) {
            const address = btn.getAttribute('data-btn-soldier-route');

            //var startId = '55.814350, 37.081539'.split(', ');
            //var endId = address.split(',');

            const startObject = objectManager.objects.getById(1);
            const endObject = objectManager.objects.getById(7);

            if (startObject && endObject) {
                const startCoords = startObject.geometry.coordinates;
                const endCoords = endObject.geometry.coordinates;

                console.log([startCoords, endCoords]);

                ymaps.route([startCoords, endCoords]).then(function (route) {
                    coreMap.geoObjects.add(route);
                    coreMap.setBounds(route.getBounds(), {
                        checkZoomRange: true
                    });
                }, function (error) {
                    console.log('Не удалось построить маршрут: ' + error.message);
                });
            } else {
                alert('Одна или обе метки с заданными ID не найдены.');
            }
        }
    })


    coreMap.geoObjects.add(objectManager);


    $.ajax({
        url: "data.json"
    }).done(function (data) {
        objectManager.add(data);
    });
}

if (document.querySelector('#map')) {
    ymaps.ready(init);
}
