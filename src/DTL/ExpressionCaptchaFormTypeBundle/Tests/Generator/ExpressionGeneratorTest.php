<?php

namespace DTL\ExpressionCaptchaFormTypeBundle\Tests\Generator;

use Symfony\Component\ExpressionLanguage\ExpressionLanguage;
use DTL\ExpressionCaptchaFormTypeBundle\Generator\ExpressionGenerator;

class ExpressionGeneratorTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->expressionLanguage = new ExpressionLanguage();
        $this->expressionGenertor = new ExpressionGenerator($this->expressionLanguage);
    }

    public function testGenerate()
    {
        $res = $this->expressionGenertor->generateExpression();
        $answer = $this->expressionLanguage->evaluate(str_replace('$', '', $res->getExpression()), $res->getVars());
    }
}
