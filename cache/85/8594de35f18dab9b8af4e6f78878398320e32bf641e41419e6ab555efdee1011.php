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

/* widgets/about_developer.twig */
class __TwigTemplate_f05bce934c9391b2bbf2ebcc212b9ac115eed19fe225570a772c99aa5fd4aeed extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section id=\"aboutDeveloper\" class=\"about-developer pb-6\">
    <div class=\"container\">
        <h2 class=\"section-title section-title--green mt-0 mt-md-5\">
            <span class=\"section-title__aplet\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["company_title"] ?? null), "html", null, true);
        echo "</span>
        </h2>
        <div class=\"row\">
            <div class=\"col-md-4\">
                <a href=\"https://exin.kz/\" class=\"m-4 p-5 d-block\">
                    <img 
                        src=\"https://cms.abpx.kz/";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exin_logo"] ?? null), "path", [], "any", false, false, false, 10), "html", null, true);
        echo "\" 
                        alt=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["company_title"] ?? null), "html", null, true);
        echo "\" 
                        class=\"about-developer__logo w-100\"
                    >
                </a>
                <div class=\"about-developer__desc\">
                    ";
        // line 16
        echo ($context["company_about"] ?? null);
        echo "
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"about-developer__items about-developer-items\">
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["company_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "                        <div class=\"about-developer-items__item\">
                            <span class=\"about-developer-items__title\">
                                ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "
                            </span>
                            ";
            // line 26
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "settings", [], "any", false, false, false, 26), "text", [], "any", false, false, false, 26);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                </div>
                <div class=\"about-developer__desc\">
                    ";
        // line 31
        echo ($context["company_about_two"] ?? null);
        echo "
                </div>
            </div>
            <div class=\"col-md-4\">
                <img 
                    class=\"about-developer__image w-100\"
                    src=\"https://cms.abpx.kz/";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company_image"] ?? null), "path", [], "any", false, false, false, 37), "html", null, true);
        echo "\" 
                    alt=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["company_title"] ?? null), "html", null, true);
        echo "\"
                >
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "widgets/about_developer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 38,  106 => 37,  97 => 31,  93 => 29,  84 => 26,  79 => 24,  75 => 22,  71 => 21,  63 => 16,  55 => 11,  51 => 10,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/about_developer.twig", "C:\\xampp\\htdocs\\alatau-two\\views\\widgets\\about_developer.twig");
    }
}
