<section class="blog bgwhite p-t-94 p-b-65">
	<div class="container">
		<div class="sec-title p-b-52">
			<h3 class="m-text5 t-center">
				Blog
			</h3>
		</div>
		
		<div class="row">
		<?php
			$query = $this->db->query("SELECT * FROM artikel;");
			foreach ($query->result_array() as $row){
		?>		
			<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
				<div class="block2">
					<a href="<?php echo base_url('frontend/blog_detail/'.$row['id_artikel']); ?>" class="block3-img dis-block hov-img-zoom">
						<img src="<?php echo base_url('assets/foto_artikel/'.$row['gambar_artikel']); ?>" alt="IMG-BLOG" width="300" height="250">
						<!-- <img src="<?php echo base_url('assets/foto_artikel/'.$row['gambar_artikel']); ?>" alt="IMG-BLOG" width="720px" height="auto" > -->
					</a>

				<div class="block3-txt p-t-14">
					<h4 class="p-b-7">
						<a href="<?php echo base_url('frontend/blog_detail/'.$row['id_artikel']); ?>" class="m-text11">
							<?php echo $row['judul_artikel']; ?>
						</a>
					</h4>

					<span class="s-text6">By</span> <span class="s-text7"><?php echo ($row['penulis_artikel']); ?></span>
					<span class="s-text6">on</span> <span class="s-text7"><?php echo ($row['insert_on']); ?></span>

						<p class="s-text8 p-t-16">
							<?php echo substr($row['isi_artikel'], 0, 100); ?> 
						</p>
					</div>
				</div>
			</div>
		<?php
			}
		?>	
			
		</div>
	</div>
</section>
