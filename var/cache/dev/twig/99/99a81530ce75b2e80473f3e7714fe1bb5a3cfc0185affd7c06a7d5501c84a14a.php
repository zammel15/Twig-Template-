<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_086e28e525053bc9243d5390d75067602d0e6e32047cb59d3010d05fe9437d25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8c39326b13a40c7aafa855e0eede731c83922823ddccc9ebd60b615c33fa402c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c39326b13a40c7aafa855e0eede731c83922823ddccc9ebd60b615c33fa402c->enter($__internal_8c39326b13a40c7aafa855e0eede731c83922823ddccc9ebd60b615c33fa402c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_07b7202ec687094b6cd71da2d2c23e4490658e137423d67cfab749926d30d139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b7202ec687094b6cd71da2d2c23e4490658e137423d67cfab749926d30d139->enter($__internal_07b7202ec687094b6cd71da2d2c23e4490658e137423d67cfab749926d30d139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c39326b13a40c7aafa855e0eede731c83922823ddccc9ebd60b615c33fa402c->leave($__internal_8c39326b13a40c7aafa855e0eede731c83922823ddccc9ebd60b615c33fa402c_prof);

        
        $__internal_07b7202ec687094b6cd71da2d2c23e4490658e137423d67cfab749926d30d139->leave($__internal_07b7202ec687094b6cd71da2d2c23e4490658e137423d67cfab749926d30d139_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bf4a51755bfc617312598ad798da241052821dfd8bd77ee213e27bf988098ef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf4a51755bfc617312598ad798da241052821dfd8bd77ee213e27bf988098ef5->enter($__internal_bf4a51755bfc617312598ad798da241052821dfd8bd77ee213e27bf988098ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_00a10aed35cf540cf2e9b529af05b425afef048b51bf117937e28adcf0f46acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a10aed35cf540cf2e9b529af05b425afef048b51bf117937e28adcf0f46acf->enter($__internal_00a10aed35cf540cf2e9b529af05b425afef048b51bf117937e28adcf0f46acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_00a10aed35cf540cf2e9b529af05b425afef048b51bf117937e28adcf0f46acf->leave($__internal_00a10aed35cf540cf2e9b529af05b425afef048b51bf117937e28adcf0f46acf_prof);

        
        $__internal_bf4a51755bfc617312598ad798da241052821dfd8bd77ee213e27bf988098ef5->leave($__internal_bf4a51755bfc617312598ad798da241052821dfd8bd77ee213e27bf988098ef5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2dcf572737cf52721e5944dff894c593f734f0ac038bce638b87bb4808df9d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dcf572737cf52721e5944dff894c593f734f0ac038bce638b87bb4808df9d94->enter($__internal_2dcf572737cf52721e5944dff894c593f734f0ac038bce638b87bb4808df9d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c6fe87ef8571bb03093af86a374b2ba560d3d39dfca90376c0c1524e49517f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fe87ef8571bb03093af86a374b2ba560d3d39dfca90376c0c1524e49517f73->enter($__internal_c6fe87ef8571bb03093af86a374b2ba560d3d39dfca90376c0c1524e49517f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c6fe87ef8571bb03093af86a374b2ba560d3d39dfca90376c0c1524e49517f73->leave($__internal_c6fe87ef8571bb03093af86a374b2ba560d3d39dfca90376c0c1524e49517f73_prof);

        
        $__internal_2dcf572737cf52721e5944dff894c593f734f0ac038bce638b87bb4808df9d94->leave($__internal_2dcf572737cf52721e5944dff894c593f734f0ac038bce638b87bb4808df9d94_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_19312ff29b9088a0c32aaebce8e8572ebd00383601f1d0ae78f35d28c270f873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19312ff29b9088a0c32aaebce8e8572ebd00383601f1d0ae78f35d28c270f873->enter($__internal_19312ff29b9088a0c32aaebce8e8572ebd00383601f1d0ae78f35d28c270f873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8ea87029a40195b238ff408f40782ac06bf0a8ca667d0ea80c7de6a689b210d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea87029a40195b238ff408f40782ac06bf0a8ca667d0ea80c7de6a689b210d8->enter($__internal_8ea87029a40195b238ff408f40782ac06bf0a8ca667d0ea80c7de6a689b210d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8ea87029a40195b238ff408f40782ac06bf0a8ca667d0ea80c7de6a689b210d8->leave($__internal_8ea87029a40195b238ff408f40782ac06bf0a8ca667d0ea80c7de6a689b210d8_prof);

        
        $__internal_19312ff29b9088a0c32aaebce8e8572ebd00383601f1d0ae78f35d28c270f873->leave($__internal_19312ff29b9088a0c32aaebce8e8572ebd00383601f1d0ae78f35d28c270f873_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
