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

/* widgets/building_steps.twig */
class __TwigTemplate_aaeee1ce4e73ab9a9fa5a28712d0168b32780fd992e6c58f78357a6d83987db3 extends \Twig\Template
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
        echo "<section id=\"buildingSteps\" class=\"building-steps pb-6 pt-6 bg-light\">
    <div class=\"container\">
        <h2 class=\"section-title section-title--green mt-0 mt-md-5\">
            <span class=\"section-title__aplet section-title__aplet--light\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["steps_title"] ?? null), "html", null, true);
        echo "</span>
        </h2>
    </div>

    <div class=\"container\">
        <div class=\"steps-swiper swiper-container py-4\">
            <div class=\"swiper-wrapper\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["steps_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "                    <div 
                        class=\"swiper-slide building-steps__slide\" 
                        style=\"background-image: url('https://cms.abpx.kz";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 14)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[2] ?? null) : null), "settings", [], "any", false, false, false, 14), "image", [], "any", false, false, false, 14), "path", [], "any", false, false, false, 14), "html", null, true);
            echo "')\"
                    >
                        ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 16)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null), "settings", [], "any", false, false, false, 16), "gallery", [], "any", false, false, false, 16)) {
                // line 17
                echo "                            <a class=\"building-steps__link\" href=\"#\" data-gallery-images=\"";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 17)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[1] ?? null) : null), "settings", [], "any", false, false, false, 17), "gallery", [], "any", false, false, false, 17));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    echo "https://cms.abpx.kz";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, false, 17), "html", null, true);
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 17) == false)) {
                        echo ",";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\"  onclick=\"frontend.lightBox(this.getAttribute('data-gallery-images')); return false\">
                        ";
            }
            // line 18
            echo "  
                            <div class=\"step-information\">
                                ";
            // line 20
            $context["date"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 20)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null), "settings", [], "any", false, false, false, 20), "text", [], "any", false, false, false, 20), " ");
            // line 21
            echo "                                <h3 class=\"building-steps__title\">";
            echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["date"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["date"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[1] ?? null) : null), "html", null, true);
            echo "</h3>
                            </div>
                        ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 23)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[1] ?? null) : null), "settings", [], "any", false, false, false, 23), "gallery", [], "any", false, false, false, 23)) {
                // line 24
                echo "                            </a>
                        ";
            }
            // line 26
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "widgets/building_steps.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 28,  125 => 26,  121 => 24,  119 => 23,  111 => 21,  109 => 20,  105 => 18,  67 => 17,  65 => 16,  60 => 14,  56 => 12,  52 => 11,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/building_steps.twig", "C:\\xampp\\htdocs\\alatau-two\\views\\widgets\\building_steps.twig");
    }
}
