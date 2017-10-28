<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b804de4e54e01b6ec1bce1e7cf8c8a1eee8bd710475101c6cea60bae47686054 extends Twig_Template
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
        $__internal_fc26d244a0f486c424047c6da94c3cd9540250701fffaa20f405e65c35c1ba73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc26d244a0f486c424047c6da94c3cd9540250701fffaa20f405e65c35c1ba73->enter($__internal_fc26d244a0f486c424047c6da94c3cd9540250701fffaa20f405e65c35c1ba73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_56c0fcc90589b43fdfc133149034a187c9fc0dafcf5ebcd9d45b01dc83ae1fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c0fcc90589b43fdfc133149034a187c9fc0dafcf5ebcd9d45b01dc83ae1fcf->enter($__internal_56c0fcc90589b43fdfc133149034a187c9fc0dafcf5ebcd9d45b01dc83ae1fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_fc26d244a0f486c424047c6da94c3cd9540250701fffaa20f405e65c35c1ba73->leave($__internal_fc26d244a0f486c424047c6da94c3cd9540250701fffaa20f405e65c35c1ba73_prof);

        
        $__internal_56c0fcc90589b43fdfc133149034a187c9fc0dafcf5ebcd9d45b01dc83ae1fcf->leave($__internal_56c0fcc90589b43fdfc133149034a187c9fc0dafcf5ebcd9d45b01dc83ae1fcf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
