<?php
/**
 * Card class
 */
class Card extends Product
{
    private $iconCategory;

    public function __construct($id, $image, $title, $price, $category, $type, $iconCategory)
    {
        parent::__construct($id, $image, $title, $price, $category, $type);
        $this->iconCategory = $iconCategory;
    }

    public function getIconCategory()
    {
        return $this->iconCategory;
    }
}