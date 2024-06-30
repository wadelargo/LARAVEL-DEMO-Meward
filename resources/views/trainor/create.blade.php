@extends('pages.base')

@section('content')
<h1>Create Trainor</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('trainors/create')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="user_id">Select User</label>
                <select name="user_id" id="user_id" class="form-select">
                    @foreach ($users as $userId => $user)
                        <option value="{{$userId}}">{{$user}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="specialty">Specialty</label>
                <input type="text" name="specialty" id="specialty" class="form-control">
            </div>
            <div class="d-grip gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary mt-2" type="submit">Add Trainor</button>
            </div>
    </div>
</div>
@endsection
