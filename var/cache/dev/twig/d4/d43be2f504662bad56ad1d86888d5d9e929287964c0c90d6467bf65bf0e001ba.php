<?php

/* immobilierBundle:admin:search.html.twig */
class __TwigTemplate_5172d3ba1fcc8e0b6b641e5a585a06cdc1875d3c34de62793c7b6dfcb06802b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "immobilierBundle:admin:search.html.twig", 1);
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
        $__internal_a57e08230f59c6b1e5bea86621902691f4d87271f8809f65a36167dd7d33ed83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a57e08230f59c6b1e5bea86621902691f4d87271f8809f65a36167dd7d33ed83->enter($__internal_a57e08230f59c6b1e5bea86621902691f4d87271f8809f65a36167dd7d33ed83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "immobilierBundle:admin:search.html.twig"));

        $__internal_048ccb665c22a4ddd0625a22ea2efd4ca7d8da73951154d6474b6ca6e5c0edbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048ccb665c22a4ddd0625a22ea2efd4ca7d8da73951154d6474b6ca6e5c0edbb->enter($__internal_048ccb665c22a4ddd0625a22ea2efd4ca7d8da73951154d6474b6ca6e5c0edbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "immobilierBundle:admin:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a57e08230f59c6b1e5bea86621902691f4d87271f8809f65a36167dd7d33ed83->leave($__internal_a57e08230f59c6b1e5bea86621902691f4d87271f8809f65a36167dd7d33ed83_prof);

        
        $__internal_048ccb665c22a4ddd0625a22ea2efd4ca7d8da73951154d6474b6ca6e5c0edbb->leave($__internal_048ccb665c22a4ddd0625a22ea2efd4ca7d8da73951154d6474b6ca6e5c0edbb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_92b12eb4ffcae16d8f5d77a56e1b19c643f14a6521426478d9937f66a719d315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92b12eb4ffcae16d8f5d77a56e1b19c643f14a6521426478d9937f66a719d315->enter($__internal_92b12eb4ffcae16d8f5d77a56e1b19c643f14a6521426478d9937f66a719d315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e98ecebbcac5ffa00ec96b62be4549fb8979a3abc1d1f158390530eb7c55d645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98ecebbcac5ffa00ec96b62be4549fb8979a3abc1d1f158390530eb7c55d645->enter($__internal_e98ecebbcac5ffa00ec96b62be4549fb8979a3abc1d1f158390530eb7c55d645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " <a href=\"/tuto_symphony/web/app_dev.php/immobilier/user/list\" class=\"btn btn-info\" role=\"button\">votre formulaire lister</a>
<br><br>

 <form method=\"POST\">
 <input type=\"text\" name=\"nomcomplet\" placeholder=\"recherche\">
 <input type=\"submit\" name=\"submit\" value=\"recherche\">
  </form>
 <br><br>

<table class=\"table table-bordered table-striped\">
<tr class=\"text-dark bg-info\">
<th>id</th>
<th>Login</th>
<th>Nom complet</th>
<th>Date de naisssance</th>
<th>Edit</th>
<th>Delete</th>
</tr>
";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["em"]) {
            // line 22
            echo "<tr>
<th>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["em"], "id", array()), "html", null, true);
            echo "</th>
<th>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["em"], "login", array()), "html", null, true);
            echo "</th>
<th>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["em"], "nomcomplet", array()), "html", null, true);
            echo "</th>
<th>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["em"], "datenaiss", array()), "d/m/Y"), "html", null, true);
            echo "</th>
<th><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute($context["em"], "id", array()))), "html", null, true);
            echo "\">Edit</a></th>
<th><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppr", array("id" => $this->getAttribute($context["em"], "id", array()))), "html", null, true);
            echo "\">Delete</a></th>

</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "<td colspan=\"6\">aucun utilisateur</td>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['em'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo " </table>

";
        
        $__internal_e98ecebbcac5ffa00ec96b62be4549fb8979a3abc1d1f158390530eb7c55d645->leave($__internal_e98ecebbcac5ffa00ec96b62be4549fb8979a3abc1d1f158390530eb7c55d645_prof);

        
        $__internal_92b12eb4ffcae16d8f5d77a56e1b19c643f14a6521426478d9937f66a719d315->leave($__internal_92b12eb4ffcae16d8f5d77a56e1b19c643f14a6521426478d9937f66a719d315_prof);

    }

    public function getTemplateName()
    {
        return "immobilierBundle:admin:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 34,  106 => 32,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  77 => 23,  74 => 22,  69 => 21,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% extends \"::base.html.twig\" %}
 {% block body %}
 <a href=\"/tuto_symphony/web/app_dev.php/immobilier/user/list\" class=\"btn btn-info\" role=\"button\">votre formulaire lister</a>
<br><br>

 <form method=\"POST\">
 <input type=\"text\" name=\"nomcomplet\" placeholder=\"recherche\">
 <input type=\"submit\" name=\"submit\" value=\"recherche\">
  </form>
 <br><br>

<table class=\"table table-bordered table-striped\">
<tr class=\"text-dark bg-info\">
<th>id</th>
<th>Login</th>
<th>Nom complet</th>
<th>Date de naisssance</th>
<th>Edit</th>
<th>Delete</th>
</tr>
{%for em in users%}
<tr>
<th>{{em.id}}</th>
<th>{{em.login}}</th>
<th>{{em.nomcomplet}}</th>
<th>{{em.datenaiss|date(\"d/m/Y\")}}</th>
<th><a href=\"{{path('edit',{'id':em.id})}}\">Edit</a></th>
<th><a href=\"{{path('suppr',{'id':em.id})}}\">Delete</a></th>

</tr>
{%else%}
<td colspan=\"6\">aucun utilisateur</td>
{%endfor%}
 </table>

{% endblock %}", "immobilierBundle:admin:search.html.twig", "/var/www/html/tuto_symphony/src/SNT/immobilierBundle/Resources/views/admin/search.html.twig");
    }
}
