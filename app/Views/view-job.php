<?= $this->extend('Template/base') ?>
<?php $this->section('content') ?>

<?php if (session()->getFlashData('message') != null) : ?>
	<div class="alert alert-success">
		<p><?php echo session()->getFlashData('message') ?></p>
	</div>
<?php endif; ?>


<h3>Latest Jobs</h3>
<table class="table table-bordered">
	<thead>
		<tr>

			<!-- <th scope="col">ID</th> -->
			<th scope="col">ID</th>
			<th scope="col">Category_ID</th>
			<th scope="col">Company Name</th>
			<td scope="col">Job_Title</td>
			<td scope="col">Image</td>
			<td scope="col">Description</td>
			<td scope="col">Salary</td>
			<td scope="col">Location</td>
			<td scope="col">Contact_User</td>
			<td scope="col">Contact_Email</td>
			<td scope="col">Created_at</td>
			<td scope="col">Action</td>
		</tr>

	</thead>
	<tbody>

		<tr>


			<td><?php echo $id ?></td>
			<td><?php echo $category_id ?></td>
			<td><?php echo $companyname ?></td>
			<td><?php echo $job_title ?></td>
			<td>
				<img src="<?= base_url("uploads/$image")?>" height="100px" width="100px" >
			</td>
			<td><?php echo $description ?></td>
			<td><?php echo $salary ?></td>
			<td><?php echo $location ?></td>
			<td><?php echo $contact_user ?></td>
			<td><?php echo $contact_email ?></td>
			<td><?php echo $created_at ?></td>





			<td>
				<a href="<?= base_url('edit/' . $id) ?>" class="btn btn-success">Edit</a>
				<a href="<?= base_url('delete/' . $id) ?>" class="btn btn-danger">Delete</a>

			</td>
		</tr>

	</tbody>
</table>
<a href="<?= base_url('home') ?>" class="btn btn-group-toggle">Go Back</a>
</div>

<?php $this->endSection() ?>