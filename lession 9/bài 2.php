<?php
class TowdPoint {
    protected $Xa;
    protected $Ya;
    protected $Xb;
    protected $Yb;
    public function __construct($Xa, $Ya, $Xb, $Yb)
    {
        $this->Xa = $Xa;
        $this->Ya = $Ya;
        $this->Xb = $Xb;
        $this->Yb = $Yb;
    }
    public function calSpace() {
        return sqrt(($this->Xb - $this->Xa)*($this->Xb - $this->Xa) + ($this->Yb - $this->Ya)* ($this->Yb - $this->Ya));
    }

}

$Xa = 1;
$Ya = 2;
$Xb = 4;
$Yb = 6;
$less2 = new TowdPoint($Xa, $Ya, $Xb, $Yb);
echo "Space: ". $less2->calSpace() . "\n";
echo "<br />";

?>