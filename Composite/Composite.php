<?php
class Composite extends Component
{

    protected $children;

    public function __construct()
    {
        $this->children = new \SplObjectStorage;
    }

    public function add(Component $component)
    {
        $this->children->attach($component);
        $component->setParent($this);
    }

    public function remove(Component $component)
    {
        $this->children->detach($component);
        $component->setParent(null);
    }

    public function isComposite()
    {
        return true;
    }


    public function operation()
    {
        $results = [];
        foreach ($this->children as $child) {
            $results[] = $child->operation();
        }

        return "Branch(" . implode("+", $results) . ")";
    }
}