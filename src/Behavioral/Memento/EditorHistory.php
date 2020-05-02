<?php
namespace DP\Behavioral\Memento;

class EditorHistory
{
    private $states = [];

    public function push(EditorState $state): void
    {
        array_push($this->states, $state);
    }

    public function pop(): EditorState
    {
        return array_pop($this->states);
    }

    public function getStates()
    {
        return $this->states;
    }
}