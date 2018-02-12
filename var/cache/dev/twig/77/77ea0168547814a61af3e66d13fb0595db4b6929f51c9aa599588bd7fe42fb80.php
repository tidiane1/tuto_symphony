<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a45254030d9cc98b662ca4ab41f1a18fca407871221561dd5b3a8f7c6d58d3e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e11b9576f0793d8ac327e294be8771302306cee9523380565e062995782b1cc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e11b9576f0793d8ac327e294be8771302306cee9523380565e062995782b1cc6->enter($__internal_e11b9576f0793d8ac327e294be8771302306cee9523380565e062995782b1cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a5ac754831e13d8b118578a86ef350f99415498b39e72dbf4597de7586499ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ac754831e13d8b118578a86ef350f99415498b39e72dbf4597de7586499ffe->enter($__internal_a5ac754831e13d8b118578a86ef350f99415498b39e72dbf4597de7586499ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e11b9576f0793d8ac327e294be8771302306cee9523380565e062995782b1cc6->leave($__internal_e11b9576f0793d8ac327e294be8771302306cee9523380565e062995782b1cc6_prof);

        
        $__internal_a5ac754831e13d8b118578a86ef350f99415498b39e72dbf4597de7586499ffe->leave($__internal_a5ac754831e13d8b118578a86ef350f99415498b39e72dbf4597de7586499ffe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a10092c3f72b3c5f761c643c341a0c9c2fa8cd53c91680087e30d2ac01ed725e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a10092c3f72b3c5f761c643c341a0c9c2fa8cd53c91680087e30d2ac01ed725e->enter($__internal_a10092c3f72b3c5f761c643c341a0c9c2fa8cd53c91680087e30d2ac01ed725e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a24b6e53c7c4614792b7101fab74ecf25156f9296f5b7334c99e1f402716b466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24b6e53c7c4614792b7101fab74ecf25156f9296f5b7334c99e1f402716b466->enter($__internal_a24b6e53c7c4614792b7101fab74ecf25156f9296f5b7334c99e1f402716b466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a24b6e53c7c4614792b7101fab74ecf25156f9296f5b7334c99e1f402716b466->leave($__internal_a24b6e53c7c4614792b7101fab74ecf25156f9296f5b7334c99e1f402716b466_prof);

        
        $__internal_a10092c3f72b3c5f761c643c341a0c9c2fa8cd53c91680087e30d2ac01ed725e->leave($__internal_a10092c3f72b3c5f761c643c341a0c9c2fa8cd53c91680087e30d2ac01ed725e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d11b8f806c007fdad8be5a98e3cfd16cf6d5f130711ab7935169b1794020abaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11b8f806c007fdad8be5a98e3cfd16cf6d5f130711ab7935169b1794020abaf->enter($__internal_d11b8f806c007fdad8be5a98e3cfd16cf6d5f130711ab7935169b1794020abaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e32aa91f2a19afe28765c1f767e73143305ec816a5d88efeb9929a739ada29c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32aa91f2a19afe28765c1f767e73143305ec816a5d88efeb9929a739ada29c7->enter($__internal_e32aa91f2a19afe28765c1f767e73143305ec816a5d88efeb9929a739ada29c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e32aa91f2a19afe28765c1f767e73143305ec816a5d88efeb9929a739ada29c7->leave($__internal_e32aa91f2a19afe28765c1f767e73143305ec816a5d88efeb9929a739ada29c7_prof);

        
        $__internal_d11b8f806c007fdad8be5a98e3cfd16cf6d5f130711ab7935169b1794020abaf->leave($__internal_d11b8f806c007fdad8be5a98e3cfd16cf6d5f130711ab7935169b1794020abaf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1c49809f646bd91d69678f74aef9ee14352c7a9c421d1ea39b34e2bb1f1dbfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1c49809f646bd91d69678f74aef9ee14352c7a9c421d1ea39b34e2bb1f1dbfe->enter($__internal_a1c49809f646bd91d69678f74aef9ee14352c7a9c421d1ea39b34e2bb1f1dbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aa5924cebc97e3760b7774025bef07ed0d332ceb971615f22322eff39ff65733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5924cebc97e3760b7774025bef07ed0d332ceb971615f22322eff39ff65733->enter($__internal_aa5924cebc97e3760b7774025bef07ed0d332ceb971615f22322eff39ff65733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aa5924cebc97e3760b7774025bef07ed0d332ceb971615f22322eff39ff65733->leave($__internal_aa5924cebc97e3760b7774025bef07ed0d332ceb971615f22322eff39ff65733_prof);

        
        $__internal_a1c49809f646bd91d69678f74aef9ee14352c7a9c421d1ea39b34e2bb1f1dbfe->leave($__internal_a1c49809f646bd91d69678f74aef9ee14352c7a9c421d1ea39b34e2bb1f1dbfe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/tuto_symphony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
