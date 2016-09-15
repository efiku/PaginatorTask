<?php

namespace Paginator;

abstract class AbstractPaginator implements IPaginator {

    /**
     * all items
     *
     * @var array
     */
    protected $data = array();

    /**
     * Current index
     *
     * @var int
     */
    protected $current_index = 0;

    /**
     * Insert all data
     *
     * @param array $data
     */
    public function __construct($data) {

        if(is_array($data) === false){
			throw new Exception ("Variable $data must be the array");
		}

        $this->data = $data;
    }
}
