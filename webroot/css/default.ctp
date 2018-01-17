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

$cakeDescription = 'Cloudstaff';
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
    <?= $this->Html->meta(
    'Cloudstaff',
    'img/cloudstafflogo.png',
    ['type' => 'icon']
);
?>
    <?php echo $this->fetch('meta'); ?>

    <?= $this->Html->css([
            'font-awesome.min',
            'bootstrap',
            'custom1'
        ]);
    ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

</head>
<body>
  <div class="body-div1">
    <?= $this->element('canvas'); ?>
    <div class="col-lg-12">
      <div class="row">
        <?= $this->fetch('content'); ?>
      </div>
    </div>
    <?= $this->Html->script([
            'jquery.min',
            'bootstrap.min',
            'custom1'
        ]);
    ?>
    <?= $this->fetch('script') ?>
  </div>
</body>
</html>
