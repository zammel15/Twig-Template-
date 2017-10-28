<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c23e70cfbf7102f384e5e06ec512a098e7f56aa05e108e9939e8c3d1202d1cb6 extends Twig_Template
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
        $__internal_a974431c6745948073a5b2e7ff32c2d66d8d73ee39e542d214ae83e66770a61c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a974431c6745948073a5b2e7ff32c2d66d8d73ee39e542d214ae83e66770a61c->enter($__internal_a974431c6745948073a5b2e7ff32c2d66d8d73ee39e542d214ae83e66770a61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_79ba306ef8c8e61180c7dfbf03336e4c33285368d83961353abe1d285eec7942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ba306ef8c8e61180c7dfbf03336e4c33285368d83961353abe1d285eec7942->enter($__internal_79ba306ef8c8e61180c7dfbf03336e4c33285368d83961353abe1d285eec7942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a974431c6745948073a5b2e7ff32c2d66d8d73ee39e542d214ae83e66770a61c->leave($__internal_a974431c6745948073a5b2e7ff32c2d66d8d73ee39e542d214ae83e66770a61c_prof);

        
        $__internal_79ba306ef8c8e61180c7dfbf03336e4c33285368d83961353abe1d285eec7942->leave($__internal_79ba306ef8c8e61180c7dfbf03336e4c33285368d83961353abe1d285eec7942_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
