<?php

// cadastro de cargos

echo $_POST['titulo'];
function cadastroCategoria()
{
    try {
        require_once './../../_conexao.php';
        $categoriaPost = $_POST['categoria'];
        $temaPost = $_POST['tema'];
        $tituloPost = $_POST['titulo'];
        $videoPost = $_POST['video'];
        $linkPost = $_POST['link'];
        $descricaoPost = $_POST['descricao'];
        $dataPost = 'NOW()';







        $stmt = $pdo->prepare("insert into post (tituloPost,descricaoPost,dataPost,videoPost,linkPost,categoriaID,subcategoriaID, produtorID) values (:tituloPost,:descricaoPost,:dataPost,:videoPost,:linkPost,:categoriaID,:subcategoriaID,:produtorID)");
        $stmt->execute(array(
            ':tituloPost' => $tituloPost,
            ':descricaoPost' =>   $descricaoPost,
            ':dataPost' => $dataPost,
            ':videoPost' => $videoPost,
            ':linkPost' => $linkPost,
            ':categoriaID' => $categoriaPost,            
            ':subcategoriaID' => $temaPost,            
            ':produtorID' => 1
        ));
        echo $stmt->rowCount();
        // header('Location:../../../index.php');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['categoria'])) {
    cadastroCategoria();
} else {
    echo 'eroo 1 54545';
}

// apagar de cargos

function apagarCargos()
{
    try {
        require_once './../../../../conexao.php';
        $idCargoApagar = $_POST['cargoApagar'];
        echo $idCargoApagar;



        $stmt = $pdo->prepare("DELETE FROM cargos WHERE idCargo = :idCargoApagar;");
        $stmt->bindParam(':idCargoApagar', $idCargoApagar);
        $stmt->execute();
        echo $stmt->rowCount();
        header('Location:../../../index.php?pagina=cargos');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}


if (isset($_POST['cargoApagar'])) {
    apagarCargos();
} else {
    echo 'eroo 2';
}

// editar cargos

function editarCargos()
{
    try {
        require_once './../../../../conexao.php';
        $nomeCargo = $_POST['nomeCargo'];
        $idCargo = $_POST['idCargo'];
        // echo $nomeCargo . " " .  $idCargo;

        $stmt = $pdo->prepare('UPDATE cargos SET nomeCargo = :nomeCargo WHERE idCargo = :idCargo');

        $stmt->execute(array(
            ':idCargo' => $idCargo,
            ':nomeCargo' => $nomeCargo

        ));
        echo $stmt->rowCount();
        header('Location:../../../index.php?pagina=cargos');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['nomeCargo'])) {
    editarCargos();
} else {
    echo 'eroo 3';
}
