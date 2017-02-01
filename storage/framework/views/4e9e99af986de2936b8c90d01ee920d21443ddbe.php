<?php $__env->startSection('content'); ?>
    <div class="row" style="margin-top:50px;">
        <div class="col-md-8 col-md-offset-2">
            <div class="written-data" style="text-align: center; font-size: 20px;">Register free!</div>
            <br>
            <div class="panel panel-default">
                <div class="headingClass">We need a few more details to log you in..</div>
                <div class="panel-body panelBodyClass" style="padding-top: 40px">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('auth/complete_registration_post')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                              <label class="col-md-4 control-label labelClass">Name</label>

                              <div class="col-md-6">
                                  <input type="text" class="form-control textboxClass" name="name" value="<?php echo e($user->name); ?>" placeholder="Should Have Atleast 2 characters" readonly>
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
                                  <input type="email" class="form-control textboxClass" name="email" value="<?php echo e($user->email); ?>" placeholder="Enter E-Mail Address" readonly>

                                  <?php if($errors->has('email')): ?>
                                      <span class="help-block">
                                          <strong><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;<?php echo e($errors->first('email')); ?></strong>
                                      </span>
                                  <?php endif; ?>
                              </div>
                          </div>

                    <div class="form-group<?php echo e($errors->has('branch_id') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label labelClass">Branch</label>

                            <div class="col-md-6">
                                <select name="branch_id" class="form-control textboxClass" id="branch_id" value="<?php echo e(old('branch_id')); ?>" required>
                                <option value="">-- Branch --</option>

                                <?php foreach(\App\Branch::all() as $branch): ?>
                                <?php if(($branch->id!=50)&&($branch->id!=60)): ?>
                                <option value="<?php echo e($branch->id); ?>"><?php echo e($branch->name); ?></option>
                                <?php endif; ?>
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
                                <option value="">-- College --</option>
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
                                <option selected="selected">-- Batch --</option>
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
                            <label class="col-md-4 control-label labelClass">Contact No<font color="red">*</font></label>

                            <div class="col-md-6">
                                <input type="text" class="form-control textboxClass" placeholder="Enter your contact number" name="contact" required>
                                <p class="col-md-offset-1"style="color:red; font-size:13px;">Contact No. is not a compulsory field although it is recommended.</p>
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
                                    <i class="fa fa-btn fa-user"></i> Join Us!
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>