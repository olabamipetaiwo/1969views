@extends('admin.layouts.default')

@section('content')
    <div class="row"> 
        @include('admin.components.widget') 
    </div>

    <div class="row"> 
        @include('admin.components.socialbox') 
    </div>

    <div class="row"> 
       <div class="col-sm-12"> 
           <h2>Working</h2>
        </div>
       
    </div>

@endsection