<?php
/**
 * Plugin PremiumStatus
 *
 * @category  AlexModules
 * @package   AlexModules\PremiumAccess
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexModules\PremiumAccess\Plugin;

use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * Class PremiumStatus
 * @package AlexModules\PremiumAccess\Plugin
 */
class PremiumStatus
{

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * PremiumStatus constructor.
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @param $subject
     * @param $result
     * @return \Magento\Framework\Phrase
     * Setting status text on frontend for user
     */
    public function aroundGetName($subject, $result)
    {
        $user = $result();
        $data = $this->scopeConfig->getValue('premium_access/options/access');
        $status = ($data == 1) ? "You have Premium access" : "You have regular access";
        return __('%1 => %2', $user, $status);
    }
}
