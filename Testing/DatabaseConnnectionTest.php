<?php
use PHPUnit\Framework\TestCase;

class DatabaseConnectionTest extends TestCase {
    public function testConnectionFailure() {
        define('TEST_ENVIRONMENT', true);

        // Redirect output to buffer
        ob_start();
        include 'connect.php';
        $output = ob_get_clean();

        $this->assertStringContainsString('Failed to connect with database', $output);
    }
}
?>
