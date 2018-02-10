

@extends('tst')
@section('content')  
<div class="row content-margin">
<div class="col-md-9">   
                <input type="search" class="form-control " name="search" placeholder="Search">
                </div>
            <div class="col-md-2"> 
                <button class="btn btn-primary">submit</button>

    </div>   
</div>
    <div class="row content-margin">
        <div class="col-md-12">
            <table class="table table-striped table-hover">
                <thead class="bg-primary">
                    <tr>
                        <th>Name</th>
                        <th>Id</th>
                        <th>Type</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Visitees</th>
                        <th>Purpose</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($visitors as $visitor)
                    <tr>
                        <td>{{ $visitor['name'] }}</td>
                        <td>{{ $visitor['idNumber'] }}</td>
                        <td>{{ $visitor['type'] }}</td>
                        <td>{{ $visitor['email'] }}</td>
                        <td>{{ $visitor['mobile'] }}</td>
                        <td>{{ $visitor['visitees'] }}</td>
                        <td>{{ $visitor['purpose'] }}</td>
                        <td><img src="{{ $visitor['vimage'] }}" style="height:100px;padding:0;margin:0"></td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection