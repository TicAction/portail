<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $behavior->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $behavior->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Behaviors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Kids'), ['controller' => 'Kids', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kid'), ['controller' => 'Kids', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="behaviors form large-10 medium-9 columns">
    <?= $this->Form->create($behavior) ?>
    <fieldset>
        <legend><?= __('Edit Behavior') ?></legend>
        <?php
            echo $this->Form->input('date');
            echo $this->Form->input('behavior');
            echo $this->Form->input('kid_id', ['options' => $kids]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
