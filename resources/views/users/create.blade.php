@extends('layouts.app')

@section('htmlheader_title')
    Create User
@endsection

@section('contentheader_title')
    Create a new user
@endsection

@section('contentheader_description')
    This section allows you to create a new user entry
@endsection

@section('main-content')

   <div class="box box-primary">
       <div class="box-header with-border">
           <h3 class="box-title">User Information</h3>
       </div>
       @if (count($errors) > 0)
           <div class="alert alert-danger">
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
       @endif
       <form role="form" action="{{ url('users') }}" method="POST">
           {{ csrf_field() }}
           <div class="box-body">
               <div class="form-group">
                   <label for="userName">Name</label>
                   <input type="text" class="form-control" id="userName" placeholder="Enter name" name="name">
               </div>
               <div class="form-group">
                   <label for="userEmail">Email</label>
                   <input type="text" class="form-control" id="userEmail" placeholder="Enter email" name="email">
               </div>
               <div class="form-group">
                   <label for="userNewPassword">New Password</label>
                   <input type="password" class="form-control" id="userNewPassword" placeholder="Enter new password" name="password">
               </div>
               <div class="form-group">
                   <label for="userPasswordConfirmation">Password Confirmation</label>
                   <input type="password" class="form-control" id="userPasswordConfirmation" placeholder="Enter password confirmation" name="password_confirmation">
               </div>
           </div>
           <!-- /.box-body -->

           <div class="box-footer">
               <button type="submit" class="btn btn-primary">Submit</button>
           </div>
       </form>
   </div>
@endsection