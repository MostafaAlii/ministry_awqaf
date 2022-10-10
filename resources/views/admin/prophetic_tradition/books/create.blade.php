@extends('admin.layouts.master')
@section('title')
اضافه كتاب جديد
@endsection
@section('css')

@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">كتاب</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                اضافه كتاب جديد</span>
        </div>
    </div>

</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label>اسم الكتاب</label>
                        <input type="text" class="form-control" placeholder="اسم الكتاب">
                    </div>
                    
                </div>
                <br>
                <div class="row">
                    <div class="col-12 text-center">
                        <button class="btn btn-success">اضافه كتاب جديد</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
@endsection