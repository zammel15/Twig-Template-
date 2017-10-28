<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_1b2c0339cf4efe5c9f34697c00d35736bde5e1d0ca692668997c71cf77a7c1a0 extends Twig_Template
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
        $__internal_f206c4871a694073d4b5eb70fbb76f25a5da57fb75afa959d32409f3175af154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f206c4871a694073d4b5eb70fbb76f25a5da57fb75afa959d32409f3175af154->enter($__internal_f206c4871a694073d4b5eb70fbb76f25a5da57fb75afa959d32409f3175af154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_497208f46fd1411dfca8745c899922fe4743837ae633c59d8d5f18e6da78805f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497208f46fd1411dfca8745c899922fe4743837ae633c59d8d5f18e6da78805f->enter($__internal_497208f46fd1411dfca8745c899922fe4743837ae633c59d8d5f18e6da78805f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f206c4871a694073d4b5eb70fbb76f25a5da57fb75afa959d32409f3175af154->leave($__internal_f206c4871a694073d4b5eb70fbb76f25a5da57fb75afa959d32409f3175af154_prof);

        
        $__internal_497208f46fd1411dfca8745c899922fe4743837ae633c59d8d5f18e6da78805f->leave($__internal_497208f46fd1411dfca8745c899922fe4743837ae633c59d8d5f18e6da78805f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
