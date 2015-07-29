<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit School'), ['action' => 'edit', $school->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete School'), ['action' => 'delete', $school->id], ['confirm' => __('Are you sure you want to delete # {0}?', $school->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cs'), ['controller' => 'Cs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New C'), ['controller' => 'Cs', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="schools view large-10 medium-9 columns">
    <h2><?= h($school->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($school->name) ?></p>
            <h6 class="subheader"><?= __('Adress') ?></h6>
            <p><?= h($school->adress) ?></p>
            <h6 class="subheader"><?= __('City') ?></h6>
            <p><?= h($school->city) ?></p>
            <h6 class="subheader"><?= __('Phone') ?></h6>
            <p><?= h($school->phone) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($school->email) ?></p>
            <h6 class="subheader"><?= __('Url') ?></h6>
            <p><?= h($school->url) ?></p>
            <h6 class="subheader"><?= __('C') ?></h6>
            <p><?= $school->has('c') ? $this->Html->link($school->c->name, ['controller' => 'Cs', 'action' => 'view', $school->c->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($school->id) ?></p>
        </div>
    </div>
</div>
