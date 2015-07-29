<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Cs'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="cs form large-10 medium-9 columns">
    <?= $this->Form->create($c) ?>
    <fieldset>
        <legend><?= __('Add C') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('adress');
            echo $this->Form->input('city');
            echo $this->Form->input('phone');
            echo $this->Form->input('url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
