<?php

/* base.html.twig */
class __TwigTemplate_d828ed89e5187b1815840ca184c1d8114af1da06174cf2a86c47800d87bd8839 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5c07e502c8d63cdee43251adf29767538869ca0703b06c85fbf4da69a4686c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c07e502c8d63cdee43251adf29767538869ca0703b06c85fbf4da69a4686c8->enter($__internal_a5c07e502c8d63cdee43251adf29767538869ca0703b06c85fbf4da69a4686c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_213e9fb046514dfd1415a0114a0cf5d5f96d9e6265bcb317f715b17d4a347fd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213e9fb046514dfd1415a0114a0cf5d5f96d9e6265bcb317f715b17d4a347fd6->enter($__internal_213e9fb046514dfd1415a0114a0cf5d5f96d9e6265bcb317f715b17d4a347fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.date.css"), "html", null, true);
        echo "\">
    </head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_clients");
        echo "\">Clients</a></li>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservations");
        echo "\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.date.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>
    </body>
</html>
";
        
        $__internal_a5c07e502c8d63cdee43251adf29767538869ca0703b06c85fbf4da69a4686c8->leave($__internal_a5c07e502c8d63cdee43251adf29767538869ca0703b06c85fbf4da69a4686c8_prof);

        
        $__internal_213e9fb046514dfd1415a0114a0cf5d5f96d9e6265bcb317f715b17d4a347fd6->leave($__internal_213e9fb046514dfd1415a0114a0cf5d5f96d9e6265bcb317f715b17d4a347fd6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3e2d91320f5a8e482b574f614e87e1ec8eaaeb7f5f746a5cc30734d25ec58ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e2d91320f5a8e482b574f614e87e1ec8eaaeb7f5f746a5cc30734d25ec58ed->enter($__internal_e3e2d91320f5a8e482b574f614e87e1ec8eaaeb7f5f746a5cc30734d25ec58ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b6ce0534f92a6a14d39c5bcd199d110619888f77e11f16cfc0d6a97493d05831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ce0534f92a6a14d39c5bcd199d110619888f77e11f16cfc0d6a97493d05831->enter($__internal_b6ce0534f92a6a14d39c5bcd199d110619888f77e11f16cfc0d6a97493d05831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landon Hotel App";
        
        $__internal_b6ce0534f92a6a14d39c5bcd199d110619888f77e11f16cfc0d6a97493d05831->leave($__internal_b6ce0534f92a6a14d39c5bcd199d110619888f77e11f16cfc0d6a97493d05831_prof);

        
        $__internal_e3e2d91320f5a8e482b574f614e87e1ec8eaaeb7f5f746a5cc30734d25ec58ed->leave($__internal_e3e2d91320f5a8e482b574f614e87e1ec8eaaeb7f5f746a5cc30734d25ec58ed_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3bdcc226bf761c89c5f5689605ca8a12f65e77705d91873a5d29784fbbfc118d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bdcc226bf761c89c5f5689605ca8a12f65e77705d91873a5d29784fbbfc118d->enter($__internal_3bdcc226bf761c89c5f5689605ca8a12f65e77705d91873a5d29784fbbfc118d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1dbbcbed8bfb45a0ffdfea5a56a16feb47608c52f905b573262dbcf7606e1173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dbbcbed8bfb45a0ffdfea5a56a16feb47608c52f905b573262dbcf7606e1173->enter($__internal_1dbbcbed8bfb45a0ffdfea5a56a16feb47608c52f905b573262dbcf7606e1173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1dbbcbed8bfb45a0ffdfea5a56a16feb47608c52f905b573262dbcf7606e1173->leave($__internal_1dbbcbed8bfb45a0ffdfea5a56a16feb47608c52f905b573262dbcf7606e1173_prof);

        
        $__internal_3bdcc226bf761c89c5f5689605ca8a12f65e77705d91873a5d29784fbbfc118d->leave($__internal_3bdcc226bf761c89c5f5689605ca8a12f65e77705d91873a5d29784fbbfc118d_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_661087f8157fdd4b3f1c724a50b6e58937c29055851e8799a6233d9305429cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_661087f8157fdd4b3f1c724a50b6e58937c29055851e8799a6233d9305429cce->enter($__internal_661087f8157fdd4b3f1c724a50b6e58937c29055851e8799a6233d9305429cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44ce48a2101dc7b953bfaa10a83aa3cd7c9a48ee5e33bcf874ae5d84e6481b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ce48a2101dc7b953bfaa10a83aa3cd7c9a48ee5e33bcf874ae5d84e6481b2e->enter($__internal_44ce48a2101dc7b953bfaa10a83aa3cd7c9a48ee5e33bcf874ae5d84e6481b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_44ce48a2101dc7b953bfaa10a83aa3cd7c9a48ee5e33bcf874ae5d84e6481b2e->leave($__internal_44ce48a2101dc7b953bfaa10a83aa3cd7c9a48ee5e33bcf874ae5d84e6481b2e_prof);

        
        $__internal_661087f8157fdd4b3f1c724a50b6e58937c29055851e8799a6233d9305429cce->leave($__internal_661087f8157fdd4b3f1c724a50b6e58937c29055851e8799a6233d9305429cce_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_26604034aec11475823de726b498ed4844c6e4aa4439d6e4430991337e51baf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26604034aec11475823de726b498ed4844c6e4aa4439d6e4430991337e51baf2->enter($__internal_26604034aec11475823de726b498ed4844c6e4aa4439d6e4430991337e51baf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5792995b93f3daa6bece70da21cf48c569dc802822dd3e1c2c01730387823622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5792995b93f3daa6bece70da21cf48c569dc802822dd3e1c2c01730387823622->enter($__internal_5792995b93f3daa6bece70da21cf48c569dc802822dd3e1c2c01730387823622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5792995b93f3daa6bece70da21cf48c569dc802822dd3e1c2c01730387823622->leave($__internal_5792995b93f3daa6bece70da21cf48c569dc802822dd3e1c2c01730387823622_prof);

        
        $__internal_26604034aec11475823de726b498ed4844c6e4aa4439d6e4430991337e51baf2->leave($__internal_26604034aec11475823de726b498ed4844c6e4aa4439d6e4430991337e51baf2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 45,  187 => 31,  170 => 6,  152 => 5,  130 => 51,  126 => 50,  122 => 49,  118 => 48,  114 => 47,  109 => 46,  107 => 45,  92 => 32,  90 => 31,  78 => 22,  74 => 21,  70 => 20,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Landon Hotel App{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/foundation.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.date.css') }}\">
    </head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li><a href=\"{{ path (\"home\") }}\">Home</a></li>
            <li><a href=\"{{ path(\"index_clients\") }}\">Clients</a></li>
            <li><a href=\"{{ path(\"reservations\") }}\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    {% block body %}{% endblock %}
    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        {% block javascripts %}{% endblock %}
        <script src=\"{{ asset('js/vendor/jquery.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/what-input.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/foundation.js') }}\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.date.js') }}\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>
    </body>
</html>
", "base.html.twig", "D:\\wamp64\\www\\start\\app\\Resources\\views\\base.html.twig");
    }
}
