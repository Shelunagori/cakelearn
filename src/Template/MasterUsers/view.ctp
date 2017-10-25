<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\MasterUser $masterUser
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Master User'), ['action' => 'edit', $masterUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Master User'), ['action' => 'delete', $masterUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $masterUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Master Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Master User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cash Back Details'), ['controller' => 'CashBackDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cash Back Detail'), ['controller' => 'CashBackDetails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Check In Details'), ['controller' => 'CheckInDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Check In Detail'), ['controller' => 'CheckInDetails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Purchase Details'), ['controller' => 'PurchaseDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Purchase Detail'), ['controller' => 'PurchaseDetails', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="masterUsers view large-9 medium-8 columns content">
    <h3><?= h($masterUser->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($masterUser->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($masterUser->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($masterUser->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PhoneNumber') ?></th>
            <td><?= h($masterUser->phoneNumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($masterUser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Deleted') ?></th>
            <td><?= $this->Number->format($masterUser->is_deleted) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cash Back Details') ?></h4>
        <?php if (!empty($masterUser->cash_back_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Master User Id') ?></th>
                <th scope="col"><?= __('Purchase Detail Id') ?></th>
                <th scope="col"><?= __('Payment Method Type') ?></th>
                <th scope="col"><?= __('Is Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($masterUser->cash_back_details as $cashBackDetails): ?>
            <tr>
                <td><?= h($cashBackDetails->id) ?></td>
                <td><?= h($cashBackDetails->master_user_id) ?></td>
                <td><?= h($cashBackDetails->purchase_detail_id) ?></td>
                <td><?= h($cashBackDetails->payment_method_type) ?></td>
                <td><?= h($cashBackDetails->is_deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CashBackDetails', 'action' => 'view', $cashBackDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CashBackDetails', 'action' => 'edit', $cashBackDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CashBackDetails', 'action' => 'delete', $cashBackDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cashBackDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Check In Details') ?></h4>
        <?php if (!empty($masterUser->check_in_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Master User Id') ?></th>
                <th scope="col"><?= __('Master Stores Id') ?></th>
                <th scope="col"><?= __('Visit Time') ?></th>
                <th scope="col"><?= __('Visit Date') ?></th>
                <th scope="col"><?= __('Is Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($masterUser->check_in_details as $checkInDetails): ?>
            <tr>
                <td><?= h($checkInDetails->id) ?></td>
                <td><?= h($checkInDetails->master_user_id) ?></td>
                <td><?= h($checkInDetails->master_stores_id) ?></td>
                <td><?= h($checkInDetails->visit_time) ?></td>
                <td><?= h($checkInDetails->visit_date) ?></td>
                <td><?= h($checkInDetails->is_deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CheckInDetails', 'action' => 'view', $checkInDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CheckInDetails', 'action' => 'edit', $checkInDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CheckInDetails', 'action' => 'delete', $checkInDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $checkInDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Purchase Details') ?></h4>
        <?php if (!empty($masterUser->purchase_details)): ?>
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
            <?php foreach ($masterUser->purchase_details as $purchaseDetails): ?>
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
