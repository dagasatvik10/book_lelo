<?php $__env->startSection('content'); ?>
<div class="fuc">
    
<h1>Send message</h1>
<?php echo Form::open(['route' => 'messages.store']); ?>

<div class="col-md-6">
    <!-- Subject Form Input -->
    <div class="form-group">
        <?php echo Form::label('subject', 'Subject', ['class' => 'labelClass control-label']); ?>

        <?php echo Form::text('subject', null, ['class' => 'textboxClass form-control']); ?>

    </div>

    <!-- Message Form Input -->
    <div class="form-group">
        <?php echo Form::label('message', 'Message', ['class' => 'labelClass control-label']); ?>

        <?php echo Form::textarea('message', null, ['class' => 'textboxClass form-control']); ?>

    </div>
     <input type="hidden" name="recipients[]" value="<?php echo $users; ?>">
    <!-- Submit Form Input -->
    <div class="form-group">
        <?php echo Form::submit('Submit', ['class' => 'btn submit-button form-control']); ?>

    </div>
</div>

</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>