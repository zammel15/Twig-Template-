<?php

/* :admin:index.html.twig */
class __TwigTemplate_f816057ddadc0abb622ed53bb6933dbb1f8c8c1cc41d672e8050d1126a9ff577 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin:index.html.twig", 1);
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
        $__internal_63c1be547c54fa0db38c053a84d25a94935b36d376dbd5693dbf1f0016795306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c1be547c54fa0db38c053a84d25a94935b36d376dbd5693dbf1f0016795306->enter($__internal_63c1be547c54fa0db38c053a84d25a94935b36d376dbd5693dbf1f0016795306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $__internal_23542295d5234e28726ac9fd0b839dc81a837dc7bdf992b84ec0ea3111b2f254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23542295d5234e28726ac9fd0b839dc81a837dc7bdf992b84ec0ea3111b2f254->enter($__internal_23542295d5234e28726ac9fd0b839dc81a837dc7bdf992b84ec0ea3111b2f254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63c1be547c54fa0db38c053a84d25a94935b36d376dbd5693dbf1f0016795306->leave($__internal_63c1be547c54fa0db38c053a84d25a94935b36d376dbd5693dbf1f0016795306_prof);

        
        $__internal_23542295d5234e28726ac9fd0b839dc81a837dc7bdf992b84ec0ea3111b2f254->leave($__internal_23542295d5234e28726ac9fd0b839dc81a837dc7bdf992b84ec0ea3111b2f254_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_26e00d0d8d4ed03d5e8e4c50136dee9ed91c22e36f470635af000b444ecdd4d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26e00d0d8d4ed03d5e8e4c50136dee9ed91c22e36f470635af000b444ecdd4d3->enter($__internal_26e00d0d8d4ed03d5e8e4c50136dee9ed91c22e36f470635af000b444ecdd4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3937b3b391af22e7a3731a7e5fad877075a73138ee31cbb688ce52cc0960996f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3937b3b391af22e7a3731a7e5fad877075a73138ee31cbb688ce52cc0960996f->enter($__internal_3937b3b391af22e7a3731a7e5fad877075a73138ee31cbb688ce52cc0960996f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3937b3b391af22e7a3731a7e5fad877075a73138ee31cbb688ce52cc0960996f->leave($__internal_3937b3b391af22e7a3731a7e5fad877075a73138ee31cbb688ce52cc0960996f_prof);

        
        $__internal_26e00d0d8d4ed03d5e8e4c50136dee9ed91c22e36f470635af000b444ecdd4d3->leave($__internal_26e00d0d8d4ed03d5e8e4c50136dee9ed91c22e36f470635af000b444ecdd4d3_prof);

    }

    public function getTemplateName()
    {
        return ":admin:index.html.twig";
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
", ":admin:index.html.twig", "D:\\wamp64\\www\\start\\app/Resources\\views/admin/index.html.twig");
    }
}
