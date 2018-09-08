@extends('layouts.loggedin')

@section('content')



{!! Form::open(['url'   => 'Sell', 'enctype'=> 'multipart/form-data']) !!}

<div class="form-group" style="width: 20%; margin-right: auto;margin-left: auto;">
	<h1>Sell an Item</h1>
{!! Form::label ('title', 'Product name:') !!}
{!! Form::text('item_name', null, ['class'=>'form-control']	) !!}
{!! Form::label ('description', 'Description:') !!}
{!! Form::textarea('description', null, ['class'=>'form-control']	) !!}

{!! Form::label ('desc', 'Picture:') !!}
{!! Form::file('photo', null, ['class'=>'form-control']	) !!}


</div>
<!-- {!! Form::label ('password', 'Password:') !!} -->
<!-- <div class="form-group" style="width: 20%;margin-right: auto;margin-left: auto;">
    


    <input type="password" class="form-control" id="password" name="password" >
</div> -->
{!! Form::label ('price', 'Price:') !!}

    <div class="input-group" style="width: 10%; margin-left: auto; 

    margin-right: auto; margin-bottom: 2%;"> 
        <span class="input-group-addon">$</span>
        <input type="number" value="15" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" name="price" id="price" />
    </div> 




<div class="form-group" style="width: 10%;margin-right: auto;margin-left: auto;">
	

{!! Form::submit('Add Item', ['class' => 'btn btn-primary form-control']) !!}

</div>




{!! Form::close() !!}


@endsection
