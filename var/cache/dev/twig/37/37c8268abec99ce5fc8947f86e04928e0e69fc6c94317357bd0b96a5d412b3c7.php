<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_10af3e8dfb849655d5659a8116e20e1b3c95f3f1eec3d1c21fe079b5a54e3e05 extends Twig_Template
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
        $__internal_6ba38d44d57bc6322bfc16bdc87db401a7575633c88891c3671a751c45e73122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ba38d44d57bc6322bfc16bdc87db401a7575633c88891c3671a751c45e73122->enter($__internal_6ba38d44d57bc6322bfc16bdc87db401a7575633c88891c3671a751c45e73122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b99b667c34b8c99ea86eea3e894da1a7117ec386164e00ec77dd30bbe93dbbe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99b667c34b8c99ea86eea3e894da1a7117ec386164e00ec77dd30bbe93dbbe6->enter($__internal_b99b667c34b8c99ea86eea3e894da1a7117ec386164e00ec77dd30bbe93dbbe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ba38d44d57bc6322bfc16bdc87db401a7575633c88891c3671a751c45e73122->leave($__internal_6ba38d44d57bc6322bfc16bdc87db401a7575633c88891c3671a751c45e73122_prof);

        
        $__internal_b99b667c34b8c99ea86eea3e894da1a7117ec386164e00ec77dd30bbe93dbbe6->leave($__internal_b99b667c34b8c99ea86eea3e894da1a7117ec386164e00ec77dd30bbe93dbbe6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_603cb8a1d025df8ba83023c4f07482c19e18ee77ca71cacda8597087b40e2eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_603cb8a1d025df8ba83023c4f07482c19e18ee77ca71cacda8597087b40e2eb9->enter($__internal_603cb8a1d025df8ba83023c4f07482c19e18ee77ca71cacda8597087b40e2eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_eac2b78202e76bb592ade5f8fde0dfb60e425c65dcaba63ad245aab244380633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac2b78202e76bb592ade5f8fde0dfb60e425c65dcaba63ad245aab244380633->enter($__internal_eac2b78202e76bb592ade5f8fde0dfb60e425c65dcaba63ad245aab244380633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eac2b78202e76bb592ade5f8fde0dfb60e425c65dcaba63ad245aab244380633->leave($__internal_eac2b78202e76bb592ade5f8fde0dfb60e425c65dcaba63ad245aab244380633_prof);

        
        $__internal_603cb8a1d025df8ba83023c4f07482c19e18ee77ca71cacda8597087b40e2eb9->leave($__internal_603cb8a1d025df8ba83023c4f07482c19e18ee77ca71cacda8597087b40e2eb9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_322f3f5072f1a0857140753dc1bbe793288e587c8966e6ad9a74d2694c300b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_322f3f5072f1a0857140753dc1bbe793288e587c8966e6ad9a74d2694c300b8c->enter($__internal_322f3f5072f1a0857140753dc1bbe793288e587c8966e6ad9a74d2694c300b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ea6bade6ab3c31f08c9e6c29b36c55b77e2d830633e494efe8bb47a08406ffe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6bade6ab3c31f08c9e6c29b36c55b77e2d830633e494efe8bb47a08406ffe0->enter($__internal_ea6bade6ab3c31f08c9e6c29b36c55b77e2d830633e494efe8bb47a08406ffe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ea6bade6ab3c31f08c9e6c29b36c55b77e2d830633e494efe8bb47a08406ffe0->leave($__internal_ea6bade6ab3c31f08c9e6c29b36c55b77e2d830633e494efe8bb47a08406ffe0_prof);

        
        $__internal_322f3f5072f1a0857140753dc1bbe793288e587c8966e6ad9a74d2694c300b8c->leave($__internal_322f3f5072f1a0857140753dc1bbe793288e587c8966e6ad9a74d2694c300b8c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d4267fafbfc0b41b864cdab736dfdb63b281fe3254898267dd4a506598bb14b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d4267fafbfc0b41b864cdab736dfdb63b281fe3254898267dd4a506598bb14b->enter($__internal_8d4267fafbfc0b41b864cdab736dfdb63b281fe3254898267dd4a506598bb14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_545aef56cdc644aecafe892c53a9023880e0d25d17d173ba158472b7a797fed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545aef56cdc644aecafe892c53a9023880e0d25d17d173ba158472b7a797fed7->enter($__internal_545aef56cdc644aecafe892c53a9023880e0d25d17d173ba158472b7a797fed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_545aef56cdc644aecafe892c53a9023880e0d25d17d173ba158472b7a797fed7->leave($__internal_545aef56cdc644aecafe892c53a9023880e0d25d17d173ba158472b7a797fed7_prof);

        
        $__internal_8d4267fafbfc0b41b864cdab736dfdb63b281fe3254898267dd4a506598bb14b->leave($__internal_8d4267fafbfc0b41b864cdab736dfdb63b281fe3254898267dd4a506598bb14b_prof);

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
