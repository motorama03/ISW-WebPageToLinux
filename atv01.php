<?php
    include_once 'atv01.php';

    $user = isset($_GET['user'])?$_GET['user']:"";
    $group = isset($_POST['group'])?$_POST['group']:"";
    $newgroup = isset($_POST['newgroup'])?$_POST['newgroup']:"";
    $dgo = isset($_POST['dgo'])?$_POST['dgo']:"";

    if($group == "" && $user != ""){
        echo('sudo adduser '.$user);
    }else if ($group != "" && $user != ""){
        echo('sudo adduser '.$user.' '.$group);
    }
    if($newgroup != "" && $user == null){
        echo('<br>'.'sudo addgroup '.$newgroup);
    }

    if($dgo != ""){
        echo('sudo chmod '.$dgo.' '.$opcao);
    }

?>


<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela 3x3</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
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
            <thead>
                <tr>
                    <th><h4>Arquivo | Diretório</h4></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="radio" id="arquivo" name="opcao" value=""></input><br>
                    </td>
                    <td>
                        <input type="radio" id="diretorio" name="opcao" value=""></input><br>    
                    </td>
                </tr>
            </tbody> 
            

            <h4>Permissões DGO</h4>
            <input type="text" id="dgo" name="dgo" value="">Permissão</input><br>

            <h2 style="text-align: center;">Tabela de permissões</h2>

            <table>
                <thead>
                    <tr>
                        <th>Donos</th>
                        <th>Grupos</th>
                        <th>Outros</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="integer" id="col01" value="">
                        </td>
                        <td>
                            <input type="integer" id="col02" value="">
                        </td>
                        <td>
                            <input type="integer" id="col03" value="">
                        </td>
                    </tr>
                </tbody>
            </table>

            <input type="submit" id="envia" value="Confirmar">
        </div>
    </form>
</body>
