<?php

/* clients/index.html.twig */
class __TwigTemplate_6baa34e9e8bcd75d10790d2565eb275266f73c21711e94d4adb50faab58af748 extends Twig_Template
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
        $__internal_1b6d68688cf1a518240d78dc2f9132e116290019378ef50954ccefeaa3d1cd4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6d68688cf1a518240d78dc2f9132e116290019378ef50954ccefeaa3d1cd4e->enter($__internal_1b6d68688cf1a518240d78dc2f9132e116290019378ef50954ccefeaa3d1cd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_bc5401f2ae8b440483728087643e30d637306303fd9d38d0b8a136d2250ff4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5401f2ae8b440483728087643e30d637306303fd9d38d0b8a136d2250ff4e9->enter($__internal_bc5401f2ae8b440483728087643e30d637306303fd9d38d0b8a136d2250ff4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b6d68688cf1a518240d78dc2f9132e116290019378ef50954ccefeaa3d1cd4e->leave($__internal_1b6d68688cf1a518240d78dc2f9132e116290019378ef50954ccefeaa3d1cd4e_prof);

        
        $__internal_bc5401f2ae8b440483728087643e30d637306303fd9d38d0b8a136d2250ff4e9->leave($__internal_bc5401f2ae8b440483728087643e30d637306303fd9d38d0b8a136d2250ff4e9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_45139df3df587430aa9f4a0cd35c6ddbc20b7f9adaeaaf2a2332c890c8333184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45139df3df587430aa9f4a0cd35c6ddbc20b7f9adaeaaf2a2332c890c8333184->enter($__internal_45139df3df587430aa9f4a0cd35c6ddbc20b7f9adaeaaf2a2332c890c8333184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_865734e1dfd5a5e4fc11b914febbc76948b9ace165aa0634dcf2a8debbd67c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865734e1dfd5a5e4fc11b914febbc76948b9ace165aa0634dcf2a8debbd67c4f->enter($__internal_865734e1dfd5a5e4fc11b914febbc76948b9ace165aa0634dcf2a8debbd67c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

          ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 20
            echo "              <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["client"], "title", array())), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "last_name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                  <a class=\"hollow button\" href=\"/client/edit\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"";
            // line 25
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("booking", array("id_client" => 1));
            echo "\">BOOK A ROOM</a>
                </td>
              </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_865734e1dfd5a5e4fc11b914febbc76948b9ace165aa0634dcf2a8debbd67c4f->leave($__internal_865734e1dfd5a5e4fc11b914febbc76948b9ace165aa0634dcf2a8debbd67c4f_prof);

        
        $__internal_45139df3df587430aa9f4a0cd35c6ddbc20b7f9adaeaaf2a2332c890c8333184->leave($__internal_45139df3df587430aa9f4a0cd35c6ddbc20b7f9adaeaaf2a2332c890c8333184_prof);

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
        return array (  97 => 29,  87 => 25,  81 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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

          {% for client in clients %}
              <tr>
                <td>{{ client.title | capitalize}}. {{ client.name }} {{ client.last_name }}</td>
                <td>{{ client.email }}</td>
                <td>
                  <a class=\"hollow button\" href=\"/client/edit\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"{{ path(\"booking\",{'id_client': 1 }) }}\">BOOK A ROOM</a>
                </td>
              </tr>
          {% endfor %}

          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "clients/index.html.twig", "D:\\wamp64\\www\\start\\app\\Resources\\views\\clients\\index.html.twig");
    }
}
