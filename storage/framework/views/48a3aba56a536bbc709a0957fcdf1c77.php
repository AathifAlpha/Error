<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Company Form - Laravel 10 CRUD Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Company</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="<?php echo e(route('companies.index')); ?>" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        <?php if(session('status')): ?>
        <div class="alert alert-success mb-1 mt-1">
            <?php echo e(session('status')); ?>

        </div>
        <?php endif; ?>
        <form action="<?php echo e(route('companies.update',$company->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="row">
                
              
               

                <!-- Responsible Person Combo Box -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Responsible Person:</strong>
                        <select name="responsible_person" class="form-control">
                            <option value="">Select Responsible Person</option>
                            <option value="Person1" <?php echo e($company->responsible_person == 'Person1' ? 'selected' : ''); ?>>Person 1</option>
                            <option value="Person2" <?php echo e($company->responsible_person == 'Person2' ? 'selected' : ''); ?>>Person 2</option>
                            <option value="Person3" <?php echo e($company->responsible_person == 'Person3' ? 'selected' : ''); ?>>Person 3</option>
                        </select>
                        <?php $__errorArgs = ['responsible_person'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <!-- Staff Name Combo Box -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Staff Name:</strong>
                        <select name="staff_name" class="form-control">
                            <option value="">Select Staff Name</option>
                            <option value="staff1@example.com" <?php echo e($company->staff_name == 'staff1@example.com' ? 'selected' : ''); ?>>Staff 1</option>
                            <option value="staff2@example.com" <?php echo e($company->staff_name == 'staff2@example.com' ? 'selected' : ''); ?>>Staff 2</option>
                            <option value="staff3@example.com" <?php echo e($company->staff_name == 'staff3@example.com' ? 'selected' : ''); ?>>Staff 3</option>
                        </select>
                        <?php $__errorArgs = ['staff_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <!-- Patient MRN Text Field -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Patient MRN:</strong>
                        <input type="text" name="patient_mrn" value="<?php echo e($company->patient_mrn); ?>" class="form-control"
                            placeholder="Patient MRN">
                        <?php $__errorArgs = ['patient_mrn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <!-- Error Categories Checkboxes -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Error Categories:</strong>
                        <div id="error_categories">
                            <label><input type="checkbox" name="error_categories[]" value="Category1"
                                    <?php echo e(in_array('Category1', $company->error_categories ?? []) ? 'checked' : ''); ?>> No error, capacity to cause error</label><br>
                            <label><input type="checkbox" name="error_categories[]" value="Category2"
                                    <?php echo e(in_array('Category2', $company->error_categories ?? []) ? 'checked' : ''); ?>> Error that did not reach the patient</label><br>
                            <label><input type="checkbox" name="error_categories[]" value="Category3"
                                    <?php echo e(in_array('Category3', $company->error_categories ?? []) ? 'checked' : ''); ?>> Error that reached patient but unlikely to cause harm (omissions considered to reach patient)</label><br>
                            <label><input type="checkbox" name="error_categories[]" value="Category4"
                                    <?php echo e(in_array('Category4', $company->error_categories ?? []) ? 'checked' : ''); ?>> Error that reached the patient and could have necessitated monitoring and/or intervention to preclude harm</label><br>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
<?php /**PATH C:\Users\pearson.vue.ALPHA\laravel-10-crud\resources\views/companies/edit.blade.php ENDPATH**/ ?>