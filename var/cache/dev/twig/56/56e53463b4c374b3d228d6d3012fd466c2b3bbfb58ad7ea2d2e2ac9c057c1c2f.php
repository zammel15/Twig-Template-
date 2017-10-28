<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_fbb982b511b6e713863021d8fe6157e26a8a862a23abb077931328908cf6bddf extends Twig_Template
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
        $__internal_bc43c13a4245ee1591b3cdfcebc473d014c49ba1002f1518646b73b7192d337d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc43c13a4245ee1591b3cdfcebc473d014c49ba1002f1518646b73b7192d337d->enter($__internal_bc43c13a4245ee1591b3cdfcebc473d014c49ba1002f1518646b73b7192d337d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_4b498657355b8572620b990c1f57bbf44a3c4b6a5d996b8a36f18c0e0dd28df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b498657355b8572620b990c1f57bbf44a3c4b6a5d996b8a36f18c0e0dd28df1->enter($__internal_4b498657355b8572620b990c1f57bbf44a3c4b6a5d996b8a36f18c0e0dd28df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_bc43c13a4245ee1591b3cdfcebc473d014c49ba1002f1518646b73b7192d337d->leave($__internal_bc43c13a4245ee1591b3cdfcebc473d014c49ba1002f1518646b73b7192d337d_prof);

        
        $__internal_4b498657355b8572620b990c1f57bbf44a3c4b6a5d996b8a36f18c0e0dd28df1->leave($__internal_4b498657355b8572620b990c1f57bbf44a3c4b6a5d996b8a36f18c0e0dd28df1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
