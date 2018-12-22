     <?php $__env->startSection('content'); ?>
     <h1>Grievence Form</h1>
        <?php echo Form::open(['action' => 'PostsController@store','method'=>'POST']); ?>

        <div class="form-group">

            <?php echo e(Form::label('category','Category')); ?>

            <br>
            <?php echo e(Form::select('category', ['1' => 'Category 1', '2' => ' Category 2','3' => ' Category 3'],['class'=>'form-control'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('subject','Subject')); ?>

            <?php echo e(Form::text('subject','',['class'=>'form-control','placeholder'=>'Subject'])); ?>

        </div>
        <div class="form-group">
                <?php echo e(Form::label('description','Grievance Report')); ?>

                <?php echo e(Form::textarea('description','',['class'=>'form-control','placeholder'=>'Grievance Report'])); ?>


        </div>

        <?php echo e(Form::submit('Submit',['class'=>'btn btn-primary'])); ?>


           
      
        
        <?php echo Form::close(); ?>

     
     <?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>