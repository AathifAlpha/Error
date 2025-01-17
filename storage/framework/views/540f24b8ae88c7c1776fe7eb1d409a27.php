<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Medication Error Audit Tool</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Medication Error Audit Tool</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="<?php echo e(route('companies.create')); ?>"> Choose</a>
                </div>
            </div>
        </div>
        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e($message); ?></p>
            </div>
        <?php endif; ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Responsible Person</th>
                    <th>Staff Name</th>
                    <th>Pateint MRN</th>
                    <th>Error Categories</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($company->id); ?></td>
                        <td><?php echo e($company->responsible); ?></td>
                        <td><?php echo e($company->staff); ?></td>
                        <td><?php echo e($company->pateint); ?></td>
                        <td><?php echo e($company->error); ?></td>
                        <td>
                            <form action="<?php echo e(route('companies.destroy',$company->id)); ?>" method="Post">
                                <a class="btn btn-primary" href="<?php echo e(route('companies.edit',$company->id)); ?>">Edit</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo $companies->links(); ?>

    </div>
</body>
</html><?php /**PATH C:\Users\pearson.vue.ALPHA\laravel-10-crud\resources\views/companies/index.blade.php ENDPATH**/ ?>