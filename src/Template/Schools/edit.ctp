<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $school->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $school->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Schools'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cs'), ['controller' => 'Cs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New C'), ['controller' => 'Cs', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="schools form large-10 medium-9 columns">
    <?= $this->Form->create($school) ?>
    <fieldset>
        <legend><?= __('Edit School') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('adress');
            echo $this->Form->input('city');
            echo $this->Form->input('phone');
            echo $this->Form->input('email');
            echo $this->Form->input('url');
            echo $this->Form->input('cs_id', ['options' => $cs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
