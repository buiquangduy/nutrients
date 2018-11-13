<?php

namespace App\Domain\Services;

use App\Domain\Repositories\UserRepository;
use App\Domain\Entities\User;
use Carbon\Carbon;

class UserService
{
    /**
     * @var UserRepository
     */
    private $userRepository;
    /**
     * @var User
     */
    private $user;

    /**
     * UserService constructor.
     * @param UserRepository $userRepository
     * @param User $user
     */
    public function __construct(UserRepository $userRepository, User $user)
    {
        $this->userRepository = $userRepository;
        $this->user = $user;
    }

    /**
     * @param array $userInformation
     * @return User
     */
    public function create(array $userInformation): User
    {
        $userInformation['password'] = bcrypt($userInformation['password']);
        $userInformation = array_merge($userInformation, ['record_point' => 0, 'recorded_count' => 0]);

        return $this->userRepository->create($userInformation);
    }

    /**
     * Update basic user information
     *
     * @param User $user
     * @param array $data
     * @return bool
     */
    public function update(User $user, array $data): bool
    {
        $user->lastname_kanji = $data['lastname_kanji'];
        $user->firstname_kanji = $data['firstname_kanji'];
        $user->lastname_katakana = $data['lastname_katakana'];
        $user->firstname_katakana = $data['firstname_katakana'];
        $user->email = $data['email'];
        $user->dob = $data['dob'];
        $user->sex = $data['sex'];
        $user->country_id = $data['country_id'];
        $user->province_id = $data['province_id'];

        return $this->userRepository->update($user);
    }

    /**
     * Update password
     *
     * @param User $user
     * @param array $data
     * @return bool
     */
    public function changePassword(User $user, array $data): bool
    {
        $user->password = bcrypt($data['password']);

        return $this->userRepository->update($user);
    }

    /**
     * Active account
     *
     * @param string $verifyCode
     * @return User|\Illuminate\Database\Eloquent\Model|null|object|static|int
     */
    public function activeAccount(string $verifyCode)
    {
        $this->user = $this->userRepository->findByVerifyCode($verifyCode);
        if (!$this->user) {
            return 0;
        }

        $currentDate  = Carbon::now();
        $create_at = $this->user->created_at;
        if ($currentDate->subDay() > $create_at && $this->user->active == 0) {
            return 1;
        }

        if ($this->user->active == 1) {
            return 2;
        }

        $this->user->active = 1;
        $this->userRepository->update($this->user);

        return $this->user;
    }
}
