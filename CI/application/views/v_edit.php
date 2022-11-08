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
            <form action="<?= base_url('web/update') ?>" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?= $biodata->nama ?>">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" value="<?= $biodata->jenis_kelamin ?>" id="jenis_kelamin">
                        <option value="pria" <?php if($biodata->jk=="pria") echo "selected"; ?>>Pria</option>
                        <option value="wanita" <?php if($biodata->jk=="wanita") echo "selected"; ?>>Wanita</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?= $biodata->alamat ?>">
                </div>
                <input type="hidden" name="id" value="<?= $biodata->id ?>">
                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan" value="<?= $biodata->pekerjaan ?>">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('web/bio') ?>" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
</main>

<br><br>