<?php

// cadastro de cargos

echo $_POST['categoria'];
function cadastroCategoria()
{
    try {
        require_once './../../_conexao.php';
        $nomeCategoria = $_POST['categoria'];

        $stmt = $pdo->prepare("insert into categoria (nomeCategoria) values (:nomeCategoria)");
        $stmt->execute(array(
            ':nomeCategoria' => $nomeCategoria
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
