

<?php $__env->startSection('container'); ?>
    <div class="w-100 m-auto d-flex flex-column">
        <div class="w-100 align-self-center bg-primary p-2 my-4">
            <h3 class="text-white text-center"><?php echo e($category->name); ?></h1>
        </div> 
        <div class="d-flex justify-content-center flex-wrap mb-4">
        <?php $__currentLoopData = $category->books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card m-1 shadow-sm" style="width: 18rem;">
                <img src="<?php echo e($book->image); ?>" class="card-img-top" alt="<?php echo e($book->title); ?>">
                <div class="card-body">
                    <h5 class="card-title font-weight-bolder"><?php echo e($book->title); ?></h5>
                    <p class="card-text">By: <span><?php echo e($book->author); ?></span></p>
                    <a href="<?php echo e(route('detail', ['id'=>$book->id])); ?>" class="btn btn-primary">Detail</a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\2440076671_Mid_Exam\resources\views/category.blade.php ENDPATH**/ ?>