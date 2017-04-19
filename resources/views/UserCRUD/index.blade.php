@extends('layouts.app')
 
@section('content')


<div class="row">
    <div id="admin" class="col s12">
        <div class="card material-table">
            <div class="table-header">
            <span class="table-title">User CRUD</span>
                <div class="actions">
                    <a href="{{ route('userCRUD.create') }}" class="modal-trigger waves-effect btn-flat nopadding"><i class="material-icons">person_add</i></a>
                    <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table id="datatable">
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                    <tr>
                        <td>{{ $user->employee_id }}</td>
                        <td>{{ $user->firstname }} {{ $user->lastname }}</td>
                        <td>{{ $user->position }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                        <a href="{{ route('userCRUD.show',$user->id) }}" class="waves-effect btn"><i class="material-icons">info_outline</i></a>
                        <a href="{{ route('userCRUD.edit',$user->id) }}" class="waves-effect btn"><i class="material-icons">edit</i></a>
                            {!! Form::open(['method' => 'DELETE','route' => ['userCRUD.destroy', $user->id],'style'=>'display:inline']) !!}
                            <button class="btn waves-effect waves-light" type="submit">
                                <i class="material-icons">delete</i>
                            </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>   
            </table>
        </div>
    </div>
</div>


@endsection