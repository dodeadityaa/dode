<html>
	<head>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" />
		<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>
		<style>
			#info {position: absolute;top: 0;bottom: 30;left: 0;right: 0;}
			#map {position: absolute;top: 30;bottom: 0;left: 0;right: 0;}
		</style>
	</head>

	<body>
		<!-- div untuk menampilkan info -->
		<div id="info">Informasi</div>

		<!-- mendefinisikan canvas untuk menempatkan map OpenStreetMap (OSM) -->
		<div id="map"></div>
		
		<script>
			/* 
				mendefinisikan sebuah variabel map untuk mengatur layer map OSM pada canvas dengan parameter koordinat awal dan zoom level
			*/
			var map = L.map('map').setView([-8.5240574,115.2110998],11);

			/*	mendefinisikan sebuah variable popup */
			var popup = L.popup();

			/*  variabel untuk menghitung indeks marker yang telah dibuat */
			var countId = 0;

			// menampilkan layer map OSM pada canvas
			L.tileLayer('https://maps.tilehosting.com/styles/streets/{z}/{x}/{y}.png?key=YrAn6SOXelkLFXHv03o2',{
				attribution:'<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>',
			}).addTo(map);

			// menangkap event on-click pada map dan memunculkan sebuah marker
			map.on('click',function(e){
				
				/* indeks ditambahkan 1 setiap marker akan dibuat */
				countId = countId + 1;

				var marker = L.marker(e.latlng,{
					draggable: 'true',
					/* 
						saya menambahkan atribut baru berupa id untuk menandai indeks marker yang dibuat
						silahkan tambahkan atribut untuk menambahkan informasi lainnya jika diperlukan
					*/
					id: countId,
				}).addTo(map);				
	
				marker.on('click',function(e){
					/* cara pengambilan nilai atribut dari marker*/
					var id = marker.options.id;
					
	        		popup.setLatLng([e.latlng.lat+0.02,e.latlng.lng]);
	        		popup.setContent('Anda meng-klik marker '+id+' di koordinat :<br>'+'Latitude : '+marker.getLatLng().lat+'<br>Longitude : '+marker.getLatLng().lng+'');
	        		popup.openOn(map);
				});

			});

			// menangkap event right-click pada map
			map.on('contextmenu',function(e){
				alert('Anda menekan tombol mouse klik kanan pada koordinat : '+e.latlng);
			});

			/* 
				menangkap event pergerakan mouse dan menampilkan koordinat mouse pada div info.
			 	
			 	saya mengakses html DOM dengan javascript murni, jika anda ingin lebih simpel
			 	dan mudah silahkan menggunakan library jQuery dalam mengakses html DOM.

			 	perhatikan cara saya mengambil data koordinat pada event ini dan bandingkan dengan
			 	cara yang saya lakukan pada event sebelumnya
			*/
			map.on('mousemove',function(e){
				document.getElementById("info").innerHTML="Koordinat : ("+e.latlng.lat+","+e.latlng.lng+")";
			});
		</script>
	</body>
</html>