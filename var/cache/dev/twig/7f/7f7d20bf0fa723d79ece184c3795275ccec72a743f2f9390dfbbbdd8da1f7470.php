<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8036970b2f6c4eebcb26741f343431e46198547e170ecb11af2f9ef3d6502a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9e000c46803988c8627a9fa533c0bd5d6304e984729131bcee7e2b8b2b25be36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e000c46803988c8627a9fa533c0bd5d6304e984729131bcee7e2b8b2b25be36->enter($__internal_9e000c46803988c8627a9fa533c0bd5d6304e984729131bcee7e2b8b2b25be36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_352df860402e9bda79c4c01d605e3407e2d671d83106832e14df42391f332c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352df860402e9bda79c4c01d605e3407e2d671d83106832e14df42391f332c35->enter($__internal_352df860402e9bda79c4c01d605e3407e2d671d83106832e14df42391f332c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e000c46803988c8627a9fa533c0bd5d6304e984729131bcee7e2b8b2b25be36->leave($__internal_9e000c46803988c8627a9fa533c0bd5d6304e984729131bcee7e2b8b2b25be36_prof);

        
        $__internal_352df860402e9bda79c4c01d605e3407e2d671d83106832e14df42391f332c35->leave($__internal_352df860402e9bda79c4c01d605e3407e2d671d83106832e14df42391f332c35_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1a2caaad2661dbde835d82c3c9da2b1dbd42671d86f9376d0b640b6c84d89bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a2caaad2661dbde835d82c3c9da2b1dbd42671d86f9376d0b640b6c84d89bb->enter($__internal_d1a2caaad2661dbde835d82c3c9da2b1dbd42671d86f9376d0b640b6c84d89bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cd32ccc883f3d7a80eba4735f5ff44b61f9b97e24c3b066f7c4638b7d36d6fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd32ccc883f3d7a80eba4735f5ff44b61f9b97e24c3b066f7c4638b7d36d6fd2->enter($__internal_cd32ccc883f3d7a80eba4735f5ff44b61f9b97e24c3b066f7c4638b7d36d6fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_cd32ccc883f3d7a80eba4735f5ff44b61f9b97e24c3b066f7c4638b7d36d6fd2->leave($__internal_cd32ccc883f3d7a80eba4735f5ff44b61f9b97e24c3b066f7c4638b7d36d6fd2_prof);

        
        $__internal_d1a2caaad2661dbde835d82c3c9da2b1dbd42671d86f9376d0b640b6c84d89bb->leave($__internal_d1a2caaad2661dbde835d82c3c9da2b1dbd42671d86f9376d0b640b6c84d89bb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e0005b54e6f04e0c63114b9ba9d1b1e01e25ec3eb485daf27d13c7f53a69382b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0005b54e6f04e0c63114b9ba9d1b1e01e25ec3eb485daf27d13c7f53a69382b->enter($__internal_e0005b54e6f04e0c63114b9ba9d1b1e01e25ec3eb485daf27d13c7f53a69382b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_651d2fe67b715a61e3c8a0ffbda4415bf636054f3654832e5b212d9aba921602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651d2fe67b715a61e3c8a0ffbda4415bf636054f3654832e5b212d9aba921602->enter($__internal_651d2fe67b715a61e3c8a0ffbda4415bf636054f3654832e5b212d9aba921602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_651d2fe67b715a61e3c8a0ffbda4415bf636054f3654832e5b212d9aba921602->leave($__internal_651d2fe67b715a61e3c8a0ffbda4415bf636054f3654832e5b212d9aba921602_prof);

        
        $__internal_e0005b54e6f04e0c63114b9ba9d1b1e01e25ec3eb485daf27d13c7f53a69382b->leave($__internal_e0005b54e6f04e0c63114b9ba9d1b1e01e25ec3eb485daf27d13c7f53a69382b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d57e191fffe40f4aec331845361be374ba5eb8268e7627c721cd600d9b455fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d57e191fffe40f4aec331845361be374ba5eb8268e7627c721cd600d9b455fc->enter($__internal_1d57e191fffe40f4aec331845361be374ba5eb8268e7627c721cd600d9b455fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_acf6159d86ca86c1912482769a6db9f790e471c174c12a73f8cb4e0d0711dbb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf6159d86ca86c1912482769a6db9f790e471c174c12a73f8cb4e0d0711dbb4->enter($__internal_acf6159d86ca86c1912482769a6db9f790e471c174c12a73f8cb4e0d0711dbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_acf6159d86ca86c1912482769a6db9f790e471c174c12a73f8cb4e0d0711dbb4->leave($__internal_acf6159d86ca86c1912482769a6db9f790e471c174c12a73f8cb4e0d0711dbb4_prof);

        
        $__internal_1d57e191fffe40f4aec331845361be374ba5eb8268e7627c721cd600d9b455fc->leave($__internal_1d57e191fffe40f4aec331845361be374ba5eb8268e7627c721cd600d9b455fc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/tuto_symphony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
