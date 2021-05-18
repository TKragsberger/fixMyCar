<x-app-layout>
	<div class="h-auto pt-16">
		<div class="swiper-container mySwiper z-0">
			<div class="swiper-wrapper">
				<div class="w-full bg-white overflow-x-hidden flex snap-x swiper-slide" style="height: 70vh">
					<div class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-black slides">
						<img src="https://fgunvs.dk/img/sider/54.jpg" class="h-full w-full object-cover">
					</div>	
				</div>

				<div class="w-full bg-white overflow-x-hidden flex snap-x swiper-slide" style="height: 70vh">
					<div class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-black">
						<img src="https://cdn.shortpixel.ai/client/q_glossy,ret_img/https://fgukoldingvejen.dk/wp-content/uploads/FGU_varksted_motor-768x506.jpg" class="h-full w-full object-cover">
					</div>
				</div>

				<div class="w-full bg-white overflow-x-hidden flex snap-x swiper-slide" style="height: 70vh">
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





	<div id="booking"  class="w-full bg-gray-100 h-96">
	  	<br>
		<div class="text-center text-4xl text-green-700 my-4">Booking</div>
		<div class="grid grid-cols-3 gap-4 w-2/4 mx-auto">
			<div class="text-center text-green-700 hover:underline">
				<a>
					<div class="relative">
						<img class="my-2 relative top-0 left-0 w-16 h-16 mx-auto" src="../resources/images/wheelGreen.png" alt="Workplace" width="600" />
						
					</div>
					<div>Hjul</div>
				</a>
			</div>
			<div class="text-center text-green-700 hover:underline">
				<a href="{{ route('booking') }}">
					<div class="relative">
						<img class="my-2 relative top-0 left-0 w-16 h-16 mx-auto" src="../resources/images/breakGreen.png" alt="Workplace" width="600" />
						
					</div>
					<div>Bremser</div>
				</a>
			</div>
			<div class="text-center text-green-700 hover:underline">
				<a>
					<div class="relative">
						<img class="my-2 relative top-0 left-0 w-16 h-16 mx-auto" src="../resources/images/wiperGreen.png" alt="Workplace" width="600" />
						
					</div>
					<div>Vindusvisker</div>
				</a>
			</div>
			<div class="text-center text-green-700 hover:underline">
				<a>
					<div class="relative">
						<img class="my-2 relative top-0 left-0 w-16 h-16 mx-auto" src="../resources/images/lightGreen.png" alt="Workplace" width="600" />
						
					</div>
					<div>pære</div>
				</a>
			</div>
			<div class="text-center text-green-700 hover:underline">
				<a>
					<div class="relative">
						<img class="my-2 relative top-0 left-0 w-16 h-16 mx-auto" src="../resources/images/batteryGreen.png" alt="Workplace" width="600" />
						
					</div>
					<div>Batteri</div>
				</a>	
			</div>
			<div class="text-center text-green-700 hover:underline">
				<a>
					<div class="relative">
						<img class="my-2 relative top-0 left-0 w-16 h-16 mx-auto" src="../resources/images/customGreen.png" alt="Workplace" width="600" />
						
					</div>
					<div>Special anmodning</div>
				</a>
			</div>
		</div>
	</div>
	<!--<div id="pageDivider" class="w-full bg-green-700 h-1"></div>-->
	<div id="Prices" class="w-full h-64 bg-white">
			<br>
			<div class="text-center text-green-700 text-4xl">Priser</div>
			<br>
			<div class="grid grid-cols-3 divide-x-4 divide-green-700 w-2/4 mx-auto">
				<div class="text-center text-green-700">
					<p class="text-3xl">Hjul skift</p>
					<p class="text-2xl">Fast pris</p>
					<p class="text-2xl">250 kr</p>
				</div>
				<div class="text-center text-green-700">
					<p class="text-3xl">Vinduesvisker skift</p>
					<p class="text-2xl">Fast pris</p>
					<p class="text-2xl">150 kr</p></div>
				<div class="text-center text-green-700">
					<p class="text-3xl">Øverige tjenester</p>
					<p class="text-2xl">Efter aftale</p>
					<p class="text-2xl">ca. time pris 150 kr</p>
				</div>
			</div>
			<br>
			<br>
			
		</div>
	</div>
	<div id="contact" class="h-96 bg-green-700">
			<br>
			<div class="text-center text-white text-4xl">Kontakt</div>
			<br>
			<div class="text-center w-2/4 mx-auto text-white">Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien. Lorem Ipsum har været standard fyldtekst siden 1500-tallet, hvor en ukendt trykker sammensatte en tilfældig spalte for at trykke en bog til sammenligning af forskellige skrifttyper. Lorem Ipsum har ikke alene overlevet fem århundreder, men har også vundet indpas i elektronisk typografi uden væsentlige ændringer. Sætningen blev gjordt kendt i 1960'erne med lanceringen af Letraset-ark, som indeholdt afsnit med Lorem Ipsum, og senere med layoutprogrammer som Aldus PageMaker, som også indeholdt en udgave af Lorem Ipsum.</div>
		</div>
	</div>
</x-app-layout>