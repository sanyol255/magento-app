<?php
/**
 *SurveyResultsList ViewModel for filtering data from database

 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerSurvey
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\CustomerSurvey\ViewModel;

use AlexDbModules\CustomerSurvey\Api\Data\SurveyInterface;
use AlexDbModules\CustomerSurvey\Api\SurveyRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 * Class SurveyResultsList
 * @package AlexDbModules\CustomerSurvey\ViewModel
 */
class SurveyResultsList implements ArgumentInterface
{
    /**
     * @var SurveyRepositoryInterface
     */
    protected $repository;
    /**
     * @var SearchCriteriaBuilder
     */
    protected $searchCriteriaBuilder;

    /**
     * SurveyResultsList constructor.
     * @param SurveyRepositoryInterface $repository
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     */
    public function __construct(SurveyRepositoryInterface $repository, SearchCriteriaBuilder $searchCriteriaBuilder)
    {
        $this->repository = $repository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
    }

    /**
     * @return mixed
     * Getting survey results where age less than 100 years
     */
    public function getSurveyResults()
    {
        $searchCriteria = $this->searchCriteriaBuilder->addFilter(SurveyInterface::AGE, 100, 'lt')->create();
        return $this->repository->getList($searchCriteria);
    }
}
