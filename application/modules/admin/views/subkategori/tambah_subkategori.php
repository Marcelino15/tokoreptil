  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {title}
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{base_url({base_level}/dashboard)}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Sub Kategori</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">{title}</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        {form_open(base_url({base_level}/subkategori/tambah_proses))}
            {form_input(nama_subkategori,,class="form-control" placeholder="Nama Subkategori" class="form-control")}
            <br />
                <label>
                    Level:
                </label>
            <?php
            $tes=[
              '1'=>'Ular',
              '2'=>'Katak',
              '3' => 'Kura-Kura',
              '4' => 'Kadal',
              '5' => 'Accessories',
              '6' => 'Serangga'
            ];
            print form_dropdown('idkategori_subkategori',$tes)
            ?>
            <br />
            <br />
          {form_submit(kirim,Kirim, class="btn btn-success")}
          {form_submit(kirim,Batal, value="Go Back" onclick="history.back(-1)" class="btn btn-primary")}

        {form_close()}

        <!--<form action="<?php echo site_url('admin/subkategori/tambah_proses'); ?>" method="post">
          <label>Nama SubKategori</label>
          <input type="text" name="nama_subkategori">
          <br />
          <label>Kategori</label>
          <?php $pilihan1=["1"=>"ular", "2"=>"katak", "3"=>"kura-kura", "4"=>"kadal"]; ?>
          <?= form_dropdown("idkategori_subkategori", $pilihan1); ?>
          <br />
          <button type="submit" class="btn btn-success">Simpan</button>
        </form> -->

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