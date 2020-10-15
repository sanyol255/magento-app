<?php
/**
 * Model for making custom options in access field

 * @category  AlexModules
 * @package   AlexModules\PremiumAccess
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexModules\PremiumAccess\Model;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class PremiumAccessCustomOptions
 * @package AlexModules\PremiumAccess\Model
 */
class PremiumAccessCustomOptions implements ArrayInterface
{
    /**
     * Constants for grant access and deny access custom options
     */
    const GRANT_ACCESS = 'Grant premium access';
    const DENY_ACCESS = 'Deny premium access';

    /**
     * @return array|array[]
     * Rewriting default values of Yesno system config
     */
    public function toOptionArray()
    {
        return [['value' => 1, 'label' => self::GRANT_ACCESS], ['value' => 0, 'label' => self::DENY_ACCESS]];
    }
}
