<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dosen</title>
</head>

<body>
    <div id="body" class="col-md-12">
        <h3>
            Daftar Dosen
        </h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>NIDN</th>
                    <th>Pendidikan</th>
                    <th>Gender</th>
                    <th>Tanggal Lahir</th>
                    <th>Tempat Lahir</th>   
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td><?= $dosen->id ?></td>
                        <td><?= $dosen->nama ?></td>
                        <td><?= $dosen->nidn ?></td>
                        <td><?= $dosen->pendidikan ?></td>
                        <td><?= $dosen->gender ?></td>
                        <td><?= $dosen->tgl_lahir ?></td>
                        <td><?= $dosen->tmp_lahir ?></td>
                    </tr>
            </tbody>
        </table>
    </div>
</body>

</html>