<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_c389575e7055ccbf18f6c0dee6289ce0bc536427eb8c9c9cfd89f29c902f3228 extends Twig_Template
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
        $__internal_b1aaa4bd0b6304d59ffc171fe95381d36211b3c7f98e2bfe567e89339293fc78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1aaa4bd0b6304d59ffc171fe95381d36211b3c7f98e2bfe567e89339293fc78->enter($__internal_b1aaa4bd0b6304d59ffc171fe95381d36211b3c7f98e2bfe567e89339293fc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_6329720c81ff87e2f6dc6e0a8d27bbd362db5c1d019f1ad8651b7909265d885b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6329720c81ff87e2f6dc6e0a8d27bbd362db5c1d019f1ad8651b7909265d885b->enter($__internal_6329720c81ff87e2f6dc6e0a8d27bbd362db5c1d019f1ad8651b7909265d885b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b1aaa4bd0b6304d59ffc171fe95381d36211b3c7f98e2bfe567e89339293fc78->leave($__internal_b1aaa4bd0b6304d59ffc171fe95381d36211b3c7f98e2bfe567e89339293fc78_prof);

        
        $__internal_6329720c81ff87e2f6dc6e0a8d27bbd362db5c1d019f1ad8651b7909265d885b->leave($__internal_6329720c81ff87e2f6dc6e0a8d27bbd362db5c1d019f1ad8651b7909265d885b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
