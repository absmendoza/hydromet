@extends('layouts.app')
 
@section('content')


<div class="row">
    <div id="admin" class="col s12">
        <div class="card material-table">
            <div class="table-header">
            <span class="table-title">User CRUD</span>
                <div class="actions">
                    <a href="#createUser" class="waves-effect btn-flat modal-trigger nopadding"><i class="material-icons">create</i></a>
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
                        <a href="#viewUser-<?= $user->id?>" class="waves-effect btn modal-trigger"><i class="material-icons">info_outline</i></a>
                        <a href="#editUser-<?= $user->id?>" class="waves-effect btn modal-trigger"><i class="material-icons">edit</i></a>
                            {!! Form::open(['method' => 'DELETE','route' => ['userCRUD.destroy', $user->id],'style'=>'display:inline']) !!}
                            
                            <!-- USER ACTIVITY -->
                            <?php  $time = Carbon\Carbon::now(new DateTimeZone('Asia/Singapore')); ?>
                            {!! Form::text('employee_id', Auth::user()->employee_id,['class'=>'form-control', 'readonly'=>'true', 'hidden'=>'true']) !!}
                            {!! Form::text('position', Auth::user()->position,['class'=>'form-control', 'readonly'=>'true', 'hidden'=>'true']) !!}
                            {!! Form::text('employee_name', Auth::user()->firstname.' '.Auth::user()->lastname,['class'=>'form-control', 'readonly'=>'true', 'hidden'=>'true']) !!}
                            {!! Form::text('activity', 'Deleted '.$user->firstname.' '.$user->lastname."'s (".$user->employee_id.') account',['class'=>'form-control', 'readonly'=>'true', 'hidden'=>'true']) !!}	
                            {!! Form::text('sent_at_date', $time->toDateString(),['class'=>'form-control datepicker', 'readonly'=>'true', 'hidden'=>'true']) !!}	
                            {!! Form::text('sent_at_time', $time->toTimeString(),['class'=>'form-control datepicker', 'readonly'=>'true', 'hidden'=>'true']) !!}	
                        
                            
                            <button class="btn waves-effect waves-light" type="submit">
                                <i class="material-icons">delete</i>
                            </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    
                    <div id="modal-fixed-footer">
                        <div id="viewUser-<?= $user->id?>" class="modal modal-fixed-footer">
                            <div class="modal-content">
                                <div class="modal-header">
                            
                                </div>
                               @include('UserCRUD.show')
                            </div>
                        <div class="modal-footer">
                            <a href="#" class="waves-effect btn-flat modal-action modal-close">Close</a>
                        </div>
                        </div>
                    </div>

                    <div id="modal-fixed-footer">
                        <div id="editUser-<?= $user->id?>" class="modal modal-fixed-footer">
                            <div class="modal-content">
                                <div class="modal-header">
                                </div>
                                {!! Form::model($user, ['method' => 'POST','route' => ['userCRUD.update', $user->id]]) !!}
                               @include('UserCRUD.edit')
                            </div>
                            <div class="modal-footer">
                                <button class="waves-effect btn-flat" type="submit" name="action">Edit</button>
                                 {{ Form::close() }}
                                <a href="#" class="waves-effect btn-flat modal-action modal-close">Close</a>
                            </div>
                        </div>
                    </div>

                    <div id="modal-fixed-footer">
                        <div id="createUser" class="modal modal-fixed-footer">
                            <div class="modal-content">
                                <div class="modal-header">
                                </div>
                                {!! Form::open(array('route' => 'userCRUD.store','method'=>'POST', 'class' => 'form-horizontal')) !!}
                                {{ csrf_field() }}
                               @include('UserCRUD.create')
                            </div>
                            <div class="modal-footer">
                                <button class="waves-effect btn-flat" type="submit" name="action">Create</button>
                                 {{ Form::close() }}
                                <a href="#" class="waves-effect btn-flat modal-action modal-close">Close</a>
                            </div> 
                        </div>
                    </div>

                    @endforeach
                </tbody>   
            </table>
        </div>
    </div>
</div>


@endsection