<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminUser\StoreAdminUserRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminUserController extends Controller
{
    public function index()
    {
        try {
            $users = Role::whereName('admin')->first()->users;

            return view('admin.admin-user.index', [
                'users' => $users
            ]);
        } catch (Exception $e) {
            return to_route('admin.index');
        }
    }

    public function create()
    {
        try {
            return view('admin.admin-user.create');
        } catch (Exception $e) {
            return to_route('admin.adminUser.index');
        }
    }

    public function store(StoreAdminUserRequest $request)
    {
        DB::beginTransaction();

        try {
            $user = User::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => Hash::make('123456'),
                'default_password' => true
            ]);

            $user->syncRoles(['admin']);

            DB::commit();

            return to_route('admin.adminUser.index');
        } catch (Exception $e) {
            DB::rollBack();
            $message = $e->getCode() == '23000' ? 'Já existe um usuário com esse e-mail' : $e->getMessage();
            notify()->error($message, 'Erro');
            return to_route('admin.adminUser.create');
        }
    }

    public function show()
    {
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
