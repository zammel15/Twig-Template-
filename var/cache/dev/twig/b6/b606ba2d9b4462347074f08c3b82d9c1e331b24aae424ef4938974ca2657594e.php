<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e06caeb0ad801761b224feb40ea526fe3eb6460ddbc23d7e91d273e6aeca1dfe extends Twig_Template
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
        $__internal_95d94db09779185357dcc90e3b7c3f2be5080ca6933cf91a89c489013cdd46bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d94db09779185357dcc90e3b7c3f2be5080ca6933cf91a89c489013cdd46bb->enter($__internal_95d94db09779185357dcc90e3b7c3f2be5080ca6933cf91a89c489013cdd46bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e332846ac0078157c289c50c8ac9077b26760a7830f8d7edb76def58a7ac3652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e332846ac0078157c289c50c8ac9077b26760a7830f8d7edb76def58a7ac3652->enter($__internal_e332846ac0078157c289c50c8ac9077b26760a7830f8d7edb76def58a7ac3652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_95d94db09779185357dcc90e3b7c3f2be5080ca6933cf91a89c489013cdd46bb->leave($__internal_95d94db09779185357dcc90e3b7c3f2be5080ca6933cf91a89c489013cdd46bb_prof);

        
        $__internal_e332846ac0078157c289c50c8ac9077b26760a7830f8d7edb76def58a7ac3652->leave($__internal_e332846ac0078157c289c50c8ac9077b26760a7830f8d7edb76def58a7ac3652_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
