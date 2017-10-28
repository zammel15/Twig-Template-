<?php

/* admin/index.html.twig */
class __TwigTemplate_f917e8dec8091f1ec60b3988eeda0b9619d98dea54a9c23f7238c3e146177975 extends Twig_Template
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
        $__internal_e6ceece04c57cafac6d9b2f6f46866bbf238c46f6a8f5f0ecbc28bf8de7446ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ceece04c57cafac6d9b2f6f46866bbf238c46f6a8f5f0ecbc28bf8de7446ff->enter($__internal_e6ceece04c57cafac6d9b2f6f46866bbf238c46f6a8f5f0ecbc28bf8de7446ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_916d2d7b150640ce1fc226eaf9b7ebd40fae4af29fc77aac5e545a9145051fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916d2d7b150640ce1fc226eaf9b7ebd40fae4af29fc77aac5e545a9145051fd8->enter($__internal_916d2d7b150640ce1fc226eaf9b7ebd40fae4af29fc77aac5e545a9145051fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6ceece04c57cafac6d9b2f6f46866bbf238c46f6a8f5f0ecbc28bf8de7446ff->leave($__internal_e6ceece04c57cafac6d9b2f6f46866bbf238c46f6a8f5f0ecbc28bf8de7446ff_prof);

        
        $__internal_916d2d7b150640ce1fc226eaf9b7ebd40fae4af29fc77aac5e545a9145051fd8->leave($__internal_916d2d7b150640ce1fc226eaf9b7ebd40fae4af29fc77aac5e545a9145051fd8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c59a4f517b8b06c110f07a9759a75bae397ac21127cb0b98b5ead36339a3f64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c59a4f517b8b06c110f07a9759a75bae397ac21127cb0b98b5ead36339a3f64->enter($__internal_5c59a4f517b8b06c110f07a9759a75bae397ac21127cb0b98b5ead36339a3f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_61285f2ac20500b6adbfcfc03069cfcb2d24350fca5734bb550a9ac19685a958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61285f2ac20500b6adbfcfc03069cfcb2d24350fca5734bb550a9ac19685a958->enter($__internal_61285f2ac20500b6adbfcfc03069cfcb2d24350fca5734bb550a9ac19685a958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_61285f2ac20500b6adbfcfc03069cfcb2d24350fca5734bb550a9ac19685a958->leave($__internal_61285f2ac20500b6adbfcfc03069cfcb2d24350fca5734bb550a9ac19685a958_prof);

        
        $__internal_5c59a4f517b8b06c110f07a9759a75bae397ac21127cb0b98b5ead36339a3f64->leave($__internal_5c59a4f517b8b06c110f07a9759a75bae397ac21127cb0b98b5ead36339a3f64_prof);

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
