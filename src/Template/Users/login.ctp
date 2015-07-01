<?= $this->layout = "register"; ?>

<?php $this->start('header'); ?>
    <div class="label label-success">

       Connexion
    </div>
<?php $this->end(); ?>
<?php $this->start('center'); ?>


    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Merci de rentrer votre nom d'utilisateur et votre mot de passe
                </h3>
            </div>
            <div class="panel-body">
                <?= $this->Flash->render('auth') ?>

                <?= $this->Form->create() ?>

<table class="table">



    <tr>
        <td><?= $this->Form->input('username',['label'=>"Nom d'utilisateur"]) ?></td>

    </tr>
    <tr>

        <td><?= $this->Form->input('password',['label'=>"Mot de passe"]) ?></td>
    </tr>

</table>
    <?= $this->Form->button(__('Se Connecter'), ["class" => "btn btn-success"]); ?>
    <?= $this->Form->end() ?>






            </div>
        </div>
    </div>
<?php $this->end(); ?>