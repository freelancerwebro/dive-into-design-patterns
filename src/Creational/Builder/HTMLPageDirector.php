<?php
namespace DP\Creational\Builder;

class HTMLPageDirector extends AbstractPageDirector
{
    private $builder = null;

    public function __construct(AbstractPageBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function buildPage()
    {
        $this->builder->setTitle('Testing the HTMLPage');
        $this->builder->setHeading('Testing the HTMLPage');
        $this->builder->setText('Testing, testing, testing!');
        $this->builder->setText('Testing, testing, testing, or!');
        $this->builder->setText('Testing, testing, testing, more!');
        $this->builder->formatPage();
    }

    public function getPage()
    {
        return $this->builder->getPage();
    }
}