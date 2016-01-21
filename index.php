<?php 
require_once 'includes/engine.php';

$NivelDoRioDoceGV = PegaNivelRioDoceGV();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site para acompanhar em tempo real o nível do Rio Doce em Valadares">
    <meta name="author" content="Joel Garcia Jr">
  
 <meta http-equiv="refresh" content="90; URL=http://joelgarciajr.com/nivelriodoce/">

    <title>Nível do Rio Doce - Governador Valadares</title>
   
    <meta property="og:url"           content="http://joelgarciajr.com/nivelriodoce/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Nível do Rio Doce em Governador Valadares Minas Gerais" />
    <meta property="og:description"   content="Site para acompanhar em tempo real o nível do Rio Doce em Valadares" />
    <meta property="og:image"         content="http://joelgarciajr.com/nivelriodoce//assets/snapshot.png" />
    <meta property="og:description"
          content="Site para acompanhar em tempo real o nível do Rio Doce em Valadares"/>

    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/whatsapp.css" rel="stylesheet">

    <link href="http://getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="http://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">

    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body style="background-color:" onload="moveRelogio()"> 

  <div id="fb-root"></div>

</script>
    <div class="container">
      <div class="header clearfix">
       
     
  <h1 align="center">Nível do Rio Doce em Valadares</h1>
 <p align="center"><strong align="center">Fonte de Dados: SAAE Goval | Sincronização a cada 90 segundos</strong></p>
      </div>

      <div class="jumbotron">
      <form name="form_relogio"> 
<h1><input type="text" name="relogio" size="8"></h1>
</form> 
        <h3>Última atualização do SAAE:</h3>
      <h3><div class="alert alert-danger" role="alert">Data: <?php echo strip_tags($NivelDoRioDoceGV->data); ?></div></h3>
      <h3><div class="alert alert-danger" role="alert">Horário: <?php echo strip_tags($NivelDoRioDoceGV->hora); ?></div></h3>
      <h3><div class="alert alert-danger" role="alert">Nível: <?php echo strip_tags($NivelDoRioDoceGV->nivel); ?></div></h3>

        <p><div class="fb-share-button" data-href="http://joelgarciajr.com/nivelriodoce/" data-layout="box_count"></div></p>
        <p> <a data-text="Nível do Rio Doce em GV: <?php echo strip_tags($NivelDoRioDoceGV->nivel);  ?>" data-link="http://joelgarciajr.com/nivelriodoce/" class="whatsapp w3_whatsapp_btn w3_whatsapp_btn_large">Enviar por WhatsApp</a></p>
        <p><div class="fb-send" data-href="http://joelgarciajr.com/nivelriodoce/"></div></p>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
         <div class="fb-comments" data-href="http://joelgarciajr.com/nivelriodoce/" data-width="700" data-numposts="5"></div>
        </div>
      </div>

      <footer class="footer">
      <a href="https://www.facebook.com/joelgarciajr84" target="_blank">Desenvolvido por Joel Garcia Jr :)</a>
      </footer>

    </div> <!-- /container -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/whatsapp.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72646484-1', 'auto');
  ga('send', 'pageview');

</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>

function moveRelogio(){ 
    momentoAtual = new Date() 
    hora = momentoAtual.getHours() 
    minuto = momentoAtual.getMinutes() 
    segundo = momentoAtual.getSeconds() 

    horaImprimivel = hora + " : " + minuto + " : " + segundo 

    document.form_relogio.relogio.value = horaImprimivel 

    setTimeout("moveRelogio()",1000) 
} 
</script> 
  </body>
</html>
