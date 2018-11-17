<!DOCTYPE html> <!-- para usufruir do html5 -->
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name= "viewport" content= "width=device-width,initial-scale=1,shrink-to-fit=no" />
        <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
        <link rel="canonical" href="https://denilsonmaciel.com.br/" />
<meta property="og:locale" content="pt_BR">
<meta property="og:url" content="https://denilsonmaciel.com.br">
<meta property="og:title" content="Representações, Parcerias e Comunicações em Cabreúva e Região você encontra aqui... ">
<meta property="og:site_name" content="Denilson Maciel">
<meta property="og:description" content="Quer ter publicidade do seu comercio ou prestação de serviço e ainda oferecer o melhor serviço e  atendimento,entender a sua necessidade e a partir daí apresentar o melhor negócio para o seu perfil?  Agente uma visita conosco!">
<meta property="og:image" content="https://denilsonmaciel.com.br/assets/images/logo.jpeg">
            <meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="800">
<meta property="og:image:height" content="600"> 

<meta property="fb:admins" content="werockcontent"/>
<meta name="twitter:url" content="https://denilsonmaciel.com.br/">
<meta property="twitter:title" content="Representações, Parcerias e Comunicações em Cabreúva e Região você encontra aqui... ">
<meta property="twitter:description" content=" Quer ter publicidade do seu comercio ou prestação de serviço e ainda oferecer o melhor serviço e  atendimento,entender a sua necessidade e a partir daí apresentar o melhor negócio para o seu perfil?  Agente uma visita conosco!">
<meta property="twitter:image" content="https://www.denilsonmaciel.com.br/assets/images/logo.jpeg">
<meta property="og:type" content="website">





        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css"/>
  


    </head>
 <body>

<!--header-nav -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
    <a class="navbar-brand" href="#home">   
        <img src="<?php BASE_URL; ?>assets/images/facebookcolor.png" width="30" height="30" class="d-inline-block align-top" alt="">
  ps -maciel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarMenu">
        <ul class="navbar-nav ml-auto" >
            <li class="nav-item"><a href="#" class="nav-link active">Sobre Mim</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Serviços</a></li>
            <li class="nav-item">  <a href="#contact" class="nav-link">Contato</a></li>
        </ul>
    </div> 
    
</nav>
        
        <!--  aqui onde vai o corpo das paginas do sistema -->
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>

      <section class="footer" id="contact">
    <div class="container">
        <div class="col-xl-12">
            <h1>Nosso Contato</h1>
            <div class="row">
                <div class="col-sm-5">
                    <p style="color:#fff">Contate-nos para maiores informações</p>
                    <p style="color:#fff"><span class="glyphicon glyphicon-map-marker"></span> Rua Iugoslávia, 89 - Bairro Vilarejo - Cabreúva, SP</p>
                    <p style="color:#fff"><span class="glyphicon glyphicon-phone"></span> +55 (11) 9.7462-9961 <img id="img-whatsapp" src="<?php BASE_URL;?>assets/images/whatsapp.png" /></p>
                    <p style="color:#fff"><span class="glyphicon glyphicon-envelope"></span> macieldenilson@gmail.com</p>
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Seu Nome" type="text" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Seu Email" type="email" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="celular" name="celular" placeholder="Seu celular" type="text" required>
                        </div>
                    </div>
                    
                    <textarea class="form-control" id="comments" name="comments" placeholder="Sua Mensagem" rows="5"></textarea><br>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button class="btn btn-default pull-right" type="submit">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    </body>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
   

  



    <footer>
        <div class="rodape">
           PSMACIEL © <?php echo date('Y'); ?>. Desenvolvido por <a href="http://www.devmg.pe.hu">Marcel Hoyama</a>
        </div>
    </footer>

</html>


