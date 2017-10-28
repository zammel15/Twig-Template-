<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_037d6c50af9d45dcf9d9d11de524c6241f192176b137f690f22fffefe21c3c0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed51c86523f6d199687ec357f96acc835653ec847d5563d5144c353046bbeef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed51c86523f6d199687ec357f96acc835653ec847d5563d5144c353046bbeef2->enter($__internal_ed51c86523f6d199687ec357f96acc835653ec847d5563d5144c353046bbeef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_32830dad5ebaffd6e8fefbc1bb49b55a16f314216ebc55aa07efa25b6e3bf995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32830dad5ebaffd6e8fefbc1bb49b55a16f314216ebc55aa07efa25b6e3bf995->enter($__internal_32830dad5ebaffd6e8fefbc1bb49b55a16f314216ebc55aa07efa25b6e3bf995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed51c86523f6d199687ec357f96acc835653ec847d5563d5144c353046bbeef2->leave($__internal_ed51c86523f6d199687ec357f96acc835653ec847d5563d5144c353046bbeef2_prof);

        
        $__internal_32830dad5ebaffd6e8fefbc1bb49b55a16f314216ebc55aa07efa25b6e3bf995->leave($__internal_32830dad5ebaffd6e8fefbc1bb49b55a16f314216ebc55aa07efa25b6e3bf995_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2e3d23750127213743beb5eb17f9481b35272b34608ba70c5786838636a15dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e3d23750127213743beb5eb17f9481b35272b34608ba70c5786838636a15dc->enter($__internal_c2e3d23750127213743beb5eb17f9481b35272b34608ba70c5786838636a15dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7a69e7d9d61975678599b066e3b5a6b16a86a15a24a1ced5017c66304dd67c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a69e7d9d61975678599b066e3b5a6b16a86a15a24a1ced5017c66304dd67c4a->enter($__internal_7a69e7d9d61975678599b066e3b5a6b16a86a15a24a1ced5017c66304dd67c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_7a69e7d9d61975678599b066e3b5a6b16a86a15a24a1ced5017c66304dd67c4a->leave($__internal_7a69e7d9d61975678599b066e3b5a6b16a86a15a24a1ced5017c66304dd67c4a_prof);

        
        $__internal_c2e3d23750127213743beb5eb17f9481b35272b34608ba70c5786838636a15dc->leave($__internal_c2e3d23750127213743beb5eb17f9481b35272b34608ba70c5786838636a15dc_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7df534020662a06a4039d228d1319d975a7b2153a6f31e0d5c04914949185b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df534020662a06a4039d228d1319d975a7b2153a6f31e0d5c04914949185b91->enter($__internal_7df534020662a06a4039d228d1319d975a7b2153a6f31e0d5c04914949185b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_62f254f6434c73a39d0c5ec1bf52226160d601972bce43e42ebc55d8eae1669d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f254f6434c73a39d0c5ec1bf52226160d601972bce43e42ebc55d8eae1669d->enter($__internal_62f254f6434c73a39d0c5ec1bf52226160d601972bce43e42ebc55d8eae1669d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_62f254f6434c73a39d0c5ec1bf52226160d601972bce43e42ebc55d8eae1669d->leave($__internal_62f254f6434c73a39d0c5ec1bf52226160d601972bce43e42ebc55d8eae1669d_prof);

        
        $__internal_7df534020662a06a4039d228d1319d975a7b2153a6f31e0d5c04914949185b91->leave($__internal_7df534020662a06a4039d228d1319d975a7b2153a6f31e0d5c04914949185b91_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d22b35882ce266ad52831d7a02ddcbf285d9991a02bea810db13554f9d257b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d22b35882ce266ad52831d7a02ddcbf285d9991a02bea810db13554f9d257b3->enter($__internal_3d22b35882ce266ad52831d7a02ddcbf285d9991a02bea810db13554f9d257b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e73006860527b8dbe541cc92ba849887144a0600e8c01cf459ae7151ac74776a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73006860527b8dbe541cc92ba849887144a0600e8c01cf459ae7151ac74776a->enter($__internal_e73006860527b8dbe541cc92ba849887144a0600e8c01cf459ae7151ac74776a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_e73006860527b8dbe541cc92ba849887144a0600e8c01cf459ae7151ac74776a->leave($__internal_e73006860527b8dbe541cc92ba849887144a0600e8c01cf459ae7151ac74776a_prof);

        
        $__internal_3d22b35882ce266ad52831d7a02ddcbf285d9991a02bea810db13554f9d257b3->leave($__internal_3d22b35882ce266ad52831d7a02ddcbf285d9991a02bea810db13554f9d257b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
