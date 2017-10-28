<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_f4e34cc37e4c4251f0a9bda15d6521051090c1b474933d742c3f9a941a3b30c3 extends Twig_Template
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
        $__internal_0874730d6c64c1950db82c3e2a0fc2ea52d6e8902f8eeed1af7fef40442367c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0874730d6c64c1950db82c3e2a0fc2ea52d6e8902f8eeed1af7fef40442367c8->enter($__internal_0874730d6c64c1950db82c3e2a0fc2ea52d6e8902f8eeed1af7fef40442367c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_a88f31c7066240cefdd26ff6dd3fcd5f02ef5eb1abd61044680a8a76bf3e59bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88f31c7066240cefdd26ff6dd3fcd5f02ef5eb1abd61044680a8a76bf3e59bc->enter($__internal_a88f31c7066240cefdd26ff6dd3fcd5f02ef5eb1abd61044680a8a76bf3e59bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0874730d6c64c1950db82c3e2a0fc2ea52d6e8902f8eeed1af7fef40442367c8->leave($__internal_0874730d6c64c1950db82c3e2a0fc2ea52d6e8902f8eeed1af7fef40442367c8_prof);

        
        $__internal_a88f31c7066240cefdd26ff6dd3fcd5f02ef5eb1abd61044680a8a76bf3e59bc->leave($__internal_a88f31c7066240cefdd26ff6dd3fcd5f02ef5eb1abd61044680a8a76bf3e59bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
