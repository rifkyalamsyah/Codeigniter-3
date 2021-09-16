<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Mahasiswa</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data mahasiswa</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <!-- Button -->
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Mahasiswa</button>

        <!-- table -->
        <table class="table table-striped table-bordered">
            <tr class="text-center">
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Tanggal Lahir</th>
                <th>Jurusan</th>
                <th colspan="3">Aksi</th>
            </tr>

            <?php
            $no = 1;
            foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $mhs->nama ?></td>
                    <td><?= $mhs->nim ?></td>
                    <td><?= $mhs->tgl_lahir ?></td>
                    <td><?= $mhs->jurusan ?></td>
                    <!-- button detail -->
                    <td class="text-center">
                        <?= anchor('mahasiswa/detail/' . $mhs->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?>
                    </td>
                    <!-- button edit -->
                    <td class="text-center">
                        <?= anchor('mahasiswa/edit/' . $mhs->id, '<div class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> </div>') ?>
                    </td>
                    <!-- button delete -->
                    <td class="text-center" onclick="javascript: return confirm('Anda yakin hapus?')">
                        <?= anchor('mahasiswa/hapus/' . $mhs->id, '<div class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </div>') ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Form Input Data Mahasiswa</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- form -->

                    <?php echo form_open_multipart('mahasiswa/tambah_aksi'); ?>

                    <!-- form input -->
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">NIM</label>
                        <input type="text" name="nim" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Jurusan</label>
                        <!-- <input type="text" name="jurusan" class="form-control"> -->
                        <select class="form-control" name="jurusan">
                            <option>Informatika</option>
                            <option>Teknik Informatika</option>
                            <option>Teknik Komputer</option>
                            <option>Sistem Informasi</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">No. Telp</label>
                        <input type="text" name="no_telp" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Upload Foto</label>
                        <input type="file" name="foto" class="form-control">
                    </div>

                    <!-- button -->
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>