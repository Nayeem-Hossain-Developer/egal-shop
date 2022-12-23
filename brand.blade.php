@extends('backend.layouts.master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xxl-12 mb-3">
                    <div class="card mt-xxl-n5">
                        <div class="card-header">
                            <h4 class="card-title mb-0">{{__('Add Brand')}}</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="brandTitle" class="form-label">{{__('Title')}}<span class="require-span">*</span></label>
                                            <input type="text" class="form-control" id="brandTitle" name="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="brandSlug" class="form-label">{{__('Slug')}}</label>
                                            <input type="text" class="form-control" id="brandSlug" name="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="brandLogo" class="form-label">{{__('Logo')}}</label>
                                            <input type="file" class="form-control" id="brandLogo" name="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="brandBanner" class="form-label">{{__('Banner')}}</label>
                                            <input type="file" class="form-control" id="brandBanner" name="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="brandMetaTitle" class="form-label">{{__('Meta Title')}}</label>
                                            <input type="text" class="form-control" id="brandMetaTitle" name="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="brandMetaDescription" class="form-label">{{__('Meta Description')}}</label>
                                            <input type="text" class="form-control" id="brandMetaDescription" name="">
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary rounded">{{__('Submit')}}</button>    
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
                            <h4 class="card-title mb-0 float-start mt-2">{{__('All Brand')}}</h4>
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
                                            <th scope="col">{{__('Title')}}</th>
                                            <th scope="col">{{__('Logo')}}</th>
                                            <th scope="col">{{__('Status')}}</th>
                                            <th scope="col">{{__('Action')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{__('Name')}}1</th>
                                            <td>{{__('Basic Plan')}}</td>
                                            <td><img src="https://img.freepik.com/free-vector/colorful-palm-silhouettes-background_23-2148541792.jpg?w=2000" alt="" class="w-40px"></td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" checked>
                                                </div>
                                            </td>
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