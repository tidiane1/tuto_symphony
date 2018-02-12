<?php

/* immobilierBundle:admin:add.html.twig */
class __TwigTemplate_ed8b763c42fda9a2becca2880fccc8c1acbc6583aa5e365dd65af53b5e3312ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "immobilierBundle:admin:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f721751ce0beecd3aa2062f080079508f318995e839010bc0b56b718b5123e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f721751ce0beecd3aa2062f080079508f318995e839010bc0b56b718b5123e9->enter($__internal_5f721751ce0beecd3aa2062f080079508f318995e839010bc0b56b718b5123e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "immobilierBundle:admin:add.html.twig"));

        $__internal_031f058c9aedfe1c902d009f5571eea4874859b2bd20faa5d96ebad50b295fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031f058c9aedfe1c902d009f5571eea4874859b2bd20faa5d96ebad50b295fc7->enter($__internal_031f058c9aedfe1c902d009f5571eea4874859b2bd20faa5d96ebad50b295fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "immobilierBundle:admin:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f721751ce0beecd3aa2062f080079508f318995e839010bc0b56b718b5123e9->leave($__internal_5f721751ce0beecd3aa2062f080079508f318995e839010bc0b56b718b5123e9_prof);

        
        $__internal_031f058c9aedfe1c902d009f5571eea4874859b2bd20faa5d96ebad50b295fc7->leave($__internal_031f058c9aedfe1c902d009f5571eea4874859b2bd20faa5d96ebad50b295fc7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_67dff73d1ef198c1dfd7b6abcec9f5d4d0cadedd1de5306253491987bcb49747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67dff73d1ef198c1dfd7b6abcec9f5d4d0cadedd1de5306253491987bcb49747->enter($__internal_67dff73d1ef198c1dfd7b6abcec9f5d4d0cadedd1de5306253491987bcb49747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b6eec5c3cbd79ded417e30aea65c590cd66692c6cc104b5f4476afb93f0fbfd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6eec5c3cbd79ded417e30aea65c590cd66692c6cc104b5f4476afb93f0fbfd2->enter($__internal_b6eec5c3cbd79ded417e30aea65c590cd66692c6cc104b5f4476afb93f0fbfd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "immobilierBundle:admin:add";
        
        $__internal_b6eec5c3cbd79ded417e30aea65c590cd66692c6cc104b5f4476afb93f0fbfd2->leave($__internal_b6eec5c3cbd79ded417e30aea65c590cd66692c6cc104b5f4476afb93f0fbfd2_prof);

        
        $__internal_67dff73d1ef198c1dfd7b6abcec9f5d4d0cadedd1de5306253491987bcb49747->leave($__internal_67dff73d1ef198c1dfd7b6abcec9f5d4d0cadedd1de5306253491987bcb49747_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3b0215f07b47b6f7014cace62d5b39d2fcafeb8229575f215cc26127ff13989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b0215f07b47b6f7014cace62d5b39d2fcafeb8229575f215cc26127ff13989->enter($__internal_e3b0215f07b47b6f7014cace62d5b39d2fcafeb8229575f215cc26127ff13989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dcbbd3b9b172793515605488786e76aaab4041473087eacd0aacf2d7b77d966c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbbd3b9b172793515605488786e76aaab4041473087eacd0aacf2d7b77d966c->enter($__internal_dcbbd3b9b172793515605488786e76aaab4041473087eacd0aacf2d7b77d966c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_dcbbd3b9b172793515605488786e76aaab4041473087eacd0aacf2d7b77d966c->leave($__internal_dcbbd3b9b172793515605488786e76aaab4041473087eacd0aacf2d7b77d966c_prof);

        
        $__internal_e3b0215f07b47b6f7014cace62d5b39d2fcafeb8229575f215cc26127ff13989->leave($__internal_e3b0215f07b47b6f7014cace62d5b39d2fcafeb8229575f215cc26127ff13989_prof);

    }

    public function getTemplateName()
    {
        return "immobilierBundle:admin:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}immobilierBundle:admin:add{% endblock %}

{% block body %}
{{form(form)}}
{% endblock %}
", "immobilierBundle:admin:add.html.twig", "/var/www/html/tuto_symphony/src/SNT/immobilierBundle/Resources/views/admin/add.html.twig");
    }
}
