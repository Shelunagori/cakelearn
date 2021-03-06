<style>
.drop{
		min-width:80px!important;
		left:-5px;
		padding: 3px 0px;
		box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.3); 
		font-size: 12px;
	}
.dropdown-menu li > a {    padding: 2px 5px; }
.btn1 { padding: 3px 10px; }
</style>
<div class="row">
	<div class="col-md-5 col-sm-5">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="font-purple-intense"></i>
					<span class="caption-subject font-purple-intense ">
						<?php 
						$updt_id=$MasterStates->id;
						if(!empty($updt_id)){ ?>
							<i class="fa fa-pencil-square-o"></i> Edit State
						<?php }else{ ?>
							<i class="fa fa-plus"></i> Add State
						<?php } ?>
					</span>
				</div>
				
					<div class="actions">
						<?php if(!empty($updt_id)){ ?>
							<?php echo $this->Html->link('<i class="fa fa-plus"></i> Add New',['action' => 'index'],array('escape'=>false,'class'=>'btn btn-primary')); ?>
						<?php } ?>
					</div>
				
			</div>
			
			<div class="portlet-body">
				<?= $this->Form->create($MasterStates,['id'=>'form_sample_3']) ?>
				<div class="row">
					<div class="col-md-8">  
					    <label class=" control-label">State Name <span class="required" aria-required="true">*</span></label>
						<?= $this->Form->input('name',['class'=>'form-control input-sm','placeholder'=>'State Name','type'=>'text','label'=>false]) ?>
					</div>
				</div>
				<br/>
				<?= $this->Form->button($this->Html->tag('i', '', ['class'=>'fa fa-plus']) . __(' Submit'),['class'=>'btn btn-primary','id'=>'submitbtn']); ?>
				<?= $this->Form->end() ?>
			</div>
		</div>
		
	</div>
	<div class="col-md-7 col-sm-7">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-gift"></i>
					<span class="caption-subject font-purple-plum ">States</span>
				</div>
				<div class="actions">
					<input type="text" class="form-control input-sm pull-right" placeholder="Search..." id="search3"  style="width: 200px;">
				</div>
			</div>
			<div class="portlet-body">
				<div style="overflow-y: scroll;height: 400px;">
				<table class="table table-bordered table-condensed" id="main_tble">
					<thead>
						<tr style="table-layout: fixed;">
							<th><?=  ('Sr.no') ?></th>
							<th><?=  ('State name') ?></th>
							<th class="actions"><?= __('Actions') ?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($state_shows as $state_show):
							@$k++;
						?>
						<tr>
							<td><?= h($k) ?></td>
							<td><?= h($state_show->name) ?></td>
							<td class="actions">
									
									<?php echo $this->Html->link('<i class="fa fa-pencil-square-o"></i> Edit ',['action' => 'index', $state_show->id],array('escape'=>false)); ?>
									&nbsp;&nbsp;&nbsp;&nbsp;
									<?= $this->Form->postLink('<i class="fa fa-trash"></i> Delete ',
												['action' => 'delete', $state_show->id], 
												[
													'escape' => false,
													'confirm' => __('Are you sure ?', $state_show->id)
												]) ?>
																
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $this->Html->script('/assets/global/plugins/jquery.min.js'); ?>

<script>
$(document).ready(function() {
	
	//--------- FORM VALIDATION
	var form3 = $('#form_sample_3');
	var error3 = $('.alert-danger', form3);
	var success3 = $('.alert-success', form3);
	form3.validate({
		
		errorElement: 'span', //default input error message container
		errorClass: 'help-block help-block-error', // default input error message class
		focusInvalid: true, // do not focus the last invalid input
		rules: {
				name:{
					required: true,					 
				}
			},

		errorPlacement: function (error, element) { // render error placement for each input type
			if (element.parent(".input-group").size() > 0) {
				error.insertAfter(element.parent(".input-group"));
			} else if (element.attr("data-error-container")) { 
				error.appendTo(element.attr("data-error-container"));
			} else if (element.parents('.radio-list').size() > 0) { 
				error.appendTo(element.parents('.radio-list').attr("data-error-container"));
			} else if (element.parents('.radio-inline').size() > 0) { 
				error.appendTo(element.parents('.radio-inline').attr("data-error-container"));
			} else if (element.parents('.checkbox-list').size() > 0) {
				error.appendTo(element.parents('.checkbox-list').attr("data-error-container"));
			} else if (element.parents('.checkbox-inline').size() > 0) { 
				error.appendTo(element.parents('.checkbox-inline').attr("data-error-container"));
			} else {
				error.insertAfter(element); // for other inputs, just perform default behavior
			}
		},

		invalidHandler: function (event, validator) { //display error alert on form submit   
			success3.hide();
			error3.show();
		},

		highlight: function (element) { // hightlight error inputs
		   $(element)
				.closest('.form-group').addClass('has-error'); // set error class to the control group
		},

		unhighlight: function (element) { // revert the change done by hightlight
			$(element)
				.closest('.form-group').removeClass('has-error'); // set error class to the control group
		},

		success: function (label) {
			label
				.closest('.form-group').removeClass('has-error'); // set success class to the control group
		},

		submitHandler: function (form) {
			$('#submitbtn').prop('disabled', true);
			$('#submitbtn').text('Submitting.....');
			success3.show();
			error3.hide();
			form[0].submit(); // submit the form
		}

	});
	//--	 END OF VALIDATION
	
	var $rows = $('#main_tble tbody tr');
	$('#search3').on('keyup',function() {
		var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
		var v = $(this).val();
		if(v){ 
			$rows.show().filter(function() {
				var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
	
				return !~text.indexOf(val);
			}).hide();
		}else{
			$rows.show();
		}
	});
});
</script>