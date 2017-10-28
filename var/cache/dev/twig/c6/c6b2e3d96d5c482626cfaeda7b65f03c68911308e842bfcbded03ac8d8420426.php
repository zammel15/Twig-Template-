<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_e3fcb496d78d6ad74a08e9824ae51d83e460b3ac5828e4dcc72e379a43e8e9bb extends Twig_Template
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
        $__internal_3b13123a5ce9bf82232a91361d9a687d9a59285f9f3d2680a9ddf2a2f9158462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b13123a5ce9bf82232a91361d9a687d9a59285f9f3d2680a9ddf2a2f9158462->enter($__internal_3b13123a5ce9bf82232a91361d9a687d9a59285f9f3d2680a9ddf2a2f9158462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_700e34ca301f5bfd2af011f4f3237d65170f27ea2be3fef12226943bce3a743f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_700e34ca301f5bfd2af011f4f3237d65170f27ea2be3fef12226943bce3a743f->enter($__internal_700e34ca301f5bfd2af011f4f3237d65170f27ea2be3fef12226943bce3a743f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_3b13123a5ce9bf82232a91361d9a687d9a59285f9f3d2680a9ddf2a2f9158462->leave($__internal_3b13123a5ce9bf82232a91361d9a687d9a59285f9f3d2680a9ddf2a2f9158462_prof);

        
        $__internal_700e34ca301f5bfd2af011f4f3237d65170f27ea2be3fef12226943bce3a743f->leave($__internal_700e34ca301f5bfd2af011f4f3237d65170f27ea2be3fef12226943bce3a743f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
