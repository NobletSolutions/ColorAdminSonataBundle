<?php

namespace NS\ColorAdminSonataBundle\Twig;

class TemplateExtension extends \Twig_Extension implements \Twig_Extension_GlobalsInterface
{
    protected $template_config;

    public function __construct($template_config)
    {
        $this->template_config = $template_config;
    }

    public function getGlobals()
    {
        return array(
            'horizontal_action_buttons' => $this->template_config['horizontal_action_buttons'],
            'color_admin_layout' => $this->template_config['layout'],
        );
    }

    public function getName()
    {
        return 'nscoloradminsonata_template_extension';
    }
}
