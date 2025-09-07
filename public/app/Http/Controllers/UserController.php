<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show(): View
    {
        // $name = fake()->name();
        // $email = fake()->unique()->safeEmail();
        // $age = random_int(1, 99);
        // DB::insert('insert into test (id, name, email, age) values (?, ?, ?, ?)', [NULL,  $name, $email, $age]);

        //DB::update('update test set age = ? where id = ?', [$id, $id]);

        //DB::delete('delete from test where id = ?', [$id]);

        $users = DB::table('users')->orderByDesc('id')->get();

        //$users = DB::select('select * from test where id = ?', [$id]);

        return view('users', [
            'users' => $users,
        ]);
    }
}
