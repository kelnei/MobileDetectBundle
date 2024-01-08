<?php

// Workaround by Oleg Andreyev
// https://gist.github.com/oleg-andreyev/85c74dbf022237b03825c7e9f4439303

// Usage: ->with(...WithConsecutive::create(...$withCodes))

declare(strict_types=1);

namespace MobileDetectBundle\Tests;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Constraint\Callback;
use PHPUnit\Framework\Constraint\Constraint;
use PHPUnit\Framework\Constraint\IsEqual;

class WithConsecutive
{
    /**
     * @param array<mixed> $parameterGroups
     *
     * @return array<int, Callback<mixed>>
     */
    public static function create(...$parameterGroups): array
    {
        $result = [];
        $parametersCount = null;
        $groups = [];
        $values = [];

        foreach ($parameterGroups as $index => $parameters) {
            // initial
            $parametersCount ??= \count($parameters);

            // compare
            if ($parametersCount !== \count($parameters)) {
                throw new \RuntimeException('Parameters count max much in all groups');
            }

            // prepare parameters
            foreach ($parameters as $parameter) {
                if (!$parameter instanceof Constraint) {
                    $parameter = new IsEqual($parameter);
                }

                $groups[$index][] = $parameter;
            }
        }

        // collect values
        foreach ($groups as $parameters) {
            foreach ($parameters as $index => $parameter) {
                $values[$index][] = $parameter;
            }
        }

        // build callback
        for ($index = 0; $index < $parametersCount; ++$index) {
            $result[$index] = Assert::callback(static function ($value) use ($values, $index) {
                static $map = null;
                $map ??= $values[$index];

                $expectedArg = array_shift($map);
                if (null === $expectedArg) {
                    throw new \RuntimeException('No more expected calls');
                }
                $expectedArg->evaluate($value);

                return true;
            });
        }

        return $result;
    }
}
