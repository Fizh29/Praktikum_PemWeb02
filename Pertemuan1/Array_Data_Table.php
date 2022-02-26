<?php
    $mahasiswa = [
        ["id" => 1, "nama" => "Hafizh", "nim" => "010101010", "Uts" => 100, "Uas" => 80],
        ["id" => 2, "nama" => "Mohamad", "nim" => "020202020", "Uts" => 70, "Uas" => 50]
    ];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table table-stripped">
        <thead>
            <th>
                ID
            </th>
            <th>
                Nama
            </th>
            <th>
                NIM
            </th>
            <th>
                Uts
            </th>
            <th>
                Uas
            </th>
        </thead>
        <tbody>
            <?php foreach($mahasiswa as $mhs): ?>
            <tr>
                <td>    
                    <?= $mhs["id"] ?>
                </td>
                <td>    
                    <?= $mhs["nama"] ?>
                </td>
                <td>    
                    <?= $mhs["nim"] ?>
                </td>
                <td>    
                    <?= $mhs["Uts"] ?>
                </td>
                <td>    
                    <?= $mhs["Uas"] ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>