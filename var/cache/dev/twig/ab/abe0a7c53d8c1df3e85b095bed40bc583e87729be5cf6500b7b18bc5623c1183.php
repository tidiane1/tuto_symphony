<?php

/* immobilierBundle:admin:list.html.twig */
class __TwigTemplate_3d2ec44d4acaca86261b4b4d3adf48265507672d04c30509a5c6dbd212ad53e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "immobilierBundle:admin:list.html.twig", 1);
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
        $__internal_fab22125dc772848f76826d946e099286dc7f002a3dd24f5ba41986df6c153af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fab22125dc772848f76826d946e099286dc7f002a3dd24f5ba41986df6c153af->enter($__internal_fab22125dc772848f76826d946e099286dc7f002a3dd24f5ba41986df6c153af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "immobilierBundle:admin:list.html.twig"));

        $__internal_b0c0391a907718614bed8a6177a646e0706e071d2ecdc5439f540db6c2b3b185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c0391a907718614bed8a6177a646e0706e071d2ecdc5439f540db6c2b3b185->enter($__internal_b0c0391a907718614bed8a6177a646e0706e071d2ecdc5439f540db6c2b3b185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "immobilierBundle:admin:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fab22125dc772848f76826d946e099286dc7f002a3dd24f5ba41986df6c153af->leave($__internal_fab22125dc772848f76826d946e099286dc7f002a3dd24f5ba41986df6c153af_prof);

        
        $__internal_b0c0391a907718614bed8a6177a646e0706e071d2ecdc5439f540db6c2b3b185->leave($__internal_b0c0391a907718614bed8a6177a646e0706e071d2ecdc5439f540db6c2b3b185_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5bde16048deaefecef8ff977833c4a33d3197f9af4518587ee68b60bf176c07b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bde16048deaefecef8ff977833c4a33d3197f9af4518587ee68b60bf176c07b->enter($__internal_5bde16048deaefecef8ff977833c4a33d3197f9af4518587ee68b60bf176c07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b75ad15e24104fdb60c9a24d166ad583b0842cc930d2be91fea5dbd865066ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b75ad15e24104fdb60c9a24d166ad583b0842cc930d2be91fea5dbd865066ac1->enter($__internal_b75ad15e24104fdb60c9a24d166ad583b0842cc930d2be91fea5dbd865066ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "immobilierBundle:admin:add";
        
        $__internal_b75ad15e24104fdb60c9a24d166ad583b0842cc930d2be91fea5dbd865066ac1->leave($__internal_b75ad15e24104fdb60c9a24d166ad583b0842cc930d2be91fea5dbd865066ac1_prof);

        
        $__internal_5bde16048deaefecef8ff977833c4a33d3197f9af4518587ee68b60bf176c07b->leave($__internal_5bde16048deaefecef8ff977833c4a33d3197f9af4518587ee68b60bf176c07b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_22057912bf90a3df80404eef52f3eac3fa0be6bfcf97b794b00f6d988bceccf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22057912bf90a3df80404eef52f3eac3fa0be6bfcf97b794b00f6d988bceccf3->enter($__internal_22057912bf90a3df80404eef52f3eac3fa0be6bfcf97b794b00f6d988bceccf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4fbda81240a24c1080d80e431c77d67b09df3e80db663b5c1b24c8afba052592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fbda81240a24c1080d80e431c77d67b09df3e80db663b5c1b24c8afba052592->enter($__internal_4fbda81240a24c1080d80e431c77d67b09df3e80db663b5c1b24c8afba052592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<table border=1>
<tr>
<th>id</th>
<th>login</th>
<th>nomcomplet</th>
<th>datenais</th>
<th>Editer</th>
<th>Supprimer</th>

</tr>
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 16
            echo "<tr>
<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "login", array()), "html", null, true);
            echo "</td>
<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nomcomplet", array()), "html", null, true);
            echo "</td>
<td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "datenaiss", array()), "d/m/Y"), "html", null, true);
            echo "</td>
<td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">Editer</a></td>
<td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppr", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
";
            // line 23
            if (($this->getAttribute($context["user"], "etat", array()) == 0)) {
                // line 24
                echo "            <td>Inactif</td>
            <td><a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etat", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">Activer</a></td>
            ";
            } else {
                // line 27
                echo "            <td>Actif</td>
            <td><a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etat", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">Désactiver</a></td>
            ";
            }
            // line 30
            echo "
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "<td colspan=\"6\">Aucun utilisateur</td>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</table>
";
        
        $__internal_4fbda81240a24c1080d80e431c77d67b09df3e80db663b5c1b24c8afba052592->leave($__internal_4fbda81240a24c1080d80e431c77d67b09df3e80db663b5c1b24c8afba052592_prof);

        
        $__internal_22057912bf90a3df80404eef52f3eac3fa0be6bfcf97b794b00f6d988bceccf3->leave($__internal_22057912bf90a3df80404eef52f3eac3fa0be6bfcf97b794b00f6d988bceccf3_prof);

    }

    public function getTemplateName()
    {
        return "immobilierBundle:admin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 36,  137 => 33,  130 => 30,  125 => 28,  122 => 27,  117 => 25,  114 => 24,  112 => 23,  108 => 22,  104 => 21,  100 => 20,  96 => 19,  92 => 18,  88 => 17,  85 => 16,  80 => 15,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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
<table border=1>
<tr>
<th>id</th>
<th>login</th>
<th>nomcomplet</th>
<th>datenais</th>
<th>Editer</th>
<th>Supprimer</th>

</tr>
{%for user in users%}
<tr>
<td>{{user.id}}</td>
<td>{{user.login}}</td>
<td>{{user.nomcomplet}}</td>
<td>{{user.datenaiss|date(\"d/m/Y\")}}</td>
<td><a href=\"{{path('edit',{'id':user.id})}}\">Editer</a></td>
<td><a href=\"{{path('suppr',{'id':user.id})}}\">Supprimer</a></td>
{% if user.etat==0 %}
            <td>Inactif</td>
            <td><a href=\"{{path('etat', {'id':user.id})}}\">Activer</a></td>
            {% else %}
            <td>Actif</td>
            <td><a href=\"{{path('etat', {'id':user.id})}}\">Désactiver</a></td>
            {% endif %}

</tr>
{%else%}
<td colspan=\"6\">Aucun utilisateur</td>

{%endfor%}
</table>
{% endblock %}
", "immobilierBundle:admin:list.html.twig", "/var/www/html/tuto_symphony/src/SNT/immobilierBundle/Resources/views/admin/list.html.twig");
    }
}
