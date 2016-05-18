<style>
    .textArea{
        resize: vertical;
    }
</style>

<?php $__env->startSection('content'); ?>
    <div class="row margin-auto col-lg-10 col-lg-offset-1">
        <h4 class="written-data" style="text-align: center;">Update your book so it becomes easy to sell!</h4>
        <div class=" headingClass col-md-12">
            <h3>Edit your Book!</h3>
        </div>
        <div class="panelBodyClass col-md-12">
        <?php echo Form::open(['route' => ['book.update',$book->id],'method' => 'PUT']); ?>

            <br><br>
        <div class="form-group">
            <?php echo Form::label('name','Title',['class' => 'labelClass']); ?>

            <?php echo Form::text('name',$book->name,['class' => 'form-control textboxClass']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('type','Type',['class' => 'labelClass']); ?>

            <?php echo Form::select('type',['books' => 'Books','notes' => 'Notes'],$book->type,['class' => 'form-control textboxClass']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('author','Author Name',['class' => 'labelClass']); ?>

            <?php echo Form::text('author',$book->author,['class' => 'form-control textboxClass']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('publication','Publication',['class' => 'labelClass']); ?>

            <?php echo Form::text('publication',$book->publication,['class' => 'form-control textboxClass']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('publication_year','Publication Year',['class' => 'labelClass']); ?>

            <?php echo Form::number('publication_year',$book->publication_year,['class' => 'form-control textboxClass']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('branch','Branch',['class' => 'labelClass']); ?>

            <select name='branch' class='form-control textboxClass'>
                <?php foreach(App\Branch::all() as $branch): ?>
                    <option value=<?php echo e($branch->id); ?>><?php echo e($branch->name); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <?php echo Form::label('year','Course Year',['class' => 'labelClass']); ?>

            <?php echo Form::select('year',['1' => '1st','2' => '2nd','3' => '3rd','4' => '4th'],$book->year,['class' => 'form-control textboxClass']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('description','Description',['class' => 'labelClass']); ?>

            <?php echo Form::textarea('description',$book->description,['class' => 'form-control textboxClass textArea']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('price','Price',['class' => 'labelClass']); ?>

            <?php echo Form::number('price',$book->price,['class' => 'form-control textboxClass']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::submit('Update',['class' => 'form-control btn submit-button']); ?>

        </div>
        <?php echo Form::close(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>