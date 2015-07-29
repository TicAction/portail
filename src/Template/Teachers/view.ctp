<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Teacher'), ['action' => 'edit', $teacher->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Teacher'), ['action' => 'delete', $teacher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teacher->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Teachers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Teacher'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Classrooms'), ['controller' => 'Classrooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Classroom'), ['controller' => 'Classrooms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Homeworks'), ['controller' => 'Homeworks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Homework'), ['controller' => 'Homeworks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Homeworks Forms'), ['controller' => 'HomeworksForms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Homeworks Form'), ['controller' => 'HomeworksForms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Messages'), ['controller' => 'Messages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Message'), ['controller' => 'Messages', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="teachers view large-10 medium-9 columns">
    <h2><?= h($teacher->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Username') ?></h6>
            <p><?= h($teacher->username) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($teacher->password) ?></p>
            <h6 class="subheader"><?= __('Firstname') ?></h6>
            <p><?= h($teacher->firstname) ?></p>
            <h6 class="subheader"><?= __('Lastname') ?></h6>
            <p><?= h($teacher->lastname) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($teacher->email) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($teacher->id) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('IsActive') ?></h6>
            <p><?= $teacher->isActive ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Classrooms') ?></h4>
    <?php if (!empty($teacher->classrooms)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Grade') ?></th>
            <th><?= __('Cycle') ?></th>
            <th><?= __('Teacher Id') ?></th>
            <th><?= __('Kid Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($teacher->classrooms as $classrooms): ?>
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
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Events') ?></h4>
    <?php if (!empty($teacher->events)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Datestart') ?></th>
            <th><?= __('Dateend') ?></th>
            <th><?= __('Comment') ?></th>
            <th><?= __('Teacher Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($teacher->events as $events): ?>
        <tr>
            <td><?= h($events->id) ?></td>
            <td><?= h($events->datestart) ?></td>
            <td><?= h($events->dateend) ?></td>
            <td><?= h($events->comment) ?></td>
            <td><?= h($events->teacher_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Events', 'action' => 'view', $events->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Events', 'action' => 'edit', $events->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Events', 'action' => 'delete', $events->id], ['confirm' => __('Are you sure you want to delete # {0}?', $events->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Homeworks') ?></h4>
    <?php if (!empty($teacher->homeworks)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Datestart') ?></th>
            <th><?= __('Dateend') ?></th>
            <th><?= __('Content') ?></th>
            <th><?= __('Teacher Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($teacher->homeworks as $homeworks): ?>
        <tr>
            <td><?= h($homeworks->id) ?></td>
            <td><?= h($homeworks->datestart) ?></td>
            <td><?= h($homeworks->dateend) ?></td>
            <td><?= h($homeworks->content) ?></td>
            <td><?= h($homeworks->teacher_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Homeworks', 'action' => 'view', $homeworks->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Homeworks', 'action' => 'edit', $homeworks->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Homeworks', 'action' => 'delete', $homeworks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeworks->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related HomeworksForms') ?></h4>
    <?php if (!empty($teacher->homeworks_forms)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Reading') ?></th>
            <th><?= __('Grammaire') ?></th>
            <th><?= __('Mathematique') ?></th>
            <th><?= __('Verbe') ?></th>
            <th><?= __('Us') ?></th>
            <th><?= __('Art') ?></th>
            <th><?= __('Mathhomework') ?></th>
            <th><?= __('Other') ?></th>
            <th><?= __('Datastart') ?></th>
            <th><?= __('Dateend') ?></th>
            <th><?= __('Teacher Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($teacher->homeworks_forms as $homeworksForms): ?>
        <tr>
            <td><?= h($homeworksForms->id) ?></td>
            <td><?= h($homeworksForms->reading) ?></td>
            <td><?= h($homeworksForms->grammaire) ?></td>
            <td><?= h($homeworksForms->mathematique) ?></td>
            <td><?= h($homeworksForms->verbe) ?></td>
            <td><?= h($homeworksForms->us) ?></td>
            <td><?= h($homeworksForms->art) ?></td>
            <td><?= h($homeworksForms->mathhomework) ?></td>
            <td><?= h($homeworksForms->other) ?></td>
            <td><?= h($homeworksForms->datastart) ?></td>
            <td><?= h($homeworksForms->dateend) ?></td>
            <td><?= h($homeworksForms->teacher_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'HomeworksForms', 'action' => 'view', $homeworksForms->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'HomeworksForms', 'action' => 'edit', $homeworksForms->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'HomeworksForms', 'action' => 'delete', $homeworksForms->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeworksForms->id)]) ?>

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
    <?php if (!empty($teacher->messages)): ?>
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
        <?php foreach ($teacher->messages as $messages): ?>
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
