<?php
require_once 'UserManager.php';

use PHPUnit\Framework\TestCase;

class UserManagerTest extends TestCase
{
    public function testCreateUser()
    {
        $user = new User("John Doe", "john.doe@example.com");
        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals("John Doe", $user->getName());
        $this->assertEquals("john.doe@example.com", $user->getEmail());
    }

    public function testAddUser()
    {
        $userManager = new UserManager();
        $user = new User("John Doe", "john.doe@example.com");

        $userManager->addUser($user);
        $allUsers = $userManager->getAllUsers();

        $this->assertCount(1, $allUsers);
        $this->assertEquals("John Doe", $allUsers[0]->getName());
        $this->assertEquals("john.doe@example.com", $allUsers[0]->getEmail());
    }

    public function testFindUserByEmail()
    {
        $userManager = new UserManager();
        $user1 = new User("John Doe", "john.doe@example.com");
        $user2 = new User("Jane Smith", "jane.smith@example.com");

        $userManager->addUser($user1);
        $userManager->addUser($user2);

        $foundUser = $userManager->findUserByEmail("john.doe@example.com");
        $this->assertInstanceOf(User::class, $foundUser);
        $this->assertEquals("John Doe", $foundUser->getName());

        $notFoundUser = $userManager->findUserByEmail("nonexistent@example.com");
        $this->assertNull($notFoundUser);
    }

    public function testGetAllUsers()
    {
        $userManager = new UserManager();
        $user1 = new User("John Doe", "john.doe@example.com");
        $user2 = new User("Jane Smith", "jane.smith@example.com");

        $userManager->addUser($user1);
        $userManager->addUser($user2);

        $allUsers = $userManager->getAllUsers();
        $this->assertCount(2, $allUsers);
        $this->assertEquals("John Doe", $allUsers[0]->getName());
        $this->assertEquals("Jane Smith", $allUsers[1]->getName());
    }
}

