<?php

namespace Acme\StoreBundle\Entity;

class Product
{

	protected $id;

	protected $name;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }
    /**
     * @var \Acme\StoreBundle\Entity\Category
     */
    private $category;


    /**
     * Set category
     *
     * @param \Acme\StoreBundle\Entity\Category $category
     *
     * @return Product
     */
    public function setCategory(\Acme\StoreBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Acme\StoreBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }
}
