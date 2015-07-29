<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Kid'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Guardians'), ['controller' => 'Guardians', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Guardian'), ['controller' => 'Guardians', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Behaviors'), ['controller' => 'Behaviors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Behavior'), ['controller' => 'Behaviors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Classrooms'), ['controller' => 'Classrooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Classroom'), ['controller' => 'Classrooms', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="kids index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('firstname') ?></th>
            <th><?= $this->Paginator->sort('lastname') ?></th>
            <th><?= $this->Paginator->sort('birthday') ?></th>
            <th><?= $this->Paginator->sort('code') ?></th>
            <th><?= $this->Paginator->sort('guardian_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($kids as $kid): ?>
        <tr>
            <td><?= $this->Number->format($kid->id) ?></td>
            <td><?= h($kid->firstname) ?></td>
            <td><?= h($kid->lastname) ?></td>
            <td><?= h($kid->birthday) ?></td>
            <td><?= h($kid->code) ?></td>
            <td>
                <?= $kid->has('guardian') ? $this->Html->link($kid->guardian->id, ['controller' => 'Guardians', 'action' => 'view', $kid->guardian->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $kid->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $kid->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $kid->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kid->id)]) ?>
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
