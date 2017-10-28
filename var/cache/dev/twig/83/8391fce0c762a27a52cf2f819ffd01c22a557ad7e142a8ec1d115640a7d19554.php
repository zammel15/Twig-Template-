<?php

/* ::base.html.twig */
class __TwigTemplate_ec727907c8bdfa3c9dc59c7f231ee189d362f5e842b51aa91957bdf575b84e7a extends Twig_Template
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
        $__internal_dc1aecdf26ba2991cad28c5d3244202d01be228b0c573ec9b06e1c8ab24467b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc1aecdf26ba2991cad28c5d3244202d01be228b0c573ec9b06e1c8ab24467b1->enter($__internal_dc1aecdf26ba2991cad28c5d3244202d01be228b0c573ec9b06e1c8ab24467b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b6066932d42f8500c0fa0836d93f134dd346145d8cbea71f350c7bdebf4b6cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6066932d42f8500c0fa0836d93f134dd346145d8cbea71f350c7bdebf4b6cd9->enter($__internal_b6066932d42f8500c0fa0836d93f134dd346145d8cbea71f350c7bdebf4b6cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Clients</a></li>
            <li><a href=\"#\">Reservations</a></li>
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
        
        $__internal_dc1aecdf26ba2991cad28c5d3244202d01be228b0c573ec9b06e1c8ab24467b1->leave($__internal_dc1aecdf26ba2991cad28c5d3244202d01be228b0c573ec9b06e1c8ab24467b1_prof);

        
        $__internal_b6066932d42f8500c0fa0836d93f134dd346145d8cbea71f350c7bdebf4b6cd9->leave($__internal_b6066932d42f8500c0fa0836d93f134dd346145d8cbea71f350c7bdebf4b6cd9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cd0464a9f878f2e039739f3bb89f0c1421b7d94fd7067d6eb66f867859ab457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cd0464a9f878f2e039739f3bb89f0c1421b7d94fd7067d6eb66f867859ab457->enter($__internal_1cd0464a9f878f2e039739f3bb89f0c1421b7d94fd7067d6eb66f867859ab457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_620f041bff79919cde25b2b0a594df4594ca0e87ff40aee2606b3aa12629df8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_620f041bff79919cde25b2b0a594df4594ca0e87ff40aee2606b3aa12629df8a->enter($__internal_620f041bff79919cde25b2b0a594df4594ca0e87ff40aee2606b3aa12629df8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landon Hotel App";
        
        $__internal_620f041bff79919cde25b2b0a594df4594ca0e87ff40aee2606b3aa12629df8a->leave($__internal_620f041bff79919cde25b2b0a594df4594ca0e87ff40aee2606b3aa12629df8a_prof);

        
        $__internal_1cd0464a9f878f2e039739f3bb89f0c1421b7d94fd7067d6eb66f867859ab457->leave($__internal_1cd0464a9f878f2e039739f3bb89f0c1421b7d94fd7067d6eb66f867859ab457_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a71a15793b1867e80d5b18fa4a999618b67370e3b4d666978cf000cd3cf81da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a71a15793b1867e80d5b18fa4a999618b67370e3b4d666978cf000cd3cf81da->enter($__internal_5a71a15793b1867e80d5b18fa4a999618b67370e3b4d666978cf000cd3cf81da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_11a99fb1ccdd0c6c4f857ae2dde251c516b3d2fe858304fc8b9f79f61fa88826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a99fb1ccdd0c6c4f857ae2dde251c516b3d2fe858304fc8b9f79f61fa88826->enter($__internal_11a99fb1ccdd0c6c4f857ae2dde251c516b3d2fe858304fc8b9f79f61fa88826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_11a99fb1ccdd0c6c4f857ae2dde251c516b3d2fe858304fc8b9f79f61fa88826->leave($__internal_11a99fb1ccdd0c6c4f857ae2dde251c516b3d2fe858304fc8b9f79f61fa88826_prof);

        
        $__internal_5a71a15793b1867e80d5b18fa4a999618b67370e3b4d666978cf000cd3cf81da->leave($__internal_5a71a15793b1867e80d5b18fa4a999618b67370e3b4d666978cf000cd3cf81da_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2926dae516877fa7a12c1b38c98d916a2519c76d19f4c84099a909a1facaccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2926dae516877fa7a12c1b38c98d916a2519c76d19f4c84099a909a1facaccf->enter($__internal_d2926dae516877fa7a12c1b38c98d916a2519c76d19f4c84099a909a1facaccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20c9976ccf976630b1b000d1c11fd16139e813b06d42a85ef4e627b7369566bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c9976ccf976630b1b000d1c11fd16139e813b06d42a85ef4e627b7369566bc->enter($__internal_20c9976ccf976630b1b000d1c11fd16139e813b06d42a85ef4e627b7369566bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_20c9976ccf976630b1b000d1c11fd16139e813b06d42a85ef4e627b7369566bc->leave($__internal_20c9976ccf976630b1b000d1c11fd16139e813b06d42a85ef4e627b7369566bc_prof);

        
        $__internal_d2926dae516877fa7a12c1b38c98d916a2519c76d19f4c84099a909a1facaccf->leave($__internal_d2926dae516877fa7a12c1b38c98d916a2519c76d19f4c84099a909a1facaccf_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ce589489e3988b5aa8d6f9e3aa1d71fcfd61fabccc1fa89baa3baaec6a84820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ce589489e3988b5aa8d6f9e3aa1d71fcfd61fabccc1fa89baa3baaec6a84820->enter($__internal_9ce589489e3988b5aa8d6f9e3aa1d71fcfd61fabccc1fa89baa3baaec6a84820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c237953084afab9d3ccdbd1c3ac34838f27787fdfe0ba52a83ab86d9bf91c964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c237953084afab9d3ccdbd1c3ac34838f27787fdfe0ba52a83ab86d9bf91c964->enter($__internal_c237953084afab9d3ccdbd1c3ac34838f27787fdfe0ba52a83ab86d9bf91c964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c237953084afab9d3ccdbd1c3ac34838f27787fdfe0ba52a83ab86d9bf91c964->leave($__internal_c237953084afab9d3ccdbd1c3ac34838f27787fdfe0ba52a83ab86d9bf91c964_prof);

        
        $__internal_9ce589489e3988b5aa8d6f9e3aa1d71fcfd61fabccc1fa89baa3baaec6a84820->leave($__internal_9ce589489e3988b5aa8d6f9e3aa1d71fcfd61fabccc1fa89baa3baaec6a84820_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 45,  178 => 31,  161 => 6,  143 => 5,  121 => 51,  117 => 50,  113 => 49,  109 => 48,  105 => 47,  100 => 46,  98 => 45,  83 => 32,  81 => 31,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Clients</a></li>
            <li><a href=\"#\">Reservations</a></li>
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
", "::base.html.twig", "D:\\wamp64\\www\\start\\app/Resources\\views/base.html.twig");
    }
}
