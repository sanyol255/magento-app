<?php
/**
 * Repository for Survey Model

 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerSurvey
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\CustomerSurvey\Model;

use AlexDbModules\CustomerSurvey\Api\Data\SurveyInterface;
use AlexDbModules\CustomerSurvey\Api\Data\SurveyInterfaceFactory;
use AlexDbModules\CustomerSurvey\Api\SurveyRepositoryInterface;
use AlexDbModules\CustomerSurvey\Model\ResourceModel\Survey as ResourceSurvey;
use AlexDbModules\CustomerSurvey\Model\ResourceModel\Survey\CollectionFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResultsInterfaceFactory;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Class SurveyRepository
 * @package AlexDbModules\CustomerSurvey\Model
 */
class SurveyRepository implements SurveyRepositoryInterface
{
    /**
     * @var ResourceSurvey
     */
    protected $resourceModel;
    /**
     * @var SurveyInterfaceFactory
     */
    protected $modelFactory;
    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;
    /**
     * @var CollectionProcessorInterface
     */
    protected $processor;
    /**
     * @var SearchResultsInterfaceFactory
     */
    protected $searchResultsFactory;

    /**
     * SurveyRepository constructor.
     * @param ResourceSurvey $resourceModel
     * @param SurveyInterfaceFactory $modelFactory
     * @param CollectionFactory $collectionFactory
     * @param CollectionProcessorInterface $processor
     * @param SearchResultsInterfaceFactory $searchResultsFactory
     */
    public function __construct(
        ResourceSurvey $resourceModel,
        SurveyInterfaceFactory $modelFactory,
        CollectionFactory $collectionFactory,
        CollectionProcessorInterface $processor,
        SearchResultsInterfaceFactory $searchResultsFactory
    ) {
        $this->resourceModel = $resourceModel;
        $this->modelFactory =  $modelFactory;
        $this->collectionFactory = $collectionFactory;
        $this->processor = $processor;
        $this->searchResultsFactory = $searchResultsFactory;
    }

    /**
     * @param int $id
     * @return mixed|void
     * @throws NoSuchEntityException
     */
    public function getById(int $id)
    {
        $model = $this->modelFactory->create();
        $this->resourceModel->load($model, $id, SurveyInterface::ID);
        if (!$model->getId()) {
            throw new NoSuchEntityException(__('There is not such entity %1 !', $id));
        }
    }

    /**
     * @param SearchCriteriaInterface $criteria
     * @return \Magento\Framework\Api\SearchResultsInterface|mixed
     */
    public function getList(SearchCriteriaInterface $criteria)
    {
        $collection = $this->collectionFactory->create();

        $this->processor->process($criteria, $collection);

        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());

        return $searchResults;
    }

    /**
     * @param SearchCriteriaInterface $criteria
     * @return \Magento\Framework\Api\SearchResultsInterface|mixed
     */
    public function getListWithStoreSectionNames(SearchCriteriaInterface $criteria)
    {
        $collection = $this->collectionFactory->create();

        $this->processor->process($criteria, $collection);

        $collection->joinStoreSectionNames();

        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());

        return $searchResults;
    }
    /**
     * @param int $id
     * @return mixed|void
     */
    public function deleteById(int $id)
    {
        try {
            $model = $this->getById($id);
            $this->delete($model);
        } catch (NoSuchEntityException $e) {
        }
    }

    /**
     * @param SurveyInterface $model
     * @return mixed|void
     */
    public function delete(SurveyInterface $model)
    {
        try {
            $this->resourceModel->delete($model);
        } catch (\Exception $e) {
        }
    }

    /**
     * @param SurveyInterface $model
     * @return SurveyInterface|mixed|null
     */
    public function save(SurveyInterface $model)
    {
        try {
            $this->resourceModel->save($model);
        } catch (\Exception $e) {
            return null;
        }

        return $model;
    }
}
