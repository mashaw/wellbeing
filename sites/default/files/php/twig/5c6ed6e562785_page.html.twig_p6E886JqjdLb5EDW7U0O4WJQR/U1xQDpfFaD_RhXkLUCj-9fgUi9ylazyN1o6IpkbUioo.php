<?php

/* themes/communitywellbeing/templates/page.html.twig */
class __TwigTemplate_298408682e6e43b1913eb1607da11cd32807dfdfab8f01b521308bd824462b5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'search' => array($this, 'block_search'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'content_tags' => array($this, 'block_content_tags'),
            'content_lower' => array($this, 'block_content_lower'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 54, "if" => 56, "block" => 57);
        $filters = array("clean_class" => 62, "t" => 74);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
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

        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 56
        if (($this->getAttribute(($context["page"] ?? null), "navigation", array()) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()))) {
            // line 57
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 95
        echo " ";
        // line 96
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 97
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
            <div class=\"";
            // line 98
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
          ";
            // line 99
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
            </div>
      ";
        }
        // line 104
        $this->displayBlock('main', $context, $blocks);
        // line 228
        echo "
 

";
        // line 231
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 232
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 57
    public function block_navbar($context, array $blocks = array())
    {
        // line 58
        echo "    ";
        // line 59
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 61
($context["theme"] ?? null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 62
($context["theme"] ?? null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "navbar_position", array())))) : (($context["container"] ?? null))));
        // line 65
        echo "    <header class=\"header\"  id=\"navbar\" role=\"banner\">

        <div class=\"";
        // line 67
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\">

      <div class=\"navbar-header\">
        ";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 72
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 73
            echo "        <button type=\"button\" class=\"navbar-toggle collapsed new\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 74
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 80
        echo "          ";
        // line 81
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "search", array())) {
            // line 82
            echo "        ";
            $this->displayBlock('search', $context, $blocks);
            // line 85
            echo "      ";
        }
        // line 86
        echo "      </div>
 </div>
     
      ";
        // line 89
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 90
            echo "        </div>
      ";
        }
        // line 92
        echo "    </header>
  ";
    }

    // line 82
    public function block_search($context, array $blocks = array())
    {
        // line 83
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
        echo "
        ";
    }

    // line 104
    public function block_main($context, array $blocks = array())
    {
        // line 105
        echo "




  <div role=\"main\" class=\"main-container js-quickedit-main-content\">     
      
        ";
        // line 112
        if (($this->getAttribute(($context["node"] ?? null), "getType", array()) == "story")) {
            // line 113
            echo "      
            <h2 class=\"page-type\">Stories</h4>
      
      ";
        } elseif (twig_in_filter($this->getAttribute(        // line 116
($context["node"] ?? null), "getType", array()), array(0 => "interview", 1 => "event", 2 => "opinion", 3 => "article"))) {
            // line 117
            echo "      
            <h2 class=\"page-type\">";
            // line 118
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "type", array()), "entity", array()), "label", array()), "html", null, true));
            echo "s</h4>
      
      ";
        }
        // line 121
        echo "           
<div class=\"";
        // line 122
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\">
    <div class=\"row\">

      ";
        // line 126
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 127
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 134
            echo "      ";
        }
        // line 135
        echo "
      ";
        // line 137
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 138
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 143
            echo "      ";
        }
        // line 144
        echo "
      ";
        // line 146
        echo "      ";
        // line 147
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 148
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 149
($context["page"] ?? null), "sidebar_first", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-8") : ("")), 2 => ((($this->getAttribute(        // line 150
($context["page"] ?? null), "sidebar_second", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())))) ? ("col-sm-8") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 151
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 154
        echo "      <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">

        ";
        // line 157
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 158
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 161
            echo "        ";
        }
        // line 162
        echo "
        ";
        // line 164
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 165
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 168
            echo "        ";
        }
        // line 169
        echo "
        ";
        // line 171
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 175
        echo "          
           
      </section>
        
        

      ";
        // line 182
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 183
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 188
            echo "      ";
        }
        // line 189
        echo "        
        ";
        // line 190
        if ($this->getAttribute(($context["page"] ?? null), "content_tags", array())) {
            echo "  
         ";
            // line 191
            $this->displayBlock('content_tags', $context, $blocks);
            // line 199
            echo "           ";
        }
        // line 200
        echo "    </div>
  </div>
      
      ";
        // line 203
        if (($this->getAttribute(($context["node"] ?? null), "getType", array()) == "story")) {
            // line 204
            echo "      
            <h2 class=\"page-type lower\">More stories . . .</h4>
      
      ";
        } elseif (twig_in_filter($this->getAttribute(        // line 207
($context["node"] ?? null), "getType", array()), array(0 => "interview", 1 => "event", 2 => "opinion", 3 => "article"))) {
            // line 208
            echo "      
            <h2 class=\"page-type lower\">More ";
            // line 209
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "type", array()), "entity", array()), "label", array()), "html", null, true));
            echo "s . . .</h4>
      
      ";
        }
        // line 212
        echo "      
      
    ";
        // line 214
        if ($this->getAttribute(($context["page"] ?? null), "content_lower", array())) {
            echo "  
      
 ";
            // line 216
            $this->displayBlock('content_lower', $context, $blocks);
            // line 224
            echo "          ";
        }
        // line 225
        echo "      
        </div>
";
    }

    // line 127
    public function block_header($context, array $blocks = array())
    {
        // line 128
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 129
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
              

          </div>
        ";
    }

    // line 138
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 139
        echo "          <aside class=\"col-sm-4\" role=\"complementary\">
            ";
        // line 140
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 158
    public function block_highlighted($context, array $blocks = array())
    {
        // line 159
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 165
    public function block_help($context, array $blocks = array())
    {
        // line 166
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 171
    public function block_content($context, array $blocks = array())
    {
        // line 172
        echo "          <a id=\"main-content\"></a>
          ";
        // line 173
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 183
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 184
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 185
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 191
    public function block_content_tags($context, array $blocks = array())
    {
        // line 192
        echo "      
      <div class=\"content-tags col-sm-4\" role=\"complementary\">

          ";
        // line 195
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_tags", array()), "html", null, true));
        echo "
          
          </div>
        ";
    }

    // line 216
    public function block_content_lower($context, array $blocks = array())
    {
        // line 217
        echo "      
      <div class=\"";
        // line 218
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " content-lower\">

          ";
        // line 220
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_lower", array()), "html", null, true));
        echo "
          
          </div>
        ";
    }

    // line 232
    public function block_footer($context, array $blocks = array())
    {
        // line 233
        echo "    <footer class=\"footer\" role=\"contentinfo\">
        
              <div class=\"";
        // line 235
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\">
      ";
        // line 236
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
                  
        </div>
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/communitywellbeing/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  467 => 236,  463 => 235,  459 => 233,  456 => 232,  448 => 220,  443 => 218,  440 => 217,  437 => 216,  429 => 195,  424 => 192,  421 => 191,  414 => 185,  411 => 184,  408 => 183,  402 => 173,  399 => 172,  396 => 171,  389 => 166,  386 => 165,  379 => 159,  376 => 158,  369 => 140,  366 => 139,  363 => 138,  354 => 129,  351 => 128,  348 => 127,  342 => 225,  339 => 224,  337 => 216,  332 => 214,  328 => 212,  322 => 209,  319 => 208,  317 => 207,  312 => 204,  310 => 203,  305 => 200,  302 => 199,  300 => 191,  296 => 190,  293 => 189,  290 => 188,  287 => 183,  284 => 182,  276 => 175,  273 => 171,  270 => 169,  267 => 168,  264 => 165,  261 => 164,  258 => 162,  255 => 161,  252 => 158,  249 => 157,  243 => 154,  241 => 151,  240 => 150,  239 => 149,  238 => 148,  237 => 147,  235 => 146,  232 => 144,  229 => 143,  226 => 138,  223 => 137,  220 => 135,  217 => 134,  214 => 127,  211 => 126,  205 => 122,  202 => 121,  196 => 118,  193 => 117,  191 => 116,  186 => 113,  184 => 112,  175 => 105,  172 => 104,  165 => 83,  162 => 82,  157 => 92,  153 => 90,  151 => 89,  146 => 86,  143 => 85,  140 => 82,  137 => 81,  135 => 80,  126 => 74,  123 => 73,  120 => 72,  116 => 70,  110 => 67,  106 => 65,  104 => 62,  103 => 61,  102 => 59,  100 => 58,  97 => 57,  91 => 232,  89 => 231,  84 => 228,  82 => 104,  75 => 99,  71 => 98,  68 => 97,  65 => 96,  63 => 95,  59 => 57,  57 => 56,  55 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/communitywellbeing/templates/page.html.twig", "/Users/mikeshaw/Sites/devdesktop/wellbeing/themes/communitywellbeing/templates/page.html.twig");
    }
}
