<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'about_us_create',
            ],
            [
                'id'    => 18,
                'title' => 'about_us_edit',
            ],
            [
                'id'    => 19,
                'title' => 'about_us_show',
            ],
            [
                'id'    => 20,
                'title' => 'about_us_delete',
            ],
            [
                'id'    => 21,
                'title' => 'about_us_access',
            ],
            [
                'id'    => 22,
                'title' => 'social_media_link_create',
            ],
            [
                'id'    => 23,
                'title' => 'social_media_link_edit',
            ],
            [
                'id'    => 24,
                'title' => 'social_media_link_show',
            ],
            [
                'id'    => 25,
                'title' => 'social_media_link_delete',
            ],
            [
                'id'    => 26,
                'title' => 'social_media_link_access',
            ],
            [
                'id'    => 27,
                'title' => 'category_create',
            ],
            [
                'id'    => 28,
                'title' => 'category_edit',
            ],
            [
                'id'    => 29,
                'title' => 'category_show',
            ],
            [
                'id'    => 30,
                'title' => 'category_delete',
            ],
            [
                'id'    => 31,
                'title' => 'category_access',
            ],
            [
                'id'    => 32,
                'title' => 'product_create',
            ],
            [
                'id'    => 33,
                'title' => 'product_edit',
            ],
            [
                'id'    => 34,
                'title' => 'product_show',
            ],
            [
                'id'    => 35,
                'title' => 'product_delete',
            ],
            [
                'id'    => 36,
                'title' => 'product_access',
            ],
            [
                'id'    => 37,
                'title' => 'gallery_create',
            ],
            [
                'id'    => 38,
                'title' => 'gallery_edit',
            ],
            [
                'id'    => 39,
                'title' => 'gallery_show',
            ],
            [
                'id'    => 40,
                'title' => 'gallery_delete',
            ],
            [
                'id'    => 41,
                'title' => 'gallery_access',
            ],
            [
                'id'    => 42,
                'title' => 'value_create',
            ],
            [
                'id'    => 43,
                'title' => 'value_edit',
            ],
            [
                'id'    => 44,
                'title' => 'value_show',
            ],
            [
                'id'    => 45,
                'title' => 'value_delete',
            ],
            [
                'id'    => 46,
                'title' => 'value_access',
            ],
            [
                'id'    => 47,
                'title' => 'mission_create',
            ],
            [
                'id'    => 48,
                'title' => 'mission_edit',
            ],
            [
                'id'    => 49,
                'title' => 'mission_show',
            ],
            [
                'id'    => 50,
                'title' => 'mission_delete',
            ],
            [
                'id'    => 51,
                'title' => 'mission_access',
            ],
            [
                'id'    => 52,
                'title' => 'goal_create',
            ],
            [
                'id'    => 53,
                'title' => 'goal_edit',
            ],
            [
                'id'    => 54,
                'title' => 'goal_show',
            ],
            [
                'id'    => 55,
                'title' => 'goal_delete',
            ],
            [
                'id'    => 56,
                'title' => 'goal_access',
            ],
            [
                'id'    => 57,
                'title' => 'service_create',
            ],
            [
                'id'    => 58,
                'title' => 'service_edit',
            ],
            [
                'id'    => 59,
                'title' => 'service_show',
            ],
            [
                'id'    => 60,
                'title' => 'service_delete',
            ],
            [
                'id'    => 61,
                'title' => 'service_access',
            ],
            [
                'id'    => 62,
                'title' => 'contact_create',
            ],
            [
                'id'    => 63,
                'title' => 'contact_edit',
            ],
            [
                'id'    => 64,
                'title' => 'contact_show',
            ],
            [
                'id'    => 65,
                'title' => 'contact_delete',
            ],
            [
                'id'    => 66,
                'title' => 'contact_access',
            ],
            [
                'id'    => 67,
                'title' => 'setting_create',
            ],
            [
                'id'    => 68,
                'title' => 'setting_edit',
            ],
            [
                'id'    => 69,
                'title' => 'setting_show',
            ],
            [
                'id'    => 70,
                'title' => 'setting_delete',
            ],
            [
                'id'    => 71,
                'title' => 'setting_access',
            ],
            [
                'id'    => 72,
                'title' => 'client_create',
            ],
            [
                'id'    => 73,
                'title' => 'client_edit',
            ],
            [
                'id'    => 74,
                'title' => 'client_show',
            ],
            [
                'id'    => 75,
                'title' => 'client_delete',
            ],
            [
                'id'    => 76,
                'title' => 'client_access',
            ],
            [
                'id'    => 77,
                'title' => 'post_create',
            ],
            [
                'id'    => 78,
                'title' => 'post_edit',
            ],
            [
                'id'    => 79,
                'title' => 'post_show',
            ],
            [
                'id'    => 80,
                'title' => 'post_delete',
            ],
            [
                'id'    => 81,
                'title' => 'post_access',
            ],
            [
                'id'    => 82,
                'title' => 'vision_create',
            ],
            [
                'id'    => 83,
                'title' => 'vision_edit',
            ],
            [
                'id'    => 84,
                'title' => 'vision_show',
            ],
            [
                'id'    => 85,
                'title' => 'vision_delete',
            ],
            [
                'id'    => 86,
                'title' => 'vision_access',
            ],
            [
                'id'    => 87,
                'title' => 'about_create',
            ],
            [
                'id'    => 88,
                'title' => 'about_edit',
            ],
            [
                'id'    => 89,
                'title' => 'about_show',
            ],
            [
                'id'    => 90,
                'title' => 'about_delete',
            ],
            [
                'id'    => 91,
                'title' => 'about_access',
            ],
            [
                'id'    => 92,
                'title' => 'requested_product_create',
            ],
            [
                'id'    => 93,
                'title' => 'requested_product_edit',
            ],
            [
                'id'    => 94,
                'title' => 'requested_product_show',
            ],
            [
                'id'    => 95,
                'title' => 'requested_product_delete',
            ],
            [
                'id'    => 96,
                'title' => 'requested_product_access',
            ],
            [
                'id'    => 97,
                'title' => 'request_order_create',
            ],
            [
                'id'    => 98,
                'title' => 'request_order_edit',
            ],
            [
                'id'    => 99,
                'title' => 'request_order_show',
            ],
            [
                'id'    => 100,
                'title' => 'request_order_delete',
            ],
            [
                'id'    => 101,
                'title' => 'request_order_access',
            ],
            [
                'id'    => 102,
                'title' => 'team_create',
            ],
            [
                'id'    => 103,
                'title' => 'team_edit',
            ],
            [
                'id'    => 104,
                'title' => 'team_show',
            ],
            [
                'id'    => 105,
                'title' => 'team_delete',
            ],
            [
                'id'    => 106,
                'title' => 'team_access',
            ],
            [
                'id'    => 107,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
