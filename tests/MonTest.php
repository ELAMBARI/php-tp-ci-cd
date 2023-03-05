<?php

use PHPUnit\Framework\TestCase;
use Maknz\Slack\Client as SlackClient;

class MonTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $this->assertTrue(true);
    }

    public function testCalculerSomme()
    {
        $this->assertEquals(5, calculerSomme(2, 3));
        $this->assertEquals(10, calculerSomme(6, 4));
        $this->assertEquals(0, calculerSomme(-2, 2));
    }

    public function testNoms()
    {
        global $noms;
        $this->assertContains('Anas', $noms);
        $this->assertContains('Hamza', $noms);
        $this->assertContains('Mariame', $noms);
        $this->assertContains('Ziad', $noms);
    }

    public function testHeure()
    {
        global $message;
        $heure = date('H');
        if ($heure < '12') {
            $this->assertEquals('Bonjour !', $message);
        } else {
            $this->assertEquals('Bon après-midi !', $message);
        }
    }
}

// Exécution des tests
$suite = new PHPUnit\Framework\TestSuite(MonTest::class);
$testResult = PHPUnit\TextUI\TestRunner::run($suite);

// Instanciation du client Slack
$slack = new SlackClient('https://join.slack.com/t/nouvelespaced-day3309/shared_invite/zt-1qn344xc1-WfNx8BgG7sk3CBUN3xwcug');

// Vérification si les tests ont réussi ou échoué
if ($testResult->wasSuccessful()) {
    $message = "Les tests ont réussi ! :tada:";
} else {
    $message = "Les tests ont échoué ! :cry:";
}

// Envoi de la notification à Slack
$slack->send($message);

?>