

<?php $__env->startSection('container'); ?>
    <div class="w-100 m-auto d-flex flex-column">
        <div class="w-100 align-self-center bg-primary p-2 my-4">
            <h3 class="text-white text-center">Publisher Detail</h1>
        </div> 
        <div class="d-flex justify-content-center flex-wrap mb-4">
        <?php $__currentLoopData = $publishers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publisher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card m-1 shadow-sm" style="width: 18rem;">
                <img src="<?php echo e($publisher->image); ?>" class="card-img-top" alt="<?php echo e($publisher->title); ?>">
                <div class="card-body">
                    <h5 class="card-title font-weight-bolder"><?php echo e($publisher->name); ?></h5>
                    <p class="card-text"><?php echo e($publisher->address); ?></p>
                    <a href="<?php echo e(route('publisherDetail', ['id'=>$publisher->id])); ?>" class="btn btn-primary">Detail</a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\2440076671_Mid_Exam\resources\views/publisher.blade.php ENDPATH**/ ?>