<?php
/**
 * Block ContactsInfo

 * @category  AlexDbModules
 * @package   AlexDbModules\Contacts
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */

namespace AlexDbModules\Contacts\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use AlexDbModules\Contacts\Api\ContactsRepositoryInterface;

/**
 * Class ContactsInfo
 * @package AlexDbModules\Contacts\Block
 */
class ContactsInfo extends Template
{
    /**
     * @var ContactsRepositoryInterface
     */
    protected $repository;

    /**
     * ContactsInfo constructor.
     * @param Context $context
     * @param ContactsRepositoryInterface $repository
     * @param array $data
     */
    public function __construct(
        Context $context,
        ContactsRepositoryInterface $repository,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->repository = $repository;
    }

    /**
     * @return array
     * Method that return array with all contacts
     */
    public function showContactsInfo()
    {
        return $this->repository->showContacts();
    }
}
