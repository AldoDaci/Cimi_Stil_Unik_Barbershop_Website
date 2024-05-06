<?php
use PHPUnit\Framework\TestCase;

class AppointmentTest extends TestCase
{
    protected $pdo;

    protected function setUp(): void
    {
        $this->pdo = new PDO('sqlite::memory:');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->createTables();
    }

    protected function createTables()
    {
        $this->pdo->exec("CREATE TABLE IF NOT EXISTS clients (
            client_id INTEGER PRIMARY KEY,
            first_name TEXT,
            last_name TEXT,
            phone_number TEXT,
            client_email TEXT UNIQUE
        );");
        
        $this->pdo->exec("INSERT INTO clients (first_name, last_name, phone_number, client_email) VALUES ('John', 'Doe', '1234567890', 'john.doe@example.com');");
    }

    public function testCheckClientExists()
    {
        $email = 'aldodaci@gmail.com';
        $stmt = $this->pdo->prepare("SELECT * FROM clients WHERE client_email = ?");
        $stmt->execute([$email]);
        $result = $stmt->fetch();

        $this->assertNotFalse($result);
        $this->assertEquals('aldo', $result['first_name']);
    }

    // Additional tests can be added here

    protected function tearDown(): void
    {
        $this->pdo = null;
    }
}
