<?php
/**
 * Action Info/Index

 * @category  AlexDbModules
 * @package   AlexDbModules\Contacts
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */

namespace AlexDbModules\Contacts\Controller\Info;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Index
 * @package AlexDbModules\Contacts\Controller\Info
 */
class Index extends Action
{
    /**
     * @var PageFactory
     */
    protected $contactsFactory;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $contactsFactory
     */
    public function __construct(
        Context $context,
        PageFactory $contactsFactory
    ) {
        parent::__construct($context);
        $this->contactsFactory = $contactsFactory;
    }

    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $contacts = $this->contactsFactory->create();
        return $contacts;
    }
}
