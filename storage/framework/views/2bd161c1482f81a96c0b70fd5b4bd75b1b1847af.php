<style>
	nav{
		position: absolute;
		top:98px;
		color:white;
		font-weight: bold;
		height:100px;
		background-color: #DE1A1A;
	}
	.top-holder{
		/*background-color: ;*/
		margin: 0;
	}
	.search-div{
/*		width:100%;
		background-color: lightslategrey;*/
		height: 80px;
	}
	.search-bar{
		border: solid 2px #DE1A1A;
		font-size: 19px;
		width:100%;
		height:50px;
		border-radius: 5px;
		margin-top: 13px;
		color:#DE1A1A;
		padding-left: 20px;
		transition: all 500ms ease-in-out;
		-webkit-transition: all 500ms ease-in-out;
		-moz-transition: all 500ms ease-in-out;
		-o-transition: all 500ms ease-in-out;
	}
	.search-bar:focus {
		box-shadow: 2px 0 2px lightskyblue,-2px 0 2px lightskyblue,0 2px 2px lightskyblue,0 -2px 2px lightskyblue	;
		transition: all 500ms ease-in-out;
		-webkit-transition: all 500ms ease-in-out;
		-moz-transition: all 500ms ease-in-out;
		-o-transition: all 500ms ease-in-out;
	}
	.search-icon{
		left:-70px;
		bottom:-40px;
		margin-top: 28px;
		position:relative;
		color: #DE1A1A;

	}


	.trending-ads{
		/*background-color: #E4FFFE;*/
		color: #DE1A1A;
		width:100%;
		border-radius: 5px;
		/*border:1px solid deepskyblue;*/
		margin-top: 20px;
		text-align: center;
		font-weight: bold;
	}
	.ad{
		background-color: #ffffff;
        /*background-color: #83FFFA;*/
		/*background: -webkit-linear-gradient(right, lightgreen , #C7FFC7);
        background: -o-linear-gradient(left, lightgreen, #C7FFC7);
        background: -moz-linear-gradient(left, lightgreen, #C7FFC7);
        background: linear-gradient(to left, lightgreen, #C7FFC7);border: 1px solid limegreen;
        border-radius: 5px;*/
		margin-top: 10px;
		text-align: left;
	}
	.ad:hover{
		/*background-color:;*/
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
		border:1px solid #DE1A1A;
	}
	.ad-data{
		color:#DE1A1A;

	}
	.ad-heads{
		text-shadow:1px 1px 2px black;
	}
	.pagination{
		color:white;
		border: solid 1px white;
		width: 90%;
		height:35px;
		line-height: 35px;
		margin-bottom: 10px;
	}
	.post{
		width:100%;
		padding-top:20px;
	}
</style>

<nav class="col-md-12 col-md-12 col-sm-12 col-xs-12">
</nav>

<?php $__env->startSection('content'); ?>
<!-- search div containing search bar and post ad button -->
<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 top-holder" style="width:100%; margin-left:0;">
	<br>
	<div class="search-div col-lg-9 col-md-9 col-sm-9 col-xs-12">
		<?php echo Form::open(['route' => 'search']); ?>

		<div class="col-md-11 col-xs-11 col-lg-11 col-sm-11">
			<input name="search" type="text" class="search-bar" placeholder="Search Your Books Here!"/>
		</div>
		<div class="col-md-1 col-xs-1 col-lg-1 col-sm-1"><span class="search-icon glyphicon glyphicon-search"></span></div>
		<br>
		<?php echo Form::close(); ?>

	</div>

	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<?php if(Auth::check()): ?>
			<center><a href="<?php echo e(url('/user/book/create')); ?>"><button type="button" class="post-ad-button">POST FREE AD!</button></a></center>
		<?php else: ?>
			<center><a class="class-a" href="#" data-toggle="modal" data-target="#loginModal "><button type="button" class="post-ad-button">POST FREE AD!</button></a></center>
		<?php endif; ?>
	</div>
</div>
<!-- /search div containing search bar and post ad button -->

<div class="row">
	<?php echo Form::open(['class' => 'form-inline','role' => 'form','id' => 'sort_form','route' => 'book_sort']); ?>

	<div class="form-group">
		<select class="form-control sort_elements" name="year">
			<option value='none'>All Years</option>
			<option value="1st">1st</option>
			<option value="2nd">2nd</option>
			<option value="3rd">3rd</option>
			<option value="4th">4th</option>
		</select>
	</div>
	<div class="form-group">
		<select class="form-control sort_elements" name="branch">
			<option value="none">All Branches</option>
			<?php foreach(App\Branch::all() as $branch): ?>
				<option value=<?php echo e($branch->id); ?>><?php echo e($branch->name); ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="form-group">
		<select class="form-control sort_elements" name="college">
			<option value="none">All Colleges</option>
			<?php foreach(App\College::all() as $college): ?>
				<option value="<?php echo e($college->id); ?>"><?php echo e($college->name); ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="form-group">
		<?php echo Form::radio('order','asc','',['class' => 'sort_elements']); ?>Ascending<br>
		<?php echo Form::radio('order','desc',true,['class' => 'sort_elements']); ?>Descending
	</div>
	<?php /*<?php echo Form::submit('post',['id' => 'sortPost']); ?>*/ ?>
	<?php echo Form::close(); ?>

</div>

	<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 trending-ads">
		<h1>TRENDING ADS</h1>
		<?php /*START AD*/ ?>
		<?php foreach($books as $book): ?>
			<a href='<?php echo e(route('show',['id' => $book->id])); ?>'>
				<div class="row ad col-lg-10 col-md-10 col-xs-12 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
					<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
						<?php if($book->book_pics->first() != null): ?>
							<div class="ad-image-holder col-md-12 col-lg-12 col-xs-12 col-sm-12">
							<img src="<?php echo e('/uploads/images/'.$book->book_pics()->first()->name.'.'.$book->book_pics()->first()->extension); ?>"
								 class="img-responsive ad-image" alt="">
							</div>
						<?php endif; ?>
					</div>
					<div class="col-md-8 col-lg-8 col-sm-8 col-xs-12">
						<h3 class="ad-heads ad-data"><?php echo e($book->name); ?></h3>
						<hr style="box-shadow:1px 1px 2px #DE1A1A;">
						<h4 class="ad-data">
							<?php if(!empty($book->branch_id) or $book->branch_id == '0'): ?>
								<?php echo e($book->branch->name); ?>

							<?php endif; ?>
							<?php if($book->year != null): ?>
								<?php echo e($book->year); ?> year
							<?php endif; ?>
						</h4>
						<h4 class="ad-data">Seller : <?php echo e($book->user->name); ?> </h4>
						<h4 class="ad-data">College : <?php echo e($book->user->college->name); ?></h4>
					</div>
				</div>
			</a>
			<br>
		<?php endforeach; ?>
		<?php /*END AD*/ ?>
		<div align="center" class="">
			<?php echo $books->links(); ?>

		</div>
	</div>
<?php if(Auth::guest()): ?>
<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12" style="margin-top:115px;">
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
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                                <a class="forgot" href="<?php echo e(url('/password/reset')); ?>"><br><br>Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
	<script type="text/javascript" src="<?php echo e(asset('js/ajax_sort_post.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('js/ajax_pagination.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>