<?php
  include_once "vistas/modulos/head.php";

  // incluye el inicio del wrapper y el navbar //
  include_once "vistas/modulos/header.php";

  //incluye el sidebar depende del rol del usuario
  include_once "vistas/modulos/sidebar.adm.php";

  //contenido de la pagina
  if (isset($_GET["ruta"])) {
    if($_GET["ruta"]=="inicio"){
      include "vistas/modulos/blank.php";
    }
    else{
      include "vistas/modulos/pages/error404.php";
    }
  }



  //incluye el footer
  include_once "vistas/modulos/footer.php";

  include_once "vistas/modulos/foot.php"
?>