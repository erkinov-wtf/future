<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Navigation;
use Illuminate\Database\Seeder;

class NavbarSeeder extends Seeder
{
    public function run()
    {
        $links = [

            [
                'title' => 'Doctors',
                'parent_id' => '0',
                'link' => '0',
                'icon' => '0',
            ],

            [
                'title' => 'Patients',
                'parent_id' => '0',
                'link' => '0',
                'icon' => '0',
            ],

            [
                'title' => 'Apps',
                'parent_id' => '0',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Pharmacy',
                'parent_id' => '0',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Blogs',
                'parent_id' => '0',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Pages',
                'parent_id' => '0',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Email Templates',
                'parent_id' => '0',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Authentication',
                'parent_id' => '0',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'UI Components',
                'parent_id' => '0',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Miscellaneous',
                'parent_id' => '0',
                'link' => '0',
                'icon' => '0',
            ],

            //Here begins sub-categories
            [
                'title' => 'Doctors',
                'parent_id' => '1',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Add Doctor',
                'parent_id' => '1',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Profile',
                'parent_id' => '1',
                'link' => '0',
                'icon' => '0',
            ],

            [
                'title' => 'All Patients',
                'parent_id' => '2',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Add Patients',
                'parent_id' => '2',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Profile',
                'parent_id' => '2',
                'link' => '0',
                'icon' => '0',
            ],

            [
                'title' => 'Chat',
                'parent_id' => '3',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Email',
                'parent_id' => '3',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Calendar',
                'parent_id' => '3',
                'link' => '0',
                'icon' => '0',
            ],

            [
                'title' => 'Shop',
                'parent_id' => '4',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Shop Detail',
                'parent_id' => '4',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Shopcart',
                'parent_id' => '4',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Checkout',
                'parent_id' => '4',
                'link' => '0',
                'icon' => '0',
            ],

            [
                'title' => 'Blogs',
                'parent_id' => '5',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Blog Details',
                'parent_id' => '5',
                'link' => '0',
                'icon' => '0',
            ],

            [
                'title' => 'FAQs',
                'parent_id' => '6',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Reviews',
                'parent_id' => '6',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Invoice',
                'parent_id' => '6',
                'link' => '0',
                'icon' => '0',
            ],

            [
                'title' => 'Confirmation',
                'parent_id' => '7',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Reset Password',
                'parent_id' => '7',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Alert',
                'parent_id' => '7',
                'link' => '0',
                'icon' => '0',
            ],

            [
                'title' => 'Login',
                'parent_id' => '8',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Register',
                'parent_id' => '0',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Forgot Password',
                'parent_id' => '8',
                'link' => '8',
                'icon' => 8,
            ],
            [
                'title' => 'Lock Screen',
                'parent_id' => '8',
                'link' => '0',
                'icon' => '0',
            ],

            [
                'title' => 'Buttons',
                'parent_id' => '9',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Avatars',
                'parent_id' => '9',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Icons',
                'parent_id' => '0',
                'link' => '0',
                'icon' => '0',
            ],

            [
                'title' => 'Coming Soon',
                'parent_id' => '10',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Maintenance',
                'parent_id' => '10',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => '404',
                'parent_id' => '10',
                'link' => '0',
                'icon' => '0',
            ],
            [
                'title' => 'Thank You',
                'parent_id' => '10',
                'link' => '0',
                'icon' => '0',
            ],

        ];



        foreach ($links as $key => $navbar) {

            Navigation::create($navbar);

        }
    }
}
