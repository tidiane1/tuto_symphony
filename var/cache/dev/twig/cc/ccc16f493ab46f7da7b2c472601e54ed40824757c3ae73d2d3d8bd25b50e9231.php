<?php

/* immobilierBundle:admin:edit.html.twig */
class __TwigTemplate_66729638da9944b8440cd9db8a05321f0f2be5ccf266ca5a68ce73e92d2164dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "immobilierBundle:admin:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_090ef863f952414f0838a62a30ced817b214475237c4a21ea7339e5045540ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090ef863f952414f0838a62a30ced817b214475237c4a21ea7339e5045540ed4->enter($__internal_090ef863f952414f0838a62a30ced817b214475237c4a21ea7339e5045540ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "immobilierBundle:admin:edit.html.twig"));

        $__internal_49ccb5a7934afccda4061916a207a5bcefa230adce08c45aad90b8d5ec5b553f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ccb5a7934afccda4061916a207a5bcefa230adce08c45aad90b8d5ec5b553f->enter($__internal_49ccb5a7934afccda4061916a207a5bcefa230adce08c45aad90b8d5ec5b553f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "immobilierBundle:admin:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_090ef863f952414f0838a62a30ced817b214475237c4a21ea7339e5045540ed4->leave($__internal_090ef863f952414f0838a62a30ced817b214475237c4a21ea7339e5045540ed4_prof);

        
        $__internal_49ccb5a7934afccda4061916a207a5bcefa230adce08c45aad90b8d5ec5b553f->leave($__internal_49ccb5a7934afccda4061916a207a5bcefa230adce08c45aad90b8d5ec5b553f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5a6e58670bbee02cdf6548b64573aefd2ca1bf475c8992129f27415e770d81c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5a6e58670bbee02cdf6548b64573aefd2ca1bf475c8992129f27415e770d81c->enter($__internal_e5a6e58670bbee02cdf6548b64573aefd2ca1bf475c8992129f27415e770d81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23fc0f2a70a46624b7b0afae907c41ab50a61392edcd762242e3a7da64b6778a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23fc0f2a70a46624b7b0afae907c41ab50a61392edcd762242e3a7da64b6778a->enter($__internal_23fc0f2a70a46624b7b0afae907c41ab50a61392edcd762242e3a7da64b6778a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_23fc0f2a70a46624b7b0afae907c41ab50a61392edcd762242e3a7da64b6778a->leave($__internal_23fc0f2a70a46624b7b0afae907c41ab50a61392edcd762242e3a7da64b6778a_prof);

        
        $__internal_e5a6e58670bbee02cdf6548b64573aefd2ca1bf475c8992129f27415e770d81c->leave($__internal_e5a6e58670bbee02cdf6548b64573aefd2ca1bf475c8992129f27415e770d81c_prof);

    }

    public function getTemplateName()
    {
        return "immobilierBundle:admin:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}


{% block body %}
{{form(form)}}
{% endblock %}", "immobilierBundle:admin:edit.html.twig", "/var/www/html/tuto_symphony/src/SNT/immobilierBundle/Resources/views/admin/edit.html.twig");
    }
}
