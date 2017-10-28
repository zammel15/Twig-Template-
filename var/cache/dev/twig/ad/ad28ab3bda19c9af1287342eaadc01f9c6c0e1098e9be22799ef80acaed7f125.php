<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_426c944d81bb0cddbf77f512f22dd39058cfc0c87171becb6444324fa107e8c4 extends Twig_Template
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
        $__internal_e00840686c1823aaf4e18248f9930f86cce91544c985e35a5a221211a4418782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00840686c1823aaf4e18248f9930f86cce91544c985e35a5a221211a4418782->enter($__internal_e00840686c1823aaf4e18248f9930f86cce91544c985e35a5a221211a4418782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_6ed0ba8de987672f52a76734955858c3d2e8273a02073d7dae5aab2278170c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed0ba8de987672f52a76734955858c3d2e8273a02073d7dae5aab2278170c0f->enter($__internal_6ed0ba8de987672f52a76734955858c3d2e8273a02073d7dae5aab2278170c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_e00840686c1823aaf4e18248f9930f86cce91544c985e35a5a221211a4418782->leave($__internal_e00840686c1823aaf4e18248f9930f86cce91544c985e35a5a221211a4418782_prof);

        
        $__internal_6ed0ba8de987672f52a76734955858c3d2e8273a02073d7dae5aab2278170c0f->leave($__internal_6ed0ba8de987672f52a76734955858c3d2e8273a02073d7dae5aab2278170c0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
