# User Management System - PHP

This repository contains a simple implementation of a user management system using PHP, which includes basic features such as adding users, retrieving all users, and searching for users by email. 

## Task Overview

The task was to create a small PHP-based user management system with the following requirements:
- **User Class**: Represent a user with a `name` and `email` address.
- **UserManager Class**: Manage a collection of users, with the ability to add users, retrieve all users, and find a user by their email address.
- **PHP Unit Tests**: Implement unit tests to ensure the functionality of the classes, including testing the creation of users, adding users, retrieving all users, and finding a user by email.

## PHP Classes

### `User` Class
This class represents a user in the system and provides methods to access the user's `name` and `email`.

- **Constructor**: Initializes the `User` object with `name` and `email`.
- **Methods**:
  - `getName()`: Returns the user's name.
  - `getEmail()`: Returns the user's email.
  - `__toString()`: Returns a string representation of the user (e.g., `Name: John Doe, Email: john.doe@example.com`).

### `UserManager` Class
This class manages the collection of `User` objects. It allows you to add users, retrieve all users, and find a user by their email.

- **Methods**:
  - `addUser(User $user)`: Adds a `User` to the collection.
  - `getAllUsers()`: Retrieves an array of all `User` objects in the collection.
  - `findUserByEmail(string $email)`: Finds a user by their email. Returns the `User` object if found, or `null` if not found.

## PHPUnit Tests

### `UserManagerTest` Class
This is a test class that uses PHPUnit to ensure that the functionality of the `UserManager` and `User` classes works as expected. The following tests are included:

- **`testCreateUser()`**: Verifies that a `User` object can be created with a valid name and email.
- **`testAddUser()`**: Verifies that a `User` can be added to the `UserManager` and retrieved correctly.
- **`testFindUserByEmail()`**: Tests the ability of `UserManager` to find a user by email. Also ensures it returns `null` when the email is not found.
- **`testGetAllUsers()`**: Verifies that multiple users can be added to the `UserManager` and retrieved correctly.

## How to Run the Tests

1. Install PHPUnit if you haven't already. You can follow the official installation guide here: [PHPUnit Installation](https://phpunit.de/getting-started/phpunit-10.html)
   
2. Navigate to the project directory and run the tests using the following command:
   ```bash
   phpunit UserManagerTest.php
