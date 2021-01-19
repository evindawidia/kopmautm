<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Koperasi Mahasiswa UTM</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8 mt-5">
            <div class="col-md-12">
                <h3>Kuitansi Peminjaman</h3>
                <hr>
                <small>Dicetak pada : <?= date("d/M/Y") ?></small>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>
                            Nama Anggota
                        </th>
                        <th>
                            Jumlah Pinjaman
                        </th>
                        <th>
                            Jumlah Cicilan
                        </th>
                        <th>
                            Tenor
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <?= $Peminjaman->GetNamaAnggota() ?>
                        </td>
                        <td>
                            Rp. <?= $Peminjaman->jumlah_pinjam ?>
                        </td>
                        <td>
                            Rp. <?= $Peminjaman->jumlah_cicilan ?>
                        </td>
                        <td>
                            <?= $Peminjaman->tenor ?>
                        </td>
                    </tr>
            </table>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</body>

</html>