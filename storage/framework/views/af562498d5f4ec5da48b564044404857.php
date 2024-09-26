<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Medication Error Audit Tool</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Persons</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="<?php echo e(route('companies.index')); ?>">Back</a>
                </div>
            </div>
        </div>
        <?php if(session('status')): ?>
        <div class="alert alert-success mb-1 mt-1">
            <?php echo e(session('status')); ?>

        </div>
        <?php endif; ?>
        <form action="<?php echo e(route( 'companies.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="row">
                <!-- Responsible Person Combo Box -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Responsible Person:</strong>
                        <select name="name" class="form-control">
                            <option value="">Select Responsible Person</option>
                            <option value="Person1"> ResponsiblePerson 1</option>
                            <option value="Person2">Responsible Person 2</option>
                            <option value="Person3">Responsible Person 3</option>
                        </select>
                        <?php $__errorArgs = ['name'];
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
                        <select name="email" class="form-control">
                            <option value="">Select Staff Name</option>
                            <option value="staff1@example.com">Staff 1</option>
                            <option value="staff2@example.com">Staff 2</option>
                            <option value="staff3@example.com">Staff 3</option>
                        </select>
                        <?php $__errorArgs = ['email'];
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
                        <input type="text" name="address" class="form-control" placeholder="Patient MRN">
                        <?php $__errorArgs = ['address'];
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
                            <label><input type="checkbox" name="error_categories[]" value="Category1"> No error, capacity to cause error</label><br>
                            <label><input type="checkbox" name="error_categories[]" value="Category2"> Error that did not reach the patient</label><br>
                            <label><input type="checkbox" name="error_categories[]" value="Category3"> Error that reached patient but unlikely to cause harm (omissions considered to reach patient)</label><br>
                            <label><input type="checkbox" name="error_categories[]" value="Category4"> Error that reached the patient and could have necessitated monitoring and/or intervention to preclude harm</label><br>
                            <label><input type="checkbox" name="error_categories[]" value="Category5"> Error that could have caused temporary harmr</label><br>
                            <label><input type="checkbox" name="error_categories[]" value="Category6"> Error that could have caused temporary harm requiring initial or prolonged hospitalization</label><br>
                            <label><input type="checkbox" name="error_categories[]" value="Category7"> Error that could have resulted in permanent harm</label><br>
                            <label><input type="checkbox" name="error_categories[]" value="Category8"> Error that could have necessitated intervention to sustain life</label><br>
                            <label><input type="checkbox" name="error_categories[]" value="Category9"> Error that could have resulted in death</label><br>
                        </div>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
<?php /**PATH C:\Users\pearson.vue.ALPHA\laravel-10-crud\resources\views/companies/create.blade.php ENDPATH**/ ?>