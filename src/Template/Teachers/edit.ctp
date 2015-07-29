<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $teacher->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $teacher->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Teachers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Classrooms'), ['controller' => 'Classrooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Classroom'), ['controller' => 'Classrooms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Homeworks'), ['controller' => 'Homeworks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Homework'), ['controller' => 'Homeworks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Homeworks Forms'), ['controller' => 'HomeworksForms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Homeworks Form'), ['controller' => 'HomeworksForms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Messages'), ['controller' => 'Messages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Message'), ['controller' => 'Messages', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="teachers form large-10 medium-9 columns">
    <?= $this->Form->create($teacher) ?>
    <fieldset>
        <legend><?= __('Edit Teacher') ?></legend>
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
