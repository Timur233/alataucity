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

/* widgets/horisontal_callback.twig */
class __TwigTemplate_d05de79d737f2dacabb57f39776a26a2159e7377433ef47cd5463bbdad79c44f extends \Twig\Template
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
        echo "<section id=\"callback\" class=\"callback-h pb-6\">
    <div class=\"container-fluid\">
       <div class=\"callback-h__aplet\">
          <div class=\"container\">
             <div class=\"row\">
                <div class=\"col-12\">
                   <form class=\"mb-0\" action=\"\">
                      <div class=\"row position-relative callback-h__row align-items-center py-4\">
                         <div class=\"col-md-3 col-xl-3 py-3\">
                            <h5 class=\"callback-h__title\">Оставьте заявку,<br>Мы вам перезвоним</h5>
                         </div>
                         <div class=\"col-md-3 col-xl-3 py-3\">
                            <div class=\"form-group callback-h__group\">
                               <i class=\"fa fa-user callback-h__i\"></i>
                               <input type=\"text\" class=\"form-control promo-form__input\" id=\"staticTopFormName\" name=\"name\" placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["translate"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["name"] ?? null) : null), "html", null, true);
        echo "\" fieldname=\"Имя\">
                            </div>
                         </div>
                         <div class=\"col-md-3 col-xl-3 py-3\">
                            <div class=\"form-group callback-h__group\">
                               <i class=\"fa fa-phone callback-h__i\"></i>
                               <input type=\"text\" class=\"form-control promo-form__input\" id=\"staticTopFormPhone\" name=\"phone\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["translate"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["phone"] ?? null) : null), "html", null, true);
        echo "\" fieldname=\"Телефон\" required=\"required\">
                            </div>
                         </div>
                         <div class=\"col-md-3 col-xl-3 text-center py-3\">
                            <a href=\"#\" class=\"btn btn-white send-form-button\" onclick=\"frontend.form(this); return false\">";
        // line 25
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["translate"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["call_back_me"] ?? null) : null), "html", null, true);
        echo " <i class=\"fa fa-chevron-right ms-2\"></i></a>
                         </div>
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
        return "widgets/horisontal_callback.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 25,  62 => 21,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/horisontal_callback.twig", "C:\\xampp\\htdocs\\alatau-two\\views\\widgets\\horisontal_callback.twig");
    }
}
