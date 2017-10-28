<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_5af08da7d73fde135ee0331fa8adf6aa62c5e2757e800b39009cf5bb0c59ab0f extends Twig_Template
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
        $__internal_25be2f9912afd2579010e3ba1f7e7879fcf69a4795b32d0c55c21dbbdaa925ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25be2f9912afd2579010e3ba1f7e7879fcf69a4795b32d0c55c21dbbdaa925ee->enter($__internal_25be2f9912afd2579010e3ba1f7e7879fcf69a4795b32d0c55c21dbbdaa925ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_12083219a73b86e59e00098ffadd6c5c82cf80fc32888e5ddc63a9186d03dc5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12083219a73b86e59e00098ffadd6c5c82cf80fc32888e5ddc63a9186d03dc5e->enter($__internal_12083219a73b86e59e00098ffadd6c5c82cf80fc32888e5ddc63a9186d03dc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_25be2f9912afd2579010e3ba1f7e7879fcf69a4795b32d0c55c21dbbdaa925ee->leave($__internal_25be2f9912afd2579010e3ba1f7e7879fcf69a4795b32d0c55c21dbbdaa925ee_prof);

        
        $__internal_12083219a73b86e59e00098ffadd6c5c82cf80fc32888e5ddc63a9186d03dc5e->leave($__internal_12083219a73b86e59e00098ffadd6c5c82cf80fc32888e5ddc63a9186d03dc5e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
