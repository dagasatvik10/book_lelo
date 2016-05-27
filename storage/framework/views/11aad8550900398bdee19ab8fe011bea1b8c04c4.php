<?php /*<?php $__env->startSection('nav-bar'); ?>*/ ?>
<?php /*<li><a href = "<?php echo e(url('edit_profile')); ?>">Edit Profile</a></li>*/ ?>
<?php /*<?php $__env->stopSection(); ?>*/ ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <?php foreach($books as $book): ?>
                        <li>
                            <?php echo e($book->name); ?> &nbsp
                            <a class="btn btn-primary" href=<?php echo e(route('show',['id' => $book->id])); ?>>
                               show
                            </a>
                        </li>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>