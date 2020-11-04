<!DOCTYPE html>
<html>
<head>
   
       <meta charset="utf-8">
 
<link rel="sortcut icon" href="assets/images/logovision.png" type="image/x-icon" />
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>imagens/fundo.css">
     <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/footer.css">
     <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/home.css">
     <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/sobre.css">
     <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/contato.css">
     <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/produtos.css">
     <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/servicos.css">
     <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/clientes.css">
     <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/mobile.css">


	<title>site_portifolio3</title>
</head>
<body>
<div class="menu_mobile">
  <ul>
    <a href="<?php echo BASE_URL;?>home"><li>inicial</li></a>
    <a href="<?php echo BASE_URL;?>sobre"><li>Sobre</li></a>
    <a href="<?php echo BASE_URL;?>produtos"><li>Produtos</li></a>
    <a href="<?php echo BASE_URL;?>clientes"><li>Clientes</li></a>
    <a href="<?php echo BASE_URL;?>contato"><li>Contato</li></a>
  </ul>

</div>


 <div class="topo">
    <div class="row">
   <div class="col-6 img"> 
   	<img height="100" class="img-fluid" src="assets/images/logo1.png">
   </div>
     <img class="menu_b" height="50" src="assets/images/menu.png">
   <div class="col-6 menu_a">
  
   	    <div class="menu_a_div"><a href="<?php echo BASE_URL;?>home">Inicial</a></div>
   	   <div class="menu_a_div"> <a href="<?php echo BASE_URL;?>sobre">Sobre nós</a></div>
   	    <div class="menu_a_div"><a href="<?php echo BASE_URL;?>produtos">Produtos</a></div>
   	    
   	    <div class="menu_a_div"><a href="<?php echo BASE_URL;?>clientes">Clientes</a></div>
   	    <div class="menu_a_div"><a href="<?php echo BASE_URL;?>contato">Contato</a></div>
   </div> 
    </div> 
 </div>
 
 
<?php  $this->loadViewInTemplate($viewName,$viewData);   ?>

<footer class="container_fluid footer">

  <div class="row">
    
    <div class="col-sm-3">
      <ul>
        <li><strong>Atendimento</strong></li>
        <li>Fone:(16) 9 9575-8775</li>
        <li>E-mail: contato@mvision.com.br</li>
        
        <li><strong>Horários de Atendimento</strong></li>
        <li>08h00 12h00 - 13h30 ás 18h</li>
         
      </ul>
    </div>
     <div class="col-sm-3">
    
    </div>
  

    
  </div>
  <div style="background-color: #fff" class="container_fluid autor">
    <div class="row">
      <div class="col-sm-6">
        Copyright 2020 - Desenvolvimento de Sistemas | Salto sp
      </div>
      <div class="col-6 aut">
        <img height="50" class="img-fluid" src="assets/images/logo_oficial.png">
      </div>
      
    </div>
    
  </div>
</footer>




    	<script type="text/javascript" src="<?php BASE_URL?>assets/js/jquery-3.3.1.min.js"></script>
    		<script type="text/javascript" src="<?php BASE_URL?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php BASE_URL?>assets/js/script.js"></script>

</body>
</html>