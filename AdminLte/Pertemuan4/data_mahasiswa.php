<?php
require_once "class_mahasiswa.php";

$hafizh = new Mahasiswa("0001", "Mohamad Hafizh Ashifani", "TI", 2.9);
$irsal = new Mahasiswa("0002", "Irsal Fathi Farhat", "Kedokteran", 3);
$isal = new Mahasiswa("0003", "Achmad Faisal Ghifari", "Sastra", 4);

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
                NIM
            </th>
            <th>
                Nama
            </th>
            <th>
                Prodi
            </th>
            <th>
                IPK
            </th>
            <th>
                Predikat
            </th>
        </thead>
        <tbody>
            <tr>
                <td>    
                    <?= $hafizh->nim(); ?>
                </td>
                <td>    
                    <?= $hafizh->nama(); ?>
                </td>
                <td>    
                <?= $hafizh->prodi(); ?>
                </td>
                <td>    
                <?= $hafizh->ipk; ?>
                </td>
                <td>    
                <?= $hafizh->predikatipk(); ?>
                </td>
            </tr>
            <tr>
                <td>    
                    <?= $irsal->nim(); ?>
                </td>
                <td>    
                    <?= $irsal->nama(); ?>
                </td>
                <td>    
                <?= $irsal->prodi(); ?>
                </td>
                <td>    
                <?= $irsal->ipk; ?>
                </td>
                <td>    
                <?= $irsal->predikatipk(); ?>
                </td>
            </tr>
            <tr>
                <td>    
                    <?= $isal->nim(); ?>
                </td>
                <td>    
                    <?= $isal->nama(); ?>
                </td>
                <td>    
                <?= $isal->prodi(); ?>
                </td>
                <td>    
                <?= $isal->ipk; ?>
                </td>
                <td>    
                <?= $isal->predikatipk(); ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>