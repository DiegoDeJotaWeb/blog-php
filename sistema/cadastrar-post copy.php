<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="tinymce.min.js" referrerpolicy="origin"></script>
    <script src="custom.tinymce.js"></script>
  <style>
    .mce {
      width: 80%;
      height: 250px;
      margin: 5% 10%;

    }
  </style>
<!-- 
  <script src="tinymce/js/tinymce/tinymce.min.js"></script>
  <script src="tinymce/js/tinymce/langs/pt_BR.js"></script> -->
  <!-- <script src="tinymce/js/tinymce/plugins/advlist/plugin.min.js"></script>
  <script src="tinymce/js/tinymce/plugins/autolink/plugin.min.js"></script>
  <script src="tinymce/js/tinymce/plugins/link/plugin.min.js"></script>
  <script src="tinymce/js/tinymce/plugins/image/plugin.min.js"></script>
  <script src="tinymce/js/tinymce/plugins/charmap/plugin.min.js"></script>
  <script src="tinymce/js/tinymce/plugins/print/plugin.min.js"></script>
  <script src="tinymce/js/tinymce/plugins/preview/plugin.min.js"></script>
  <script src="tinymce/js/tinymce/plugins/anchor/plugin.min.js"></script>
  <script src="tinymce/js/tinymce/plugins/pagebreak/plugin.min.js"></script> -->

  <script>
    tinyMCE.init({
      selector: "textarea.mce",
      language: 'pt_BR',
      entity_encoding: "raw",
      // plugins: [
      //   'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      //   // 'searchreplace wordcount visualblocks visualchars code fullscreen',
      //   // 'insertdatetime media nonbreaking save table contextmenu directionality',
      //   // 'emoticons template paste textcolor colopicker textpattern imagetools image'
      // ],
      plugins: [
    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
    'insertdatetime', 'media', 'table', 'help', 'wordcount'
  ],
      // toolbarl: 'insertfile undo redo | bold italic underline | alingleft aligncenter alignright alignjustify | bullist numlist outdent indent | link unlink | print media image | forecolor backcolor | code',
      toolbar: 'undo redo | blocks | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help | code',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
      setup: function(editor) {
        editor.on('change', function() {
          tinymce.triggerSave();
        });
      },
      automatic_uploads : false,
      images_upload_url: 'upload.php',
      images_upload_base_path: '/assets/img/post',
      // images_reuse_filename: true,

      imagens_upload_handler: function(blobInfo, success, failure) {

        var xhr, formData;

        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', 'upload.php');

        xhr.onload = function() {
          var json;

          if (xhr.status != 200) {
            failure('HTTP Error: ' + xhr.status);
            return;
          }

          json = JSON.parse(xhr.responseText);

          if (!json || typeof json.location != 'string') {
            failure('Invalid JSON: ' + xhr.responseText);
            return;
          }
          success(json.location);
        };
      //   formData = new FormData();
			// formData.append('file', blobInfo.blob(), blobInfo.filename());

			// xhr.send(formData);
      }
    });
  </script>
</head>

<body>
  <?php
  include './vendor/_conexao.php';
  include './vendor/_header.php'; ?>
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
          <h1 class="h2">Cadastro de post</h1>
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

        <form action="./vendor/functions/post/_post.php" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="exampleInputEmail1" class="form-label">Categoria</label>
              <select class="form-select" aria-label="Default select example" name="categoria">
                <option value="" selected>Escolha</option>
                <?php
                $queryCategoriaForm = $pdo->query("SELECT * FROM categoria");
                while ($linhaCategoriaForm = $queryCategoriaForm->fetch(PDO::FETCH_ASSOC)) {
                ?>
                  <option value="<?php echo $linhaCategoriaForm['idCategoria']; ?>"><?php echo $linhaCategoriaForm['nomeCategoria']; ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="exampleInputEmail1" class="form-label">Tema</label>
              <select class="form-select" aria-label="Default select example" name="tema">
                <option value="" selected>Escolha</option>
                <?php
                $querySubcategoriaForm = $pdo->query("SELECT * FROM subcategoria");
                while ($linhaSubcategoriaForm = $querySubcategoriaForm->fetch(PDO::FETCH_ASSOC)) {
                ?>
                  <option value="<?php echo $linhaSubcategoriaForm['idSubcategoria']; ?>"><?php echo $linhaSubcategoriaForm['nomeSubcategoria']; ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="" name="titulo">
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Imagem</label>
                <input type="file" class="form-control" id="" name="imagem">
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Video</label>
                <input type="text" class="form-control" id="" name="video">
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link</label>
                <input type="text" class="form-control" id="" name="link">
              </div>
            </div>
            <div class="mb-3 col-md-12">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descrição</label>
                <textarea class="form-control mce" id="" rows="3" name="descricao"></textarea>
              </div>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>

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