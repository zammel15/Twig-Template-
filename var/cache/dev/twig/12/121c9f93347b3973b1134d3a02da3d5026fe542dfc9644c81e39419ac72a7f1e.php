<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_a1c76547b3cd64bbfdceef6528c3aef8c7c333c49062de0a455abb7581ab8c65 extends Twig_Template
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
        $__internal_0cbd158cbd2c160755a520ed7edab749331188888d9dc80bad58b8200d2acca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cbd158cbd2c160755a520ed7edab749331188888d9dc80bad58b8200d2acca8->enter($__internal_0cbd158cbd2c160755a520ed7edab749331188888d9dc80bad58b8200d2acca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_1864b36e32080429d7deaa2067e8a6e1d49981cedb2e421e65c47e263a96698c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1864b36e32080429d7deaa2067e8a6e1d49981cedb2e421e65c47e263a96698c->enter($__internal_1864b36e32080429d7deaa2067e8a6e1d49981cedb2e421e65c47e263a96698c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0cbd158cbd2c160755a520ed7edab749331188888d9dc80bad58b8200d2acca8->leave($__internal_0cbd158cbd2c160755a520ed7edab749331188888d9dc80bad58b8200d2acca8_prof);

        
        $__internal_1864b36e32080429d7deaa2067e8a6e1d49981cedb2e421e65c47e263a96698c->leave($__internal_1864b36e32080429d7deaa2067e8a6e1d49981cedb2e421e65c47e263a96698c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
