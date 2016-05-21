<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BookLeLow</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/fontawesome/font-awesome.min.css" />
	<script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Overlock">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC">
    <?php /*<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/ ?>
    <?php /*<?php echo HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'); ?>*/ ?>


            <!--     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
<style type="text/css">
    body
	{
		margin: 0;
		/*font-family: 'Candara';*/
        /*font-family: "proxima-nova-soft", "Proxima Nova Soft", Helvetica, Arial, sans-serif;*/
        /*font-family: 'Tangerine', serif;*/
        font-family: 'Overlock', serif;
        /*font-family: 'Maven Pro', serif;*/
        /*font-family: 'Courgette', serif;*/
        /*font-family: 'Montserrat', serif;*/
        font-size: 18px;
        min-height: 100%;
	}
	.container
	{
		margin: 0px;
		width:100%;
        /*background-color: white;*/
        background: url("../uploads/bg-1.jpg");
        background-repeat:none;
        background-size: cover;
        /*background: -webkit-linear-gradient(top, deepskyblue, #19F39A );*/
        /*background: -o-linear-gradient(bottom, deepskyblue, #19F39A);*/
        /*background: -moz-linear-gradient(bottom, deepskyblue, #19F39A );*/
        /*background: linear-gradient(to right bottom, #03085D, deepskyblue 70%, #19F39A);*/
        position:absolute;
        top: 110px;
        padding-bottom: 15px;
	}
	.main-container{
		background:inherit;
        /*border-radius: 40px 40px 10px 10px;*/
/*        margin-top: 8px;
*/        padding-bottom: 10px;
        min-height: 350px;
/*        box-shadow: 3px 3px 3px gray,-3px 3px 3px gray;
        border:1px solid gray;
		border: 2px solid lime;
*/	}
    .margin-auto{
        margin-top:20px;
        margin-bottom: 20px;
    }
    .logo{
        float: left;
        height: 147px;
        width:147px;
        margin-left: -30px;
        z-index: 9999;
        text-align: right;
    }
    .logo2{
        float: left;
        height: 107px;
        width:107px;
        margin-left: -30px;
        z-index: 9999;
        text-align: right;
    }
    .title{
        text-align: left;
        margin-left: -60px;
        float: left;
        margin-top: 20px;
        z-index: 9999;

    }
    .title2{
        text-align: left;
        margin-left: -50px;
        float: left;
        margin-top: 5px;
        z-index: 9999;

    }
    .image-logo{
        max-height: 100%;
        max-width: 100%;
    }
	.nav-bar{
		background-color: seagreen;
        /*background: -webkit-linear-gradient(left, deepskyblue,deepskyblue, #10A787 50%);*/
        /*background: -o-linear-gradient(right, deepskyblue,deepskyblue, #10A787 50%);*/
        /*background: -moz-linear-gradient(right, deepskyblue,deepskyblue, #10A787 50%);*/
        /*background: linear-gradient(to right, deepskyblue,deepskyblue, #10A787 50%);*/
		border-radius: 0;
		border:0;
        box-sizing: border-box;
        -webkit-transition: top 0.6s;
        -moz-transition: top 0.6s;
        transition: top 0.6s;
		height: 107px;
        box-shadow: 0 4px 4px #aaa;
        }



    .book{
        color: deepskyblue; 
        font-weight: bold;
        font-size: 40px;
/*        text-transform: uppercase;
*/        text-shadow: 2px 2px 2px #aaa;
        /*font-family: 'Tangerine', serif;*/
    }
    
    .smiley{
        color:greenyellow;
        font-size: 40px;
/*        text-transform: uppercase;
*/        text-shadow: 2px 2px 2px #aaa;
        /*font-family: 'Tangerine', serif;*/
    }

    .lelo{
        color: orange;
/*        text-transform: uppercase;
*/        text-shadow: 2px 2px 2px #aaa;
        font-weight: bold;
        font-size: 40px;
        /*font-family: 'Tangerine', serif;*/
    }
    .search-div{
        /*width:100%;*/
        background-color: seagreen;
    }
    .search-bar{
        border: solid 2px inherit;
        font-size: 19px;
        width:100%;
        margin-left:0px;
        height:50px;
        border-radius: 5px;
        margin-top: 28px;
        color:deepskyblue;
        padding-left: 20px;
        float: left;
        transition: all 500ms ease-in-out;
        -webkit-transition: all 500ms ease-in-out;
        -moz-transition: all 500ms ease-in-out;
        -o-transition: all 500ms ease-in-out;
    }
    .search-icon{
        left:-70px;
        bottom:0px;
        margin-top: 43px;
        position:relative;
        color: seagreen;
    }
	
/*    li.dropdown-list:hover{
        background-color: lime;
        border: 1px solid green;
    }*/
    .hr{border:1px solid #03085D;}

    .right-nav{
        padding-top: 35px;
    }
    #list, #list:focus, #list:active, #list:before, #list:after{
        background-color: seagreen;
        transition: background-color 400ms ease-out;
        -webkit-transition: background-color 400ms ease-out;
        -moz-transition: background-color 400ms ease-out;
        -o-transition: background-color 400ms ease-out;
    }
    #list a.dropdown-toggle:hover, #list a.class-a:hover{
        background-color: inherit;
        /*border-bottom: 4px solid #DE1A1A;  !*32F0ED*!*/
        transition:background-color 400ms linear;
        -webkit-transition:background-color 400ms linear;
        -moz-transition:background-color 400ms linear;
        -o-transition:background-color 400ms linear;
        border-radius: 7px 7px 0 0;
    }
    .dropdown-menu{
        background-color: seagreen;
    }
    .dropdown-item{
		background-color: seagreen;
		padding-left:10px;
		width: 100%;
		height: 30px;
	}
	.dropdown-item:hover{
		background-color: #000;
	}
	.dropdown-item:hover .dropdown-name a{
		text-decoration: none;
	}
	.dropdown-text{
		color:white;
        font-family: 'Alegreya Sans SC', serif;
        font-size: 18px;
        font-weight: bold;
	}
	.dropdown-text:hover{
		color:greenyellow;
	}
    a.dropdown-name, .dropdown-name a{
        color: white;
        font-weight: bold;
    }
    .dropdown-name{
/*		float: left;*/
		padding-left: 8px;
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;
		width: 90%;
        height: 30px;
        line-height: 30px;
        color: deepskyblue;
        font-weight:bold;
/*		background-color: yellow;
*/	}
	.dropdown-checkbox{
		float: left;
        padding-top: 5px;
	}
	.format-glyph{
		color: white;
	}
	.glyph-btn{
		border-color: white;
		background-color: black;
	}
	.glyph-btn:hover{
		background-color: seagreen;
	}
	#mdl-head{
        background-color: greenyellow;
        color:white;
        text-shadow: 2px 2px 3px black,-2px 2px 3px black;
        font-weight: bold;
        border-bottom: solid 1px #3a5795;
    }

    
	.headingClass
    {
        background-color:inherit; /*#9EA4DE;*/
        color: darkblue;
        border:solid 1px darkblue;
        font-weight:bold;
        font-size: 20px;
        border-bottom: none;
        text-align: center;
        border-radius: 3px 3px 0 0;
        height:50px;
        line-height: 50px;
    }

    .panelBodyClass
    {
        border:  solid 1px darkblue;
        border-radius: 0 0 3px 3px;
        background-color: inherit;
        /*background: -webkit-linear-gradient(top, #9EA4DE , #FFF);*/
        /*background: -o-linear-gradient(bottom, #9EA4DE, #FFF);*/
        /*background: -moz-linear-gradient(bottom, #9EA4DE, #FFF);*/
        /*background: linear-gradient(to bottom, #9EA4DE, #FFF);*/
        border-top:none;
        height: 100%;
        margin-bottom: 18px;
    }
    .labelClass
    {
        color: #03085D;
        margin-left: 30px;
    }
    .textboxClass{
        border-color: #03085D;
        border-radius: 5px;
        color:#03085D;
        width:80%;
        margin-left: 30px;

    }
    .textboxClassSort{
        border-radius: 5px;
        border:2px solid #03085D;
        color:#3a5795;
        font-weight: bold;
        width:100%;
    }
    .textboxClass:focus{
        box-shadow: 2px 0px 4px #03085D,-2px 0px 4px #03085D,0px 2px 4px #03085D,0px -2px 4px #03085D	;
    }
    .textboxClassSort:focus{

    }
    .requiredClass{
        color: blue;
    }
    .submit-button{
        background: #03085D;
        /*background: -webkit-linear-gradient(top, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: -o-linear-gradient(bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: -moz-linear-gradient(bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: linear-gradient(to bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        color: deepskyblue;
    }
    .submit-button:hover{
        color:white;
    }
    .forgot
    {
        color: darkblue;
        font-size: 15px;
    }
    .forgot:hover
    {
        color: #03085D;
    }
    .register-now
    {
        color: darkblue;
        font-size: 19px;
    }
    .register-now:hover
    {
        color: #03085D;
    }
    .written-data{
        color: ;
    }
    .white-data{
        color:white;
    }
    .written-data-headings{
        color: black;
        font-weight: bold;
    }

    .post-ad-button {
        color: white;
        height:60px;
        width:100%;
        background: darkblue; /*#3a5795;*/
        /*background: -webkit-linear-gradient(top, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: -o-linear-gradient(bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: -moz-linear-gradient(bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        /*background: linear-gradient(to bottom, #32F0ED, #D9F7F6, #32F0ED);*/
        display: inline-block;
        margin-top: 0px;
        font-size: 19px;
        line-height: 54px;
        font-weight: bold;
        text-align: center;
/*        text-shadow: 2px 2px 2px black;
*/        cursor: pointer;
        border: 1px solid darkblue;
        transition: all 400ms ease-in-out;
        -webkit-transition: all 400ms ease-in-out;
        -moz-transition: all 400ms ease-in-out;
        -o-transition: all 400ms ease-in-out;
    }
    .post-ad-button:hover{
        background: white;
        /*background: -webkit-linear-gradient(top, #03085D, dodgerblue);*/
        /*background: -o-linear-gradient(bottom, #03085D, dodgerblue);*/
        /*background: -moz-linear-gradient(bottom, #03085D, dodgerblue);*/
        /*background: linear-gradient(to bottom, #03085D, dodgerblue);*/
        /*text-shadow: 2px 2px 2px black,-2px -2px 2px black;*/
        color: black;
        border: 1px solid #03085D;
        transition: all 400ms ease-in-out;
        -webkit-transition: all 400ms ease-in-out;
        -moz-transition: all 400ms ease-in-out;
        -o-transition: all 400ms ease-in-out;
    }

	.requiredId{
		color: #34459e;
	}
    .img-slider{
        max-width: 100%;
        max-height: 96%;
        box-shadow: 2px 0px 5px gray, 0px 2px 3px gray, -2px 0px 3px gray, 0px -2px 3px gray;
    }

    footer{
        color:white;
        font-weight: bold;
        margin-top: 20px;
        /*background-color: #333333;*/
        background: url("/uploads/gray.jpg");
        width: 100%;
        text-align: left;
    }
    footer .footnote-left ul{
        list-style: none;
    }
    footer .footnote-left ul li{
        border-left:3px solid white;
        padding-left: 12px;
        height: 50px;
        line-height: 50px;
    }
    
    footer .footnote-left ul li a{
        text-decoration: none;
        color:white;
    }
    footer .footnote-left ul li a:hover{
        color: seagreen;
        cursor: pointer;
    }
    footer .footnote-right{
        text-align: right;
    }
    footer .footnote-right a{
        text-decoration: none;
        color:white;
        font-size:20px;
    }
    footer .footnote-right a:hover{
        color: seagreen;
        cursor: pointer;
    }
    #full{
        width: 100%;
        padding: 0;
        margin: 0;
    }
    #Navbar{
        padding: 0;
        margin: 0;
    }
</style>
</head>
<body>
<div class='content-holder'>

<header class="navbar nav-bar navbar-fixed-top col-lg-12 col-md-12 col-xs-12">
<div class="container-fluid col-md-12 col-xs-12 col-lg-12">
    <div class="navbar-header">
      <a href="<?php echo e(url('/')); ?>">
      	<div class="logo col-lg-2 col-md-2 col-xs-6">
            <img src="<?php echo e(asset('/uploads/logo.png')); ?>" class="image-logo" alt="">
        </div>
        <div class="title col-lg-2 col-md-2 col-xs-6">
            <font class="book">Book</font><font class="lelo">LeLow</font><font class="smiley">.in</font>
        </div>
      </a>
      <button type="button" class="navbar-toggle glyph-btn" data-toggle="collapse" data-target="#Navbar" style="margin-top:15px;">
         <i class="fa fa-caret-down format-glyph"></i>
      </button>
    </div>

    <div class="col-lg-12 col-md-12 col-xs-12 collapse navbar-collapse " id="Navbar" style="background-color:seagreen; padding-top:0px; width:70%;">

        <div class="search-div col-lg-7 col-md-8 col-sm-7 col-xs-12">
            <form action="<?php echo e(url('/search')); ?>" method="post">
                <?php echo csrf_field(); ?>

                <div class="col-md-11 col-xs-11 col-lg-11 col-sm-11"><input type="text" name="search" class="search-bar" placeholder="Search Books, Authors and Publication Here!"/></div>
                <div class="col-md-1 col-xs-1 col-lg-1 col-sm-1"><i class="fa fa-search search-icon"></i> </div>
                <br>
            </form>

        </div>
        <div class="col-lg-5 col-md-5 col-xs-12">
        <ul class="nav navbar-nav navbar-right right-nav">

            <li id="list"><a class="class-a" href="<?php echo e(url('/')); ?>"><font class="dropdown-text"><i class="fa fa-home"></i> Home</font></a></li>
<?php if(Auth::guest()): ?>
        <li id="list"><a class="class-a" href="<?php echo e(url('/register')); ?>"><font class="dropdown-text"><i class="fa fa-user"></i>  Sign Up</font></a></li>
        <li id="list" style=""><a class="class-a" href="#" data-toggle="modal" data-target="#loginModal " ><font class="dropdown-text"><i class="fa fa-sign-in"></i>  Login</font></a></li>
<?php else: ?>   
        <li  id="list" class="dropdown dropdown-list">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none;padding-right:10px;">
                    <font style="color:greenyellow; margin-top: -16px;"> Welcome,</font>
                    <font class="dropdown-text">
                    <?php echo e(Auth::user()->name); ?> <b class="caret"></b></font>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <div class="dropdown-item" >
                            <div class="dropdown-name">
                                <a href="<?php echo e(url('/user')); ?>"><i class="fa fa-fw fa-user"></i> My Profile</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown-item" >
                            <div class="dropdown-name">
                                <a href="<?php echo e(url('/user/book')); ?>"><i class="fa fa-book fa-fw"></i> My Ads</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown-item" >
                            <div class="dropdown-name">
                                <a href="<?php echo e(url('/messages')); ?>"><i class="fa fa-envelope-o fa-fw"></i>&nbsp; </i> Inbox</a>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="dropdown-item" >
                            <div class="dropdown-name">
                                <a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </div>
                        </div>
                    </li>
                </ul>
        </li>
<?php endif; ?>
        </ul>
        </div>
    </div>
  </div>
</header>


<?php /*START LOGIN MODAL*/ ?>

<div class="modal fade" id="loginModal" role="dialog">
        <div class="modal-dialog">
            <div class="panel panel-default modal-content">
                <div class="panel-heading modal-header" id="mdl-head">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    Login
                </div>
                <div class="panel-body modal-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label labelClass">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control textboxClass" name="email" value="<?php echo e(old('email')); ?>">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong class="requiredClass"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;<?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label labelClass">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control textboxClass" name="password">

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong class="requiredClass"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp;<?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label class="labelClass">
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn submit-button">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="forgot" href="<?php echo e(url('/password/reset')); ?>">Forgot Your Password?</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a class="register-now" href="<?php echo e(url('/register')); ?>">New User? Register Now!</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php /*END LOGIN MODAL*/ ?>

   

<div class="container container-fluid" id="full">
	<div class="main-container">
            <?php echo $__env->yieldContent('content'); ?>
    </div>

    <footer class="col-md-12 col-md-12 col-sm-12 col-xs-12 animated fadeInLeft" id="full">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footnote-left margin-auto">
                <ul>
                    <li><a href="<?php echo e(url('/about')); ?>"> About Us </a></li>
                    <li><a href="<?php echo e(url('/terms')); ?>"> Terms of Use </a></li>
                    <li><a href="<?php echo e(url('/howwework')); ?>">How We Work</a></li>
                </ul>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footnote-middle margin-auto">
            <a href="<?php echo e(url('/')); ?>">
                <div class="logo2 col-lg-2 col-md-2 col-xs-6">
                    <img src="<?php echo e(asset('/uploads/logo.png')); ?>" class="image-logo" alt="">
                </div>
                <div class="title2 col-lg-2 col-md-2 col-xs-6">
                    <font class="book">Book</font><font class="lelo">LeLow</font><font class="smiley">.in</font>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footnote-right margin-auto" style="background-color:;">
            <a href="http://www.facebook.com/booklelow" target="_blank"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
        </div>
    </footer>
</div>

<?php echo $__env->yieldContent('script'); ?>
</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		<?php if($errors->any()): ?>
				$("#loginModal").modal('show');
		<?php endif; ?>

		$(document).on('click', '.pagination a', function (e) {
			getBooks($(this).attr('href').split('page=')[1]);
			e.preventDefault();
		});

		// $('#loginModal').modal();

		$('[data-toggle="popover"]').popover();

		$('.dropdown-item').click(function (e){
			var cur = $(this).find('input[type=checkbox]');
			if(cur.prop("checked"))
			{
				$(this).find('input[type=checkbox]').prop("checked", false);
			}
			else
			{
				$(this).find('input[type=checkbox]').prop("checked", true);
			}
		});

		sortBooksList();
	});
</script>
