
<?php $__env->startSection("content"); ?>
    <div class="row">
        <h1>Détail de l'étudiant</h2>
        <dl>
            <dt>Nom</dt>
            <dd><?php echo e($etudiant->nom); ?></dd>
            <dt>Adresse</dt>
            <dd><?php echo e($etudiant->adresse); ?></dd>
            <dt>Téléphone</dt>
            <dd><?php echo e($etudiant->phone); ?></dd>
            <dt>Email</dt>
            <dd><?php echo e($etudiant->email); ?></dd>
            <dt>Date de naissance</dt>
            <dd><?php echo e($etudiant->date_naissance); ?></dd>
            <dt>Ville</dt>
            <dd><?php echo e($nomVille); ?></dd>
        </dl>
    </div>
    <a href="<?php echo e(route('etudiant.edit', $etudiant)); ?>" class="btn btn-primary">Modifier</a>
    <a href="<?php echo e(route('etudiant.destroy', $etudiant)); ?>" class="btn btn-danger">Supprimer</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\e1172068\Desktop\maisonneuve-e1172068\resources\views/etudiant/show.blade.php ENDPATH**/ ?>