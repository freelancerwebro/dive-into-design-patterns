<?php
namespace DP\Creational\Builder;

interface Page
{
    public function showPage();
    public function setTitle($title);
    public function setHeading($heading);
    public function setText($text);
    public function formatPage();
}