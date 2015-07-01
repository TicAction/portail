<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="students view large-10 medium-9 columns">
    <h2><?= h($student->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Firstname') ?></h6>
            <p><?= h($student->firstname) ?></p>
            <h6 class="subheader"><?= __('Lastname') ?></h6>
            <p><?= h($student->lastname) ?></p>
            <h6 class="subheader"><?= __('Fcode') ?></h6>
            <p><?= h($student->fcode) ?></p>
            <h6 class="subheader"><?= __('Mcode') ?></h6>
            <p><?= h($student->mcode) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($student->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($student->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($student->modified) ?></p>
        </div>
    </div>
</div>
