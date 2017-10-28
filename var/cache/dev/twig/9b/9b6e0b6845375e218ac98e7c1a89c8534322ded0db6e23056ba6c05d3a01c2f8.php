<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0b06d401e79df4548ee4a3338669e644b9f12fc1cf08e4ab210e156e1245cf66 extends Twig_Template
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
        $__internal_66ae2608cfc51a1be8de4719d728d0fe9202c89ea5471dec6ab0d7e877cbbad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ae2608cfc51a1be8de4719d728d0fe9202c89ea5471dec6ab0d7e877cbbad0->enter($__internal_66ae2608cfc51a1be8de4719d728d0fe9202c89ea5471dec6ab0d7e877cbbad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_7826521878be1265837e76da62a9ee6dc3e125eeedc9b5e51a4d1bd28464a9a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7826521878be1265837e76da62a9ee6dc3e125eeedc9b5e51a4d1bd28464a9a7->enter($__internal_7826521878be1265837e76da62a9ee6dc3e125eeedc9b5e51a4d1bd28464a9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_66ae2608cfc51a1be8de4719d728d0fe9202c89ea5471dec6ab0d7e877cbbad0->leave($__internal_66ae2608cfc51a1be8de4719d728d0fe9202c89ea5471dec6ab0d7e877cbbad0_prof);

        
        $__internal_7826521878be1265837e76da62a9ee6dc3e125eeedc9b5e51a4d1bd28464a9a7->leave($__internal_7826521878be1265837e76da62a9ee6dc3e125eeedc9b5e51a4d1bd28464a9a7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
