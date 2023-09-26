<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\UserDataTable;
use App\Models\User;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->authorizeResource(User::class, 'user');
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index(UserDataTable $dataTable)
    {
        return $dataTable->render('user.index');
    }

    /**
     * Display a listing of emails
     *
     */
    public function emails()
    {
        Gate::authorize('udpate-user');
        if (Auth()->user()->cannot('seeEmails', Auth()->user())) {
            abort(403);
        }

        $users = User::all();
        return view('user.emails', ['users' => $users]);
    }


    /**
     * Store a new value for avatar
     *
     * @param Request $request
     * @param User $user
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function storeAvatar(Request $request, User $user): RedirectResponse
    {
        Gate::authorize('udpate-user');
        $this->validate($request, [
            'avatar' => ['required', 'image', 'dimensions:max_width=500,max_height=500']
        ]);


        $user->update(
            ['avatar_path' => request()->file('avatar')->storePublicly('', 'avatars')]
        );

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return Application|Factory|View|\Illuminate\View\View
     */
    public function show(User $user)
    {
        return view('user.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return Application|Factory|\Illuminate\View\View|View
     */
    public function edit(User $user)
    {
        Gate::authorize('udpate-user');
        $action = URL::route('user.update',['user' => $user]);
        $method = 'PATCH';

        return view('user.edit', compact('action', 'method','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param User $user
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(User $user): RedirectResponse
    {
        Gate::authorize('udpate-user');
        $this->validate(request(), [
                'name' =>  'required',
            ]
        );

        $data = request()->all();

        /*
        if (!$data['password'])
        {
            unset($data['password']);
        }
        */
        //dd($data);
        if (array_key_exists('email_verified_at',$data) )
        {
            $data['email_verified_at'] = Carbon::createFromFormat('d/m/Y', $data['email_verified_at'])->format('Y-m-d');
        }

        $user->update($data);

        return redirect()->route('user.index')
            ->with(['alert' => 'success', 'message' => 'Data updated' ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(User $user): RedirectResponse
    {
        Gate::authorize('udpate-user');
        $user->delete();
        return redirect(route('user.list'))->with( ['message' => 'Fiche supprimée', 'alert' => 'success']);
    }

}
