<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Message'), ['action' => 'edit', $message->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Message'), ['action' => 'delete', $message->id], ['confirm' => __('Are you sure you want to delete # {0}?', $message->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Messages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Message'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Guardians'), ['controller' => 'Guardians', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Guardian'), ['controller' => 'Guardians', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="messages view large-10 medium-9 columns">
    <h2><?= h($message->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Datesend') ?></h6>
            <p><?= h($message->datesend) ?></p>
            <h6 class="subheader"><?= __('Object') ?></h6>
            <p><?= h($message->object) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($message->email) ?></p>
            <h6 class="subheader"><?= __('Teacher') ?></h6>
            <p><?= $message->has('teacher') ? $this->Html->link($message->teacher->id, ['controller' => 'Teachers', 'action' => 'view', $message->teacher->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Guardian') ?></h6>
            <p><?= $message->has('guardian') ? $this->Html->link($message->guardian->id, ['controller' => 'Guardians', 'action' => 'view', $message->guardian->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($message->id) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Content') ?></h6>
            <?= $this->Text->autoParagraph(h($message->content)) ?>
        </div>
    </div>
</div>
