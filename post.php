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
$query = $pdo->query("select * from post where idPost =  $idPost");


include './vendor/_header.php'; 
?>



 


<?php while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {
 ?>
    <div class="container">

    <img src="assets/img/3.jpg" alt="">

        <h1 class="text-center my-5"><?php echo $linha['tituloPost']; ?></h1>
        <p>Categoria: PHP</p>
        <p>Data: <?php echo date('d-m-Y', strtotime($linha['dataPost']));  ?></p>

        <img src="assets/img/<?php echo $linha['imgPost']; ?>" class="img-fluid" alt="">

        <p><?php echo $linha['descricaoPost']; ?></p>

        <p><a href="<?php echo $linha['linkPost']; ?>">Clique aqui.</a></p>
        <style>
           iframe{
            width: 60%;
            
           }

           .video-post{
            display: flex;
            justify-content: center;
            align-items: center;
           }
        </style>
        <h2 class=" my-3">Temos video com mais detalhes</h2>
        <div class="video-post my-3"><?php echo $linha['videoPost']; ?></div>

        <div class="bg-secondary text-white px-4 py-4">

            <h2>Sobre o autor</h2>
            <div class="row">
                <div class="col-md-3">
                    <img src="assets/img/user.jpg" alt="" class="img-fluid img-thumbnail rounded-circle">
                </div>

                <div class="col-md-9">
                    <p>Produtor: Diego Rodrigues</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, quae doloribus labore quod cupiditate vitae architecto distinctio nesciunt sapiente. Quis pariatur cumque illum rerum exercitationem deleniti vero repellendus, magnam nihil. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, quae doloribus labore quod cupiditate vitae architecto distinctio nesciunt sapiente. Quis pariatur cumque illum rerum exercitationem deleniti vero repellendus, magnam nihil.</p>
                </div>
            </div>

        </div>


    </div>
    <?php }?>


    </div>
    <?php // include 'vendor/_footer.php'
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>