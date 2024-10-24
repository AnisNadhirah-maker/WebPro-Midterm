<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Author</div>

                    <div class="card-body">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <form action="<?php echo e(route('authors.update', $author->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <!-- Author Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="<?php echo e(old('name', $author->name)); ?>" required>
                            </div>

                            <!-- Books -->
                            <div class="mb-3">
                                <label for="books" class="form-label">Books</label>
                                <div id="books">
                                    <?php $__currentLoopData = $author->books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control"
                                                name="books[<?php echo e($index); ?>][title]"
                                                value="<?php echo e(old('books.' . $index . '.title', $book->title)); ?>" required>
                                            <input type="hidden" name="books[<?php echo e($index); ?>][id]"
                                                value="<?php echo e($book->id); ?>">
                                            <button type="button" class="btn btn-danger btn-sm"
                                                onclick="deleteBook(<?php echo e($book->id); ?>)">Delete</button>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Author</button>
                            <a href="<?php echo e(route('authors.index')); ?>" class="btn btn-secondary">Cancel</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function deleteBook(bookId) {
            if (confirm('Are you sure you want to delete this book?')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '<?php echo e(url('books')); ?>/' + bookId;
                const token = document.createElement('input');
                token.type = 'hidden';
                token.name = '_token';
                token.value = '<?php echo e(csrf_token()); ?>';
                form.appendChild(token);
                const method = document.createElement('input');
                method.type = 'hidden';
                method.name = '_method';
                method.value = 'DELETE';
                form.appendChild(method);
                document.body.appendChild(form);
                form.submit();
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\amira\Herd\crud-laravel\resources\views/authors/edit.blade.php ENDPATH**/ ?>