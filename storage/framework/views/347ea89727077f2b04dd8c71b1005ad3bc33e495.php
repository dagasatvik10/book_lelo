<?php $__env->startSection('content'); ?>
    <div class="row" style="margin-top:50px;">
        <div class="col-md-8">
            <div class="written-data" style="text-align: center; font-size: 20px;">Register free!</div>
            <br>
            <div class="panel panel-default">
                <div class="headingClass">Register</div>
                <div class="panel-body panelBodyClass" style="padding-top: 40px">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/register')); ?>">
                        <?php echo csrf_field(); ?>


                      <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label labelClass">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control textboxClass" name="name" value="<?php echo e(old('name')); ?>" placeholder="Should Have Atleast 2 characters">

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;<?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label labelClass">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control textboxClass" name="email" value="<?php echo e(old('email')); ?>" placeholder="Enter E-Mail Address" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;<?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label labelClass">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control textboxClass" name="password" placeholder="Should contain atleast 6 characters" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;<?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label labelClass">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control textboxClass" name="password_confirmation" placeholder="Re-Enter Password" required>

                                <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;<?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    <div class="form-group<?php echo e($errors->has('branch_id') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label labelClass">Branch</label>

                            <div class="col-md-6">
                                <select name="branch_id" class="form-control textboxClass" id="branch_id" value="<?php echo e(old('branch_id')); ?>" required>
                                <option value="">----SELECT BRANCH----</option>

                                <?php foreach(\App\Branch::all() as $branch): ?>
                                <option value="<?php echo e($branch->id); ?>"><?php echo e($branch->name); ?></option>
                                <?php endforeach; ?>
                                </select>
                                <?php if($errors->has('branch_id')): ?>
                                    <span class="help-block">
                                        <strong><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;<?php echo e($errors->first('branch_id')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('college_id') ? ' has-error' : ''); ?>">
                        <label class="col-md-4 control-label labelClass">College</label>
                        <div class="col-md-6">
                                <select name="college_id" class="form-control textboxClass" id="college_id" value="<?php echo e(old('college_id')); ?>" required>
                                <option value="">----SELECT COLLEGE----</option>
                                <?php foreach(\App\College::all() as $college): ?>
                                <option value="<?php echo e($college->id); ?>"><?php echo e($college->name); ?></option>
                                <?php endforeach; ?>
                                </select>
                                <?php if($errors->has('college_id')): ?>
                                    <span class="help-block">
                                        <strong><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;<?php echo e($errors->first('college_id')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                      <div class="form-group<?php echo e($errors->has('batch') ? ' has-error' : ''); ?>">
                      <label class="col-md-4 control-label labelClass">Select Batch</label>
                        <div class="col-md-3">
                                <select class="form-control textboxClass"  name="batch" value="<?php echo e(old('batch')); ?>" required>
                                <option selected="selected">--Batch--</option>
                                <?php for($i=\Carbon\Carbon::now()->format('Y');$i>= \Carbon\Carbon::now()->format('Y')-4;$i--): ?>
                                <option value ="<?php echo e($i); ?>"><?php echo e($i); ?>-<?php echo e($i+4); ?></option>
                                <?php endfor; ?>
                                </select>
                                <?php if($errors->has('batch')): ?>
                                    <span class="help-block">
                                    <strong><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-exclamation-sign"></span><?php echo e($errors->first('batch')); ?></strong>                                    </span>
                                <?php endif; ?>
                        </div>
                    </div>

                            <div class="form-group<?php echo e($errors->has('contact') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label labelClass">Contact No</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control textboxClass" placeholder="Enter your contact number" name="contact" required>

                                <?php if($errors->has('contact')): ?>
                                    <span class="help-block">
                                        <strong><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;<?php echo e($errors->first('contact')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn submit-button">
                                    <i class="fa fa-btn fa-user"></i>Join Us!
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <center><a href="<?php echo e(url('/user/book/create')); ?>"><button type="button" class="post-ad-button">POST FREE AD!</button></a></center>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>