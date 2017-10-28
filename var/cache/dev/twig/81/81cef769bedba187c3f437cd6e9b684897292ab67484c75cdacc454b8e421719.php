<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d6b8390fe225700581b42c2e1d8e7ebc9280a35037d61228c35e2457b24dab60 extends Twig_Template
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
        $__internal_3b4554cb401880f2aede02b4b448fca61ab392daf0107274665650d93fea6298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4554cb401880f2aede02b4b448fca61ab392daf0107274665650d93fea6298->enter($__internal_3b4554cb401880f2aede02b4b448fca61ab392daf0107274665650d93fea6298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d465290bf4ff9262fccb6296d966a15d9daff1b58bd38441dc223580caf1eb49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d465290bf4ff9262fccb6296d966a15d9daff1b58bd38441dc223580caf1eb49->enter($__internal_d465290bf4ff9262fccb6296d966a15d9daff1b58bd38441dc223580caf1eb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b4554cb401880f2aede02b4b448fca61ab392daf0107274665650d93fea6298->leave($__internal_3b4554cb401880f2aede02b4b448fca61ab392daf0107274665650d93fea6298_prof);

        
        $__internal_d465290bf4ff9262fccb6296d966a15d9daff1b58bd38441dc223580caf1eb49->leave($__internal_d465290bf4ff9262fccb6296d966a15d9daff1b58bd38441dc223580caf1eb49_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_53124446b22deb88f79d42740cac49c4149d23594d474fb68a791c94bdfbb46d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53124446b22deb88f79d42740cac49c4149d23594d474fb68a791c94bdfbb46d->enter($__internal_53124446b22deb88f79d42740cac49c4149d23594d474fb68a791c94bdfbb46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a42d96a07a551b1e8075fad8bbb34d009169c7c22f4c8f4df371486d50f20ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42d96a07a551b1e8075fad8bbb34d009169c7c22f4c8f4df371486d50f20ae2->enter($__internal_a42d96a07a551b1e8075fad8bbb34d009169c7c22f4c8f4df371486d50f20ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a42d96a07a551b1e8075fad8bbb34d009169c7c22f4c8f4df371486d50f20ae2->leave($__internal_a42d96a07a551b1e8075fad8bbb34d009169c7c22f4c8f4df371486d50f20ae2_prof);

        
        $__internal_53124446b22deb88f79d42740cac49c4149d23594d474fb68a791c94bdfbb46d->leave($__internal_53124446b22deb88f79d42740cac49c4149d23594d474fb68a791c94bdfbb46d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_63cb252def5ae509f37996d5203eb347ce253014d6a08cf26248163a1a7d3f76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63cb252def5ae509f37996d5203eb347ce253014d6a08cf26248163a1a7d3f76->enter($__internal_63cb252def5ae509f37996d5203eb347ce253014d6a08cf26248163a1a7d3f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_95fdc32a156aa14e549475e843c9817e5b9b9da045beec2c03b36114429aed52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95fdc32a156aa14e549475e843c9817e5b9b9da045beec2c03b36114429aed52->enter($__internal_95fdc32a156aa14e549475e843c9817e5b9b9da045beec2c03b36114429aed52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_95fdc32a156aa14e549475e843c9817e5b9b9da045beec2c03b36114429aed52->leave($__internal_95fdc32a156aa14e549475e843c9817e5b9b9da045beec2c03b36114429aed52_prof);

        
        $__internal_63cb252def5ae509f37996d5203eb347ce253014d6a08cf26248163a1a7d3f76->leave($__internal_63cb252def5ae509f37996d5203eb347ce253014d6a08cf26248163a1a7d3f76_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e49ce96c05f480700e11d28342aa207351b97aa334bd4efb2077e1bb8f72d96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e49ce96c05f480700e11d28342aa207351b97aa334bd4efb2077e1bb8f72d96->enter($__internal_1e49ce96c05f480700e11d28342aa207351b97aa334bd4efb2077e1bb8f72d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_561b8cdd777b4d2ef9f9dc0b081a52e27a9f95cc375578b1f6f03a6ee68376e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561b8cdd777b4d2ef9f9dc0b081a52e27a9f95cc375578b1f6f03a6ee68376e1->enter($__internal_561b8cdd777b4d2ef9f9dc0b081a52e27a9f95cc375578b1f6f03a6ee68376e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_561b8cdd777b4d2ef9f9dc0b081a52e27a9f95cc375578b1f6f03a6ee68376e1->leave($__internal_561b8cdd777b4d2ef9f9dc0b081a52e27a9f95cc375578b1f6f03a6ee68376e1_prof);

        
        $__internal_1e49ce96c05f480700e11d28342aa207351b97aa334bd4efb2077e1bb8f72d96->leave($__internal_1e49ce96c05f480700e11d28342aa207351b97aa334bd4efb2077e1bb8f72d96_prof);

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
