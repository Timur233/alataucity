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

/* widgets/_header.twig */
class __TwigTemplate_57942ea838d20e50518053570eb9a7f35159130ca0620a777d5bc96777142763 extends \Twig\Template
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
        echo "<header class=\"align-items-center w-100 pt-5 pb-4\" style=\"z-index: 999\">
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col d-flex\">
            <div class=\"logo-block\">
               <a href=\"#home\">
                  <img class=\"logo-block__image\" src=\"https://cms.abpx.kz";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site_logo"] ?? null), "path", [], "any", false, false, false, 7), "html", null, true);
        echo "\" alt=\"\">
                </a>
            </div>
         </div>
         <div class=\"col-xl-6 col-xxl-7 d-none d-xl-flex align-items-center justify-content-end\">
            <ul class=\"nav-menu left text-xxl-end text-xl-center\">
               <li>
                  <a href=\"#about\">
                  ";
        // line 15
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["translate"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["about_of_project"] ?? null) : null), "html", null, true);
        echo "
                  </a>
               </li>
               <li>
                  <a href=\"#advantages\">
                  ";
        // line 20
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["translate"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["advantages"] ?? null) : null), "html", null, true);
        echo "
                  </a>
               </li>
               <li>
                  <a href=\"#gallery\">
                  ";
        // line 25
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["translate"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["gallery"] ?? null) : null), "html", null, true);
        echo "
                  </a>
               </li>
               <li>
                  <a href=\"#flats\">
                  ";
        // line 30
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["translate"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["flats"] ?? null) : null), "html", null, true);
        echo "
                  </a>
               </li>
               <li>
                  <a href=\"#aboutOfCompany\">
                  ";
        // line 35
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["translate"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["about_of_company"] ?? null) : null), "html", null, true);
        echo "
                  </a>
               </li>
               <li>
                  <a href=\"#contacts\">
                  ";
        // line 40
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["translate"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["contacts"] ?? null) : null), "html", null, true);
        echo "
                  </a>
               </li>
            </ul>
         </div>
         <div class=\"col d-flex align-items-center justify-content-end\">
            <div class=\"lang-switcher px-4 d-none d-sm-inline-block\">
               <a href=\"";
        // line 47
        if ((($context["lang"] ?? null) != "ru")) {
            echo "?lang=ru";
        } else {
            echo "#";
        }
        echo " \" class=\"lang-switcher__item ";
        if ((($context["lang"] ?? null) == "ru")) {
            echo "lang-switcher__item-active";
        }
        echo "\">RUS</a>
               <a href=\"";
        // line 48
        if ((($context["lang"] ?? null) != "kk")) {
            echo "?lang=kk";
        } else {
            echo "#";
        }
        echo "\" class=\"lang-switcher__item ";
        if ((($context["lang"] ?? null) == "kk")) {
            echo "lang-switcher__item-active";
        }
        echo "\">KZ</a>
            </div>
            <div class=\"contact-block d-//-none d-sm-inline-block\">
               <a href=\"tel:";
        // line 51
        echo twig_escape_filter($this->env, ($context["site_phone"] ?? null), "html", null, true);
        echo "\" class=\"contact-block__phone\">";
        echo twig_escape_filter($this->env, ($context["site_phone"] ?? null), "html", null, true);
        echo "</a>
               <span class=\"contact-block__short-address\">";
        // line 52
        echo twig_escape_filter($this->env, ($context["site_short_adress"] ?? null), "html", null, true);
        echo "</span>
               <a href=\"\" class=\"d-none d-lg-inline-block btn btn-gradient contact-block__callback-btn\" data-bs-toggle=\"modal\" data-bs-target=\"#callbackModal\">";
        // line 53
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["translate"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["leave_a_request"] ?? null) : null), "html", null, true);
        echo "</a>
            </div>
            <a href=\"#\" class=\"mobile-phone-data d-none d-inline-block d-xl-none ps-3\" onclick=\"let phoneNumber = document.querySelector('.contact-block__phone').textContent; window.location.href = 'tel:' + phoneNumber\">
            <i class=\"fas fa-phone\"></i>
            </a>
            <a href=\"#\" id=\"sidebarToggle\" class=\"d-inline-block d-xl-none ps-3\" onclick=\"frontend.sidebar(this.getAttribute('condition')); return false\">
               <svg class=\"ham hamRotate180 ham5\" viewBox=\"0 0 100 100\" width=\"80\" style=\"width: 50px;\">
                  <path class=\"line top\" d=\"m 10,33 h 40 c 0,0 8.5,-0.68551 8.5,10.375 0,8.292653 -6.122707,9.002293 -8.5,6.625 l -11.071429,-11.071429\"></path>
                  <path class=\"line middle\" d=\"m 70,50 h -40\"></path>
                  <path class=\"line bottom\" d=\"m 10,67 h 40 c 0,0 8.5,0.68551 8.5,-10.375 0,-8.292653 -6.122707,-9.002293 -8.5,-6.625 l -11.071429,11.071429\"></path>
               </svg>
            </a>
         </div>
      </div>
   </div>
</header>";
    }

    public function getTemplateName()
    {
        return "widgets/_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 53,  138 => 52,  132 => 51,  118 => 48,  106 => 47,  96 => 40,  88 => 35,  80 => 30,  72 => 25,  64 => 20,  56 => 15,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/_header.twig", "C:\\xampp\\htdocs\\alatau-two\\views\\widgets\\_header.twig");
    }
}
