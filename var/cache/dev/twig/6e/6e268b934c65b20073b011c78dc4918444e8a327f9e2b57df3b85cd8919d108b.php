<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_6cc923912a417f46fc32244461387fffac268674a115bde3f2282ce2df08c6fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0070ca0c6355e5e3fb2e4ccb2cdc5a8a094df941419718e172350e4866eb653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0070ca0c6355e5e3fb2e4ccb2cdc5a8a094df941419718e172350e4866eb653->enter($__internal_c0070ca0c6355e5e3fb2e4ccb2cdc5a8a094df941419718e172350e4866eb653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_9a8bd3e5ddb1a8dc3f6d5cc0277e6885c57e385b8cd2c8b2424a789941ddb589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8bd3e5ddb1a8dc3f6d5cc0277e6885c57e385b8cd2c8b2424a789941ddb589->enter($__internal_9a8bd3e5ddb1a8dc3f6d5cc0277e6885c57e385b8cd2c8b2424a789941ddb589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c0070ca0c6355e5e3fb2e4ccb2cdc5a8a094df941419718e172350e4866eb653->leave($__internal_c0070ca0c6355e5e3fb2e4ccb2cdc5a8a094df941419718e172350e4866eb653_prof);

        
        $__internal_9a8bd3e5ddb1a8dc3f6d5cc0277e6885c57e385b8cd2c8b2424a789941ddb589->leave($__internal_9a8bd3e5ddb1a8dc3f6d5cc0277e6885c57e385b8cd2c8b2424a789941ddb589_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
