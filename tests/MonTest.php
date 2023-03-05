<?php
require_once 'vendor/autoload.php';
require_once __DIR__ . '/../index.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class IndexTest extends \PHPUnit\Framework\TestCase
{
    protected $log;

    protected function setUp(): void
    {
        $this->log = new Logger('test');
        $this->log->pushHandler(new StreamHandler(__DIR__ . '/logs/test.log', Logger::WARNING));
    }

    public function testAfficherTitre()
    {
        ob_start();
        afficherTitre('Test');
        $output = ob_get_clean();
        $this->assertEquals('<h1>Test</h1>', $output);
    }

    public function testCalculerSomme()
    {
        $resultat = calculerSomme(2, 3);
        $this->assertEquals(5, $resultat);
    }

    public function testNoms()
    {
        $noms = array("Anas", "Hamza", "Mariame", "Ziad");
        $expectedOutput = "Nom : Anas<br>Nom : Hamza<br>Nom : Mariame<br>Nom : Ziad<br>";
        ob_start();
        foreach ($noms as $nom) {
            echo "Nom : " . $nom . "<br>";
        }
        $output = ob_get_clean();
        $this->assertEquals($expectedOutput, $output);
    }

    public function testHeure()
    {
        $heure = date('H');
        ob_start();
        if ($heure < '12') {
            echo 'Bonjour !';
        } else {
            echo 'Bon après-midi !';
        }
        $output = ob_get_clean();
        if ($heure < '12') {
            $this->assertEquals('Bonjour !', $output);
        } else {
            $this->assertEquals('Bon après-midi !', $output);
        }
    }

    public function testLogger()
    {
        $this->log->warning('Test message');
        $logContent = file_get_contents(__DIR__ . '/logs/test.log');
        $this->assertStringContainsString('Test message', $logContent);
    }
}
