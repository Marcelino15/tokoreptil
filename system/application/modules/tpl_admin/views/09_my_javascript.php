<!-- page script -->
<script>
  $(document).ready(function() {
    $('#tabel_pesan').DataTable({
      "order": [[0, 'desc']],
      "columnDefs": [
      {
        "targets": [0],
        "searchable": false,
        "orderable": true,
        "visible": true
      },
      { 
        "targets": [1, 2, 3, 4],
        "searchable": true,
        "orderable": false,
        "visible": true
      },
      {
        "targets": [5],
        "searchable": false,
        "orderable": false,
        "visible": false
      },
      {
        "targets": [6],
        "searchable": false,
        "orderable": false,
        "visible": true
      }]
    });

    $('#tabel_personal').DataTable({
      "order": [[0, 'desc']],
      "columnDefs": [
      {
        "targets": [0,1,2,3,4],
        "searchable": true,
        "orderable": true,
        "visible": true
      },
      {
        "targets": [5],
        "searchable": false,
        "orderable": false,
        "visible": false
      },
      {
        "targets": [6],
        "searchable": false,
        "orderable": false,
        "visible": true
      }]
    });

     $('#tabel_kategori').DataTable({
      "order": [[0, 'desc']],
      "columnDefs": [
      {
        "targets": [0,1],
        "searchable": true,
        "orderable": true,
        "visible": true
      },
      {
        "targets": [0],
        "searchable": false,
        "orderable": false,
        "visible": false
      },
      {
        "targets": [1],
        "searchable": false,
        "orderable": false,
        "visible": true
      }]
    });

     $('#tabel_subkategori').DataTable({
      "order": [[0, 'desc']],
      "columnDefs": [
      {
        "targets": [0,1,2],
        "searchable": true,
        "orderable": true,
        "visible": true
      },
      {
        "targets": [0],
        "searchable": false,
        "orderable": false,
        "visible": false
      },
      {
        "targets": [1],
        "searchable": false,
        "orderable": false,
        "visible": true
      }]
    });

    $(document).ready(function(){ 
    $("#loading").hide();
    
    $("#propinsi").change(function(){ 
      $("#kota").hide(); 
      $("#loading").show(); 
    
      $.ajax({
        type: "POST", 
        url: "<?php echo base_url("form/listKota"); ?>", 
        data: {id_propinsi : $("#propinsi").val()}, 
        dataType: "json",
        beforeSend: function(e) {
          if(e && e.overrideMimeType) {
            e.overrideMimeType("application/json;charset=UTF-8");
          }
        },
        success: function(response){ 
          $("#loading").hide(); 
          $("#kota").html(response.list_kota).show();
        },
        error: function (xhr, ajaxOptions, thrownError) { 
          alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); 
        }
      });
    });
  });

  });
</script>