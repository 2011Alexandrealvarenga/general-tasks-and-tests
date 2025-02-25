<?php 
$erro = '';

if(isset($_POST['submit'])){
  $nome = $_POST['nome'];
  // $email = $_POST['email'];

  if(!empty($nome)){
    $nome = filter_var($nome, FILTER_SANITIZE_STRING);
    echo "seu nome é: $nome <br/>";
  }else{
    $erro .="Por favor Insira seu nome";
  }

  echo 'Seu email é: $email';

}
;?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
    <input type="text" name="nome" placeholder="nome">
    <input type="email" name="email" placeholder="email">

    <?php if(!empty($erro)):?>
      <div class="erro">
        <?php echo $erro ;?>
      </div>
    <?php endif;?>
    <input type="submit" value="Enviar" name="submit">
    
  </form>
  
</body>
</html>