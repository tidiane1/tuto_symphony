<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_21e1384dbb5ce9486a9d17503df7b90e48bc1b6ea63609664f02070f7deb3d3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d57053539b92397312296e4ad4a587c7124055dab93eab5030aa0a6d65446a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d57053539b92397312296e4ad4a587c7124055dab93eab5030aa0a6d65446a99->enter($__internal_d57053539b92397312296e4ad4a587c7124055dab93eab5030aa0a6d65446a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3b090ab5c8659a5200a8387ccf4723de8859e5950dc88f40d3d787ab321945ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b090ab5c8659a5200a8387ccf4723de8859e5950dc88f40d3d787ab321945ff->enter($__internal_3b090ab5c8659a5200a8387ccf4723de8859e5950dc88f40d3d787ab321945ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_d57053539b92397312296e4ad4a587c7124055dab93eab5030aa0a6d65446a99->leave($__internal_d57053539b92397312296e4ad4a587c7124055dab93eab5030aa0a6d65446a99_prof);

        
        $__internal_3b090ab5c8659a5200a8387ccf4723de8859e5950dc88f40d3d787ab321945ff->leave($__internal_3b090ab5c8659a5200a8387ccf4723de8859e5950dc88f40d3d787ab321945ff_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_851874d1534d1ceb30d61c92aeb5eed4d727bfb621b511b7b56d6f37adf71d0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_851874d1534d1ceb30d61c92aeb5eed4d727bfb621b511b7b56d6f37adf71d0d->enter($__internal_851874d1534d1ceb30d61c92aeb5eed4d727bfb621b511b7b56d6f37adf71d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_44823cbf15ca0f1db723ca43042e18412f0e9b91b284b98baa5f974cc18fec4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44823cbf15ca0f1db723ca43042e18412f0e9b91b284b98baa5f974cc18fec4a->enter($__internal_44823cbf15ca0f1db723ca43042e18412f0e9b91b284b98baa5f974cc18fec4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_44823cbf15ca0f1db723ca43042e18412f0e9b91b284b98baa5f974cc18fec4a->leave($__internal_44823cbf15ca0f1db723ca43042e18412f0e9b91b284b98baa5f974cc18fec4a_prof);

        
        $__internal_851874d1534d1ceb30d61c92aeb5eed4d727bfb621b511b7b56d6f37adf71d0d->leave($__internal_851874d1534d1ceb30d61c92aeb5eed4d727bfb621b511b7b56d6f37adf71d0d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c025d9486a4c8857687d13d76de0d9fe52598b51eba2b4986525fcc6c9cdcc19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c025d9486a4c8857687d13d76de0d9fe52598b51eba2b4986525fcc6c9cdcc19->enter($__internal_c025d9486a4c8857687d13d76de0d9fe52598b51eba2b4986525fcc6c9cdcc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_81dad8b24d18ce3cf79caed55fa57655457b03c3cceea4301305d52b9b003cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81dad8b24d18ce3cf79caed55fa57655457b03c3cceea4301305d52b9b003cbc->enter($__internal_81dad8b24d18ce3cf79caed55fa57655457b03c3cceea4301305d52b9b003cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_81dad8b24d18ce3cf79caed55fa57655457b03c3cceea4301305d52b9b003cbc->leave($__internal_81dad8b24d18ce3cf79caed55fa57655457b03c3cceea4301305d52b9b003cbc_prof);

        
        $__internal_c025d9486a4c8857687d13d76de0d9fe52598b51eba2b4986525fcc6c9cdcc19->leave($__internal_c025d9486a4c8857687d13d76de0d9fe52598b51eba2b4986525fcc6c9cdcc19_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b72b018ffe6f4c061bebd299bade4d25a2da2281cd2f4f4a9fe936299e787511 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b72b018ffe6f4c061bebd299bade4d25a2da2281cd2f4f4a9fe936299e787511->enter($__internal_b72b018ffe6f4c061bebd299bade4d25a2da2281cd2f4f4a9fe936299e787511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad947b8c80ba60d111f0d44b245e0a4ce4dfcc9349540f69bb02335366667226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad947b8c80ba60d111f0d44b245e0a4ce4dfcc9349540f69bb02335366667226->enter($__internal_ad947b8c80ba60d111f0d44b245e0a4ce4dfcc9349540f69bb02335366667226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ad947b8c80ba60d111f0d44b245e0a4ce4dfcc9349540f69bb02335366667226->leave($__internal_ad947b8c80ba60d111f0d44b245e0a4ce4dfcc9349540f69bb02335366667226_prof);

        
        $__internal_b72b018ffe6f4c061bebd299bade4d25a2da2281cd2f4f4a9fe936299e787511->leave($__internal_b72b018ffe6f4c061bebd299bade4d25a2da2281cd2f4f4a9fe936299e787511_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/tuto_symphony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
