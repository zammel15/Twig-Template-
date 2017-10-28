<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_af3ce4d7ff39540adbb581429121ccf8f8b91b8497507213eb8c7fb5765e931f extends Twig_Template
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
        $__internal_6191a4b3f70e26987b3a34c3820d2b7e9814113b1746d74b4d991ae7f0af9499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6191a4b3f70e26987b3a34c3820d2b7e9814113b1746d74b4d991ae7f0af9499->enter($__internal_6191a4b3f70e26987b3a34c3820d2b7e9814113b1746d74b4d991ae7f0af9499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_1651404cc62f4198526f07f0bacc51f6e433af9bc8c7898d01d1ff9dc0663576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1651404cc62f4198526f07f0bacc51f6e433af9bc8c7898d01d1ff9dc0663576->enter($__internal_1651404cc62f4198526f07f0bacc51f6e433af9bc8c7898d01d1ff9dc0663576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_6191a4b3f70e26987b3a34c3820d2b7e9814113b1746d74b4d991ae7f0af9499->leave($__internal_6191a4b3f70e26987b3a34c3820d2b7e9814113b1746d74b4d991ae7f0af9499_prof);

        
        $__internal_1651404cc62f4198526f07f0bacc51f6e433af9bc8c7898d01d1ff9dc0663576->leave($__internal_1651404cc62f4198526f07f0bacc51f6e433af9bc8c7898d01d1ff9dc0663576_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
