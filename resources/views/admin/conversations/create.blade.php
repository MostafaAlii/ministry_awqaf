@extends('admin.layouts.master')
@section('title')
اضافه حديث جديد
@endsection
@section('css')
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">النشر اليومي</h4><strong class="text-muted mt-1 tx-13 mr-2 mb-0">/
                اضافه حديث جديد</strong>
        </div>
    </div>

</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">

    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-body">

                <div class="row">


                    <div class="col">
                        <label>اسم الكتب </label>
                        <select class="form-control" required>
                            <option value="" disabled selected>-- اختر من القائمه --</option>
                            <option value="1">الفاتحه</option>
                            <option value="0">البقره</option>
                        </select>
                    </div>

                    <div class="col">
                        <label>اسم الباب</label>
                        <select class="form-control" required>
                            <option value="" disabled selected>-- اختر من القائمه --</option>
                            <option value="1">الفاتحه</option>
                            <option value="0">البقره</option>
                        </select>
                    </div>

                    <div class="col">
                        <label>اسم الحديث</label>
                        <select class="form-control" required>
                            <option value="" disabled selected>-- اختر من القائمه --</option>
                            <option value="1">الفاتحه</option>
                            <option value="0">البقره</option>
                        </select>
                    </div>
                    
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label>اليوم</label>
                        <select class="form-control" required>
                            <option value="" disabled selected>-- اختر من القائمه --</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
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
                    <div class="col">
                        <label>النص</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control" >

                        </textarea>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-success">اضافه حديث جديد</button>
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