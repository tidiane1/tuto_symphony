<?php

/* ::base.html.twig */
class __TwigTemplate_2e55ceb3e3a8172ee2bdb98420a739c71281e5768b9082c463522045b60e4555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c9f6040a5905e19371cd2133546fd7b7d345f5607df8371875b9157a64fa9b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c9f6040a5905e19371cd2133546fd7b7d345f5607df8371875b9157a64fa9b4->enter($__internal_1c9f6040a5905e19371cd2133546fd7b7d345f5607df8371875b9157a64fa9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_89ee071873483aee8aed952bbb090c8db49ed250132a0f66fed3325cfa4b098e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ee071873483aee8aed952bbb090c8db49ed250132a0f66fed3325cfa4b098e->enter($__internal_89ee071873483aee8aed952bbb090c8db49ed250132a0f66fed3325cfa4b098e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_1c9f6040a5905e19371cd2133546fd7b7d345f5607df8371875b9157a64fa9b4->leave($__internal_1c9f6040a5905e19371cd2133546fd7b7d345f5607df8371875b9157a64fa9b4_prof);

        
        $__internal_89ee071873483aee8aed952bbb090c8db49ed250132a0f66fed3325cfa4b098e->leave($__internal_89ee071873483aee8aed952bbb090c8db49ed250132a0f66fed3325cfa4b098e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ce05068d1c4812089abcb1e3e85eb7329469ba5a9538b3bde0597f25b15f4ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ce05068d1c4812089abcb1e3e85eb7329469ba5a9538b3bde0597f25b15f4ba->enter($__internal_5ce05068d1c4812089abcb1e3e85eb7329469ba5a9538b3bde0597f25b15f4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3475aa559c15fe05a58046342789799703e7969c68aedfaa31cac376b6d91eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3475aa559c15fe05a58046342789799703e7969c68aedfaa31cac376b6d91eb4->enter($__internal_3475aa559c15fe05a58046342789799703e7969c68aedfaa31cac376b6d91eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3475aa559c15fe05a58046342789799703e7969c68aedfaa31cac376b6d91eb4->leave($__internal_3475aa559c15fe05a58046342789799703e7969c68aedfaa31cac376b6d91eb4_prof);

        
        $__internal_5ce05068d1c4812089abcb1e3e85eb7329469ba5a9538b3bde0597f25b15f4ba->leave($__internal_5ce05068d1c4812089abcb1e3e85eb7329469ba5a9538b3bde0597f25b15f4ba_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1a36d758228358c924c72b442f6b74f8606493de7da5b46cc3849d0c1cfccbcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a36d758228358c924c72b442f6b74f8606493de7da5b46cc3849d0c1cfccbcc->enter($__internal_1a36d758228358c924c72b442f6b74f8606493de7da5b46cc3849d0c1cfccbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_98aa677bb6e850361b363a888e2371b256217c6ca044c6cd92b82818911ad198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98aa677bb6e850361b363a888e2371b256217c6ca044c6cd92b82818911ad198->enter($__internal_98aa677bb6e850361b363a888e2371b256217c6ca044c6cd92b82818911ad198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_98aa677bb6e850361b363a888e2371b256217c6ca044c6cd92b82818911ad198->leave($__internal_98aa677bb6e850361b363a888e2371b256217c6ca044c6cd92b82818911ad198_prof);

        
        $__internal_1a36d758228358c924c72b442f6b74f8606493de7da5b46cc3849d0c1cfccbcc->leave($__internal_1a36d758228358c924c72b442f6b74f8606493de7da5b46cc3849d0c1cfccbcc_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_d24834c8934c50c03aaf44582c94c8b9a01292e388c0739338034367b90c1528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d24834c8934c50c03aaf44582c94c8b9a01292e388c0739338034367b90c1528->enter($__internal_d24834c8934c50c03aaf44582c94c8b9a01292e388c0739338034367b90c1528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_22ffab8f6a0397f1e8dd1acd6a9ae02fcbddf43872f118930fea0ab6a55ff429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ffab8f6a0397f1e8dd1acd6a9ae02fcbddf43872f118930fea0ab6a55ff429->enter($__internal_22ffab8f6a0397f1e8dd1acd6a9ae02fcbddf43872f118930fea0ab6a55ff429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_22ffab8f6a0397f1e8dd1acd6a9ae02fcbddf43872f118930fea0ab6a55ff429->leave($__internal_22ffab8f6a0397f1e8dd1acd6a9ae02fcbddf43872f118930fea0ab6a55ff429_prof);

        
        $__internal_d24834c8934c50c03aaf44582c94c8b9a01292e388c0739338034367b90c1528->leave($__internal_d24834c8934c50c03aaf44582c94c8b9a01292e388c0739338034367b90c1528_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f6b578a964993a8e05f7277f88e9418b0dfbb7a0c9f60b0858d007fa52b56493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b578a964993a8e05f7277f88e9418b0dfbb7a0c9f60b0858d007fa52b56493->enter($__internal_f6b578a964993a8e05f7277f88e9418b0dfbb7a0c9f60b0858d007fa52b56493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b1c6c48860e88c0e44df659ca61b7e312eabfe3284ec35287865e86a2b5cdcb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c6c48860e88c0e44df659ca61b7e312eabfe3284ec35287865e86a2b5cdcb1->enter($__internal_b1c6c48860e88c0e44df659ca61b7e312eabfe3284ec35287865e86a2b5cdcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b1c6c48860e88c0e44df659ca61b7e312eabfe3284ec35287865e86a2b5cdcb1->leave($__internal_b1c6c48860e88c0e44df659ca61b7e312eabfe3284ec35287865e86a2b5cdcb1_prof);

        
        $__internal_f6b578a964993a8e05f7277f88e9418b0dfbb7a0c9f60b0858d007fa52b56493->leave($__internal_f6b578a964993a8e05f7277f88e9418b0dfbb7a0c9f60b0858d007fa52b56493_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 16,  106 => 15,  92 => 7,  83 => 6,  65 => 5,  53 => 17,  50 => 16,  48 => 15,  41 => 12,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/tuto_symphony/app/Resources/views/base.html.twig");
    }
}
