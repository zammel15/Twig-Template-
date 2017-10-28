<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_a4ed5c1dd93f32de86ec215b91aacb7225a0d163b1c8f18254f588827efcf8b2 extends Twig_Template
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
        $__internal_8516bfbc8cd3d0c7de94272bcc6998355cc863b79bf1a6411e2669e9557c1dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8516bfbc8cd3d0c7de94272bcc6998355cc863b79bf1a6411e2669e9557c1dcf->enter($__internal_8516bfbc8cd3d0c7de94272bcc6998355cc863b79bf1a6411e2669e9557c1dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_d1614de275ba40ea2314c28b678cd55fe527be351db3ca1458f50f3dc8cbb9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1614de275ba40ea2314c28b678cd55fe527be351db3ca1458f50f3dc8cbb9a6->enter($__internal_d1614de275ba40ea2314c28b678cd55fe527be351db3ca1458f50f3dc8cbb9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_8516bfbc8cd3d0c7de94272bcc6998355cc863b79bf1a6411e2669e9557c1dcf->leave($__internal_8516bfbc8cd3d0c7de94272bcc6998355cc863b79bf1a6411e2669e9557c1dcf_prof);

        
        $__internal_d1614de275ba40ea2314c28b678cd55fe527be351db3ca1458f50f3dc8cbb9a6->leave($__internal_d1614de275ba40ea2314c28b678cd55fe527be351db3ca1458f50f3dc8cbb9a6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
