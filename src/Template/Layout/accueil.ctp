<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title'); ?> | Je suis le site
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('paper.css') ?>
    <?= $this->Html->css('signin.css') ?>
</head>
<body class="home">
<header>
    <div class="navbar">
        <div class="navbar-brand">
            <h1>
                <?= $this->fetch('header'); ?>
            </h1>
        </div>

    </div>

</header>

<content>
    <div class="container">

        
            <?= $this->fetch('content'); ?>

    </div>

</content>


<footer>


        <div class="navbar navbar-fixed-bottom">

            <?= $this->fetch('footer'); ?>

        </div>



</footer>
</body>
</html>
