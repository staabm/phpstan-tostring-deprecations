<?php declare(strict_types = 1);

namespace PHPStanToStringDeprecations;

class HelloWorld
{
    /**
     * @deprecated
     */
    public function __toString()
    {
        return 'Hello';
    }
}

echo new HelloWorld();
$w = new HelloWorld();
echo $w;