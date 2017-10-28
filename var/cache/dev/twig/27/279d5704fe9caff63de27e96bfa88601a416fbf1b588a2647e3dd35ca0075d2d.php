<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_016c21cd382c5445c01ae2ad5ab74a4b5ae67f6db15c1c3036bab54f7adf41f1 extends Twig_Template
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
        $__internal_fc2be14f5111b18c57662971c89be5dcd2f8b2e8e2dccbd2b16c565678319b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc2be14f5111b18c57662971c89be5dcd2f8b2e8e2dccbd2b16c565678319b60->enter($__internal_fc2be14f5111b18c57662971c89be5dcd2f8b2e8e2dccbd2b16c565678319b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_32003b41770de50157797fcbaac6c0e0c841f2bdd244966c6204634102df0917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32003b41770de50157797fcbaac6c0e0c841f2bdd244966c6204634102df0917->enter($__internal_32003b41770de50157797fcbaac6c0e0c841f2bdd244966c6204634102df0917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fc2be14f5111b18c57662971c89be5dcd2f8b2e8e2dccbd2b16c565678319b60->leave($__internal_fc2be14f5111b18c57662971c89be5dcd2f8b2e8e2dccbd2b16c565678319b60_prof);

        
        $__internal_32003b41770de50157797fcbaac6c0e0c841f2bdd244966c6204634102df0917->leave($__internal_32003b41770de50157797fcbaac6c0e0c841f2bdd244966c6204634102df0917_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
