<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$jenis_kendala = $_GET['jenis_kendala'];
$query = mysqli_query($connection, "SELECT * FROM pelanggan WHERE jenis_kendala='$jenis_kendala'");
?>

<section class="section">
    <div class="section-header d-flex justify-content-between">
        <h1>Ubah Data pelanggan</h1>
        <a href="./index.php" class="btn btn-light">Kembali</a>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- // Form -->
                    <form action="./update.php" method="post">
                        <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
                        <input type="hidden" name="jenis_kendala" value="<?= $row['jenis_kendala'] ?>">
                        <table cellpadding="8" class="w-100">
                            <tr>
                                <td>jenis_kendala</td>
                                <td><input class="form-control" required value="<?= $row['jenis_kendala'] ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td><input class="form-control" type="text" name="nama" required
                                        value="<?= $row['nama'] ?>"></td>
                            </tr>
                            <tr>
                                <td>jenis perangkat</td>
                                <td>
                                    <select class="form-control" name="jenis_perangkat" id="jenis_perangkat" required>
                                        <option value="pc" <?php if ($row['jenis_perangkat'] == "pc") {
                                                echo "selected";
                                            } ?>>pc</option>
                                        <option value="laptop" <?php if ($row['jenis_perangkat'] == "laptop") {
                                                echo "selected";
                                            } ?>>laptop</option>
                                        <option value="mac" <?php if ($row['jenis_perangkat'] == "mac") {
                                                echo "selected";
                                            } ?>>mac</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>versi os</td>
                                <td><input class="form-control" type="text" name="versi_os" required
                                        value="<?= $row['versi_os'] ?>"></td>
                            </tr>
                            <tr>
                                <td>tanggal pesan</td>
                                <td><input class="form-control" type="date" name="tanggal_pesan" required
                                        value="<?= $row['tanggal_pesan'] ?>"></td>
                            </tr>
                            <tr>
                                <td>alamat rumah</td>
                                <td colspan="3"><textarea class="form-control" name="alamat_rumah" id="alamat_rumah"
                                        required><?= $row['alamat_rumah'] ?></textarea></td>
                            </tr>
                            <tr>
                                <td>versi_os_i</td>
                                <td>
                                    <select class="form-control" name="versi_os_i" id="versi_os_i" required>
                                        <option value="WIN11" <?php if ($row['versi_os_i'] == "WIN11") {
                                                echo "selected";} ?>>WIN11</option>
                                        <option value="WIN10" <?php if ($row['versi_os_i'] == "WIN10") {
                                                echo "selected";} ?>>WIN10</option>
                                        <option value="WIN8" <?php if ($row['versi_os_i'] == "WIN8") {
                                                echo "selected";} ?>>WIN8</option>
                                        <option value="WIN7" <?php if ($row['versi_os_i'] == "WIN7") {
                                                echo "selected";} ?>>WIN7</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>keterangan</td>
                                <td colspan="3"><textarea class="form-control" name="keterangan" id="keterangan"
                                        required><?= $row['keterangan'] ?></textarea></td>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="btn btn-primary d-inline" type="submit" name="proses" value="Ubah">
                                    <a href="./index.php" class="btn btn-danger ml-1">Batal</a>
                                <td>
                            </tr>
                        </table>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>