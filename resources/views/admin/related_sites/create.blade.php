@extends('admin.layouts.master')
@section('title')
اضافه جديده
@endsection
@section('css')
<link href="{{ URL::asset('admin/assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">مواقع ذات صله</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                اضافه جديده</span>
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
                        <label>اسم</label>
                        <input type="text" required class="form-control">
                    </div>

                    <div class="col">
                        <label>الرابط</label>
                        <input type="url" required class="form-control">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-12 col-md-12">
                        <p class="text-danger">* صيغة المرفق jbg.png </p>
                        <h5 class="card-title">الصروه</h5>

                        <div class="col-sm-12 col-md-12">
                            <input type="file" name="pic" class="dropify" accept=".pdf" data-height="70" />
                        </div>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col">
                        <button class="btn btn-success">اضافه  جديد</button>
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