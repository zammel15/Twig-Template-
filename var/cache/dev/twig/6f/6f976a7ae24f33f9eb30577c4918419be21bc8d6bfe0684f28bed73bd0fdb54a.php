<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_db5c037b811ba966ab5c051201723dc6321674472cefe89952fe3f41bcb71c1b extends Twig_Template
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
        $__internal_53d8745900a60f0b17e38c918a4003f3990213f5673987cc0d38aa69523686ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d8745900a60f0b17e38c918a4003f3990213f5673987cc0d38aa69523686ac->enter($__internal_53d8745900a60f0b17e38c918a4003f3990213f5673987cc0d38aa69523686ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_465e2bcaf3e1b9cf2a9f93c8a1dc61aaa273b48a4e5736e315b2901825d1a712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465e2bcaf3e1b9cf2a9f93c8a1dc61aaa273b48a4e5736e315b2901825d1a712->enter($__internal_465e2bcaf3e1b9cf2a9f93c8a1dc61aaa273b48a4e5736e315b2901825d1a712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_53d8745900a60f0b17e38c918a4003f3990213f5673987cc0d38aa69523686ac->leave($__internal_53d8745900a60f0b17e38c918a4003f3990213f5673987cc0d38aa69523686ac_prof);

        
        $__internal_465e2bcaf3e1b9cf2a9f93c8a1dc61aaa273b48a4e5736e315b2901825d1a712->leave($__internal_465e2bcaf3e1b9cf2a9f93c8a1dc61aaa273b48a4e5736e315b2901825d1a712_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
