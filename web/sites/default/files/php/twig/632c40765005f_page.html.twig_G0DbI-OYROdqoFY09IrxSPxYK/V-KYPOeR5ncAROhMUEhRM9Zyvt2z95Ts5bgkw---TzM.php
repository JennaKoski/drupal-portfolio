<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/olivero/templates/layout/page.html.twig */
class __TwigTemplate_26ae21598400b8bd8bd035ec301b53c7c77af04758e236011d4e43a6b11217eb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/olivero/templates/layout/page.html.twig"));

        // line 48
        echo "
<div id=\"page-wrapper\" class=\"page-wrapper\">
  <div id=\"page\">

    ";
        // line 52
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 52) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 52)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 52))) {
            // line 53
            echo "      <header id=\"header\" class=\"site-header\" data-drupal-selector=\"site-header\" role=\"banner\">

        ";
            // line 56
            echo "        <div class=\"site-header__fixable\" data-drupal-selector=\"site-header-fixable\">
          <div class=\"site-header__initial\">
            <button class=\"sticky-header-toggle\" data-drupal-selector=\"sticky-header-toggle\" role=\"switch\" aria-controls=\"site-header__inner\" aria-label=\"";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sticky header"));
            echo "\" aria-checked=\"false\">
              <span class=\"sticky-header-toggle__icon\">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </button>
          </div>

          ";
            // line 68
            echo "          <div id=\"site-header__inner\" class=\"site-header__inner\" data-drupal-selector=\"site-header-inner\">
            <div class=\"container site-header__inner__container\">

              ";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "

              ";
            // line 73
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 73) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 73))) {
                // line 74
                echo "                <div class=\"mobile-buttons\" data-drupal-selector=\"mobile-buttons\">
                  <button class=\"mobile-nav-button\" data-drupal-selector=\"mobile-nav-button\" aria-label=\"";
                // line 75
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Main Menu"));
                echo "\" aria-controls=\"header-nav\" aria-expanded=\"false\">
                    <span class=\"mobile-nav-button__label\">";
                // line 76
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
                echo "</span>
                    <span class=\"mobile-nav-button__icon\"></span>
                  </button>
                </div>

                <div id=\"header-nav\" class=\"header-nav\" data-drupal-selector=\"header-nav\">
                  ";
                // line 82
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                echo "
                  ";
                // line 83
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 86
            echo "            </div>
          </div>
        </div>
      </header>
    ";
        }
        // line 91
        echo "
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container\">
      <div id=\"main\" class=\"layout-main\">
        <div class=\"main-content\">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          ";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
        echo "
          <div class=\"main-content__container container\">
            ";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
        echo "
            ";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
        echo "

            ";
        // line 101
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 101)) {
            // line 102
            echo "              <div class=\"sidebar-grid grid-full\">
                <main role=\"main\" class=\"site-main ie11-autorow\">
                  ";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "
                  ";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "
                </main>

                ";
            // line 108
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "
              </div>
            ";
        } else {
            // line 111
            echo "              <main role=\"main\">
                ";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "
                ";
            // line 113
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "
              </main>
            ";
        }
        // line 116
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
        echo "
          </div>
        </div>
        <div class=\"social-bar\">
          ";
        // line 120
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </div>

    <footer class=\"site-footer\">
      <div class=\"site-footer__inner container\">
        ";
        // line 127
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
        echo "
        ";
        // line 128
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
        echo "
      </div>
    </footer>

    <div class=\"overlay\" data-drupal-selector=\"overlay\"></div>

  </div>
</div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/olivero/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 128,  189 => 127,  179 => 120,  171 => 116,  165 => 113,  161 => 112,  158 => 111,  152 => 108,  146 => 105,  142 => 104,  138 => 102,  136 => 101,  131 => 99,  127 => 98,  122 => 96,  115 => 91,  108 => 86,  102 => 83,  98 => 82,  89 => 76,  85 => 75,  82 => 74,  80 => 73,  75 => 71,  70 => 68,  58 => 58,  54 => 56,  50 => 53,  48 => 52,  42 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/layout/page.html.twig", "/app/web/core/themes/olivero/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 52);
        static $filters = array("t" => 58, "escape" => 71);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}