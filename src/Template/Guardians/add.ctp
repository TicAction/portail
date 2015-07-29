<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Guardians'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Kids'), ['controller' => 'Kids', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kid'), ['controller' => 'Kids', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Messages'), ['controller' => 'Messages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Message'), ['controller' => 'Messages', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="guardians form large-10 medium-9 columns">
    <?= $this->Form->create($guardian) ?>
    <fieldset>
        <legend><?= __('Add Guardian') ?></legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('isActive');
            echo $this->Form->input('firstname');
            echo $this->Form->input('lastname');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
