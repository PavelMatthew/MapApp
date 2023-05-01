
<div class="parent">
    <div id="map" class="map">
        <script src="https://api-maps.yandex.ru/2.1/?apikey=895052a7-52c5-4c5a-ae9d-fac84a8fdeb5&lang=ru_RU"type="text/javascript"></script>
        <script>




            ymaps.ready(init);

            function init(){
                var geolocation = ymaps.geolocation,
                    myMap = new ymaps.Map('map', {
                        center: [55, 34],
                        zoom: 18
                    }, {
                        searchControlProvider: 'yandex#search'
                    });


                ymaps.geolocation.get({

                    provider: 'browser',

                    // Карта автоматически отцентрируется по положению пользователя.
                    mapStateAutoApply: true

                }).then(function (result) {
                    myMap.geoObjects.add(result.geoObjects);

                });
                myMap.controls.remove('geolocationControl'); // удаляем геолокацию
                myMap.controls.remove('searchControl'); // удаляем поиск
                myMap.controls.remove('trafficControl'); // удаляем контроль трафика
                myMap.controls.remove('typeSelector'); // удаляем тип
                myMap.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
                myMap.controls.remove('zoomControl'); // удаляем контрол зуммирования
                myMap.controls.remove('rulerControl'); // удаляем контрол правил
            }




        </script>

        <style>


            .map {

                background-color: #333;
                width: 700px;
                height: 700px;
                position: absolute;
                top: 50%;
                left: 50%;
                margin: -350px 0 0 -350px;

            }
            .ymaps-2-1-79-copyright__content-cell{
                opacity: 0;
            }
            .ymaps-2-1-79-gototech{

                opacity: 0;
            }
            .ymaps-2-1-79-gotoymaps__container{

                opacity: 0;
            }
            .ymaps-2-1-79-gototaxi__container{
                opacity: 0;
            }
        </style>

    </div>
</div>


