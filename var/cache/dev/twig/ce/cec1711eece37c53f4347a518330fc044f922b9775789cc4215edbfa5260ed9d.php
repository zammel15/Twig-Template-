<?php

/* reservations/index.html.twig */
class __TwigTemplate_aaa2085066fe864f9290b81b3c9d00d5ad5639072dc998987b3dc0119ec862e5 extends Twig_Template
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
        $__internal_12f85ef03ac2d736a63966212ed17dd6e50a611ddd31bb5705c9ba301ef158c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f85ef03ac2d736a63966212ed17dd6e50a611ddd31bb5705c9ba301ef158c4->enter($__internal_12f85ef03ac2d736a63966212ed17dd6e50a611ddd31bb5705c9ba301ef158c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_6fa8763e9154a702b28b74f91430e8b76faa64ea0ffaae6c9ae67214b104915c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa8763e9154a702b28b74f91430e8b76faa64ea0ffaae6c9ae67214b104915c->enter($__internal_6fa8763e9154a702b28b74f91430e8b76faa64ea0ffaae6c9ae67214b104915c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12f85ef03ac2d736a63966212ed17dd6e50a611ddd31bb5705c9ba301ef158c4->leave($__internal_12f85ef03ac2d736a63966212ed17dd6e50a611ddd31bb5705c9ba301ef158c4_prof);

        
        $__internal_6fa8763e9154a702b28b74f91430e8b76faa64ea0ffaae6c9ae67214b104915c->leave($__internal_6fa8763e9154a702b28b74f91430e8b76faa64ea0ffaae6c9ae67214b104915c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4bbab524ccebf7420e0fb451fedbd1a3944123f870c0b88330ec0030ec26b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4bbab524ccebf7420e0fb451fedbd1a3944123f870c0b88330ec0030ec26b4e->enter($__internal_f4bbab524ccebf7420e0fb451fedbd1a3944123f870c0b88330ec0030ec26b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c133b287d1310c993bb88383d3d391dc46a8fb3197e8c64b2d6cf52a110dc749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c133b287d1310c993bb88383d3d391dc46a8fb3197e8c64b2d6cf52a110dc749->enter($__internal_c133b287d1310c993bb88383d3d391dc46a8fb3197e8c64b2d6cf52a110dc749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c133b287d1310c993bb88383d3d391dc46a8fb3197e8c64b2d6cf52a110dc749->leave($__internal_c133b287d1310c993bb88383d3d391dc46a8fb3197e8c64b2d6cf52a110dc749_prof);

        
        $__internal_f4bbab524ccebf7420e0fb451fedbd1a3944123f870c0b88330ec0030ec26b4e->leave($__internal_f4bbab524ccebf7420e0fb451fedbd1a3944123f870c0b88330ec0030ec26b4e_prof);

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
