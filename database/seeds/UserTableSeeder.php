<?php


//php artisan db:seed
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;


class UserTableSeeder extends Seeder {


	public function run(){
	    
	    $users =[
	        
	        [
	        	'email'    => 'hectorgool@gmail.com',
        		'password' => Hash::make( 'asdf' )
	        ]//,
	        //[
	        	//'email'    => 'hectorgool@gmail.com',
        		//'password' => Hash::make( 'asdf' )
	        //]
	    ];
	    
	    DB::table('users')->delete();

	    foreach ($users as $user){
	        User::create($user);
	    }
	    
	    echo '\n Los registros de la tabla users han sido creados \n';
	        
	}


}
