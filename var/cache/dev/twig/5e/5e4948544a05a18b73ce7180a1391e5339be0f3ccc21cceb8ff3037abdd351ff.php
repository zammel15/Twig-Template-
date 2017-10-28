<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4ef4bf3aeedbd5d179425263683cd01e243fad4bddba6edd7796772dff232c0b extends Twig_Template
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
        $__internal_5fc391daf35488be6d60422f5cae5772cc7fe06081ff711cc5da811aa8f8bc56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fc391daf35488be6d60422f5cae5772cc7fe06081ff711cc5da811aa8f8bc56->enter($__internal_5fc391daf35488be6d60422f5cae5772cc7fe06081ff711cc5da811aa8f8bc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_5323579238b72c8d0973cd6c209da7464a7d5b364c57811cdc7e191f147a3272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5323579238b72c8d0973cd6c209da7464a7d5b364c57811cdc7e191f147a3272->enter($__internal_5323579238b72c8d0973cd6c209da7464a7d5b364c57811cdc7e191f147a3272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_5fc391daf35488be6d60422f5cae5772cc7fe06081ff711cc5da811aa8f8bc56->leave($__internal_5fc391daf35488be6d60422f5cae5772cc7fe06081ff711cc5da811aa8f8bc56_prof);

        
        $__internal_5323579238b72c8d0973cd6c209da7464a7d5b364c57811cdc7e191f147a3272->leave($__internal_5323579238b72c8d0973cd6c209da7464a7d5b364c57811cdc7e191f147a3272_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
