<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a570501dfc324ce5dc28f5c23d265313af36c6d5346504601b1e0f1f460642ef extends Twig_Template
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
        $__internal_d6086ecf1ed8bfc69c383c0f6ef613ff97c1b50588ebe4992128cc4eb1566a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6086ecf1ed8bfc69c383c0f6ef613ff97c1b50588ebe4992128cc4eb1566a24->enter($__internal_d6086ecf1ed8bfc69c383c0f6ef613ff97c1b50588ebe4992128cc4eb1566a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_b58303644bc37137758479eb2c4aea036e712b509b1f10b293dc77e35232de4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58303644bc37137758479eb2c4aea036e712b509b1f10b293dc77e35232de4d->enter($__internal_b58303644bc37137758479eb2c4aea036e712b509b1f10b293dc77e35232de4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_d6086ecf1ed8bfc69c383c0f6ef613ff97c1b50588ebe4992128cc4eb1566a24->leave($__internal_d6086ecf1ed8bfc69c383c0f6ef613ff97c1b50588ebe4992128cc4eb1566a24_prof);

        
        $__internal_b58303644bc37137758479eb2c4aea036e712b509b1f10b293dc77e35232de4d->leave($__internal_b58303644bc37137758479eb2c4aea036e712b509b1f10b293dc77e35232de4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
