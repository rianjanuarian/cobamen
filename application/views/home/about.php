<?php $this->load->view('template/headerHome'); ?>
<!-- command tampilan daftar pegawai -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


	<div class="offers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">Daftar Pegawai</h2>
				</div>
			</div>
			<div class="row offers_items">

<?php foreach ($gambar as $gbr) { ?>

				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@kensuarez -->
									<div class="offers_image_background" style="background-image:url(<?php echo base_url().'img/karyawan/'. $gbr->image ?>)"></div>
									<div class="offer_name"><a href=""><?php echo $gbr->Nama ?></a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price"><?php echo $gbr->JenisKelamin ?></div>
									<div class="rating_r rating_r_4 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text"><pre>Alamat : <?php echo $gbr->Alamat?></pre></p>
									<p class="offers_text"><pre>No Hp  : <?php echo $gbr->NoHp?></pre></p>
									<p class="offers_text"><pre>Email  : <?php echo $gbr->Email?></pre></p>
									<div class="offers_icons">
										<ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php } ?>
			</div>
			<?php 
				if(isset($links))
				{
					echo $links;
				}
			 ?>
		</div>
	</div>

<?php $this->load->view('template/footerHome'); ?>