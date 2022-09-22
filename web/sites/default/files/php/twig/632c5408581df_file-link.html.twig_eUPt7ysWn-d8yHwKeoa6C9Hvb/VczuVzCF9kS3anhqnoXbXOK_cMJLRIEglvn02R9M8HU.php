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

/* themes/contrib/bootstrap/templates/file/file-link.html.twig */
class __TwigTemplate_ff28b95de753e374c46f1c30a596eff321fc21381330cc7a1ac91e7288c5da1b extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/bootstrap/templates/file/file-link.html.twig"));

        // line 18
        ob_start(function () { return ''; });
        // line 19
        echo "  ";
        // line 20
        $context["classes"] = [0 => ((        // line 21
($context["icon_only"] ?? null)) ? ("icon-only") : ("")), 1 => (( !        // line 22
($context["icon_only"] ?? null)) ? (("icon-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["icon_position"] ?? null), 22, $this->source)))) : (""))];
        // line 25
        echo "  <span";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 25), 25, $this->source), "html", null, true);
        echo ">
    ";
        // line 26
        if (($context["icon_only"] ?? null)) {
            // line 27
            echo "      <span class=\"file-icon\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 27, $this->source), "html", null, true);
            echo "</span>
      <span class=\"sr-only\">
        <span class=\"file-link\">";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 29, $this->source), "html", null, true);
            echo "</span>
        <span class=\"file-size\">";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["file_size"] ?? null), 30, $this->source), "html", null, true);
            echo "</span>
      </span>
    ";
        } else {
            // line 33
            echo "      ";
            if ((($context["icon_position"] ?? null) == "after")) {
                // line 34
                echo "        <span class=\"file-link\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 34, $this->source), "html", null, true);
                echo "</span><span class=\"file-size\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["file_size"] ?? null), 34, $this->source), "html", null, true);
                echo "</span><span class=\"file-icon\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 34, $this->source), "html", null, true);
                echo "</span>
      ";
            } else {
                // line 36
                echo "        <span class=\"file-icon\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 36, $this->source), "html", null, true);
                echo "</span><span class=\"file-link\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 36, $this->source), "html", null, true);
                echo "</span><span class=\"file-size\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["file_size"] ?? null), 36, $this->source), "html", null, true);
                echo "</span>
      ";
            }
            // line 38
            echo "    ";
        }
        // line 39
        echo "  </span>
";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_0_));
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/file/file-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 18,  99 => 39,  96 => 38,  86 => 36,  76 => 34,  73 => 33,  67 => 30,  63 => 29,  57 => 27,  55 => 26,  50 => 25,  48 => 22,  47 => 21,  46 => 20,  44 => 19,  42 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap/templates/file/file-link.html.twig", "/app/web/themes/contrib/bootstrap/templates/file/file-link.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 18, "set" => 20, "if" => 26);
        static $filters = array("clean_class" => 22, "escape" => 25, "spaceless" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if'],
                ['clean_class', 'escape', 'spaceless'],
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
