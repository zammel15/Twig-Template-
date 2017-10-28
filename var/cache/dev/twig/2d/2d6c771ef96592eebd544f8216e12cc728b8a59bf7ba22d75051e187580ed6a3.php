<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_fadd9553f8752b9570f1f10896dcfc98d8558a9247f02108222c028791d0a7cf extends Twig_Template
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
        $__internal_cef61dac4695b50ba8440768d0190a05871ef9c9ddf2f6de36fbe42ba6473417 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef61dac4695b50ba8440768d0190a05871ef9c9ddf2f6de36fbe42ba6473417->enter($__internal_cef61dac4695b50ba8440768d0190a05871ef9c9ddf2f6de36fbe42ba6473417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_a562e2738f1425ea43a57053e4bcaa0b7354de95b0d3be20078491f33081a464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a562e2738f1425ea43a57053e4bcaa0b7354de95b0d3be20078491f33081a464->enter($__internal_a562e2738f1425ea43a57053e4bcaa0b7354de95b0d3be20078491f33081a464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_cef61dac4695b50ba8440768d0190a05871ef9c9ddf2f6de36fbe42ba6473417->leave($__internal_cef61dac4695b50ba8440768d0190a05871ef9c9ddf2f6de36fbe42ba6473417_prof);

        
        $__internal_a562e2738f1425ea43a57053e4bcaa0b7354de95b0d3be20078491f33081a464->leave($__internal_a562e2738f1425ea43a57053e4bcaa0b7354de95b0d3be20078491f33081a464_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
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
", "TwigBundle:Exception:traces.txt.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
