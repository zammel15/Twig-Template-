<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_76a0a61208d09a2e90faa27ebdf286130aabbd108e59cb8342499382ac4c8fcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23cb8e7718a9559a0a01a480d237b45062516c1e5b07a8722f0a9f12b81eafc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23cb8e7718a9559a0a01a480d237b45062516c1e5b07a8722f0a9f12b81eafc6->enter($__internal_23cb8e7718a9559a0a01a480d237b45062516c1e5b07a8722f0a9f12b81eafc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_90f11e63e638094755c572bf96aec2c68828d55727cf4036bbb45cfc4b82c0de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f11e63e638094755c572bf96aec2c68828d55727cf4036bbb45cfc4b82c0de->enter($__internal_90f11e63e638094755c572bf96aec2c68828d55727cf4036bbb45cfc4b82c0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23cb8e7718a9559a0a01a480d237b45062516c1e5b07a8722f0a9f12b81eafc6->leave($__internal_23cb8e7718a9559a0a01a480d237b45062516c1e5b07a8722f0a9f12b81eafc6_prof);

        
        $__internal_90f11e63e638094755c572bf96aec2c68828d55727cf4036bbb45cfc4b82c0de->leave($__internal_90f11e63e638094755c572bf96aec2c68828d55727cf4036bbb45cfc4b82c0de_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_00bcbf1dac197036510427e93aaf03249a7d4187db01a887b8e981104a595998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00bcbf1dac197036510427e93aaf03249a7d4187db01a887b8e981104a595998->enter($__internal_00bcbf1dac197036510427e93aaf03249a7d4187db01a887b8e981104a595998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5265122d188028941a7a130b8708d2d95cec93cff2a3d67501a63ee22c17f51e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5265122d188028941a7a130b8708d2d95cec93cff2a3d67501a63ee22c17f51e->enter($__internal_5265122d188028941a7a130b8708d2d95cec93cff2a3d67501a63ee22c17f51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5265122d188028941a7a130b8708d2d95cec93cff2a3d67501a63ee22c17f51e->leave($__internal_5265122d188028941a7a130b8708d2d95cec93cff2a3d67501a63ee22c17f51e_prof);

        
        $__internal_00bcbf1dac197036510427e93aaf03249a7d4187db01a887b8e981104a595998->leave($__internal_00bcbf1dac197036510427e93aaf03249a7d4187db01a887b8e981104a595998_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8bea70616af6e11cf54b471efd5db03d7ec4683ed9d311671864d11eb5adb667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bea70616af6e11cf54b471efd5db03d7ec4683ed9d311671864d11eb5adb667->enter($__internal_8bea70616af6e11cf54b471efd5db03d7ec4683ed9d311671864d11eb5adb667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a2c74d375e8f4dfb7d9da83a57894ab3d385c256b5d9c37968b6426893ed0c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c74d375e8f4dfb7d9da83a57894ab3d385c256b5d9c37968b6426893ed0c63->enter($__internal_a2c74d375e8f4dfb7d9da83a57894ab3d385c256b5d9c37968b6426893ed0c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a2c74d375e8f4dfb7d9da83a57894ab3d385c256b5d9c37968b6426893ed0c63->leave($__internal_a2c74d375e8f4dfb7d9da83a57894ab3d385c256b5d9c37968b6426893ed0c63_prof);

        
        $__internal_8bea70616af6e11cf54b471efd5db03d7ec4683ed9d311671864d11eb5adb667->leave($__internal_8bea70616af6e11cf54b471efd5db03d7ec4683ed9d311671864d11eb5adb667_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_faf73b512738343bea98da9eda368bce135a50299f3fcd043a18ed0be6cadd78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faf73b512738343bea98da9eda368bce135a50299f3fcd043a18ed0be6cadd78->enter($__internal_faf73b512738343bea98da9eda368bce135a50299f3fcd043a18ed0be6cadd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_35d3c45528b0cee8f662e08d9e7990e8978b37c191415d831deb9a14a7a716a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d3c45528b0cee8f662e08d9e7990e8978b37c191415d831deb9a14a7a716a4->enter($__internal_35d3c45528b0cee8f662e08d9e7990e8978b37c191415d831deb9a14a7a716a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_35d3c45528b0cee8f662e08d9e7990e8978b37c191415d831deb9a14a7a716a4->leave($__internal_35d3c45528b0cee8f662e08d9e7990e8978b37c191415d831deb9a14a7a716a4_prof);

        
        $__internal_faf73b512738343bea98da9eda368bce135a50299f3fcd043a18ed0be6cadd78->leave($__internal_faf73b512738343bea98da9eda368bce135a50299f3fcd043a18ed0be6cadd78_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
