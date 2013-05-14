<?php
/**
 * Created by JetBrains PhpStorm.
 * User: DEfimova
 * Date: 4/10/13
 * Time: 12:13 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Quest\ServiceDesk\DTOBundle\DTO;

class BaseItemDTO
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * Set id
     * @param integer $id
     * @return BaseItemDTO
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     * @param string $title
     * @return BaseItemDTO
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

}