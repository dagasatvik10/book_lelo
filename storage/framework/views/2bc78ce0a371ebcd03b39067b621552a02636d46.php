<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>
            </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/edit_profile')); ?>">
                        <?php echo csrf_field(); ?>



                        <div class="form-group<?php echo e($errors->has('first_name') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" value="<?php echo e(Auth::user()->first_name); ?>" required>

                                <?php if($errors->has('first_name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('first_name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('last_name') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" value="<?php echo e(Auth::user()->last_name); ?>" required>

                                <?php if($errors->has('last_name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('last_name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="<?php echo e(Auth::user()->email); ?>" placeholder="Enter E-Mail Address" disabled />

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
<!-- 
                    <div class="form-group<?php echo e($errors->has('branch_id') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Branch</label>

                            <div class="col-md-6">
                                <select name="branch_id" class="form-control" id="branch_id" value="<?php echo e(old('branch_id')); ?>" required>
                                <option value="">----SELECT BRANCH----</option>
                                <?php foreach($branches as $branch): ?>
                                <option value="<?php echo e($branch->id); ?>"><?php echo e($branch->name); ?></option>
                                <?php endforeach; ?>
                                </select>
                                <?php if($errors->has('branch_id')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('branch_id')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('college_id') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">College</label>

                        <div class="col-md-6">
                                <select name="college_id" class="form-control" id="college_id" value="<?php echo e(old('college_id')); ?>" required>
                                <option value="">----SELECT COLLEGE----</option>
                                <?php foreach($colleges as $college): ?>
                                <option value="<?php echo e($college->id); ?>"><?php echo e($college->name); ?></option>
                                <?php endforeach; ?>
                                </select>
                                <?php if($errors->has('college_id')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('college_id')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div> -->

                        <div class="form-group<?php echo e($errors->has('start_year') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Start year</label>

                            <div class="col-md-6">
                                <select class="form-control"  name="start_year" value="<?php echo e(old('start_year')); ?>" required>
                                <option selected="selected"><?php echo e(Auth::user()->start_year); ?></option>
                                <option value ="<?php echo e(\Carbon\Carbon::now()->format('Y')); ?>"><?php echo e(\Carbon\Carbon::now()->format('Y')); ?></option>
                                <option value ="<?php echo e(\Carbon\Carbon::now()->format('Y')-1); ?>"><?php echo e(\Carbon\Carbon::now()->format('Y')-1); ?></option>
                                <option value ="<?php echo e(\Carbon\Carbon::now()->format('Y')-2); ?>"><?php echo e(\Carbon\Carbon::now()->format('Y')-2); ?></option>
                                <option value ="<?php echo e(\Carbon\Carbon::now()->format('Y')-3); ?>"><?php echo e(\Carbon\Carbon::now()->format('Y')-3); ?></option>
                                </select>
                                <?php if($errors->has('start_year')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('start_year')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                          <div class="form-group<?php echo e($errors->has('duration') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Course Duration</label>

                            <div class="col-md-6">
                                <select class="form-control" min="1" max="4" name="duration" value="<?php echo e(old('duration')); ?>" required>
                                <option selected="selected"><?php echo e(Auth::user()->end_year-Auth::user()->start_year); ?></option>
                                <option value="1">1 year</option>
                                <option value="2">2 years</option>
                                <option value="3">3 years</option>
                                <option value="4">4 years</option>
                                </select>
                                <?php if($errors->has('duration')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('duration')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                         <div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Address</label>
                            <div class="col-md-6">
                            
                            <textarea class="form-control" value="<?php echo e(Auth::user()->address); ?>" name="address" cols="50" rows="10" id="address"><?php echo e(Auth::user()->address); ?></textarea>
                                <?php if($errors->has('address')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('address')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                            <div class="form-group<?php echo e($errors->has('contact') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Contact No</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" value="<?php echo e(Auth::user()->contact); ?>" name="contact" required>

                                <?php if($errors->has('contact')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('contact')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Join Us!
                                </button>
                            </div>
                        </div>

                </form>
                </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>