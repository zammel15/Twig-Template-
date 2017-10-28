<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e3c89a017546225be6ff802d4cbb543366caccaec2504cc84da88bf50151e186 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce42b04774a58725f42b3144410bfdf58e7195c7f99ecfc1e84d4ee625af30a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce42b04774a58725f42b3144410bfdf58e7195c7f99ecfc1e84d4ee625af30a1->enter($__internal_ce42b04774a58725f42b3144410bfdf58e7195c7f99ecfc1e84d4ee625af30a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_46b43f848415ae66499ab15dbddbee47fa8c8f42b62f9936424668b6e898a073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b43f848415ae66499ab15dbddbee47fa8c8f42b62f9936424668b6e898a073->enter($__internal_46b43f848415ae66499ab15dbddbee47fa8c8f42b62f9936424668b6e898a073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce42b04774a58725f42b3144410bfdf58e7195c7f99ecfc1e84d4ee625af30a1->leave($__internal_ce42b04774a58725f42b3144410bfdf58e7195c7f99ecfc1e84d4ee625af30a1_prof);

        
        $__internal_46b43f848415ae66499ab15dbddbee47fa8c8f42b62f9936424668b6e898a073->leave($__internal_46b43f848415ae66499ab15dbddbee47fa8c8f42b62f9936424668b6e898a073_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4144213827e375f3af96d33915e0bcb334a7f794b5495a1e1c2191d9494afa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4144213827e375f3af96d33915e0bcb334a7f794b5495a1e1c2191d9494afa0->enter($__internal_d4144213827e375f3af96d33915e0bcb334a7f794b5495a1e1c2191d9494afa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_77b92eaa856e3fbf5e35f71b0f0e19b1decc4d4a278470f2c72e73d68c56d2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b92eaa856e3fbf5e35f71b0f0e19b1decc4d4a278470f2c72e73d68c56d2b2->enter($__internal_77b92eaa856e3fbf5e35f71b0f0e19b1decc4d4a278470f2c72e73d68c56d2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_77b92eaa856e3fbf5e35f71b0f0e19b1decc4d4a278470f2c72e73d68c56d2b2->leave($__internal_77b92eaa856e3fbf5e35f71b0f0e19b1decc4d4a278470f2c72e73d68c56d2b2_prof);

        
        $__internal_d4144213827e375f3af96d33915e0bcb334a7f794b5495a1e1c2191d9494afa0->leave($__internal_d4144213827e375f3af96d33915e0bcb334a7f794b5495a1e1c2191d9494afa0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_901dfbce9962c86c1e8421fe4de5f1ff23084bccfdc70c0e9bc66e62f78cd3f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_901dfbce9962c86c1e8421fe4de5f1ff23084bccfdc70c0e9bc66e62f78cd3f2->enter($__internal_901dfbce9962c86c1e8421fe4de5f1ff23084bccfdc70c0e9bc66e62f78cd3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04fd183bc252c52e66cdf37fb949e73bf2a985805e6388826bbf27a9aff69cd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04fd183bc252c52e66cdf37fb949e73bf2a985805e6388826bbf27a9aff69cd2->enter($__internal_04fd183bc252c52e66cdf37fb949e73bf2a985805e6388826bbf27a9aff69cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_04fd183bc252c52e66cdf37fb949e73bf2a985805e6388826bbf27a9aff69cd2->leave($__internal_04fd183bc252c52e66cdf37fb949e73bf2a985805e6388826bbf27a9aff69cd2_prof);

        
        $__internal_901dfbce9962c86c1e8421fe4de5f1ff23084bccfdc70c0e9bc66e62f78cd3f2->leave($__internal_901dfbce9962c86c1e8421fe4de5f1ff23084bccfdc70c0e9bc66e62f78cd3f2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
