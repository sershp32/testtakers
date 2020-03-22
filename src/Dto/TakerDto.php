<?php

declare(strict_types=1);

namespace App\Dto;

final class TakerDto
{
    private string $login;

    private string $password;

    private string $title;

    private string $lastName;

    private string $firstName;

    private string $gender;

    private string $email;

    private string $picture;

    private string $address;

    public function __construct(
        string $login,
        string $password,
        string $title,
        string $lastName,
        string $firstName,
        string $gender,
        string $email,
        string $picture,
        string $address
    )
    {
        $this->login = $login;
        $this->password = $password;
        $this->title = $title;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->gender = $gender;
        $this->email = $email;
        $this->picture = $picture;
        $this->address = $address;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPicture(): string
    {
        return $this->picture;
    }

    public function getAddress(): string
    {
        return $this->address;
    }
}
