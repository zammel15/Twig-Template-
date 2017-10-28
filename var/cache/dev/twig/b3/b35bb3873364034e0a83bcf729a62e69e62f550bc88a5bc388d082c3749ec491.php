<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_02ff7772e6e1765fb64da67c413a7224bb31a16f2809104fb06a9bb466ddb3a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_528a26a5ce8a671e9c72ed48d4568537dcaf4c21e0730be06f0198fa9e14c598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_528a26a5ce8a671e9c72ed48d4568537dcaf4c21e0730be06f0198fa9e14c598->enter($__internal_528a26a5ce8a671e9c72ed48d4568537dcaf4c21e0730be06f0198fa9e14c598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_7b666f6de4a9955f715ed4d82e98d46a3dae552f7f94f69527ad60306eaa8eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b666f6de4a9955f715ed4d82e98d46a3dae552f7f94f69527ad60306eaa8eff->enter($__internal_7b666f6de4a9955f715ed4d82e98d46a3dae552f7f94f69527ad60306eaa8eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_528a26a5ce8a671e9c72ed48d4568537dcaf4c21e0730be06f0198fa9e14c598->leave($__internal_528a26a5ce8a671e9c72ed48d4568537dcaf4c21e0730be06f0198fa9e14c598_prof);

        
        $__internal_7b666f6de4a9955f715ed4d82e98d46a3dae552f7f94f69527ad60306eaa8eff->leave($__internal_7b666f6de4a9955f715ed4d82e98d46a3dae552f7f94f69527ad60306eaa8eff_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_46575645ff2cb894c2ae1b986ace79161758e019f55bd222e24db697c8cca09a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46575645ff2cb894c2ae1b986ace79161758e019f55bd222e24db697c8cca09a->enter($__internal_46575645ff2cb894c2ae1b986ace79161758e019f55bd222e24db697c8cca09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dc9a21e2d253c9fd86c72298095e9893ced17316fc612c61a164c90cee0adb1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9a21e2d253c9fd86c72298095e9893ced17316fc612c61a164c90cee0adb1d->enter($__internal_dc9a21e2d253c9fd86c72298095e9893ced17316fc612c61a164c90cee0adb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_dc9a21e2d253c9fd86c72298095e9893ced17316fc612c61a164c90cee0adb1d->leave($__internal_dc9a21e2d253c9fd86c72298095e9893ced17316fc612c61a164c90cee0adb1d_prof);

        
        $__internal_46575645ff2cb894c2ae1b986ace79161758e019f55bd222e24db697c8cca09a->leave($__internal_46575645ff2cb894c2ae1b986ace79161758e019f55bd222e24db697c8cca09a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "D:\\wamp64\\www\\start\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
