<?php
    require('../conn.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
   
    if(empty($email) || empty($nome) || empty($senha)){
        echo "Os valores não podem ser vazios";
    }else{
        $cad_usuario = $pdo->prepare("INSERT INTO usuarios(nome, email, senha) 
        VALUES(:nome, :email, :senha)");
        $cad_usuario->execute(array(
            ':nome'=> $nome,
            ':email'=> $email,
            ':senha'=> $senha
        ));

        echo "<script>
        alert('Usuario Cadastrado com sucesso!');
        </script>";
    }
?>