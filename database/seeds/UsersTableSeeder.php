<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        die;
//        $user = new \App\User();
//        $user->id=1;
//        $user->email='asd@app.ua';
//        $user->name='avtor';
//        $user->password=bcrypt('secret');
//        $user->save();

//        DB::table('users')->truncate();

        DB::table('users')->insert([
           // 'id' => (1),
            'name' => "author",
            'email' => "1a@app.ua",
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'roll'=>'avtor',
            'remember_token'=>'1JlTbAUsz31f6fyZ9zEt70Z4lZChHAgGgGwUL5O5EXdK1mzN319DFI81qO5W'
        ]);
        DB::table('users')->insert([
          //  'id' => (2),
            'name' =>"admin",
            'email' => "2a@app.ua",
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'roll'=>'admin',
            'remember_token'=>'1JlTbAUsz31f6fyZ9zEt70Z4lZChHAgGgGwUL5O5EXdK1mzN319DFI81qO5W'
        ]);
        DB::table('users')->insert([
           // 'id' => (3),
            'name' => "redactor",
            'email' => "3a@app.ua",
            'password' => bcrypt('secret'),
            'roll'=>'editor',
            'remember_token'=>'1JlTbAUsz31f6fyZ9zEt70Z4lZChHAgGgGwUL5O5EXdK1mzN319DFI81qO5W'
        ]);



//        for($i=0; $i<20; $i++){
//            try {
//                $user = factory(\App\User::class)->make([
//                    'email' => $i . "asd@app.ua",
//                    'name' => "avtor",
//                    'password' => bcrypt('secret'),
//                    'roll' => 'admin'
//                ]);
//            }catch ($exception $exc){
//                var_dump($exc);
//            }
//        }

    }
}
