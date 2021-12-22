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

/* widgets/thanks-msg.html */
class __TwigTemplate_b73ea644051af7bcf0f8008ed3782ed4e51af3e9cae5461680b6a463d6fccbc2 extends \Twig\Template
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
        echo "<div class=\"form_return\">
    ";
        // line 2
        if (($context["userName"] ?? null)) {
            // line 3
            echo "    <p class='mb-1'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translater"] ?? null), "thanks", [], "any", false, false, false, 3), "html", null, true);
            echo ", <strong>";
            echo twig_escape_filter($this->env, ($context["userName"] ?? null), "html", null, true);
            echo "</strong>!</p>
    <p>
        ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translater"] ?? null), "promise", [], "any", false, false, false, 5), "html", null, true);
            echo "
    </p>
    ";
            // line 7
            if (($context["isPresent"] ?? null)) {
                // line 8
                echo "    <div class=\"thanks-body\">
        <p class=\"thanks-body__p mb-2\">
            <img width=\"20px\" src=\"https://cms.abpx.kz/storage/uploads/2021/11/11/618cd6a64d98cparty-popper_1f389.png\">
            Заберите свой подарок:
            <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, ($context["presentLink"] ?? null), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, ($context["presentName"] ?? null), "html", null, true);
                echo "</a>
        </p>
        <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, ($context["presentLink"] ?? null), "html", null, true);
                echo "\" target=\"_blank\" class=\"mb-0 btn thanks-body__btn\">
            Подписаться
            <i class=\"fab fa-telegram-plane\"></i>
        </a>
    </div>
    ";
            }
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "    <p class='mb-1'><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translater"] ?? null), "thanks", [], "any", false, false, false, 21), "html", null, true);
            echo "!</strong></p>
    <p>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translater"] ?? null), "promise", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
    <a href=\"\" class=\"mb-0 btn btn-gradient\" data-bs-dismiss=\"modal\" aria-label=\"Close\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translater"] ?? null), "close", [], "any", false, false, false, 23), "html", null, true);
            echo "</a>
    ";
        }
        // line 25
        echo "</div>

<style>
    .thanks-body { background: rgb(202 223 239 / 49%); border-radius: 6px; padding: 24px; }
    .thanks-body__p { font-size: 1rem !important; }
    .thanks-body__btn { background: #5682a3; color: #fff !important; }
</style>";
    }

    public function getTemplateName()
    {
        return "widgets/thanks-msg.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 25,  91 => 23,  87 => 22,  82 => 21,  79 => 20,  70 => 14,  63 => 12,  57 => 8,  55 => 7,  50 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/thanks-msg.html", "/home/ex-time/public_html/views/widgets/thanks-msg.html");
    }
}
