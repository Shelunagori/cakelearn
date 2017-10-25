<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\MasterStore $masterStore
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Master Store'), ['action' => 'edit', $masterStore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Master Store'), ['action' => 'delete', $masterStore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $masterStore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Master Stores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Master Store'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vendors'), ['controller' => 'Vendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vendor'), ['controller' => 'Vendors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Purchase Details'), ['controller' => 'PurchaseDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Purchase Detail'), ['controller' => 'PurchaseDetails', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="masterStores view large-9 medium-8 columns content">
    <h3><?= h($masterStore->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Vendor') ?></th>
            <td><?= $masterStore->has('vendor') ? $this->Html->link($masterStore->vendor->name, ['controller' => 'Vendors', 'action' => 'view', $masterStore->vendor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($masterStore->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logo') ?></th>
            <td><?= h($masterStore->logo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($masterStore->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($masterStore->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rating') ?></th>
            <td><?= $this->Number->format($masterStore->rating) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discount') ?></th>
            <td><?= $this->Number->format($masterStore->discount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Deleted') ?></th>
            <td><?= $this->Number->format($masterStore->is_deleted) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Purchase Details') ?></h4>
        <?php if (!empty($masterStore->purchase_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Master User Id') ?></th>
                <th scope="col"><?= __('Master Store Id') ?></th>
                <th scope="col"><?= __('Bill Detail') ?></th>
                <th scope="col"><?= __('Bill Image') ?></th>
                <th scope="col"><?= __('Send For Approval') ?></th>
                <th scope="col"><?= __('Approval Status From Vendor') ?></th>
                <th scope="col"><?= __('Timer For Current Status') ?></th>
                <th scope="col"><?= __('Payment Detail') ?></th>
                <th scope="col"><?= __('Is Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($masterStore->purchase_details as $purchaseDetails): ?>
            <tr>
                <td><?= h($purchaseDetails->id) ?></td>
                <td><?= h($purchaseDetails->master_user_id) ?></td>
                <td><?= h($purchaseDetails->master_store_id) ?></td>
                <td><?= h($purchaseDetails->bill_detail) ?></td>
                <td><?= h($purchaseDetails->bill_image) ?></td>
                <td><?= h($purchaseDetails->send_for_approval) ?></td>
                <td><?= h($purchaseDetails->approval_status_from_vendor) ?></td>
                <td><?= h($purchaseDetails->timer_for_current_status) ?></td>
                <td><?= h($purchaseDetails->Payment_detail) ?></td>
                <td><?= h($purchaseDetails->is_deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PurchaseDetails', 'action' => 'view', $purchaseDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PurchaseDetails', 'action' => 'edit', $purchaseDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PurchaseDetails', 'action' => 'delete', $purchaseDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $purchaseDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
