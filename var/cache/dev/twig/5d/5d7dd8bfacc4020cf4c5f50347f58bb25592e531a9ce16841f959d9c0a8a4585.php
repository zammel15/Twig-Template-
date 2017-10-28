<?php

/* :clients:index.html.twig */
class __TwigTemplate_5259bfdb9c62ee39795eac145e588c05771b25441a9850dc44afc64ddf2db64a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":clients:index.html.twig", 1);
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
        $__internal_395912ef30d986b0cf7a64747ba6da773b5f8dbaaa04c5ef0afc68b601563c1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395912ef30d986b0cf7a64747ba6da773b5f8dbaaa04c5ef0afc68b601563c1f->enter($__internal_395912ef30d986b0cf7a64747ba6da773b5f8dbaaa04c5ef0afc68b601563c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":clients:index.html.twig"));

        $__internal_a5d166b13635afc591cb74c0264002c34d4a4928ef5982bb2b5074b0bcf94017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d166b13635afc591cb74c0264002c34d4a4928ef5982bb2b5074b0bcf94017->enter($__internal_a5d166b13635afc591cb74c0264002c34d4a4928ef5982bb2b5074b0bcf94017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":clients:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_395912ef30d986b0cf7a64747ba6da773b5f8dbaaa04c5ef0afc68b601563c1f->leave($__internal_395912ef30d986b0cf7a64747ba6da773b5f8dbaaa04c5ef0afc68b601563c1f_prof);

        
        $__internal_a5d166b13635afc591cb74c0264002c34d4a4928ef5982bb2b5074b0bcf94017->leave($__internal_a5d166b13635afc591cb74c0264002c34d4a4928ef5982bb2b5074b0bcf94017_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3d1e5bb347ddb79ae9f431ac5fcc17ca94e4aca6d74815b2485970896d56c3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3d1e5bb347ddb79ae9f431ac5fcc17ca94e4aca6d74815b2485970896d56c3f->enter($__internal_f3d1e5bb347ddb79ae9f431ac5fcc17ca94e4aca6d74815b2485970896d56c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b119d55a30164546626db17499e93c7ccb8f71e14de5954f4f3e3a51e4717626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b119d55a30164546626db17499e93c7ccb8f71e14de5954f4f3e3a51e4717626->enter($__internal_b119d55a30164546626db17499e93c7ccb8f71e14de5954f4f3e3a51e4717626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"#\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
              <tr>
                <td>Mr. Roy Adams</td>
                <td>radams1v@xinhuanet.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
              <tr>
                <td>Ms. Bonnie Clark</td>
                <td>bclark@bing.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_b119d55a30164546626db17499e93c7ccb8f71e14de5954f4f3e3a51e4717626->leave($__internal_b119d55a30164546626db17499e93c7ccb8f71e14de5954f4f3e3a51e4717626_prof);

        
        $__internal_f3d1e5bb347ddb79ae9f431ac5fcc17ca94e4aca6d74815b2485970896d56c3f->leave($__internal_f3d1e5bb347ddb79ae9f431ac5fcc17ca94e4aca6d74815b2485970896d56c3f_prof);

    }

    public function getTemplateName()
    {
        return ":clients:index.html.twig";
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
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"#\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
              <tr>
                <td>Mr. Roy Adams</td>
                <td>radams1v@xinhuanet.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
              <tr>
                <td>Ms. Bonnie Clark</td>
                <td>bclark@bing.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", ":clients:index.html.twig", "D:\\wamp64\\www\\start\\app/Resources\\views/clients/index.html.twig");
    }
}
