<?php

include 'header.php';
include 'class/Menu.class.php';

?>

    <div class="container">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Voorgerecht</a></li>
        <li><a data-toggle="tab" href="#menu1">Hoofdgerecht</a></li>
        <li><a data-toggle="tab" href="#menu2">Nagerecht</a></li>
        <li><a data-toggle="tab" href="#menu3">Dranken</a></li>
      </ul>

      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
          <h3>Voorgerecht</h3>
          <p></p>
        </div>
        <div id="menu1" class="tab-pane fade">
          <h3>Hoofdgerecht</h3>
          <p></p>
        </div>
        <div id="menu2" class="tab-pane fade">
          <h3>Nagerecht</h3>
          <p></p>
        </div>
        <div id="menu3" class="tab-pane fade">
          <h3>Dranken</h3>
          <p></p>
        </div>
      </div>
    </div>

<?php
    $menu=new Menu('localhost:3307', 'root', 'usbw');
        echo $menu -> returnAllMenu(); 


include 'footer.php';

?>