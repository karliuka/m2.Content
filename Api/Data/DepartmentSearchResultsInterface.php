<?php
/**
 * Copyright © 2011-2018 Karliuka Vitalii(karliuka.vitalii@gmail.com)
 * 
 * See COPYING.txt for license details.
 */
namespace Faonni\Content\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 *  Department Search Results Interface
 */
interface DepartmentSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Retrieve Departments List
     *
     * @api     
     * @return \Faonni\Content\Api\Data\DepartmentInterface[]
     */
    public function getItems();

    /**
     * Set Departments List
     *
     * @api     
     * @param \Faonni\Content\Api\Data\DepartmentInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
