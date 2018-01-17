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
            'bootstrap.min',
            'roboto',
            'val'
        ]);
    ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

</head>
    <body onload="change()">
        <?= $this->fetch('content'); ?>
        <?= $this->Html->script([
                'jquery.min',
                'bootstrap.bundle.min',
                'val'
            ]);
        ?>
        <?= $this->fetch('script') ?>
    </body>
</html>