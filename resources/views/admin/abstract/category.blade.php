@extends('admin.layouts.default')

@section('content')

<div class="row"> 
       <div class="col-sm-12"> 
                <div class="animated fadeIn">
                    <div class="myrow">
                         <button
                             class="btn btn-success btn-sm"
                             data-toggle="modal"
                             data-target="#createCategoryModal">Create Category</button>
                    </div>
                </div>
         </div>
</div>

    <div class="row"> 
       <div class="col-sm-12"> 
       <div class="animated fadeIn">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Categories</strong>
                        </div>
                        <div class="card-body">
                            <table id="categories-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Wedding</td>
                                        <td>
                                            <button class="btn btn-primary">
                                                View
                                            </button>

                                            <button class="btn btn-info">
                                                Edit
                                            </button>

                                            <button class="btn btn-danger">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>

                                  
                                <tbody>
                            </table>
                        </div>
                    </div>
             </div>       
        </div>
    </div>

    @include('admin.pages.components.createCategory')
@endsection