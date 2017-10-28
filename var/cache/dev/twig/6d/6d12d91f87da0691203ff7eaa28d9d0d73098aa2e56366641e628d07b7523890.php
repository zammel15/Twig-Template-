<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_29b4e57361ba5018a993461564b6994a78a3c88f753dbb02f82a94100b19bd61 extends Twig_Template
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
        $__internal_be7cb23763fa3b6aa72a4b497c1fdc1ee7420d618122dfc1f4ab02fa41d003e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be7cb23763fa3b6aa72a4b497c1fdc1ee7420d618122dfc1f4ab02fa41d003e8->enter($__internal_be7cb23763fa3b6aa72a4b497c1fdc1ee7420d618122dfc1f4ab02fa41d003e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_58b4cf3501780a6d9b8e0e2bdd0d62a650e59419f6681355c0a524f35a55a793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b4cf3501780a6d9b8e0e2bdd0d62a650e59419f6681355c0a524f35a55a793->enter($__internal_58b4cf3501780a6d9b8e0e2bdd0d62a650e59419f6681355c0a524f35a55a793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_be7cb23763fa3b6aa72a4b497c1fdc1ee7420d618122dfc1f4ab02fa41d003e8->leave($__internal_be7cb23763fa3b6aa72a4b497c1fdc1ee7420d618122dfc1f4ab02fa41d003e8_prof);

        
        $__internal_58b4cf3501780a6d9b8e0e2bdd0d62a650e59419f6681355c0a524f35a55a793->leave($__internal_58b4cf3501780a6d9b8e0e2bdd0d62a650e59419f6681355c0a524f35a55a793_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
