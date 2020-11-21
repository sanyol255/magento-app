<?php
/**
 * Model Contacts

 * @category  AlexDbModules
 * @package   AlexDbModules\Contacts
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\Contacts\Model;

use AlexDbModules\Contacts\Api\Data\ContactsInterface;
use AlexDbModules\Contacts\Model\ResourceModel\Contacts as ResourceModel;
use Magento\Framework\Model\AbstractModel;

/**
 * Class Contacts
 * @package AlexDbModules\Contacts\Model
 */
class Contacts extends AbstractModel implements ContactsInterface
{
    /**
     *Model Contacts initialization
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init(ResourceModel::class);
        $this->setIdFieldName(ContactsInterface::ID);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->getData(ContactsInterface::ID);
    }

    /**
     * @return string
     */
    public function getContactType(): string
    {
        return $this->getData(ContactsInterface::CONTACT_TYPE);
    }

    /**
     * @return string
     */
    public function getContact(): string
    {
        return $this->getData(ContactsInterface::CONTACT);
    }
}
