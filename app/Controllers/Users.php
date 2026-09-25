<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            ['username' => 'admin', 'full_name' => 'Administrator User', 'role' => 'Administrator'],
            ['username' => 'cashier01', 'full_name' => 'John Cashier', 'role' => 'Cashier'],
            ['username' => 'manager01', 'full_name' => 'Sarah Manager', 'role' => 'Manager'],
            ['username' => 'staff01', 'full_name' => 'Michael Staff', 'role' => 'Staff'],
            ['username' => 'cashier02', 'full_name' => 'Angela Cashier', 'role' => 'Cashier'],
        ];

        return view('users/index', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }
}
