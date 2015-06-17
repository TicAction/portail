<?= $this->layout="accueil";?>

<?php $this->start('header'); ?>
    <div class="label label-success">

        <?= $message; ?>
    </div>
<?php $this->end(); ?>

<?php $this->start('center'); ?>

<?php $this->end(); ?>

<?php $this->start('footer'); ?>
    <div class="container">

        <div class="navbar-text navbar-right">

            <?= $this->Html->link(
                'Connexion',
                ['controller' => 'Users', 'action' => 'login', '_full' => true],
                ['class'=>'btn btn-danger btn-lg']
            );?>
            <?= $this->Html->link("S'enregistrer au site" ,
                ["controller"=>"Pages","action"=>"register","_full"=>true] ,
                ['class' => 'btn btn-danger btn-lg',
                    'data-toggle'=> 'modal',
                    'data-target' => '#ConfirmDelete'],
                ['confirm' => 'Are you sure you wish to delete this recipe?']
            )?>

        </div>

    </div>


<?php $this->end(); ?>