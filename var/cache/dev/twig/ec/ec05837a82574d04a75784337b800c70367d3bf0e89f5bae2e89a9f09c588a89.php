<?php

/* base.html.twig */
class __TwigTemplate_6f7ccb0bd6f3d93de97dfc25e94ea49f669201ad9e1bef2aab772932f49b3b42 extends Twig_Template
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
        $__internal_ac2f3a3a24525af46317670a1f03d961411d06d43f89f96881f929f2c57aa873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac2f3a3a24525af46317670a1f03d961411d06d43f89f96881f929f2c57aa873->enter($__internal_ac2f3a3a24525af46317670a1f03d961411d06d43f89f96881f929f2c57aa873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4e0618775909f9a66fa78bcec537c593614311d6ef36e4d28355ef1c9799f51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0618775909f9a66fa78bcec537c593614311d6ef36e4d28355ef1c9799f51d->enter($__internal_4e0618775909f9a66fa78bcec537c593614311d6ef36e4d28355ef1c9799f51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ac2f3a3a24525af46317670a1f03d961411d06d43f89f96881f929f2c57aa873->leave($__internal_ac2f3a3a24525af46317670a1f03d961411d06d43f89f96881f929f2c57aa873_prof);

        
        $__internal_4e0618775909f9a66fa78bcec537c593614311d6ef36e4d28355ef1c9799f51d->leave($__internal_4e0618775909f9a66fa78bcec537c593614311d6ef36e4d28355ef1c9799f51d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_46769e0c703768ffd7b163d75f4ad804f3ede42f62dc561d6d915bfe0251ade7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46769e0c703768ffd7b163d75f4ad804f3ede42f62dc561d6d915bfe0251ade7->enter($__internal_46769e0c703768ffd7b163d75f4ad804f3ede42f62dc561d6d915bfe0251ade7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8f77501b47695505d9ff4bc053470e5e691c4f8f749c94caecf5d1defe661b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f77501b47695505d9ff4bc053470e5e691c4f8f749c94caecf5d1defe661b6e->enter($__internal_8f77501b47695505d9ff4bc053470e5e691c4f8f749c94caecf5d1defe661b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landon Hotel App";
        
        $__internal_8f77501b47695505d9ff4bc053470e5e691c4f8f749c94caecf5d1defe661b6e->leave($__internal_8f77501b47695505d9ff4bc053470e5e691c4f8f749c94caecf5d1defe661b6e_prof);

        
        $__internal_46769e0c703768ffd7b163d75f4ad804f3ede42f62dc561d6d915bfe0251ade7->leave($__internal_46769e0c703768ffd7b163d75f4ad804f3ede42f62dc561d6d915bfe0251ade7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc5fad3a131fc4b36fb93773ac93bee504ec8157cb6c61fcc9e9fb6680cc8d01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5fad3a131fc4b36fb93773ac93bee504ec8157cb6c61fcc9e9fb6680cc8d01->enter($__internal_bc5fad3a131fc4b36fb93773ac93bee504ec8157cb6c61fcc9e9fb6680cc8d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_429028019d74ba57cb96ad060b7299b5b57ff28219087bb38ba6150382f7afbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429028019d74ba57cb96ad060b7299b5b57ff28219087bb38ba6150382f7afbd->enter($__internal_429028019d74ba57cb96ad060b7299b5b57ff28219087bb38ba6150382f7afbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_429028019d74ba57cb96ad060b7299b5b57ff28219087bb38ba6150382f7afbd->leave($__internal_429028019d74ba57cb96ad060b7299b5b57ff28219087bb38ba6150382f7afbd_prof);

        
        $__internal_bc5fad3a131fc4b36fb93773ac93bee504ec8157cb6c61fcc9e9fb6680cc8d01->leave($__internal_bc5fad3a131fc4b36fb93773ac93bee504ec8157cb6c61fcc9e9fb6680cc8d01_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_62fd410a226284549805a3110971de95b852e2440e75d6c26af3b56148ccabd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62fd410a226284549805a3110971de95b852e2440e75d6c26af3b56148ccabd5->enter($__internal_62fd410a226284549805a3110971de95b852e2440e75d6c26af3b56148ccabd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2b7fbe983853d4848d8a3383a6583ccb5a7d855e33b3021c4d62ed8fb7cd294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b7fbe983853d4848d8a3383a6583ccb5a7d855e33b3021c4d62ed8fb7cd294->enter($__internal_b2b7fbe983853d4848d8a3383a6583ccb5a7d855e33b3021c4d62ed8fb7cd294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b2b7fbe983853d4848d8a3383a6583ccb5a7d855e33b3021c4d62ed8fb7cd294->leave($__internal_b2b7fbe983853d4848d8a3383a6583ccb5a7d855e33b3021c4d62ed8fb7cd294_prof);

        
        $__internal_62fd410a226284549805a3110971de95b852e2440e75d6c26af3b56148ccabd5->leave($__internal_62fd410a226284549805a3110971de95b852e2440e75d6c26af3b56148ccabd5_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_754c9db858ea9eeee5a13dc467e6f1843b96a6c1dc8e6296631dc1b0a3e33d41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_754c9db858ea9eeee5a13dc467e6f1843b96a6c1dc8e6296631dc1b0a3e33d41->enter($__internal_754c9db858ea9eeee5a13dc467e6f1843b96a6c1dc8e6296631dc1b0a3e33d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c586a1e0813e78623937ded4c081605ed46121ddd9bcb04bf98419abf13d989d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c586a1e0813e78623937ded4c081605ed46121ddd9bcb04bf98419abf13d989d->enter($__internal_c586a1e0813e78623937ded4c081605ed46121ddd9bcb04bf98419abf13d989d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c586a1e0813e78623937ded4c081605ed46121ddd9bcb04bf98419abf13d989d->leave($__internal_c586a1e0813e78623937ded4c081605ed46121ddd9bcb04bf98419abf13d989d_prof);

        
        $__internal_754c9db858ea9eeee5a13dc467e6f1843b96a6c1dc8e6296631dc1b0a3e33d41->leave($__internal_754c9db858ea9eeee5a13dc467e6f1843b96a6c1dc8e6296631dc1b0a3e33d41_prof);

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
", "base.html.twig", "D:\\wamp64\\www\\start\\app\\Resources\\views\\base.html.twig");
    }
}
