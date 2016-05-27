<?php $__env->startSection('content'); ?>
<br><br><br><br>
<form action="<?php echo e(url('/search')); ?>" method="POST" role="form">
	<?php echo csrf_field(); ?>

	<div class="form-group">
	<input type="text" name="search" placeholder="Search Book">
	</div>
	<div class="row">
		<?php if(!empty($search)): ?>
		<?php foreach($search as $book): ?>
		<ul>
		<li><?php echo e($book->name); ?></li>
		</ul>
		<?php endforeach; ?>
		<?php endif; ?>
	</div>
	</div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>