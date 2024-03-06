<template>
  <div id="map" style="width: 200px; height: 500px;"></div>
</template>

<script>
export default {
  mounted() {
    ymaps.ready(() => {
      let myMap = new ymaps.Map('map', {
        center: [56.506861, 84.948897],
        zoom: 16,
        controls: ['searchControl']
      });

      let myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
        hintContent: 'Собственный значок метки',
        balloonContent: 'Это красивая метка'
      }, {
        iconLayout: 'default#image',
        iconImageHref: 'images/myIcon.gif',
        iconImageSize: [30, 42],
        iconImageOffset: [-5, -38]
      });

      let myPlacemarkWithContent = new ymaps.Placemark([55.661574, 37.573856], {
        hintContent: 'Собственный значок метки с контентом',
        balloonContent: 'А эта — новогодняя',
        iconContent: '12'
      }, {
        iconLayout: 'default#imageWithContent',
        iconImageHref: 'images/ball.png',
        iconImageSize: [48, 48],
        iconImageOffset: [-24, -24],
        iconContentOffset: [15, 15],
        iconContentLayout: ymaps.templateLayoutFactory.createClass(
          '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        )
      });

      myMap.geoObjects.add(myPlacemark).add(myPlacemarkWithContent);
    });
  }
};
</script>