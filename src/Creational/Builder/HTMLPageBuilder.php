<?php
namespace DP\Creational\Builder;

class HTMLPageBuilder extends AbstractPageBuilder
{
    private $page = null;

    public function __construct()
    {
        $this->page = new HTMLPage();
    }

    public function getPage()
    {
        return $this->page;
    }

    public function setTitle($title)
    {
        $this->page->setTitle($title);
    }

    public function setHeading($heading)
    {
        $this->page->setHeading($heading);
    }

    public function setText($text)
    {
        $this->page->setText($text);
    }

    public function formatPage()
    {
        $this->page->formatPage();
    }
}