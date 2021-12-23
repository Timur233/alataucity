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

/* widgets/slider.twig */
class __TwigTemplate_b9b76d7380d61f7379554861d7971b93fb9c814520db9ba46c69234ab4b8d842 extends \Twig\Template
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
        echo "<section id=\"home\" class=\"slider mb-5 mb-md-0 parallax\" style=\"background-image: url('https://cms.abpx.kz";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slider_image_bg"] ?? null), "path", [], "any", false, false, false, 1), "html", null, true);
        echo "')\">
    <div class=\"parallax__layer parallax__layer--back-house\" style=\"background-image: url('https://cms.abpx.kz";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slider_house_bg"] ?? null), "path", [], "any", false, false, false, 2), "html", null, true);
        echo "')\" data-duration=\"70\" data-speed=\"0.5\"></div>
    <div class=\"parallax__layer parallax__layer--main-house\" style=\"background-image: url('https://cms.abpx.kz";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slider_house"] ?? null), "path", [], "any", false, false, false, 3), "html", null, true);
        echo "')\" data-duration=\"50\" data-speed=\"1.5\"></div>
    <div class=\"parallax__layer parallax__layer--decor-second\" style=\"background-image: url('https://cms.abpx.kz";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slider_decor"] ?? null), "path", [], "any", false, false, false, 4), "html", null, true);
        echo "')\" data-duration=\"20\" data-speed=\"1\"></div>
    <div class=\"parallax__layer parallax__layer--decor-first\" style=\"background-image: url('https://cms.abpx.kz";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slider_decor_two"] ?? null), "path", [], "any", false, false, false, 5), "html", null, true);
        echo "')\" data-duration=\"30\" data-speed=\"0.5\"></div>
    <div class=\"container position-relative d-flex align-items-center px-3 px-md-5\">
        <div class=\"section-slider-content\">
            <div class=\"row\">
                <div class=\"me-auto col-xxl-5 col-xl-5 col-lg-7 col-md-12 px-sm-0 px-md-5 text-left slider-info\">
                    <h1>";
        // line 10
        echo ($context["slider_title"] ?? null);
        echo "</h1>
                    <div class=\"button-flats pt-2 pb-5\">
                        <a href=\"#flats\" class=\"btn btn-white\">
                            ";
        // line 13
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["translate"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["see_a_flats"] ?? null) : null), "html", null, true);
        echo "
                            <svg width=\"26\" height=\"16\" class=\"ms-2\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M25.707 8.707a1 1 0 000-1.414L19.343.929a1 1 0 10-1.414 1.414L23.586 8l-5.657 5.657a1 1 0 001.414 1.414l6.364-6.364zM0 9h25V7H0v2z\" fill=\"#56aa2e\"></path></svg>
                        </a>
                    </div>
                    <div class=\"promo-form\">
                        <h5 class=\"promo-form__title\">Оставьте заявку, <br>Мы вам перезвоним</h5>
                        <form class=\"mb-0\" action=\"\">
                            <div class=\"mb-3\">
                                <input type=\"text\" class=\"form-control promo-form__input\" id=\"staticFormName\" name=\"name\" placeholder=\"Имя\" fieldname=\"Имя\">
                            </div>
                            <div class=\"mb-3\">
                                <input type=\"text\" class=\"form-control promo-form__input\" id=\"staticFormPhone\" name=\"phone\" placeholder=\"Телефон\" fieldname=\"Телефон\" required=\"required\">
                            </div>
                            <div class=\"d-inline-block\">
                                <a href=\"#\" class=\"btn btn-white float-start sendFormButton px-4\" onclick=\"frontend.form(this); return false\">Отправить</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "widgets/slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  62 => 10,  54 => 5,  50 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/slider.twig", "C:\\xampp\\htdocs\\alatau-two\\views\\widgets\\slider.twig");
    }
}
