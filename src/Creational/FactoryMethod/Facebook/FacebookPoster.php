<?php
namespace DP\Creational\FactoryMethod\Facebook;
use DP\Creational\FactoryMethod\SocialNetworkConnector;
use DP\Creational\FactoryMethod\SocialNetworkPoster;

class FacebookPoster extends SocialNetworkPoster
{
    private $login, $passwork;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}