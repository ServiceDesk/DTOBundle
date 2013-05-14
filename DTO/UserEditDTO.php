<?php
/**
 * Created by JetBrains PhpStorm.
 * User: DEfimova
 * Date: 4/10/13
 * Time: 12:16 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Quest\ServiceDesk\DTOBundle\DTO;

// for overriding function loadValidatorMetadata()
// for notblank constrain
//for email constrain
// for maximum length

use Quest\ServiceDesk\DTOBundle\DTO\BaseUserDTO;
use Quest\ServiceDesk\DTOBundle\Validation\ConstraintViolationCode;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\MaxLength;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Mapping\ClassMetadata;

class UserEditDTO extends BaseUserDTO
{
    private $testProperty;
    /**
     * @var boolean
     */
    public $useTimeZoneSettings;

    /**
     * @var string
     */
    public $timeZoneId;

    /**
     * @var string
     */
    public $dateFormat;

    /**
     * @var string
     */
    public $timeFormat;

    /**
     * @var string
     */
    public $password;

    /**
     * @var integer
     */
    private $version;

    /**
     * Set use time zone settings
     *
     * @param boolean $useTimeZoneSettings
     * @return UserEditDTO
     */
    public function setUseTimeZoneSettings($useTimeZoneSettings)
    {
        $this->useTimeZoneSettings = $useTimeZoneSettings;

        return $this;
    }

    /**
     * Get use time zone settings
     *
     * @return boolean
     */
    public function getUseTimeZoneSettings()
    {
        return $this->useTimeZoneSettings;
    }

    /**
     * Set time zone
     *
     * @param string $timeZoneId
     * @return UserEditDTO
     */
    public function setTimeZoneId($timeZoneId)
    {
        $this->timeZoneId = $timeZoneId;

        return $this;
    }

    /**
     * Get time zone
     *
     * @return string
     */
    public function getTimeZoneId()
    {
        return $this->timeZoneId;
    }

    /**
     * Set date format
     *
     * @param string $dateFormat
     * @return UserEditDTO
     */
    public function setDateFormat($dateFormat)
    {
        $this->dateFormat = $dateFormat;

        return $this;
    }

    /**
     * Get date format
     *
     * @return string
     */
    public function getDateFormat()
    {
        return $this->dateFormat;
    }

    /**
     * Set time format
     *
     * @param string $timeFormat
     * @return UserEditDTO
     */
    public function setTimeFormat($timeFormat)
    {
        $this->timeFormat = $timeFormat;

        return $this;
    }

    /**
     * Get time format
     *
     * @return string
     */
    public function getTimeFormat()
    {
        return $this->timeFormat;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set version
     *
     * @param integer $version
     * @return UserEditDTO
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return integer
     */
    public function getVersion()
    {
        return $this->version;
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint(
            'firstName',
            new NotBlank(array('message' => ConstraintViolationCode::NULL_OR_EMPTY))
        );
        $metadata->addPropertyConstraint(
            'firstName',
            new MaxLength(array('limit' => '255', 'message' => ConstraintViolationCode::MAX_LENGTH))
        );
        $metadata->addPropertyConstraint(
            'lastName',
            new NotBlank(array('message' => ConstraintViolationCode::NULL_OR_EMPTY))
        );
        $metadata->addPropertyConstraint(
            'lastName',
            new MaxLength(array('limit' => '255', 'message' => ConstraintViolationCode::MAX_LENGTH))
        );
        $metadata->addPropertyConstraint(
            'email',
            new NotBlank(array('message' => ConstraintViolationCode::NULL_OR_EMPTY))
        );
        $metadata->addPropertyConstraint(
            'email',
            new MaxLength(array('limit' => '255', 'message' => ConstraintViolationCode::MAX_LENGTH))
        );
        $metadata->addPropertyConstraint(
            'email',
            new Email(array('checkMX' => true, 'message' => ConstraintViolationCode::EMAIL))
        );
        $metadata->addPropertyConstraint(
            'isArchived',
            new Type(array('type' => 'bool', 'message' => ConstraintViolationCode::TYPE))
        );
        $metadata->addPropertyConstraint(
            'timeZoneId',
            new MaxLength(array('limit' => '40', 'message' => ConstraintViolationCode::MAX_LENGTH))
        );
        $metadata->addPropertyConstraint(
            'dateFormat',
            new MaxLength(array('limit' => '50', 'message' => ConstraintViolationCode::MAX_LENGTH))
        );
        $metadata->addPropertyConstraint(
            'timeFormat',
            new MaxLength(array('limit' => '50', 'message' => ConstraintViolationCode::MAX_LENGTH))
        );
        $metadata->addPropertyConstraint(
            'useTimeZoneSettings',
            new Type(array('type' => 'bool', 'message' => ConstraintViolationCode::TYPE))
        );
        $metadata->addPropertyConstraint(
            'isEnabled',
            new Type(array('type' => 'bool', 'message' => ConstraintViolationCode::TYPE))
        );
//        $metadata->addPropertyConstraint(
//            'userRole',
//            new Type(array('type' => 'int', 'message' => ConstraintViolationCode::TYPE))
//        );
        $metadata->addPropertyConstraint(
            'userRole',
            new Choice(array('choices' => array(1, 3, 5, 7, 15, 31, 63), 'message' => ConstraintViolationCode::CHOICE))
        );
//        $metadata->addPropertyConstraint('password', new NotBlank(array('message' => "Password shouldn't be empty")));
//        $metadata->addPropertyConstraint('password', new MaxLength(array('limit'=>'40','message' => "Password shouldn't be longer than than {{ limit }} characters length")));
    }
}