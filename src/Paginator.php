<?php
namespace Paginator;

class Paginator extends AbstractPaginator implements \Iterator, \ArrayAccess {
    
    
    // GOOD LUCK :)
    private $itemsPerPage;
    private $position;
    private $activePage;

    public function __construct($data)
    {
        parent::__construct($data);
        $this->position  = 0;
    }


    public function current()
    {
        return $this->data[$this->position];
    }


    public function next()
    {
       ++$this->position;
    }


    public function key()
    {
        return $this->position;
    }


    public function valid()
    {
        return isset($this->data[$this->position]);
    }


    public function rewind()
    {
        $this->position = 0;
    }


    public function offsetExists($offset)
    {
        return isset($this->data[$offset]);
    }


    public function offsetGet($offset)
    {
        return $this->data[$offset];
    }


    public function offsetSet($offset, $value)
    {
        $this->data[$offset] = $value;
    }


    public function offsetUnset($offset)
    {
        unset($this->data[$offset]);
    }


    public function setActivePage($number)
    {
        $this->activePage = $number;
        return $this;
    }

    public function setItemsPerPage($number)
    {
        $this->itemsPerPage = $number;
        return $this;
    }

    public function getItems()
    {
       $preData = array_chunk($this->data, $this->itemsPerPage);
       return $preData[$this->activePage-1];
    }

    public function getPagesCount()
    {
        $dataAvaliable = count($this->data);
        return ceil($dataAvaliable / $this->itemsPerPage);
    }
}
