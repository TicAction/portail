<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Kid'), ['action' => 'edit', $kid->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Kid'), ['action' => 'delete', $kid->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kid->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Kids'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kid'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Guardians'), ['controller' => 'Guardians', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Guardian'), ['controller' => 'Guardians', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Behaviors'), ['controller' => 'Behaviors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Behavior'), ['controller' => 'Behaviors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Classrooms'), ['controller' => 'Classrooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Classroom'), ['controller' => 'Classrooms', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="kids view large-10 medium-9 columns">
    <h2><?= h($kid->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Firstname') ?></h6>
            <p><?= h($kid->firstname) ?></p>
            <h6 class="subheader"><?= __('Lastname') ?></h6>
            <p><?= h($kid->lastname) ?></p>
            <h6 class="subheader"><?= __('Code') ?></h6>
            <p><?= h($kid->code) ?></p>
            <h6 class="subheader"><?= __('Guardian') ?></h6>
            <p><?= $kid->has('guardian') ? $this->Html->link($kid->guardian->id, ['controller' => 'Guardians', 'action' => 'view', $kid->guardian->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($kid->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Birthday') ?></h6>
            <p><?= h($kid->birthday) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Behaviors') ?></h4>
    <?php if (!empty($kid->behaviors)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Date') ?></th>
            <th><?= __('Behavior') ?></th>
            <th><?= __('Kid Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($kid->behaviors as $behaviors): ?>
        <tr>
            <td><?= h($behaviors->id) ?></td>
            <td><?= h($behaviors->date) ?></td>
            <td><?= h($behaviors->behavior) ?></td>
            <td><?= h($behaviors->kid_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Behaviors', 'action' => 'view', $behaviors->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Behaviors', 'action' => 'edit', $behaviors->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Behaviors', 'action' => 'delete', $behaviors->id], ['confirm' => __('Are you sure you want to delete # {0}?', $behaviors->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Classrooms') ?></h4>
    <?php if (!empty($kid->classrooms)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Grade') ?></th>
            <th><?= __('Cycle') ?></th>
            <th><?= __('Teacher Id') ?></th>
            <th><?= __('Kid Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($kid->classrooms as $classrooms): ?>
        <tr>
            <td><?= h($classrooms->id) ?></td>
            <td><?= h($classrooms->grade) ?></td>
            <td><?= h($classrooms->cycle) ?></td>
            <td><?= h($classrooms->teacher_id) ?></td>
            <td><?= h($classrooms->kid_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Classrooms', 'action' => 'view', $classrooms->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Classrooms', 'action' => 'edit', $classrooms->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Classrooms', 'action' => 'delete', $classrooms->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classrooms->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
