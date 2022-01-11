<?php
class Rectangle
{
    public $width;
    public $height;
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea()
    {
        return "Dien tich: ".$this->width*$this->height;
    }
    public function getPerimeter()
    {
        return "Chu vi: ".(($this->width + $this->height)*2);
    }
    public function disPlay(){
        return "Rectangle{"."width= ".$this->width."height= ".$this->height."}";
    }
}
