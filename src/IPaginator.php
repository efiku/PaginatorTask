<?php
namespace Paginator;

interface IPaginator {
 
    /**
     * Set Active page
     * 
     * @param int $number
     */
    public function setActivePage($number);
    
    /**
     * Set number of items for each page
     * 
     * @param int $number
     */
    public function setItemsPerPage($number);
    
    /**
     * Get all items from active page
     */
    public function getItems();
    
    /**
     * Return number of all pages
     */
    public function getPagesCount();        
}
