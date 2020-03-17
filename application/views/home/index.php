<?php $this->load->view('template/headerHome'); ?>
	<!-- command tampilan utama  -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
				
					<div class="home_slider_background" style="background-image:url(images/mesin.png)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1></h1>
							<h1></h1>
						</div>
					</div>
				</div>
			</div>		
		</div>

	</div>

	<!-- Search -->

	<div class="search">
		

		<!-- Search Contents -->
		
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">

					<!-- Search Tabs -->

					<div class="search_tabs_container">
						<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/bus.png" alt=""><span>Machine Care</span></div>
							<!-- <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/bus.png" alt="">Tarif Kiriman</div> -->

						</div>		
					</div>
					<div class="col text-center"><span>Machine Care adalah jasa perawatan mesin kendaraan anda yang akan membantu anda untuk merawat mesin kendaraan anda</span></div>
				</div>
			</div>
		</div>		
	</div>
	<div class="offers">
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<h2 class="section_title">PROMO</h2>
			</div>
		</div>
		<div class="row offers_items text-center">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header" style="background-color: #f2c318;color:white">
						<h3 class="card-title">Gold</h3>
					</div>
					<div class="card-body">
						<h2>Rp 120000/bulan</h2>
					</div>
					<div class="card-body">
						<h4>Perwatan Mesin Berkala</h4>
					</div>
					<div class="card-body">
						<h4>Gratis Cek</h4>
					</div>
					<div class="card-body">
						<h4>Berbagai Bonus</h4>
					</div>
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="card" style="height: 100%;">
					<div class="card-header" style="background-color: #b600ff;color:white">
						<h3 class="card-title">Reguler</h3>
					</div>
					<div class="card-body">
						<h3>Rp 80000/bulan</h3>
					</div>
					<div class="card-body">
						<h4>Perwatan Mesin Berkala</h4>
					</div>
					<div class="card-body">
						<h4>Gratis Cek</h4>
					</div>
				
				</div>
			</div>


		</div>
	</div>
</div>
<?php $this->load->view('template/footerHome'); ?>