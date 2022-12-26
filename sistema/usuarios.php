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


    $pag = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

    // $id_usuario = $_SESSION['id_usuario'];
    $query2 = "select count(idProdutor) as qtd_produtor from produtor";

    $total = $pdo->prepare($query2);
    $total->execute();

    $totalRegistros = $total->fetch(PDO::FETCH_ASSOC);

    $registro = "20";

    $totalPag = ceil($totalRegistros['qtd_produtor'] / $registro);




    $inicio = ($registro * $pag) - $registro;

    $query = $pdo->query("select * from produtor limit $inicio, $registro");

    $anterior = $pag - 1;
    $proximo = $pag + 1;





    // $query = $pdo->query("select * from post");

    include './vendor/_header.php';
    ?>
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
                    <h1 class="h2">Dashboard</h1>
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

                <h2>Section title</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Imagem</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Status</th>
                                <th scope="col">Data</th>
                                <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            <?php
                            while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                <tr>
                                    <td><?php echo $linha['idProdutor']; ?></td>
                                    <td style="width: 100px;"><img src="./assets/img/<?php echo $linha['imgProdutor']; ?>" alt="" style="width: 100%;"></td>
                                    <td><?php echo $linha['nomeProdutor']; ?></td>
                                    <td><?php echo $linha['descricaoProdutor']; ?></td>
                                    <td><?php echo $linha['statusProdutor']; ?></td>
                                    <td>19/12/2022</td>
                                    <td><a href="">Editar</a> | <a href="">Apagar</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="mt-5">
                        <nav aria-label="Page navigation example r">
                            <ul class="pagination" style="justify-content: center;">
                                <?php

                                if ($pag > 1) {
                                    echo "<li class='page-item'><a class='page-link' href='?pagina=$anterior'>&laquo;</a></li>";
                                }
                                ?>


                                <?php

                                for ($i = 1; $i <= $totalPag; $i++) {
                                    if ($pag == $i) {
                                        echo "<li class='page-item active'><a class='page-link' href='?pagina=$i'>$i</a></li>";
                                    } else {
                                        echo "<li class='page-item'><a class='page-link' href='?pagina=$i'>$i</a></li>";
                                    }
                                }

                                ?>


                                <?php

                                if ($pag < $totalPag) {
                                    echo "<li class='page-item'><a class='page-link' href='?pagina=$proximo'>&raquo;</a></li>";
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
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