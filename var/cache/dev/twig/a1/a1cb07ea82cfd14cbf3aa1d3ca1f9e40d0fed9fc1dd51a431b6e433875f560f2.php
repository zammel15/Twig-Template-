<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e59ac2125d2d94f84ee981b48a71bffe73ed32453f79d914dfdeef7293da4ad7 extends Twig_Template
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
        $__internal_7994689d9202ece26dce2687c82845c30a6183723b5b898dd2f13163ac2ae6d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7994689d9202ece26dce2687c82845c30a6183723b5b898dd2f13163ac2ae6d5->enter($__internal_7994689d9202ece26dce2687c82845c30a6183723b5b898dd2f13163ac2ae6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_0567a416adb3f384cd7a91dffc21ae2aad20c75e336a7c70afc4350aab53ea55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0567a416adb3f384cd7a91dffc21ae2aad20c75e336a7c70afc4350aab53ea55->enter($__internal_0567a416adb3f384cd7a91dffc21ae2aad20c75e336a7c70afc4350aab53ea55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7994689d9202ece26dce2687c82845c30a6183723b5b898dd2f13163ac2ae6d5->leave($__internal_7994689d9202ece26dce2687c82845c30a6183723b5b898dd2f13163ac2ae6d5_prof);

        
        $__internal_0567a416adb3f384cd7a91dffc21ae2aad20c75e336a7c70afc4350aab53ea55->leave($__internal_0567a416adb3f384cd7a91dffc21ae2aad20c75e336a7c70afc4350aab53ea55_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
", "TwigBundle:Exception:error.json.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
