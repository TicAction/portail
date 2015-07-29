<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit C'), ['action' => 'edit', $c->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete C'), ['action' => 'delete', $c->id], ['confirm' => __('Are you sure you want to delete # {0}?', $c->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New C'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="cs view large-10 medium-9 columns">
    <h2><?= h($c->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($c->name) ?></p>
            <h6 class="subheader"><?= __('Adress') ?></h6>
            <p><?= h($c->adress) ?></p>
            <h6 class="subheader"><?= __('City') ?></h6>
            <p><?= h($c->city) ?></p>
            <h6 class="subheader"><?= __('Phone') ?></h6>
            <p><?= h($c->phone) ?></p>
            <h6 class="subheader"><?= __('Url') ?></h6>
            <p><?= h($c->url) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($c->id) ?></p>
        </div>
    </div>
</div>
