<?php
namespace DP\Creational\FactoryMethod;

interface SocialNetworkConnector
{
    public function logIn(): void;
    public function logOut(): void;
    public function createPost($content): void;
}