<?php

namespace DTL\ExpressionCaptchaFormTypeBundle\Generator;

class Expression
{
    protected $expression;
    protected $vars;

    public function __construct($expression, $vars = array())
    {
        $this->expression = $expression;
        $this->vars = $vars;
    }

    public function getExpression() 
    {
        return $this->expression;
    }

    public function getVars() 
    {
        return $this->vars;
    }
}
