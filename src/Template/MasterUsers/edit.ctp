<?php
$this->set('title', 'Edit');
?>
<div class="portlet light bordered  col-md-6" >
	<div class="portlet-body-form"  >
    <?= $this->Form->create($masterUser) ?>
    <fieldset>
        <legend><?= __('Edit Master User') ?></legend>
       <div class="form-body" >
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label class="control-label">Name <span class="required" aria-required="true">*</span></label>
							<?php echo $this->Form->control('name' , ['label' => false,'class' => 'form-control input-sm firstupercase','placeholder'=>'Enter Master User Name']); ?>
						</div>
						<div class="form-group">
							<label class="control-label">Password</label>
							<?php echo $this->Form->control('password',['label' => false,'class' => 'form-control input-sm firstupercase','placeholder'=>'Enter Password']); ?> 
						</div>
						<div class="form-group">
							<label class="control-label">Email</label>
							<?php echo $this->Form->control('email',['label' => false,'class' => 'form-control input-sm firstupercase','placeholder'=>'Enter Email']); ?> 
						</div>
						<div class="form-group">
							<label class="control-label">Mobile No.</label>
							<?php echo $this->Form->control('phoneNumber',['label' => false,'class' => 'form-control input-sm firstupercase','placeholder'=>'Enter Mobile No.']); ?> 
						</div>
						
					</div>
				</div> 
			</div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div> 
</div>   
