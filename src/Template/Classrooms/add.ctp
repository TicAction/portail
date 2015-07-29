<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Classrooms'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Kids'), ['controller' => 'Kids', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kid'), ['controller' => 'Kids', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="classrooms form large-10 medium-9 columns">
    <?= $this->Form->create($classroom) ?>
    <fieldset>
        <legend><?= __('Add Classroom') ?></legend>
        <?php
            echo $this->Form->input('grade');
            echo $this->Form->input('cycle');
            echo $this->Form->input('teacher_id', ['options' => $teachers]);
            echo $this->Form->input('kid_id', ['options' => $kids]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
