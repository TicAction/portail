<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Behavior'), ['action' => 'edit', $behavior->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Behavior'), ['action' => 'delete', $behavior->id], ['confirm' => __('Are you sure you want to delete # {0}?', $behavior->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Behaviors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Behavior'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Kids'), ['controller' => 'Kids', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kid'), ['controller' => 'Kids', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="behaviors view large-10 medium-9 columns">
    <h2><?= h($behavior->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Kid') ?></h6>
            <p><?= $behavior->has('kid') ? $this->Html->link($behavior->kid->id, ['controller' => 'Kids', 'action' => 'view', $behavior->kid->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($behavior->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date') ?></h6>
            <p><?= h($behavior->date) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Behavior') ?></h6>
            <?= $this->Text->autoParagraph(h($behavior->behavior)) ?>
        </div>
    </div>
</div>
