<html>


<head>

  <div class="container">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php?page=paginaInicial"><span class="glyphicon glyphicon-home"></span> Portal 2.0 </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="index.php?page=dadosPessoais/dadosPessoais"><span class="glyphicon glyphicon-user"></span> Dados Pessoais </a></li>
          <li><a href="index.php?page=notas/notas"><span class="glyphicon glyphicon-pencil"></span> Notas </a></li>
          <li><a href="index.php?page=frequencias/frequencias"><span class="glyphicon glyphicon-ok-circle"></span> Frequências </a></li>
          <li><a href="index.php?page=quadroDeHorarios/quadroDeHorarios"><span class="glyphicon glyphicon-calendar"></span> Quadro de horários </a></li>
          <li><a href="index.php?page=relatorios/relatorios"><span class="glyphicon glyphicon-list-alt"></span> Relatórios </a></li>
        </ul>

        <form class="navbar-form navbar-right" role="search" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="pesquisar" placeholder="Pesquisar" value=<?php if (isset($_POST['pesquisar']))print(utf8_decode($_POST['pesquisar']));?>>
          </div>
          <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Buscar</button>
        </form>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</div>
<hr />

</head>
</html>
