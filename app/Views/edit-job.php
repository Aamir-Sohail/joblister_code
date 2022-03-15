<?= $this->extend('Template/base') ?>
<?php

$this->section('title') ?>
Insertion
<?php $this->endSection() ?>


<?php $this->section('content') ?>
<?php if (session()->getFlashData('message') != null) : ?>
 
<?php endif; ?>
<?php $errors = null;
if (session()->getFlashData('errors') != null) :
    $errors = session()->getFlashData('errors');

endif;
var_dump($errors);

?>


<?php if(session()->getFlashData('message') !=null):?>
<div class="alert alert-success">
  <p><?php echo session()->getFlashData('message') ?></p>
</div>
<?php endif; ?>

<h2 class="text-muted">Update a Job Listing</h2>
<div class="container">
    <form action="<?= base_url('edit/' . $jobModel['id']) ?>" method="POST">
    <?= csrf_field() ?>
        <div class="form-group">
            <label>Company</label>
            <input type="text" name="companyname" value="<?= $jobModel['companyname'] ?>" class="form-control input-lg
             <?php isset($errors['companyname']) ? 'is-invalide' : 'is-valid' ?>">
            <?php if (isset($errors['companyname'])) : ?>
                <p class="invalid-feedback d-block">
                    <?php echo $errors['companyname'] ?>
                </p>

            <?php endif; ?>
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
            <?php if (isset($errors['category_id'])) : ?>

<?php echo $errors['category_id'] ?>

<?php endif; ?> 
        </div>
        <div class="form-group">
            <label>Job title</label>
            <input type="text" value="<?= $jobModel['job_title'] ?>"  name="job_title" 
            class="form-control input-lg <?php isset($errors['job_title']) ? 'is-invalide' : 'is-valid' ?>">
            <?php if (isset($errors['job_title'])) : ?>
                <p class="invalid-feedback d-block">
                    <?php echo $errors['job_title'] ?>
                </p>

            <?php endif; ?>
        </div>


        <div class="form-group">
            <label>Upload Image</label>
            <input type="file" name="image" value="<?= $jobModel['image'] ?>" class="form-control input-lg
            <?php isset($errors['image']) ? 'is-invalide' : 'is-valid' ?>">
            <!-- Error -->
            <?php if (isset($errors['image'])) : ?>
                <p class="invalid-feedback d-block">
                    <?php echo $errors['image'] ?>
                </p>

            <?php endif; ?>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" value="<?= $jobModel['description'] ?>" class="form-control input-lg
             <?php isset($errors['description']) ? 'is-invalide' : 'is-valid' ?>">
             <?php if (isset($errors['description'])) : ?>
                <p class="invalid-feedback d-block">
                    <?php echo $errors['description'] ?>
                </p>

            <?php endif; ?></textarea>
        </div>
        <div class="form-group">
            <label>Location</label>
            <input type="text" value="<?= $jobModel['location'] ?>" name="location" class="form-control input-lg 
            <?php isset($errors['location']) ? 'is-invalide' : 'is-valid' ?>">
            <?php if (isset($errors['location'])) : ?>
                <p class="invalid-feedback d-block">
                    <?php echo $errors['location'] ?>
                </p>

            <?php endif; ?>
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input type="number" name="salary" value="<?= $jobModel['salary'] ?>" class="form-control input-lg
             <?php isset($errors['salary']) ? 'is-invalide' : 'is-valid' ?>">
             <?php if (isset($errors['salary'])) : ?>
                <p class="invalid-feedback d-block">
                    <?php echo $errors['salary'] ?>
                </p>

            <?php endif; ?>
        </div>
        <div class="form-group">
            <label>Contact user</label>
            <input type="text" name="contact_user" value="<?= $jobModel['contact_user'] ?>" class="form-control input-lg 
            <?php isset($errors['contact_user']) ? 'is-invalide' : 'is-valid' ?>">
            <?php if (isset($errors['contact_user'])) : ?>
                <p class="invalid-feedback d-block">
                    <?php echo $errors['contact_user'] ?>
                </p>

            <?php endif; ?>
        </div>
        <div class="form-group">
            <label>Contact Email</label>
            <input type="text" name="contact_email" value="<?= $jobModel['contact_email'] ?>" class="form-control input-lg 
            <?php isset($errors['contact_email']) ? 'is-invalide' : 'is-valid' ?>">
            <?php if (isset($errors['contact_email'])) : ?>
                <p class="invalid-feedback d-block">
                    <?php echo $errors['contact_email'] ?>
                </p>

            <?php endif; ?>
        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="Update">
    </form>
</div>

<?php $this->endSection() ?>