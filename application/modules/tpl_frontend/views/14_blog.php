<!-- Title Page -->

	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url({base_url(assets/frontend/images/blog.jpg)})">
		<h2 class="l-text2 t-center">
			Blog
		</h2>
	</section>
	<!-- content page -->
	<section class="bgwhite p-t-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-75">
					<div class="p-r-50 p-r-0-lg">
				<?php
					foreach($result as $re){
				?>						
						<!-- item blog -->
						<div class="item-blog p-b-80">
							<div class="item-blog-img pos-relative dis-block hov-img-zoom">
								<img src="<?php echo base_url('assets/foto_artikel/'.$re['gambar_artikel']); ?>" alt="IMG-ARTIKEL">
							</div>

							<div class="item-blog-txt p-t-33">
								<h4 class="p-b-11">
									<a href="<?php echo base_url('frontend/blog_detail/'.$re['id_artikel']); ?>" class="m-text24">
										<?php echo ($re['judul_artikel']); ?>
										<!-- {judul_artikel} -->
									</a>
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										<?php echo ($re['penulis_artikel']); ?>
										<!-- {penulis_artikel} -->
										<span class="m-l-3 m-r-6">|</span>
									</span>

									<span>
										<?php echo ($re['kategori_artikel']); ?>
										<!-- {kategori_artikel} -->
									</span>
									
									
								</div>
	
								<p class="p-b-12">
								<?php echo substr($re['isi_artikel'], 0, 250); ?> 
									<!-- {isi_artikel} -->
								</p><br />
									posting :<h6><?php echo ($re['insert_on']); ?></h6><br><br>
								<a href="<?php echo base_url('frontend/blog_detail/'.$re['id_artikel']); ?>" class="s-text20">
									Continue Reading
									<i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
								</a>
							</div>
						</div>
						<?php
							}
						?>	
					</div>

					<!-- Pagination -->
					
					<div class="pagination flex-m flex-w p-r-50">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-75">
					<div class="rightbar">
						<!-- Search -->
						<form action="" method="get">	
						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
						</form>

						<!-- Categories -->
						<h4 class="m-text23 p-t-56 p-b-34">
							Categories
						</h4>

						<ul>
							<li class="p-t-6 p-b-8 bo6">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									Semua
								</a>
							</li>

							<li class="p-t-6 p-b-8 bo7">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									Pengetahuan
								</a>
							</li>

							<li class="p-t-6 p-b-8 bo7">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									Perawatan
								</a>
							</li>

						</ul>

					</div>
				</div>
			</div>
		</div>
	</section>
