<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Behavior'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Kids'), ['controller' => 'Kids', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kid'), ['controller' => 'Kids', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="behaviors index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('date') ?></th>
            <th><?= $this->Paginator->sort('kid_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($behaviors as $behavior): ?>
        <tr>
            <td><?= $this->Number->format($behavior->id) ?></td>
            <td><?= h($behavior->date) ?></td>
            <td>
                <?= $behavior->has('kid') ? $this->Html->link($behavior->kid->id, ['controller' => 'Kids', 'action' => 'view', $behavior->kid->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $behavior->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $behavior->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $behavior->id], ['confirm' => __('Are you sure you want to delete # {0}?', $behavior->id)]) ?>
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
