<?php
/**
 * Model Survey

 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerSurvey
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\CustomerSurvey\Model;

use AlexDbModules\CustomerSurvey\Api\Data\SurveyInterface;
use AlexDbModules\CustomerSurvey\Model\ResourceModel\Survey as ResourceModel;
use Magento\Framework\Model\AbstractModel;

/**
 * Class Survey
 * @package AlexDbModules\CustomerSurvey\Model
 */
class Survey extends AbstractModel implements SurveyInterface
{

    /**
     *Initialization of Survey Model
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init(ResourceModel::class);
        $this->setIdFieldName(SurveyInterface::ID);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->getData(SurveyInterface::NAME);
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->getData(SurveyInterface::AGE);
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->getData(SurveyInterface::EMAIL);
    }

    /**
     * @return int
     */
    public function getFavoriteStoreSectionId(): int
    {
        return $this->getData(SurveyInterface::FAVORITE_STORE_SECTION_ID);
    }

    /**
     * @return string
     */
    public function getPaymentMethod(): string
    {
        return $this->getData(SurveyInterface::PAYMENT_METHOD);
    }

    /**
     * @return string
     */
    public function getDesirableStoreSection(): string
    {
        return $this->getData(SurveyInterface::DESIRABLE_STORE_SECTION);
    }

    /**
     * @return string
     */
    public function getAverageMonthlySpending(): string
    {
        return $this->getData(SurveyInterface::MONTHLY_SPENDING);
    }

    /**
     * @param string $name
     * @return SurveyInterface
     */
    public function setName(string $name): SurveyInterface
    {
        return $this->setData(SurveyInterface::NAME, $name);
    }

    /**
     * @param int $age
     * @return SurveyInterface
     */
    public function setAge(int $age): SurveyInterface
    {
        return $this->setData(SurveyInterface::AGE, $age);
    }

    /**
     * @param string $email
     * @return SurveyInterface
     */
    public function setEmail(string $email): SurveyInterface
    {
        return $this->setData(SurveyInterface::EMAIL, $email);
    }

    /**
     * @param int $favoriteStoreSectionId
     * @return SurveyInterface
     */
    public function setFavoriteStoreSectionId(int $favoriteStoreSectionId): SurveyInterface
    {
        return $this->setData(SurveyInterface::FAVORITE_STORE_SECTION_ID, $favoriteStoreSectionId);
    }

    /**
     * @param string $paymentMethod
     * @return SurveyInterface
     */
    public function setPaymentMethod(string $paymentMethod): SurveyInterface
    {
        return $this->setData(SurveyInterface::PAYMENT_METHOD, $paymentMethod);
    }

    /**
     * @param string $desirableStoreSection
     * @return SurveyInterface
     */
    public function setDesirableStoreSection(string $desirableStoreSection): SurveyInterface
    {
        return $this->setData(SurveyInterface::DESIRABLE_STORE_SECTION, $desirableStoreSection);
    }

    /**
     * @param string $monthlySpending
     * @return SurveyInterface
     */
    public function setAverageMonthlySpending(string $monthlySpending): SurveyInterface
    {
        return $this->setData(SurveyInterface::MONTHLY_SPENDING, $monthlySpending);
    }
}
