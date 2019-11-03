<?php
class Author
{
    private $name;

    private $pages = [];

    public function __construct( $name)
    {
        $this->name = $name;
    }

    public function addToPage( $page)
    {
        $this->pages[] = $page;
    }
}