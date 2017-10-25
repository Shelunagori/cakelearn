<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Vendor $vendor
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vendor'), ['action' => 'edit', $vendor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vendor'), ['action' => 'delete', $vendor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vendors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vendor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Master Stores'), ['controller' => 'MasterStores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Master Store'), ['controller' => 'MasterStores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vendors view large-9 medium-8 columns content">
    <h3><?= h($vendor->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($vendor->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($vendor->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($vendor->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phonenumber') ?></th>
            <td><?= h($vendor->phonenumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Storephonenumber') ?></th>
            <td><?= h($vendor->storephonenumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($vendor->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Deleted') ?></th>
            <td><?= $this->Number->format($vendor->is_deleted) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Master Stores') ?></h4>
        <?php if (!empty($vendor->master_stores)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Vendor Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Logo') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Rating') ?></th>
                <th scope="col"><?= __('Discount') ?></th>
                <th scope="col"><?= __('Is Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vendor->master_stores as $masterStores): ?>
            <tr>
                <td><?= h($masterStores->id) ?></td>
                <td><?= h($masterStores->vendor_id) ?></td>
                <td><?= h($masterStores->name) ?></td>
                <td><?= h($masterStores->logo) ?></td>
                <td><?= h($masterStores->address) ?></td>
                <td><?= h($masterStores->rating) ?></td>
                <td><?= h($masterStores->discount) ?></td>
                <td><?= h($masterStores->is_deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MasterStores', 'action' => 'view', $masterStores->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MasterStores', 'action' => 'edit', $masterStores->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MasterStores', 'action' => 'delete', $masterStores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $masterStores->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
