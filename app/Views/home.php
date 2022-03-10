<?= $this->extend('Template/base') ?>

<?php $this->section('content') ?>

<div class="container">
	<form action="<?= base_url('home') ?>" method="GET">
		<div class="jumbotron">
			<h3>Find a job</h3>
			<form method="GET" action="index.php">
				<select name="category" class="form-control">
					<option value="0">Choose a category</option>
					<option value="1">
						Business </option>
					<option value="2">
						Technology </option>
					<option value="3">
						Retail </option>
					<option value="4">
						Construction </option>
				</select>
				<br>
				<input type="submit" class="btn-lg btn-success" value="FIND">
			</form>
		</div>


	</form>
	<h3>Latest Jobs</h3>
	<table class="table table-bordered">
		<thead>
			<tr>

				<!-- <th scope="col">ID</th> -->
				<th scope="col">ID</th>
				<td scope="col">Job_Title</td>
				<td scope="col">Description</td>

				<td scope="col">Action</td>
			</tr>

		</thead>
		<tbody>
			<?php foreach ($data as $items) :  ?>

				<tr>

					<td><?php echo $items['id'] ?></td>
					<td><?php echo $items['job_title'] ?></td>

					<td><?php echo $items['description'] ?></td>


					<td>
						<a href="<?= base_url('view/' . $items['id']) ?>" class="btn btn-success">View</a>

					</td>
				</tr>
			<?php endforeach; ?>

		</tbody>
	</table>
</div>

<?php $this->endSection() ?>