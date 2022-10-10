@extends('admin.layouts.master')
@section('title')
اضافه كتاب جديد
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
                    <div class="col">
                        <label>العنوان</label>
                        <input type="text" required class="form-control">
                    </div>

                    <div class="col">
                        <label>عدد الصفحات</label>
                        <input type="number" required class="form-control">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col">
                        <label>حاله المنشور</label>
                        <select class="form-control" required>
                            <option value="" disabled selected>-- اختر من القائمه --</option>
                            <option value="1">منشور</option>
                            <option value="0">غير منشور</option>
                        </select>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-12 col-md-6">
                        <p class="text-danger">* صيغة المرفق jpeg ,.jpg , png </p>
                        <h5 class="card-title">المرفقات</h5>

                        <div class="col-sm-12 col-md-12">
                            <input type="file" name="pic" class="dropify" accept=".jpg, .png, image/jpeg, image/png"
                                data-height="70" />
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <p class="text-danger">* صيغة المرفق pdf </p>
                        <h5 class="card-title">المرفقات | الكتاب</h5>

                        <div class="col-sm-12 col-md-12">
                            <input type="file" name="pic" class="dropify" accept=".pdf" data-height="70" />
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col">
                        <label>الرابط الكتب</label>
                        <input type="url" required class="form-control">
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-12 col-md-12 text-center">
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
<!--Internal Fileuploads js-->
<script src="{{ URL::asset('admin/assets/plugins/fileuploads/js/fileupload.js') }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/fileuploads/js/file-upload.js') }}"></script>
@endsection