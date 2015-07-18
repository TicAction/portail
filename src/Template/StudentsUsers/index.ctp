<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Students User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="studentsUsers index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('student_id') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($studentsUsers as $studentsUser): ?>
        <tr>
            <td><?= $this->Number->format($studentsUser->id) ?></td>
            <td>
                <?= $studentsUser->has('student') ? $this->Html->link($studentsUser->student->id, ['controller' => 'Students', 'action' => 'view', $studentsUser->student->id]) : '' ?>
            </td>
            <td>
                <?= $studentsUser->has('user') ? $this->Html->link($studentsUser->user->id, ['controller' => 'Users', 'action' => 'view', $studentsUser->user->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $studentsUser->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $studentsUser->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $studentsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $studentsUser->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
