<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9ed1b4c72f84e6eedb392cb4404f1e2f1ad301db4bcecdc47c0ffb6b6a638504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_6fcb437a1c308aa0575b28317b8502e1cbe3ed913bf920f487283831ab4ff2f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fcb437a1c308aa0575b28317b8502e1cbe3ed913bf920f487283831ab4ff2f5->enter($__internal_6fcb437a1c308aa0575b28317b8502e1cbe3ed913bf920f487283831ab4ff2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_670b937d9125e6c9862a6f92e8fd7061edfc90a2efe606afd067fe3ab932d4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670b937d9125e6c9862a6f92e8fd7061edfc90a2efe606afd067fe3ab932d4be->enter($__internal_670b937d9125e6c9862a6f92e8fd7061edfc90a2efe606afd067fe3ab932d4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fcb437a1c308aa0575b28317b8502e1cbe3ed913bf920f487283831ab4ff2f5->leave($__internal_6fcb437a1c308aa0575b28317b8502e1cbe3ed913bf920f487283831ab4ff2f5_prof);

        
        $__internal_670b937d9125e6c9862a6f92e8fd7061edfc90a2efe606afd067fe3ab932d4be->leave($__internal_670b937d9125e6c9862a6f92e8fd7061edfc90a2efe606afd067fe3ab932d4be_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bd433663882d202ea4d4724671e66f0636deb02cbf21bee9cbe98e6b3ddd55a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd433663882d202ea4d4724671e66f0636deb02cbf21bee9cbe98e6b3ddd55a4->enter($__internal_bd433663882d202ea4d4724671e66f0636deb02cbf21bee9cbe98e6b3ddd55a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_918e7a921e77eb59b5a149c35804ab367c6878dab62ae2fb8a8640d4804206c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918e7a921e77eb59b5a149c35804ab367c6878dab62ae2fb8a8640d4804206c1->enter($__internal_918e7a921e77eb59b5a149c35804ab367c6878dab62ae2fb8a8640d4804206c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_918e7a921e77eb59b5a149c35804ab367c6878dab62ae2fb8a8640d4804206c1->leave($__internal_918e7a921e77eb59b5a149c35804ab367c6878dab62ae2fb8a8640d4804206c1_prof);

        
        $__internal_bd433663882d202ea4d4724671e66f0636deb02cbf21bee9cbe98e6b3ddd55a4->leave($__internal_bd433663882d202ea4d4724671e66f0636deb02cbf21bee9cbe98e6b3ddd55a4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dfb002084d7ea1575d844911d53c73e6ac1be3b77c290274e80dad9781d37b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfb002084d7ea1575d844911d53c73e6ac1be3b77c290274e80dad9781d37b35->enter($__internal_dfb002084d7ea1575d844911d53c73e6ac1be3b77c290274e80dad9781d37b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0e1aff6dfea2a8ccda125b6153113c5dc8369f68cadb134207d1c8f244cade29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1aff6dfea2a8ccda125b6153113c5dc8369f68cadb134207d1c8f244cade29->enter($__internal_0e1aff6dfea2a8ccda125b6153113c5dc8369f68cadb134207d1c8f244cade29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0e1aff6dfea2a8ccda125b6153113c5dc8369f68cadb134207d1c8f244cade29->leave($__internal_0e1aff6dfea2a8ccda125b6153113c5dc8369f68cadb134207d1c8f244cade29_prof);

        
        $__internal_dfb002084d7ea1575d844911d53c73e6ac1be3b77c290274e80dad9781d37b35->leave($__internal_dfb002084d7ea1575d844911d53c73e6ac1be3b77c290274e80dad9781d37b35_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa6a69070712624d73a11134c6d263dff871edbe02af5be481ea76bfd1ae1855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa6a69070712624d73a11134c6d263dff871edbe02af5be481ea76bfd1ae1855->enter($__internal_fa6a69070712624d73a11134c6d263dff871edbe02af5be481ea76bfd1ae1855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bb2b75ca6f15bf273dfce91ec586c77e38581ed01ba2258c378af417a4aaa8b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb2b75ca6f15bf273dfce91ec586c77e38581ed01ba2258c378af417a4aaa8b0->enter($__internal_bb2b75ca6f15bf273dfce91ec586c77e38581ed01ba2258c378af417a4aaa8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bb2b75ca6f15bf273dfce91ec586c77e38581ed01ba2258c378af417a4aaa8b0->leave($__internal_bb2b75ca6f15bf273dfce91ec586c77e38581ed01ba2258c378af417a4aaa8b0_prof);

        
        $__internal_fa6a69070712624d73a11134c6d263dff871edbe02af5be481ea76bfd1ae1855->leave($__internal_fa6a69070712624d73a11134c6d263dff871edbe02af5be481ea76bfd1ae1855_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
