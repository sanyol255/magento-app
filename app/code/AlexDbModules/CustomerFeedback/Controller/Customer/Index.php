<?php
/**
 * CustomerFeedback/Index Action
 *
 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerFeedback
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\CustomerFeedback\Controller\Customer;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    private $pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        /**
         * @param Context $context
         * @param PageFactory $pageFactory
         */
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
    }

    public function execute()
    {
        $page = $this->pageFactory->create();
        return $page;
    }
}
