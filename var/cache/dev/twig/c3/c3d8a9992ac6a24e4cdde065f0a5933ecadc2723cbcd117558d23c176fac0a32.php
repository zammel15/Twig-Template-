<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f9efb80e3e40c92c1aad02e8609e13dbb097d1f37f071f075dd4a951173f3107 extends Twig_Template
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
        $__internal_7a29f1e813005be9f2c31af0b5d965b9d474504ae95a737bb8e11f12e5e09425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a29f1e813005be9f2c31af0b5d965b9d474504ae95a737bb8e11f12e5e09425->enter($__internal_7a29f1e813005be9f2c31af0b5d965b9d474504ae95a737bb8e11f12e5e09425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_9cc34f7393deecd896b93972dfb344ed702d25b6bcd2f6cdc585d37d78b05080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc34f7393deecd896b93972dfb344ed702d25b6bcd2f6cdc585d37d78b05080->enter($__internal_9cc34f7393deecd896b93972dfb344ed702d25b6bcd2f6cdc585d37d78b05080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7a29f1e813005be9f2c31af0b5d965b9d474504ae95a737bb8e11f12e5e09425->leave($__internal_7a29f1e813005be9f2c31af0b5d965b9d474504ae95a737bb8e11f12e5e09425_prof);

        
        $__internal_9cc34f7393deecd896b93972dfb344ed702d25b6bcd2f6cdc585d37d78b05080->leave($__internal_9cc34f7393deecd896b93972dfb344ed702d25b6bcd2f6cdc585d37d78b05080_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
