<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    function users()
    {
        //eagr load
        $users = User::with('bank_account')->latest()->get();

        //lazy load
        // $user = User::find(1);
        // $user->load('bank_account');

        return view('relations.users', compact('users'));
    }

    function account(BankAccount $bank_account)
    {
        dd($bank_account->user->name);
    }

    function category(Category $category)
    {
        $category->load('courses');

        return view('relations.category', compact('category'));
    }
}
