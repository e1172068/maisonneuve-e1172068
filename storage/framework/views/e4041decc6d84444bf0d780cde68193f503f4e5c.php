
<?php $__env->startSection("content"); ?>
    <main>
        <a href="<?php echo e(route('etudiant.create')); ?>" class="btn btn-primary">Ajouter</a>
        <ul>
        <?php $__empty_1 = true; $__currentLoopData = $etudiants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etudiant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <li>
                <a href="<?php echo e(route('etudiant.show', $etudiant)); ?>"><?php echo e($etudiant->nom); ?></a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <li class="text-danger">Aucun étudiant</li>
        <?php endif; ?>       
        <?php echo e($etudiants->links()); ?>

    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\e1172068\Desktop\maisonneuve-e1172068\resources\views/etudiant/index.blade.php ENDPATH**/ ?>