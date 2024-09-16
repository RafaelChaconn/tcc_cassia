<?php

    session_start();

    //Variável que identifica se a autentificação foi realizada.

    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = array(1 => 'Administrativo', 2 => 'Usuário');


    //Usuários do sistema
    $usuarios_app = array(
        array('id' => 1, 'email' => 'cassia_adm@helpdesk.com.br', 'senha' => '1234', 'perfil_id' => 1),
        array('id' => 2, 'email' => 'rafael_adm@helpdesk.com.br', 'senha' => '1234', 'perfil_id' => 1),
        array('id' => 3, 'email' => 'lily_user@helpdesk.com.br', 'senha' => '1234', 'perfil_id' => 2),
        array('id' => 4, 'email' => 'colleen_user@helpdesk.com.br', 'senha' => '1234', 'perfil_id' => 2),
    );

    /*echo '<pre';
    print_r($usuarios_app);
    echo '<pre /';*/

    //O "foreach" passa por cada elemento de uma lista, e o "as" permite acessar cada valor da lista separadamente.

    foreach($usuarios_app as $user) {

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];

        }

    }

    if($usuario_autenticado){
        echo 'Usuário autenticado com sucesso.';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php'); 
    } else {
        $_SESSION['autenticado'] = 'NÃO';
        header('Location: index.php?login=erro');
    }

    /*print_r($_GET);

    echo '<br />';

    echo $_GET['email'];
    echo '<br />';
    echo $_GET['senha'];

    print_r($POST);

    echo '<br />';

    echo $_POST['email'];
    echo '<br />';
    echo $_POST['senha'];*/

?>