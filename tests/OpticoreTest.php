<?php
/**
 * Tests for OptiCore
 */

use PHPUnit\Framework\TestCase;
use Opticore\Opticore;

class OpticoreTest extends TestCase {
    private Opticore $instance;

    protected function setUp(): void {
        $this->instance = new Opticore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Opticore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
