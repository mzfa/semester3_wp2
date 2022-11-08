<main role="main" class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h4><?= $judul ?></h4>
        </div>
        <div class="card-body">
            <a href="<?= base_url('web/create') ?>" class="btn btn-success">Tambah Data</a>
            <br>
            <?php if ($this->session->flashdata('message')) :
                echo $this->session->flashdata('message');
            endif; ?>
            <table class="table table-bordered mt-3">
                <tr>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Pekerjaan</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach ($bio as $b) { ?>
                    <tr>
                        <td><?= $b->nama ?></td>
                        <td><?= $b->jk ?></td>
                        <td><?= $b->alamat ?></td>
                        <td><?= $b->pekerjaan ?></td>
                        <td>
                            <a href="<?= base_url('web/edit/'.$b->id) ?>" class="btn btn-warning"> Ubah</a>
                            <a onclick="return confirm('Yakin mau di hapus')" href="<?= base_url('web/delete/'.$b->id) ?>" class="btn btn-danger"> Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</main>

<br><br>