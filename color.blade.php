@extends('backend.layouts.master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xxl-12 mb-3">
                    <div class="card mt-xxl-n5">
                        <div class="card-header">
                            <h4 class="card-title mb-0">{{__('Add Color')}}</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="mb-3">
                                            <label for="colorName" class="form-label">{{__('Name')}}<span class="require-span">*</span></label>
                                            <input type="text" class="form-control" id="colorName" name="">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="mb-3">
                                            <label for="colorCode" class="form-label">{{__('Color Code')}}</label>
                                            <input type="text" class="form-control" id="colorCode" name="">
                                        </div>
                                    </div>
                                    <div class="col-md-2 my-auto">
                                        <button type="submit" class="btn btn-primary rounded mt-2">{{__('Submit')}}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div> <!-- end col -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header pt-2 pb-2">
                            <h4 class="card-title mb-0 float-start mt-2">{{__('All Colors')}}</h4>
                            <div class="d-flex justify-content-sm-end">
                                <div class="search-box ms-2">
                                    <input type="text" class="form-control search" placeholder="Search...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div id="table-search table-responsive">
                                <table class="table table-hover table-striped align-middle table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">{{__('No')}}</th>
                                            <th scope="col">{{__('Name')}}</th>
                                            <th scope="col">{{__('Code')}}</th>
                                            <th scope="col">{{__('Action')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{__('1')}}</th>
                                            <td>{{__('Red')}}</td>
                                            <td>{{__('46464')}}</td>
                                            <td>
                                                <a type="button" class="btn btn-primary rounded btn-icon waves-effect waves-light"><i class="ri-edit-2-line"></i></a>
                                                <a type="button" class="btn btn-danger rounded btn-icon waves-effect waves-light"><i class="ri-delete-bin-5-line"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-flex justify-content-end mt-3">
                                    <div class="pagination-wrap hstack gap-2">
                                        <a class="page-item pagination-prev disabled" href="#">{{__('Previous')}}</a>
                                        <ul class="pagination listjs-pagination mb-0">
                                            <li class="active"><a class="page" href="#" data-i="1" data-page="8">{{__('1')}}</a></li>
                                        </ul>
                                        <a class="page-item pagination-next" href="#">{{__('Next')}} </a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>

        </div>
        <!-- container-fluid -->
    </div>
@endsection