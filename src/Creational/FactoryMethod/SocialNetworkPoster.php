<?php
namespace DP\Creational\FactoryMethod;

abstract class SocialNetworkPoster
{
    abstract public function getSocialNetwork();

    public function post($content): void
    {
        $network = $this->getSocialNetwork();
        $network->logIn();
        $network->createPost($content);
        $network->logout();
    }
}