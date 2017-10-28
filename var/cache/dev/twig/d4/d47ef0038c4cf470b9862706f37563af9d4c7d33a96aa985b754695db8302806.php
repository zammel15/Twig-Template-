<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_632f9f88fc2145d97c17c0c07658eb07e73ac0d3b4780be9b40dedf3ed13f378 extends Twig_Template
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
        $__internal_f02fc17efcc37eb36a7d27a9e1f53da2918c2cc9b569978d2e6d9aa1fb02f22b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02fc17efcc37eb36a7d27a9e1f53da2918c2cc9b569978d2e6d9aa1fb02f22b->enter($__internal_f02fc17efcc37eb36a7d27a9e1f53da2918c2cc9b569978d2e6d9aa1fb02f22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_b94ff5483796260fc67a8d5fa698bd613a6b73135bae651e1fcecf23c121c1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94ff5483796260fc67a8d5fa698bd613a6b73135bae651e1fcecf23c121c1a1->enter($__internal_b94ff5483796260fc67a8d5fa698bd613a6b73135bae651e1fcecf23c121c1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f02fc17efcc37eb36a7d27a9e1f53da2918c2cc9b569978d2e6d9aa1fb02f22b->leave($__internal_f02fc17efcc37eb36a7d27a9e1f53da2918c2cc9b569978d2e6d9aa1fb02f22b_prof);

        
        $__internal_b94ff5483796260fc67a8d5fa698bd613a6b73135bae651e1fcecf23c121c1a1->leave($__internal_b94ff5483796260fc67a8d5fa698bd613a6b73135bae651e1fcecf23c121c1a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
