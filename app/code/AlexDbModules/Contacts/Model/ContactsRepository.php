<?php
/**
 * Repository for Contacts

 * @category  AlexDbModules
 * @package   AlexDbModules\Contacts
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\Contacts\Model;

use AlexDbModules\Contacts\Api\ContactsRepositoryInterface;
use AlexDbModules\Contacts\Model\ResourceModel\Contacts\CollectionFactory;

/**
 * Class ContactsRepository
 * @package AlexDbModules\Contacts\Model
 */
class ContactsRepository implements ContactsRepositoryInterface
{
    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    /**
     * @var
     */
    protected $contacts;

    /**
     * ContactsRepository constructor.
     * @param CollectionFactory $collectionFactory
     * @param $contacts
     */
    public function __construct(CollectionFactory $collectionFactory, $contacts)
    {
        $this->collectionFactory = $collectionFactory;
        $this->contacts = $contacts;
    }

    /**
     * @return array
     */
    public function showContacts()
    {
        $contacts = $this->collectionFactory->create();

        return $contacts;
    }
}
