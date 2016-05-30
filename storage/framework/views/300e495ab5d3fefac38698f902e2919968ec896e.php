<style>
	@keyframes  spin {
		from {
			transform: rotate(0deg);
			/*left: -50%;*/
		}
		to {
			transform: rotate(1079deg);
			/*left: 50%;*/
		}
	}
	nav{
		color:white;
		font-weight: bold;
		height:300px;
/*		background-color: #FF9900;
*/		width: 100%;
		border-bottom:2px solid black;
		/*box-shadow: 0px 4px 4px black;*/

	}
	.circular{
		background-color: inherit;
		position: relative;
		top:-23px;
		height: 45px;
		width: 45px;
		border-radius: 23px;
		border-top: 5px solid #DE1A1A;
		animation: spin 1s linear infinite ;
		z-index: 9999;
	}

	.top-holder{
		background-color: inherit; /*#02097C;*/
		margin: 0;
		height: 100%;
	}
	.max-width{
		max-width: 100%;
		width: 100%;
	}
	.trending-ads-holder{
		/*padding-bottom: 20px;
		height: 600px;
		background-color: red;*/
	}
	.trending-ads{
		/*background-color: #E4FFFE;*/
		color: #000;
		width:100%;
		border-radius: 5px;
		/*text-shadow: 2px 0px 4px black,-2px 0px 4px black,0px 2px 4px black,0px -2px 4px black;*/
		/*border:1px solid deepskyblue;*/
		margin-top: 20px;
		margin-left: 10px;
		margin-bottom: 20px;
		margin-right: -10px;
		text-align: center;
		font-weight: bold;
	}
	.ad{
		background-color: inherit;
		/*background: -webkit-linear-gradient(right, #FDDFAE , #FFF);*/
        /*background: -o-linear-gradient(left, #FDDFAE, #FFF);*/
        /*background: -moz-linear-gradient(left, #FDDFAE, #FFF);*/
        /*background: linear-gradient(to left, #FDDFAE, #FFF);*/
		text-shadow: none;
		/*border: 1px solid #ff9900;*/
		margin-top: 10px;
		text-align: left;
	}
	.ad:hover{
		background-color:inherit;
		box-shadow: 2px 0px 4px seagreen,-2px 0px 4px seagreen,0px 2px 4px seagreen,0px -2px 4px seagreen;
		/*background: -webkit-linear-gradient(left, #FDDFAE , #FFF);*/
		/*background: -o-linear-gradient(right, #FDDFAE, #FFF);*/
		/*background: -moz-linear-gradient(right, #FDDFAE, #FFF);*/
		/*background: linear-gradient(to right, #FDDFAE, #FFF);*/
	}
	.ad-image-holder{
		text-align: center;
		width: 100%;
		height:135px;
		overflow: hidden;
		margin-top: 20px;
		margin-bottom: 20px;
	}
	.ad-image{
		border-radius: 5px;
		max-width:100%;
		max-height:100%;
		border:1px solid #03085D;
	}
	.ad-data{
		color:;
		font-weight:bold;

	}
	.ad-heads{
		color:midnightblue;
		text-shadow:1px 1px 2px #000;
	}
	.pagination > a{
		color:inherit;
		border: solid 1px #3a5795; /*#29407C;*/
		z-index: -1;
	}
	#pagination-id{
		color:#f9f9f9;
	}
	.post{
		width:100%;
		padding-top:20px;
	}
</style>



<?php $__env->startSection('content'); ?>

		<!-- search div containing search bar and post ad button -->
<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 top-holder" style="width:100%; margin-left:0; padding-bottom: 10px;">
	<br>
	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<?php echo Form::open(['class' => 'form-inline','role' => 'form','id' => 'sort_form','route' => 'book_sort']); ?>

			<div class="col-md-12 ad-data" style="color:black;">Find your Books/Notes here!</div>
			<div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<select class="form-control sort_elements textboxClassSort max-width" name="year" style="width: 100%;">
					<option value='none'>Year</option>
					<option value="1">1st</option>
					<option value="2">2nd</option>
					<option value="3">3rd</option>
					<option value="4">4th</option>
				</select>
			</div>
			<div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<select class="form-control sort_elements textboxClassSort max-width" name="branch">
					<option value="none">Branch</option>
					<?php foreach(App\Branch::all() as $branch): ?>
						<option value=<?php echo e($branch->id); ?>><?php echo e($branch->name); ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<select class="form-control sort_elements textboxClassSort max-width" name="college">
					<option value="none">College</option>
					<?php foreach(App\College::all() as $college): ?>
						<option value="<?php echo e($college->id); ?>"><?php echo e($college->name); ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<br><br>
			<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div style="color:black;">
					Sort by : &nbsp;
				<?php echo Form::radio('order','asc','',['class' => 'sort_elements']); ?> Ascending
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php echo Form::radio('order','desc',true,['class' => 'sort_elements']); ?> Descending
				</div>
			</div>
			<?php /*<?php echo Form::submit('post'); ?>*/ ?>
			<?php echo Form::close(); ?>


		</div>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<?php if(Auth::check()): ?>
			<center><a href="<?php echo e(url('/user/book/create')); ?>"><button type="button" class="post-ad-button">Sell A Book!</button></a></center>
		<?php else: ?>
			<center><a class="class-a" href="#" data-toggle="modal" data-target="#loginModal"><button type="button" class="post-ad-button">SELL A BOOK!</button></a></center>
		<?php endif; ?>
	</div>
	<br><br>
	<br><br>

</div>
<div class="trending-ads-holder">
	<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 trending-ads animated fadeInRight">
		<?php /*<h1>TRENDING ADS</h1>*/ ?>
		<?php /*<hr>*/ ?>
		<?php /*START AD*/ ?>
		<?php if(count($books)>0): ?>
		<?php foreach($books as $book): ?>
		<div>
			<a href='<?php echo e(route('show',['id' => $book->id])); ?>'>
				<div class="row ad col-lg-12 col-md-12 col-xs-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
						<?php if($book->book_pics->first() != null): ?>
							<div class="ad-image-holder col-md-12 col-lg-12 col-xs-12 col-sm-12">
							<img src="<?php echo e(asset('uploads/images/'.$book->book_pics()->first()->name.'.'.$book->book_pics()->first()->extension)); ?>"
								 class="img-responsive ad-image" alt="">
							</div>
						<?php else: ?>
						<div class="ad-image-holder col-md-12 col-lg-12 col-xs-12 col-sm-12">
							<img src="<?php echo e(asset('uploads/notfound.png')); ?>"
								 class="img-responsive ad-image" alt="">
							</div>
						<?php endif; ?>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
						<h3 class="ad-heads ad-data"><?php echo e($book->name); ?><font style="font-size:18px; color:black; text-shadow: none;"> &nbsp;By <?php echo e($book->author); ?></font></h3>
						<hr class="hr">
						<h4 class="ad-data">
							<?php if(!empty($book->branch_id) or $book->branch_id == '0'): ?>
								<?php echo e($book->branch->name); ?>

							<?php endif; ?>
							<?php if($book->year != null): ?>
								
                                <?php if($book->year==1): ?>
                                <font class="book-data" style="font-size:18px;"><br>For 1st Year</font>
                                <?php endif; ?>
                                <?php if($book->year==2): ?>
                                <font class="book-data" style="font-size:18px;"><br>For 2nd Year</font>
                                <?php endif; ?>
                                <?php if($book->year==3): ?>
                                <font class="book-data" style="font-size:18px;"><br>For 3rd Year</font>
                                <?php endif; ?>
                                <?php if($book->year==4): ?>
                                <font class="book-data" style="font-size:18px;"><br>For 4th Year</font>
                                <?php endif; ?>
							<?php endif; ?>
						</h4>
						<h4 class="ad-data">Seller : <?php echo e($book->user->name); ?> </h4>
						<h4 class="ad-data">College : <?php echo e($book->user->college->name); ?></h4>
					</div>
				</div>
			</a>
		</div>
		<?php endforeach; ?>
		<?php else: ?>
		<div class="row ad col-lg-12 col-md-12 col-xs-12 col-sm-12">
		<h2>No Results Found</h2>	
		</div>
		<?php endif; ?>
		<?php /*END AD*/ ?>
		<div style="text-shadow: none;">
			<div id="pagination-id">
				<div align="center">
					<?php echo $books->links(); ?>

				</div>
			</div>
			<br><br>
		</div>
	</div>

<?php if(Auth::guest()): ?>
<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 animated zoomInLeft" style="margin-top:60px;">
	<h4 class="ad-data" style="text-align: center;">Log in now to enjoy the awesome features!</h4>
	<div class="headingClass">
		Login
	</div>
  <div class="panel-body panelBodyClass">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label class="col-md-6 labelClass">E-Mail Address</label>

                            <div class="col-md-12">
                                <input type="email" class="form-control textboxClass" name="email" value="<?php echo e(old('email')); ?>">
								<?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong class="requiredClass"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;<?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label class="col-md-6 labelClass">Password</label>

                            <div class="col-md-12">
                                <input type="password" class="form-control textboxClass" name="password">

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong class="requiredClass"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;<?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="checkbox">
                                    <label class="labelClass">
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-1">
                                <button type="submit" class="btn submit-button">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <?php /* <a class="forgot" href="<?php echo e(url('/password/reset')); ?>"><br><br>Forgot Your Password?</a> */ ?>
                            </div>
                        </div>
                    </form>
                </div>
</div>
<?php else: ?>
<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12" style="margin-top:115px;">
<i style="font-size:18;color:darkblue;">Can't find your book? Fill up this form we'll try to get it.</i>
	<div class="headingClass">
		Get me this Book
	</div>
  <div class="panel-body panelBodyClass">
  <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/suggestion')); ?>">
   <?php echo csrf_field(); ?>

  <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
  	<label class="col-md-6 labelClass">Book Name</label>
        <div class="col-md-12">
         <input type="text" class="form-control textboxClass" name="name" value="<?php echo e(old('name')); ?>">
           <?php if($errors->has('name')): ?>
              <span class="help-block">
                <strong class="requiredClass"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;<?php echo e($errors->first('name')); ?></strong>
              </span>
          <?php endif; ?>
        </div>
  </div>
  <div class="form-group<?php echo e($errors->has('author') ? ' has-error' : ''); ?>">
  	<label class="col-md-6 labelClass">Author</label>
        <div class="col-md-12">
         <input type="text" class="form-control textboxClass" name="author" value="<?php echo e(old('author')); ?>">
           <?php if($errors->has('author')): ?>
              <span class="help-block">
                <strong class="requiredClass"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;<?php echo e($errors->first('author')); ?></strong>
              </span>
          <?php endif; ?>
        </div>
  </div>

   <div class="form-group">
     <div class="col-md-6 col-md-offset-1">
        <button type="submit" class="btn submit-button">
           <i class="fa fa-btn fa-sign-in"></i> Submit
        </button>
     </div>
</div>
  </form>
  </div>
 </div>
 <?php endif; ?>
 </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
	<script type="text/javascript" src="<?php echo e(asset('js/ajax_sort_post.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('js/ajax_pagination.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>