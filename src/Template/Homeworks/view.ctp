<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Homework'), ['action' => 'edit', $homework->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Homework'), ['action' => 'delete', $homework->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homework->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Homeworks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Homework'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="homeworks view large-10 medium-9 columns">
    <h2><?= h($homework->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Teacher') ?></h6>
            <p><?= $homework->has('teacher') ? $this->Html->link($homework->teacher->id, ['controller' => 'Teachers', 'action' => 'view', $homework->teacher->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($homework->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Datestart') ?></h6>
            <p><?= h($homework->datestart) ?></p>
            <h6 class="subheader"><?= __('Dateend') ?></h6>
            <p><?= h($homework->dateend) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Content') ?></h6>
            <?= $this->Text->autoParagraph(h($homework->content)) ?>
        </div>
    </div>
</div>
