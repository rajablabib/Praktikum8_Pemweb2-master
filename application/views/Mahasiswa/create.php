<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        h2{
            margin:0px 0px 30px 0px;
            text-align:center;
        }
    </style>

    <title>Daftar Matakuliah</title>
  </head>
  <body>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <h2>Form Kelola Mahasiswa</h2>

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Mahasiswa</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">

        <?php echo form_open('mahasiswa/save')?>
        <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM</label> 
            <div class="col-8">
            <input id="nim" name="nim" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-address-card"></i>
                </div>
                </div> 
                <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" required="required" class="form-control">
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L" required="required"> 
                <label for="jk_0" class="custom-control-label">Laki-Laki</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P" required="required"> 
                <label for="jk_1" class="custom-control-label">Perempuan</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
            <div class="col-8">
            <input id="tmp_lahir" name="tmp_lahir" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-calendar-times-o"></i>
                </div>
                </div> 
                <input id="tgl_lahir" name="tgl_lahir" type="text" required="required" class="form-control" placeholder="dd-mm-yyyy">
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
            <div class="col-8">
            <select id="prodi" name="prodi" class="custom-select" required="required">
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Bisnis Digital">Bisnis Digital</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="ipk" class="col-4 col-form-label">IPK</label> 
            <div class="col-8">
            <input id="ipk" name="ipk" type="text" required="required" class="form-control">
            <span id="sksHelpBlock" class="form-text text-muted">Masukkan ipk dalam bentuk angka</span>
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <?php echo form_close()?>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->