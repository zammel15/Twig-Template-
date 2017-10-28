<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_593c59a9d3475c7c69ee73389518fefc7612ea5c552d8dd79e9b828f394ba6fa extends Twig_Template
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
        $__internal_7808222d6de5092fe98b3241ca9a30cd659c73fc1c92594ba6882ff4259d7af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7808222d6de5092fe98b3241ca9a30cd659c73fc1c92594ba6882ff4259d7af0->enter($__internal_7808222d6de5092fe98b3241ca9a30cd659c73fc1c92594ba6882ff4259d7af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_1f7c49cd86af9eaf1082b7a6c513adef7eb68bcdcc513e904d3f727641ad774e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7c49cd86af9eaf1082b7a6c513adef7eb68bcdcc513e904d3f727641ad774e->enter($__internal_1f7c49cd86af9eaf1082b7a6c513adef7eb68bcdcc513e904d3f727641ad774e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7808222d6de5092fe98b3241ca9a30cd659c73fc1c92594ba6882ff4259d7af0->leave($__internal_7808222d6de5092fe98b3241ca9a30cd659c73fc1c92594ba6882ff4259d7af0_prof);

        
        $__internal_1f7c49cd86af9eaf1082b7a6c513adef7eb68bcdcc513e904d3f727641ad774e->leave($__internal_1f7c49cd86af9eaf1082b7a6c513adef7eb68bcdcc513e904d3f727641ad774e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
