<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_c24b52a99e076f36143083598375da26bc08a9076ab245b0d3f0411be48be368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87a225e52f9daa55daf7738a542e774f63a1a0c351a2cc0da1f54855c4c2cdc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a225e52f9daa55daf7738a542e774f63a1a0c351a2cc0da1f54855c4c2cdc5->enter($__internal_87a225e52f9daa55daf7738a542e774f63a1a0c351a2cc0da1f54855c4c2cdc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_e7f178e0acc9f9c8d5c79c5c70fb0ae1b3d6baed622a25e557ca103753a168dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f178e0acc9f9c8d5c79c5c70fb0ae1b3d6baed622a25e557ca103753a168dc->enter($__internal_e7f178e0acc9f9c8d5c79c5c70fb0ae1b3d6baed622a25e557ca103753a168dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_87a225e52f9daa55daf7738a542e774f63a1a0c351a2cc0da1f54855c4c2cdc5->leave($__internal_87a225e52f9daa55daf7738a542e774f63a1a0c351a2cc0da1f54855c4c2cdc5_prof);

        
        $__internal_e7f178e0acc9f9c8d5c79c5c70fb0ae1b3d6baed622a25e557ca103753a168dc->leave($__internal_e7f178e0acc9f9c8d5c79c5c70fb0ae1b3d6baed622a25e557ca103753a168dc_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_d1283201d90a8abfd8e7c6d9d7e0b30085977115fbb24e7b5102b6711b1b8da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1283201d90a8abfd8e7c6d9d7e0b30085977115fbb24e7b5102b6711b1b8da7->enter($__internal_d1283201d90a8abfd8e7c6d9d7e0b30085977115fbb24e7b5102b6711b1b8da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_ab9c71696c13d43810d6205bee3c17428c7f80b7fbcc25831b8f001009a7a2ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab9c71696c13d43810d6205bee3c17428c7f80b7fbcc25831b8f001009a7a2ae->enter($__internal_ab9c71696c13d43810d6205bee3c17428c7f80b7fbcc25831b8f001009a7a2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_ab9c71696c13d43810d6205bee3c17428c7f80b7fbcc25831b8f001009a7a2ae->leave($__internal_ab9c71696c13d43810d6205bee3c17428c7f80b7fbcc25831b8f001009a7a2ae_prof);

        
        $__internal_d1283201d90a8abfd8e7c6d9d7e0b30085977115fbb24e7b5102b6711b1b8da7->leave($__internal_d1283201d90a8abfd8e7c6d9d7e0b30085977115fbb24e7b5102b6711b1b8da7_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_3bb3bcd90bb907884ab12772ca2e31cc74da7278aaf06e7e30a37bbf96765a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb3bcd90bb907884ab12772ca2e31cc74da7278aaf06e7e30a37bbf96765a5d->enter($__internal_3bb3bcd90bb907884ab12772ca2e31cc74da7278aaf06e7e30a37bbf96765a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_53c67db6a8bf32ea28c161770bcddcce6b41d4bcb8cc30a2b88d253a594be500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c67db6a8bf32ea28c161770bcddcce6b41d4bcb8cc30a2b88d253a594be500->enter($__internal_53c67db6a8bf32ea28c161770bcddcce6b41d4bcb8cc30a2b88d253a594be500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_53c67db6a8bf32ea28c161770bcddcce6b41d4bcb8cc30a2b88d253a594be500->leave($__internal_53c67db6a8bf32ea28c161770bcddcce6b41d4bcb8cc30a2b88d253a594be500_prof);

        
        $__internal_3bb3bcd90bb907884ab12772ca2e31cc74da7278aaf06e7e30a37bbf96765a5d->leave($__internal_3bb3bcd90bb907884ab12772ca2e31cc74da7278aaf06e7e30a37bbf96765a5d_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_f543832a560fc8cf4d80258e80a253fcff214c8302536e26c47d9ba4bf3cbe79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f543832a560fc8cf4d80258e80a253fcff214c8302536e26c47d9ba4bf3cbe79->enter($__internal_f543832a560fc8cf4d80258e80a253fcff214c8302536e26c47d9ba4bf3cbe79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_98976eab4502d04a8c37cc5e670e46d02ece71a8fa7656fd8394e36f938207ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98976eab4502d04a8c37cc5e670e46d02ece71a8fa7656fd8394e36f938207ad->enter($__internal_98976eab4502d04a8c37cc5e670e46d02ece71a8fa7656fd8394e36f938207ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_98976eab4502d04a8c37cc5e670e46d02ece71a8fa7656fd8394e36f938207ad->leave($__internal_98976eab4502d04a8c37cc5e670e46d02ece71a8fa7656fd8394e36f938207ad_prof);

        
        $__internal_f543832a560fc8cf4d80258e80a253fcff214c8302536e26c47d9ba4bf3cbe79->leave($__internal_f543832a560fc8cf4d80258e80a253fcff214c8302536e26c47d9ba4bf3cbe79_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_919082450bf26ea91f469d81f95d2ada7879d38b044de0e444f8224dfced904e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_919082450bf26ea91f469d81f95d2ada7879d38b044de0e444f8224dfced904e->enter($__internal_919082450bf26ea91f469d81f95d2ada7879d38b044de0e444f8224dfced904e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b33c658fbfd921b0eb1b424d20200eb2557e5043b9d5f12bebfc60ddf7a3c17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b33c658fbfd921b0eb1b424d20200eb2557e5043b9d5f12bebfc60ddf7a3c17e->enter($__internal_b33c658fbfd921b0eb1b424d20200eb2557e5043b9d5f12bebfc60ddf7a3c17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_b33c658fbfd921b0eb1b424d20200eb2557e5043b9d5f12bebfc60ddf7a3c17e->leave($__internal_b33c658fbfd921b0eb1b424d20200eb2557e5043b9d5f12bebfc60ddf7a3c17e_prof);

        
        $__internal_919082450bf26ea91f469d81f95d2ada7879d38b044de0e444f8224dfced904e->leave($__internal_919082450bf26ea91f469d81f95d2ada7879d38b044de0e444f8224dfced904e_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_52a0a864fc02943f5a0563b7c0fed7b50d81a5b9061f9dc2ae58cd38ca141b08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a0a864fc02943f5a0563b7c0fed7b50d81a5b9061f9dc2ae58cd38ca141b08->enter($__internal_52a0a864fc02943f5a0563b7c0fed7b50d81a5b9061f9dc2ae58cd38ca141b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_af7fa14de58489d7dd54f579d7e925afe5f44c7319dfb37af5405a8908cff1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7fa14de58489d7dd54f579d7e925afe5f44c7319dfb37af5405a8908cff1c1->enter($__internal_af7fa14de58489d7dd54f579d7e925afe5f44c7319dfb37af5405a8908cff1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_af7fa14de58489d7dd54f579d7e925afe5f44c7319dfb37af5405a8908cff1c1->leave($__internal_af7fa14de58489d7dd54f579d7e925afe5f44c7319dfb37af5405a8908cff1c1_prof);

        
        $__internal_52a0a864fc02943f5a0563b7c0fed7b50d81a5b9061f9dc2ae58cd38ca141b08->leave($__internal_52a0a864fc02943f5a0563b7c0fed7b50d81a5b9061f9dc2ae58cd38ca141b08_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_44714e0eb5fb75bdb4f74eabbfaab79cc810af27180e58effa288669424823a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44714e0eb5fb75bdb4f74eabbfaab79cc810af27180e58effa288669424823a2->enter($__internal_44714e0eb5fb75bdb4f74eabbfaab79cc810af27180e58effa288669424823a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_c0061a2ed9e05bd22fe4cba17804642f087d982dd5d9f0e85fc090d8f848ea1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0061a2ed9e05bd22fe4cba17804642f087d982dd5d9f0e85fc090d8f848ea1b->enter($__internal_c0061a2ed9e05bd22fe4cba17804642f087d982dd5d9f0e85fc090d8f848ea1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_c0061a2ed9e05bd22fe4cba17804642f087d982dd5d9f0e85fc090d8f848ea1b->leave($__internal_c0061a2ed9e05bd22fe4cba17804642f087d982dd5d9f0e85fc090d8f848ea1b_prof);

        
        $__internal_44714e0eb5fb75bdb4f74eabbfaab79cc810af27180e58effa288669424823a2->leave($__internal_44714e0eb5fb75bdb4f74eabbfaab79cc810af27180e58effa288669424823a2_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_c8f5df9a841e71228e3545dc603cd5bb4ea54062dab2a3469f0a72fe17c95413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f5df9a841e71228e3545dc603cd5bb4ea54062dab2a3469f0a72fe17c95413->enter($__internal_c8f5df9a841e71228e3545dc603cd5bb4ea54062dab2a3469f0a72fe17c95413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_7552cf34690730007b79af45da26d13ef19dc26919de52bfcc49d7d84a38f562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7552cf34690730007b79af45da26d13ef19dc26919de52bfcc49d7d84a38f562->enter($__internal_7552cf34690730007b79af45da26d13ef19dc26919de52bfcc49d7d84a38f562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7552cf34690730007b79af45da26d13ef19dc26919de52bfcc49d7d84a38f562->leave($__internal_7552cf34690730007b79af45da26d13ef19dc26919de52bfcc49d7d84a38f562_prof);

        
        $__internal_c8f5df9a841e71228e3545dc603cd5bb4ea54062dab2a3469f0a72fe17c95413->leave($__internal_c8f5df9a841e71228e3545dc603cd5bb4ea54062dab2a3469f0a72fe17c95413_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_c6120577afa2f932922686a4bfb5a9995288cdbfff4737c0f49c1342360fe76b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6120577afa2f932922686a4bfb5a9995288cdbfff4737c0f49c1342360fe76b->enter($__internal_c6120577afa2f932922686a4bfb5a9995288cdbfff4737c0f49c1342360fe76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_98e86200682254e394ef42fc5a15ccfefb82bb631bcf3394c69505a37c9cd141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e86200682254e394ef42fc5a15ccfefb82bb631bcf3394c69505a37c9cd141->enter($__internal_98e86200682254e394ef42fc5a15ccfefb82bb631bcf3394c69505a37c9cd141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_98e86200682254e394ef42fc5a15ccfefb82bb631bcf3394c69505a37c9cd141->leave($__internal_98e86200682254e394ef42fc5a15ccfefb82bb631bcf3394c69505a37c9cd141_prof);

        
        $__internal_c6120577afa2f932922686a4bfb5a9995288cdbfff4737c0f49c1342360fe76b->leave($__internal_c6120577afa2f932922686a4bfb5a9995288cdbfff4737c0f49c1342360fe76b_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_98eab221a098dd01d2d700f4295a85afaf3cb22664c7a267b8a369557ae474fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98eab221a098dd01d2d700f4295a85afaf3cb22664c7a267b8a369557ae474fd->enter($__internal_98eab221a098dd01d2d700f4295a85afaf3cb22664c7a267b8a369557ae474fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_2bb1cbb270847a50d129be0cb348fe105402990af260d80f5a122ea04110aa03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb1cbb270847a50d129be0cb348fe105402990af260d80f5a122ea04110aa03->enter($__internal_2bb1cbb270847a50d129be0cb348fe105402990af260d80f5a122ea04110aa03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2bb1cbb270847a50d129be0cb348fe105402990af260d80f5a122ea04110aa03->leave($__internal_2bb1cbb270847a50d129be0cb348fe105402990af260d80f5a122ea04110aa03_prof);

        
        $__internal_98eab221a098dd01d2d700f4295a85afaf3cb22664c7a267b8a369557ae474fd->leave($__internal_98eab221a098dd01d2d700f4295a85afaf3cb22664c7a267b8a369557ae474fd_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_ba1ec1ee2612f43392a79dfb2dd57ea71c986b63c768447a414b46644c7c0eef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba1ec1ee2612f43392a79dfb2dd57ea71c986b63c768447a414b46644c7c0eef->enter($__internal_ba1ec1ee2612f43392a79dfb2dd57ea71c986b63c768447a414b46644c7c0eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_a5927a9426c240c34130aea27bfb349a26d48c107ac6673e760cf4b3333479a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5927a9426c240c34130aea27bfb349a26d48c107ac6673e760cf4b3333479a9->enter($__internal_a5927a9426c240c34130aea27bfb349a26d48c107ac6673e760cf4b3333479a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_a5927a9426c240c34130aea27bfb349a26d48c107ac6673e760cf4b3333479a9->leave($__internal_a5927a9426c240c34130aea27bfb349a26d48c107ac6673e760cf4b3333479a9_prof);

        
        $__internal_ba1ec1ee2612f43392a79dfb2dd57ea71c986b63c768447a414b46644c7c0eef->leave($__internal_ba1ec1ee2612f43392a79dfb2dd57ea71c986b63c768447a414b46644c7c0eef_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/var/www/html/tuto_symphony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
