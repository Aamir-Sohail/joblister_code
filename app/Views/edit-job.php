<?= $this->extend('Template/base') ?>
<?php

$this->section('title') ?>
Insertion
<?php $this->endSection() ?>

<?php $this->section('content') ?>




<h2 class="text-muted">Update a Job Listing</h2>
<div class="container">
    <form action="<?= base_url('edit/' . $jobModel['id']) ?>" method="POST">
        <div class="form-group">
            <label>Company</label>
            <input type="text" name="companyname" value="<?= $jobModel['companyname'] ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select type="text" <?= $jobModel['category_id'] ?> name="category_id" class="form-control">
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
            <input type="text" value="<?= $jobModel['job_title'] ?>" name="job_title" class="form-control">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" value="<?= $jobModel['description'] ?>" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Location</label>
            <input type="text" value="<?= $jobModel['location'] ?>" name="location" class="form-control">
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input type="number" name="salary" value="<?= $jobModel['salary'] ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Contact user</label>
            <input type="text" name="contact_user" value="<?= $jobModel['contact_user'] ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Contact Email</label>
            <input type="text" name="contact_email" value="<?= $jobModel['contact_email'] ?>" class="form-control">
        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="Update">
    </form>
</div>

<?php $this->endSection() ?>