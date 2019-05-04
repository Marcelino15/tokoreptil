

	<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url({base_url(assets/frontend/images/shop.jpg)})">
		<h2 class="l-text2 t-center">
          Serangga
		</h2>
		<p class="m-text13 t-center">
			Koleksi Terbaru 2019
		</p>
	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Kategori
						</h4>

						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="{base_url(frontend/shop)}" class="s-text13 ">
									Semua
								</a>
							</li>

							<li class="p-t-4">
								<a href="{base_url(frontend/shop_ular)}" class="s-text13 ">
									Ular
								</a>
							</li>

							<li class="p-t-4">
								<a href="{base_url(frontend/shop_katak)}" class="s-text13">
									Katak
								</a>
							</li>

							<li class="p-t-4">
								<a href="{base_url(frontend/shop_kura)}" class="s-text13">
									Kura-kura
								</a>
							</li>
							<li class="p-t-4">
								<a href="{base_url(frontend/shop_kadal)}" class="s-text13 ">
									Kadal
								</a>
							</li>
							<li class="p-t-4">
								<a href="{base_url(frontend/shop_acc)}" class="s-text13">
									Aksesoris
								</a>
							</li>

							<li class="p-t-4">
								<a href="{base_url(frontend/shop_ser)}" class="s-text13 active1">
									Serangga
								</a>
							</li>
						</ul>

						<!--  -->
						<div class="search-product pos-relative bo4 of-hidden">
						<form action="" method="get">	
						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
						</form>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
							<form action="" method="get">
								<select class="selection-2" name="sorting" onchange="this.form.submit();">
									<option>Pilih Sorting</option>
									<option value="0">Termurah ke Termahal</option>
									<option value="1">Termahal ke Termurah</option>
									<option value="2">Terbaru</option>
								</select>
								</form>
							</div>

						</div>

						<span class="s-text8 p-t-5 p-b-5">
							Showing 1–12 of 16 results
						</span>
					</div>

					<!-- Product -->
					<div class="row">
						{result}
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="{base_url(assets/foto_barang/{gambar1_barang})}" alt="IMG-PRODUCT" width="150" height="200">
								</div>

								<div class="block2-txt p-t-20">
									<a href="{base_url(frontend/product_detail)}" class="block2-name dis-block s-text3 p-b-5">
										{nama_barang}
									</a>

									<span class="block2-price m-text6 p-r-5">
										Rp.&nbsp;{harga_barang},00
									</span><br>
									<span class="block2-price m-text6 p-r-5">
										Lokasi : {nama_provinsi}
									</span>
								</div>
							</div>
						</div>
						{/result}	
					</div>

					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-t-26">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div>
				</div>
			</div>
		</div>
	</section>

