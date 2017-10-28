<?php

/* reservations/book.html.twig */
class __TwigTemplate_b411fa7307473611f664e28c8fed9d78a3a65a257ef89639b0daa3dfdc67a9a1 extends Twig_Template
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
        $__internal_8d272c3cb14c3cc01e04bb14ab36fae9ead2829a3b18cfe5717afdad238eeb63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d272c3cb14c3cc01e04bb14ab36fae9ead2829a3b18cfe5717afdad238eeb63->enter($__internal_8d272c3cb14c3cc01e04bb14ab36fae9ead2829a3b18cfe5717afdad238eeb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $__internal_1256bda7af352eb5c52f1830163eb19937f55e4b9f404d752fa510ff2818aa1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1256bda7af352eb5c52f1830163eb19937f55e4b9f404d752fa510ff2818aa1f->enter($__internal_1256bda7af352eb5c52f1830163eb19937f55e4b9f404d752fa510ff2818aa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d272c3cb14c3cc01e04bb14ab36fae9ead2829a3b18cfe5717afdad238eeb63->leave($__internal_8d272c3cb14c3cc01e04bb14ab36fae9ead2829a3b18cfe5717afdad238eeb63_prof);

        
        $__internal_1256bda7af352eb5c52f1830163eb19937f55e4b9f404d752fa510ff2818aa1f->leave($__internal_1256bda7af352eb5c52f1830163eb19937f55e4b9f404d752fa510ff2818aa1f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_081e4439d5988aef1175c552eba355403fad4291e948b0d88b31849b4d7168b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_081e4439d5988aef1175c552eba355403fad4291e948b0d88b31849b4d7168b7->enter($__internal_081e4439d5988aef1175c552eba355403fad4291e948b0d88b31849b4d7168b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a49c816aa36e1f5e06a70bc4b63b937544a469e551d02bc629841b321f456789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49c816aa36e1f5e06a70bc4b63b937544a469e551d02bc629841b321f456789->enter($__internal_a49c816aa36e1f5e06a70bc4b63b937544a469e551d02bc629841b321f456789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id_client"]) ? $context["id_client"] : $this->getContext($context, "id_client")), "html", null, true);
        echo "</div>
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
        
        $__internal_a49c816aa36e1f5e06a70bc4b63b937544a469e551d02bc629841b321f456789->leave($__internal_a49c816aa36e1f5e06a70bc4b63b937544a469e551d02bc629841b321f456789_prof);

        
        $__internal_081e4439d5988aef1175c552eba355403fad4291e948b0d88b31849b4d7168b7->leave($__internal_081e4439d5988aef1175c552eba355403fad4291e948b0d88b31849b4d7168b7_prof);

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
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR: {{ id_client }}</div>
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
