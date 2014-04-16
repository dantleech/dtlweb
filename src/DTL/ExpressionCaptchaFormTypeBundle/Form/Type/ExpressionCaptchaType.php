<?php

namespace DTL\ExpressionCaptchaFormTypeBundle\Form\Type;

use DTL\ExpressionCaptchaFormTypeBundle\Generator\ExpressionGenerator;

class ExpressionCaptchaType extends AbstractType
{
    protected $expressionGenerator;

    public function __construct(ExpressionGenerator $expressionGenerator)
    {
        $this->expressionGenertor = $expressionGenerator;
    }

    public function configure()
    {
    }
}
