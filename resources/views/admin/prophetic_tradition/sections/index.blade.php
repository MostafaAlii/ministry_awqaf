@extends('admin.layouts.master')
@section('title')
الابواب
@endsection
@section('css')
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">الابواب</h4>
            <span class="text-muted mt-1 tx-13 mr-2 mb-0"></span>
        </div>
    </div>

</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('hadithSections.create') }}" class="btn btn-success">اضافه باب جديد</a>

                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-md-nowrap" id="example1">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>اسم الكتاب</th>
                                <th>اسم الباب</th>
                                <th>العمليات</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>1</td>
                                <td>كتاب الجمعة</td>
                                <td>فضل التاذين</td>
                                <td>
                                    <button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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