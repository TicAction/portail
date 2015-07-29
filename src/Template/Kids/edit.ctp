<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $kid->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $kid->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Kids'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Guardians'), ['controller' => 'Guardians', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Guardian'), ['controller' => 'Guardians', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Behaviors'), ['controller' => 'Behaviors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Behavior'), ['controller' => 'Behaviors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Classrooms'), ['controller' => 'Classrooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Classroom'), ['controller' => 'Classrooms', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="kids form large-10 medium-9 columns">
    <?= $this->Form->create($kid) ?>
    <fieldset>
        <legend><?= __('Edit Kid') ?></legend>
        <?php
            echo $this->Form->input('firstname');
            echo $this->Form->input('lastname');
            echo $this->Form->input('birthday');
            echo $this->Form->input('code');
            echo $this->Form->input('guardian_id', ['options' => $guardians]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
