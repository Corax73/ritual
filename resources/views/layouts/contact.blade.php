<section id="section-contact" class="section-contact bgc-one">
<div class="container">
	
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			
			<h2>Контакты</h2>
			<div class="underline"></div>
			<div class="map">	
	<div class="wrp">
		<div class="map-box">
			<h2>Наши контакты</h2>
			<p>Ульяновская область, рабочий посёлок Сурское, улица Ленина, 58</p>
			<p><a href="tel:+7 (999) 999-99-99">+7 (999) 999-99-99</a></p>
			<p><a href="mailto:info@site.com">abc@abc.com</a></p>
		</div>
	</div>
	<div id="map"></div>
</div>
 
<script src="//api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU"></script>
<script>
ymaps.ready(init); 
function init(){
	var myMap = new ymaps.Map("map",{center: [54.479884, 46.722447],zoom: 13});
	
	// Элементы управления картой
	myMap.controls.add("zoomControl").add("typeSelector").add("mapTools");
	
	var myPlacemark = new ymaps.Placemark([54.479884, 46.722447], {
		iconCaption: 'подсказка'
	}, {
		preset: 'islands#pinkDotIcon'
	});
	myMap.geoObjects.add(myPlacemark); 
		myMap.geoObjects.add(myPlacemark);
		myMap.setCenter(coord);	
}
</script>
			
		</div>
	</div>
	
</div>

</section>