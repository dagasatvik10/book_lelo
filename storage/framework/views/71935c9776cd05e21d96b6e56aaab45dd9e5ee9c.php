<?php /*  */ ?>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Overlock">

<?php $__env->startSection('content'); ?>
    <style type="text/css" media="screen">     
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
    .textboxClass{
        border-color: seagreen;
        border-radius: 5px;
        color:seagreen;
        width:80%;

    }
    .textboxClass:focus{
        box-shadow: 2px 0px 4px seagreen,-2px 0px 4px seagreen,0px 2px 4px seagreen,0px -2px 4px seagreen   ;
    }    
    </style>
    <div class="col-md-6">
    <?php if($threads->count() > 0): ?>
        <h1><?php echo $thread->subject; ?></h1>

        <?php foreach($thread->messages as $message): ?>
         <?php if($message->user['id']===Auth::user()->id): ?>
            <div class="media" style="text-align:left; font-family:'Overlock', serif; border:2px solid deepskyblue; background-color:#B6D9FA; padding-left:15px; width:70%; border-radius:4px; ">
                <a style="font-size:20px; font-weight:bold; color:dodgerblue; text-decoration:none; cursor:default;" href="#">
                    <?php echo e($message->user->name); ?>

                </a>
                <div class="media-body">
                    <p style="font-size:17px; color:black;"><?php echo $message->body; ?></p>
                    <div class="text-muted"><small>Posted <?php echo $message->created_at->diffForHumans(); ?></small></div>
                </div>
            </div>
        <?php else: ?>
        <div class="media" style="text-align:right; font-family:'Overlock', serif; border:2px solid seagreen; background-color:lightgreen; padding-right:15px; border-radius:4px; margin-left:30%;">
                <a style="font-size:20px; font-weight:bold; color:seagreen; text-decoration:none; cursor:default;" href="#">
                <?php echo e($message->user['name']); ?>

                </a>
                <div class="media-body">
                    <p style="font-size:17px; color:black;"><?php echo $message->body; ?></p>
                    <div class="text-muted"><small>Posted <?php echo $message->created_at->diffForHumans(); ?></small></div>
                </div>
            </div>
        <?php endif; ?>
        <?php endforeach; ?>
        <?php if((Auth::user()->id)===$user): ?>
        <h3 style="color:seagreen">Reply</h3>
        <?php else: ?>
        <h2>Reply</h2>
        <?php endif; ?>
        <?php echo Form::open(['route' => ['messages.update', $thread->id], 'method' => 'PUT']); ?>

        <!-- Message Form Input -->
        <div class="form-group">
            <?php echo Form::textarea('message', null, ['class' => 'form-control textboxClass','style' => 'width:100%;height:100px; resize:none;']); ?>

        </div>

        <?php if($users->count() > 0): ?>
            <input type="hidden" name="recipients[]" value="<?php echo $users; ?>"> 
        <?php endif; ?>

        <!-- Submit Form Input -->
        <div class="form-group">
            <?php echo Form::submit('Submit', ['class' => 'btn submit-button form-control']); ?>

        </div>
        <?php echo Form::close(); ?>

        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.messagelayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>