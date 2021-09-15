<div class="content-wrapper">
    <section class="content">
        <?php foreach ($mahasiswa as $mhs) : ?>

            <form action="<?= base_url() . 'mahasiswa/update'; ?>" method="POST">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="hidden" name="id" class="form-control" value="<?= $mhs->id ?>">
                    <input type="text" name="nama" class="form-control" value="<?= $mhs->nama ?>">
                </div>

                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control" value="<?= $mhs->nim ?>">
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" value="<?= $mhs->tgl_lahir ?>">
                </div>

                <div class="form-group">
                    <label>Jurusan</label>
                    <select class="form-control" name="jurusan">
                        <option value="<?= $mhs->jurusan ?>"><?= $mhs->jurusan ?></option>
                        <option>Informatika</option>
                        <option>Teknik Informatika</option>
                        <option>Teknik Komputer</option>
                        <option>Sistem Informasi</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?= $mhs->alamat ?>">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?= $mhs->email ?>">
                </div>

                <div class="form-group">
                    <label>No. Telp</label>
                    <input type="text" name="no_telp" class="form-control" value="<?= $mhs->no_telp ?>">
                </div>

                <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>

        <?php endforeach; ?>
    </section>
</div>