<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_580b23fd12a4ae8f5fd484cc9637f8c4c094ae36c636cb21557395922afeecd3 extends Twig_Template
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
        $__internal_5174076f168db5eb4f278c90b5f580045d57d0b76d3c6835520044c6c4ed1932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5174076f168db5eb4f278c90b5f580045d57d0b76d3c6835520044c6c4ed1932->enter($__internal_5174076f168db5eb4f278c90b5f580045d57d0b76d3c6835520044c6c4ed1932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_3dae653f05dd5a6e3529416b987d06d5bfb81e89dc3d6e8f273f150f150e7736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dae653f05dd5a6e3529416b987d06d5bfb81e89dc3d6e8f273f150f150e7736->enter($__internal_3dae653f05dd5a6e3529416b987d06d5bfb81e89dc3d6e8f273f150f150e7736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5174076f168db5eb4f278c90b5f580045d57d0b76d3c6835520044c6c4ed1932->leave($__internal_5174076f168db5eb4f278c90b5f580045d57d0b76d3c6835520044c6c4ed1932_prof);

        
        $__internal_3dae653f05dd5a6e3529416b987d06d5bfb81e89dc3d6e8f273f150f150e7736->leave($__internal_3dae653f05dd5a6e3529416b987d06d5bfb81e89dc3d6e8f273f150f150e7736_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
