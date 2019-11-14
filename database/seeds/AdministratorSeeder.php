<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->username = "administrator";
        $administrator->name = "Site Administrator";
        $administrator->email = "admin@admin.test";
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->password = \Hash::make("danial123");
        $administrator->avatar = "saat-ini-belum-ada-file.png";
        $administrator->address = "Jogja";
        $administrator->phone = "087836695995";

        $administrator->save();

        $this->command->info("User Admin berhasil diinsert!");
    }
}
