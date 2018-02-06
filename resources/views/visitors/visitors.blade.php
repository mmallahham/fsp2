

@extends('tst')
@section('content')  
<div class="row content-margin">
<div class="col-md-2">   
                <input type="search" class="form-control col-md-12 " name="search" placeholder="Search">
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
                        <td>{{ $visitor['id'] }}</td>
                        <td>{{ $visitor['type'] }}</td>
                        <td>{{ $visitor['email'] }}</td>
                        <td>{{ $visitor['mobile'] }}</td>
                        <td>{{ $visitor['visitees'] }}</td>
                        <td>{{ $visitor['purpose'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection