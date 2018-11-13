<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\User;

class UserRepository
{
    /**
     * Get user information
     *
     * @param array $userInformation
     * @return User
     */
    public function create(array $userInformation): User
    {
        return User::create($userInformation);
    }

    /**
     * Update user profile
     *
     * @param User $user
     * @return bool
     */
    public function update(User $user): bool
    {
        return $user->save();
    }

    /**
     * Increase recorded count number of given user.
     *
     * @param User $user
     * @param $amount
     * @return int
     */
    public function increaseRecordedCount(User $user, $amount = 1)
    {
        return User::query()->where('id', $user->id)->increment('recorded_count', $amount);
    }

    /**
     * Find user by verify code
     *
     * @param string $verifyCode
     * @return \Illuminate\Database\Eloquent\Model|null|object|static
     */
    public function findByVerifyCode(string $verifyCode)
    {
        return User::query()->where('verify_code', $verifyCode)->first();
    }
}
