<?php $__env->startSection('content'); ?>
<h1>Send message</h1>
<?php echo Form::open(['route' => 'messages.store']); ?>

<div class="col-md-6">
    <!-- Subject Form Input -->
    <div class="form-group">
        <?php echo Form::label('subject', 'Subject', ['class' => 'control-label']); ?>

        <?php echo Form::text('subject', null, ['class' => 'form-control']); ?>

    </div>

    <!-- Message Form Input -->
    <div class="form-group">
        <?php echo Form::label('message', 'Message', ['class' => 'control-label']); ?>

        <?php echo Form::textarea('message', null, ['class' => 'form-control']); ?>

    </div>
     <input type="hidden" name="recipients[]" value="<?php echo $users; ?>">
    <!-- Submit Form Input -->
    <div class="form-group">
        <?php echo Form::submit('Submit', ['class' => 'btn btn-primary form-control']); ?>

    </div>
</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.messagelayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>