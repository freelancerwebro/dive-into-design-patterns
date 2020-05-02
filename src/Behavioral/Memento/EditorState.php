<?php
namespace DP\Behavioral\Memento;

class EditorState
{
    private $content; /** final **/

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}