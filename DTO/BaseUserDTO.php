<?php
/**
 * Created by JetBrains PhpStorm.
 * User: DEfimova
 * Date: 4/10/13
 * Time: 12:15 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Quest\ServiceDesk\DTOBundle\DTO;

use Quest\ServiceDesk\DTOBundle\DTO\BaseItemDTO;

class BaseUserDTO extends BaseItemDTO
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $firstName;

    /**
     * @var string
     */
    public $lastName;

    /**
     * @var integer
     */
    public $userRole;

    /**
     * @var boolean
     */
    public $isEnabled;

    /**
     * @var boolean
     */
    public $isArchived;

    /**
     * Set email
     *
     * @param string $email
     * @return BaseUserDTO
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set first name
     *
     * @param string $firstName
     * @return BaseUserDTO
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get first name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set last name
     *
     * @param string $lastName
     * @return BaseUserDTO
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }
    /**
     * Get last name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set user role
     *
     * @param integer $userRole
     * @return BaseUserDTO
     */

    public function setUserRole($userRole)
    {
        $this->userRole = $userRole;

        return $this;
    }

    /**
     * Get user role
     *
     * @return integer
     */
    public function getUserRole()
    {
        return $this->userRole;
    }

    /**
     * Set enabled
     *
     * @param boolean $isEnabled
     * @return BaseUserDTO
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * Set archived
     *
     * @param boolean $isArchived
     * @return BaseUserDTO
     */
    public function setIsArchived($isArchived)
    {
        $this->isEnabled = $isArchived;

        return $this;
    }

    /**
     * Get archived
     *
     * @return boolean
     */
    public function getIsArchived()
    {
        return $this->isArchived;
    }

}
