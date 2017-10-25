<?php
$this->set('title', 'List');
?>
<div class="portlet light bordered " >
	<div class="portlet-title">
		<div class="caption">
			<i class="icon-cursor font-purple-intense"></i>
			<span class="caption-subject font-purple-intense ">Master Users List</span>
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
						<th scope="col">Name</th>
						<th scope="col">Email</th>
						<th scope="col">Mobile No.</th>
						<th scope="col" class="actions" ><?= __('Actions') ?></th>
					</tr>
				</thead>
				<tbody>
					<?php $i=0;    foreach ($masterUsers as $masterUser): 
					$i++;?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?= h($masterUser->name) ?></td>
						<td><?= h($masterUser->email) ?></td>
						<td><?= h($masterUser->phoneNumber) ?></td>
						 <td class="actions">
							<?= $this->Html->link(__('Edit'), ['action' => 'edit', $masterUser->id]) ?>
							<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $masterUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $masterUser->id)]) ?>
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

