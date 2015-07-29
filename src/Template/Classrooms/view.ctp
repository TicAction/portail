<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Classroom'), ['action' => 'edit', $classroom->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Classroom'), ['action' => 'delete', $classroom->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classroom->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Classrooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Classroom'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Kids'), ['controller' => 'Kids', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kid'), ['controller' => 'Kids', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="classrooms view large-10 medium-9 columns">
    <h2><?= h($classroom->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Grade') ?></h6>
            <p><?= h($classroom->grade) ?></p>
            <h6 class="subheader"><?= __('Cycle') ?></h6>
            <p><?= h($classroom->cycle) ?></p>
            <h6 class="subheader"><?= __('Teacher') ?></h6>
            <p><?= $classroom->has('teacher') ? $this->Html->link($classroom->teacher->id, ['controller' => 'Teachers', 'action' => 'view', $classroom->teacher->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Kid') ?></h6>
            <p><?= $classroom->has('kid') ? $this->Html->link($classroom->kid->id, ['controller' => 'Kids', 'action' => 'view', $classroom->kid->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($classroom->id) ?></p>
        </div>
    </div>
</div>
