<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class AccessControlsTableSeeder extends Seeder
{


    public function run()
    {

        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        $dev = \App\Models\User::where('email', 'dev@gmail.com')->first();

        if (empty($dev)) {

            $data = [
                [
                    'id' => '1',
                    'name' => 'Developer',
                    'email' => 'dev@gmail.com',
                    'password' => bcrypt('developer'),
                ],
                [
                    'id' => '2',
                    'name' => 'Super Admin',
                    'email' => 'super@parcelsheba.com',
                    'password' => bcrypt('12345678'),
                ],
                [
                    'id' => '3',
                    'name' => 'Admin',
                    'email' => 'admin@parcelsheba.com',
                    'password' => bcrypt('12345678'),
                ],
                [
                    'id' => '4',
                    'name' => 'Accountant',
                    'email' => 'accountant@parcelsheba.com',
                    'password' => bcrypt('12345678'),
                ],
                [
                    'id' => '5',
                    'name' => 'Jahir',
                    'email' => 'imdjohirul974@gmail.com',
                    'password' => bcrypt('12345678'),
                ],
                [
                    'id' => '6',
                    'name' => 'Ayesha ',
                    'email' => 'aishasiddika1994@gmail.com',
                    'password' => bcrypt('12345678'),
                ],
                [
                    'id' => '7',
                    'name' => 'Anika ',
                    'email' => 'khushimeem069@gmail.com',
                    'password' => bcrypt('12345678'),
                ],
                [
                    'id' => '8',
                    'name' => 'Razzak',
                    'email' => 'raz.cse20@gmail.com',
                    'password' => bcrypt('12345678'),
                ]

            ];

            DB::table('users')->insert($data);
        }



        $dev = \App\Models\User::where('email', 'dev@gmail.com')->first();

        //data for roles table
        $data = [
            ['name' => 'Developer', 'guard_name' => 'web'],
            ['name' => 'Super Admin', 'guard_name' => 'web'],
            ['name' => 'Admin', 'guard_name' => 'web'],
            ['name' => 'Accountant', 'guard_name' => 'web'],
            ['name' => 'Incharge', 'guard_name' => 'web'],
        ];
        DB::table('roles')->insert($data);

        //data for permissions table
        $data = [
            ['name' => 'dashboard', 'guard_name' => 'web', 'group_name' => 'dashboard'],

            ['name' => 'user-list', 'guard_name' => 'web', 'group_name' => 'user'],
            ['name' => 'user-create', 'guard_name' => 'web', 'group_name' => 'user'],
            ['name' => 'user-show', 'guard_name' => 'web', 'group_name' => 'user'],
            ['name' => 'user-edit', 'guard_name' => 'web', 'group_name' => 'user'],
            ['name' => 'user-delete', 'guard_name' => 'web', 'group_name' => 'user'],

            ['name' => 'role-list', 'guard_name' => 'web', 'group_name' => 'role'],
            ['name' => 'role-create', 'guard_name' => 'web', 'group_name' => 'role'],
            ['name' => 'role-show', 'guard_name' => 'web', 'group_name' => 'role'],
            ['name' => 'role-edit', 'guard_name' => 'web', 'group_name' => 'role'],
            ['name' => 'role-delete', 'guard_name' => 'web', 'group_name' => 'role'],

            ['name' => 'permission-list', 'guard_name' => 'web', 'group_name' => 'permission'],
            ['name' => 'permission-create', 'guard_name' => 'web', 'group_name' => 'permission'],
            ['name' => 'permission-show', 'guard_name' => 'web', 'group_name' => 'permission'],
            ['name' => 'permission-edit', 'guard_name' => 'web', 'group_name' => 'permission'],
            ['name' => 'permission-delete', 'guard_name' => 'web', 'group_name' => 'permission'],

            ['name' => 'hub-list', 'guard_name' => 'web', 'group_name' => 'hub'],
            ['name' => 'hub-create', 'guard_name' => 'web', 'group_name' => 'hub'],
            ['name' => 'hub-show', 'guard_name' => 'web', 'group_name' => 'hub'],
            ['name' => 'hub-edit', 'guard_name' => 'web', 'group_name' => 'hub'],
            ['name' => 'hub-delete', 'guard_name' => 'web', 'group_name' => 'hub'],

            ['name' => 'division-list', 'guard_name' => 'web', 'group_name' => 'division'],
            ['name' => 'division-create', 'guard_name' => 'web', 'group_name' => 'division'],
            ['name' => 'division-show', 'guard_name' => 'web', 'group_name' => 'division'],
            ['name' => 'division-edit', 'guard_name' => 'web', 'group_name' => 'division'],
            ['name' => 'division-delete', 'guard_name' => 'web', 'group_name' => 'division'],

            ['name' => 'district-list', 'guard_name' => 'web', 'group_name' => 'district'],
            ['name' => 'district-create', 'guard_name' => 'web', 'group_name' => 'district'],
            ['name' => 'district-show', 'guard_name' => 'web', 'group_name' => 'district'],
            ['name' => 'district-edit', 'guard_name' => 'web', 'group_name' => 'district'],
            ['name' => 'district-delete', 'guard_name' => 'web', 'group_name' => 'district'],

            ['name' => 'upazila-list', 'guard_name' => 'web', 'group_name' => 'upazila'],
            ['name' => 'upazila-create', 'guard_name' => 'web', 'group_name' => 'upazila'],
            ['name' => 'upazila-show', 'guard_name' => 'web', 'group_name' => 'upazila'],
            ['name' => 'upazila-edit', 'guard_name' => 'web', 'group_name' => 'upazila'],
            ['name' => 'upazila-delete', 'guard_name' => 'web', 'group_name' => 'upazila'],

            ['name' => 'area-list', 'guard_name' => 'web', 'group_name' => 'area'],
            ['name' => 'area-create', 'guard_name' => 'web', 'group_name' => 'area'],
            ['name' => 'area-show', 'guard_name' => 'web', 'group_name' => 'area'],
            ['name' => 'area-edit', 'guard_name' => 'web', 'group_name' => 'area'],
            ['name' => 'area-delete', 'guard_name' => 'web', 'group_name' => 'area'],

            ['name' => 'rider-list', 'guard_name' => 'web', 'group_name' => 'rider'],
            ['name' => 'rider-create', 'guard_name' => 'web', 'group_name' => 'rider'],
            ['name' => 'rider-show', 'guard_name' => 'web', 'group_name' => 'rider'],
            ['name' => 'rider-edit', 'guard_name' => 'web', 'group_name' => 'rider'],
            ['name' => 'rider-delete', 'guard_name' => 'web', 'group_name' => 'rider'],

            ['name' => 'weight-range-list', 'guard_name' => 'web', 'group_name' => 'weight-range'],
            ['name' => 'weight-range-create', 'guard_name' => 'web', 'group_name' => 'weight-range'],
            ['name' => 'weight-range-show', 'guard_name' => 'web', 'group_name' => 'weight-range'],
            ['name' => 'weight-range-edit', 'guard_name' => 'web', 'group_name' => 'weight-range'],
            ['name' => 'weight-range-delete', 'guard_name' => 'web', 'group_name' => 'weight-range'],

            ['name' => 'merchant-list', 'guard_name' => 'web', 'group_name' => 'merchant'],
            ['name' => 'merchant-create', 'guard_name' => 'web', 'group_name' => 'merchant'],
            ['name' => 'merchant-show', 'guard_name' => 'web', 'group_name' => 'merchant'],
            ['name' => 'merchant-edit', 'guard_name' => 'web', 'group_name' => 'merchant'],
            ['name' => 'merchant-delete', 'guard_name' => 'web', 'group_name' => 'merchant'],

            ['name' => 'delivery-charge-list', 'guard_name' => 'web', 'group_name' => 'delivery-charge'],
            ['name' => 'delivery-charge-create', 'guard_name' => 'web', 'group_name' => 'delivery-charge'],
            ['name' => 'delivery-charge-show', 'guard_name' => 'web', 'group_name' => 'delivery-charge'],
            ['name' => 'delivery-charge-edit', 'guard_name' => 'web', 'group_name' => 'delivery-charge'],
            ['name' => 'delivery-charge-delete', 'guard_name' => 'web', 'group_name' => 'delivery-charge'],

            ['name' => 'parcel-type-list', 'guard_name' => 'web', 'group_name' => 'parcel-type'],
            ['name' => 'parcel-type-create', 'guard_name' => 'web', 'group_name' => 'parcel-type'],
            ['name' => 'parcel-type-show', 'guard_name' => 'web', 'group_name' => 'parcel-type'],
            ['name' => 'parcel-type-edit', 'guard_name' => 'web', 'group_name' => 'parcel-type'],
            ['name' => 'parcel-type-delete', 'guard_name' => 'web', 'group_name' => 'parcel-type'],

            ['name' => 'pickup-request-list', 'guard_name' => 'web', 'group_name' => 'pickup-request'],
            ['name' => 'pickup-request-create', 'guard_name' => 'web', 'group_name' => 'pickup-request'],
            ['name' => 'pickup-request-show', 'guard_name' => 'web', 'group_name' => 'pickup-request'],
            ['name' => 'pickup-request-edit', 'guard_name' => 'web', 'group_name' => 'pickup-request'],
            ['name' => 'pickup-request-delete', 'guard_name' => 'web', 'group_name' => 'pickup-request'],

            ['name' => 'parcel-list', 'guard_name' => 'web', 'group_name' => 'parcel'],
            ['name' => 'parcel-create', 'guard_name' => 'web', 'group_name' => 'parcel'],
            ['name' => 'parcel-show', 'guard_name' => 'web', 'group_name' => 'parcel'],
            ['name' => 'parcel-edit', 'guard_name' => 'web', 'group_name' => 'parcel'],
            ['name' => 'parcel-delete', 'guard_name' => 'web', 'group_name' => 'parcel'],

            ['name' => 'expense-head-list', 'guard_name' => 'web', 'group_name' => 'expense-head'],
            ['name' => 'expense-head-create', 'guard_name' => 'web', 'group_name' => 'expense-head'],
            ['name' => 'expense-head-show', 'guard_name' => 'web', 'group_name' => 'expense-head'],
            ['name' => 'expense-head-edit', 'guard_name' => 'web', 'group_name' => 'expense-head'],
            ['name' => 'expense-head-delete', 'guard_name' => 'web', 'group_name' => 'expense-head'],

            ['name' => 'expense-list', 'guard_name' => 'web', 'group_name' => 'expense'],
            ['name' => 'expense-create', 'guard_name' => 'web', 'group_name' => 'expense'],
            ['name' => 'expense-show', 'guard_name' => 'web', 'group_name' => 'expense'],
            ['name' => 'expense-edit', 'guard_name' => 'web', 'group_name' => 'expense'],
            ['name' => 'expense-delete', 'guard_name' => 'web', 'group_name' => 'expense'],

            ['name' => 'invoice-list', 'guard_name' => 'web', 'group_name' => 'invoice'],
            ['name' => 'invoice-create', 'guard_name' => 'web', 'group_name' => 'invoice'],
            ['name' => 'invoice-show', 'guard_name' => 'web', 'group_name' => 'invoice'],
            ['name' => 'invoice-edit', 'guard_name' => 'web', 'group_name' => 'invoice'],
            ['name' => 'invoice-delete', 'guard_name' => 'web', 'group_name' => 'invoice'],

            ['name' => 'env-dynamic', 'guard_name' => 'web', 'group_name' => 'env-dynamic'],
            ['name' => 'reason', 'guard_name' => 'web', 'group_name' => 'reason'],
            ['name' => 'batch-upload', 'guard_name' => 'web', 'group_name' => 'batch-upload'],
        ];

        DB::table('permissions')->insert($data);
        //Data for role user pivot
        $data = [
            ['role_id' => 1, 'model_type' => 'App\Models\User', 'model_id' => $dev->id],
            ['role_id' => 2, 'model_type' => 'App\Models\User', 'model_id' => 2],
            ['role_id' => 3, 'model_type' => 'App\Models\User', 'model_id' => 3],
            ['role_id' => 4, 'model_type' => 'App\Models\User', 'model_id' => 4],
            ['role_id' => 5, 'model_type' => 'App\Models\User', 'model_id' => 5],
            ['role_id' => 5, 'model_type' => 'App\Models\User', 'model_id' => 6],
            ['role_id' => 5, 'model_type' => 'App\Models\User', 'model_id' => 7],
            ['role_id' => 1, 'model_type' => 'App\Models\User', 'model_id' => 8],
        ];
        DB::table('model_has_roles')->insert($data);
        //Data for role permission pivot
        $permissions = Permission::all();
        foreach ($permissions as $key => $value) {
            $data = [
                ['permission_id' => $value->id, 'role_id' => 1],
            ];

            DB::table('role_has_permissions')->insert($data);
        }


        // $count_permission = DB::table('permissions')->count();
        // $count_role = DB::table('roles')->count();

        // for ($i = 1; $i <= $count_role; $i++) {
        //     $data = [];
        //     for ($j = 1; $j <= $count_permission; $j++) {
        //         $data[$j]['permission_id'] = $j;
        //         $data[$j]['role_id'] = $i;
        //     }
        //     DB::table('role_has_permissions')->insert($data);
        //}
    }
}
