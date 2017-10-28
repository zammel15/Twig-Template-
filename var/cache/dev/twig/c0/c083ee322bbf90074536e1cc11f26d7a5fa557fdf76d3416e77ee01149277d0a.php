<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_9dbc17076a0d7bef24cb521ec4ba59552c6d6fbf4241a7b5a37169db99effab3 extends Twig_Template
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
        $__internal_bebf3e56c78bf61e224f38afd6f5d6c4bc34d28bfe79e45b64c45217526a7d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bebf3e56c78bf61e224f38afd6f5d6c4bc34d28bfe79e45b64c45217526a7d0a->enter($__internal_bebf3e56c78bf61e224f38afd6f5d6c4bc34d28bfe79e45b64c45217526a7d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_bd471b17664d76141437bdef1a5e2db0d96b4f7964d02142456d6d7b1e6fa290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd471b17664d76141437bdef1a5e2db0d96b4f7964d02142456d6d7b1e6fa290->enter($__internal_bd471b17664d76141437bdef1a5e2db0d96b4f7964d02142456d6d7b1e6fa290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_bebf3e56c78bf61e224f38afd6f5d6c4bc34d28bfe79e45b64c45217526a7d0a->leave($__internal_bebf3e56c78bf61e224f38afd6f5d6c4bc34d28bfe79e45b64c45217526a7d0a_prof);

        
        $__internal_bd471b17664d76141437bdef1a5e2db0d96b4f7964d02142456d6d7b1e6fa290->leave($__internal_bd471b17664d76141437bdef1a5e2db0d96b4f7964d02142456d6d7b1e6fa290_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
