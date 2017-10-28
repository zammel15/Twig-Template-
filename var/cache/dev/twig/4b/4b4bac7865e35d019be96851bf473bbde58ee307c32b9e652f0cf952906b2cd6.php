<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_024288470377192888ead4199769bab088df020cd595f33fcbff42ccd29b7b8a extends Twig_Template
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
        $__internal_0661a946bfd47d5acb5c9ebc0bc055f1fa8f34230207d081a2b6348d5e8f43ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0661a946bfd47d5acb5c9ebc0bc055f1fa8f34230207d081a2b6348d5e8f43ba->enter($__internal_0661a946bfd47d5acb5c9ebc0bc055f1fa8f34230207d081a2b6348d5e8f43ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_4c82ff9194c1454b99ad202945b42dac3d9d99bc3e23c95d9a6daf78007625ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c82ff9194c1454b99ad202945b42dac3d9d99bc3e23c95d9a6daf78007625ab->enter($__internal_4c82ff9194c1454b99ad202945b42dac3d9d99bc3e23c95d9a6daf78007625ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0661a946bfd47d5acb5c9ebc0bc055f1fa8f34230207d081a2b6348d5e8f43ba->leave($__internal_0661a946bfd47d5acb5c9ebc0bc055f1fa8f34230207d081a2b6348d5e8f43ba_prof);

        
        $__internal_4c82ff9194c1454b99ad202945b42dac3d9d99bc3e23c95d9a6daf78007625ab->leave($__internal_4c82ff9194c1454b99ad202945b42dac3d9d99bc3e23c95d9a6daf78007625ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
