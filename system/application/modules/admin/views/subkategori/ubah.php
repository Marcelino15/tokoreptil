  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {title}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{base_url({base_level}/dashboard)}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Subkategori</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Detail Subkategori</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          {result}
         <form action="<?php echo site_url('admin/subkategori/ubah_proses'); ?>" method="post">
            <input type="hidden" name="id_subkategori" value="{id_subkategori}">

           <label for="subkategori">Nama Subkategori:</label>
           <input type="text" class="form-control" id="nama_subkategori"  name="nama_subkategori" value="{nama_subkategori}" class="form-control">
            <br/>

            <label for="idkategori_subkategori">Kategori:</label>
            <?php
            $tes=[
              '1'=>'Ular',
              '2'=>'Katak',
              '3' => 'Kura-kura',
              '4' => 'Kadal',
              '5' => 'Accessories',
              '6' => 'Serangga'
            ];
            print form_dropdown('idkategori_subkategori',$tes)
            ?>
            <br /> <br />
            <button type="submit" name="aksi" value="simpan" class="btn btn-success">Simpan</button>
            <a href="{base_url(admin/subkategori/hapus/{id_subkategori})}" class="btn btn-danger">Hapus</a>
            <button type="submit" value="Go Back" onclick="history.back(-1)" class="btn btn-primary">Batal</button>
        </form>
        {/result}
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->