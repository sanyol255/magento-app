<?php
/**
 * Controller for HelloWorld Action

 * @category  AlexModules
 * @package   AlexModules\HelloWorld
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexModules\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Index
 * @package AlexModules\HelloWorld\Controller\Index
 */
class Index extends Action {
    /**
     * @var PageFactory
     */
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
        /**
         * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
         * @throws \Magento\Framework\Exception\NotFoundException
         */
        $page = $this->pageFactory->create();
        return $page;
    }
}
