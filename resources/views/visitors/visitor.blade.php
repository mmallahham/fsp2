

@extends('tst')

@section('content')
@include('partial.formHeader')
@include('partial.errors')

<div class="row text-left form-padding">
    <div class="col-md-12">
        <form action="{{ route('visitor.post') }}" method="post">
            <div class="form-group col-md-12 ">
                <label for="name">Visitor Name:*</label>
                <input type="text" class="form-control" name="name" value="{{old('name')}}">
            </div>
            <div class="form-group col-md-12 ">
                <label for="id-number">Id Card Number:*</label>
                <input type="text" class="form-control" name="id-number" value="{{old('id-number')}}">
            </div>
            <div class="form-group col-md-12 ">
                <label for="id-type">Id Card Type:</label>
                <input type="text" class="form-control" name="id-type" value="{{old('id-type')}}">
            </div>
            <div class="form-group col-md-12 ">
                <label for="mobile">Mobile Number:</label>
                <input type="text" class="form-control" name="mobile" value="{{old('mobile')}}">
            </div>
            <div class="form-group col-md-12 ">
                <label for="Email">Email:</label>
                <input type="text" class="form-control" name="Email" value="{{old('Email')}}"> 
            </div>
            <div class="form-group col-md-12 ">
                <label for="Visitees">Visitees name/department:*</label>
                <input type="text" class="form-control" name="visitees" value="{{old('visitees')}}">
            </div>
            <div class="form-group col-md-12 ">
                <label for="purpose">Purpose:*</label>
                <input type="text" class="form-control" name="purpose" value="{{old('purpose')}}">
            </div>
            <div class="col-md-12"> 
                <button class="btn btn-primary">submit</button>
            </div>
            {{ csrf_field() }}
        </form>
    </div>
</div> 
@include('partial.formFooter')
@endsection