<?php $__env->startSection('content'); ?>

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <h3 class="page-title">Create Ads
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
                            <span class="caption-subject bold uppercase">Create Ads</span>
                        </div>

                    </div>
                    <div class="portlet-body">

                        <form method="post" action="<?php echo e(route('ad.store')); ?>" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group">


                                <div class="form-group">
                                    <label for="exampleInputEmail1">URL</label>
                                    <input type="text" class="form-control" name="url">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputFile" class="col-md-3 control-label">Image</label>
                                    <br>
                                    <input type="file" id="image" name="image">
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
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newspaper\resources\views/backend/ads/create.blade.php ENDPATH**/ ?>