
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="table-responsive">
  <table class="table table-striped table-bordered table-sm table-dark border-danger">
    <thead>
      <tr>
        <th scope="col">nidn</th>
        <th scope="col">pendidikan</th>
        <th scope="col">nama</th>
        <th scope="col">Mata Kuliah</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= $dmk->nidn ?></td>
        <td><?= $dmk->pendidikan?></td>
        <td><?= $dmk->nama ?></td>
        <td><?= $dmk->matkul ?></td>
      </tr>
    </tbody>

  </table>
</div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>






