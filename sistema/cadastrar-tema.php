<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <?php include './vendor/_header.php'; ?>
  <div class="container-fluid">
    <div class="row">
      <?php include './vendor/_menu-lateral.php'; ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="chartjs-size-monitor">
          <div class="chartjs-size-monitor-expand">
            <div class=""></div>
          </div>
          <div class="chartjs-size-monitor-shrink">
            <div class=""></div>
          </div>
        </div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Cadastro de tema</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
              </nav>
            </div>

          </div>
        </div>

        <!-- <h2>Section title</h2> -->
        <div class="table-responsive">
          <form action="vendor/functions/categoria/_subcategoria.php" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tema</label>
              <input type="text" class="form-control" id="" name="subcategoria">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </form>
        </div>
      </main>
    </div>
  </div>
  <div class="container">


  </div>
  <?php // include 'vendor/_footer.php'
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>