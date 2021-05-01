<?php declare(strict_types=1);

namespace PHPStanToStringDeprecations;

class DeprecatedToStringEchoRuleTest extends \PHPStan\Testing\RuleTestCase
{
    protected function getRule(): \PHPStan\Rules\Rule
    {
        return new DeprecatedToStringEchoRule();
    }

    public function testUselessCast(): void
    {
        require_once __DIR__ . '/data/helloworld.php';
        $this->analyse(
            [__DIR__ . '/data/helloworld.php'],
            [
                [
                    'Call to deprecated method __toString() of class HelloWorld.',
                    16,
                ],
                [
                    'Call to deprecated method __toString() of class HelloWorld.',
                    17,
                ],
            ]
        );
    }
}