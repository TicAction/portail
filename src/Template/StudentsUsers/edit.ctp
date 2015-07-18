<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $studentsUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $studentsUser->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Students Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="studentsUsers form large-10 medium-9 columns">
    <?= $this->Form->create($studentsUser) ?>
    <fieldset>
        <legend><?= __('Edit Students User') ?></legend>
        <?php
            echo $this->Form->input('student_id', ['options' => $students]);
            echo $this->Form->input('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
