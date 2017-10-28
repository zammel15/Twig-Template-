<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_79bfd4d65b061e1a85c1b5faedbb195e09a23659d5a738ae4d791ffb99ea70ff extends Twig_Template
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
        $__internal_eb86d13ac01e0b0816b37c2dbda67f021fd426ace1eac6612540133cb4e6763b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb86d13ac01e0b0816b37c2dbda67f021fd426ace1eac6612540133cb4e6763b->enter($__internal_eb86d13ac01e0b0816b37c2dbda67f021fd426ace1eac6612540133cb4e6763b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_df2cd8be47e4962e58ebc9febcd54cf0735a77a4419f5a065e2bd67c9c9d3037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2cd8be47e4962e58ebc9febcd54cf0735a77a4419f5a065e2bd67c9c9d3037->enter($__internal_df2cd8be47e4962e58ebc9febcd54cf0735a77a4419f5a065e2bd67c9c9d3037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_eb86d13ac01e0b0816b37c2dbda67f021fd426ace1eac6612540133cb4e6763b->leave($__internal_eb86d13ac01e0b0816b37c2dbda67f021fd426ace1eac6612540133cb4e6763b_prof);

        
        $__internal_df2cd8be47e4962e58ebc9febcd54cf0735a77a4419f5a065e2bd67c9c9d3037->leave($__internal_df2cd8be47e4962e58ebc9febcd54cf0735a77a4419f5a065e2bd67c9c9d3037_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
