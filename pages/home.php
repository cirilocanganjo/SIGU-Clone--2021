<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/formEstudante.css">
    <link rel="stylesheet" href="../css/styleHorario.css">
    <link rel="stylesheet" href="../css/actulaizarSenha.css">

    <title>.:Sistema Integral de Gestão Universitaria:.</title>
</head>
<body>
    <header class="header">
        <img src="../image/logo.png" alt="logo do sistema" class="logotipo">
        <img src="../image/logo-nome.png" alt="nome-do-logotipo" class="logotipo__nome">
    </header>
    <div class="linha__azul linha_2">
       <strong class="s1">BEM VINDO: ANTÓNIO ALBINO JOSÉ MIGUEL  	|	MODULO PARA ALUNOS</strong>
       <strong class="s2">Data: 10/22/2021 || Hora: 12:35</strong> 
    </div>
 
 
<nav class="menu__esquerdo">
    <ul>
        <li><a href="?url=dadosPessoais"><img src="../image/estudante.png">Ficha Estudante</a></li>
        <li><a href="?url=horario"><img src="../image/horarios.png">Horário</a></li>
        <li><a href=""><img src="../image/pagamentos.png">Pagamentos</a></li>
        <li><a href="?url=actualizarSenha"><img src="../image/actulizar-senha.png">Actualizar Senha</a></li>
        <li><a href="../index.php"><img src="../image/logout_256.png">Sair</a></li>

    </ul>
</nav>
 <?php 
    
   $url = $_GET['url'];
   include("../pages/$url.php");
   
   if($url == "dadosPessoais"){
    $str = "<footer class='rodapeHome  ' style='margin-top: auto'>";
    $str.="<span >Copyrights 2011</span> ";
    $str.="</footer>";
   }else{

    $str = "<footer class='rodapeHome  ' style='margin-top: 15rem'>";
    $str.="<span >Copyrights 2011</span> ";
    $str.="</footer>";    
   }
  echo $str;
 ?>


</body>
</html>