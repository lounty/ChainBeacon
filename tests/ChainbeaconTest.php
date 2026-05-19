<?php
/**
 * Tests for ChainBeacon
 */

use PHPUnit\Framework\TestCase;
use Chainbeacon\Chainbeacon;

class ChainbeaconTest extends TestCase {
    private Chainbeacon $instance;

    protected function setUp(): void {
        $this->instance = new Chainbeacon(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainbeacon::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
