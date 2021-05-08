<x-app-layout>
	<div class="h-auto pt-16">
		<div class="swiper-container mySwiper z-0">
			<div class="swiper-wrapper">
				<div class="w-full bg-white overflow-x-hidden flex snap-x swiper-slide" style="height: 80vh">
					<div class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-black slides">
						<img src="https://fgunvs.dk/img/sider/54.jpg" class="h-full w-full object-cover">
					</div>	
				</div>

				<div class="w-full bg-white overflow-x-hidden flex snap-x swiper-slide" style="height: 80vh">
					<div class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-black">
						<img src="https://cdn.shortpixel.ai/client/q_glossy,ret_img/https://fgukoldingvejen.dk/wp-content/uploads/FGU_varksted_motor-768x506.jpg" class="h-full w-full object-cover">
					</div>
				</div>

				<div class="w-full bg-white overflow-x-hidden flex snap-x swiper-slide" style="height: 80vh">
					<div class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-black" id="slide-3">
						<img src="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_768,h_506/https://fgukoldingvejen.dk/wp-content/uploads/2019/03/FGU_fag_motor_mekanik-768x506.jpg" class="h-full w-full object-cover">
					</div>
				</div>
			</div>
		</div>
	</div>


	

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        centeredSlides: true,
		loop: true,
		speed: 2500,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        }
      });
    </script>





	<br>
	<div id="booking"  class="w-full">
		<div class="text-center text-4xl">Booking</div>
		<div class="grid grid-cols-3 gap-4 h-80 w-2/4 mx-auto">
			<div class="w-16 h-16 mx-auto my-auto text-center">
				<a>
					<img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/car-wheel-4-827509.png">
					<div>Hjul</div>
				</a>
			</div>
			<div class="w-16 h-16 mx-auto my-auto text-center">
				<a href="{{ route('booking') }}">
					<img src="https://cdn4.iconfinder.com/data/icons/bold-car-element-1/512/drawing30-512.png">
					<div>Bremser</div>
				</a>
			</div>
			<div class="w-16 h-16 mx-auto my-auto text-center">
				<img src="https://static.thenounproject.com/png/172177-200.png">
				<div>Vindusvisker</div>
			</div>
			<div class="w-16 h-16 mx-auto my-auto text-center">
				<img src="https://static.thenounproject.com/png/696946-200.png">
				<div>Pære</div>
			</div>
			<div class="w-16 h-16 mx-auto my-auto text-center">
				<img src="https://cdn3.iconfinder.com/data/icons/energy-1/66/5-512.png">
				<div>Batteri</div>	
			</div>
			<div class="w-16 h-16 mx-auto my-auto text-center">
				<img src="https://static.thenounproject.com/png/538026-200.png">
				<div>Special anmodning</div>
			</div>
		</div>
	</div>
	<br>
	<div id="contact" class="h-96 bg-green-700">
			<br>
			<div class="text-center text-white text-4xl">Kontakt</div>
			<br>
			<div class="text-center w-2/4 mx-auto text-white">Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien. Lorem Ipsum har været standard fyldtekst siden 1500-tallet, hvor en ukendt trykker sammensatte en tilfældig spalte for at trykke en bog til sammenligning af forskellige skrifttyper. Lorem Ipsum har ikke alene overlevet fem århundreder, men har også vundet indpas i elektronisk typografi uden væsentlige ændringer. Sætningen blev gjordt kendt i 1960'erne med lanceringen af Letraset-ark, som indeholdt afsnit med Lorem Ipsum, og senere med layoutprogrammer som Aldus PageMaker, som også indeholdt en udgave af Lorem Ipsum.</div>
		</div>
	</div>
</x-app-layout>