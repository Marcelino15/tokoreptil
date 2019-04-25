	<!-- Blog -->
	<section class="blog bgwhite p-t-94 p-b-65">
		<div class="container">
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					Blog
				</h3>
			</div>
			{result}
			{judul_artikel}
			{/result}
			<div class="row">
				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<?php
						foreach($result as $re){
					?>					
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="<?php echo base_url('assets/foto_artikel/'.$re['gambar_artikel']); ?>" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									<?php echo ($re['judul_artikel']); ?>
								</a>
							</h4>

							<span class="s-text6">Penulis</span> <span class="s-text7"><?php echo ($re['penulis_artikel']); ?></span>
							<span class="s-text6">Tanggal Terbit</span> <span class="s-text7"><?php echo ($re['tanggal_artikel']); ?></span>

							<p class="s-text8 p-t-16">
							<?php echo substr($re['isi_artikel'], 0, 100); ?> 
							</p>
						</div>
					</div>
					<?php
						}
					?>	
				</div>
				
			</div>
		</div>
		
	</section>
