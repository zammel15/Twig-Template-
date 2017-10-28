<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6b839115c7369d8dd77960fbace20ba958d3555c37a7562ddb2b722358d13fcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_85dac23984dbcf644ffbdc0032abd28863b703109d5524c480f1f106cc8a5b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85dac23984dbcf644ffbdc0032abd28863b703109d5524c480f1f106cc8a5b37->enter($__internal_85dac23984dbcf644ffbdc0032abd28863b703109d5524c480f1f106cc8a5b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_aa772ccd50231a0ce29a5ad2edbd52e4de0a70b6519807d5ba141ac1ec62dfcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa772ccd50231a0ce29a5ad2edbd52e4de0a70b6519807d5ba141ac1ec62dfcb->enter($__internal_aa772ccd50231a0ce29a5ad2edbd52e4de0a70b6519807d5ba141ac1ec62dfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85dac23984dbcf644ffbdc0032abd28863b703109d5524c480f1f106cc8a5b37->leave($__internal_85dac23984dbcf644ffbdc0032abd28863b703109d5524c480f1f106cc8a5b37_prof);

        
        $__internal_aa772ccd50231a0ce29a5ad2edbd52e4de0a70b6519807d5ba141ac1ec62dfcb->leave($__internal_aa772ccd50231a0ce29a5ad2edbd52e4de0a70b6519807d5ba141ac1ec62dfcb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b5377dce3ddf07d21ef2faaca3647c454a97ecbf3474d6bce6a2a6c480dcfaa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5377dce3ddf07d21ef2faaca3647c454a97ecbf3474d6bce6a2a6c480dcfaa8->enter($__internal_b5377dce3ddf07d21ef2faaca3647c454a97ecbf3474d6bce6a2a6c480dcfaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_41b9736fc60061ba59de86489aaf18e77c81ba3f72d99e15cd15c851beee417f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b9736fc60061ba59de86489aaf18e77c81ba3f72d99e15cd15c851beee417f->enter($__internal_41b9736fc60061ba59de86489aaf18e77c81ba3f72d99e15cd15c851beee417f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_41b9736fc60061ba59de86489aaf18e77c81ba3f72d99e15cd15c851beee417f->leave($__internal_41b9736fc60061ba59de86489aaf18e77c81ba3f72d99e15cd15c851beee417f_prof);

        
        $__internal_b5377dce3ddf07d21ef2faaca3647c454a97ecbf3474d6bce6a2a6c480dcfaa8->leave($__internal_b5377dce3ddf07d21ef2faaca3647c454a97ecbf3474d6bce6a2a6c480dcfaa8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3c4e51c154cdc81a63cd1353577b83636b8037f1231b677e76265a0f705d8dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4e51c154cdc81a63cd1353577b83636b8037f1231b677e76265a0f705d8dbd->enter($__internal_3c4e51c154cdc81a63cd1353577b83636b8037f1231b677e76265a0f705d8dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_03bdb169ee9eabac508a94f35deab4b876b5e3a91511b89ce2a8252f52ad3ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03bdb169ee9eabac508a94f35deab4b876b5e3a91511b89ce2a8252f52ad3ac0->enter($__internal_03bdb169ee9eabac508a94f35deab4b876b5e3a91511b89ce2a8252f52ad3ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_03bdb169ee9eabac508a94f35deab4b876b5e3a91511b89ce2a8252f52ad3ac0->leave($__internal_03bdb169ee9eabac508a94f35deab4b876b5e3a91511b89ce2a8252f52ad3ac0_prof);

        
        $__internal_3c4e51c154cdc81a63cd1353577b83636b8037f1231b677e76265a0f705d8dbd->leave($__internal_3c4e51c154cdc81a63cd1353577b83636b8037f1231b677e76265a0f705d8dbd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0d17fc69a45fbfd993f0662696ab793656c39ead7e63d7a4e146e83331126fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d17fc69a45fbfd993f0662696ab793656c39ead7e63d7a4e146e83331126fac->enter($__internal_0d17fc69a45fbfd993f0662696ab793656c39ead7e63d7a4e146e83331126fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b7d1d70599551ecae008decfd5eef90a2bd241b51f62782d26e7f69e207ca7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d1d70599551ecae008decfd5eef90a2bd241b51f62782d26e7f69e207ca7f5->enter($__internal_b7d1d70599551ecae008decfd5eef90a2bd241b51f62782d26e7f69e207ca7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b7d1d70599551ecae008decfd5eef90a2bd241b51f62782d26e7f69e207ca7f5->leave($__internal_b7d1d70599551ecae008decfd5eef90a2bd241b51f62782d26e7f69e207ca7f5_prof);

        
        $__internal_0d17fc69a45fbfd993f0662696ab793656c39ead7e63d7a4e146e83331126fac->leave($__internal_0d17fc69a45fbfd993f0662696ab793656c39ead7e63d7a4e146e83331126fac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
