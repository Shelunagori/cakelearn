<?php
$this->set('title', 'List');
?>
<div class="portlet light bordered " >
	<div class="portlet-title">
		<div class="caption">
			<i class="icon-cursor font-purple-intense"></i>
			<span class="caption-subject font-purple-intense ">Master Stores</span>
		</div>
		<div class="actions">
			
		</div>
	</div>
	<div class="portlet-body-form"  >
		<div class="form-body">
			<table id="example1" class="table table-bordered form-group table-striped">
				<thead>
					<tr>
						<th>Sr.No.</th>
						<th>Logo</th>
						<th>Vendor Name</th>
						<th>Store Name</th>
						
						<th>Address</th>
						<th>Rating</th>
						<th>Discount</th>
						<th class="actions" ><?= __('Actions') ?></th>
					</tr>
				</thead>
				<tbody>
					<?php $i=0;    foreach ($masterStores as $masterStore): 
					$i++;?>
					<tr>
						<td><?php echo $i; ?></td>
						
						<td><?php echo $this->Html->image('/img/logos/'.$masterStore->id.'/'.$masterStore->logo,['class'=>'site-menu-icon wb-dashboard','aria-hidden'=>'true','style'=>'height: 40px;']); ?></td>
						
						<td><?= $masterStore->vendor->name ?></td>
						<td><?= h($masterStore->name) ?></td>
						
						<td><?= h($masterStore->address) ?></td>
						<td><?= $this->Number->format($masterStore->rating) ?></td>
						<td><?= $this->Number->format($masterStore->discount) ?></td>
						<td class="actions">
							<?= $this->Html->link(__('Edit'), ['action' => 'edit', $masterStore->id]) ?>
							<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $masterStore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $masterStore->id)]) ?>
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
	</div>
</div>	


