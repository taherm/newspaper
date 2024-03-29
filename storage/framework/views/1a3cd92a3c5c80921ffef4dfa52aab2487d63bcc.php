<?php $__env->startSection('content'); ?>

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <h3 class="page-title">Create Post
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="/">Home</a>
                </li>
            </ul>
        </div>



        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject bold uppercase">Create Post</span>
                        </div>

                    </div>
                    <div class="portlet-body">

                        <form method="post" action="<?php echo e(route('post.store')); ?>" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group">


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title English</label>
                                    <input type="text" class="form-control" name="title_en">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title Arabic</label>
                                    <input type="text" class="form-control" name="title_ar">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description English</label>
                                    <input type="text" class="form-control" name="description_en">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description Arabic</label>
                                    <input type="text" class="form-control" name="description_ar">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile" class="col-md-3 control-label">Image</label>
                                    <br>
                                    <input type="file" id="image" name="image">
                                </div>
                                <div class="form-group">
                                    <label> Category</label>
                                    <select class="form-control" name="category">
                                        <?php if($categories->count()): ?>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->title_en); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                        <option value="">Kindly Contact Admin for Category Permissions</option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </form>



                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>






        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>

<!-- END CONTENT BODY -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newspaper\resources\views/backend/posts/create.blade.php ENDPATH**/ ?>