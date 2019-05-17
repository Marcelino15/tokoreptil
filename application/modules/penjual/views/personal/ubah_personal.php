  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {title}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{base_url({base_level}/dashboard)}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Personal</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Profil {nama_session}</h3>

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
        <form action="<?php echo site_url('penjual/personal/ubah'); ?>" method="post">
            <input type="hidden" name="id_personal" value="{id_personal}">
          
            <label>Nama Personal</label>
            <input type="text" name="nama_personal" value="{nama_personal}" class="form-control">     
            
            <label>Nomor Handphone</label>
            <input type="number" name="hp_personal" value="{hp_personal}" class="form-control">
    
            <label>Email</label>
            <input type="email" name="email_personal" value="{email_personal}" class="form-control">
            
            <label>Lokasi</label>
            <div class="form-group">
            <label>Provinsi</label>
                <select name="provinsi_personal" class="form-control" id="provinsi">
                <option value="{id_provinsi}">{nama_provinsi}</option>
                <option>---Masukkan Provinsi---</option>
                <?php
                foreach ($lokasi['provinsi'] as $prov) {
                    ?>
                    <option <?php echo $lokasi['provinsi_selected'] == $prov->id_provinsi ? 'selected="selected"' : '' ?>
                        value="<?php echo $prov->id_provinsi ?>"><?php echo $prov->nama_provinsi ?></option>
                    <?php
                }
                ?>
                </select>
            </div>
            <div class="form-group">
            <label>Kabupaten</label>
                <select class="form-control" name="kabupaten_personal" id="kabupaten">
                    <option value="{id_kabupaten}">{nama_kabupaten}</option>
                    <option value="">---Masukkan Kabupaten---</option>
                    <?php
                        foreach ($lokasi['kabupaten'] as $kab) {
                            ?>
                            <!--di sini kita tambahkan class berisi id provinsi-->
                            <option <?php echo $lokasi['kabupaten_selected'] == $kab->idprovinsi_kabupaten ? 'selected="selected"' : '' ?>
                                class="<?php echo $kab->idprovinsi_kabupaten ?>" value="<?php echo $kab->id_kabupaten ?>"><?php echo $kab->nama_kabupaten ?></option>
                            <?php
                        }
                    ?>
                </select>
            </div>    
            <label>Password</label>
            <input type="password" name="password_personal" value="{password_personal}" class="form-control">
            <br />
            <label>Foto</label>
            <input name="foto_personal" value="{foto_personal}" class="form-control">
            <br />
            <a href="{base_url(admin/personal/upload/{id_personal})}" class="btn btn-info">Upload Foto</a>
            <button type="submit" name="aksi" value="simpan" class="btn btn-success">Simpan</button>
            <button type="submit" value="Go Back" onclick="history.back(-1)" class="btn btn-primary">Batal</button>
            <a href="{base_url(admin/personal/hapus/{id_personal})}" class="btn btn-danger">Hapus</a>
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