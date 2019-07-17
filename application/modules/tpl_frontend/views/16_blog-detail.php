

	<!-- content page -->
	<section class="bgwhite p-t-60 p-b-25">
		<div class="container">
			{result}
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-50 p-r-0-lg">
						<div class="p-b-40">
							<div class="blog-detail-img wrap-pic-w">
								<img src="{base_url(assets/foto_artikel/{gambar_artikel})}" alt="IMG-BLOG">
							</div>
							
							<div class="blog-detail-txt p-t-33">
								<h4 class="p-b-11 m-text24">
									{judul_artikel}
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										{penulis_artikel}
										<span class="m-l-3 m-r-6">|</span>
									</span>

									<span>
										{insert_on}
										<span class="m-l-3 m-r-6">|</span>
									</span>

									<span>
										{nama_katar}
										<span class="m-l-3 m-r-6">|</span>
									</span>
								</div>

								<p class="p-b-25">
									{isi_artikel}
								</p>

							</div>

							
						</div>

						<!-- Leave a comment -->
					
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
					<div class="rightbar">
						<!-- Search -->
						

						<!-- Categories -->
						<h4 class="m-text23 p-t-56 p-b-34">
							Kategori
						</h4>

						<ul>
							<li class="p-t-6 p-b-8 bo6">
								<a href="{base_url(frontend/blog)}" class="s-text13 p-t-5 p-b-5">
									Semua
								</a>
							</li>

							<li class="p-t-6 p-b-8 bo7">
								<a href="{base_url(frontend/blog_peng)}" class="s-text13 p-t-5 p-b-5">
									Pengetahuan
								</a>
							</li>
							
							<li class="p-t-6 p-b-8 bo7">
								<a href="{base_url(frontend/blog_per)}" class="s-text13 p-t-5 p-b-5">
									Perawatan
								</a>
							</li>
						</ul>

					</div>
				</div>
			</div>
			{/result}
		</div>
	</section>