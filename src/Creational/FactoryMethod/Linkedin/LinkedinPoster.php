<?php
namespace DP\Creational\FactoryMethod\Linkedin;
use DP\Creational\FactoryMethod\SocialNetworkConnector;
use DP\Creational\FactoryMethod\SocialNetworkPoster;

class LinkedinPoster extends SocialNetworkPoster
{
    private $login, $passwork;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedinConnector($this->login, $this->password);
    }
}