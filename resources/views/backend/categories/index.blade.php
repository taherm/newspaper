@extends('backend.layouts.master')
@section('content')

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <h3 class="page-title">Category
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
                            <span class="caption-subject bold uppercase">Category</span>
                        </div>

                    </div>
                    <div class="portlet-body">

                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                                <tr>

                                    <th> ID </th>


                                    <th>Title</th>


                                    <th> Parent Id </th>

                                    <th> Actions </th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr class="odd gradeX">

                                    <td> {{$category->id}} </td>

                                    <td class="center"> {{$category->title_en}} </td>
                                    <td class="center"> {{$category->parent_id}} </td>

                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="{{ route('category.edit', $category->id) }}">
                                                        <i class="icon-docs"></i> Edit Category </a>
                                                </li>
                                                <li>
                                                    <form method="post" action="{{ route('category.destroy', $category->id) }}" class="delete">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <input name="_method" value="delete" type="hidden">
                                                        <button class="btn btn-danger" type="submit">Delete Category</button>
                                                    </form>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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