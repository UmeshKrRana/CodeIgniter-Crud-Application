<?php
	include_once('header.php');
	
?>

<div class="container mt-5" style="height: 500px;">

	<div class="row">
		<div class="col-md-5">
			<?php echo anchor('student_controller/add_post', 'Add New Record' ,['class'=>'btn btn-info btn-sm']);?>
		</div>
	</div>

	<div class="row mt-2 mb-2 text-center">
		<?php if($msg = $this->session->flashdata('msg')){
			echo "<div class='alert alert-info alert-dismissible'>
			<button type='button' class='close' data-dismiss='alert'>&times; </button>
			 ". $msg ."</div>";
		} ?>

	</div>

	<div class="table-responsive mt-4">
		<table class="table table-striped">
			<thead>
				<tr>
					<th> Id </th>
					<th> Post Title </th>
					<th> Description </th>
					<th> Category </th>
					<th> Action </th>
				</tr> 
			</thead>
			<tbody>
				<?php foreach ($result as $value) {
					?>
					<tr>
						<td><?php echo $value->id; ?> </td>
						<td><?php echo $value->title; ?> </td>
						<td><?php echo $value->description; ?> </td>
						<td><?php echo $value->category; ?> </td>
						<td>
							<?php echo anchor('','View', ['class'=>'badge badge-info badge-pill']) ?>
							<?php echo anchor("student_controller/get_post/{$value->id}",'Edit', ['class'=>'badge badge-success badge-pill ']) ?>
							<?php echo anchor("student_controller/delete_post/{$value->id}",'Delete', ['class'=>'badge badge-danger badge-pill']) ?>
						</td>
					</tr>

					<?php
				}
				?>
				
			</tbody>
		</table>

	</div>

</div>







<?php include_once 'footer.php'; ?>
