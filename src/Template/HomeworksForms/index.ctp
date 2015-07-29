<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Homeworks Form'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="homeworksForms index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('reading') ?></th>
            <th><?= $this->Paginator->sort('grammaire') ?></th>
            <th><?= $this->Paginator->sort('mathematique') ?></th>
            <th><?= $this->Paginator->sort('verbe') ?></th>
            <th><?= $this->Paginator->sort('us') ?></th>
            <th><?= $this->Paginator->sort('art') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($homeworksForms as $homeworksForm): ?>
        <tr>
            <td><?= $this->Number->format($homeworksForm->id) ?></td>
            <td><?= h($homeworksForm->reading) ?></td>
            <td><?= h($homeworksForm->grammaire) ?></td>
            <td><?= h($homeworksForm->mathematique) ?></td>
            <td><?= h($homeworksForm->verbe) ?></td>
            <td><?= h($homeworksForm->us) ?></td>
            <td><?= h($homeworksForm->art) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $homeworksForm->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $homeworksForm->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $homeworksForm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeworksForm->id)]) ?>
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
