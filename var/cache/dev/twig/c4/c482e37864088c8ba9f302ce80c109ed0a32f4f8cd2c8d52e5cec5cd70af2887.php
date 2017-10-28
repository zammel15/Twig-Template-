<?php

/* :clients:form.html.twig */
class __TwigTemplate_6036370883ccad0d63cfc9451c136caa80c14c583d3c92b2ddb24d2d48bea747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":clients:form.html.twig", 1);
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
        $__internal_e6475c4dd3c7d04f77011bcb009d6425e57927d194308c9c627e84c83c898f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6475c4dd3c7d04f77011bcb009d6425e57927d194308c9c627e84c83c898f9f->enter($__internal_e6475c4dd3c7d04f77011bcb009d6425e57927d194308c9c627e84c83c898f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":clients:form.html.twig"));

        $__internal_dccf06abf20e88295d26538ff014384c5dc437de2ca5986665ce933fa19b41f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dccf06abf20e88295d26538ff014384c5dc437de2ca5986665ce933fa19b41f5->enter($__internal_dccf06abf20e88295d26538ff014384c5dc437de2ca5986665ce933fa19b41f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":clients:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6475c4dd3c7d04f77011bcb009d6425e57927d194308c9c627e84c83c898f9f->leave($__internal_e6475c4dd3c7d04f77011bcb009d6425e57927d194308c9c627e84c83c898f9f_prof);

        
        $__internal_dccf06abf20e88295d26538ff014384c5dc437de2ca5986665ce933fa19b41f5->leave($__internal_dccf06abf20e88295d26538ff014384c5dc437de2ca5986665ce933fa19b41f5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_33f06f4816bfd79e02e4b61cf4d99fb25c1095b7a5376618f549729f363ae6a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f06f4816bfd79e02e4b61cf4d99fb25c1095b7a5376618f549729f363ae6a3->enter($__internal_33f06f4816bfd79e02e4b61cf4d99fb25c1095b7a5376618f549729f363ae6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b5de75661d13d15863871805262955a169d9dfadd625e54a65945df02695c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5de75661d13d15863871805262955a169d9dfadd625e54a65945df02695c86->enter($__internal_5b5de75661d13d15863871805262955a169d9dfadd625e54a65945df02695c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>New Client</h4>
        <form action=\"\" method=\"post\">
          <div class=\"medium-4  columns\">
            <label>Title</label>
            <select name=\"form[title]\">
              <option value=\"mr\">Mr.</option>
            </select>
          </div>
          <div class=\"medium-4  columns\">
            <label>Name</label>
            <input name=\"form[name]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[lastName]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zipCode]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>City</label>
            <input name=\"form[city]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>State</label>
            <input name=\"form[state]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <label>Email</label>
            <input name=\"form[email]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
          </div>
        </form>
      </div>
    </div>

";
        
        $__internal_5b5de75661d13d15863871805262955a169d9dfadd625e54a65945df02695c86->leave($__internal_5b5de75661d13d15863871805262955a169d9dfadd625e54a65945df02695c86_prof);

        
        $__internal_33f06f4816bfd79e02e4b61cf4d99fb25c1095b7a5376618f549729f363ae6a3->leave($__internal_33f06f4816bfd79e02e4b61cf4d99fb25c1095b7a5376618f549729f363ae6a3_prof);

    }

    public function getTemplateName()
    {
        return ":clients:form.html.twig";
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
        <h4>New Client</h4>
        <form action=\"\" method=\"post\">
          <div class=\"medium-4  columns\">
            <label>Title</label>
            <select name=\"form[title]\">
              <option value=\"mr\">Mr.</option>
            </select>
          </div>
          <div class=\"medium-4  columns\">
            <label>Name</label>
            <input name=\"form[name]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[lastName]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zipCode]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>City</label>
            <input name=\"form[city]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>State</label>
            <input name=\"form[state]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <label>Email</label>
            <input name=\"form[email]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
          </div>
        </form>
      </div>
    </div>

{% endblock %}
", ":clients:form.html.twig", "D:\\wamp64\\www\\start\\app/Resources\\views/clients/form.html.twig");
    }
}
