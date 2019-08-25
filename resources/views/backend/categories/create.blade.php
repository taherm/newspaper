@extends('backend.layouts.master')
@section('content')

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <h3 class="page-title">Create Category
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
                            <span class="caption-subject bold uppercase">Create Category</span>
                        </div>

                    </div>
                    <div class="portlet-body">

                        <form method="post" action="{{ route('category.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

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
                                    <label>Parent Category</label>
                                    <select class="form-control" name="parent_id">
                                        <option value="0">Select Parent Category</option>
                                        @foreach($parent_categories as $parent_category)
                                        <option value="{{ $parent_category->id}}">{{ $parent_category->title_en}}</option>
                                        @endforeach
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


@endsection