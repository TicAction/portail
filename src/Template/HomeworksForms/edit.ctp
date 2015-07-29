<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $homeworksForm->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $homeworksForm->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Homeworks Forms'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="homeworksForms form large-10 medium-9 columns">
    <?= $this->Form->create($homeworksForm) ?>
    <fieldset>
        <legend><?= __('Edit Homeworks Form') ?></legend>
        <?php
            echo $this->Form->input('reading');
            echo $this->Form->input('grammaire');
            echo $this->Form->input('mathematique');
            echo $this->Form->input('verbe');
            echo $this->Form->input('us');
            echo $this->Form->input('art');
            echo $this->Form->input('mathhomework');
            echo $this->Form->input('other');
            echo $this->Form->input('datastart');
            echo $this->Form->input('dateend');
            echo $this->Form->input('teacher_id', ['options' => $teachers]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
