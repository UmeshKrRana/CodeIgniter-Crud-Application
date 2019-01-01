<?php include_once 'header.php';
echo form_open('student_controller/save_post'); ?>

<div class="container mt-5 mb-5">
	<div class="row pl-5 pr-5">
		<div class="col-md-6">
			<?php echo form_label('Post Title', 'title');?>
				<div class="form-group">
					<?php echo form_input(['name'=>'title', 'id'=>'title', 'class'=>'form-control form-control-sm', 'placeholder'=>'Post Title', 'required'=>'']); ?>
				</div>

		</div>

		<div class="col-md-6">
			<?php echo form_label('Category', 'category'); ?>
				<div class="form-group">
					<?php echo form_input(['name'=>'category', 'id'=>'category', 'class'=>'form-control form-control-sm', 'placeholder'=>'Category', 'required'=>'']);?>
				</div>
		</div>
	</div>

		<div class="row pl-5 pr-5">
			<div class="col-md-12">
			<?php echo form_label('Description', 'description'); ?>
				<div class="form-group">
					<?php echo form_textarea(['name'=>'description', 'id'=>'description', 'class'=>'form-control form-control-sm', 'placeholder'=>'Description', 'required'=>'', 'rows'=>'5']);?>
				</div>
			</div>		
		</div>

		<div class="row pl-5 pr-5">
			<div class="col-md-12">
				<?php echo form_submit(['class'=>'btn btn-success btn-sm', 'value'=>'Save Post']); ?>
			</div>
		</div>

	</div>

</div>

<?php echo form_close(); ?>

<?php
	include_once 'footer.php';
?>
