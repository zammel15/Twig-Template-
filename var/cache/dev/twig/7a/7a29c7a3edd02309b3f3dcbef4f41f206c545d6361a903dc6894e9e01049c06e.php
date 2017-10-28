<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7384cc65981bb52535bf7e3b0fd2b4fae26712ad6aacaa920111860c1320c99f extends Twig_Template
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
        $__internal_13c495652753e1ad05a7579d14e23a79d3f4bad9c822553f859dc3619d7852a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13c495652753e1ad05a7579d14e23a79d3f4bad9c822553f859dc3619d7852a2->enter($__internal_13c495652753e1ad05a7579d14e23a79d3f4bad9c822553f859dc3619d7852a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_656214ff84fb78cedea7a9dcb59e3a7df5029aff70a3d54a8d0f75bac9dab3eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656214ff84fb78cedea7a9dcb59e3a7df5029aff70a3d54a8d0f75bac9dab3eb->enter($__internal_656214ff84fb78cedea7a9dcb59e3a7df5029aff70a3d54a8d0f75bac9dab3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_13c495652753e1ad05a7579d14e23a79d3f4bad9c822553f859dc3619d7852a2->leave($__internal_13c495652753e1ad05a7579d14e23a79d3f4bad9c822553f859dc3619d7852a2_prof);

        
        $__internal_656214ff84fb78cedea7a9dcb59e3a7df5029aff70a3d54a8d0f75bac9dab3eb->leave($__internal_656214ff84fb78cedea7a9dcb59e3a7df5029aff70a3d54a8d0f75bac9dab3eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
