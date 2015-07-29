<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Guardian'), ['action' => 'edit', $guardian->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Guardian'), ['action' => 'delete', $guardian->id], ['confirm' => __('Are you sure you want to delete # {0}?', $guardian->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Guardians'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Guardian'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Kids'), ['controller' => 'Kids', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kid'), ['controller' => 'Kids', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Messages'), ['controller' => 'Messages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Message'), ['controller' => 'Messages', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="guardians view large-10 medium-9 columns">
    <h2><?= h($guardian->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Username') ?></h6>
            <p><?= h($guardian->username) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($guardian->password) ?></p>
            <h6 class="subheader"><?= __('Firstname') ?></h6>
            <p><?= h($guardian->firstname) ?></p>
            <h6 class="subheader"><?= __('Lastname') ?></h6>
            <p><?= h($guardian->lastname) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($guardian->email) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($guardian->id) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('IsActive') ?></h6>
            <p><?= $guardian->isActive ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Kids') ?></h4>
    <?php if (!empty($guardian->kids)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Firstname') ?></th>
            <th><?= __('Lastname') ?></th>
            <th><?= __('Birthday') ?></th>
            <th><?= __('Code') ?></th>
            <th><?= __('Guardian Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($guardian->kids as $kids): ?>
        <tr>
            <td><?= h($kids->id) ?></td>
            <td><?= h($kids->firstname) ?></td>
            <td><?= h($kids->lastname) ?></td>
            <td><?= h($kids->birthday) ?></td>
            <td><?= h($kids->code) ?></td>
            <td><?= h($kids->guardian_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Kids', 'action' => 'view', $kids->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Kids', 'action' => 'edit', $kids->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Kids', 'action' => 'delete', $kids->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kids->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Messages') ?></h4>
    <?php if (!empty($guardian->messages)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Datesend') ?></th>
            <th><?= __('Object') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Content') ?></th>
            <th><?= __('Teacher Id') ?></th>
            <th><?= __('Guardian Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($guardian->messages as $messages): ?>
        <tr>
            <td><?= h($messages->id) ?></td>
            <td><?= h($messages->datesend) ?></td>
            <td><?= h($messages->object) ?></td>
            <td><?= h($messages->email) ?></td>
            <td><?= h($messages->content) ?></td>
            <td><?= h($messages->teacher_id) ?></td>
            <td><?= h($messages->guardian_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Messages', 'action' => 'view', $messages->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Messages', 'action' => 'edit', $messages->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Messages', 'action' => 'delete', $messages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $messages->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
