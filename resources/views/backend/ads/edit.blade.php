@extends('backend.layouts.master')
@section('content')

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <h3 class="page-title">Edit Ad
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
                            <span class="caption-subject bold uppercase">Edit Ad</span>
                        </div>

                    </div>
                    <div class="portlet-body">

                        <form method="post" action="{{ route('ad.update', $ad->id) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="form-group">


                                <div class="form-group">
                                    <label for="exampleInputEmail1">URL</label>
                                    <input type="text" class="form-control" name="url" value={{$ad->url}}>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputFile" class="col-md-3 control-label">Image ({{$ad->description}}</label>
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


@endsection