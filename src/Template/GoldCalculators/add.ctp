<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Gold Calculators'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="goldCalculators form large-9 medium-8 columns content">
    <?= $this->Form->create($goldCalculator) ?>
    <fieldset>
        <legend><?= __('Add Gold Calculator') ?></legend>
        <?php
            echo $this->Form->control('state_id');
            echo $this->Form->control('city_id');
            echo $this->Form->control('carat_id');
            echo $this->Form->control('price');
            echo $this->Form->control('mcx_price');
            echo $this->Form->control('currenttime');
            echo $this->Form->control('currentdate', ['empty' => true]);
            echo $this->Form->control('is_deleted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
