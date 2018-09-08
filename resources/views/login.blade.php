@extends('layouts.app')

@section('content')



{!! Form::open(['url'   => 'login']) !!}

<div class="form-group" style="width: 20%; margin-right: auto;margin-left: auto;">
    <h1>Sign in to your account</h1>

{!! Form::label ('email', 'email:') !!}
{!! Form::email('email', null, ['class'=>'form-control']    ) !!}

</div>
{!! Form::label ('password', 'password:') !!}
<div class="form-group" style="width: 20%;margin-right: auto;margin-left: auto;">
    


    <input type="password" class="form-control" id="password" name="password" >
</div>





<div class="form-group" style="width: 10%;margin-right: auto;margin-left: auto;">
    

{!! Form::submit('Login', ['class' => 'btn btn-primary form-control']) !!}

</div>




{!! Form::close() !!}
{!! csrf_field() !!}

@endsection
