<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_7ccd3715cfe113a1ed2f4fad89954452df48bbe7a61a11e3d248352df07addea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_221f90ed43c47b88cd9a11e1b01ef615a4c0271a9c96819ffe8f9f5d90ebfdea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221f90ed43c47b88cd9a11e1b01ef615a4c0271a9c96819ffe8f9f5d90ebfdea->enter($__internal_221f90ed43c47b88cd9a11e1b01ef615a4c0271a9c96819ffe8f9f5d90ebfdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_df8a9de056e48883f5dc345e3250f06bba224b2b57813b22af779427a89312cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8a9de056e48883f5dc345e3250f06bba224b2b57813b22af779427a89312cf->enter($__internal_df8a9de056e48883f5dc345e3250f06bba224b2b57813b22af779427a89312cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_221f90ed43c47b88cd9a11e1b01ef615a4c0271a9c96819ffe8f9f5d90ebfdea->leave($__internal_221f90ed43c47b88cd9a11e1b01ef615a4c0271a9c96819ffe8f9f5d90ebfdea_prof);

        
        $__internal_df8a9de056e48883f5dc345e3250f06bba224b2b57813b22af779427a89312cf->leave($__internal_df8a9de056e48883f5dc345e3250f06bba224b2b57813b22af779427a89312cf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
