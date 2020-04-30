<?php
namespace DP\Creational\Builder;

class HTMLPage implements Page
{
    private $page = null;
    private $page_title = null;
    private $page_heading = null;
    private $page_text = null;

    public function showPage()
    {
        return $this->page;
    }

    public function setTitle($title)
    {
        $this->page_title = $title;
    }

    public function setHeading($heading)
    {
        $this->page_heading = $heading;
    }

    public function setText($text)
    {
        $this->page_text .= $text;
    }

    public function formatPage()
    {
        $this->page = '<html>';
        $this->page .= '<head><title>'.$this->page_title.'</title></head>';
        $this->page .= '<body>';
        $this->page .= '<h1>'.$this->page_heading.'</h1>';
        $this->page .= $this->page_text;
        $this->page .= '</body>';
        $this->page .= '</html>';
    }
}