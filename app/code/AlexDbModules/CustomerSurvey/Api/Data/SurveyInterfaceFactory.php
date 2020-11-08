<?php
/**
 * Factory for SurveyInterface
 *
 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerSurvey
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\CustomerSurvey\Api\Data;

use Magento\Framework\ObjectManagerInterface;

/**
 * Class SurveyInterfaceFactory
 * @package AlexDbModules\CustomerSurvey\Api\Data
 */
class SurveyInterfaceFactory
{
    /**
     * @var ObjectManagerInterface
     */
    protected $_objectManger;

    /**
     * @var mixed|string
     */
    protected $_instanceName;

    /**
     * SurveyInterfaceFactory constructor.
     * @param ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(
        ObjectManagerInterface $objectManager,
        $instanceName = '\\AlexDbModules\\CustomerSurvey\\Api\\Data\\SurveyInterface'
    ) {
        $this->_objectManger = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data = [])
    {
        $object = $this->_objectManger->create($this->_instanceName, $data);
        return $object;
    }

}
