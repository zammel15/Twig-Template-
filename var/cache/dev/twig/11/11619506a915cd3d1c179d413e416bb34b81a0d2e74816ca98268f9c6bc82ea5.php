<?php

/* :reservations:book.html.twig */
class __TwigTemplate_a604af87614d5c0a99f939cf4957e876a39be131612d1702449d423178d1c3d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservations:book.html.twig", 1);
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
        $__internal_5ec95749cce1f728705c073616bbd6cbcadeffda661b371cfd78fce6a5abd37a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec95749cce1f728705c073616bbd6cbcadeffda661b371cfd78fce6a5abd37a->enter($__internal_5ec95749cce1f728705c073616bbd6cbcadeffda661b371cfd78fce6a5abd37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservations:book.html.twig"));

        $__internal_d917dda7021b99ed96c76962672577ce1ec037acab7edb692b79a3ddefc72706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d917dda7021b99ed96c76962672577ce1ec037acab7edb692b79a3ddefc72706->enter($__internal_d917dda7021b99ed96c76962672577ce1ec037acab7edb692b79a3ddefc72706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservations:book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ec95749cce1f728705c073616bbd6cbcadeffda661b371cfd78fce6a5abd37a->leave($__internal_5ec95749cce1f728705c073616bbd6cbcadeffda661b371cfd78fce6a5abd37a_prof);

        
        $__internal_d917dda7021b99ed96c76962672577ce1ec037acab7edb692b79a3ddefc72706->leave($__internal_d917dda7021b99ed96c76962672577ce1ec037acab7edb692b79a3ddefc72706_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8aee8afdc32d7bcb2b39392b869371197be1629438636f406e601ac63ba77c40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aee8afdc32d7bcb2b39392b869371197be1629438636f406e601ac63ba77c40->enter($__internal_8aee8afdc32d7bcb2b39392b869371197be1629438636f406e601ac63ba77c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fe7fa0fe55aa8c8bb12cbe093f8779d54e369f3a6b88425f3956bbe9f854005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe7fa0fe55aa8c8bb12cbe093f8779d54e369f3a6b88425f3956bbe9f854005->enter($__internal_9fe7fa0fe55aa8c8bb12cbe093f8779d54e369f3a6b88425f3956bbe9f854005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9fe7fa0fe55aa8c8bb12cbe093f8779d54e369f3a6b88425f3956bbe9f854005->leave($__internal_9fe7fa0fe55aa8c8bb12cbe093f8779d54e369f3a6b88425f3956bbe9f854005_prof);

        
        $__internal_8aee8afdc32d7bcb2b39392b869371197be1629438636f406e601ac63ba77c40->leave($__internal_8aee8afdc32d7bcb2b39392b869371197be1629438636f406e601ac63ba77c40_prof);

    }

    public function getTemplateName()
    {
        return ":reservations:book.html.twig";
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
", ":reservations:book.html.twig", "D:\\wamp64\\www\\start\\app/Resources\\views/reservations/book.html.twig");
    }
}
