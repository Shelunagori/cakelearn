<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\MasterCity $masterCity
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Master City'), ['action' => 'edit', $masterCity->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Master City'), ['action' => 'delete', $masterCity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $masterCity->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Master Cities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Master City'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Master States'), ['controller' => 'MasterStates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Master State'), ['controller' => 'MasterStates', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="masterCities view large-9 medium-8 columns content">
    <h3><?= h($masterCity->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Master State') ?></th>
            <td><?= $masterCity->has('master_state') ? $this->Html->link($masterCity->master_state->name, ['controller' => 'MasterStates', 'action' => 'view', $masterCity->master_state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($masterCity->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($masterCity->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Deleted') ?></th>
            <td><?= $this->Number->format($masterCity->is_deleted) ?></td>
        </tr>
    </table>
</div>
