<?php
namespace DP\Creational\FactoryMethod\Facebook;
use DP\Creational\FactoryMethod\SocialNetworkConnector;

class FacebookConnector implements SocialNetworkConnector
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Send API request to log in into Facebook\n";
    }

    public function logOut(): void
    {
        echo "Send API request to log out from Facebook\n";
    }

    public function createPost($content): void
    {
        echo "Send API request to create a post on Facebook\n";
    }
}