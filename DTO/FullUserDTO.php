<?php
/**
 * Created by JetBrains PhpStorm.
 * User: DEfimova
 * Date: 4/10/13
 * Time: 12:17 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Quest\ServiceDesk\DTOBundle\DTO;

use Quest\ServiceDesk\DTOBundle\DTO\UserEditDTO;

class FullUserDTO extends UserEditDTO
{
    /**
     * @var string
     */
    private $site;

    /**
     * @var string
     */
    private $employeeIdentifier;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $officeAddress;

    /**
     * @var string
     */
    private $officeNumber;

    /**
     * @var string
     */
    private $workPhone;

    /**
     * @var string
     */
    private $cellPhone;

    /**
     * Set site
     *
     * @param string $site
     * @return FullUserDTO
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set employee
     *
     * @param string $employeeIdentifier
     * @return FullUserDTO
     */
    public function setEmployeeIdentifier($employeeIdentifier)
    {
        $this->employeeIdentifier = $employeeIdentifier;

        return $this;
    }

    /**
     * Get employee
     *
     * @return string
     */
    public function getEmployeeIdentifier()
    {
        return $this->employeeIdentifier;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return FullUserDTO
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set office address
     *
     * @param string $officeAddress
     * @return FullUserDTO
     */
    public function setOfficeAddress($officeAddress)
    {
        $this->officeAddress = $officeAddress;

        return $this;
    }

    /**
     * Get office address
     *
     * @return string
     */
    public function getOfficeAddress()
    {
        return $this->officeAddress;
    }

    /**
     * Set office number
     *
     * @param string $officeNumber
     * @return FullUserDTO
     */
    public function setOfficeNumber($officeNumber)
    {
        $this->officeNumber = $officeNumber;

        return $this;
    }

    /**
     * Get office number
     *
     * @return string
     */
    public function getOfficeNumber()
    {
        return $this->officeNumber;
    }

    /**
     * Set work phone
     *
     * @param string $workPhone
     * @return FullUserDTO
     */
    public function setWorkPhone($workPhone)
    {
        $this->workPhone = $workPhone;

        return $this;
    }
    /**
     * Get work phone
     *
     * @return string
     */
    public function getWorkPhone()
    {
        return $this->workPhone;
    }

    /**
     * Set cell phone
     *
     * @param string $cellPhone
     * @return FullUserDTO
     */
    public function setCellPhone($cellPhone)
    {
        $this->cellPhone = $cellPhone;

        return $this;
    }

    /**
     * Get cell phone
     *
     * @return string
     */
    public function getCellPhone()
    {
        return $this->cellPhone;
    }
}
