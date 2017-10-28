<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b9f3b5559f0b4c1da2be86a8701e18c41d6f662219d33658f2d1c6e4fa978707 extends Twig_Template
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
        $__internal_ed566ab329aa79d2455e6e0cb09b8680f9b2d7ed2909227e9191cb4c51afa775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed566ab329aa79d2455e6e0cb09b8680f9b2d7ed2909227e9191cb4c51afa775->enter($__internal_ed566ab329aa79d2455e6e0cb09b8680f9b2d7ed2909227e9191cb4c51afa775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_4ff0912bf435f30101b9b27ab148d60405b14e70d66bdf9fad9c51b6584ff431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff0912bf435f30101b9b27ab148d60405b14e70d66bdf9fad9c51b6584ff431->enter($__internal_4ff0912bf435f30101b9b27ab148d60405b14e70d66bdf9fad9c51b6584ff431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ed566ab329aa79d2455e6e0cb09b8680f9b2d7ed2909227e9191cb4c51afa775->leave($__internal_ed566ab329aa79d2455e6e0cb09b8680f9b2d7ed2909227e9191cb4c51afa775_prof);

        
        $__internal_4ff0912bf435f30101b9b27ab148d60405b14e70d66bdf9fad9c51b6584ff431->leave($__internal_4ff0912bf435f30101b9b27ab148d60405b14e70d66bdf9fad9c51b6584ff431_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
