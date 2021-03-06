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
                ['action' => 'delete', $masterCarat->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $masterCarat->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Master Carats'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="masterCarats form large-9 medium-8 columns content">
    <?= $this->Form->create($masterCarat) ?>
    <fieldset>
        <legend><?= __('Edit Master Carat') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('is_deleted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
