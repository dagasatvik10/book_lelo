<style type="text/css">
    .slider{
        height:350px;
        /*border: 2px solid limegreen;*/
        border-radius: 5px;
        background-color: inherit;
        /*background: -webkit-linear-gradient(right, #9EA4DE , #FFF);*/
        /*background: -o-linear-gradient(left, #9EA4DE, #FFF);*/
        /*background: -moz-linear-gradient(left, #9EA4DE, #FFF);*/
        /*background: linear-gradient(to left, #9EA4DE, #FFF);*/
        box-shadow: 2px 0px 3px black,-2px 0px 3px black,0px 2px 3px black,0px -2px 3px black;
    }
    .slider-images{
        height:350px;
        width: 100%;
        float: left;
        padding-top: 1%;
        overflow: hidden;
    }
    /*#main{position: absolute;}*/
    .main-img{
        height:345px;
        width: 100%;
        position: absolute;
    }
    .second-main-img{
/*        margin-top: -22px;
*/        height:345px;
        width: 100%;
        position: absolute;
    }

    .thumbnails{
        margin-top: 18px;
        margin-bottom: 18px;
        /*background-color: red;*/
/*        border: 1px solid limegreen;
*/        border-radius: 4px;
    }
    .thumbs{
        height:140px;
        background-color:;
        border-radius: 5px;
        border:1px solid transparent;
        float: left;
        margin-top: 10px;
    }
    .white-shadow:hover{
        cursor: pointer;
    }
    .white-shadow{
        margin-top:5%;
        height: 90%;
        width: 90%;
    }
    .img-hidden{
        display: none;
    }
    .img-visible{
        display: block;
    }
    .data-book{
        /*border-left: 2px solid #DE1A1A;*/
        /*border-radius: 5px;*/
        /*background-color: white;*/
        margin-top: 21px;
        overflow: hidden;
    }
    .heads{
        color:midnightblue;
        font-weight: bold;
        font-size: 24px;
    }
    .tale{
        color:darkblue;
        font-weight: bold;
        font-size: 33px;
        text-shadow:2px 2px 2px #aaabbb;
    }
    .book-data{
        color:dodgerblue;
        font-weight: bold;
    }
</style>
<script type="text/javascript" language="JavaScript">
//    window.onload=init
//    function init()
//    {
//        document.getElementById("12").left="950px";
//        $(document).ready( function(){
//            $("#main").animate
//            ({
//                left:"900px"
//            },1000);
//
//        });
//    }
    function showImg(imgid)
    {
//         alert(imgid);
        document.getElementById("main").style.display="none";
        var addSix=parseInt(imgid+6);
//         alert(addSix);
        for(i=7; i<=13; i++)
        {
            document.getElementById(addSix).style.display="block";
            if(i==addSix) continue;
            document.getElementById(i).style.display="none";
        }
//            setTimeout(andAddRemove(addSix),1000);
    }
//    function andAddRemove(sixAdded)
//    {
//
//    }
//$(document).ready( function() {
//    $(function () {
//        $("#1").click(function () {
//            animate("#main", 'fadeInLeft');
//            return false;
//        });
//    });
//
//    function animate(element_ID, animation) {
//        $(element_ID).addClass(animation);
//        var wait = window.setTimeout(function () {
//                    $(element_ID).removeClass(animation)
//                }, 1300
//        );
//    });
//    $(document).ready(function(){
//        $('#1').each(function() {
//            animationClick(this, 'zoomOutUp');
//        });
//    });
//    function animationClick(element, animation) {
//        element = $(element);
//        element.click(
//                function () {
//                    element.addClass('animated ' + animation);
//                    //wait for animation to finish before removing classes
//                    window.setTimeout(function () {
//                        element.removeClass('animated ' + animation);
//                    }, 2000);
//
//                });
//    }
/////////////////////////////////////////////////////////////////////
//    var currentImg=7;
//    function some(imgid) {
//        $('#main').addClass('img-hidden');
//
//        var imgidSix = parseInt(imgid + 6);
//        if (currentImg == imgidSix) {
//            $('#' + imgidSix).addClass('animated shake img-visible');
//            $('#' + imgidSix).removeClass('img-hidden');
//        }
//        else //if(currentImg>=imgidSix)
//        {
//            $('#main').addClass('img-hidden');
//            $('#' + imgidSix).addClass('animated fadeInLeft img-visible');
//            $('#' + imgidSix).removeClass('img-hidden');
//            currentImg = imgidSix;
//            for (x = 7 x < 13;
//            x++
//        )
//            {
//                if (x == imgidSix)
//                    continue;
//                else
//                    $('#' + x).addClass('img-hidden');
//            }
//        }
//    }
/////////////////////////////////////////////////////////
//        else if(currentImg<=imgidSix)
//        {
//            $('#main').addClass('animated fadeOutRight img-hidden');
//            $('#'+currentImg).addClass('animated fadeOutLeft img-hidden');
//            $('#'+currentImg).removeClass('img-visible');
//            $('#'+imgidSix).addClass('animated fadeInRight img-visible');
//            $('#'+imgidSix).removeClass('img-hidden');
//            currentImg=imgidSix;
//        }


//});
</script>
<?php $__env->startSection('content'); ?>
<div class="margin-auto">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <br>
                <div align="center" class="slider">
                    
                   <!--  <div align="center" class="left">
                        <button class="btn btn-chevron"><span class="fglyph glyphicon glyphicon-chevron-left"></button>
                    </div> -->

                    <div align="center" class="slider-images">
                        <?php if($book->book_pics->first() != null): ?>
                            <div id="main" class="main-img animated"><img class="img-rounded img-responsive img-thumbnail img-slider" src=<?php echo e('/uploads/images/'.$book->book_pics->first()->name.'.'.$book->book_pics->first()->extension); ?> }}></div>
                        <?php endif; ?>
                        <?php $ids=7; $idsm=$ids-1; ?>
                        <?php foreach($book->book_pics as $pic): ?>
                                <?php /*<?php if($idsm!='6'): ?>*/ ?>
                                <?php /*<div id="<?php echo e($idsm); ?>" class="img-hidden animated option ZoomOutUp second-main-img"><img class="img-thumbnail img-resposive img-rounded img-slider" src=<?php echo e('/uploads/images/'.$pic->name.'.'.$pic->extension-1); ?>></div>*/ ?>
                                <?php /*<?php endif; ?>*/ ?>
                                <div id="<?php echo e($ids); ?>" class="second-main-img img-hidden"><img class="img-thumbnail img-resposive img-rounded img-slider" src=<?php echo e('/uploads/images/'.$pic->name.'.'.$pic->extension); ?>></div>
                        <?php $ids++; ?>
                        <?php endforeach; ?>
                    </div>

                    <!-- <div align="center" class="right">
                        <button class="btn btn-chevron"><span class="fglyph glyphicon glyphicon-chevron-right"></button>
                    </div> -->
                </div>

                <div align="center" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 thumbnails">
                    <?php $idt=1;?>
                    <?php foreach($book->book_pics as $pic): ?>
                        <div class="thumbs">
                            <div id="<?php echo e($idt); ?>" onclick="showImg(<?php echo e($idt); ?>)" class="white-shadow">
                                <img class="img-thumbnail img-rounded img-slider" src=<?php echo e('/uploads/images/'.$pic->name.'.'.$pic->extension); ?>>
                            </div>
                        </div>
                        <?php $idt++; ?>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 data-book">
                    <div style="box-shadow:0px 2px 0px #3a5795; padding-bottom: 10px;" >
                        <font class="tale"><?php echo e($book->name); ?></font>
                        <font class="book-data" style="font-size:22px;"><br>By <?php echo e($book->author); ?><br><br></font>
                        <?php if(Auth::check()): ?>
                        <?php if($book->user->id === Auth::user()->id): ?>
                        <!-- <div class="col-sm-4"> --><a class="btn btn-primary" href=<?php echo e(route('book.edit',['id' => $book->id])); ?>><i class="fa fa-fw fa-pencil"></i> Edit</a><!-- </div> -->
                        <!-- <div class="col-sm-4"> --><a class="btn submit-button" href=<?php echo e(route('book.delete',['id' => $book->id])); ?>><i class="fa fa-fw fa-trash-o"></i> Delete</a><!-- </div> -->
                        <?php endif; ?>
                        <?php endif; ?>
                    </div>    
                        <?php if(!empty($book->branch_id) or $book->branch_id == '0'): ?>
                                <br>    <font class="book-data" style="font-size:18px;">A Book for <?php echo e($book->branch->name); ?></font>
                            <?php endif; ?>
                            <?php if($book->year != null): ?>
                                <font class="book-data" style="font-size:18px;"><br>For Year<?php echo e($book->year); ?></font>
                        <?php endif; ?>
                        
                        <font class="book-data" style="font-size:22px;"><br><font class="heads">Seller :</font> <?php echo e($book->user->name); ?></font>
                        <font class="book-data" style="font-size:22px;"><br><font class="heads">Publication :</font> <?php echo e($book->publication); ?></font>
                        <font class="book-data" style="font-size:22px;"><br><font class="heads">Publication Year :</font> <?php echo e($book->publication_year); ?></font>
                        <font class="book-data" style="font-size:29px;"><br><i class="fa fa-inr"></i> <?php echo e($book->price); ?>/-</font>
                        <p><font class="book-data" style="font-size:16px;"><br><?php echo e($book->description); ?></font>
                        </p>
                        <form action="<?php echo e(url('/messages/create')); ?>" role="form" method="POST">
                    <?php echo csrf_field(); ?>

                    <input type="hidden" name="seller" value="<?php echo e($book->user->id); ?>">
                    <input type="submit" value="Send Message">
                    </form>                        
                </div>
            </div>
            <hr>



<?php /*
            <div class="col-lg-8 col-sm-8">
                    <div class="row">
                        <div class="col-sm-4">
                            <font class="written-data-headings">Name:</font> <font class="written-data"><?php echo e($book->name); ?></font>
                        </div>
    					<?php if(Auth::check()): ?>
                        <?php if($book->user->id === Auth::user()->id): ?>
                            <div class="col-sm-4"><a class="" href=<?php echo e(route('book.edit',['id' => $book->id])); ?>>Edit</a></div>
                            <div class="col-sm-4"><a class="" href=<?php echo e(route('book.delete',['id' => $book->id])); ?>>Delete</a></div>
                        <?php endif; ?>
    					<?php endif; ?>
                    </div>
                    <div class="row">
    					<h5>
    						<?php if(!empty($book->branch_id) or $book->branch_id == '0'): ?>
    							Branch: <?php echo e($book->branch->name); ?>

    						<?php endif; ?>
    						<?php if($book->year != null): ?>
    							&nbsp Year: <?php echo e($book->year); ?>

    						<?php endif; ?>
    					</h5>
    				</div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="row">
                    <h3>Rs <?php echo e($book->price); ?></h3>
                </div>
                <div class="row">
                    <h3>
                        <?php echo e($book->user->name); ?>

                    </h3>
                  
                </div>
            </div>
  <form action="<?php echo e(url('/messages/create')); ?>" role="form" method="POST">
                    <?php echo csrf_field(); ?>

                    <input type="hidden" name="seller" value="<?php echo e($book->user->id); ?>">
                    <input type="submit" value="Send Message">
                    </form>

	<div  style="background-color:red;" class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                    <div>
                    <?php if($book->book_pics->first() != null): ?>
                    <img class="img-responsive img-rounded" src=<?php echo e('/uploads/images/'.$book->book_pics->first()->name.'.'.$book->book_pics->first()->extension); ?> }}>
                    <?php endif; ?>
                    </div>
    </div>
    <div class="row col-sm-6">
                    <?php foreach($book->book_pics as $pic): ?>
                        <img class="img-thumbnail img-rounded col-sm-2" src=<?php echo e('/uploads/images/'.$pic->name.'.'.$pic->extension); ?>>
                    <?php endforeach; ?>
    </div> */ ?>

    
</div>
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>