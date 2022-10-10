@extends('admin.layouts.master')
@section('title')
الاعدادات العامة
@endsection
@section('css')
<link href="{{ URL::asset('admin/assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">الاعدادات العامة</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                الاعدادات العامة
                </span>
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
                        <label>عنوان الموقع</label>
                        <input type="text" required class="form-control" placeholder="اكتب عنوان الموقع">
                    </div>

                    <div class="col">
                        <label>رابط الموقع</label>
                        <input type="url" required class="form-control" placeholder="اكتب رابط الموقع" />
                    </div>
                </div>
                <br>
                <!-- Start Social Links Row -->
                <div class="row">
                        <div class="col">
                            <label>رابط الفيس بوك</label>
                            <input type="url" class="form-control" placeholder="ادخل رابط الفيس بوك" />
                        </div>
                        <div class="col">
                            <label>رابط تويتر</label>
                            <input type="url" class="form-control" placeholder="ادخل رابط تويتر" />
                        </div>  
                </div>
                <!-- End Social Links Row -->
                <br />
                <!-- Start Social Links Row -->
                <div class="row">
                    <div class="col">
                        <label>رابط الانستغرام</label>
                        <input type="url" class="form-control" placeholder="ادخل رابط الانستغرام" />
                    </div>
                    <div class="col">
                        <label>رابط اليوتيوب</label>
                        <input type="url" class="form-control" placeholder="ادخل رابط اليوتيوب" />
                    </div>  
                </div>
                <!-- End Social Links Row -->
                <br />
                <!-- Start Apps Links Row -->
                <div class="row">
                    <div class="col">
                        <label>رابط نظام الاندرويد</label>
                        <input type="url" class="form-control" placeholder="ادخل رابط التطبيق على نظام الاندرويد" />
                    </div>
                    <div class="col">
                        <label>رابط نظام الـIOS</label>
                        <input type="url" class="form-control" placeholder="ادخل رابط التطبيق على نظام IOS" />
                    </div>  
                </div>
                <!-- End Apps Links Row -->

                <br>

                <!-- Start Short Discription -->
                <div class="row">
                    <div class="col">
                        <label>نبذة مختصرة عن الشيخ</label>
                        <textarea class="form-control" placeholder="ادخل وصف مختصر عن الشيخ"></textarea>
                    </div>
                    <div class="col">
                        <label>نبذة مختصرة عن الجمعية</label>
                        <textarea class="form-control" placeholder="ادخل وصف مختصر عن الجمعية"></textarea>
                    </div>
                </div>
                <!-- End Short Description -->

                <br>

                <!-- Start Short Discription -->
                <div class="row">
                    <div class="col">
                        <label>  عن الشيخ</label>
                        <textarea id="sheikh_textarea" class="form-control" placeholder="ادخل وصف عن الشيخ"></textarea>
                    </div>
                    <div class="col">
                        <label>  عن الجمعية</label>
                        <textarea id="association_textarea" class="form-control" placeholder="ادخل وصف عن الجمعية"></textarea>
                    </div>
                </div>
                <!-- End Short Description -->


                <br>

                <!-- Start Short Discription -->
                <div class="row">
                    <div class="col">
                        <label>سياسة الخصوصية</label>
                        <textarea class="form-control" placeholder="ادخل سياسة الخصوصية"></textarea>
                    </div>
                </div>
                <!-- End Short Description -->

                <hr>

                <div class="row">
                    <div class="col-12 col-md-4">
                        <p class="text-danger">* صيغة المرفق jpg, png </p>
                        <h5 class="card-title">صورة الغلاف بالرئيسية</h5>
                        <div class="col-sm-12 col-md-12">
                            <input type="file" name="pic" class="dropify" accept=".mp3" data-height="70" />
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <p class="text-danger">* صيغة المرفق jpg, png </p>
                        <h5 class="card-title">صورة الشيخ بصفحة نبذة عنا</h5>
                        <div class="col-sm-12 col-md-12">
                            <input type="file" name="pic" class="dropify" accept=".mp3" data-height="70" />
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <p class="text-danger">* صيغة المرفق jpg, png </p>
                        <h5 class="card-title">صورة الشيخ بصفحة نبذة عنا</h5>
                        <div class="col-sm-12 col-md-12">
                            <input type="file" name="pic" class="dropify" accept=".mp3" data-height="70" />
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-12 col-md-12 text-center">
                        <button class="btn btn-success">حفظ</button>
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

<script src="{{ URL::asset('admin/assets/plugins/tinymce/langs/ar.js') }}"></script>


@endsection