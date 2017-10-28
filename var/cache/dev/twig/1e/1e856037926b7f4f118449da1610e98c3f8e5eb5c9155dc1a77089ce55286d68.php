<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_ff804ee1f59aa8cb5de628266e9935dc071259a9cd12296413aa104edfb49f82 extends Twig_Template
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
        $__internal_47aadc90f9466a620203043e9226cd37937b04cf128934b81590839b74c21c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47aadc90f9466a620203043e9226cd37937b04cf128934b81590839b74c21c0f->enter($__internal_47aadc90f9466a620203043e9226cd37937b04cf128934b81590839b74c21c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_acc39d36c1dfe65632055704a4a9f42d4c6d6d7e0847891240ca04ea76d32012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc39d36c1dfe65632055704a4a9f42d4c6d6d7e0847891240ca04ea76d32012->enter($__internal_acc39d36c1dfe65632055704a4a9f42d4c6d6d7e0847891240ca04ea76d32012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_47aadc90f9466a620203043e9226cd37937b04cf128934b81590839b74c21c0f->leave($__internal_47aadc90f9466a620203043e9226cd37937b04cf128934b81590839b74c21c0f_prof);

        
        $__internal_acc39d36c1dfe65632055704a4a9f42d4c6d6d7e0847891240ca04ea76d32012->leave($__internal_acc39d36c1dfe65632055704a4a9f42d4c6d6d7e0847891240ca04ea76d32012_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
