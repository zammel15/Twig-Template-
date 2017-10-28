<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_ca14cc9e46bc5dda743fb30cf9ec751e09cd996fcee21589b25733e777815304 extends Twig_Template
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
        $__internal_c8628cd5bd6d8d8f3e3a959c4b58edd3a77611aaf08cfe3f4e73df507cd52c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8628cd5bd6d8d8f3e3a959c4b58edd3a77611aaf08cfe3f4e73df507cd52c98->enter($__internal_c8628cd5bd6d8d8f3e3a959c4b58edd3a77611aaf08cfe3f4e73df507cd52c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_fd5186b844b983ae0f816cbcd9f0eb873313f00b84d317811113cd83a475adf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd5186b844b983ae0f816cbcd9f0eb873313f00b84d317811113cd83a475adf7->enter($__internal_fd5186b844b983ae0f816cbcd9f0eb873313f00b84d317811113cd83a475adf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c8628cd5bd6d8d8f3e3a959c4b58edd3a77611aaf08cfe3f4e73df507cd52c98->leave($__internal_c8628cd5bd6d8d8f3e3a959c4b58edd3a77611aaf08cfe3f4e73df507cd52c98_prof);

        
        $__internal_fd5186b844b983ae0f816cbcd9f0eb873313f00b84d317811113cd83a475adf7->leave($__internal_fd5186b844b983ae0f816cbcd9f0eb873313f00b84d317811113cd83a475adf7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
