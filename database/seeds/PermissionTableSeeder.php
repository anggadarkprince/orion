<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('app_permissions')->insert([
            [
                'id' => 1,
                'permission' => 'create-user',
                'description' => 'Manage user account and its role',
            ],
            [
                'id' => 2,
                'permission' => 'read-user',
                'description' => 'Access user data detail and its role',
            ],
            [
                'id' => 3,
                'permission' => 'update-user',
                'description' => 'Update account info and its role',
            ],
            [
                'id' => 4,
                'permission' => 'delete-user',
                'description' => 'Delete user data',
            ],
            [
                'id' => 5,
                'permission' => 'create-story',
                'description' => 'Create new story and update status',
            ],
            [
                'id' => 6,
                'permission' => 'read-story',
                'description' => 'Access to user timeline or stream',
            ],
            [
                'id' => 7,
                'permission' => 'update-story',
                'description' => 'Update published story',
            ],
            [
                'id' => 8,
                'permission' => 'delete-story',
                'description' => 'Delete story and its comment',
            ],
            [
                'id' => 9,
                'permission' => 'send-message',
                'description' => 'Sending message to another user',
            ],
            [
                'id' => 10,
                'permission' => 'delete-message',
                'description' => 'Delete message thread',
            ],
            [
                'id' => 11,
                'permission' => 'create-post',
                'description' => 'Post blog article',
            ],
            [
                'id' => 12,
                'permission' => 'read-post',
                'description' => 'Read a blog post',
            ],
            [
                'id' => 13,
                'permission' => 'update-post',
                'description' => 'Modify post content',
            ],
            [
                'id' => 14,
                'permission' => 'delete-post',
                'description' => 'Remove blog post',
            ],
            [
                'id' => 15,
                'permission' => 'upload-drive',
                'description' => 'Upload file and folder to drive',
            ],
            [
                'id' => 16,
                'permission' => 'access-drive',
                'description' => 'Get access to uploaded file',
            ],
            [
                'id' => 17,
                'permission' => 'modify-drive',
                'description' => 'Modify meta and file access info',
            ],
            [
                'id' => 18,
                'permission' => 'delete-drive',
                'description' => 'Delete uploaded file inside drive',
            ],
            [
                'id' => 19,
                'permission' => 'create-journal',
                'description' => 'Create books, notes and reminder journal',
            ],
            [
                'id' => 20,
                'permission' => 'read-journal',
                'description' => 'Access note book and its content',
            ],
            [
                'id' => 21,
                'permission' => 'update-journal',
                'description' => 'Edit notes and reminder',
            ],
            [
                'id' => 22,
                'permission' => 'delete-journal',
                'description' => 'Remove note book and reminder',
            ],
            [
                'id' => 23,
                'permission' => 'create-showcase',
                'description' => 'Create books, notes and reminder journal',
            ],
            [
                'id' => 24,
                'permission' => 'read-showcase',
                'description' => 'Access a showcase or portfolio',
            ],
            [
                'id' => 25,
                'permission' => 'update-showcase',
                'description' => 'Edit showcase and portfolio',
            ],
            [
                'id' => 26,
                'permission' => 'delete-showcase',
                'description' => 'Remove portfolio data',
            ],
        ]);
    }
}
