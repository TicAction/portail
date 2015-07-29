<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Classroom'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Kids'), ['controller' => 'Kids', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kid'), ['controller' => 'Kids', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="classrooms index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('grade') ?></th>
            <th><?= $this->Paginator->sort('cycle') ?></th>
            <th><?= $this->Paginator->sort('teacher_id') ?></th>
            <th><?= $this->Paginator->sort('kid_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($classrooms as $classroom): ?>
        <tr>
            <td><?= $this->Number->format($classroom->id) ?></td>
            <td><?= h($classroom->grade) ?></td>
            <td><?= h($classroom->cycle) ?></td>
            <td>
                <?= $classroom->has('teacher') ? $this->Html->link($classroom->teacher->id, ['controller' => 'Teachers', 'action' => 'view', $classroom->teacher->id]) : '' ?>
            </td>
            <td>
                <?= $classroom->has('kid') ? $this->Html->link($classroom->kid->id, ['controller' => 'Kids', 'action' => 'view', $classroom->kid->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $classroom->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $classroom->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $classroom->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classroom->id)]) ?>
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
