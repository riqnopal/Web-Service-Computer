<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$prodi = mysqli_query($connection, "SELECT * FROM pelanggan");
?>

<section class="section">
    <div class="section-header d-flex justify-content-between">
        <h1>Buat Pesanan</h1>
        <a href="./index.php" class="btn btn-light">Kembali</a>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- // Form -->
                    <form action="./store.php" method="POST">
                        <table cellpadding="8" class="w-100">
                            <tr>
                                <td>Jenis Kendala</td>
                                <td><input class="form-control" type="number" name="jenis_kendala"></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td><input class="form-control" type="text" name="nama"></td>
                            </tr>
                            <tr>
                                <td>Jenis Perangkat</td>
                                <td>
                                    <select class="form-control" name="jenis_perangkat" id="jenis_perangkat" required>
                                        <option value="">--Pilih Jenis Perangkat--</option>
                                        <option value="pc">PC</option>
                                        <option value="laptop">LAPTOP</option>
                                        <option value="mac">MAC</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Versi OS</td>
                                <td><input class="form-control" type="text" name="versi_os" size="20"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Pesan</td>
                                <td><input class="form-control" type="date" id="datepicker" name="tanggal_pesan"></td>
                            </tr>
                            <tr>
                                <td>Alamat Rumah</td>
                                <td><textarea name="alamat_rumah" class="form-control"></textarea></td>
                            </tr>
                            <tr>
                                <td>Versi OS yang ingin di install</td>
                                <td>
                                    <select class="form-control" name="versi_os_i" id="versi_os_i" required>
                                        <option value="">--Pilih OS--</option>
                                        <option value="WIN11">WIN 11</option>
                                        <option value="WIN10">WIN 10</option>
                                        <option value="WIN8">WIN 8</option>
                                        <option value="WIN7">WIN 7</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><textarea name="keterangan" class="form-control"></textarea></td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                                    <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>