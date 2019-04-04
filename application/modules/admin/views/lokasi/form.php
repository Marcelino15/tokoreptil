<html>
<head>
    <title>Codeigniter Dynamic Dependent Select Box using Ajax</title>
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <style>
 .box
 {
  width:100%;
  max-width: 650px;
  margin:0 auto;
 }
 </style>
</head>
<body>
 <div class="container box">
  <br />
  <br />
  <h3 align="center">Codeigniter Dynamic Dependent Select Box using Ajax</h3>
  <br />
  <div class="form-group">
   <select name="provinsi" id="provinsi" class="form-control input-lg">
    <option value="">Select provinsi</option>
    <?php
    foreach($provinsi as $row)
    {
     echo '<option value="'.$row->id_propinsi.'">'.$row->nama_provinsi.'</option>';
    }
    ?>
   </select>
  </div>
  <br />
  <div class="form-group">
   <select name="kota" id="kota" class="form-control input-lg">
    <option value="">Select kota</option>
   </select>
  </div>
  <br />
  <div class="form-group">
   <select name="kecamatan" id="kecamatan" class="form-control input-lg">
    <option value="">Select kecamatan</option>
   </select>
  </div>
 </div>
</body>
</html>

<script>
$(document).ready(function(){
 $('#provinsi').change(function(){
  var id_provinsi = $('#provinsi').val();
  if(id_provinsi != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>lokasi/fetch_kota",
    method:"POST",
    data:{id_provinsi:id_provinsi},
    success:function(data)
    {
     $('#kota').html(data);
     $('#kecamatan').html('<option value="">Select kecamatan</option>');
    }
   });
  }
  else
  {
   $('#kota').html('<option value="">Select kota</option>');
   $('#kecamatan').html('<option value="">Select kecamatan</option>');
  }
 });

 $('#kota').change(function(){
  var id_kota = $('#kota').val();
  if(id_kota != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>lokasi/fetch_kecamatan",
    method:"POST",
    data:{id_kota:id_kota},
    success:function(data)
    {
     $('#kecamatan').html(data);
    }
   });
  }
  else
  {
   $('#kecamatan').html('<option value="">Select kecamatan</option>');
  }
 });
 
});
</script>