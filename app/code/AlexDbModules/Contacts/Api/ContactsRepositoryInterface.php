<?php
/**
 * Interface for ContactsRepository

 * @category  AlexDbModules
 * @package   AlexDbModules\Contacts
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\Contacts\Api;

/**
 * Interface ContactsRepositoryInterface
 * @package AlexDbModules\Contacts\Api
 */
interface ContactsRepositoryInterface
{
    /**
     * @return array
     */
    public function showContacts();
}
