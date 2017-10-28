<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_39d648410f33c09bfa71aa3b7ac9d9b72fd2da86f9812467b1f00c6ceb3ca601 extends Twig_Template
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
        $__internal_63640e7fdde70539b8a3b3eb2f8fbba48eccbe7753802610d9916a4437e766c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63640e7fdde70539b8a3b3eb2f8fbba48eccbe7753802610d9916a4437e766c1->enter($__internal_63640e7fdde70539b8a3b3eb2f8fbba48eccbe7753802610d9916a4437e766c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_a1a570d2516d9039d81e2e21e39b75a788c22b1fc43ada1510428c3b8f289035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a570d2516d9039d81e2e21e39b75a788c22b1fc43ada1510428c3b8f289035->enter($__internal_a1a570d2516d9039d81e2e21e39b75a788c22b1fc43ada1510428c3b8f289035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_63640e7fdde70539b8a3b3eb2f8fbba48eccbe7753802610d9916a4437e766c1->leave($__internal_63640e7fdde70539b8a3b3eb2f8fbba48eccbe7753802610d9916a4437e766c1_prof);

        
        $__internal_a1a570d2516d9039d81e2e21e39b75a788c22b1fc43ada1510428c3b8f289035->leave($__internal_a1a570d2516d9039d81e2e21e39b75a788c22b1fc43ada1510428c3b8f289035_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
