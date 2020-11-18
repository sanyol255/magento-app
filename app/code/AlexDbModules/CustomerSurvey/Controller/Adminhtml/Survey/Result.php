<?php
/**
 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerSurvey
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */

namespace AlexDbModules\CustomerSurvey\Controller\Adminhtml\Survey;

use Magento\Backend\App\AbstractAction;
use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Results
 *
 * @package AlexDbModules\CustomerSurvey\Controller\Survey
 */
class Result extends AbstractAction implements HttpGetActionInterface
{
    /**
     * Grid view acl resource
     */
    const GRID_VIEW_ACL_RESOURCE = 'AlexDbModules_CustomerSurvey::survey_result_grid';

    /**
     * @var PageFactory
     */
    protected $pageFactory;

    /**
     * Results constructor.
     *
     * @param Action\Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(
        Action\Context $context,
        PageFactory $pageFactory
    ) {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $page = $this->pageFactory->create();
        // Set active menu item - optional
        $page->setActiveMenu('AlexDbModules_CustomerSurvey::survey_result_menu');
        $page->getConfig()->getTitle()->prepend(__('Customer Survey Results'));

        return $page;
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed(static::GRID_VIEW_ACL_RESOURCE);
    }
}
