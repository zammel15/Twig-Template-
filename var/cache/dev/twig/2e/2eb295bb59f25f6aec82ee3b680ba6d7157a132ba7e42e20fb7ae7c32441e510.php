<?php

/* clients/index.html.twig */
class __TwigTemplate_492dc8d34cf11cadda315871feaf207fdfff2a363ce7859e4c95c74b19584fb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/index.html.twig", 1);
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
        $__internal_15ce23908d60f95c56e416ec1dc6aee9999b49eeae15b81d1f47b5adfa886de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15ce23908d60f95c56e416ec1dc6aee9999b49eeae15b81d1f47b5adfa886de0->enter($__internal_15ce23908d60f95c56e416ec1dc6aee9999b49eeae15b81d1f47b5adfa886de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_551a28bb099938de6deb9e78c4d173f92c41d8e6b54559be5424f4f4deea2651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551a28bb099938de6deb9e78c4d173f92c41d8e6b54559be5424f4f4deea2651->enter($__internal_551a28bb099938de6deb9e78c4d173f92c41d8e6b54559be5424f4f4deea2651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15ce23908d60f95c56e416ec1dc6aee9999b49eeae15b81d1f47b5adfa886de0->leave($__internal_15ce23908d60f95c56e416ec1dc6aee9999b49eeae15b81d1f47b5adfa886de0_prof);

        
        $__internal_551a28bb099938de6deb9e78c4d173f92c41d8e6b54559be5424f4f4deea2651->leave($__internal_551a28bb099938de6deb9e78c4d173f92c41d8e6b54559be5424f4f4deea2651_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c5185d58276f46236ed63d18a4f362d3ed3c0cda15b567fbaa2ee736b589707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c5185d58276f46236ed63d18a4f362d3ed3c0cda15b567fbaa2ee736b589707->enter($__internal_4c5185d58276f46236ed63d18a4f362d3ed3c0cda15b567fbaa2ee736b589707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee6edb9f858004ad6cba9a4be369d0684dcb090d26001a05625508d2564ad45a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6edb9f858004ad6cba9a4be369d0684dcb090d26001a05625508d2564ad45a->enter($__internal_ee6edb9f858004ad6cba9a4be369d0684dcb090d26001a05625508d2564ad45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ee6edb9f858004ad6cba9a4be369d0684dcb090d26001a05625508d2564ad45a->leave($__internal_ee6edb9f858004ad6cba9a4be369d0684dcb090d26001a05625508d2564ad45a_prof);

        
        $__internal_4c5185d58276f46236ed63d18a4f362d3ed3c0cda15b567fbaa2ee736b589707->leave($__internal_4c5185d58276f46236ed63d18a4f362d3ed3c0cda15b567fbaa2ee736b589707_prof);

    }

    public function getTemplateName()
    {
        return "clients/index.html.twig";
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
", "clients/index.html.twig", "D:\\wamp64\\www\\start\\app\\Resources\\views\\clients\\index.html.twig");
    }
}
