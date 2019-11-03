<?php
abstract class Component
{
    protected $parent;

    public function setParent(Component $parent)
    {
        $this->parent = $parent;
    }

    public function getParent()
    {
        return $this->parent;
    }

    public function add(Component $component) { }

    public function remove(Component $component) { }

    public function isComposite()
    {
        return false;
    }

    abstract public function operation();
}