<?= $this->layout = "accueil"; ?>

<?php $this->start('center') ?>


<div class="col-md-offset-3 col-md-6">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">INSCRIRE VOS INFORMATIONS</h3>
        </div>
        <div class="panel-body">


            <?= $this->Form->create($user) ?>


            <?= $this->Form->input('username', ['label' => "Nom d'utilisateur"]) ?>
            <?= $this->Form->input('password', ['label' => "Mot de passe"]) ?>
            <?= $this->Form->input('firstname', ['label' => "Prénom"]) ?>
            <?= $this->Form->input('lastname', ['label' => "Nom"]) ?>
            <?= $this->Form->input('email', ['label' => "Votre adresse courriel"]) ?>
            <?= $this->Form->input('code', ['label' => "Code d'activation"]) ?>


            <?= $this->Form->button(__('Ajouter'), ['class' => 'btn btn-danger btn-lg']); ?>
            <?= $this->Form->end() ?>
            <?php $this->end() ?>

        </div>
    </div>

</div>