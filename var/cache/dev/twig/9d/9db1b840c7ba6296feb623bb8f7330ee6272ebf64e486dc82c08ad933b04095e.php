<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_e4beda9215c84e7b40a336acbfe1f164a69ba1f3151aa9360e8c1be384e87980 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c204e073b04bd01572119e99551ddbd86ccfbfaf2681e40c4469ac88d2fb32f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c204e073b04bd01572119e99551ddbd86ccfbfaf2681e40c4469ac88d2fb32f3->enter($__internal_c204e073b04bd01572119e99551ddbd86ccfbfaf2681e40c4469ac88d2fb32f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_ead785a8b7e92fbb414021cc564f0b5f0563a975066fc9a8029f59259dbc75ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead785a8b7e92fbb414021cc564f0b5f0563a975066fc9a8029f59259dbc75ba->enter($__internal_ead785a8b7e92fbb414021cc564f0b5f0563a975066fc9a8029f59259dbc75ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c204e073b04bd01572119e99551ddbd86ccfbfaf2681e40c4469ac88d2fb32f3->leave($__internal_c204e073b04bd01572119e99551ddbd86ccfbfaf2681e40c4469ac88d2fb32f3_prof);

        
        $__internal_ead785a8b7e92fbb414021cc564f0b5f0563a975066fc9a8029f59259dbc75ba->leave($__internal_ead785a8b7e92fbb414021cc564f0b5f0563a975066fc9a8029f59259dbc75ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_48ab3dd1b942020f24da3a31c120ffba8c6889a98d4c43c8c0db449ec298b811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ab3dd1b942020f24da3a31c120ffba8c6889a98d4c43c8c0db449ec298b811->enter($__internal_48ab3dd1b942020f24da3a31c120ffba8c6889a98d4c43c8c0db449ec298b811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_620a80d9e8dcb031cd5ba5d8d6e9ed228a81e93224fdce4cb001eeadbc522733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_620a80d9e8dcb031cd5ba5d8d6e9ed228a81e93224fdce4cb001eeadbc522733->enter($__internal_620a80d9e8dcb031cd5ba5d8d6e9ed228a81e93224fdce4cb001eeadbc522733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_620a80d9e8dcb031cd5ba5d8d6e9ed228a81e93224fdce4cb001eeadbc522733->leave($__internal_620a80d9e8dcb031cd5ba5d8d6e9ed228a81e93224fdce4cb001eeadbc522733_prof);

        
        $__internal_48ab3dd1b942020f24da3a31c120ffba8c6889a98d4c43c8c0db449ec298b811->leave($__internal_48ab3dd1b942020f24da3a31c120ffba8c6889a98d4c43c8c0db449ec298b811_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d54f01040869e86439cc04681cbeb4e7c776e86eb1ef78a5628f6367852df2fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d54f01040869e86439cc04681cbeb4e7c776e86eb1ef78a5628f6367852df2fa->enter($__internal_d54f01040869e86439cc04681cbeb4e7c776e86eb1ef78a5628f6367852df2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ddb53a98a3c39d93d9aecb6a88412719240274ea32a24c2071ab93efae3f31c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ddb53a98a3c39d93d9aecb6a88412719240274ea32a24c2071ab93efae3f31c->enter($__internal_4ddb53a98a3c39d93d9aecb6a88412719240274ea32a24c2071ab93efae3f31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4ddb53a98a3c39d93d9aecb6a88412719240274ea32a24c2071ab93efae3f31c->leave($__internal_4ddb53a98a3c39d93d9aecb6a88412719240274ea32a24c2071ab93efae3f31c_prof);

        
        $__internal_d54f01040869e86439cc04681cbeb4e7c776e86eb1ef78a5628f6367852df2fa->leave($__internal_d54f01040869e86439cc04681cbeb4e7c776e86eb1ef78a5628f6367852df2fa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
