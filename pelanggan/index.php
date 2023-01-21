<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$result = mysqli_query($connection, "SELECT * FROM pelanggan");
?>

<section class="section">
    <div class="section-header d-flex justify-content-between">
        <h1>List Pesanan</h1>
        <a href="./create.php" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped w-100" id="table-1">
                            <thead>
                                <tr class="text-center">
                                    <th>Jenis Kendala</th>
                                    <th>Nama</th>
                                    <th>Jenis Perangkat</th>
                                    <th>Versi OS</th>
                                    <th>Tanggal Pesan</th>
                                    <th>Alamat Rumah</th>
                                    <th>Versi OS yang ingin di install</th>
                                    <th>Keterangan</th>
                                    <th style="width: 150">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($data = mysqli_fetch_array($result)):
                                ?>

                                <tr>
                                    <td>
                                        <?= $data['jenis_kendala'] ?>
                                    </td>
                                    <td>
                                        <?= $data['nama'] ?>
                                    </td>
                                    <td>
                                        <?= $data['jenis_perangkat'] ?>
                                    </td>
                                    <td>
                                        <?= $data['versi_os'] ?>
                                    </td>
                                    <td>
                                        <?= $data['tanggal_pesan'] ?>
                                    </td>
                                    <td>
                                        <?= $data['alamat_rumah'] ?>
                                    </td>
                                    <td>
                                        <?= $data['versi_os_i'] ?>
                                    </td>
                                    <td>
                                        <?= $data['keterangan'] ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-danger mb-md-0 mb-1"
                                            href="delete.php?jenis_kendala=<?= $data['jenis_kendala'] ?>">
                                            <i class="fas fa-trash fa-fw"></i>
                                        </a>
                                        <a class="btn btn-sm btn-info"
                                            href="edit.php?jenis_kendala=<?= $data['jenis_kendala'] ?>">
                                            <i class="fas fa-edit fa-fw"></i>
                                        </a>
                                    </td>
                                </tr>

                                <?php
                                endwhile;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>
<!-- Page Specific JS File -->
<?php
if (isset($_SESSION['info'])):
    if ($_SESSION['info']['status'] == 'success') {
?>
<script>
iziToast.success({
    title: 'Sukses',
    message: `<?= $_SESSION['info']['message'] ?>`,
    position: 'topCenter',
    timeout: 5000
});
</script>
<?php
    } else {
?>
<script>
iziToast.error({
    title: 'Gagal',
    message: `<?= $_SESSION['info']['message'] ?>`,
    timeout: 5000,
    position: 'topCenter'
});
</script>
<?php
    }

    unset($_SESSION['info']);
    $_SESSION['info'] = null;
endif;
?>
<script src="../assets/js/page/modules-datatables.js"></script>