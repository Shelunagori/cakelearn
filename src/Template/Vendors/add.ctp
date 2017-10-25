<?php
$this->set('title', 'Add');
?>
<div class="portlet light bordered  col-md-6" >
	<div class="portlet-body-form"  >
		<?= $this->Form->create($vendor) ?>
		<fieldset>
			<legend><?= __('Add Master Vendor') ?></legend>
			<div class="form-body" >
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label class="control-label">Vendor Name <span class="required" aria-required="true">*</span></label>
							<?php echo $this->Form->control('name' , ['label' => false,'class' => 'form-control input-sm firstupercase','placeholder'=>'Enter Name']); ?>
						</div>
						<div class="form-group">
							<label class="control-label">Password</label>
							<?php echo $this->Form->control('password',['label' => false,'class' => 'form-control input-sm firstupercase','placeholder'=>'Enter Password']); ?> 
						</div>
						<div class="form-group">
							<label class="control-label">Email </label>
							<?php echo $this->Form->control('email' , ['label' => false,'class' => 'form-control input-sm firstupercase','placeholder'=>'Enter Email']); ?>
						</div>
						<div class="form-group">
							<label class="control-label">Mobile Number</label>
							<?php echo $this->Form->control('phonenumber',['label' => false,'type'=>'text','class' => 'form-control input-sm firstupercase','placeholder'=>'Enter Mobile Number']); ?> 
						</div>
						<div class="form-group">
							<label class="control-label">Store Phone No.</label>
							<?php echo $this->Form->control('storephonenumber',['label' => false,'type'=>'text','class' => 'form-control input-sm firstupercase','placeholder'=>'Enter Store Number']); ?> 
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