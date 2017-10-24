<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once("email.php");

final class EmailTest extends TestCase
{
    public function send_email_test(): void
    {
        $this->assertIsTrue(send_email());
    }
}
?>