<?= $this->layout = "register"; ?>

<?php $this->start('center') ?>


<div class="col-md-offset-2 col-md-8">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">INSCRIRE VOS INFORMATIONS</h3>
        </div>
        <div class="panel-body">
            <?= $this->Form->create($user) ?>
    <table class="table table-bordered">


        <tr>

            <td><?= $this->Form->input('username', ['label' => "Nom d'utilisateur"]) ?></td>
            <td><?= $this->Form->input('password', ['label' => "Mot de passe"]) ?></td>


        </tr>
        <tr>
            <td><?= $this->Form->input('firstname', ['label' => "Prénom"]) ?></td>
            <td><?= $this->Form->input('lastname', ['label' => "Nom"]) ?></td>

        </tr>

        <tr>

            <td><?= $this->Form->input('email', ['label' => "Votre adresse courriel"]) ?></td>
            <td><?= $this->Form->input('code', ['label' => "Code d'activation"]) ?></td>
        </tr>
        <tr>

            <td><?= $this->Form->input('role', ['label' => "Votre adresse courriel"]) ?></td>
        </tr>



    </table>
            <?= $this->Form->button(__('Ajouter'), ['class' => 'btn btn-success btn-lg']); ?>
            <?= $this->Form->end() ?>
            <?php $this->end() ?>

        </div>
    </div>

</div>