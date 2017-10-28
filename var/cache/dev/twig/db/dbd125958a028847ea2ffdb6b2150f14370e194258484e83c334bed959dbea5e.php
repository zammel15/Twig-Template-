<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_44a2dfd45b22be3df9f8433a5129c4c25de8fde3295e5e4fc1a35ff78aa89cd2 extends Twig_Template
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
        $__internal_0d99cd2818c5a37c00e8cee4e93c46fe522aea78c263117bfe665a05088d4282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d99cd2818c5a37c00e8cee4e93c46fe522aea78c263117bfe665a05088d4282->enter($__internal_0d99cd2818c5a37c00e8cee4e93c46fe522aea78c263117bfe665a05088d4282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_8e2c7fa131245d8840961769eeae769dac6329abe164862427fee5238a425907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2c7fa131245d8840961769eeae769dac6329abe164862427fee5238a425907->enter($__internal_8e2c7fa131245d8840961769eeae769dac6329abe164862427fee5238a425907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0d99cd2818c5a37c00e8cee4e93c46fe522aea78c263117bfe665a05088d4282->leave($__internal_0d99cd2818c5a37c00e8cee4e93c46fe522aea78c263117bfe665a05088d4282_prof);

        
        $__internal_8e2c7fa131245d8840961769eeae769dac6329abe164862427fee5238a425907->leave($__internal_8e2c7fa131245d8840961769eeae769dac6329abe164862427fee5238a425907_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
