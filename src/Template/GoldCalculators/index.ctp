<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\GoldCalculator[]|\Cake\Collection\CollectionInterface $goldCalculators
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Gold Calculator'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="goldCalculators index large-9 medium-8 columns content">
    <h3><?= __('Gold Calculators') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('carat_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mcx_price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('currenttime') ?></th>
                <th scope="col"><?= $this->Paginator->sort('currentdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($goldCalculators as $goldCalculator): ?>
            <tr>
                <td><?= $this->Number->format($goldCalculator->id) ?></td>
                <td><?= $this->Number->format($goldCalculator->state_id) ?></td>
                <td><?= $this->Number->format($goldCalculator->city_id) ?></td>
                <td><?= $this->Number->format($goldCalculator->carat_id) ?></td>
                <td><?= $this->Number->format($goldCalculator->price) ?></td>
                <td><?= h($goldCalculator->mcx_price) ?></td>
                <td><?= h($goldCalculator->currenttime) ?></td>
                <td><?= h($goldCalculator->currentdate) ?></td>
                <td><?= $this->Number->format($goldCalculator->is_deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $goldCalculator->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $goldCalculator->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $goldCalculator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $goldCalculator->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
