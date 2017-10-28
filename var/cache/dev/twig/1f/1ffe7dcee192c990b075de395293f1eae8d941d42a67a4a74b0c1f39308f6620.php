<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_1fef92f7ee0155334f3eb40341a53902ae0adca176ea9f484fc3c3b817f4c9e4 extends Twig_Template
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
        $__internal_e94bf3b0ecd5555aaf02bb8fef8c98722047d388a1162e7b7ccbfa114007b401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e94bf3b0ecd5555aaf02bb8fef8c98722047d388a1162e7b7ccbfa114007b401->enter($__internal_e94bf3b0ecd5555aaf02bb8fef8c98722047d388a1162e7b7ccbfa114007b401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_6570a4f2b260dab072571d7d2bbb3e433f06762e591cba10be31385b800d47e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6570a4f2b260dab072571d7d2bbb3e433f06762e591cba10be31385b800d47e1->enter($__internal_6570a4f2b260dab072571d7d2bbb3e433f06762e591cba10be31385b800d47e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
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
        
        $__internal_e94bf3b0ecd5555aaf02bb8fef8c98722047d388a1162e7b7ccbfa114007b401->leave($__internal_e94bf3b0ecd5555aaf02bb8fef8c98722047d388a1162e7b7ccbfa114007b401_prof);

        
        $__internal_6570a4f2b260dab072571d7d2bbb3e433f06762e591cba10be31385b800d47e1->leave($__internal_6570a4f2b260dab072571d7d2bbb3e433f06762e591cba10be31385b800d47e1_prof);

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
