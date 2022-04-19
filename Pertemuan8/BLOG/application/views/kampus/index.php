<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="table-responsive">
  <table class="table table-striped table-bordered table-sm table-dark border-danger">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">nidn</th>
        <th scope="col">pendidikan</th>
        <th scope="col">nama</th>
        <th scope="col">Mata Kuliah</th>
      </tr>
    </thead>
    <tbody>
        <?php
        $number = 1;
        foreach ($list_dmk as $dmk){
        ?>
      <tr>
        <th scope="row"><?= $number ?></th>
        <td><?= $dmk->nidn ?></td>
        <td><?= $dmk->pendidikan ?></td>
        <td><?= $dmk->nama ?></td>
        <td><?= $dmk->matkul ?></td>
      </tr>
      <?php
        $number++;
        }
      ?>
    </tbody>

  </table>
</div>
<hr>
<div class="table-responsive">
  <table class="table table-striped table-bordered table-sm table-dark border-danger">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Kode</th>
        <th scope="col">SKS</th>
        <th scope="col">Mata Kuliah</th>
      </tr>
    </thead>
    <tbody>
        <?php
        $number = 1;
        foreach ($list_matkul as $mk){
        ?>
      <tr>
        <th scope="row"><?= $number ?></th>
        <td><?= $mk->kode ?></td>
        <td><?= $mk->sks ?></td>
        <td><?= $mk->namamatkul ?></td>
      </tr>
      <?php
        $number++;
        }
      ?>
    </tbody>

  </table>
</div>
</body>
</html>