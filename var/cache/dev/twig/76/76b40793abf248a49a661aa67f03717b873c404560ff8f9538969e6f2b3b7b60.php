<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_0d74118a87d1e285bed50f17458d2e8083e6935e5be41b82a9d39ab629a12f37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_131483b742d7a44979ed7a3403fdd7cad956be5d7ff6f174214a0912714a0bf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_131483b742d7a44979ed7a3403fdd7cad956be5d7ff6f174214a0912714a0bf9->enter($__internal_131483b742d7a44979ed7a3403fdd7cad956be5d7ff6f174214a0912714a0bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a4bf9cf0454093191442a6727ff1bdcc610f3f64b96c1972ef66852016e43401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4bf9cf0454093191442a6727ff1bdcc610f3f64b96c1972ef66852016e43401->enter($__internal_a4bf9cf0454093191442a6727ff1bdcc610f3f64b96c1972ef66852016e43401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_131483b742d7a44979ed7a3403fdd7cad956be5d7ff6f174214a0912714a0bf9->leave($__internal_131483b742d7a44979ed7a3403fdd7cad956be5d7ff6f174214a0912714a0bf9_prof);

        
        $__internal_a4bf9cf0454093191442a6727ff1bdcc610f3f64b96c1972ef66852016e43401->leave($__internal_a4bf9cf0454093191442a6727ff1bdcc610f3f64b96c1972ef66852016e43401_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_182548b65240c628e4dca6067ead8a5e4e4acbafa9d4ff4e1dc701ffb201de50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_182548b65240c628e4dca6067ead8a5e4e4acbafa9d4ff4e1dc701ffb201de50->enter($__internal_182548b65240c628e4dca6067ead8a5e4e4acbafa9d4ff4e1dc701ffb201de50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f80575de26c9e65aaaee85cb10c99546bfd41f0d3a46c5e5723fd0cdaab76f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f80575de26c9e65aaaee85cb10c99546bfd41f0d3a46c5e5723fd0cdaab76f3b->enter($__internal_f80575de26c9e65aaaee85cb10c99546bfd41f0d3a46c5e5723fd0cdaab76f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f80575de26c9e65aaaee85cb10c99546bfd41f0d3a46c5e5723fd0cdaab76f3b->leave($__internal_f80575de26c9e65aaaee85cb10c99546bfd41f0d3a46c5e5723fd0cdaab76f3b_prof);

        
        $__internal_182548b65240c628e4dca6067ead8a5e4e4acbafa9d4ff4e1dc701ffb201de50->leave($__internal_182548b65240c628e4dca6067ead8a5e4e4acbafa9d4ff4e1dc701ffb201de50_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_84bebe41532c8d1cd7e8a693712bc73b88cf30ba4a060eadd695a19a7e960b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84bebe41532c8d1cd7e8a693712bc73b88cf30ba4a060eadd695a19a7e960b04->enter($__internal_84bebe41532c8d1cd7e8a693712bc73b88cf30ba4a060eadd695a19a7e960b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_886e69bcc5902a5b0c58bd4be9766cfe8ec2df07580aa588f64eaa04a86e9ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_886e69bcc5902a5b0c58bd4be9766cfe8ec2df07580aa588f64eaa04a86e9ce0->enter($__internal_886e69bcc5902a5b0c58bd4be9766cfe8ec2df07580aa588f64eaa04a86e9ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_886e69bcc5902a5b0c58bd4be9766cfe8ec2df07580aa588f64eaa04a86e9ce0->leave($__internal_886e69bcc5902a5b0c58bd4be9766cfe8ec2df07580aa588f64eaa04a86e9ce0_prof);

        
        $__internal_84bebe41532c8d1cd7e8a693712bc73b88cf30ba4a060eadd695a19a7e960b04->leave($__internal_84bebe41532c8d1cd7e8a693712bc73b88cf30ba4a060eadd695a19a7e960b04_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
