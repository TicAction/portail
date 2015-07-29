<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Homeworks Form'), ['action' => 'edit', $homeworksForm->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Homeworks Form'), ['action' => 'delete', $homeworksForm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeworksForm->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Homeworks Forms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Homeworks Form'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="homeworksForms view large-10 medium-9 columns">
    <h2><?= h($homeworksForm->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Reading') ?></h6>
            <p><?= h($homeworksForm->reading) ?></p>
            <h6 class="subheader"><?= __('Grammaire') ?></h6>
            <p><?= h($homeworksForm->grammaire) ?></p>
            <h6 class="subheader"><?= __('Mathematique') ?></h6>
            <p><?= h($homeworksForm->mathematique) ?></p>
            <h6 class="subheader"><?= __('Verbe') ?></h6>
            <p><?= h($homeworksForm->verbe) ?></p>
            <h6 class="subheader"><?= __('Us') ?></h6>
            <p><?= h($homeworksForm->us) ?></p>
            <h6 class="subheader"><?= __('Art') ?></h6>
            <p><?= h($homeworksForm->art) ?></p>
            <h6 class="subheader"><?= __('Mathhomework') ?></h6>
            <p><?= h($homeworksForm->mathhomework) ?></p>
            <h6 class="subheader"><?= __('Other') ?></h6>
            <p><?= h($homeworksForm->other) ?></p>
            <h6 class="subheader"><?= __('Dateend') ?></h6>
            <p><?= h($homeworksForm->dateend) ?></p>
            <h6 class="subheader"><?= __('Teacher') ?></h6>
            <p><?= $homeworksForm->has('teacher') ? $this->Html->link($homeworksForm->teacher->id, ['controller' => 'Teachers', 'action' => 'view', $homeworksForm->teacher->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($homeworksForm->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Datastart') ?></h6>
            <p><?= h($homeworksForm->datastart) ?></p>
        </div>
    </div>
</div>
