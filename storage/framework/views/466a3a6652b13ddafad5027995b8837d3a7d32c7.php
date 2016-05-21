<?php $__env->startSection('content'); ?>

    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2" style="margin-top:20px; margin-bottom: 18px;">
        <div class="col-md-10 col-md-offset-1">
                <div class="headingClass"><h3>Edit Profile</h3></div>
                <div class="panelBodyClass" style="padding-top: 10px;">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('user/edit')); ?>">
                        <?php echo csrf_field(); ?>



                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label labelClass">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control textboxClass" name="name" value="<?php echo e(Auth::user()->name); ?>" required>

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label labelClass">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control textboxClass" name="email" value="<?php echo e(Auth::user()->email); ?>" placeholder="Enter E-Mail Address" disabled />

                                 <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                      <div class="form-group<?php echo e($errors->has('batch') ? ' has-error' : ''); ?>">
                      <label class="col-md-4 control-label labelClass ">Batch</label>
                        <div class="col-md-3">
                                <select class="form-control textboxClass"  name="batch" value="<?php echo e(old('batch')); ?>" required>
                                <option selected="selected" value="">--Batch--</option>
                                <?php for($i=\Carbon\Carbon::now()->format('Y');$i>= \Carbon\Carbon::now()->format('Y')-4;$i--): ?>
                                <option value ="<?php echo e($i); ?>"><?php echo e($i); ?>-<?php echo e($i+4); ?></option>
                                <?php endfor; ?>
                                </select>
                                 <?php if($errors->has('batch')): ?>
                                    <span class="help-block">
                                    <strong><?php echo e($errors->first('batch')); ?></strong>                                  
                                    </span>
                                <?php endif; ?> 
                            </div>
                        </div>

                            <div class="form-group<?php echo e($errors->has('contact') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label labelClass">Contact No</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control textboxClass" value="<?php echo e(Auth::user()->contact); ?>" name="contact" required>

                                <?php if($errors->has('contact')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('contact')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn submit-button">
                                    <i class="fa fa-btn fa-user"></i> Update Profile
                                </button>
                            </div>
                        </div>

                </form>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>