<!--===============================================================================================-->
	<script type="text/javascript" src="{base_url(assets/frontend/vendor/jquery/jquery-3.2.1.min.js)}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{base_url(assets/frontend/vendor/animsition/js/animsition.min.js)}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{base_url(assets/frontend/vendor/bootstrap/js/popper.js)}"></script>
	<script type="text/javascript" src="{base_url(assets/frontend/vendor/bootstrap/js/bootstrap.min.js)}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{base_url(assets/frontend/vendor/select2/select2.min.js)}"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{base_url(assets/frontend/vendor/slick/slick.min.js)}"></script>
	<script type="text/javascript" src="{base_url(assets/frontend/js/slick-custom.js)}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{base_url(assets/frontend/vendor/countdowntime/countdowntime.js)}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{base_url(assets/frontend/vendor/lightbox2/js/lightbox.min.js)}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{base_url(assets/frontend/vendor/sweetalert/sweetalert.min.js)}"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script src="{base_url(assets/frontend/js/main.js)}"></script>
	<script src="{base_url(assets/frontend/js/jquery.min.js)}"></script>

</body>
</html>
