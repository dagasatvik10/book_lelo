<style>
    .myBook-holder{
        background-color: white;
        border: 1px solid #03085D;
        text-align: center;
    }
    .myBook-holder:hover{
        background-color: #f5f5f5;
    }
    .image-holder{
        margin: 10px;
        height: 160px;
        width: 120px;
    }
</style>

<?php $__env->startSection('content'); ?>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 margin-auto">
        <div class="headingClass">
            <h3 class="text-center">My Books</h3>
        </div>
        <div class="panelBodyClass">
        <?php foreach($books as $book): ?>
            <a class="" href=<?php echo e(route('show',['id' => $book->id])); ?>>
                <div class="myBook-holder col-lg-12">
                    <div class="col-lg-5 image-holder">
                        <?php if($book->book_pics->first() != null): ?>
							    <img class="img-thumbnail img-slider"
								 src=<?php echo e('/uploads/images/'.$book->book_pics->first()->name.'.'.$book->book_pics->first()->extension); ?>>
						<?php endif; ?>
                    </div>
                    <div class="col-lg-5">
                        <div class="written-data">Name : <?php echo e($book->name); ?></div>
                        <div class="">
							<?php if(!empty($book->branch_id) or $book->branch_id == '0'): ?>
								for <?php echo e($book->branch->name); ?>

							<?php endif; ?>
							<?php if($book->year != null): ?>
								of <?php echo e($book->year); ?> year
							<?php endif; ?>
						</div>
					</div>
                    <br><br><br>
                    <div class="col-lg-2">
                        <font style="font-size: 28px;"><i class="fa fa-inr"></i> <?php echo e($book->price); ?></font>
                    </div>
                    <div class=" col-lg-4">
                            <a class="btn btn-primary" style="float: left;" href='<?php echo e(route('book.edit',['id' => $book->id])); ?>'><i class="fa fa-pencil"></i> Edit</a>
                            <a class="btn submit-button" style="float: right;" href='<?php echo e(route('book.delete',['id' => $book->id])); ?>'
                               data-method="delete" data-token="<?php echo e(csrf_token()); ?>" data-confirm="Are you sure?"><i class="fa fa-trash-o"></i> Delete
                            </a>
                    </div>
                    <div class="col-lg-12">
                    <p><font class="written-data" style="font-size:16px;"><br><?php echo e($book->description); ?></font>
                    </p>
                    </div>

                </div>

            </a>


            <?php endforeach; ?>
        </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript" src='<?php echo e(asset('js/laravel.js')); ?>'></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>