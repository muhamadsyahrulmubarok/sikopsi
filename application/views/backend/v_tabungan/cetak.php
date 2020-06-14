<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabungan - Nama</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <div class="border border-dark">
        <div class="container">
            <tr>
                <td>

                    <div class="row">
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-5">
                            DARI RESORT : <?= $anggota['nama_resort']; ?>
                        </div>
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-5">
                            <U>
                                BON PENGULARAN SIMPANAN
                            </U>
                        </div>
                    </div>
                    <p></p>
                    <div class="row">
                        <div class="col-md-4 flex-wrap">
                            Nama &nbsp;&nbsp;: <?= $anggota['nama_anggota']; ?> <br>
                            Alamat : <?= $anggota['alamat_anggota']; ?>
                        </div>
                        <div class="col-md-4 flex-wrap">
                            No. Langganan : ________________________ <br>
                            RT : <?= $anggota['rt_anggota']; ?> &nbsp;&nbsp;&nbsp;RW : <?= $anggota['rw_anggota']; ?>
                        </div>
                        <div class="col-md-4 flex-wrap">
                            <br>
                            Kelurahan : <?= $anggota['desa_anggota']; ?>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                    <p></p>
                    <style>
                        .table-bordered {
                            border: 1px solid #000 !important;
                        }

                        .table-bordered thead th {
                            border: 1px solid #000 !important;
                        }

                        .table-bordered tbody td {
                            border: 1px solid #000 !important;
                        }

                        .table-bordered tfoot th {
                            border: 1px solid #000 !important;
                        }
                    </style>
                    <table class="table table-bordered">
                        <thead>
                            <th>Tgl. Drop</th>
                            <th>No. Pinjaman</th>
                            <th>Simpanan Wajib 1%</th>
                            <th>Simpanan Terpimpin 4%</th>
                            <th>Jumlah Rp.</th>
                            <th>Keterangan</th>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $row) {
                            ?>
                                <tr>
                                    <td><?= $row['tgl_drop_tabungan']; ?></td>
                                    <td><?= $row['no_peminjaman']; ?></td>
                                    <td></td>
                                    <td></td>
                                    <td><?= 'Rp. ' . number_format($row['tabungan'], 0, ',', '.'); ?></td>
                                    <td>-</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <th colspan="4">Jumlah</th>
                            <th>
                                <?php
                                $total = 0;
                                foreach ($data as $row) {
                                    $jumlah = $row['tabungan'];
                                    $total = $jumlah + $total;
                                }
                                echo 'Rp. ' . number_format($total, 0, ',', '.');
                                ?>
                            </th>
                            <th></th>
                        </tfoot>
                    </table>
                    <p>
                    </p>
                </td>
            </tr>
            <div class="row" style="height: 100px;">
                <div class="col-md-2">Pimpinan</div>
                <div class="col-md-2">Kasir</div>
                <div class="col-md-6"></div>
                <div class="col-md-2">Penerima</div>
            </div>
        </div>
    </div>
</body>

</html>