<?php

/* reservations/book.html.twig */
class __TwigTemplate_e7f5131381b2400df8fd5a63ce939ecf62fd36f61428f40be39dd322279bc3da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/book.html.twig", 1);
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
        $__internal_8067d0531999996060ea451a80427cbbe5518933aa2cb5ff0ecd7c5b81ae2d2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8067d0531999996060ea451a80427cbbe5518933aa2cb5ff0ecd7c5b81ae2d2f->enter($__internal_8067d0531999996060ea451a80427cbbe5518933aa2cb5ff0ecd7c5b81ae2d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $__internal_7db8ef5461fc354b09be607af3b5a08c4be7b1bb36e584b3ca83982de7418b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db8ef5461fc354b09be607af3b5a08c4be7b1bb36e584b3ca83982de7418b24->enter($__internal_7db8ef5461fc354b09be607af3b5a08c4be7b1bb36e584b3ca83982de7418b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8067d0531999996060ea451a80427cbbe5518933aa2cb5ff0ecd7c5b81ae2d2f->leave($__internal_8067d0531999996060ea451a80427cbbe5518933aa2cb5ff0ecd7c5b81ae2d2f_prof);

        
        $__internal_7db8ef5461fc354b09be607af3b5a08c4be7b1bb36e584b3ca83982de7418b24->leave($__internal_7db8ef5461fc354b09be607af3b5a08c4be7b1bb36e584b3ca83982de7418b24_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8332f4970bb3c4e72cea2b59649f7b79539594ef3c6c26d5f5a2fb3968bcef67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8332f4970bb3c4e72cea2b59649f7b79539594ef3c6c26d5f5a2fb3968bcef67->enter($__internal_8332f4970bb3c4e72cea2b59649f7b79539594ef3c6c26d5f5a2fb3968bcef67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8cd971b7d1019d90d9405fa5d35906c864158bffcb2620cae26ebbac99f35931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd971b7d1019d90d9405fa5d35906c864158bffcb2620cae26ebbac99f35931->enter($__internal_8cd971b7d1019d90d9405fa5d35906c864158bffcb2620cae26ebbac99f35931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR:</div>
        <div class=\"medium-2  columns\"><b>Client Name</b></div>
        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          
            <tr>
              <td>101</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"#\">BOOK NOW</a>
              </td>
            </tr>
          
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_8cd971b7d1019d90d9405fa5d35906c864158bffcb2620cae26ebbac99f35931->leave($__internal_8cd971b7d1019d90d9405fa5d35906c864158bffcb2620cae26ebbac99f35931_prof);

        
        $__internal_8332f4970bb3c4e72cea2b59649f7b79539594ef3c6c26d5f5a2fb3968bcef67->leave($__internal_8332f4970bb3c4e72cea2b59649f7b79539594ef3c6c26d5f5a2fb3968bcef67_prof);

    }

    public function getTemplateName()
    {
        return "reservations/book.html.twig";
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
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR:</div>
        <div class=\"medium-2  columns\"><b>Client Name</b></div>
        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          
            <tr>
              <td>101</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"#\">BOOK NOW</a>
              </td>
            </tr>
          
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/book.html.twig", "D:\\wamp64\\www\\start\\app\\Resources\\views\\reservations\\book.html.twig");
    }
}
