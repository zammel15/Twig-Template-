<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5a507dc16586160d925464b99be32e97243efae1c75c825750e2e89b916832ec extends Twig_Template
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
        $__internal_8affe8dfbe27ac6a059057c5005169635640d433a77af043b8b64103fd126afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8affe8dfbe27ac6a059057c5005169635640d433a77af043b8b64103fd126afc->enter($__internal_8affe8dfbe27ac6a059057c5005169635640d433a77af043b8b64103fd126afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_03c47ff7f9f2586f77eb5487b8a1ec2550201a01cdf5f645c165511a85704174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c47ff7f9f2586f77eb5487b8a1ec2550201a01cdf5f645c165511a85704174->enter($__internal_03c47ff7f9f2586f77eb5487b8a1ec2550201a01cdf5f645c165511a85704174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8affe8dfbe27ac6a059057c5005169635640d433a77af043b8b64103fd126afc->leave($__internal_8affe8dfbe27ac6a059057c5005169635640d433a77af043b8b64103fd126afc_prof);

        
        $__internal_03c47ff7f9f2586f77eb5487b8a1ec2550201a01cdf5f645c165511a85704174->leave($__internal_03c47ff7f9f2586f77eb5487b8a1ec2550201a01cdf5f645c165511a85704174_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4f9f2871e0e9b8b28816a8a92e3ecde750a6d89774d413a92c85612c9b3192e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f9f2871e0e9b8b28816a8a92e3ecde750a6d89774d413a92c85612c9b3192e2->enter($__internal_4f9f2871e0e9b8b28816a8a92e3ecde750a6d89774d413a92c85612c9b3192e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8f559897da82a5610bb5addebf6dd9de019268eecee431c12fe0977e4c4424fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f559897da82a5610bb5addebf6dd9de019268eecee431c12fe0977e4c4424fa->enter($__internal_8f559897da82a5610bb5addebf6dd9de019268eecee431c12fe0977e4c4424fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8f559897da82a5610bb5addebf6dd9de019268eecee431c12fe0977e4c4424fa->leave($__internal_8f559897da82a5610bb5addebf6dd9de019268eecee431c12fe0977e4c4424fa_prof);

        
        $__internal_4f9f2871e0e9b8b28816a8a92e3ecde750a6d89774d413a92c85612c9b3192e2->leave($__internal_4f9f2871e0e9b8b28816a8a92e3ecde750a6d89774d413a92c85612c9b3192e2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b7f53b363509ae18e5f4ffc954fe6a9f71867b108b507348955ead7c2adf1b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f53b363509ae18e5f4ffc954fe6a9f71867b108b507348955ead7c2adf1b4f->enter($__internal_b7f53b363509ae18e5f4ffc954fe6a9f71867b108b507348955ead7c2adf1b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_74df7cef028ea1539076c9c99581268bc9800eab520e4b4c2f1e625262fb4d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74df7cef028ea1539076c9c99581268bc9800eab520e4b4c2f1e625262fb4d3e->enter($__internal_74df7cef028ea1539076c9c99581268bc9800eab520e4b4c2f1e625262fb4d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_74df7cef028ea1539076c9c99581268bc9800eab520e4b4c2f1e625262fb4d3e->leave($__internal_74df7cef028ea1539076c9c99581268bc9800eab520e4b4c2f1e625262fb4d3e_prof);

        
        $__internal_b7f53b363509ae18e5f4ffc954fe6a9f71867b108b507348955ead7c2adf1b4f->leave($__internal_b7f53b363509ae18e5f4ffc954fe6a9f71867b108b507348955ead7c2adf1b4f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b16c16d77b3fb9df8df8135f3e9075cad0b45bd4ef436479d77a050233bafe47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b16c16d77b3fb9df8df8135f3e9075cad0b45bd4ef436479d77a050233bafe47->enter($__internal_b16c16d77b3fb9df8df8135f3e9075cad0b45bd4ef436479d77a050233bafe47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_335c673f9650997aab2e5a77ec54e36f673596136a9529a37fd8e9bae4fac51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_335c673f9650997aab2e5a77ec54e36f673596136a9529a37fd8e9bae4fac51b->enter($__internal_335c673f9650997aab2e5a77ec54e36f673596136a9529a37fd8e9bae4fac51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_335c673f9650997aab2e5a77ec54e36f673596136a9529a37fd8e9bae4fac51b->leave($__internal_335c673f9650997aab2e5a77ec54e36f673596136a9529a37fd8e9bae4fac51b_prof);

        
        $__internal_b16c16d77b3fb9df8df8135f3e9075cad0b45bd4ef436479d77a050233bafe47->leave($__internal_b16c16d77b3fb9df8df8135f3e9075cad0b45bd4ef436479d77a050233bafe47_prof);

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
