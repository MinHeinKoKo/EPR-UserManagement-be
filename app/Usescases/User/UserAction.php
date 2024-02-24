<?php


namespace App\Usescases\User;


use App\Interfaces\User\UserInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserAction
{
    private $userRepository;

    public function __construct(UserInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function fetchAllUsers()
    {
        return $this->userRepository->fetchAllUser();
    }

    public function fetchSingleUser()
    {
        return Auth::user();
    }

    public function store(array $data)
    {
        return $this->userRepository->store($data);
    }

    public function update(array $data , User $user)
    {
        return $this->userRepository->update($data , $user);
    }

    public function delete(User $user)
    {
        return $this->userRepository->delete($user);
    }
}
