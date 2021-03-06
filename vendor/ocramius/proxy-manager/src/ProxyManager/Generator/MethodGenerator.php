<?php

declare(strict_types=1);

namespace ProxyManager\Generator;

use Laminas\Code\Generator\DocBlockGenerator;
use Laminas\Code\Generator\MethodGenerator as ZendMethodGenerator;
use Laminas\Code\Reflection\MethodReflection;

/**
 * Method generator that fixes minor quirks in ZF2's method generator
 *
 * @psalm-external-mutation-free
 */
class MethodGenerator extends ZendMethodGenerator
{
    /**
     * {@inheritDoc}
     */
    public static function fromReflectionWithoutBodyAndDocBlock(MethodReflection $reflectionMethod) : self
    {
        /** @var self $method */
        $method = parent::copyMethodSignature($reflectionMethod);

        $method->setInterface(false);
        $method->setBody('');

        return $method;
    }

    /**
     * {@inheritDoc} override needed to specify type in more detail
     */
    public function getDocBlock() : ?DocBlockGenerator
    {
        return parent::getDocBlock();
    }

    /**
     * {@inheritDoc} override needed to specify type in more detail
     */
    public function getSourceContent() : ?string
    {
        return parent::getSourceContent();
    }
}
