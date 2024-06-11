class Car
{
 private $speed = 0;
 public getSpeed() {
 return $this->speed;
 }
 public function accelerate($howMuch) {
 $this->speed += $howMuch;
 }
}