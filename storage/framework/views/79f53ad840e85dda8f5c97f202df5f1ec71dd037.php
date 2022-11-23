

<?php $__env->startSection('container'); ?>
    <div class="w-100 m-auto d-flex flex-column pb-8">
        <div class="w-100 align-self-center bg-primary p-2 my-4">
            <h3 class="text-white text-center">Book Detail</h1>
        </div> 
        <div class="d-flex justify-content-center flex-wrap">
            <div class="card m-1 shadow-sm w-75">
                <img src="<?php echo e($book->image); ?>" class="card-img-top" alt="<?php echo e($book->title); ?>">
                <div class="card-body">
                    <h5 class="card-title font-weight-bolder"><?php echo e($book->title); ?></h5>
                    <p class="card-text">By: <span><?php echo e($book->author); ?></span></p>
                    <p class="card-text"><span><?php echo e($book->synopsis); ?></span></p>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\2440076671_Mid_Exam\resources\views/detail.blade.php ENDPATH**/ ?>