<nav class="navbar navbar-expand-lg navbar-primary bg-light d-flex flex-column p-0 m-0 shadow-sm sticky-top">
    <div class="w-100 bg-warning d-flex justify-content-center">
        <a class="navbar-brand text-white" style="font-size: 2rem;" href="<?php echo e(route('index')); ?>">Giant Book Supplier</a>
    </div>
    <div class="d-flex flex-row">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(route('index')); ?>">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="dropdown-item text-primary" href="<?php echo e(route('category', $category->id)); ?>"><?php echo e($category->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('publisher')); ?>">Publisher</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('contact')); ?>">Contact</a>
            </li>
        </ul>
    </div>
</nav><?php /**PATH D:\Laravel Project\2440076671_Mid_Exam\resources\views/partials/navigation.blade.php ENDPATH**/ ?>