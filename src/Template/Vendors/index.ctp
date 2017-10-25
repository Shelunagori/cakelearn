<?php
$this->set('title', 'List');
?>
<div class="portlet light bordered " >
	<div class="portlet-title">
		<div class="caption">
			<i class="icon-cursor font-purple-intense"></i>
			<span class="caption-subject font-purple-intense ">Master Vendors</span>
		</div>
		<div class="actions">
			
		</div>
	</div>
	<div class="portlet-body-form"  >
		<div class="form-body">
			<table id="example1" class="table table-bordered form-group table-striped">
				<thead>
					<tr>
						<th scope="col">Sr.No.</th>
						<th scope="col">Vendor Name</th>
						<th scope="col">Email</th>
						<th scope="col">Mobile No.</th>
						<th scope="col">Store Phone No.</th>
						<th scope="col" class="actions" ><?= __('Actions') ?></th>
					</tr>
				</thead>
				<tbody>
					<?php $i=0;    foreach ($vendors as $vendor): 
					$i++;?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?= h($vendor->name) ?></td>
						<td><?= h($vendor->email) ?></td>
						<td><?= h($vendor->phonenumber) ?></td>
						<td><?= h($vendor->storephonenumber) ?></td>
						<td class="actions">
							<?= $this->Html->link(__('Edit'), ['action' => 'edit', $vendor->id]) ?>
							<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vendor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendor->id)]) ?>
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


