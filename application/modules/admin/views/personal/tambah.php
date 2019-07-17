<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Form Pendaftaran User Baru
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard">
                    </i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">
                    Personal
                </a>
            </li>
            <li class="active">
                Tambah Personal
            </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    Form Input Data User
                </h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-toggle="tooltip" data-widget="collapse" title="Collapse" type="button">
                        <i class="fa fa-minus">
                        </i>
                    </button>
                    <button class="btn btn-box-tool" data-toggle="tooltip" data-widget="remove" title="Remove" type="button">
                        <i class="fa fa-times">
                        </i>
                    </button>
                </div>
            </div>
            <div class="box-body">
            {form_open(base_url({base_level}/personal/tambah_proses))}
            <label for="nama">Nama Personal</label>
            {form_input(nama_personal,,class="form-control" placeholder="Nama")}
            <label for="nama">Nomor Handphone</label>
            {form_input(hp_personal,,class="form-control" placeholder="Nomor Handphone")}
            <label for="nama">Email Personal</label>
            {form_input(email_personal,,class="form-control" placeholder="Alamat Email")}
            <label>Lokasi :</label><br>
            <div class="form-group">
            <label>Provinsi</label>
                <select name="provinsi_personal" class="form-control" id="provinsi">
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
            <label>Kecamatan</label>
                <select class="form-control" name="kabupaten_personal" id="kabupaten">
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
            <div class="form-group">  
            <label>Level:</label>
            <select class="form-control" name="level_personal" >
                <option value="">---Masukkan Level---</option>
                <option value="admin">Admin</option>
                <option value="penjual">Penjual</option>
                
            </select>
            <!-- <?php
            $tes=[
              'admin'=>'admin',
              'user'=>'user'
            ];
            print form_dropdown('level_personal',$tes,'user')
            ?> -->
            </div>
            {form_password(password_personal,,class="form-control" placeholder="Password")}
            <br />
            <div class="form-group">
            <label>Foto Profil</label>
            <input type="file" name="foto_personal" class="form-control">
            </div>
            {form_submit(kirim,Kirim,class="btn btn-success")}
            <a href="{base_url(admin/personal)}" class="btn btn-primary">Kembali</a>
            {form_close()}
            </div>
            <!-- /.box-body -->
            <!--         <div class="box-footer">
          Footer
        </div> -->
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
