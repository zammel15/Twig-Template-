<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_eaeab935bc4448855620744d685b9fb6ed83ae3857aad54f5bb6d1aec109cc2c extends Twig_Template
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
        $__internal_b380e7ccef5db39591538a0d6b1b27ebd2b588c3bbef1283fae596b9a46bd270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b380e7ccef5db39591538a0d6b1b27ebd2b588c3bbef1283fae596b9a46bd270->enter($__internal_b380e7ccef5db39591538a0d6b1b27ebd2b588c3bbef1283fae596b9a46bd270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_a602a05aa935deb8868cf7c5aedcb4342ab687190c5d60e05fd38c942e8d96e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a602a05aa935deb8868cf7c5aedcb4342ab687190c5d60e05fd38c942e8d96e0->enter($__internal_a602a05aa935deb8868cf7c5aedcb4342ab687190c5d60e05fd38c942e8d96e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b380e7ccef5db39591538a0d6b1b27ebd2b588c3bbef1283fae596b9a46bd270->leave($__internal_b380e7ccef5db39591538a0d6b1b27ebd2b588c3bbef1283fae596b9a46bd270_prof);

        
        $__internal_a602a05aa935deb8868cf7c5aedcb4342ab687190c5d60e05fd38c942e8d96e0->leave($__internal_a602a05aa935deb8868cf7c5aedcb4342ab687190c5d60e05fd38c942e8d96e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
