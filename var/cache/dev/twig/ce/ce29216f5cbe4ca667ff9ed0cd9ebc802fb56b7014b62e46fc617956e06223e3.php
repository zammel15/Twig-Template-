<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5ba5cc483ed4a4c2d0fca33b5408499bb0b53e1f9fe0f89e18e7746ffef2baf1 extends Twig_Template
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
        $__internal_8863df69b1b8cda923a53a28d69af770caba20fc93690a1c7df2386b1f80ca41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8863df69b1b8cda923a53a28d69af770caba20fc93690a1c7df2386b1f80ca41->enter($__internal_8863df69b1b8cda923a53a28d69af770caba20fc93690a1c7df2386b1f80ca41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_0d500c5e6687f7d4fec517ef1ad467221b8a951b49facf29d611575fbfb39a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d500c5e6687f7d4fec517ef1ad467221b8a951b49facf29d611575fbfb39a29->enter($__internal_0d500c5e6687f7d4fec517ef1ad467221b8a951b49facf29d611575fbfb39a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8863df69b1b8cda923a53a28d69af770caba20fc93690a1c7df2386b1f80ca41->leave($__internal_8863df69b1b8cda923a53a28d69af770caba20fc93690a1c7df2386b1f80ca41_prof);

        
        $__internal_0d500c5e6687f7d4fec517ef1ad467221b8a951b49facf29d611575fbfb39a29->leave($__internal_0d500c5e6687f7d4fec517ef1ad467221b8a951b49facf29d611575fbfb39a29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
