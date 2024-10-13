<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\User;

class RoleSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $permissions = [
            [
                'name' => 'edit_keo_dang_da',
                'display_name' => 'Sửa kèo đang đá'
            ],
            [
                'name' => 'edit_keo_sao_ke',
                'display_name' => 'Sửa kèo trong sao kê'
            ],
            [
                'name' => 'edit_keo_treo',
                'display_name' => 'Xử lý kèo treo'
            ],
            [
                'name' => 'edit_keo_logs',
                'display_name' => 'Lịch sử hoạt động'
            ],
            [
                'name' => 'edit_keo_delete',
                'display_name' => 'Xóa kèo'
            ]
        ];

        $admin = User::find(1);
        foreach ($permissions as $key => $value) {
            $permission = new Permission($value);
            $permission->save();
            $admin->attachPermission($permission);
        }
    }
}
