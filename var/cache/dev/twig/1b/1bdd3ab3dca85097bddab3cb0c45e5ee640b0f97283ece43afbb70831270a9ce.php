<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5ef5fdcbd8e59e41d8e204de695fae57b99b330299ee5af075e3080585f2d041 extends Twig_Template
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
        $__internal_1e80f29120a20d4722a77830ce57a68291cab7348b6413f99616c4c084dd32ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e80f29120a20d4722a77830ce57a68291cab7348b6413f99616c4c084dd32ab->enter($__internal_1e80f29120a20d4722a77830ce57a68291cab7348b6413f99616c4c084dd32ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_864b02234b7e21860251d899428f255f01b68de7e3f945174c8b9b2e3863d9f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864b02234b7e21860251d899428f255f01b68de7e3f945174c8b9b2e3863d9f1->enter($__internal_864b02234b7e21860251d899428f255f01b68de7e3f945174c8b9b2e3863d9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1e80f29120a20d4722a77830ce57a68291cab7348b6413f99616c4c084dd32ab->leave($__internal_1e80f29120a20d4722a77830ce57a68291cab7348b6413f99616c4c084dd32ab_prof);

        
        $__internal_864b02234b7e21860251d899428f255f01b68de7e3f945174c8b9b2e3863d9f1->leave($__internal_864b02234b7e21860251d899428f255f01b68de7e3f945174c8b9b2e3863d9f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
