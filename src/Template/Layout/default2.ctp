<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
              <?php if($auth){ ?>
                <li><a target="_blank" href="https://book.cakephp.org/3.0/">Hello
                  <?php echo ucwords($auth['User']['username']); ?>
                </a>
                </li>
                <li>
                  <?php echo $this->Html->link('Logout',['controller'=>'users','action'=>'logout']); ?>
                </li>

              <?php }else{ ?>
                <li>
                  <?php echo $this->Html->link('Login',['controller'=>'users','action'=>'login']); ?>
                </li>
                <li>
                  <?php echo $this->Html->link('Forgot Password',['controller'=>'users','action'=>'forgotPassword']); ?>
                </li>
              <?php } ?>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="clearfix">
      <?php

      if($auth){
        $currentViewDetails = strtolower( $inflector::singularize($this->name));
        if(isset($$currentViewDetails->user_id)){
          $currentViewDetailsId = $$currentViewDetails->user_id;
        }
        if($currentViewDetails == 'User'){
          $currentViewDetailsId = $$currentViewDetails->id;
        }
        $isUserAuthorized = false;

        if( isset($$currentViewDetails->id ) AND $$currentViewDetails->id == $auth['User']['id']){
          $isUserAuthorized = true;
        }
        echo $this->element('side_menu_logged_in',['viewName'=> $inflector::singularize($this->name), 'isUserAuthorized'=>$isUserAuthorized]);
      } else{ ?>
      <?php echo $this->element('side_menu_logged_out'); ?>
    <?php } ?>
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
