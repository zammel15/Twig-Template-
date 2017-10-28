<?php

/* reservations/index.html.twig */
class __TwigTemplate_a20e88cb6a3bdb4f4543365f38f82cbd5b884d11f1bca7cb15cf3eda05d1d715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/index.html.twig", 1);
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
        $__internal_84e2fd24cb8afb266f4f68922ad9d10a83f4a0d975aec0c564c7aaf09ad4f38b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84e2fd24cb8afb266f4f68922ad9d10a83f4a0d975aec0c564c7aaf09ad4f38b->enter($__internal_84e2fd24cb8afb266f4f68922ad9d10a83f4a0d975aec0c564c7aaf09ad4f38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_6395ce45909f4b85a011d8a73464a2cf6ba92b0545ef292deec7ca144cb62162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6395ce45909f4b85a011d8a73464a2cf6ba92b0545ef292deec7ca144cb62162->enter($__internal_6395ce45909f4b85a011d8a73464a2cf6ba92b0545ef292deec7ca144cb62162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84e2fd24cb8afb266f4f68922ad9d10a83f4a0d975aec0c564c7aaf09ad4f38b->leave($__internal_84e2fd24cb8afb266f4f68922ad9d10a83f4a0d975aec0c564c7aaf09ad4f38b_prof);

        
        $__internal_6395ce45909f4b85a011d8a73464a2cf6ba92b0545ef292deec7ca144cb62162->leave($__internal_6395ce45909f4b85a011d8a73464a2cf6ba92b0545ef292deec7ca144cb62162_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b09d35f169ea93f400259bf9eee3e6998b1ba651bede6c4c77d94750a9814f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b09d35f169ea93f400259bf9eee3e6998b1ba651bede6c4c77d94750a9814f1->enter($__internal_5b09d35f169ea93f400259bf9eee3e6998b1ba651bede6c4c77d94750a9814f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c608912883d7cafe105a63fd53b431740a2acd3a1eab99e1408b6241ef70e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c608912883d7cafe105a63fd53b431740a2acd3a1eab99e1408b6241ef70e21->enter($__internal_3c608912883d7cafe105a63fd53b431740a2acd3a1eab99e1408b6241ef70e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_3c608912883d7cafe105a63fd53b431740a2acd3a1eab99e1408b6241ef70e21->leave($__internal_3c608912883d7cafe105a63fd53b431740a2acd3a1eab99e1408b6241ef70e21_prof);

        
        $__internal_5b09d35f169ea93f400259bf9eee3e6998b1ba651bede6c4c77d94750a9814f1->leave($__internal_5b09d35f169ea93f400259bf9eee3e6998b1ba651bede6c4c77d94750a9814f1_prof);

    }

    public function getTemplateName()
    {
        return "reservations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
      <div class=\"medium-12 large-12 columns\">
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/index.html.twig", "D:\\wamp64\\www\\start\\app\\Resources\\views\\reservations\\index.html.twig");
    }
}
