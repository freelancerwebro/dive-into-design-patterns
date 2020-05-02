<?php
require "vendor/autoload.php";

use DP\Behavioral\Memento\Editor;
use DP\Behavioral\Memento\EditorState;
use DP\Behavioral\Memento\EditorHistory;

$editor = new Editor();
$history = new EditorHistory();

$editor->setContent("first content");
$history->push($editor->createState());

$editor->setContent("second content");
$history->push($editor->createState());

$editor->setContent("third content");
$editor->restore($history->pop());
$editor->restore($history->pop());

echo $editor->getContent() . "\n\n";
