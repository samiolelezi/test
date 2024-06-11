class CarTest extends PHPUnit_Framework_TestCase
{
 public function testThatInitalSpeedIsZero() {
 $car = new Car();
 $this->assertSame(0, $car->getSpeed());
 }
 public function testThatItAccelerates() {
 $car = new Car();
 $car->accelerate(20);
 $this->assertSame(20, $car->getSpeed());
 }
 public function testThatSpeedSumsUp() {
 $car = new Car();
 $car->accelerate(30);
 $car->accelerate(50);
 $this->assertSame(80, $car->getSpeed());
 }
}