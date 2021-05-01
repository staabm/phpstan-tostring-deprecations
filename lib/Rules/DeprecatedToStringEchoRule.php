<?php declare(strict_types = 1);

namespace PHPStanToStringDeprecations;

use PhpParser\Node;
use PhpParser\Node\Expr\Cast;
use PHPStan\Analyser\Scope;
use PHPStan\Rules\RuleError;
use PHPStan\Rules\RuleErrorBuilder;
use PHPStan\Type\ErrorType;
use PHPStan\Type\TypeUtils;
use PHPStan\Type\VerbosityLevel;

class DeprecatedToStringEchoRule implements \PHPStan\Rules\Rule
{
    public function getNodeType(): string
    {
        return Node\Stmt\Echo_::class;
    }

    /**
     * @param \PhpParser\Node\Expr\Cast $node
     * @param \PHPStan\Analyser\Scope $scope
     * @return RuleError[] errors
     */
    public function processNode(Node $node, Scope $scope): array
    {
        $messages = [];
        return $messages;
    }
}