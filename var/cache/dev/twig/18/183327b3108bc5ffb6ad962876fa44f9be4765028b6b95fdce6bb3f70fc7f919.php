<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_7431e024b2747fc2255f44fff69cb872022d366d1139592eeccf736f3b9b1cc8 extends Twig_Template
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
        $__internal_c36cd85b27b5ba2b39232fbfd2328c9b5bc12098e3de86fe121d70a148a5a126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c36cd85b27b5ba2b39232fbfd2328c9b5bc12098e3de86fe121d70a148a5a126->enter($__internal_c36cd85b27b5ba2b39232fbfd2328c9b5bc12098e3de86fe121d70a148a5a126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_5d257c5b31711fc927cf624636914cdf8b6a00f9792601595ea0d9e427d22e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d257c5b31711fc927cf624636914cdf8b6a00f9792601595ea0d9e427d22e6c->enter($__internal_5d257c5b31711fc927cf624636914cdf8b6a00f9792601595ea0d9e427d22e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c36cd85b27b5ba2b39232fbfd2328c9b5bc12098e3de86fe121d70a148a5a126->leave($__internal_c36cd85b27b5ba2b39232fbfd2328c9b5bc12098e3de86fe121d70a148a5a126_prof);

        
        $__internal_5d257c5b31711fc927cf624636914cdf8b6a00f9792601595ea0d9e427d22e6c->leave($__internal_5d257c5b31711fc927cf624636914cdf8b6a00f9792601595ea0d9e427d22e6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
