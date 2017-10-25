<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\GoldCalculator $goldCalculator
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Gold Calculator'), ['action' => 'edit', $goldCalculator->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Gold Calculator'), ['action' => 'delete', $goldCalculator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $goldCalculator->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Gold Calculators'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gold Calculator'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="goldCalculators view large-9 medium-8 columns content">
    <h3><?= h($goldCalculator->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Mcx Price') ?></th>
            <td><?= h($goldCalculator->mcx_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($goldCalculator->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State Id') ?></th>
            <td><?= $this->Number->format($goldCalculator->state_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City Id') ?></th>
            <td><?= $this->Number->format($goldCalculator->city_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Carat Id') ?></th>
            <td><?= $this->Number->format($goldCalculator->carat_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($goldCalculator->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Deleted') ?></th>
            <td><?= $this->Number->format($goldCalculator->is_deleted) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Currenttime') ?></th>
            <td><?= h($goldCalculator->currenttime) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Currentdate') ?></th>
            <td><?= h($goldCalculator->currentdate) ?></td>
        </tr>
    </table>
</div>
