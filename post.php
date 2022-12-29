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
    <?php

    require_once "./vendor/_conexao.php";
    $idPost = $_GET['idPost'];
    $idCategoria = $_GET['idCategoria'];
    $query = $pdo->query("SELECT *
FROM post
INNER JOIN produtor
INNER JOIN categoria
ON post.produtorID=produtor.idProdutor and post.categoriaID=categoria.idCategoria where idPost =  $idPost");


    include './vendor/_header.php';
    ?>

    <!-- $queryTodosPostQuarto = $pdo->query(""); -->




    <?php while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {
    ?>
        <div class="container mb-4">

            <img src="assets/img/3.jpg" alt="">

            <h1 class="text-center my-5"><?php echo $linha['tituloPost']; ?></h1>
            <p>Categoria: PHP</p>
            <p>Data: <?php echo date('d-m-Y', strtotime($linha['dataPost']));  ?></p>

            <img src="assets/img/<?php echo $linha['imgPost']; ?>" class="img-fluid" alt="">

            <p><?php echo $linha['descricaoPost']; ?></p>

            <p><a href="<?php echo $linha['linkPost']; ?>">Clique aqui.</a></p>
            <style>
                iframe {
                    width: 60%;

                }

                .video-post {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
            </style>
            <h2 class=" my-3">Temos video com mais detalhes</h2>
            <div class="video-post my-3"><?php echo $linha['videoPost']; ?></div>



            <div class="row">
                <h2>Artigos relacionados</h2>

                <?php
                $queryRelacionados = $pdo->query("SELECT *
                FROM post
                INNER JOIN categoria
                ON post.categoriaID=categoria.idCategoria where idCategoria =  $idCategoria LIMIT 3");
                while ($linhaRelacionados = $queryRelacionados->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <div class="col-md-4 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/img/3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $linhaRelacionados['tituloPost']; ?></h5>
                                <h5 class="card-title"><?php echo $linhaRelacionados['nomeCategoria']; ?></h5>

                                <a href="post.php?idPost=<?php echo $linhaRelacionados['idPost'];  ?>&idCategoria=<?php echo $linhaRelacionados['idCategoria'];  ?>" class="btn btn-primary">Ler mains</a>
                            </div>
                        </div>
                    </div>

                <?php
                    }
                ?>

               





            </div>

            <div class="bg-secondary text-white px-4 py-4">

                <h2>Sobre o autor</h2>
                <div class="row">
                    <div class="col-md-3">
                        <img src="assets/img/user.jpg" alt="" class="img-fluid img-thumbnail rounded-circle">
                    </div>

                    <div class="col-md-9">
                        <p>Produtor: <?php echo $linha['nomeProdutor']; ?></p>
                        <p> <?php echo $linha['descricaoProdutor']; ?></p>
                    </div>
                </div>

            </div>


        </div>
    <?php } ?>


    </div>
    <?php include 'vendor/_footer.php'
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>