	<!-- New Product -->
	<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Daftar Barang
				</h3>
			</div>
			
			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
				<?php
					$query = $this->db->query("SELECT * FROM barang;");
					foreach ($query->result_array() as $row){
				?>		
					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
						
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
							
								<img src="<?php echo base_url('assets/foto_barang/'.$row['gambar1_barang']); ?>" alt="IMG-PRODUCT" width="150" height="300">

								<div class="block2-overlay trans-0-4">
								

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<a href="<?php echo base_url('frontend/product_detail/'.$row['id_barang']); ?>" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Lihat
										</a>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
									<?php echo $row['nama_barang']; ?>
								</a>

								<span class="block2-price m-text6 p-r-5">
									Rp.<?php echo $row['harga_barang']; ?>,00
								</span>
								
							</div>
							
						</div>
					</div>
					<?php } ?>
				
			


			
					<!--<div class="item-slick2 p-l-15 p-r-15">
						 Block2 
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
								<img src="{base_url(assets/frontend/images/item-07.jpg)}" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
									 Button 
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Add to Cart
										</button>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
									Frayed denim shorts
								</a>

								<span class="block2-oldprice m-text7 p-r-5">
									$29.50
								</span>

								<span class="block2-newprice m-text8 p-r-5">
									$15.90
								</span>
							</div>
						</div>
					</div> -->
					
				</div>
			</div>
			

		</div>
	</section>