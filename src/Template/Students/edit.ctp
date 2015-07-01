<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $student->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="students form large-10 medium-9 columns">
    <?= $this->Form->create($student) ?>
    <fieldset>
        <legend><?= __('Edit Student') ?></legend>
        <?php
            echo $this->Form->input('firstname');
            echo $this->Form->input('lastname');
            echo $this->Form->input('fcode');
            echo $this->Form->input('mcode');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
