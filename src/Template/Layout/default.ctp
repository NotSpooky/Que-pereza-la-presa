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
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
		<?php if (isset($title)) {
			echo $title;
		} else {
			echo $cakeDescription. ':' . $this->fetch('title'); 
		} ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <!-- Barra por defecto:
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div>
    </nav>-->
     <div class="row">
        <div class="large-12 columns">
            <div class="nav-bar right">

            </div>
            <h1>Qué pereza la presa</h1>
            <hr />
        </div>
    </div>

    <div class="row">
        <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>

		<aside class="large-3 columns">
			<button>Donaciones</button>
			<ul class="side-nav">
				<li><a href="#">Galería</a></li>
				<li><a href="#">Preguntas frecuentes</a></li>
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
    </div>

    <footer>
    </footer>
</body>
</html>
