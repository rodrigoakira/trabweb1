<!DOCTYPE html>
<html lang="pt_br">
<head>
    <?php
        include_once("pages/header.php");
    ?>
</head>
<body class = "back-page">    
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="pages/sobre.php"><i class="glyphicon glyphicon-user"></i> Rodrigo Takahashi - Gestor Adm e Analista de Sistemas</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="pages/curriculo.php"><i class="glyphicon glyphicon-list-alt"></i> Meu Curriculo</a></li>
        <li><a href="pages/contato.php"><i class="glyphicon glyphicon-envelope"></i> Contato</a></li>
              </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<footer class="main-footer footer-landpage">
<div class="pull-right hidden-xs">
    <div style="text-align: right">
    <strong>Curso de Análise e Desenvolvimento de Sistemas-Site de Apresentação Profissional&nbsp;&nbsp;&nbsp;</strong>
    <br>
    <strong>Desenvolvido por: Rodrigo Takahashi&nbsp;&nbsp;&nbsp;</strong>
    </div>
</div>

<strong>
    &nbsp;&nbsp;&nbsp;Fatec Taubaté
</strong>
<br>

&nbsp;&nbsp;&nbsp;&copy; <?php echo date ('d/m/Y'); ?>. Todos os direitos reservados.

</footer>


<?php
  include_once('pages/js.php');

  ?>
</body>
</html>