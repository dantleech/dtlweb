<?php

namespace DTL\ExpressionCaptchaFormTypeBundle\Generator;

use Symfony\Component\ExpressionLanguage\ExpressionLanguage;

class ExpressionGenerator
{
    protected $expressionLanguage;
    protected $vars = array();

    protected $numberMax = 4;
    protected $expressionLengthMin = 2;
    protected $expressionLengthMax = 3;

    public function __construct(ExpressionLanguage $expressionLanguage)
    {
        $this->expressionLanguage = $expressionLanguage;
    }

    public function getOperator()
    {
        $set = array('-', '+');

        return $set[rand(0, count($set) - 1)];
    }

    public function getNumber()
    {
        return rand(0, $this->numberMax); 
    }

    public function getVariableName()
    {
        $set = array(
            'foo', 'bar', 'boo', 'baz', 'x', 'y', 'z',
            'symfony', 'doctrine', 'propel', 'composer',
            'phpcr', 'cmf', 'github', 'packagist', 'ansible',
            'vim', 'linux', 'tmux', 'git', 'fugitive',
        );

        $varName = $set[rand(0, count($set) -1)];

        $this->vars[$varName] = $this->getNumber();

        return $varName;
    }

    public function getElement()
    {
        switch (rand(0, 1)) {
            case 0:
                return $this->getNumber();
            case 1:
                return $this->getVariableName();
        }
    }

    public function generateExpression()
    {
        $this->vars = array();
        $els = array();
        for ($i = 0; $i <= rand($this->expressionLengthMin, $this->expressionLengthMax); $i++) {
            $els[] = $this->getElement();
        }

        $expression = array();

        for ($i = 0; $i < count($els); $i++) {
            $expression[] = (string) $els[$i];

            if ($i != count($els) - 1) {
                $expression[] = $this->getOperator();
            }
        }

        $res = $this->expressionLanguage->compile(implode(' ', $expression), array_keys($this->vars));
        $expression = new Expression($res, $this->vars);

        return $expression;
    }
}
