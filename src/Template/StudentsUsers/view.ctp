<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Students User'), ['action' => 'edit', $studentsUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Students User'), ['action' => 'delete', $studentsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $studentsUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Students Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Students User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="studentsUsers view large-10 medium-9 columns">
    <h2><?= h($studentsUser->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Student') ?></h6>
            <p><?= $studentsUser->has('student') ? $this->Html->link($studentsUser->student->id, ['controller' => 'Students', 'action' => 'view', $studentsUser->student->id]) : '' ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $studentsUser->has('user') ? $this->Html->link($studentsUser->user->id, ['controller' => 'Users', 'action' => 'view', $studentsUser->user->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($studentsUser->id) ?></p>
        </div>
    </div>
</div>
