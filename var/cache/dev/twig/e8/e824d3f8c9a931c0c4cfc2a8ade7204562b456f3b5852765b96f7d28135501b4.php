<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_b582cbaebbfe667b9c66b107ae123257a5b71c03bd6512ef3abc124ee66d5dfc extends Twig_Template
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
        $__internal_f9aedf2d4586f9f2a3c33fd1276219c4d349b4ad57250656dfd209dc4721c82e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9aedf2d4586f9f2a3c33fd1276219c4d349b4ad57250656dfd209dc4721c82e->enter($__internal_f9aedf2d4586f9f2a3c33fd1276219c4d349b4ad57250656dfd209dc4721c82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_3ed7cf731fd0e41fa701edd8ed46ff6be3e71c7833b7b485e24fe8a5fb1da276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed7cf731fd0e41fa701edd8ed46ff6be3e71c7833b7b485e24fe8a5fb1da276->enter($__internal_3ed7cf731fd0e41fa701edd8ed46ff6be3e71c7833b7b485e24fe8a5fb1da276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f9aedf2d4586f9f2a3c33fd1276219c4d349b4ad57250656dfd209dc4721c82e->leave($__internal_f9aedf2d4586f9f2a3c33fd1276219c4d349b4ad57250656dfd209dc4721c82e_prof);

        
        $__internal_3ed7cf731fd0e41fa701edd8ed46ff6be3e71c7833b7b485e24fe8a5fb1da276->leave($__internal_3ed7cf731fd0e41fa701edd8ed46ff6be3e71c7833b7b485e24fe8a5fb1da276_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
