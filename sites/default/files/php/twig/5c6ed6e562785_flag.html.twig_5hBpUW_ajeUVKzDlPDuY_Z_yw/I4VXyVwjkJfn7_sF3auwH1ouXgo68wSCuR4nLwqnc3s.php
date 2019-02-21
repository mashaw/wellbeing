<?php

/* modules/flag/templates/flag.html.twig */
class __TwigTemplate_7085c4f0fdae9f4e651c2b7bee4e3f80fa5417b808538eae7bf23aed4e72bbcd extends Twig_Template
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
        $tags = array("spaceless" => 14, "if" => 19, "set" => 20);
        $filters = array("clean_class" => 29, "join" => 38);
        $functions = array("attach_library" => 16);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('spaceless', 'if', 'set'),
                array('clean_class', 'join'),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 14
        ob_start();
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("flag/flag.link"), "html", null, true));
        echo "

";
        // line 19
        if ((($context["action"] ?? null) == "unflag")) {
            // line 20
            echo "    ";
            $context["action_class"] = "action-unflag";
        } else {
            // line 22
            echo "    ";
            $context["action_class"] = "action-flag";
        }
        // line 24
        echo "
";
        // line 27
        $context["classes"] = array(0 => "flag", 1 => ("flag-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 29
($context["flag"] ?? null), "id", array(), "method"))), 2 => ((("js-flag-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 30
($context["flag"] ?? null), "id", array(), "method"))) . "-") . $this->getAttribute(($context["flaggable"] ?? null), "id", array(), "method")), 3 =>         // line 31
($context["action_class"] ?? null));
        // line 34
        echo "
";
        // line 36
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "setAttribute", array(0 => "rel", 1 => "nofollow"), "method");
        // line 37
        echo "
<div class=\"";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter(($context["classes"] ?? null), " "), "html", null, true));
        echo "\"><a";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</a></div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/flag/templates/flag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 38,  73 => 37,  71 => 36,  68 => 34,  66 => 31,  65 => 30,  64 => 29,  63 => 27,  60 => 24,  56 => 22,  52 => 20,  50 => 19,  45 => 16,  43 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/flag/templates/flag.html.twig", "/Users/mikeshaw/Sites/devdesktop/wellbeing/modules/flag/templates/flag.html.twig");
    }
}
