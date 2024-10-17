<?php
    include_once 'atv01.php';

    $user = isset($_POST['user'])?$_POST['user']:"";
    $group = isset($_POST['group'])?$_POST['group']:"";
    $newgroup = isset($_POST['newgroup'])?$_POST['newgroup']:"";
    $dgo = isset($_POST['dgo'])?$_POST['dgo']:"";

    if($group == "" && $user != ""){
        echo('sudo adduser '.$user);
    }else if ($group != "" && $user != ""){
        echo('sudo adduser '.$user.' '.$group);
    }
    if($newgroup != null || $newgroup != "" && $user == null){
        echo('<br>'.'sudo addgroup '.$newgroup);
    }

    if($dgo != ""){
        echo('sudo chmod '.$dgo.' '.$opcao);
    }

?>


<!DOCTYPE html>
<head>

</head>
<body>
    <form method="post">
        <div>
            <h1>Cadastro usuário</h1>
            <h3>Opções de Usuário</h3>
            <h4>Criação de usuário</h4>
            <input type="text" id="user" name="user" value=""></input><br>
            <h4>Atribuir a grupo</h4>
            <input type="text" id="group" name="group" value="">Grupo</input><br>
            <h3>Opções de grupo</h3>
            <h4>Criação de grupo</h4>
            <input type="text" id="newgroup" name="newgroup" value="">Grupo</input><br><br><br>
            <h4>Arquivo:</h4> 
            <input type="checkbox" id="arquivo" name="arquivo" value=""></input><br>
            <h4>Diretório:</h4>
            <input type="checkbox" id="diretorio" name="diretorio" value=""></input><br>

            <h4>Permissões DGO</h4>
            <input type="text" id="dgo" name="dgo" value="">Permissão</input><br>


            <input type="submit" id="envia" value="Confirmar">
        </div>
    </form>
</body>
