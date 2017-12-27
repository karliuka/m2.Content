<?php
/**
 * Copyright © 2011-2018 Karliuka Vitalii(karliuka.vitalii@gmail.com)
 * 
 * See COPYING.txt for license details.
 */
namespace Faonni\Content\Api;

use Faonni\Content\Api\Data\DepartmentInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Department CRUD interface
 */
interface DepartmentRepositoryInterface
{
    /**
     * Create Department
     *
     * @api
     * @param \Faonni\Content\Api\Data\DepartmentInterface $location
     * @return \Faonni\Content\Api\Data\DepartmentInterface
     * @throws \Magento\Framework\Exception\InputException If bad input is provided
     * @throws \Magento\Framework\Exception\State\InputMismatchException If the provided location ID is already used
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(DepartmentInterface $location);

    /**
     * Retrieve Department
     *
     * @api
     * @param int $locationId
     * @return \Faonni\Content\Api\Data\DepartmentInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If location with the specified ID does not exist
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($locationId);

    /**
     * Retrieve Department Which Match A Specified Criteria
     *
     * @api
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Faonni\Content\Api\Data\DepartmentSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(SearchCriteriaInterface $searchCriteria);

    /**
     * Delete Department
     *
     * @api
     * @param \Faonni\Content\Api\Data\DepartmentInterface $location
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(DepartmentInterface $location);

    /**
     * Delete Department By Id
     *
     * @api
     * @param int $locationId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($locationId);
}
