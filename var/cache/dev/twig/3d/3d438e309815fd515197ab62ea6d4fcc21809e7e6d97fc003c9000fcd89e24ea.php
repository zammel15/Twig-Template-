<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_919cb83f01a2218351eebc15876e3ff25c22db46699b6ba74cc09fc08c60448d extends Twig_Template
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
        $__internal_3a024fd1906378b70664b3dee92de0ad8e3eebee05378e0912897176d5df48ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a024fd1906378b70664b3dee92de0ad8e3eebee05378e0912897176d5df48ca->enter($__internal_3a024fd1906378b70664b3dee92de0ad8e3eebee05378e0912897176d5df48ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_14f50c7c7edc09738dbfe0e24c8137bce200c9bc4793af09e9acbd27904a23ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f50c7c7edc09738dbfe0e24c8137bce200c9bc4793af09e9acbd27904a23ec->enter($__internal_14f50c7c7edc09738dbfe0e24c8137bce200c9bc4793af09e9acbd27904a23ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3a024fd1906378b70664b3dee92de0ad8e3eebee05378e0912897176d5df48ca->leave($__internal_3a024fd1906378b70664b3dee92de0ad8e3eebee05378e0912897176d5df48ca_prof);

        
        $__internal_14f50c7c7edc09738dbfe0e24c8137bce200c9bc4793af09e9acbd27904a23ec->leave($__internal_14f50c7c7edc09738dbfe0e24c8137bce200c9bc4793af09e9acbd27904a23ec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
