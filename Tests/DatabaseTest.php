<?php
require_once 'vendor\Autoload.php';
include 'ressources\database\db_connection.php';

use PHPUnit\Framework\TestCase;

class monTest extends TestCase
{
    public function testConnexion()
    {
        $x = OpenCon();
        $this->assertNotNull($x);
        CloseCon($x);

    }
}
?>