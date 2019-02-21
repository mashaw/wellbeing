<?php

/* {# inline_template_start #}{{ field_image }}
<div class="wrapper clearfix">
<h2>{{ type }}</h4>
<h4>{{ title }}</h2>
<p>{{ field_who }} </p>
<p class="read-more-link"><a href="{{ view_node }}" class="btn  small">Read  more</a></p>
<div class="flagging">{{ link_flag }} <div class="count">{{ count }} </div></div>
</div> */
class __TwigTemplate_ef94fb6e6997bf7dc11a1d4920e75804f45a7ce0c1af5c12d5377f50387bb885 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
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

        // line 1
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "
<div class=\"wrapper clearfix\">
<h2>";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["type"] ?? null), "html", null, true));
        echo "</h4>
<h4>";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h2>
<p>";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_who"] ?? null), "html", null, true));
        echo " </p>
<p class=\"read-more-link\"><a href=\"";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "\" class=\"btn  small\">Read  more</a></p>
<div class=\"flagging\">";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["link_flag"] ?? null), "html", null, true));
        echo " <div class=\"count\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["count"] ?? null), "html", null, true));
        echo " </div></div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ field_image }}
<div class=\"wrapper clearfix\">
<h2>{{ type }}</h4>
<h4>{{ title }}</h2>
<p>{{ field_who }} </p>
<p class=\"read-more-link\"><a href=\"{{ view_node }}\" class=\"btn  small\">Read  more</a></p>
<div class=\"flagging\">{{ link_flag }} <div class=\"count\">{{ count }} </div></div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 7,  67 => 6,  63 => 5,  59 => 4,  55 => 3,  50 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}{{ field_image }}
<div class=\"wrapper clearfix\">
<h2>{{ type }}</h4>
<h4>{{ title }}</h2>
<p>{{ field_who }} </p>
<p class=\"read-more-link\"><a href=\"{{ view_node }}\" class=\"btn  small\">Read  more</a></p>
<div class=\"flagging\">{{ link_flag }} <div class=\"count\">{{ count }} </div></div>
</div>", "");
    }
}
