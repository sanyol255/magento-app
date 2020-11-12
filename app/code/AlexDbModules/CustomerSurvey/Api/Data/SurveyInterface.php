<?php
/**
 * Interface Survey
 *
 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerSurvey
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\CustomerSurvey\Api\Data;

/**
 * Interface SurveyInterface
 * @package AlexDbModules\CustomerSurvey\Api\Data
 */
interface SurveyInterface
{
    const ID = 'id';
    const NAME = 'customer_name';
    const AGE = 'customer_age';
    const EMAIL = 'customer_email';
    const FAVORITE_STORE_SECTION_ID = 'favorite_store_section_id';
    const PAYMENT_METHOD = 'preferred_payment_method';
    const DESIRABLE_STORE_SECTION = 'desirable_store_section';
    const MONTHLY_SPENDING = 'average_monthly_spending';

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @return int
     */
    public function getAge() : int;

    /**
     * @return string
     */
    public function getEmail() : string;

    /**
     * @return int
     */
    public function getFavoriteStoreSectionId() : int;

    /**
     * @return string
     */
    public function getPaymentMethod() : string;

    /**
     * @return string
     */
    public function getDesirableStoreSection() : string;

    /**
     * @return string
     */
    public function getAverageMonthlySpending() : string;

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name) : self;

    /**
     * @param int $age
     * @return $this
     */
    public function setAge(int $age) : self;

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email) : self;

    /**
     * @param int $favoriteStoreSectionId
     * @return $this
     */
    public function setFavoriteStoreSectionId(int $favoriteStoreSectionId) : self;

    /**
     * @param string $paymentMethod
     * @return $this
     */
    public function setPaymentMethod(string $paymentMethod) : self;

    /**
     * @param string $desirableStoreSection
     * @return $this
     */
    public function setDesirableStoreSection(string $desirableStoreSection) : self;

    /**
     * @param string $monthlySpending
     * @return $this
     */
    public function setAverageMonthlySpending(string $monthlySpending) : self;
}
