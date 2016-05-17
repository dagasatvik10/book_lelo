<?php $__env->startSection('content'); ?>
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
        <div class="page-header headingClass col-md-12">
        <h3>Post Ad for Free!</h3>
        <br>
         <?php if($errors->any()): ?>
        <ul>
        <?php foreach($errors->all() as $error): ?>
        <li style="list-style:none; color:red; font-size:16px; font-weight:none;"><?php echo $error; ?></li>
        <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        </div>
        <div class="panelBodyClass col-md-12"  style="margin-top:-20px;"> 
            <?php echo Form::open(['action' => 'BookController@store', 'method' => 'POST','files' => true]); ?>

            <div class="form-group">
                <div class="col-md-4"><?php echo Form::label('name','Title',['class' => 'labelClass']); ?></div>
                <div class="col-md-10"><?php echo Form::text('name','',['class' => 'form-control textboxClass', 'style' => '']); ?></div>
            </div>
            <div class="form-group">
                <div class="col-md-4"><?php echo Form::label('type','Type', ['class' => 'labelClass']); ?></div>
                <div class="col-md-10"><?php echo Form::select('type',['books' => 'Books','notes' => 'Notes'],'books',['class' => 'form-control textboxClass']); ?></div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                <?php echo Form::label('name','Pics', ['class' => 'labelClass']); ?>

                </div>
                <div class="col-md-10">
                <?php for($i=1;$i<=6;$i++): ?>
                    <?php echo Form::file('pic'.$i); ?>

                <?php endfor; ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4"><?php echo Form::label('author','Author Name',['class' => 'labelClass']); ?></div>
                <div class="col-md-10"><?php echo Form::text('author','',['class' => 'form-control textboxClass']); ?></div>
            </div>
            <div class="form-group">
                <div class="col-md-4"><?php echo Form::label('publication','Publication',['class' => 'labelClass']); ?></div>
                <div class="col-md-10"><?php echo Form::text('publication','',['class' => 'form-control textboxClass']); ?></div>
            </div>
            <div class="form-group">
                <div class="col-md-4"><?php echo Form::label('publication_year','Publication Year',['class' => 'labelClass']); ?></div>
                <div class="col-md-10"><?php echo Form::text('publication_year','',['class' => 'form-control textboxClass']); ?></div>
            </div>
            <div class="form-group">
                <div class="col-md-4"><?php echo Form::label('branch','Branch',['class' => 'labelClass']); ?></div>
                <div class="col-md-10">
                    <select name='branch' class='form-control textboxClass'>
                        <?php foreach(App\Branch::all() as $branch): ?>
                        <option value=<?php echo e($branch->id); ?>><?php echo e($branch->name); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4"><?php echo Form::label('year','Course Year',['class' => 'labelClass']); ?></div>
                <div class="col-md-10"><?php echo Form::select('year',['1st','2nd','3rd','4th'],['class' => 'form-control textboxClass']); ?></div>
            </div>
            <div class="form-group">
                <div class="col-md-4"><?php echo Form::label('no_of_pages','No. of Pages',['class' => 'labelClass']); ?></div>
                <div class="col-md-10"><?php echo Form::number('no_of_pages','',['class' => 'form-control textboxClass']); ?></div>
            </div>
            <div class="form-group">
                <div class="col-md-4"><?php echo Form::label('description','Description',['class' => 'labelClass']); ?></div>
                <div class="col-md-10"><?php echo Form::textarea('description','',['class' => 'form-control textboxClass']); ?></div>
            </div>
            <div class="form-group">
                <div class="col-md-4"><?php echo Form::label('price','Price',['class' => 'labelClass']); ?></div>
                <div class="col-md-10"><?php echo Form::number('price','',['class' => 'form-control textboxClass']); ?></div>
            </div>
            <div class="form-group">
                <div class="col-md-4 col-md-offset-2"><br><?php echo Form::submit('Post Ad!',['class' => 'form-control textboxClass submit-button']); ?><br></div>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>