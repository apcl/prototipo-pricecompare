<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Price Compare</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Estilos apcl -->
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
  </head>
  <body>
    
    <div class="container-fluid divindex">
      <button type="button" class="btn btn-link login"><a href="login.html">Login</a></button>
      <h2>Price Compare</h2>
    </div>

  	<div class="container-fluid divindex">      
      
      <?php 
        if ($_POST){
            $prod = $_POST["producto"];
        }

        if ($prod == 'play' || $prod == 'playstation' || $prod == 'playstation4'){
          $prod = 'play';
        }

        if ($prod == 'taladro' || $prod == 'makita' || $prod == 'herramienta'){
          $prod = 'taladro';
        }

        switch ($prod) {
          case 'play':
              echo '<img src="../img/ps4.jpg" alt="Playstation 4" class="img-thumbnail img-prod">
              <h3>PLAYSTATION 4 + UNCHARTED: THE NATHAN DRAKE COLLECTION</h3>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Empresa</th>
                    <th>Precio</th>
                    <th>Ubicación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Ripley</td>
                    <td>$299.990</td>
                    <td><a href="http://simple.ripley.cl/playstation-4-uncharted-the-nathan-drake-collection-2000358702869p">Ir al sitio</a></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Paris</td>
                    <td>$329.990</td>
                    <td><a href="http://www.paris.cl/tienda/es/paris/computacion/video-juegos/consola-ps4-500-gb--uncharted-611675-ppp-">Ir al sitio</a></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Falabella</td>
                    <td>$329.990</td>
                    <td><a href="http://www.falabella.com/falabella-cl/product/4795732/Consola-PS4-500GB-+-Uncharted-Collection-(descargable)?navAction=push">Ir al sitio</a></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>PC Factory</td>
                    <td>$329.990</td>
                    <td><a href="https://www.pcfactory.cl/producto/22618-Consola.PlayStation.4.PS4.500GB..Uncharted.The.Nathan.Drake.Collection">Ir al sitio</a></td>
                  </tr>
                </tbody>
              </table>

              <h4>Te podría interesar.</h4>
              <a href="#"><img src="../img/ps4n.jpg" alt="CONSOLA PLAYSTATION 4 + UNCHARTED 4: A THIEF S END" class="img-thumbnail img-prod-int"></a>
              <a href="#"><img src="../img/xbox.jpg" alt="CONSOLA XBOX ONE 500GB + LEGO BUNDLE" class="img-thumbnail img-prod-int"></a>
              <a href="#"><img src="../img/wii.jpg" alt="CONSOLA NINTENDO WII U + MARIO KART 8 + SKYLANDER + WII REMOTE + AMIIBO OLIMAR" class="img-thumbnail img-prod-int"></a>
              <a href="#"><img src="../img/ds.jpg" alt="CONSOLA NINTENDO 3DSXL RED" class="img-thumbnail img-prod-int"></a>
             </div>';
            break;

          case 'taladro':
              echo '<img src="../img/taladro.jpg" alt="Taladro percutor 20 mm 1010 w hp 2070 f Makita" class="img-thumbnail img-prod">
              <h3>Taladro percutor 20 mm 1010 w hp 2070 f Makita</h3>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Empresa</th>
                    <th>Precio</th>
                    <th>Ubicación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Sodimac</td>
                    <td>$158.990</td>
                    <td><a href="http://www.sodimac.cl/sodimac-cl/product/2144492/1010-W-Taladro-Percutor-13-mm/2144492">Ir al sitio</a></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Easy</td>
                    <td>$159.990</td>
                    <td><a href="http://www.easy.cl/es/easy-chile/herramientas/herramientas-electricas/taladros/taladro-percutor-20-milimetros-1010w-hp2070f-makita-1101307">Ir al sitio</a></td>
                  </tr>
                </tbody>
              </table>

              <h4>Te podría interesar.</h4>
              <a href="#"><img src="../img/t1.jpg" alt="Esmeril agular 115mm GA4534 + Taladro percutor 13mm HP1630K Makita" class="img-thumbnail img-prod-int"></a>
              <a href="#"><img src="../img/t2.jpg" alt="Taladadro percutor 13 mm 710 w + accesorios HP1630 Makita" class="img-thumbnail img-prod-int"></a>
              <a href="#"><img src="../img/t3.jpg" alt="Taladro inalambrico percutor + linterna 12 voltz 8271 d Makita" class="img-thumbnail img-prod-int"></a>
              <a href="#"><img src="../img/t4.jpg" alt="Set accesorios 71 piezas d-47189 Makita" class="img-thumbnail img-prod-int"></a>
             </div>';
            break;

            case 'lavadora':
              echo '<img src="../img/lavadora.jpg" alt="Lavadora carga superior 12 Kg WA12F5L4 blanco Samsung" class="img-thumbnail img-prod">
              <h3>Lavadora carga superior 12 Kg WA12F5L4 blanco Samsung</h3>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Empresa</th>
                    <th>Precio</th>
                    <th>Ubicación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Sodimac</td>
                    <td>$189.990</td>
                    <td><a href="http://www.sodimac.cl/sodimac-cl/product/2646242/Lavadora-WA12F5L2UWW-ZS-Samsung/2646242">Ir al sitio</a></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Easy</td>
                    <td>$199.990</td>
                    <td><a href="http://www.easy.cl/es/easy-chile/electrohogar/lavado-y-secado/lavadoras/lavadora-carga-superior-12-kilos-wa12f5l4-blanco-samsung-1081609">Ir al sitio</a></td>
                  </tr>
                </tbody>
              </table>

              <h4>Te podría interesar.</h4>
              <a href="#"><img src="../img/l1.jpg" alt="Lavadora carga superior 22 Kg WA22F9A8DSP/ZS Samsung" class="img-thumbnail img-prod-int"></a>
              <a href="#"><img src="../img/l2.jpg" alt="Lavadora carga superior 15 Kg Active dual wash blanca Samsung" class="img-thumbnail img-prod-int"></a>
             </div>';
            break;
          
          default:
            echo "<h3>No tenemos registro del producto mencionado</h3>";
            break;
        }
      ?>
      

    <footer class="footer">
      <ul class="copyright pch1">
         <li>© Copyright 2016 Price Compare</li>
         <li>Design by Price Compare</a></li>
      </ul>
    </footer>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>