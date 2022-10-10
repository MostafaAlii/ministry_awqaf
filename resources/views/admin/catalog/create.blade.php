@extends('admin.layouts.master')
@section('title')
اضافه فهرس جديد
@endsection
@section('css')
<link href="{{ URL::asset('admin/assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">الكتب والمقالات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                اضافه فهرس جديد</span>
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



                    <div class="col">
                        <label>العنوان</label>
                        <input type="text" required class="form-control">
                    </div>

                    <div class="col">
                        <label>رقم الصفحه</label>
                        <input type="number" required class="form-control">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col">
                        <label>الكتاب</label>
                        <select class="form-control" required>
                            <option value="" disabled selected>-- اختر من القائمه --</option>
                            <option value="1">الكتاب الاول</option>
                            <option value="1">الكتاب الثاني</option>

                        </select>
                    </div>
                </div>



                <br>

                <div class="row">
                    <div class="col">
                        <button class="btn btn-success">اضافه فهرس جديد</button>
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
<!--Internal Fileuploads js-->
<script src="{{ URL::asset('admin/assets/plugins/fileuploads/js/fileupload.js') }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/fileuploads/js/file-upload.js') }}"></script>
@endsection