<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_3141ba5f00fffe9d038a8a43edae70ef24b42c17e84e999b7ad3fac89908eb97 extends Twig_Template
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
        $__internal_0a82ab05179a6c29ee4940002c875e6f4a812b34f91f30b6be63d584e3068285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a82ab05179a6c29ee4940002c875e6f4a812b34f91f30b6be63d584e3068285->enter($__internal_0a82ab05179a6c29ee4940002c875e6f4a812b34f91f30b6be63d584e3068285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7ea5313b0023ff4e100e009ca6f0ec48dbf6ce64fed3bc5dd56019e2e50502f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea5313b0023ff4e100e009ca6f0ec48dbf6ce64fed3bc5dd56019e2e50502f4->enter($__internal_7ea5313b0023ff4e100e009ca6f0ec48dbf6ce64fed3bc5dd56019e2e50502f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0a82ab05179a6c29ee4940002c875e6f4a812b34f91f30b6be63d584e3068285->leave($__internal_0a82ab05179a6c29ee4940002c875e6f4a812b34f91f30b6be63d584e3068285_prof);

        
        $__internal_7ea5313b0023ff4e100e009ca6f0ec48dbf6ce64fed3bc5dd56019e2e50502f4->leave($__internal_7ea5313b0023ff4e100e009ca6f0ec48dbf6ce64fed3bc5dd56019e2e50502f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
