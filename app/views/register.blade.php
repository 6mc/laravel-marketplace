@extends('layout')

@section('title')
		Firma BU | Kaydol
@stop

@section('content')
		
		<div id="content">
		<div class="container"><br />
			<!--<h6><center>Firma BU | Kayıt</center></h6>-->
			<div class="row">
				<div class="col-sm-6 mbottom50">
					<div class="register-panel thin-shadow clearfix">
						<div class="reg-panel-title">
							<b>Kayıt Bilgileri</b>
						</div>
						{{ Form::open(array('url'=>'Kayit', 'method' => 'post', 'class'=>'form-signup')) }}
							<div class="form-row">
								@if ($errors->count() > 0)

    								<div class="alert alert-danger">
      	
			 					    	<ul>
			        					@foreach ($errors->all() as $msg)
			        					<li>{{ $msg }}</li>
			        					@endforeach
			        					</ul>
			    					</div>

								@endif
								@if(Session::get('message'))
									<a href="{{ URL::to('Kayit') }}" class="close" data-dismiss="alert">&times;</a>
									<div class="alert alert-success">{{ Session::get('message') }}</div>
								@endif
								<div class="form-line full">
									<label class="mbottom5">Ad :</label>
									{{ Form::text('first_name', null, array('class'=>'form-control', 'placeholder'=>'Ad')) }}
								</div><!-- end form-line -->

								<div class="form-line full">
									<label class="mbottom5">Soyad :</label>
									{{ Form::text('last_name', null, array('class'=>'form-control', 'placeholder'=>'Soyad')) }}
								</div><!-- end form-line -->


								<div class="form-line full">
									<label class="mbottom5">E-mail :</label>
									{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email')) }}
								</div><!-- end form-line -->
								
								<div class="form-line full">
									<label class="mbottom5">Parola :</label>
									{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Parola')) }}
								</div><!-- end form-line -->

								<div class="form-line full">
									<label class="mbottom5">Parola Tekrar:</label>
									{{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Parola Tekrar')) }}

									{{ Form::submit('Kayıt Ol', array('class'=>'btn2 btn-2 small-pale mbottom30')) }}
							{{ Form::close() }}
								</div><!-- end form-line -->
							</div><!-- end form-row -->						
					</div><!-- end register-panel -->

				</div>
				<div class="col-sm-6 mtop40 mbottom50">
					<div class="reg-panel-title">
						<b>Hesabım Zaten Var</b>
					</div>
					<p class="mbottom20">Creating an account is quick and easy, and will allow you to move through our checkout quicker. You can also store multiple shipping addresses, gain access to your order history, and much more. Go on.</p>
					<a href="{{ URL::to('Giris') }}" class="btn2 btn-2 small-pale mbottom30">Giriş Yap</a>
				</div>
			</div>
		</div>
	</div><!-- end content -->

@stop