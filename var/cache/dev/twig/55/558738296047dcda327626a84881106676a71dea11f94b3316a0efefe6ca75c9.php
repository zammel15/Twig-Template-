<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_24e6dc5367617e5642bba96f7d4374166aa4adc246bf3c831b9c4e47a843b63c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b2e723a9d8e52b266f4888157452519bedc98af90ea8ba0158e20f10f4fbfce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b2e723a9d8e52b266f4888157452519bedc98af90ea8ba0158e20f10f4fbfce->enter($__internal_6b2e723a9d8e52b266f4888157452519bedc98af90ea8ba0158e20f10f4fbfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_130c2ca87b3e38b4e484b2bc88fd287dac50ba336e118b6508092987dd2e0fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130c2ca87b3e38b4e484b2bc88fd287dac50ba336e118b6508092987dd2e0fc1->enter($__internal_130c2ca87b3e38b4e484b2bc88fd287dac50ba336e118b6508092987dd2e0fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b2e723a9d8e52b266f4888157452519bedc98af90ea8ba0158e20f10f4fbfce->leave($__internal_6b2e723a9d8e52b266f4888157452519bedc98af90ea8ba0158e20f10f4fbfce_prof);

        
        $__internal_130c2ca87b3e38b4e484b2bc88fd287dac50ba336e118b6508092987dd2e0fc1->leave($__internal_130c2ca87b3e38b4e484b2bc88fd287dac50ba336e118b6508092987dd2e0fc1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_12d2807b034914f5e7069c4f54da133e4b5dd7dce54770aacf90ed44dd2dc476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12d2807b034914f5e7069c4f54da133e4b5dd7dce54770aacf90ed44dd2dc476->enter($__internal_12d2807b034914f5e7069c4f54da133e4b5dd7dce54770aacf90ed44dd2dc476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c7932bf5a3eee47b0d050cb67de47ad43d4be05959ac22715885377d5b7a3603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7932bf5a3eee47b0d050cb67de47ad43d4be05959ac22715885377d5b7a3603->enter($__internal_c7932bf5a3eee47b0d050cb67de47ad43d4be05959ac22715885377d5b7a3603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c7932bf5a3eee47b0d050cb67de47ad43d4be05959ac22715885377d5b7a3603->leave($__internal_c7932bf5a3eee47b0d050cb67de47ad43d4be05959ac22715885377d5b7a3603_prof);

        
        $__internal_12d2807b034914f5e7069c4f54da133e4b5dd7dce54770aacf90ed44dd2dc476->leave($__internal_12d2807b034914f5e7069c4f54da133e4b5dd7dce54770aacf90ed44dd2dc476_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
