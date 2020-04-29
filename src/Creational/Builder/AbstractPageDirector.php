<?php
namespace DP\Creational\Builder;

abstract class AbstractPageDirector
{
    abstract function __construct(AbstractPageBuilder $builder);
    abstract function buildPage();
    abstract function getPage();
}