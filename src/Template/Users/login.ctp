<?= $this->layout = "accueil"; ?>


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


                <?= $this->Form->input('username') ?>
                <?= $this->Form->input('password') ?>

                <?= $this->Form->button(__('Se Connecter'), ["class" => "btn btn-danger"]); ?>
                <?= $this->Form->end() ?>


            </div>
        </div>
    </div>
<?php $this->end(); ?>