<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_df80d6b36747686b85ed71b6baa500086f1c50c3ef9c4baa5c69d00e03a3a01a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e11ce324998c2c6c2bb84fe1c165a21b43cca5eb5657c4e3a60ddc2b76100181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e11ce324998c2c6c2bb84fe1c165a21b43cca5eb5657c4e3a60ddc2b76100181->enter($__internal_e11ce324998c2c6c2bb84fe1c165a21b43cca5eb5657c4e3a60ddc2b76100181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_c62979ea1b302dff446a056d6ea235b41d895c6d465d70e4ecd1a481830de8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62979ea1b302dff446a056d6ea235b41d895c6d465d70e4ecd1a481830de8f6->enter($__internal_c62979ea1b302dff446a056d6ea235b41d895c6d465d70e4ecd1a481830de8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e11ce324998c2c6c2bb84fe1c165a21b43cca5eb5657c4e3a60ddc2b76100181->leave($__internal_e11ce324998c2c6c2bb84fe1c165a21b43cca5eb5657c4e3a60ddc2b76100181_prof);

        
        $__internal_c62979ea1b302dff446a056d6ea235b41d895c6d465d70e4ecd1a481830de8f6->leave($__internal_c62979ea1b302dff446a056d6ea235b41d895c6d465d70e4ecd1a481830de8f6_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_82068ec336aa433a1a618a3dc426ed4aa8fe4a96ec9b00d2496a71563e573349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82068ec336aa433a1a618a3dc426ed4aa8fe4a96ec9b00d2496a71563e573349->enter($__internal_82068ec336aa433a1a618a3dc426ed4aa8fe4a96ec9b00d2496a71563e573349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_21f5911404f28b8a6bd1362d186aae7e20663b819f7f265823ec5994b22547a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f5911404f28b8a6bd1362d186aae7e20663b819f7f265823ec5994b22547a7->enter($__internal_21f5911404f28b8a6bd1362d186aae7e20663b819f7f265823ec5994b22547a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_21f5911404f28b8a6bd1362d186aae7e20663b819f7f265823ec5994b22547a7->leave($__internal_21f5911404f28b8a6bd1362d186aae7e20663b819f7f265823ec5994b22547a7_prof);

        
        $__internal_82068ec336aa433a1a618a3dc426ed4aa8fe4a96ec9b00d2496a71563e573349->leave($__internal_82068ec336aa433a1a618a3dc426ed4aa8fe4a96ec9b00d2496a71563e573349_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63bd085576ccfa9684c41e7fe25fe6511f699ec294e0fa3ee0c1808f524a8dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63bd085576ccfa9684c41e7fe25fe6511f699ec294e0fa3ee0c1808f524a8dea->enter($__internal_63bd085576ccfa9684c41e7fe25fe6511f699ec294e0fa3ee0c1808f524a8dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fbe5615aa7298d5e06a5c5bd6c3d11d3edb60a9d5f179a44b4c47edec3616786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe5615aa7298d5e06a5c5bd6c3d11d3edb60a9d5f179a44b4c47edec3616786->enter($__internal_fbe5615aa7298d5e06a5c5bd6c3d11d3edb60a9d5f179a44b4c47edec3616786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_fbe5615aa7298d5e06a5c5bd6c3d11d3edb60a9d5f179a44b4c47edec3616786->leave($__internal_fbe5615aa7298d5e06a5c5bd6c3d11d3edb60a9d5f179a44b4c47edec3616786_prof);

        
        $__internal_63bd085576ccfa9684c41e7fe25fe6511f699ec294e0fa3ee0c1808f524a8dea->leave($__internal_63bd085576ccfa9684c41e7fe25fe6511f699ec294e0fa3ee0c1808f524a8dea_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
