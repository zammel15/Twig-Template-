<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_d45a8cd732f15b2daafc2ea9e39094917051ae6c61095a97845f89cf425c2757 extends Twig_Template
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
        $__internal_04bd074558a9db151ffd06ab15930b24b2ffc3df8e14dd1b850fe54e6c631f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04bd074558a9db151ffd06ab15930b24b2ffc3df8e14dd1b850fe54e6c631f1f->enter($__internal_04bd074558a9db151ffd06ab15930b24b2ffc3df8e14dd1b850fe54e6c631f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_cea8350b4573b63f6459bc2bc9e1f6a6a51a417054b5b87c4a4755a65e9ffbf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea8350b4573b63f6459bc2bc9e1f6a6a51a417054b5b87c4a4755a65e9ffbf7->enter($__internal_cea8350b4573b63f6459bc2bc9e1f6a6a51a417054b5b87c4a4755a65e9ffbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_04bd074558a9db151ffd06ab15930b24b2ffc3df8e14dd1b850fe54e6c631f1f->leave($__internal_04bd074558a9db151ffd06ab15930b24b2ffc3df8e14dd1b850fe54e6c631f1f_prof);

        
        $__internal_cea8350b4573b63f6459bc2bc9e1f6a6a51a417054b5b87c4a4755a65e9ffbf7->leave($__internal_cea8350b4573b63f6459bc2bc9e1f6a6a51a417054b5b87c4a4755a65e9ffbf7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
