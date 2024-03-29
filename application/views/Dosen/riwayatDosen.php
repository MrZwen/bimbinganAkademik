<!DOCTYPE html>
<html>

<head>
    <title>History Page</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 border-bottom">
            <div class="col-sm-6">
                <h1 class="m-0">Riwayat Bimbingan</h1>
            </div>
        </div>
    </div>
</div>
<div class="card card-info card-outline">
    <div class="card-header">
        <h5 class="card-title"> <i class="fas fa-users"></i> Riwayat Bimbingan</h5>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-striped">
        <thead>
            <tr>
                <th>T.A</th>
                <th>Semester</th>
                <th>Nama Mahasiswa</th>
                <th>Tanggal dan Waktu</th>
                <th>File Evaluasi</th>
            </tr>

           
        </thead>
        <tbody>
            <?php
            if (empty($hasil)) {
                echo "<tr>";
                echo "<td colspan='5' class='text-center'>Data Kosong</td>";
                echo "</tr>";
            } else {
                foreach ($hasil as $data) :
            ?>
                    <tr>
                        <td><?= $data->tahunajaran ?></td>
                        <td><?= $data->semesterg ?></td>
                        <td><?= $data->Nama ?></td>
                        <td><?= $data->TglBimbingan  ?></td>
                        <td><a href="<?= base_url('Criwayat/laporan/'.$data->id_evaluasi) ?>" class="btn btn-danger btn-sm"><i class="fa fa-book"></i>  PDF</a>
                        <td></td>
                    </tr>
        </tbody>
            <?php
                endforeach;
            }
            ?>
        </table>
    </div>
<div>
</body>

</html>