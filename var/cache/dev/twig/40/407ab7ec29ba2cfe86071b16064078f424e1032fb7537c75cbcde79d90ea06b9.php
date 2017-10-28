<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_c41d5c3690a51c368fa96168c4b8a2c38ce28ea0d7277cabc79a1a615d4cc360 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c362b28cc10fbbecf5020a5fc8b9de59db093af99d7e3a8c56b8014a3d1d0d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c362b28cc10fbbecf5020a5fc8b9de59db093af99d7e3a8c56b8014a3d1d0d8->enter($__internal_1c362b28cc10fbbecf5020a5fc8b9de59db093af99d7e3a8c56b8014a3d1d0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_0cb059816a865a4f0f1891666112ae06b9a8e9ef2ed4fe05c8f72ca1eda7ff4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb059816a865a4f0f1891666112ae06b9a8e9ef2ed4fe05c8f72ca1eda7ff4f->enter($__internal_0cb059816a865a4f0f1891666112ae06b9a8e9ef2ed4fe05c8f72ca1eda7ff4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
        
        $__internal_1c362b28cc10fbbecf5020a5fc8b9de59db093af99d7e3a8c56b8014a3d1d0d8->leave($__internal_1c362b28cc10fbbecf5020a5fc8b9de59db093af99d7e3a8c56b8014a3d1d0d8_prof);

        
        $__internal_0cb059816a865a4f0f1891666112ae06b9a8e9ef2ed4fe05c8f72ca1eda7ff4f->leave($__internal_0cb059816a865a4f0f1891666112ae06b9a8e9ef2ed4fe05c8f72ca1eda7ff4f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  34 => 5,  30 => 4,  25 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <title>An Error Occurred: {{ status_text }}</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"{{ status_code }} {{ status_text }}\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
", "TwigBundle:Exception:error.html.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.html.twig");
    }
}
