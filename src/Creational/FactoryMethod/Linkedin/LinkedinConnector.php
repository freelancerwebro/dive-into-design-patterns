<?php
namespace DP\Creational\FactoryMethod\Linkedin;
use DP\Creational\FactoryMethod\SocialNetworkConnector;

class LinkedinConnector implements SocialNetworkConnector
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Send API request to log in into Linkedin\n";
    }

    public function logOut(): void
    {
        echo "Send API request to log out from Linkedin\n";
    }

    public function createPost($content): void
    {
        echo "Send API request to create a post on Linkedin\n";
    }
}