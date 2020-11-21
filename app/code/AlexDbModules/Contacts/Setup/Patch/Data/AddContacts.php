<?php
/**
 * Data Patch with contacts

 * @category  AlexDbModules
 * @package   AlexDbModules\Contacts
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\Contacts\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

/**
 * Class AddContacts
 * @package AlexDbModules\Contacts\Setup\Patch\Data
 */
class AddContacts implements DataPatchInterface
{
    /**
     * @var ModuleDataSetupInterface
     */
    protected $contactsSetup;

    /**
     * AddContacts constructor.
     * @param ModuleDataSetupInterface $contactsSetup
     */
    public function __construct(ModuleDataSetupInterface $contactsSetup)
    {
        $this->contactsSetup = $contactsSetup;
    }

    /**
     * @return AddContacts|void
     */
    public function apply()
    {
        $this->contactsSetup->startSetup();

        $contacts[] = ['contact_id' => '1', 'contact_type' => 'Facebook', 'contact' => 'facebook.com/luma'];
        $contacts[] = ['contact_id' => '2', 'contact_type' => 'Email', 'contact' => 'luma@gmail.com'];
        $contacts[] = ['contact_id' => '3', 'contact_type' => 'Phone number', 'contact' => '+1234567890'];

        $this->contactsSetup->getConnection()->insertArray(
            $this->contactsSetup->getTable('contacts_info'),
            ['contact_id', 'contact_type', 'contact'],
            $contacts
        );

        $this->contactsSetup->endSetup();
    }

    /**
     * @return array|string[]
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * @return array|string[]
     */
    public static function getDependencies()
    {
        return [];
    }
}
