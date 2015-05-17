<?php


//php artisan db:seed
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Equipos;


class EquiposTableSeeder extends Seeder {


	public function run(){
	    
	    $equipos =[
	        
	        [
	        	'equipo'    => 'Buffalo Bills',
        		'ciudad'    => 'Orchard Park, NY2',
        		'confirmed' => true
	        ],
	        [
	            'equipo'    => 'Miami Dolphins',
        		'ciudad'    => 'Miami Gardens, FL',
        		'confirmed' => true
	        ]
	    ];
	    
	    DB::table('equipos')->delete();

	    foreach ($equipos as $equipo){
	        Equipos::create($equipo);
	    }
	    
	    echo '\n Los registros de la tabla equipos han sido creados \n';
	        
	}


}

