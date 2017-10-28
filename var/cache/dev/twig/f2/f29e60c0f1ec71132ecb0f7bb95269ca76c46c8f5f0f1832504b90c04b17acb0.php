<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_81ef424db05918f4c6b72b1b28bc5f50e15a3422231199c6952d74eae0343a97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_078b03ad50c341226d49708bd39d8f46ee4d5d7b61fa0714fde08e4b7f27d6e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_078b03ad50c341226d49708bd39d8f46ee4d5d7b61fa0714fde08e4b7f27d6e4->enter($__internal_078b03ad50c341226d49708bd39d8f46ee4d5d7b61fa0714fde08e4b7f27d6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_9adad9f75f07d9a76d9b5c323755aa958c9c62bbea95221f732476062a479c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9adad9f75f07d9a76d9b5c323755aa958c9c62bbea95221f732476062a479c17->enter($__internal_9adad9f75f07d9a76d9b5c323755aa958c9c62bbea95221f732476062a479c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_078b03ad50c341226d49708bd39d8f46ee4d5d7b61fa0714fde08e4b7f27d6e4->leave($__internal_078b03ad50c341226d49708bd39d8f46ee4d5d7b61fa0714fde08e4b7f27d6e4_prof);

        
        $__internal_9adad9f75f07d9a76d9b5c323755aa958c9c62bbea95221f732476062a479c17->leave($__internal_9adad9f75f07d9a76d9b5c323755aa958c9c62bbea95221f732476062a479c17_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b337444ebce23e3056d2509c856892c34738c3e14956c7ea2070c285631c62c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b337444ebce23e3056d2509c856892c34738c3e14956c7ea2070c285631c62c8->enter($__internal_b337444ebce23e3056d2509c856892c34738c3e14956c7ea2070c285631c62c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8cc7da9d0423c9b83c245f699e3355bf7a13ef3a8ae26c285a08ac642ba5256a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc7da9d0423c9b83c245f699e3355bf7a13ef3a8ae26c285a08ac642ba5256a->enter($__internal_8cc7da9d0423c9b83c245f699e3355bf7a13ef3a8ae26c285a08ac642ba5256a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8cc7da9d0423c9b83c245f699e3355bf7a13ef3a8ae26c285a08ac642ba5256a->leave($__internal_8cc7da9d0423c9b83c245f699e3355bf7a13ef3a8ae26c285a08ac642ba5256a_prof);

        
        $__internal_b337444ebce23e3056d2509c856892c34738c3e14956c7ea2070c285631c62c8->leave($__internal_b337444ebce23e3056d2509c856892c34738c3e14956c7ea2070c285631c62c8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d58335ba1321559ea33b469aea77ed6f3c549ddfd2b7f0f9c597e94f4c60544f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d58335ba1321559ea33b469aea77ed6f3c549ddfd2b7f0f9c597e94f4c60544f->enter($__internal_d58335ba1321559ea33b469aea77ed6f3c549ddfd2b7f0f9c597e94f4c60544f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60714b71b45cf26a33232bb5a9d2bad89749c89eb47edeeabf75b771e913ea17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60714b71b45cf26a33232bb5a9d2bad89749c89eb47edeeabf75b771e913ea17->enter($__internal_60714b71b45cf26a33232bb5a9d2bad89749c89eb47edeeabf75b771e913ea17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_60714b71b45cf26a33232bb5a9d2bad89749c89eb47edeeabf75b771e913ea17->leave($__internal_60714b71b45cf26a33232bb5a9d2bad89749c89eb47edeeabf75b771e913ea17_prof);

        
        $__internal_d58335ba1321559ea33b469aea77ed6f3c549ddfd2b7f0f9c597e94f4c60544f->leave($__internal_d58335ba1321559ea33b469aea77ed6f3c549ddfd2b7f0f9c597e94f4c60544f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
