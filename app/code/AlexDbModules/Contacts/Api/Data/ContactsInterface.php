<?php
/**
 * Interface for Contacts Model

 * @category  AlexDbModules
 * @package   AlexDbModules\Contacts
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\Contacts\Api\Data;

/**
 * Interface ContactsInterface
 * @package AlexDbModules\Contacts\Api\Data
 */
interface ContactsInterface
{
    const ID = 'contact_id';
    const CONTACT_TYPE = 'contact_type';
    const CONTACT = 'contact';

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @return string
     */
    public function getContactType() : string;

    /**
     * @return string
     */
    public function getContact() : string;
}
