<script>
$(document).ready(function(){
	$("#btn-search").click(function(){
		$(this).html("SEARCHING...").attr("disable", "disable");

		$.ajax({
			url	: baseurl + 'barang/search',
			type: 'POST',
			data: {keyword: $("#keyword").val()},
			dataType: "json",
			beforeSend: function(e) {
				if(e && e.overrideMimeType) {
					e.overrideMimeType("application/json;charset=UTF-8");
				}
			},
			success: function(response){
				$("#btn-seaarch").html("SEARCH").removeAttr("disable");
				$("#parser").html(response.hasil);
			},
			error: function (xhr, ajaxOptions, throwError) {
				alert(xhr.responseText);
		}

	});
	});
});
</script>