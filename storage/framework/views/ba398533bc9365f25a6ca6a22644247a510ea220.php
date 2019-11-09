<?php $__env->startSection('content'); ?>
    <a href="/posts" class="btn btn-primary">Go back</a>
    <h1><?php echo e($post->title); ?></h1>
    <img style="width: 100%" src="/storage/cover_images/<?php echo e($post->cover_image); ?>">
    <br>
    <br>
    <div>
        <?php echo e($post->body); ?>

    </div>
    <hr>
    <small>Written on <?php echo e($post->created_at); ?></small>
    <hr>
    <?php if(!Auth::guest()): ?>
        <?php if(Auth::user()->id == $post->user_id): ?>
            <a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-secondary">Edit</a>

            <?php echo Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']); ?>

                <?php echo Form::hidden('_method', 'DELETE'); ?>

                <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

            <?php echo Form::close(); ?>

        <?php endif; ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\lsapp\resources\views/posts/show.blade.php ENDPATH**/ ?>