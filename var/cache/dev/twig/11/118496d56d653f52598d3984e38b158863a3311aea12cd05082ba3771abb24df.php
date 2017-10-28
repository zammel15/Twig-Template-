<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_f2a8df08792500d499f0260e6dd4e48c07d5c5d12020737e5852b752c1b93cd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_d41aa6e292be15187688a8cab52f343e02bead8cb9e444356dbd733795f7cf50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d41aa6e292be15187688a8cab52f343e02bead8cb9e444356dbd733795f7cf50->enter($__internal_d41aa6e292be15187688a8cab52f343e02bead8cb9e444356dbd733795f7cf50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_799528ac8c562b9540625df55b7a1cd655e6c83976e630e65b90979afbaa2828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799528ac8c562b9540625df55b7a1cd655e6c83976e630e65b90979afbaa2828->enter($__internal_799528ac8c562b9540625df55b7a1cd655e6c83976e630e65b90979afbaa2828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d41aa6e292be15187688a8cab52f343e02bead8cb9e444356dbd733795f7cf50->leave($__internal_d41aa6e292be15187688a8cab52f343e02bead8cb9e444356dbd733795f7cf50_prof);

        
        $__internal_799528ac8c562b9540625df55b7a1cd655e6c83976e630e65b90979afbaa2828->leave($__internal_799528ac8c562b9540625df55b7a1cd655e6c83976e630e65b90979afbaa2828_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_cb9a374149df8f5be1adad6c7a6eb89689999756727995c240e17ca42c86c7f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb9a374149df8f5be1adad6c7a6eb89689999756727995c240e17ca42c86c7f1->enter($__internal_cb9a374149df8f5be1adad6c7a6eb89689999756727995c240e17ca42c86c7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_dc2c043601dc59a8e7e41b8de89629dc37dbd61efedee2ec898e5ec255439f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2c043601dc59a8e7e41b8de89629dc37dbd61efedee2ec898e5ec255439f4a->enter($__internal_dc2c043601dc59a8e7e41b8de89629dc37dbd61efedee2ec898e5ec255439f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_dc2c043601dc59a8e7e41b8de89629dc37dbd61efedee2ec898e5ec255439f4a->leave($__internal_dc2c043601dc59a8e7e41b8de89629dc37dbd61efedee2ec898e5ec255439f4a_prof);

        
        $__internal_cb9a374149df8f5be1adad6c7a6eb89689999756727995c240e17ca42c86c7f1->leave($__internal_cb9a374149df8f5be1adad6c7a6eb89689999756727995c240e17ca42c86c7f1_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_92946b61483d824a1fc91f030b73e43f4f14a4631d8401db33260a258bdd6fa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92946b61483d824a1fc91f030b73e43f4f14a4631d8401db33260a258bdd6fa5->enter($__internal_92946b61483d824a1fc91f030b73e43f4f14a4631d8401db33260a258bdd6fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_305da8dcac1c2f234e482629c092dc7b158d4b204fc5c0d08c397e3c65ac0a0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305da8dcac1c2f234e482629c092dc7b158d4b204fc5c0d08c397e3c65ac0a0e->enter($__internal_305da8dcac1c2f234e482629c092dc7b158d4b204fc5c0d08c397e3c65ac0a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_305da8dcac1c2f234e482629c092dc7b158d4b204fc5c0d08c397e3c65ac0a0e->leave($__internal_305da8dcac1c2f234e482629c092dc7b158d4b204fc5c0d08c397e3c65ac0a0e_prof);

        
        $__internal_92946b61483d824a1fc91f030b73e43f4f14a4631d8401db33260a258bdd6fa5->leave($__internal_92946b61483d824a1fc91f030b73e43f4f14a4631d8401db33260a258bdd6fa5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
