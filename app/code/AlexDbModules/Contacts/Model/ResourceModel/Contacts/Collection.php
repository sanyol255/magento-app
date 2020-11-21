<?php
/**
 * Collection Contacts

 * @category  AlexDbModules
 * @package   AlexDbModules\Contacts
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\Contacts\Model\ResourceModel\Contacts;

use AlexDbModules\Contacts\Model\Contacts;
use AlexDbModules\Contacts\Model\ResourceModel\Contacts as ResourceContacts;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 * @package AlexDbModules\Contacts\Model\ResourceModel\Contacts
 */
class Collection extends AbstractCollection
{
    /**
     *Initialization of contacts collection with model and resource model
     */
    public function _construct()
    {
        $this->_init(Contacts::class, ResourceContacts::class);
    }
}
