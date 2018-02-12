<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_20ff6b87d20683dc40b7fc6eed1e1dd3db2c6fa6cc0890640874acdd382502aa extends Twig_Template
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
        $__internal_14636f2655f829f34fb121d29f32021d18b3aaf05bda5c415dd1673ef0a9e2fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14636f2655f829f34fb121d29f32021d18b3aaf05bda5c415dd1673ef0a9e2fd->enter($__internal_14636f2655f829f34fb121d29f32021d18b3aaf05bda5c415dd1673ef0a9e2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_ddc1904dbfb27439e36d6a33d8c253102e0cf992ddf56d09a1fe1a042a8763f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc1904dbfb27439e36d6a33d8c253102e0cf992ddf56d09a1fe1a042a8763f5->enter($__internal_ddc1904dbfb27439e36d6a33d8c253102e0cf992ddf56d09a1fe1a042a8763f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_14636f2655f829f34fb121d29f32021d18b3aaf05bda5c415dd1673ef0a9e2fd->leave($__internal_14636f2655f829f34fb121d29f32021d18b3aaf05bda5c415dd1673ef0a9e2fd_prof);

        
        $__internal_ddc1904dbfb27439e36d6a33d8c253102e0cf992ddf56d09a1fe1a042a8763f5->leave($__internal_ddc1904dbfb27439e36d6a33d8c253102e0cf992ddf56d09a1fe1a042a8763f5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "/var/www/html/tuto_symphony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
