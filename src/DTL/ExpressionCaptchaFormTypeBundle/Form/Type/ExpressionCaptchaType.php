<?php

namespace DTL\ExpressionCaptchaFormTypeBundle\Form\Type;

use DTL\ExpressionCaptchaFormTypeBundle\Generator\ExpressionGenerator;
use Symfony\Component\Form\AbstractType;

class ExpressionCaptchaType extends AbstractType
{
    protected $expressionGenerator;

    public function __construct(ExpressionGenerator $expressionGenerator)
    {
        $this->expressionGenertor = $expressionGenerator;
    }

    public function getName()
    {
        return 'dtl_expression_captcha';
    }

    public function configure()
    {
        $generator = $this->expressionGenertor;

        $this->add('expression', 'hidden');
        $this->add('expressionVars', 'collection', array(
            'type' => 'hidden',
        ));
        $this->add('expressionAnswer', 'text', array(
            'required' => true
        ));

        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) use ($generator) {
            return;
            $expression = $data['expression'];
            $expressionVars = $data['expressionVars'];

            $answer = $expressionLanguage->evaluate(str_replace('$', '', $expression), $expressionVars);
            $givenAnswer = $data['expressionAnswer'];

            if ($answer != $givenAnswer) {
                $invalidCaptcha = 'Wrong answer! ' . $expression . ' with ' . var_export($expressionVars, true) . ' is not ' . $givenAnswer;
            }
            $data['expressionVars'] = $expressionGen->getVars();
            $data['expression'] = $expressionGen->getExpression();
        });
    }
}
