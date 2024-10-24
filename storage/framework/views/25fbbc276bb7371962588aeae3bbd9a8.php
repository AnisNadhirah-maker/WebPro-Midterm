<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Create Book
                    </div>

                    <div class="card-body">
                        <form action="<?php echo e(route('books.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3">
                                <label for="title" class="form-label">Book Title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="author_id" class="form-label">Author</label>
                                <select name="author_id" class="form-control">
                                    <option disabled selected>Choose an Author</option>
                                    <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($author->id); ?>"><?php echo e($author->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>


                            <button type="submit" class="btn btn-success">Create Book</button>
                            <a href="<?php echo e(route('authors.index')); ?>" class="btn btn-secondary">Cancel</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PBKK-GROUP-PROJECT\resources\views/books/create.blade.php ENDPATH**/ ?>