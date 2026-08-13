<?php
/**
 * Tests for FluxBase
 */

use PHPUnit\Framework\TestCase;
use Fluxbase\Fluxbase;

class FluxbaseTest extends TestCase {
    private Fluxbase $instance;

    protected function setUp(): void {
        $this->instance = new Fluxbase(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Fluxbase::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
