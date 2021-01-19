<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8 mt-5">
            <div class="col-md-12">
                <h3>Kuitansi Pembayaran</h3>
                <hr>
                <small>Dicetak pada : <?= date("d/M/Y") ?></small>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>
                            Nama Barang
                        </th>
                        <th>
                            Harga
                        </th>
                        <th>
                            Jumlah Item
                        </th>
                        <th>
                            Total Harus dibayar
                        </th>
                    </tr>

                    <?php
                    $bayar = 0;
                    foreach ($Pembelian->DetailPembelian() as $dp) { ?>
                        <tr>
                            <td>
                                <?= $dp->GetNamaBarang() ?>
                            </td>
                            <td>
                                <?= $dp->GetHargaJual() ?>
                            </td>
                            <td>
                                <?= $dp->jumlah_beli ?>
                            </td>
                            <td>
                                Rp. <?= $dp->GetTotal() ?>
                            </td>
                        </tr>
                    <?php
                        $bayar += $dp->GetTotal();
                    } ?>
                    <tr class="bg-secondary text-white">
                        <td colspan="3">
                            Total Yang Dibayar
                        </td>
                        <td>
                            <?= $bayar ?>
                        </td>
                    </tr>
            </table>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</body>

</html>