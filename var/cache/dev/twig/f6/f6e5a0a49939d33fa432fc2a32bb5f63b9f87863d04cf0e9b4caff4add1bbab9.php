<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_90aa7d27b5422ef3dabff398945722b09baa1cdca485189c8e6c2148e539afd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4fbfef3433d6826650ce20bef9c26dcb6a5964a1ef2ed5730c44d9bbc2bcadc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4fbfef3433d6826650ce20bef9c26dcb6a5964a1ef2ed5730c44d9bbc2bcadc->enter($__internal_e4fbfef3433d6826650ce20bef9c26dcb6a5964a1ef2ed5730c44d9bbc2bcadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_024b01e54ab5ada5d462017c08b624575546ec2496f3c369d5443105ba431505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_024b01e54ab5ada5d462017c08b624575546ec2496f3c369d5443105ba431505->enter($__internal_024b01e54ab5ada5d462017c08b624575546ec2496f3c369d5443105ba431505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4fbfef3433d6826650ce20bef9c26dcb6a5964a1ef2ed5730c44d9bbc2bcadc->leave($__internal_e4fbfef3433d6826650ce20bef9c26dcb6a5964a1ef2ed5730c44d9bbc2bcadc_prof);

        
        $__internal_024b01e54ab5ada5d462017c08b624575546ec2496f3c369d5443105ba431505->leave($__internal_024b01e54ab5ada5d462017c08b624575546ec2496f3c369d5443105ba431505_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_fd1d062d0cf24b2c330f66c5ca134ad06282c6ecdd48db77aa4bd4963a796640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd1d062d0cf24b2c330f66c5ca134ad06282c6ecdd48db77aa4bd4963a796640->enter($__internal_fd1d062d0cf24b2c330f66c5ca134ad06282c6ecdd48db77aa4bd4963a796640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c403fb0422f49cdcb85d29c507d5ebdc837002188b3fa96c132450209408caf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c403fb0422f49cdcb85d29c507d5ebdc837002188b3fa96c132450209408caf4->enter($__internal_c403fb0422f49cdcb85d29c507d5ebdc837002188b3fa96c132450209408caf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_c403fb0422f49cdcb85d29c507d5ebdc837002188b3fa96c132450209408caf4->leave($__internal_c403fb0422f49cdcb85d29c507d5ebdc837002188b3fa96c132450209408caf4_prof);

        
        $__internal_fd1d062d0cf24b2c330f66c5ca134ad06282c6ecdd48db77aa4bd4963a796640->leave($__internal_fd1d062d0cf24b2c330f66c5ca134ad06282c6ecdd48db77aa4bd4963a796640_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_edccdcb86d6f65d990eabc941696efd127002634b2cab9340c3de5e57061cde3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edccdcb86d6f65d990eabc941696efd127002634b2cab9340c3de5e57061cde3->enter($__internal_edccdcb86d6f65d990eabc941696efd127002634b2cab9340c3de5e57061cde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9bfc0fabf3d425bd19d38f56b9a52c7cf55565b2167075e3f39d66c3255e1181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bfc0fabf3d425bd19d38f56b9a52c7cf55565b2167075e3f39d66c3255e1181->enter($__internal_9bfc0fabf3d425bd19d38f56b9a52c7cf55565b2167075e3f39d66c3255e1181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_9bfc0fabf3d425bd19d38f56b9a52c7cf55565b2167075e3f39d66c3255e1181->leave($__internal_9bfc0fabf3d425bd19d38f56b9a52c7cf55565b2167075e3f39d66c3255e1181_prof);

        
        $__internal_edccdcb86d6f65d990eabc941696efd127002634b2cab9340c3de5e57061cde3->leave($__internal_edccdcb86d6f65d990eabc941696efd127002634b2cab9340c3de5e57061cde3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/var/www/html/tuto_symphony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
