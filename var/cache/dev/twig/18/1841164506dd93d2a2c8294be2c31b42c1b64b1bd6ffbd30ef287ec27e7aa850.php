<?php

/* :reservations:index.html.twig */
class __TwigTemplate_8f61d5a7b989fbff95404a12a0fbc89d17259525b3f4eba87e1a5e8da2fbe0f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservations:index.html.twig", 1);
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
        $__internal_220ee378d00ba9da3eb0144725a90ed3dad272487e366e92ee53feddacab1284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_220ee378d00ba9da3eb0144725a90ed3dad272487e366e92ee53feddacab1284->enter($__internal_220ee378d00ba9da3eb0144725a90ed3dad272487e366e92ee53feddacab1284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservations:index.html.twig"));

        $__internal_07673fe58364b8831f3e0a15defbce541d424ff402b3dacdd59836c861f18328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07673fe58364b8831f3e0a15defbce541d424ff402b3dacdd59836c861f18328->enter($__internal_07673fe58364b8831f3e0a15defbce541d424ff402b3dacdd59836c861f18328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservations:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_220ee378d00ba9da3eb0144725a90ed3dad272487e366e92ee53feddacab1284->leave($__internal_220ee378d00ba9da3eb0144725a90ed3dad272487e366e92ee53feddacab1284_prof);

        
        $__internal_07673fe58364b8831f3e0a15defbce541d424ff402b3dacdd59836c861f18328->leave($__internal_07673fe58364b8831f3e0a15defbce541d424ff402b3dacdd59836c861f18328_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9870934b101fce31bca1cea073e0a7c68a523e8ea83bee415b2422b9a2f3b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9870934b101fce31bca1cea073e0a7c68a523e8ea83bee415b2422b9a2f3b8b->enter($__internal_c9870934b101fce31bca1cea073e0a7c68a523e8ea83bee415b2422b9a2f3b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_428e794bc545ace15f61ccd7e477afad011f458fdb1d65423eeb1883b6ea4d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_428e794bc545ace15f61ccd7e477afad011f458fdb1d65423eeb1883b6ea4d41->enter($__internal_428e794bc545ace15f61ccd7e477afad011f458fdb1d65423eeb1883b6ea4d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_428e794bc545ace15f61ccd7e477afad011f458fdb1d65423eeb1883b6ea4d41->leave($__internal_428e794bc545ace15f61ccd7e477afad011f458fdb1d65423eeb1883b6ea4d41_prof);

        
        $__internal_c9870934b101fce31bca1cea073e0a7c68a523e8ea83bee415b2422b9a2f3b8b->leave($__internal_c9870934b101fce31bca1cea073e0a7c68a523e8ea83bee415b2422b9a2f3b8b_prof);

    }

    public function getTemplateName()
    {
        return ":reservations:index.html.twig";
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
", ":reservations:index.html.twig", "D:\\wamp64\\www\\start\\app/Resources\\views/reservations/index.html.twig");
    }
}
