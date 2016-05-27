<script type="text/javascript">
    /*function getpages () {
     if(document.getElementById("type").value=="notes")
     {
        document.getElementById("pages").innerHTML="<div class="col-md-4"><?php echo Form::label('no_of_pages','No. of Pages',['class' => 'labelClass']); ?></div>
                <div class="col-md-10"><?php echo Form::text('no_of_pages','',['class' => 'form-control textboxClass']); ?></div> ";
     }
     else
     {
        document.getElementById("pages").type="";
     }
}
    */
</script>
<style>
    .outer-class{
        height:110px;
        width:110px;
        padding: 5px;
        background-color: seagreen;
        margin: 0px 10px 10px 0px;
        border-radius: 5px;
        float: left;
    }
    .upload{
        background-color: white;
        height:100px;
        width: 100px;
        border: 2px dotted seagreen;
        cursor: pointer;
        border-radius: 5px;
        transform: rotate(0deg);
        transition: all 100ms linear;
    }
    .upload:hover{
        background-color: lightgreen;
        transform: rotate(360deg);
        transition: all 100ms linear;
    }
    #src{
        display: none;
    }
    .plus-image-holder{
        height:100px;
        width:100px;
        opacity: 0.6;
    }
    .plus-image-holder:hover{
        opacity: 1.0;
    }
    .plus-image{
        max-height: 40px;
        margin:30px;
        max-width:40px;
        opacity:0.6;
    }
    #add-more, #show-less{
        padding-left: 40px;
        color: #03085D;
        width: 200px;
    }
    #add-more:hover, #show-less:hover{
        color:white;
        cursor: pointer;
        text-decoration: underline;
    }
    .upload-hider{
        display: none;
    }
    .upload-shower{
        display: block;
    }
    .textArea{
        resize: vertical;
    }
    #extra-two{
        transition: all 1s linear;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
    $(document).ready(function(){
       $(".add-more").toggle(function(){
           $(".extra-two").addClass("upload-shower");
           $(".extra-two").removeClass("upload-hider");
       });
    });
    function addMore(evt)
    {
        if(evt==1)
        {
            document.getElementById("add-more").style.display="none";
            document.getElementById("show-less").style.display="block";
            document.getElementById("extra-two").style.display="block";
        }
        else
        {
            document.getElementById("add-more").style.display="block";
            document.getElementById("show-less").style.display="none";
            document.getElementById("extra-two").style.display="none";
        }

    }
    function showImage(src,target) {
        var fr=new FileReader();
        // when image is loaded, set the src of the image where you want to display it
        fr.onload = function(e) { target.src = this.result; };
        src.addEventListener("change",function() {
            // fill fr with image data
            fr.readAsDataURL(src.files[0]);
        });
    }

    var src = document.getElementById("src");
    var target = document.getElementById("target");
    showImage(src,target);
</script>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 margin-auto">
        <div class="headingClass col-md-12">
        <h3>Post Ad for Free!</h3>
        </div>
        <div class="panelBodyClass col-md-12">
            <?php echo Form::open(['action' => 'BookController@store', 'method' => 'POST','files' => true]); ?>

            <div class="form-group">
                <div class="col-md-12 text-center">
                <?php if($errors->any()): ?>
                    <ul>
                        <?php foreach($errors->all() as $error): ?>
                            <li style="list-style:none; color:red; font-size:16px; font-weight:none;"><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4"><?php echo Form::label('name','Title',['class' => 'labelClass']); ?></div>
                <div class="col-md-10"><?php echo Form::text('name','',['class' => 'form-control textboxClass', 'style' => '']); ?></div>
            </div>
            <div class="form-group">
                <div class="col-md-4"><?php echo Form::label('type','Type', ['class' => 'labelClass']); ?></div>
                <div class="col-md-10"><?php echo Form::select('type',['books' => 'Books','notes' => 'Notes'],'books',['class' => 'form-control textboxClass','onchange' => 'getpages()','id' => 'type']); ?></div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                <?php echo Form::label('name','Pics', ['class' => 'labelClass']); ?>

                </div>
                <div class="col-md-10">
                <?php for($i=1;$i<=4;$i++): ?>
                    <?php /*<?php echo Form::file('pic'.$i); ?>*/ ?>
                    <div class="" style="padding-left:30px;"> <?php /*col-lg-4 col-md-4 col-sm-4 col-xs-6*/ ?>
                        <div class="outer-class">
                            <label class="upload">
                                <input type="file" name="<?php echo e('pic'.$i); ?>" value="" accept="image/*" id="src">
                                <div class="plus-image-holder">

                                    <img src="/uploads/addsign2.png" class="plus-image">
                                    <img id="target" class="plus-image">


                                </div>
                            </label>
                        </div>
                    </div>
                <?php endfor; ?>
                </div>
                <div class="col-md-10">
                    <div id="add-more" onclick="addMore('1')">Add More Pictures?</div>
                    <div id="show-less" class="upload-hider" onclick="addMore('0')">Show less</div>
                </div>
                <div class="col-md-10">
                    <div id="extra-two" class="upload-hider" style="padding-left:30px;"> <?php /*col-lg-4 col-md-4 col-sm-4 col-xs-6*/ ?>
                        <?php for($i=5;$i<=6;$i++): ?>
                        <div class="outer-class">
                            <label class="upload">
                                <input type="file" name="<?php echo e('pic'.$i); ?>" value="" accept="image/*" id="src" >
                                <div class="plus-image-holder">

                                    <img src="/uploads/addsign2.png" id="target" class="plus-image">

                                </div>
                            </label>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
            <br>
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
                <?php /*<div class="col-md-10"><?php echo Form::select('year',['1','2','3','4'],['class' => 'form-control textboxClass']); ?></div>*/ ?>
                <div class="col-md-10">
                    <select name='year' class='form-control textboxClass'>
                        <option> Select Year</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>
            <?php /*<div class="form-group" id="pages">
                 <div class="col-md-4"><?php echo Form::label('no_of_pages','No. of Pages',['class' => 'labelClass']); ?></div>
                <div class="col-md-10"><?php echo Form::text('no_of_pages','',['class' => 'form-control textboxClass']); ?></div> 
            </div>*/ ?> 

            <div class="form-group">
                <div class="col-md-4"><?php echo Form::label('description','Description',['class' => 'labelClass']); ?></div>
                <div class="col-md-10"><?php echo Form::textarea('description','',['class' => 'form-control textboxClass textArea']); ?></div>
            </div>
            <div class="form-group">
                <div class="col-md-4"><?php echo Form::label('price','Price',['class' => 'labelClass']); ?></div>
                <div class="col-md-10"><?php echo Form::text('price','',['class' => 'form-control textboxClass']); ?></div>
            </div>
            <div class="form-group">
                <div class="col-md-4 col-md-offset-2"><br><?php echo Form::submit('Post Ad!',['class' => 'form-control textboxClass submit-button']); ?><br></div>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>