<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_9a56e17b914b6eedf3ca6497a2002c87c9b512e911c6167a478f735b17a28cd4 extends Twig_Template
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
        $__internal_e5cf1ece4ffb129d3f918846f17081d9ca9346e05e05692e4b195517f4faa1c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5cf1ece4ffb129d3f918846f17081d9ca9346e05e05692e4b195517f4faa1c3->enter($__internal_e5cf1ece4ffb129d3f918846f17081d9ca9346e05e05692e4b195517f4faa1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_89ac918fceda51ed9f6fab7e0739214e24c1969be8909d1a349ac6c436746938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ac918fceda51ed9f6fab7e0739214e24c1969be8909d1a349ac6c436746938->enter($__internal_89ac918fceda51ed9f6fab7e0739214e24c1969be8909d1a349ac6c436746938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e5cf1ece4ffb129d3f918846f17081d9ca9346e05e05692e4b195517f4faa1c3->leave($__internal_e5cf1ece4ffb129d3f918846f17081d9ca9346e05e05692e4b195517f4faa1c3_prof);

        
        $__internal_89ac918fceda51ed9f6fab7e0739214e24c1969be8909d1a349ac6c436746938->leave($__internal_89ac918fceda51ed9f6fab7e0739214e24c1969be8909d1a349ac6c436746938_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
