<?php 
$app= "http://localhost/testesMilhas/" ;

 ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo $app;?>">PHP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarNav">    
    
            <ul class="navbar-nav mr-auto justify-content-end">
           
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $app.'/estacionamento';?>">Estacionamento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $app.'/Equacao';?>">Equação</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $app.'/melhorVoo';?>">MelhorVoo</a>
                </li>
            
            </ul>

    </div>
</nav>