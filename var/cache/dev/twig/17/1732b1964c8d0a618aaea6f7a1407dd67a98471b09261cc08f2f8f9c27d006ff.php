<?php

/* admin/index.html.twig */
class __TwigTemplate_da8a5278adb9734a6db7c1ded1578f13489213fb57626f175519236556bf4515 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_213e9c75a96a8ed285c98f76e7f363a10f138022d5d6cf1b1c2f2ee97fcfab7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_213e9c75a96a8ed285c98f76e7f363a10f138022d5d6cf1b1c2f2ee97fcfab7f->enter($__internal_213e9c75a96a8ed285c98f76e7f363a10f138022d5d6cf1b1c2f2ee97fcfab7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_eac2fbf8e29bb81f9dbc70b68afe1791e59f50eaf05f7eaae9af6b8586f1e434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac2fbf8e29bb81f9dbc70b68afe1791e59f50eaf05f7eaae9af6b8586f1e434->enter($__internal_eac2fbf8e29bb81f9dbc70b68afe1791e59f50eaf05f7eaae9af6b8586f1e434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_213e9c75a96a8ed285c98f76e7f363a10f138022d5d6cf1b1c2f2ee97fcfab7f->leave($__internal_213e9c75a96a8ed285c98f76e7f363a10f138022d5d6cf1b1c2f2ee97fcfab7f_prof);

        
        $__internal_eac2fbf8e29bb81f9dbc70b68afe1791e59f50eaf05f7eaae9af6b8586f1e434->leave($__internal_eac2fbf8e29bb81f9dbc70b68afe1791e59f50eaf05f7eaae9af6b8586f1e434_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_27c87526d9963f9b42b82e6d988ee59b45deb1a6bb38fb9fb76bcdfef6367cb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c87526d9963f9b42b82e6d988ee59b45deb1a6bb38fb9fb76bcdfef6367cb1->enter($__internal_27c87526d9963f9b42b82e6d988ee59b45deb1a6bb38fb9fb76bcdfef6367cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be17c668553f8df405d84d204d7055421a8f840b5a67611ec0952162a4ab0b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be17c668553f8df405d84d204d7055421a8f840b5a67611ec0952162a4ab0b73->enter($__internal_be17c668553f8df405d84d204d7055421a8f840b5a67611ec0952162a4ab0b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/attractions.jpg"), "html", null, true);
        echo "\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

";
        
        $__internal_be17c668553f8df405d84d204d7055421a8f840b5a67611ec0952162a4ab0b73->leave($__internal_be17c668553f8df405d84d204d7055421a8f840b5a67611ec0952162a4ab0b73_prof);

        
        $__internal_27c87526d9963f9b42b82e6d988ee59b45deb1a6bb38fb9fb76bcdfef6367cb1->leave($__internal_27c87526d9963f9b42b82e6d988ee59b45deb1a6bb38fb9fb76bcdfef6367cb1_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"{{ asset('images/attractions.jpg') }}\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

{% endblock %}
", "admin/index.html.twig", "D:\\wamp64\\www\\start\\app\\Resources\\views\\admin\\index.html.twig");
    }
}
