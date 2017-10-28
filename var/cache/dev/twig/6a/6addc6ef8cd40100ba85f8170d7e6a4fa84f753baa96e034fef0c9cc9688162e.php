<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_7d656c5835bb0532ac13432d929ddcee45a33a3ec8f0bb3a5b38c4182a4720e7 extends Twig_Template
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
        $__internal_4800f2140b2edd6c153155bd8d7c246cd895ff27b992cd6a6d4a4c4ea68e2c6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4800f2140b2edd6c153155bd8d7c246cd895ff27b992cd6a6d4a4c4ea68e2c6b->enter($__internal_4800f2140b2edd6c153155bd8d7c246cd895ff27b992cd6a6d4a4c4ea68e2c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_ca6c6c3bf9a36e89a7c4c75f6a147e61d89f5e2b1c1832954c8caffafec943ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6c6c3bf9a36e89a7c4c75f6a147e61d89f5e2b1c1832954c8caffafec943ef->enter($__internal_ca6c6c3bf9a36e89a7c4c75f6a147e61d89f5e2b1c1832954c8caffafec943ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
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
        
        $__internal_4800f2140b2edd6c153155bd8d7c246cd895ff27b992cd6a6d4a4c4ea68e2c6b->leave($__internal_4800f2140b2edd6c153155bd8d7c246cd895ff27b992cd6a6d4a4c4ea68e2c6b_prof);

        
        $__internal_ca6c6c3bf9a36e89a7c4c75f6a147e61d89f5e2b1c1832954c8caffafec943ef->leave($__internal_ca6c6c3bf9a36e89a7c4c75f6a147e61d89f5e2b1c1832954c8caffafec943ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
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
", "TwigBundle:Exception:traces.xml.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
