let center = [59.837797, 30.339260];

function init() {
	let map = new ymaps.Map('map-test', {
		center: center,
		zoom: 15
	});

	let placemark = new ymaps.Placemark(center, {
    balloonContent: `
      <div class="balloon__title">Smart-техника</div>
      <div class="balloon__type">Магазин</div>
      <div class="balloon__address">Санкт-Петербург, ул. Ленсовета, 81</div>
      <div class="balloon__contacts">
        <a href="tel:+7 (812) 223-57-05"></a>
      </div>
    </div>
  `
  }, {
		iconLayout: 'default#image',
		iconImageHref: src="/img/map_icon/geo.png",
		iconImageSize: [45, 60],
		iconImageOffset: [-30, -60]
	});

  map.controls.remove('geolocationControl'); // удаляем геолокацию
  map.controls.remove('searchControl'); // удаляем поиск
  map.controls.remove('trafficControl'); // удаляем контроль трафика
  map.controls.remove('typeSelector'); // удаляем тип
  map.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
  map.controls.remove('zoomControl'); // удаляем контрол зуммирования
  map.controls.remove('rulerControl'); // удаляем контрол правил

  map.geoObjects.add(placemark);
}

ymaps.ready(init);