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

    $idCategoria = $_GET['idCategoria'];


    $pag = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

    // $id_usuario = $_SESSION['id_usuario'];
    $query2 = "select count(idPost) as qtd_post from post where categoriaID = $idCategoria";

    $total = $pdo->prepare($query2);
    $total->execute();

    $totalRegistros = $total->fetch(PDO::FETCH_ASSOC);

    $registro = "10";

    $totalPag = ceil($totalRegistros['qtd_post'] / $registro);




    $inicio = ($registro * $pag) - $registro;

    $query = $pdo->query("select * from post where categoriaID = $idCategoria limit $inicio, $registro");

    $anterior = $pag - 1;
    $proximo = $pag + 1;



    include './vendor/_header.php';

    ?>




    <div class="container">


        <div class="row">
            <div class="col-md-2 my-5  text-white">
                <nav class="bg-primary">
                    <h1 class="text-center">Temas</h1>




                    <ul class="nav flex-column ">
                        <?php
                        $queryTemas = $pdo->query("select * from subCategoria");
                        while ($linhaSubcategoria = $queryTemas->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link active text-white" aria-current="page" href="#"><?php echo $linhaSubcategoria['nomeSubcategoria'] ?></a>
                            </li>

                        <?php
                        }
                        ?>

                    </ul>
                </nav>
            </div>
            <div class="col-md-10">


                <?php
                $queryCategoria = $pdo->query("select * from categoria where idCategoria = $idCategoria");
                while ($linhaCategoria = $queryCategoria->fetch(PDO::FETCH_ASSOC)) {



                ?>
                    <h1 class="text-center my-5"><?php echo $linhaCategoria['nomeCategoria'] ?></h1>
                <?php
                }
                ?>
                <div class="row">

                    <?php

                    // if(!isset($query)){
                    //      echo "Não";
                    // }

                    while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {
                        
                        if (!empty($linha['tituloPost'])) {
                           
                        
                       

                    ?>

                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 18rem;">
                                    <img src="assets/img/3.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $linha['tituloPost'] ?></h5>
                                        <p class="card-text"><?php echo substr($linha['descricaoPost'], 0, 4) ?> ...</p>
                                        <p>25/10/1991 <br> Diego <br> PHP</p>
                                        <a href="post.php?idPost=<?php echo $linha['idPost'] ?>" class="btn btn-primary">Ler mains</a>
                                    </div>
                                </div>
                            </div>

                    <?php
                    }elseif (empty($linha['tituloPost'])) {
                        echo "teste";
                    }
                            
                        
                      
                    }  
                    // if(!empty($query)){
                    //     echo "<p>jjteste</p>";
                    // }
                    
                    
                    ?>



                </div>
                <div class="mt-5">
                    <nav aria-label="Page navigation example r">
                        <ul class="pagination" style="justify-content: center;">
                            <?php

                            if ($pag > 1) {
                                echo "<li class='page-item'><a class='page-link' href='?pagina=$anterior&idCategoria=$idCategoria'>&laquo;</a></li>";
                            }
                            ?>


                            <?php

                            for ($i = 1; $i <= $totalPag; $i++) {
                                if ($pag == $i) {
                                    echo "<li class='page-item active'><a class='page-link' href='?pagina=$i&idCategoria=$idCategoria'>$i</a></li>";
                                } else {
                                    echo "<li class='page-item'><a class='page-link' href='?pagina=$i&idCategoria=$idCategoria'>$i</a></li>";
                                }
                            }

                            ?>


                            <?php

                            if ($pag < $totalPag) {
                                echo "<li class='page-item'><a class='page-link' href='?pagina=$proximo&idCategoria=$idCategoria'>&raquo;</a></li>";
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>

    <?php include 'vendor/_footer.php'
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>