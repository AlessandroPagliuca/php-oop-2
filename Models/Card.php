<?php
include_once __DIR__ . '/../Traits/PrintDetails.php';
/**
 * Card class
 */
class Card extends Product
{
    use PrintDetails;
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