<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5096ebed9ce20c0997546982a19b2afde6c8402ec1aa13039992c892897caa01 extends Twig_Template
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
        $__internal_12a87f5d315951aa9833068a87fcfc2c102e32626eb925329d16b02dd8ff8775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12a87f5d315951aa9833068a87fcfc2c102e32626eb925329d16b02dd8ff8775->enter($__internal_12a87f5d315951aa9833068a87fcfc2c102e32626eb925329d16b02dd8ff8775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ccc5c76f5ad23d9e5e819600aac090161914eb03ac829e5b07dbeeb7994102ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc5c76f5ad23d9e5e819600aac090161914eb03ac829e5b07dbeeb7994102ba->enter($__internal_ccc5c76f5ad23d9e5e819600aac090161914eb03ac829e5b07dbeeb7994102ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_12a87f5d315951aa9833068a87fcfc2c102e32626eb925329d16b02dd8ff8775->leave($__internal_12a87f5d315951aa9833068a87fcfc2c102e32626eb925329d16b02dd8ff8775_prof);

        
        $__internal_ccc5c76f5ad23d9e5e819600aac090161914eb03ac829e5b07dbeeb7994102ba->leave($__internal_ccc5c76f5ad23d9e5e819600aac090161914eb03ac829e5b07dbeeb7994102ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
