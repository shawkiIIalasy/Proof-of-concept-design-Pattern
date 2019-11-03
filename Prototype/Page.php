<?php
class Page {
    private $title;
    private $body;
    private $author;
    private $comments=[];
    private $date;

    public function __construct($title,$body,$author)
    {
        $this->title=$title;
        $this->body=$body;
        $this->author=$author;
    }
    public function addComment($comment)
    {
        $this->comments[] = $comment;
    }
    public function __clone()
    {
        $this->title = "Copy of " . $this->title;
        $this->author->addToPage($this);
        $this->comments = [];
        $this->date = new \DateTime;
    }
}