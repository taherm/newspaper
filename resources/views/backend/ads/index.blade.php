@extends('backend.layouts.master')
@section('content')

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <h3 class="page-title">Ads
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
                            <span class="caption-subject bold uppercase">Ads</span>
                        </div>

                    </div>
                    <div class="portlet-body">

                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                                <tr>

                                    <th> ID </th>

                                    <th>Description</th>
                                    <th>URL</th>




                                    <th> Actions </th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ads as $ad)
                                <tr class="odd gradeX">

                                    <td> {{$ad->id}} </td>
                                    <td class="center"> {{$ad->description}} </td>
                                    <td class="center"> {{$ad->url}} </td>


                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="{{ route('ad.edit', $ad->id) }}">
                                                        <i class="icon-docs"></i> Edit Ad </a>
                                                </li>
                                                {{-- <li>
                                                    <form method="POST" action="{{ route('ad.destroy', $ad->id) }}" class="delete">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <input name="_method" value="delete" type="hidden">
                                                <button class="btn btn-danger" type="submit">Delete Ad</button>
                                                </form>
                                                </li>--}}

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