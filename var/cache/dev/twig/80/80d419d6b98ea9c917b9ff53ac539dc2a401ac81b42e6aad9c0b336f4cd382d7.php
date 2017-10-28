<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_69231a1230a1a1479623370479ba1f04b672baf3182fc1ba739040437a669eab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_b5cb5982fd8533d2aabcf5e8fa668129e67e5e2a214f7de329eb267c3e731943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5cb5982fd8533d2aabcf5e8fa668129e67e5e2a214f7de329eb267c3e731943->enter($__internal_b5cb5982fd8533d2aabcf5e8fa668129e67e5e2a214f7de329eb267c3e731943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e8b960ece988a439f957fc87bb95581cb966aa159dfc3903a8269e3734bd1b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b960ece988a439f957fc87bb95581cb966aa159dfc3903a8269e3734bd1b71->enter($__internal_e8b960ece988a439f957fc87bb95581cb966aa159dfc3903a8269e3734bd1b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5cb5982fd8533d2aabcf5e8fa668129e67e5e2a214f7de329eb267c3e731943->leave($__internal_b5cb5982fd8533d2aabcf5e8fa668129e67e5e2a214f7de329eb267c3e731943_prof);

        
        $__internal_e8b960ece988a439f957fc87bb95581cb966aa159dfc3903a8269e3734bd1b71->leave($__internal_e8b960ece988a439f957fc87bb95581cb966aa159dfc3903a8269e3734bd1b71_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8e3dcabae2c630ebb7b2acb769d150636a581cf63d10189c4e8ffc6dfbe7a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e3dcabae2c630ebb7b2acb769d150636a581cf63d10189c4e8ffc6dfbe7a4c->enter($__internal_f8e3dcabae2c630ebb7b2acb769d150636a581cf63d10189c4e8ffc6dfbe7a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1147be15c764af5b4749a2cd045193a0f41c6a2d146cb3c558106e364ca400ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1147be15c764af5b4749a2cd045193a0f41c6a2d146cb3c558106e364ca400ff->enter($__internal_1147be15c764af5b4749a2cd045193a0f41c6a2d146cb3c558106e364ca400ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1147be15c764af5b4749a2cd045193a0f41c6a2d146cb3c558106e364ca400ff->leave($__internal_1147be15c764af5b4749a2cd045193a0f41c6a2d146cb3c558106e364ca400ff_prof);

        
        $__internal_f8e3dcabae2c630ebb7b2acb769d150636a581cf63d10189c4e8ffc6dfbe7a4c->leave($__internal_f8e3dcabae2c630ebb7b2acb769d150636a581cf63d10189c4e8ffc6dfbe7a4c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4aceda2b89b62d8be49ac5f1081ce45a7e9a3517adbac39c227521c259842f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aceda2b89b62d8be49ac5f1081ce45a7e9a3517adbac39c227521c259842f69->enter($__internal_4aceda2b89b62d8be49ac5f1081ce45a7e9a3517adbac39c227521c259842f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8d474420aac5da0fe31575a99c363bca1f88be353c7fd9f7e520ac0b7f8195db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d474420aac5da0fe31575a99c363bca1f88be353c7fd9f7e520ac0b7f8195db->enter($__internal_8d474420aac5da0fe31575a99c363bca1f88be353c7fd9f7e520ac0b7f8195db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8d474420aac5da0fe31575a99c363bca1f88be353c7fd9f7e520ac0b7f8195db->leave($__internal_8d474420aac5da0fe31575a99c363bca1f88be353c7fd9f7e520ac0b7f8195db_prof);

        
        $__internal_4aceda2b89b62d8be49ac5f1081ce45a7e9a3517adbac39c227521c259842f69->leave($__internal_4aceda2b89b62d8be49ac5f1081ce45a7e9a3517adbac39c227521c259842f69_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f4125cb20cf761e030d5a94a84faa32cf43383dceb017a4e49487a190cdeae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f4125cb20cf761e030d5a94a84faa32cf43383dceb017a4e49487a190cdeae3->enter($__internal_6f4125cb20cf761e030d5a94a84faa32cf43383dceb017a4e49487a190cdeae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74ce5fec10512acf96a3642c9cab1c6b12db00529bd141d78f65ca8896a49149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ce5fec10512acf96a3642c9cab1c6b12db00529bd141d78f65ca8896a49149->enter($__internal_74ce5fec10512acf96a3642c9cab1c6b12db00529bd141d78f65ca8896a49149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_74ce5fec10512acf96a3642c9cab1c6b12db00529bd141d78f65ca8896a49149->leave($__internal_74ce5fec10512acf96a3642c9cab1c6b12db00529bd141d78f65ca8896a49149_prof);

        
        $__internal_6f4125cb20cf761e030d5a94a84faa32cf43383dceb017a4e49487a190cdeae3->leave($__internal_6f4125cb20cf761e030d5a94a84faa32cf43383dceb017a4e49487a190cdeae3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
