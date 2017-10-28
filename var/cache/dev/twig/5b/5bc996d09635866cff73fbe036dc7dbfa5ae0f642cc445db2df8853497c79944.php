<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_dd80b7cc68abb463b9179ed701ef54ded99f06ebc591077b7e4ea52f8146ae57 extends Twig_Template
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
        $__internal_acb93328ff22638cc656856faff94e888fdc8d1efc19860043c48a0bccd0edd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acb93328ff22638cc656856faff94e888fdc8d1efc19860043c48a0bccd0edd7->enter($__internal_acb93328ff22638cc656856faff94e888fdc8d1efc19860043c48a0bccd0edd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_d0d01afcf28d85fbd7d54fbf068193aca8c52579de583a22b369b25ca6d1bd87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d01afcf28d85fbd7d54fbf068193aca8c52579de583a22b369b25ca6d1bd87->enter($__internal_d0d01afcf28d85fbd7d54fbf068193aca8c52579de583a22b369b25ca6d1bd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_acb93328ff22638cc656856faff94e888fdc8d1efc19860043c48a0bccd0edd7->leave($__internal_acb93328ff22638cc656856faff94e888fdc8d1efc19860043c48a0bccd0edd7_prof);

        
        $__internal_d0d01afcf28d85fbd7d54fbf068193aca8c52579de583a22b369b25ca6d1bd87->leave($__internal_d0d01afcf28d85fbd7d54fbf068193aca8c52579de583a22b369b25ca6d1bd87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
