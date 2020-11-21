<?php
/**
 * Resource Model Contacts

 * @category  AlexDbModules
 * @package   AlexDbModules\Contacts
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\Contacts\Model\ResourceModel;

use AlexDbModules\Contacts\Api\Data\ContactsInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Contacts
 * @package AlexDbModules\Contacts\Model\ResourceModel
 */
class Contacts extends AbstractDb
{
    /**
     *Contacts resource model initialization with table name and primary key
     */
    protected function _construct()
    {
        $this->_init('contacts_info', ContactsInterface::ID);
    }
}
