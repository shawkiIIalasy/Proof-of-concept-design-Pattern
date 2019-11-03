<?php


class AlphabeticalOrderIterator implements \Iterator
{

    private $collection;
    private $position = 0;
    private $reverse = false;

    public function __construct($collection, $reverse = false)
    {
        $this->collection = $collection;
        $this->reverse = $reverse;
    }

    public function rewind()
    {
        $this->position = $this->reverse ?
            count($this->collection->getItems()) - 1 : 0;
    }

    public function current()
    {
        return $this->collection->getItems()[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        $this->position = $this->position + ($this->reverse ? -1 : 1);
    }

    public function valid()
    {
        return isset($this->collection->getItems()[$this->position]);
    }
}


class WordsCollection implements \IteratorAggregate
{
    private $items = [];

    public function getItems()
    {
        return $this->items;
    }

    public function addItem($item)
    {
        $this->items[] = $item;
    }

    public function getIterator()
    {
        return new AlphabeticalOrderIterator($this);
    }

    public function getReverseIterator()
    {
        return new AlphabeticalOrderIterator($this, true);
    }
}



$collection = new WordsCollection;
$collection->addItem("First");
$collection->addItem(2);
$collection->addItem(true);

echo "Straight traversal:<br>";
foreach ($collection->getIterator() as $item) {
    echo $item . "<br>";
}

echo "<br>";
echo "Reverse traversal:<br>";
foreach ($collection->getReverseIterator() as $item) {
    echo $item . "<br>";
}