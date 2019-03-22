<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Blank page
            <small>
                it all starts here
            </small>
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
                    Examples
                </a>
            </li>
            <li class="active">
                Blank page
            </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    Title
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
            {form_input(nama_personal,,class="form-control" placeholder="Nama")}
            {form_input(hp_personal,,class="form-control" placeholder="Nomor Handphone")}
            {form_input(email_personal,,class="form-control" placeholder="Alamat Email")}
            <label>Lokasi</label>
            <select name="lokasi_personal" class="form-control">
                <option value="">---Pilih Lokasi Anda---</option>
                <option value="Bantul">Bantul</option>
                <option value="Gunung Kidul">Gunung Kidul</option>
                <option value="Kulon Progo">Kulon Progo</option>
                <option value="Sleman">Sleman</option>
                <option value="Wates">Wates</option>
            </select>
                <label>
                    Level:
                </label>
            <?php
            $tes=[
              'admin'=>'admin',
              'user'=>'user'
            ];
            print form_dropdown('level_personal',$tes,'user')
            ?>
            {form_password(password_personal,,class="form-control" placeholder="Password")}
            <br />
            {form_submit(kirim,Kirim,class="btn btn-success")}
            {form_submit(kirim,Batal,value="Go Back" onclick="history.back(-1)" class="btn btn-danger")}
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
