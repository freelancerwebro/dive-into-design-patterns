<?php
namespace DP\Behavioral\Memento;

class Editor
{
    private $content;

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
    }

    public function createState(): EditorState
    {
        return new EditorState($this->content);
    }

    public function restore(EditorState $state): EditorState
    {
        $this->content = $state->getContent();
        return $state;
    }
}