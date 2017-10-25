<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\MasterCarat $masterCarat
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Master Carat'), ['action' => 'edit', $masterCarat->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Master Carat'), ['action' => 'delete', $masterCarat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $masterCarat->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Master Carats'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Master Carat'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="masterCarats view large-9 medium-8 columns content">
    <h3><?= h($masterCarat->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($masterCarat->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($masterCarat->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Deleted') ?></th>
            <td><?= $this->Number->format($masterCarat->is_deleted) ?></td>
        </tr>
    </table>
</div>
