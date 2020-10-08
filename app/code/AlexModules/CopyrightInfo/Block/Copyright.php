<?php
/**
 * Block Copyright

 * @category  AlexModules
 * @package   AlexModules\CopyrightInfo
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexModules\CopyrightInfo\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

/**
 * Class Copyright
 * @package AlexModules\CopyrightInfo\Block
 */
class Copyright extends Template
{
    /**
     * @var string
     */
//    private $company = 'Unix Corp. ';
    /**
     * @var string
     */
//    private $foundationDate = ' Jan 01, 1970';
    /**
     * Copyright constructor.
     * @param Context $context
     * @param array $data
     */
    public function __construct(Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }
    /**
     * @return \Magento\Framework\Phrase
     */
    public function getCopyright()
    {
        return __('%1, %2 - %3', $this->getCompanyName(), $this->getFoundationDate(), date('M d, Y'));
    }
}
