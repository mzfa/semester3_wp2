<main role="main" class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h4>Tambah Data Baru</h4>
        </div>
        <div class="card-body">
            <?php if(validation_errors() != false) { ?>
                <div class="alert alert-danger">
                    <?= validation_errors() ?>
                </div>
            <?php } ?>
            <form action="<?= base_url('web/save') ?>" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat">
                </div>
                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('web/bio') ?>" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
</main>

<br><br>