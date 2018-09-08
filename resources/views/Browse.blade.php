@extends('layouts.app')

@section('content')

<div style="margin-top: 4%;"  class="container">
   
    <div id="products" class="row list-group">

@foreach($items as $item)

    
  <?php 

 

  ?>
      


<div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src= <?php  if (is_null($item->photos))
{
  echo "#";
}

else
{
  echo $item->photos;
}
 ?> alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        {{$item->item_name  }}</h4>
                    <p class="group inner list-group-item-text">
                        {{$item->description  }}</p>
                    <div style="    margin-top: 1%;" class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                {{$item->price  }} $</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endforeach



        
        
        
       
    </div>
</div>




@endsection('content')