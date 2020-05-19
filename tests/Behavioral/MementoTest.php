<?php
require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use DP\Behavioral\Memento\Editor;
use DP\Behavioral\Memento\EditorState;
use DP\Behavioral\Memento\EditorHistory;

class MementoTest extends TestCase
{
    public function testEditorGetterAndSetter()
    {
        $editor = new Editor();
        $editor->setContent("first content");

        $this->assertSame("first content", $editor->getContent());
    }

    public function testEditorCreateIsInstanceOfEditorState()
    {
        $editor = new Editor();
        $editor->setContent("first content");

        $this->assertInstanceOf(EditorState::class, $editor->createState());
    }

    public function testEditorHistoryElementsAreCreated()
    {
        $editor = new Editor();
        $history = new EditorHistory();
        
        $editor->setContent("first content");
        $state = $editor->createState();
        $history->push($state);

        $editor->setContent("second content");
        $state2 = $editor->createState();
        $history->push($state2);

        $expected = [
            $state,
            $state2
        ];
        $this->assertSame($expected, $history->getStates());
    }

    public function testEditorHistoryElementIsRemoved()
    {
        $editor = new Editor();
        $history = new EditorHistory();
        
        $editor->setContent("first content");
        $state = $editor->createState();
        $history->push($state);

        $editor->setContent("second content");
        $state2 = $editor->createState();
        $history->push($state2);

        $editor->restore($history->pop());

        $expected = [
            $state
        ];
        $this->assertSame($expected, $history->getStates());
    }

    public function testEditorHistoryCountOnElementPush()
    {
        $editor = new Editor();
        $history = new EditorHistory();
        
        $editor->setContent("first content");
        $state = $editor->createState();
        $history->push($state);

        $this->assertSame(1, count($history->getStates()));
    }

    public function testEditorHistoryCountOnElementPop()
    {
        $editor = new Editor();
        $history = new EditorHistory();
        
        $editor->setContent("first content");
        $state = $editor->createState();
        $history->push($state);
        $editor->restore($history->pop());

        $this->assertSame(0, count($history->getStates()));
    }
}