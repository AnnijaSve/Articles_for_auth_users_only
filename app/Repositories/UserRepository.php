<?php
namespace App\Repositories;

class UserRepository

{
    public function findByEmail(string $email)
    {
       return $usersQuery = query()
            ->select('*')
            ->from('Users')
            ->where('email = :email')
            ->setParameter('email', $email)
            ->execute()
            ->fetchAssociative();
    }

    public function register($query, $user)
    {
        $query->insert('Users')
            ->values([
                'name' => ':name',
                'email' => ':email',
                'password' => ':password',
                'hashed_email' => ':hashed_email',

            ])
            ->setParameters($user->toArray())
            ->execute();
    }
}