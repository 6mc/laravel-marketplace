<?php
class UserTableSeeder extends Seeder {

    public function run() {

        User::create(array(
            'first_name'  => 'Mesut',
            'last_name'  => 'Çittir',
            'password'  => Hash::make('12345'),
            'email'     => 'mesut.cittir@bil.omu.edu.tr',
            'firma_id'  => 0,
            'status'   =>  '1'
        ));



    
    }
}
