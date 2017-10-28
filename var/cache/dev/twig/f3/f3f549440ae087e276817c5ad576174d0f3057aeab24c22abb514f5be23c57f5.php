<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_5e60bc764b2c9fd56ce762d71c844d488ed4468e51bcc05c3cd58845c882a4d4 extends Twig_Template
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
        $__internal_81cde4db56175c5d9edf86a973c4c4ca6c43df0089bd3d0f4e2cbbaa7b07a957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81cde4db56175c5d9edf86a973c4c4ca6c43df0089bd3d0f4e2cbbaa7b07a957->enter($__internal_81cde4db56175c5d9edf86a973c4c4ca6c43df0089bd3d0f4e2cbbaa7b07a957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_a97e4b48b59bb878a0adc4440bd6406ed50efced65fe0007cef59e5c29aab793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97e4b48b59bb878a0adc4440bd6406ed50efced65fe0007cef59e5c29aab793->enter($__internal_a97e4b48b59bb878a0adc4440bd6406ed50efced65fe0007cef59e5c29aab793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_81cde4db56175c5d9edf86a973c4c4ca6c43df0089bd3d0f4e2cbbaa7b07a957->leave($__internal_81cde4db56175c5d9edf86a973c4c4ca6c43df0089bd3d0f4e2cbbaa7b07a957_prof);

        
        $__internal_a97e4b48b59bb878a0adc4440bd6406ed50efced65fe0007cef59e5c29aab793->leave($__internal_a97e4b48b59bb878a0adc4440bd6406ed50efced65fe0007cef59e5c29aab793_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
