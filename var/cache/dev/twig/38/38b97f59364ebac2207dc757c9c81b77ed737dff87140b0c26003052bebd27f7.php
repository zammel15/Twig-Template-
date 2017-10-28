<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_eb6d8ba9d4503f5263a8e414502f52dc84d57cfa131d6273f7393a79a8c620a3 extends Twig_Template
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
        $__internal_097db8afd7a8e68e288c7294c93d2d5bf8dc9bcf1ad4c5dcf3a2c15ef3263f76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_097db8afd7a8e68e288c7294c93d2d5bf8dc9bcf1ad4c5dcf3a2c15ef3263f76->enter($__internal_097db8afd7a8e68e288c7294c93d2d5bf8dc9bcf1ad4c5dcf3a2c15ef3263f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_87aa598bc0684420654e8e22b47ad16af3420e8dc61c932be5d754586becadc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87aa598bc0684420654e8e22b47ad16af3420e8dc61c932be5d754586becadc0->enter($__internal_87aa598bc0684420654e8e22b47ad16af3420e8dc61c932be5d754586becadc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_097db8afd7a8e68e288c7294c93d2d5bf8dc9bcf1ad4c5dcf3a2c15ef3263f76->leave($__internal_097db8afd7a8e68e288c7294c93d2d5bf8dc9bcf1ad4c5dcf3a2c15ef3263f76_prof);

        
        $__internal_87aa598bc0684420654e8e22b47ad16af3420e8dc61c932be5d754586becadc0->leave($__internal_87aa598bc0684420654e8e22b47ad16af3420e8dc61c932be5d754586becadc0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
