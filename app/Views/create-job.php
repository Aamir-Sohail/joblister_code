<?= $this->extend('Template/base') ?>
<?php

$this->section('title') ?>
Insertion
<?php $this->endSection() ?>

<?php $this->section('content') ?>

<?php if (session()->getFlashData('message') != null) : ?>
    <div class="alert alert-success">
        <p><?php echo session()->getFlashData('message') ?></p>
    </div>
<?php endif; ?>
<?php $errors = session()->getFlashData('errors'); ?>


<h2 class="text-muted">Create a Job Listing</h2>
<div class="container">
    <form action="<?= base_url('/insert') ?>" method="post">
        <?= csrf_field() ?>

        <div class="form-group">
            <label>Company Name</label>
            <input type="text" name="companyname" value="<?= old('companyname') ?>" class="form-control input-lg
             <?php $errors != null and  isset($errors['companyname']) ? 'is-invalide' : 'is-valid' ?>">
            <?php if ($errors != null and isset($errors['companyname'])) : ?>
                <p class="invalid-feedback">
                    <?php $errors['companyname'] ?>
                </p>

            <?php endif; ?>
        </div>
        <div class="form-group">
            <label>Category</label>
            <select type="text" name="category_id" value="<?= old('category_id') ?>" class="form-control input-lg 
            <?php $errors != null and  isset($errors['category_id'])?>
            <?php if ($errors != null and isset($errors['category_id'])) : ?>
                <p class ="invalid-feedback">
                <?php $errors['category_id'] ?>
            </p>                
            <?php endif; ?>                                                                                                     ? 'is-invalide' : 'is-valid' ?>

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
            <input type="text" name="job_title" value="<?= old('job_title') ?>" class="form-control input-lg
            <?php $errors != null and  isset($errors['job_title'])? 'is-invalide' : 'is-valid' ?>">
            <?php if ($errors != null and isset($errors['job_title'])) : ?>
                <p class ="invalid-feedback">
                <?php $errors['job_title'] ?>
            </p>                
            <?php endif; ?>  
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" value="<?= old('description') ?>" class="form-control input-lg
             <?php $errors != null and  isset($errors['description']) ? 'is-invalide' : 'is-valid' ?>"></textarea>
             <?php if ($errors != null and isset($errors['description'])) : ?>
                <p class ="invalid-feedback">
                <?php $errors['description'] ?>
            </p>                
            <?php endif; ?>  
        </div>
        <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" value="<?= old('location') ?>" class="form-control input-lg 
            <?php $errors != null and  isset($errors['location']) ? 'is-invalide' : 'is-valid' ?>
            <?php if ($errors != null and isset($errors['location'])) : ?>
                <p class ="invalid-feedback">
                <?php $errors['location'] ?>
            </p>                
            <?php endif; ?>  
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input type="number" name="salary" value="<?= old('salary') ?>" class="form-control input-lg
             <?php $errors != null and  isset($errors['salary']) ? 'is-invalide' : 'is-valid' ?>">
             <?php if ($errors != null and isset($errors['salary'])) : ?>
                <p class ="invalid-feedback">
                <?php $errors['salary'] ?>
            </p>                
            <?php endif; ?>  
        </div>
        <div class="form-group">
            <label>Contact user</label>
            <input type="text" name="contact_user" value="<?= old('contact_user') ?>" class="form-control input-lg 
            <?php $errors != null and  isset($errors['contact_user'])? 'is-invalide' : 'is-valid' ?>">
            <?php if ($errors != null and isset($errors['contact_user'])) : ?>
                <p class ="invalid-feedback">
                <?php $errors['contact_user'] ?>
            </p>                
            <?php endif; ?>  
                                                                                                                     
        </div>
        <div class="form-group">
            <label>Contact Email</label>
            <input type="email" name="contact_email" value="<?= old('contact_email') ?>" class="form-control input-lg 
            <?php $errors != null and  isset($errors['contact_email']) ? 'is-invalide' : 'is-valid' ?>">
            <?php if ($errors != null and isset($errors['contact_email'])) : ?>
                <p class ="invalid-feedback">
                <?php $errors['contact_email'] ?>
            </p>                
            <?php endif; ?>  
        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </form>
</div>

<?php $this->endSection() ?>