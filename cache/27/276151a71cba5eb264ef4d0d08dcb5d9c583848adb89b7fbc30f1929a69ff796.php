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

/* widgets/gallery.twig */
class __TwigTemplate_29c461f98714856e2b443024e4ab9721aca9429b48d432e25a6aaa36a90cf338 extends \Twig\Template
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
        echo "<section id=\"gallery\" class=\"gallery pb-6\">
    <div class=\"container\">
        <h2 class=\"section-title section-title--green mt-0 mt-md-5\">
            <span class=\"section-title__aplet\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["gallery_title"] ?? null), "html", null, true);
        echo "</span>
        </h2>
        <div class=\"gallery__items d-none d-md-flex\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gallery_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "                <div class=\"gallery__item\">
                    <a 
                        href=\"https://cms.abpx.kz";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 10), "path", [], "any", false, false, false, 10), "html", null, true);
            echo "\" 
                        class=\"gallery__link\" 
                        style=\"background-image: url('https://cms.abpx.kz";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["gallery_items"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "path", [], "any", false, false, false, 12), "html", null, true);
            echo "')\"
                        data-gallery-images=\"";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 13)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null), "settings", [], "any", false, false, false, 13), "gallery", [], "any", false, false, false, 13));
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, false, 13), "html", null, true);
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 13) == false)) {
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
            echo "\"  
                        onclick=\"frontend.lightBox(this.getAttribute('data-gallery-images')); return false\"
                    >
                        <img 
                            src=\"https://cms.abpx.kz";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 17)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "settings", [], "any", false, false, false, 17), "image", [], "any", false, false, false, 17), "path", [], "any", false, false, false, 17), "html", null, true);
            echo "\" 
                            alt=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 18)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null), "settings", [], "any", false, false, false, 18), "text", [], "any", false, false, false, 18), "html", null, true);
            echo "\"
                        >
                        <h5 class=\"gallery__title\">
                            ";
            // line 21
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 21)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[2] ?? null) : null), "settings", [], "any", false, false, false, 21), "text", [], "any", false, false, false, 21);
            echo "
                        </h5>
                        <h6 class=\"gallery__span\">
                            ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 24)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[3] ?? null) : null), "settings", [], "any", false, false, false, 24), "text", [], "any", false, false, false, 24), "html", null, true);
            echo "
                        </h6>
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "widgets/gallery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 29,  120 => 24,  114 => 21,  108 => 18,  104 => 17,  65 => 13,  61 => 12,  56 => 10,  52 => 8,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/gallery.twig", "C:\\xampp\\htdocs\\alatau-two\\views\\widgets\\gallery.twig");
    }
}
