<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_7f6346e085aff589da08052b3741a617b9cecd465388e5e1d750c0c0866acee4 extends Twig_Template
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
        $__internal_900389e295691690e7895dc1f0f97f5e44d39c2e616e749323306b3e0b371588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_900389e295691690e7895dc1f0f97f5e44d39c2e616e749323306b3e0b371588->enter($__internal_900389e295691690e7895dc1f0f97f5e44d39c2e616e749323306b3e0b371588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_c066fcda740bbfa4b58ba8e9ae98cef82c66d15dd30b7df02196e536d905bc32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c066fcda740bbfa4b58ba8e9ae98cef82c66d15dd30b7df02196e536d905bc32->enter($__internal_c066fcda740bbfa4b58ba8e9ae98cef82c66d15dd30b7df02196e536d905bc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_900389e295691690e7895dc1f0f97f5e44d39c2e616e749323306b3e0b371588->leave($__internal_900389e295691690e7895dc1f0f97f5e44d39c2e616e749323306b3e0b371588_prof);

        
        $__internal_c066fcda740bbfa4b58ba8e9ae98cef82c66d15dd30b7df02196e536d905bc32->leave($__internal_c066fcda740bbfa4b58ba8e9ae98cef82c66d15dd30b7df02196e536d905bc32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
