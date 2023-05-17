<?php
/**
 * Product class
 */
class Product
{
    private $id;
    private $image;
    private $title;
    private $price;
    private $category;
    private $type;

    /**
     * Construct function
     *
     * @param [type] $id
     * @param [type] $image
     * @param [type] $title
     * @param [type] $price
     * @param [type] $category
     * @param [type] $type
     */
    public function __construct($id, $image, $title, $price, $category, $type)
    {
        $this->id = $id;
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getType()
    {
        return $this->type;
    }
}