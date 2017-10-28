<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_07483b62e6c7eb55d62f6853f0429d92ee7e110056680a97daceb4f2a8b745df extends Twig_Template
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
        $__internal_77dcce5478de5835995aadd16b97c59ba57f1c07fbeb48794e97b1743f126e3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77dcce5478de5835995aadd16b97c59ba57f1c07fbeb48794e97b1743f126e3c->enter($__internal_77dcce5478de5835995aadd16b97c59ba57f1c07fbeb48794e97b1743f126e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_cf87909d8e6bd4306156da23f341e0a9f66c22fad3a3ed7b354d470a2ac30074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf87909d8e6bd4306156da23f341e0a9f66c22fad3a3ed7b354d470a2ac30074->enter($__internal_cf87909d8e6bd4306156da23f341e0a9f66c22fad3a3ed7b354d470a2ac30074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_77dcce5478de5835995aadd16b97c59ba57f1c07fbeb48794e97b1743f126e3c->leave($__internal_77dcce5478de5835995aadd16b97c59ba57f1c07fbeb48794e97b1743f126e3c_prof);

        
        $__internal_cf87909d8e6bd4306156da23f341e0a9f66c22fad3a3ed7b354d470a2ac30074->leave($__internal_cf87909d8e6bd4306156da23f341e0a9f66c22fad3a3ed7b354d470a2ac30074_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
