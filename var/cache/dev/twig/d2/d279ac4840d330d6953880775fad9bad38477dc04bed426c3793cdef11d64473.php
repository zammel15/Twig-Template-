<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c3b4d60b6d243754341faed43ad16c6a25bc19b18d75acbf9ccbe1f79bf37356 extends Twig_Template
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
        $__internal_5ccc44d3d8139c2c6a347ff3a35b586cf9fc8d53bc1889c16eeda14afdf32bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ccc44d3d8139c2c6a347ff3a35b586cf9fc8d53bc1889c16eeda14afdf32bef->enter($__internal_5ccc44d3d8139c2c6a347ff3a35b586cf9fc8d53bc1889c16eeda14afdf32bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_a138149175ca0ac14744f4630bce55ad31aba7cffa8db0003baf34b5095b7009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a138149175ca0ac14744f4630bce55ad31aba7cffa8db0003baf34b5095b7009->enter($__internal_a138149175ca0ac14744f4630bce55ad31aba7cffa8db0003baf34b5095b7009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_5ccc44d3d8139c2c6a347ff3a35b586cf9fc8d53bc1889c16eeda14afdf32bef->leave($__internal_5ccc44d3d8139c2c6a347ff3a35b586cf9fc8d53bc1889c16eeda14afdf32bef_prof);

        
        $__internal_a138149175ca0ac14744f4630bce55ad31aba7cffa8db0003baf34b5095b7009->leave($__internal_a138149175ca0ac14744f4630bce55ad31aba7cffa8db0003baf34b5095b7009_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
