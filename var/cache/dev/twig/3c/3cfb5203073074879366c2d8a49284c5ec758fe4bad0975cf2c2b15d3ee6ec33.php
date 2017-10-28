<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_72fd6300b4ddef4f6b4d0df648249a09444246f6b3e22c4be1227202c37bf0cf extends Twig_Template
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
        $__internal_e9f9e7dd8a61d825bb0e282778ad2b3cc816054454be85676a352604f4165622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9f9e7dd8a61d825bb0e282778ad2b3cc816054454be85676a352604f4165622->enter($__internal_e9f9e7dd8a61d825bb0e282778ad2b3cc816054454be85676a352604f4165622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_8e1756a4138e7b9208b835ec50e08cea240f0452ef0798ae843f954d523bab55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e1756a4138e7b9208b835ec50e08cea240f0452ef0798ae843f954d523bab55->enter($__internal_8e1756a4138e7b9208b835ec50e08cea240f0452ef0798ae843f954d523bab55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e9f9e7dd8a61d825bb0e282778ad2b3cc816054454be85676a352604f4165622->leave($__internal_e9f9e7dd8a61d825bb0e282778ad2b3cc816054454be85676a352604f4165622_prof);

        
        $__internal_8e1756a4138e7b9208b835ec50e08cea240f0452ef0798ae843f954d523bab55->leave($__internal_8e1756a4138e7b9208b835ec50e08cea240f0452ef0798ae843f954d523bab55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
