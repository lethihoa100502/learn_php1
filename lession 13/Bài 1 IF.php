<?php
interface Resizable {
    public function resize($percentage);
}

class Rectangle implements Resizable {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function resize($percentage) {
        $this->width *= $percentage / 100;
        $this->height *= $percentage / 100;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }
}

// Sử dụng:
$rectangle = new Rectangle(10, 20);
echo "Width: " . $rectangle->getWidth() . ", Height: " . $rectangle->getHeight() . "\n";

$rectangle->resize(50);
echo "Width after resizing: " . $rectangle->getWidth() . ", Height after resizing: " . $rectangle->getHeight() . "\n";
?>
