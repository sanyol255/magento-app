<?php
/**
 * Interface SurveyRepository
 *
 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerSurvey
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\CustomerSurvey\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface SurveyRepositoryInterface
 * @package AlexDbModules\CustomerSurvey\Api
 */
interface SurveyRepositoryInterface
{

    /**
     * @param int $id
     * @return mixed
     */
    public function getById(int $id);

    /**
     * @param SearchCriteriaInterface $criteria
     * @return mixed
     */
    public function getList(SearchCriteriaInterface $criteria);

    /**
     * @param SearchCriteriaInterface $criteria
     * @return mixed
     */
    public function getListWithStoreSectionNames(SearchCriteriaInterface $criteria);
    /**
     * @param int $id
     * @return mixed
     */
    public function deleteById(int $id);

    /**
     * @param Data\SurveyInterface $model
     * @return mixed
     */
    public function delete(Data\SurveyInterface $model);

    /**
     * @param Data\SurveyInterface $model
     * @return mixed
     */
    public function save(Data\SurveyInterface $model);
}
