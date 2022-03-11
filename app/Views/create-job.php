<?= $this->extend('Template/base') ?>
<?php

$this->section('title') ?>
Insertion
<?php $this->endSection() ?>

<?php $this->section('content') ?>

<?php if(session()->getFlashData('message') !=null):?>
<div class="alert alert-success">
  <p><?php echo session()->getFlashData('message') ?></p>
</div>
<?php endif; ?>


<h2 class="text-muted">Create a Job Listing</h2>
<div class="container">
    <form action="<?= base_url('/insert') ?>" method="post">


        <div class="form-group">
            <label>Company Name</label>
            <input type="text" name="companyname" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Category</label>
            <select type="text" name="category_id" class="form-control" required>
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
        </div>
        <div class="form-group">
            <label>Job title</label>
            <input type="text" name="job_title" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input type="number" name="salary" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Contact user</label>
            <input type="text" name="contact_user" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Contact Email</label>
            <input type="email" name="contact_email" class="form-control" required>
        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </form>
</div>

<?php $this->endSection() ?>