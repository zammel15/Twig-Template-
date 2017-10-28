<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_ad2759c5f65b482a3c21f2fe1820b99ce2c0f7c59aabb669ebe7a6b6948792d7 extends Twig_Template
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
        $__internal_879cd2adfe358f67ff8a5f558b7a2cf12d45fb07c13b5dcd5cd22a51b0e10190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879cd2adfe358f67ff8a5f558b7a2cf12d45fb07c13b5dcd5cd22a51b0e10190->enter($__internal_879cd2adfe358f67ff8a5f558b7a2cf12d45fb07c13b5dcd5cd22a51b0e10190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_a58de358d41da34761bb23b0a95fef9a2d1224441ab33066012800a24e96e14f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58de358d41da34761bb23b0a95fef9a2d1224441ab33066012800a24e96e14f->enter($__internal_a58de358d41da34761bb23b0a95fef9a2d1224441ab33066012800a24e96e14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_879cd2adfe358f67ff8a5f558b7a2cf12d45fb07c13b5dcd5cd22a51b0e10190->leave($__internal_879cd2adfe358f67ff8a5f558b7a2cf12d45fb07c13b5dcd5cd22a51b0e10190_prof);

        
        $__internal_a58de358d41da34761bb23b0a95fef9a2d1224441ab33066012800a24e96e14f->leave($__internal_a58de358d41da34761bb23b0a95fef9a2d1224441ab33066012800a24e96e14f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
