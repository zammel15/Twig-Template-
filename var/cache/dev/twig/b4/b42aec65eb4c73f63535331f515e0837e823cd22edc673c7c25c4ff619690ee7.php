<?php

/* clients/form.html.twig */
class __TwigTemplate_0a01fa4495e2c2ae7eb8e40276693071b53ac6261691ccf70ce2668b169c69dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/form.html.twig", 1);
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
        $__internal_da76bc51722e4e293dac0543b7c6f0c429e507d6aa752eb94f89d148c2a9e2af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da76bc51722e4e293dac0543b7c6f0c429e507d6aa752eb94f89d148c2a9e2af->enter($__internal_da76bc51722e4e293dac0543b7c6f0c429e507d6aa752eb94f89d148c2a9e2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $__internal_bd211f498424957d9420e5e68dea7ca8de32206d7f237d58306db436413f8797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd211f498424957d9420e5e68dea7ca8de32206d7f237d58306db436413f8797->enter($__internal_bd211f498424957d9420e5e68dea7ca8de32206d7f237d58306db436413f8797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da76bc51722e4e293dac0543b7c6f0c429e507d6aa752eb94f89d148c2a9e2af->leave($__internal_da76bc51722e4e293dac0543b7c6f0c429e507d6aa752eb94f89d148c2a9e2af_prof);

        
        $__internal_bd211f498424957d9420e5e68dea7ca8de32206d7f237d58306db436413f8797->leave($__internal_bd211f498424957d9420e5e68dea7ca8de32206d7f237d58306db436413f8797_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b6caefd56d02742f96a25922e83ef94bfea2f3c60d7921dcfb04ccc739362de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b6caefd56d02742f96a25922e83ef94bfea2f3c60d7921dcfb04ccc739362de->enter($__internal_8b6caefd56d02742f96a25922e83ef94bfea2f3c60d7921dcfb04ccc739362de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28177fe21b16a9607a10318fdf4888626c66dcf359cc17a62bb5e84127c6c92d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28177fe21b16a9607a10318fdf4888626c66dcf359cc17a62bb5e84127c6c92d->enter($__internal_28177fe21b16a9607a10318fdf4888626c66dcf359cc17a62bb5e84127c6c92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_28177fe21b16a9607a10318fdf4888626c66dcf359cc17a62bb5e84127c6c92d->leave($__internal_28177fe21b16a9607a10318fdf4888626c66dcf359cc17a62bb5e84127c6c92d_prof);

        
        $__internal_8b6caefd56d02742f96a25922e83ef94bfea2f3c60d7921dcfb04ccc739362de->leave($__internal_8b6caefd56d02742f96a25922e83ef94bfea2f3c60d7921dcfb04ccc739362de_prof);

    }

    public function getTemplateName()
    {
        return "clients/form.html.twig";
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
", "clients/form.html.twig", "D:\\wamp64\\www\\start\\app\\Resources\\views\\clients\\form.html.twig");
    }
}
