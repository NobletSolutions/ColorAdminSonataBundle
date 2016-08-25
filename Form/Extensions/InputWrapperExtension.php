<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 25/08/16
 * Time: 4:12 PM
 */

namespace NS\ColorAdminSonataBundle\Form\Extensions;


use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InputWrapperExtension extends AbstractTypeExtension
{
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        if (isset($options['input_wrapper_class'])) {
            $view->vars['input_wrapper_class'] = $options['input_wrapper_class'];
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefined(['input_wrapper_class']);
    }

    public function getExtendedType()
    {
        return FormType::class;
    }
}