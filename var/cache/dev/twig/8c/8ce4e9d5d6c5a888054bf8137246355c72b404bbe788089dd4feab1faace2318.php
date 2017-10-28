<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_83437b431eda0c2c3504c3bfaf67c9170cbbdd688dae065ac739c3e475fb9098 extends Twig_Template
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
        $__internal_e1a63e24a514d9a30e1ed0816aa8e22305f0c87475616071f13bf93a604adae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1a63e24a514d9a30e1ed0816aa8e22305f0c87475616071f13bf93a604adae8->enter($__internal_e1a63e24a514d9a30e1ed0816aa8e22305f0c87475616071f13bf93a604adae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_ce88d3059790c881342609e13c1f3c621b2ac920943b556c5c09406a1b92c4e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce88d3059790c881342609e13c1f3c621b2ac920943b556c5c09406a1b92c4e8->enter($__internal_ce88d3059790c881342609e13c1f3c621b2ac920943b556c5c09406a1b92c4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_e1a63e24a514d9a30e1ed0816aa8e22305f0c87475616071f13bf93a604adae8->leave($__internal_e1a63e24a514d9a30e1ed0816aa8e22305f0c87475616071f13bf93a604adae8_prof);

        
        $__internal_ce88d3059790c881342609e13c1f3c621b2ac920943b556c5c09406a1b92c4e8->leave($__internal_ce88d3059790c881342609e13c1f3c621b2ac920943b556c5c09406a1b92c4e8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
