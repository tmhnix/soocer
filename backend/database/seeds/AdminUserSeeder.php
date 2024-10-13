<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $admin = new User([
            'username' => 'ADMIN',
            'first_name' => 'Super admin',
            'last_name' => 'Super admin',
            'phone' => '0123456789',
            'parent_id' => 1,
            'parents' => '1',
            'wallet' => 1000000000,
            'credit_line' => 1000000000,
            'user_type' => User::TYPE_ADMIN
        ]);

        $admin->setPassword('bongda@123');
        $admin->save();

        $admin = new User([
            'username' => 'B0',
            'first_name' => 'Super',
            'last_name' => 'Super',
            'phone' => '0123456789',
            'parent_id' => 1,
            'parents' => '1',
            'wallet' => 50000,
            'credit_line' => 50000,
            'user_type' => User::TYPE_SUPER
        ]);

        $admin->setPassword('123456');
        $admin->save();

        $admin = new User([
            'username' => 'B000',
            'first_name' => 'master',
            'last_name' => 'Super',
            'phone' => '0123456789',
            'parent_id' => 2,
            'parents' => '1-2',
            'wallet' => 50000,
            'credit_line' => 50000,
            'user_type' => User::TYPE_MASTER
        ]);

        $admin->setPassword('123456');
        $admin->save();

        $admin = new User([
            'username' => 'B00000',
            'first_name' => 'agent',
            'last_name' => 'agent',
            'phone' => '0123456789',
            'parent_id' => 3,
            'parents' => '1-2-3',
            'wallet' => 50000,
            'credit_line' => 50000,
            'user_type' => User::TYPE_AGENT
        ]);

        $admin->setPassword('123456');
        $admin->save();

        $admin = new User([
            'username' => 'B0000000',
            'first_name' => 'member',
            'last_name' => 'agent',
            'phone' => '0123456789',
            'parent_id' => 4,
            'parents' => '1-2-3-4',
            'wallet' => 50000,
            'bongdamin' => 1,
            'bongdaper' => 100000000,
            'bongdamax' => 100000000,
            'discountAsian' => 0.0025,
            'credit_line' => 50000,
            'user_type' => User::TYPE_MEMBER
        ]);

        $admin->setPassword('123456');
        $admin->save();

        $admin = new User([
            'username' => 'B0000001',
            'first_name' => 'member',
            'last_name' => 'agent',
            'phone' => '0123456789',
            'parent_id' => 4,
            'parents' => '1-2-3-4',
            'wallet' => 50000,
            'bongdamin' => 1,
            'bongdaper' => 100000000,
            'bongdamax' => 100000000,
            'credit_line' => 50000,
            'discountAsian' => 0.0025,
            'user_type' => User::TYPE_MEMBER
        ]);

        $admin->setPassword('123456');
        $admin->save();

         $admin = new User([
            'username' => 'B00001',
            'first_name' => 'agent 1',
            'last_name' => 'agent 1',
            'phone' => '0123456789',
            'parent_id' => 3,
            'parents' => '1-2-3',
            'wallet' => 50000,
            'credit_line' => 50000,
            'user_type' => User::TYPE_AGENT
        ]);

        $admin->setPassword('123456');
        $admin->save();

        $admin = new User([
            'username' => 'B00002',
            'first_name' => 'agent 3',
            'last_name' => 'agent 3',
            'phone' => '0123456789',
            'parent_id' => 3,
            'parents' => '1-2-3',
            'wallet' => 50000,
            'credit_line' => 50000,
            'user_type' => User::TYPE_AGENT
        ]);

        $admin->setPassword('123456');
        $admin->save();
    }
}
