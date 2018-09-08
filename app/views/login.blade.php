@extends('layout')

@section('title')
	Firma BU Giriş
@stop

@section('content')
	<div class="header-breadcrumb mbottom50">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="section-title fleft"></h1>
						<ul class="reset-list">
							<li>
								<p>Firma BU</p>
							</li>
							<li>/</li>
							<li class="active">
								<p>Giriş</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
	</div><!-- end header-breadcrumb -->
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 mbottom50">
					<div class="register-panel thin-shadow clearfix">
						<div class="reg-panel-title">
							<b>Kullanıcı Girişi</b>
						</div>
						{{ Form::open(array('url'=>'Giris', 'method' => 'post', 'class'=>'form-signup')) }}
							@if ($errors->count() > 0)

    								<div class="col-sm-4 alert alert-danger">
      	
			 					    	<ul>
			        					@foreach ($errors->all() as $msg)
			        					<li>{{ $msg }}</li>
			        					@endforeach
			        					</ul>
			    					</div>

								@endif
								@if(Session::get('message'))
									<a href="{{ URL::to('Giris') }}" class="close" data-dismiss="alert">&times;</a>
									<div class="alert alert-danger">{{ Session::get('message') }}</div>
								@endif
							<div class="form-row">
								<div class="form-line full">
									<label for="login_username" class="mbottom5">E-mail</label>
									{{ Form::text('email', null, array('class'=>'form-control', 'id' => 'login_username', 'placeholder'=>'E-mail')) }}
								</div><!-- end form-line -->
								<div class="form-line full">
									<label for="login_password" class="mbottom5">Parola</label>
									{{ Form::password('password', array('class'=>'form-control', 'id' => 'login_password', 'placeholder'=>'Password')) }}
								</div><!-- end form-line -->
								<div class="form-line full">
								{{ Form::submit('Giriş', array('class'=>'btn2 btn-2 small-pale mbottom30')) }}
							{{ Form::close() }}
									<a href="#" class="lost-password">Parolamı Unuttum?</a>
								</div><!-- end form-line -->
							</div><!-- end form-row -->
						</form>
					</div><!-- end register-panel -->
				</div>
				<div class="col-sm-6 mtop40 mbottom50">
					<div class="reg-panel-title">
						<b>Yeni Hesap Oluştur</b>
					</div>
					<p class="mbottom20">Creating an account is quick and easy, and will allow you to move through our checkout quicker. You can also store multiple shipping addresses, gain access to your order history, and much more. Go on.</p>
					<a href="#" class="btn2 btn-2 small-pale mbottom30">Kayıt Ol</a>
				</div>
			</div>
		</div>
	</div><!-- end content -->



@stop