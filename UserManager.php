<?php

class User
{
    private string $name;
    private string $email;

    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function __toString(): string
    {
        return "Name: {$this->getName()}, Email: {$this->getEmail()}";
    }
}

class UserManager
{
    private array $users = [];

    public function addUser(User $user): void
    {
        $this->users[] = $user;
    }

    public function getAllUsers(): array
    {
        return $this->users;
    }

    public function findUserByEmail(string $email): ?User
    {
        foreach ($this->users as $user) {
            if ($user->getEmail() === $email) {
                return $user;
            }
        }
        return null;
    }
}

