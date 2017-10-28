<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_73c1781f5235fde3fa65cb05fb4b89a91660ca2ffbfa090a62cc63218c5677bc extends Twig_Template
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
        $__internal_2a63157c08ad7e42b9d85d4bbcf360e72d7d9c36b6914c44d5ec516d4e0f7a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a63157c08ad7e42b9d85d4bbcf360e72d7d9c36b6914c44d5ec516d4e0f7a51->enter($__internal_2a63157c08ad7e42b9d85d4bbcf360e72d7d9c36b6914c44d5ec516d4e0f7a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_729fd2cee7b397330d19444ff105d2ff522cf8727d29300bc5a534b625c39292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729fd2cee7b397330d19444ff105d2ff522cf8727d29300bc5a534b625c39292->enter($__internal_729fd2cee7b397330d19444ff105d2ff522cf8727d29300bc5a534b625c39292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_2a63157c08ad7e42b9d85d4bbcf360e72d7d9c36b6914c44d5ec516d4e0f7a51->leave($__internal_2a63157c08ad7e42b9d85d4bbcf360e72d7d9c36b6914c44d5ec516d4e0f7a51_prof);

        
        $__internal_729fd2cee7b397330d19444ff105d2ff522cf8727d29300bc5a534b625c39292->leave($__internal_729fd2cee7b397330d19444ff105d2ff522cf8727d29300bc5a534b625c39292_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
