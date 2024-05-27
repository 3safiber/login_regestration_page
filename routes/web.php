<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Models\subject;
use Illuminate\Database\Eloquent\Factories\Sequence;

use function Pest\Laravel\post;

use function PHPSTORM_META\type;

Route::view('/', 'users.login');
Route::view('/regester', 'users.create');


Route::post('/regester', function () {
    request()->validate([
        'username' => ['required', 'min:8'],
        'email' => ['required', 'email'],
        'password' => ['required', 'regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}$/'],
        're-password' => ['required', 'same:password'],
    ]);
    DB::insert(
        'insert into users (username, password,email) values (?, ?,?)',
        [
            request('username'),
            bcrypt(request('password')),
            request('email')
        ]
    );
    return redirect('/');
});

Route::post('/', function (Request $request) {
    // Validate the incoming request
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Retrieve the user by email
    $user = User::where('email', $request->input('email'))->first();

    // Check if user exists
    if ($user) {
        // Check if user is active
        if ($user->activation == 0) {
            // If the user is inactive, redirect back with an error message
            return redirect()->back()->with('error', 'This account is inactive, please wait for the adminstrator to activate your acount');
        }

        // Check if passwords match
        if (Hash::check($request->input('password'), $user->password)) {
            // If validation passes, redirect to the user's page
            return redirect("/users/{$user->id}");
        } else {
            return redirect()->back()->withErrors([
                'password' => 'the password incorrect.',
            ]);
        }
    }

    // If validation fails, redirect back with errors
    return redirect()->back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
});


//show
Route::get('/users', function () {
    $users = user::with('subjects')->paginate(10);
    return view('users.show', [
        'users' => $users,
    ]);
});

//index
Route::get('/users/{user}', function (user $user) {
    // $user = user::with('subjects')->find($id);
    $subjects = $user->subjects()->get();

    return view('users.index', [
        'user' => $user,
        'subjects' => $subjects
    ]);
});
