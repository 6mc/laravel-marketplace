<?php

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function postLogin()
	{
		$input = Input::all();

		$rules = array(
			'email' => 'required|email',
			'password' => 'required'
			);

		$messages = array(
                'email.required' => 'Lütfen mail adresinizi yazın',
                'email.email' => 'Lütfen geçerli bir mail adresi yazın',
                'password.required' => 'Lütfen şifrenizi yazın'
                );

		$v = Validator::make($input, $rules, $messages);

		if($v->fails()) {
			// HATA MESAJLARI VE INPUT DEĞERLERİYLE FORMA  YÖNLENDİRELİM
            return Redirect::route('Giris')
                    ->withInput()
                    ->withErrors($v->messages());
		} else {

			// BÖYLE BİR ÜYE OLUP OLMADIĞINI KONTROL EDELİM
            if (Auth::attempt(array('email' => $input['email'], 'password' => $input['password'] ))) {
                   
                // OTURUM AÇILDIĞINA GÖRE KULLANICIYI YÖNLENDİRELİM
                return Redirect::to('/');
                        
            } else {
                        
                // GİRİLEN BİLGİLER HATALI MESAJINI VERELİM
                return Redirect::route('Giris')
                        ->withInput()
                        ->withErrors(array('Girdiğiniz mail adresi veya şifre hatalı!'));     
            }
                    
        }
	}

	public function postCreate()
	{
		$input = Input::all();

		$rules = array(
			'first_name'=> 'required|min:3',
			'last_name'	=> 'required|min:2',
			'email' 	=> 'required|email|unique:users',
			'password' 	=> 'required|min:4|confirmed',
			'password_confirmation' => 'required'
		);

		$messages = array(
			'first_name.required'	=> 'Lütfen adınızı yazınız',
			'first_name.min'		=> 'Adınız en az 3 karakterden oluşmalıdır',
			'last_name.required'	=> 'Lütfen soyadınızı yazınız',
			'last_name.min'			=> 'Soyadınız en az 2 karakterden oluşmalıdır',
			'email.required'		=> 'Lütfen mail adresinizi yazınız',
			'email.email' 			=> 'Lütfen geçerli bir mail adresi yazın',
			'email.unique'			=> 'Bu mail adresi zaten kullanılıyor. Lütfen başka bir mail adresi yazın',
			'password.required'		=> 'Lütfen şifrenizi yazınız',
			'password.min'			=> 'Şifreniz minumum 4 karakterden oluşmalıdır',
			'password.confirmed'	=> 'Girdiğiniz şifreler birbiriyle eşleşmiyor',
			'password_confirmation.required' => 'Lütfen şifrenizi doğrulayın'
		);

		// KONTROL (VALIDATION) İŞLEMİNİ GERÇEKLEŞTİRELİM
                $validator = Validator::make($input, $rules, $messages);

                // EĞER VALİDASYON BAŞARISIZ OLURSA HATALARI GÖSTERELİM
                if ($validator->fails()) {
                    
                    // HATA MESAJLARI VE INPUT DEĞERLERİYLE FORMA  YÖNLENDİRELİM
                    return Redirect::route('Giris')
                            ->withInput()
                            ->withErrors($validator->messages());
                    
                } else {
                    
                    // ÜYEYİ KAYIT EDELİM
                    $user = User::create(array(
                    	'first_name' => $input['first_name'],
                    	'last_name' => $input['last_name'],
                    	'email' => $input['email'],
                    	'password' => Hash::make($input['password']),
                    	'firma_id' => 0,
                    	'status' => '0',
                    ));
                    
                    // KAYIT SAYFASINA YÖNLENDİRELİM
                    return Redirect::to('Kayit')->with('message', 'Kaydınız Yönetici onayına gönderilmiştir');
                    
                }

	}

}
