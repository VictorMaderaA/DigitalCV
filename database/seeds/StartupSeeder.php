<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class StartupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $roles = [
            'Super',
        ];
        foreach ($roles as $role){
            $user = Role::query()->where('name',$role)->first();
            if($user){
                continue;
            }

            $newRole = new Role();
            $newRole->create([
                'name' => $role
            ]);
        }


        $emails = [
            'victor.madera.a@gmail.com',
            'victor.madera@alumnos.uneatlantico.es'
        ];

        foreach ($emails as $email){
            $user = User::query()->where('email',$email)->first();
            if($user){
                $user->assignRole(1, 'Super');
                continue;
            }

            $user = new User();
            $user->name = explode( '@', $email )[0];
            $user->email = $email;
            $user->password = Hash::make(Str::random(12));
            $user->save();

            $user->assignRole(1, 'Super');
        }
    }
}
