<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $masterCity->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $masterCity->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Master Cities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Master States'), ['controller' => 'MasterStates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Master State'), ['controller' => 'MasterStates', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="masterCities form large-9 medium-8 columns content">
    <?= $this->Form->create($masterCity) ?>
    <fieldset>
        <legend><?= __('Edit Master City') ?></legend>
        <?php
            echo $this->Form->control('master_state_id', ['options' => $masterStates, 'empty' => true]);
            echo $this->Form->control('name');
            echo $this->Form->control('is_deleted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
