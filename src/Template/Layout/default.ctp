<?php
$cakeDescription = 'Portail de gestion de classe';
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

    <?= $this->Html->css('cerulean.css') ?>
    <?= $this->Html->css('signin.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

</head>
<body>

<header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Gestion de classe <?= $this->fetch("brand") ?></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Accueil </a></li>
                    <li><a href="#">Comportement</a></li>

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><?= $this->Html->link('DÉCONNEXION' , ['controller'=>'Users','action'=>'logout'])?></li>
                </ul>
            </div>
        </div>
    </nav>
</header>


<div class="container-fluid">

    <?= $this->Flash->render() ?>
    <div class="col-md-3">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">  </tr></h3>
            </div>
            <div class="panel-body">
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Travaux de la semaine</h3>
            </div>
            <div class="panel-body">

            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"> </h3>
            </div>
            <div class="panel-body">
                je suis le texte

            </div>
        </div>        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"> </h3>
            </div>
            <div class="panel-body">
                je suis le texte

            </div>
        </div>

    </div>

    <div class="col-md-9">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><?= $this->fetch('titleContent') ?></h3>
            </div>
            <div class="panel-body text-justify">

                <?= $this->fetch('content') ?>
            </div>
        </div>

    </div>

</div>
<footer>
</footer>

<?= $this->fetch('script') ?>
</body>
</html>
