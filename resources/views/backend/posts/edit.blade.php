@extends('backend.layouts.master')
@section('content')

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <h3 class="page-title">Edit Post
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
                            <span class="caption-subject bold uppercase">Edit Post {{$post->title}}</span>
                        </div>

                    </div>
                    <div class="portlet-body">

                        <form method="post" action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="form-group">


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title English</label>
                                    <input type="text" class="form-control" name="title_en" value="{{$post->title_en}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title Arabic</label>
                                    <input type="text" class="form-control" name="title_ar" value="{{$post->title_ar}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description English</label>
                                    <input type="text" class="form-control" name="description_en" value="{{$post->description_en}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description Arabic</label>
                                    <input type="text" class="form-control" name="description_ar" value="{{$post->description_ar}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile" class="col-md-3 control-label">Image</label>
                                    <br>
                                    <input type="file" id="image" name="image">
                                </div>
                                <div class="form-group">
                                    <label> Category</label>
                                    <select class="form-control" name="category">
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id}}">{{ $category->title_en}}</option>
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