@extends('admin.layouts.master')
@section('title')
اضافه نص جديد
@endsection
@section('css')

@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">نص الحديث</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                اضافه نص جديد</span>
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
                        <label>الكتاب</label>
                        <select class="form-control" required>
                            <option value="" disabled selected>-- اختر من القائمه --</option>
                           <option value="">كتاب الجمعة </option>
                           <option value="">كتاب الاذان</option>
                        </select>
                    </div>

                 

                    <div class="col-12 col-md-6">
                        <label>الباب</label>
                        <select class="form-control" required>
                            <option value="" disabled selected>-- اختر من القائمه --</option>
                           <option value="">فضل التاذين</option>
                        </select>
                    </div>
                </div>
                <br>


                <div class="row">
                    <div class="col">
                        <label>رقم الحديث</label>
                        <input type="text" class="form-control" required>
                    </div>
                </div>
               
                <br>

                <div class="row">
                    <div class="col-12 col-md-12">
                        <label>نص الحديث</label>
                        <textarea class="form-control" rows="5" required></textarea>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col">
                        <label>حاله</label>
                       
                        <select class="form-control" required>
                            <option value="" disabled selected>-- اختر من القائمه --</option>
                            <option value="1">منشور</option>
                            <option value="0">غير منشور</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12 text-center">
                        <button class="btn btn-success">اضافه نص جديد</button>
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