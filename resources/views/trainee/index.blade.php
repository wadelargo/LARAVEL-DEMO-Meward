@extends('pages.base')

@section('content')

    <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Status</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach($trainees as $trainee):?>
                    <tr>
                        <td>{{$trainee->id}}</td>
                        <td>{{$trainee->user->full_name}}</td>
                        <td>{{$trainee->status}}</td>
                        
                    </tr>
                    <?php endforeach;?>
            </tbody>
        </table>
        
@endsection