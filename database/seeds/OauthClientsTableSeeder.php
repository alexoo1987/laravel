<?php


use Illuminate\Database\Seeder;

class OauthClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('oauth_clients')->truncate();

        DB::table('oauth_clients')->insert([
            'id' => (1),
            'user_id' => "1",
            'name' => "author",
            'secret' => "c7iFGhJiq4IWTIxoUpZHyVM40SBnSTHdNPv2yCsn",
            'redirect' => "http://localhost",
            'password_client'=>'1',
            'personal_access_client'=>'1',
            'revoked'=>'1',

            'created_at' => date("2019-05-14 16:46:44"),
            'updated_at' => date("2019-05-14 16:46:44")
        ]);
        DB::table('oauth_clients')->insert([
            'id' => (2),
            'user_id' => "2",
            'name' => "admin",
            'secret' => "c7iFGhJiq4IWTIxoUpZHyVM40SBnSTHdNPv2yCsn",
            'redirect' => "http://localhost",
            'password_client'=>'1',
            'personal_access_client'=>'1',
            'revoked'=>'1',

            'created_at' => date("2019-05-14 16:46:44"),
            'updated_at' => date("2019-05-14 16:46:44")
        ]);
        DB::table('oauth_clients')->insert([
            'id' => (3),
            'user_id' => "3",
            'name' => "editor",
            'secret' => "c7iFGhJiq4IWTIxoUpZHyVM40SBnSTHdNPv2yCsn",
            'redirect' => "http://localhost",
            'password_client'=>'1',
            'personal_access_client'=>'1',
            'revoked'=>'1',

            'created_at' => date("2019-05-14 16:46:44"),
            'updated_at' => date("2019-05-14 16:46:44")
        ]);

    }
}
