<?php
$this->set('title', 'Add');
?>
<div class="portlet light bordered  col-md-6" >
	<div class="portlet-body-form"  >
		<?= $this->Form->create($masterStore,['type'=>'file']) ?>
		<fieldset>
			<legend><?= __('Add Master Store') ?></legend>
			<div class="form-body" >
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label class="control-label">Vendor Name <span class="required" aria-required="true">*</span></label>
							<?php echo $this->Form->control('vendor_id' , ['options' => $vendors,'label' => false,'class' => 'form-control input-sm firstupercase','placeholder'=>'Enter Master User Name']); ?>
						</div>
						<div class="form-group">
							<label class="control-label">Name <span class="required" aria-required="true">*</span></label>
							<?php echo $this->Form->control('name' , ['label' => false,'class' => 'form-control input-sm firstupercase','placeholder'=>'Store Name']); ?>
						</div>
						<div class="form-group">
							<label class="control-label">Address</label>
							<?php echo $this->Form->control('address',['label' => false,'type'=>'textarea','class' => 'form-control input-sm firstupercase','placeholder'=>'Enter Address']); ?> 
						</div>
						<div class="form-group">
							<label class="control-label">Rating</label>
							<?php echo $this->Form->control('rating',['label' => false,'type'=>'text','class' => 'form-control input-sm firstupercase','placeholder'=>'Enter Rating']); ?> 
						</div>
						<div class="form-group">
							<label class="control-label">Discount</label>
							<?php echo $this->Form->control('discount',['label' => false,'type'=>'text','class' => 'form-control input-sm firstupercase','placeholder'=>'Enter Discount']); ?> 
						</div>
						<div class="form-group">
							<label class="control-label">Logo</label>
							<?php echo $this->Form->control('logo',['label' => false,'type'=>'file','class' => 'form-control input-sm firstupercase']); ?> 
						</div>
					</div>
				</div> 
			</div>
		</fieldset>
		<div>
			<button type="submit" class="btn btn-primary">Submit
		</div>
		<?= $this->Form->end() ?>
	</div> 
</div>   