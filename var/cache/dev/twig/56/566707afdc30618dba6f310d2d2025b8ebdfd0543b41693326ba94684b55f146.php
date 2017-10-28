<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ff53047fabd68898161ba84eaf5ca248fea6827b760b4f174bdadef9913ab843 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4e3ced1da91b861d4629c3387cf70c0a082ffab9587eef9b809018fdb9484c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4e3ced1da91b861d4629c3387cf70c0a082ffab9587eef9b809018fdb9484c7->enter($__internal_a4e3ced1da91b861d4629c3387cf70c0a082ffab9587eef9b809018fdb9484c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_a7c4bb3bb890c9339d3622b88957aa2eb9d702e13885ed5a7b23ec68d512a675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c4bb3bb890c9339d3622b88957aa2eb9d702e13885ed5a7b23ec68d512a675->enter($__internal_a7c4bb3bb890c9339d3622b88957aa2eb9d702e13885ed5a7b23ec68d512a675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a4e3ced1da91b861d4629c3387cf70c0a082ffab9587eef9b809018fdb9484c7->leave($__internal_a4e3ced1da91b861d4629c3387cf70c0a082ffab9587eef9b809018fdb9484c7_prof);

        
        $__internal_a7c4bb3bb890c9339d3622b88957aa2eb9d702e13885ed5a7b23ec68d512a675->leave($__internal_a7c4bb3bb890c9339d3622b88957aa2eb9d702e13885ed5a7b23ec68d512a675_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b905cacbdc40e29ca9ab57cf272435940f9add1142d6acaeb99391dd0e8a582a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b905cacbdc40e29ca9ab57cf272435940f9add1142d6acaeb99391dd0e8a582a->enter($__internal_b905cacbdc40e29ca9ab57cf272435940f9add1142d6acaeb99391dd0e8a582a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f96cc01349d95100a9b8becb7aa36dac2842bfdc37de9da6f195d030db4aac72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f96cc01349d95100a9b8becb7aa36dac2842bfdc37de9da6f195d030db4aac72->enter($__internal_f96cc01349d95100a9b8becb7aa36dac2842bfdc37de9da6f195d030db4aac72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f96cc01349d95100a9b8becb7aa36dac2842bfdc37de9da6f195d030db4aac72->leave($__internal_f96cc01349d95100a9b8becb7aa36dac2842bfdc37de9da6f195d030db4aac72_prof);

        
        $__internal_b905cacbdc40e29ca9ab57cf272435940f9add1142d6acaeb99391dd0e8a582a->leave($__internal_b905cacbdc40e29ca9ab57cf272435940f9add1142d6acaeb99391dd0e8a582a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
