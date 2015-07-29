<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $homework->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $homework->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Homeworks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="homeworks form large-10 medium-9 columns">
    <?= $this->Form->create($homework) ?>
    <fieldset>
        <legend><?= __('Edit Homework') ?></legend>
        <?php
            echo $this->Form->input('datestart');
            echo $this->Form->input('dateend');
            echo $this->Form->input('content');
            echo $this->Form->input('teacher_id', ['options' => $teachers]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
