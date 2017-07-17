<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset();
     ?>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
		<?php if (isset($title)) {
			echo $title;
		} else {
			echo $cakeDescription. ':' . $this->fetch('title'); 
		} ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css')?>
    <?= $this->Html->css('cake.css') ;?>
    <?= $this->Html->css('topnav.css');?>
     <?= $this->Html->script('topnav.js');?>
     <?= $this->Html->css('faq.css');?>

    <?= $this->fetch('meta')?>
    <?= $this->fetch('css')?>
    <?= $this->fetch('script') ?>
</head>
<body>
   <!--header--> 
    <?php if (isset($isAdmin) && $isAdmin) { // Se coloca navegación arriba ?>
        <!--nav class="top-bar expanded" data-topbar role="navigation">
            <ul class="title-area large-3 medium-4 columns">
                <li class="name">
                    <h1><a href="">< ?= $this->fetch('title') ?></a></h1>
                </li>
            </ul>
            <div class="top-bar-section">
                <ul class="right">
                    <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>
                    <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>
                </ul>
            </div>git
        </nav-->
    <div class="topnav" id="myTopnav">
       <p> <span><img src="/logo.png" width="60" height="60" style="margin: 10px;"/></span>
       <span style="color:white">Qué pereza la presa</span>
       <span><a href="/posts/add">Nueva publicacion</a>
       <span><a href="/users/index">Usuarios</a>
       <a href="/questions/index">Preguntas frecuentes</a>
       <a href="#contact">Informacion de contacto</a>
       <a href="#about">Acerca de nosotros</a>
       <a href="/gallery/index">Galeria</a>
       <a href="/post/index">Home</a>
      <span><a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a></span></p>
    </div>
    <?php } else { // Barra de navegación normal ?>
<div class="topnav" id="myTopnav">
   <p> <span><img src="/logo.png" width="60" height="60" style="margin: 10px;"/></span>
   <span style="color:white">Qué pereza la presa</span>
   <span><a href="/users/login">Iniciar Sesion</a>
   <a href="/questions/index">Preguntas frecuentes</a>
   <a href="#contact">Informacion de contacto</a>
   <a href="#about">Acerca de nosotros</a>
   <a href="/gallery/index">Galeria</a>
   <a href="posts/home">Home</a>
  <span><a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a></span></p>
</div>

        <!--div class="row">
            <div class="large-12 columns">
                <div class="nav-bar right">

                </div>
                <h1><img src="/logo.png" width="80" height="80" style="margin-right: 20px;" />Qué pereza la presa</h1>
                <hr />
            </div>
        </div-->
    <?php } ?>
    <div id="content">
        <div class="row">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
            <?php if ((!isset($isAdmin)) || !$isAdmin) { ?>
                <aside class="large-3 columns">
                    <a href="https://www.paypal.me/andreagomezm" class="button">Donaciones</a><!--Esto es solo para probarlo. Hay que cambiar el link por el de los dueños del blog-->
                    <br>
                        <a href="https://www.facebook.com/queperezalapresa/">
                          <img src="/fb2.png" width="40" height="40" style="margin: 10px;"/>
                        </a>
                    <a href="https://www.facebook.com/queperezalapresa/">
                          <img src="/twitter4.png" width="40" height="40" style="margin: 10px;"/><!--Hay que cambiar el link. Esta disponible en twitter? Busque @perezalapresa y no me aparecio. -->
                        </a>
                    <ul class="side-nav">
                        <li><a href="/gallery/list">Galería</a></li>
                        <li><a href="/questions/index">Preguntas frecuentes</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                    <div class="panel">
                        <h5>Lorem ipsum</h5>
                        <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. 
            Swine short ribs meatball irure bacon nulla pork belly cupidatat 
            meatloaf cow.</p>
                        <a href="#">Leer más...</a>
                    </div>
                </aside>
            <?php } ?>
        </div>
        </div>
</body>
</html>
