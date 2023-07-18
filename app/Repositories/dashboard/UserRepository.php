<?php

namespace App\Repositories\dashboard;

use App\Exceptions\GeneralException;
use App\Models\User;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserRepository extends BaseRepository
{
    public function model()
    {
        return User::class;
    }

    public function create(array $data)
    {
        return DB::transaction(function () use ($data) {
            $user = parent::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'role_id' => $data['role_id'],
            ]);

            return $user;
        });
        throw new GeneralException('error');
    }

    public function update(array $data, User $user)
    {
        return DB::transaction(function () use ($data, $user) {
            if ($user->update([
                'name' => $data['name'] ?? $user->name,
                'email' => $data['email'] ?? $user->email,
                'password' => $data['password'] ? Hash::make($data['password']) : $user->password,
                'role_id' => $data['role_id'] ?? $user->role_id,
            ])) {
                return $user;
            }
        });
        throw new GeneralException('error');
    }

    public function destroy($data)
    {
        $user = parent::findOrFail($data);
        if ($user) {
            DB::transaction(function () use ($user) {
                $user->delete();

                return true;
            });
        } else {
            throw new GeneralException('error');
        }
    }
}
