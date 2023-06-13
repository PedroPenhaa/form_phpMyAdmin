<?php

    include_once('config.php');

    $sql = "SELECT * FROM contato ORDER BY nome DESC";

    $resultConsult = $conexao->query($sql);

    if(isset($_POST['submit']))
    {
/*        
         print_r('Nome: ' . $_POST['nome']);
         print_r('<br>');
         print_r('Email: ' . $_POST['email']);
         print_r('<br>');
         print_r('Telefone: ' . $_POST['telefone']);
         print_r('<br>');
         print_r('Sexo: ' . $_POST['description']);
         print_r('<br>');
*/        
      

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $descricao = $_POST['description'];

        $result = mysqli_query($conexao, "INSERT INTO contato(nome,email,telefone,descricao) 
        VALUES ('$nome','$email','$telefone','$descricao')");    
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a1aada0144.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <title>Contact Form</title>
</head>
<body>
    
    <section class="form-container">
        <div class="container">


            <form action="index.php" method="POST">
 
                <div class="conteudo">

                    <div class="formulario">

                        <div class="input-single">
                            <input type="text" name="nome" id="nome" class="input" autocomplete="off" required>
                            <label for="nome">Seu nome completo</label>
                        </div>
        
                        <div class="input-single">
                            <input type="text" name="email" id="email" class="input" autocomplete="off" required>
                            <label for="email">Seu e-mail</label>
                        </div>
                   
                        <div class="input-single">
                            <input type="text" name="telefone" id="telefone" class="input" autocomplete="off" required>
                            <label for="telefone">Seu telefone</label>
                        </div>
        
                        <div class="input-single input-description">
                            <textarea class="textarea" name="description" id="description" cols="30" rows="8" autocomplete="off" required></textarea>
                            <label class="label-description" for="description-box">Explique sua requisição.</label>
                            
                        </div>

                        <div class="btn">
                            <input type="submit" name="submit" id="submit" value="Enviar">
                        </div>

                    </div>
    
                    <div class="info">
                        <h1>Entre em Contato</h1>
                        <p>Preencha seus dados e sua requisição ao lado que em breve entraremos em contato com você.</p>
                        <h2>Siga nossas redes:</h2>
                        <div class="social-icons">
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-linkedin"></i>
                            <i class="fas fa-globe"></i>
                        </div>
                    </div>
                </div>
            </form>

            <div class="registros">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Descrição</th>
    </tr>
  </thead>
  <tbody>
 
        <?php
            while($user_data = mysqli_fetch_assoc($resultConsult))
            {
                echo "<tr>";
                echo "<td>".$user_data['nome']."</td>";
                echo "<td>".$user_data['email']."</td>";
                echo "<td>".$user_data['telefone']."</td>";
                echo "<td>".$user_data['descricao']."</td>";
            }
        ?>
  </tbody>
</table>
            </div>

        </div>
    </section>

</body>
</html>

<!-- 

     <div class="input-single">
                        <input type="text" name="" id="nome-box" class="input" autocomplete="off" required>
                        <label for="nome-box">Seu nome completo</label>
                    </div>
    
                    <div class="input-single">
                        <input type="text" name="" id="email-box" class="input" autocomplete="off" required>
                        <label for="email-box">Seu e-mail</label>
                    </div>
               
                    <div class="input-single">
                        <input type="text" name="" id="cel-box" class="input" autocomplete="off" required>
                        <label for="cel-box">Seu telefone</label>
                    </div>
    
                    <div class="input-single input-single-last">
                        <label class="label-description" for="description-box">Explique sua requisição.</label>
                        <textarea name="description" id="description" cols="30" rows="10"></textarea>
                    </div>


-->