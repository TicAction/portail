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

        <?= $this->Flash->render();?>
        <?= $this->Flash->render('auth');?>
        <?= $this->fetch('center'); ?>

    </div>

</content>


<footer>


    <div class="navbar navbar-fixed-bottom">
        <div class="container">

            <div class="navbar-text navbar-right">

                <?= $this->Html->link(
                    'Connexion',
                    ['controller' => 'Users', 'action' => 'login', '_full' => true],
                    ['class'=>'btn btn-danger btn-lg']
                );?>
                <?= $this->Html->link("S'enregistrer au site" ,
                    ["controller"=>"Users","action"=>"register","_full"=>true] ,
                    ['class' => 'btn btn-danger btn-lg',
                        'data-toggle'=> 'modal',
                        'data-target' => '#ConfirmDelete'],
                    ['confirm' => 'Are you sure you wish to delete this recipe?']
                )?>

            </div>

        </div>


    </div>



</footer>
</body>
</html>
