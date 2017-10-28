<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_aa21744b1f031ce717416b02a00132d333fc4e1effa93895c9a8caab3e5ce0c4 extends Twig_Template
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
        $__internal_f53dd26acce97918b26ae7bfb31bc8c518098b445ff92cf8e94e9662392b288d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f53dd26acce97918b26ae7bfb31bc8c518098b445ff92cf8e94e9662392b288d->enter($__internal_f53dd26acce97918b26ae7bfb31bc8c518098b445ff92cf8e94e9662392b288d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_47518e851c9b4108c1847c015efe2f013951cc5c2d4eea116695ecc968242c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47518e851c9b4108c1847c015efe2f013951cc5c2d4eea116695ecc968242c35->enter($__internal_47518e851c9b4108c1847c015efe2f013951cc5c2d4eea116695ecc968242c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f53dd26acce97918b26ae7bfb31bc8c518098b445ff92cf8e94e9662392b288d->leave($__internal_f53dd26acce97918b26ae7bfb31bc8c518098b445ff92cf8e94e9662392b288d_prof);

        
        $__internal_47518e851c9b4108c1847c015efe2f013951cc5c2d4eea116695ecc968242c35->leave($__internal_47518e851c9b4108c1847c015efe2f013951cc5c2d4eea116695ecc968242c35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
