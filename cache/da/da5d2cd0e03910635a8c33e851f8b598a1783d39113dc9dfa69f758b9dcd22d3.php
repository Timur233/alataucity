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
class __TwigTemplate_7c75e56329a921af90916f8e52966cd52a27d74ad046f9fef69687aeebc3a1dd extends \Twig\Template
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
            echo "    <p class='mb-1'>Спасибо, <strong>";
            echo twig_escape_filter($this->env, ($context["userName"] ?? null), "html", null, true);
            echo "</strong>!</p><p>Наш менеджер свяжется с вами в ближайшее время!</p>
    ";
            // line 4
            if (($context["isPresent"] ?? null)) {
                // line 5
                echo "    <div class=\"thanks-body\">
        <p class=\"thanks-body__p mb-2\">
            <img width=\"20px\" src=\"https://cms.abpx.kz/storage/uploads/2021/11/11/618cd6a64d98cparty-popper_1f389.png\">
            Заберите свой подарок:
            <a href=\"";
                // line 9
                echo twig_escape_filter($this->env, ($context["presentLink"] ?? null), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, ($context["presentName"] ?? null), "html", null, true);
                echo "</a>
        </p>
        <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, ($context["presentLink"] ?? null), "html", null, true);
                echo "\" target=\"_blank\" class=\"mb-0 btn thanks-body__btn\">
            Подписаться
            <i class=\"fab fa-telegram-plane\"></i>
        </a>
    </div>
    ";
            }
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "    <p class='mb-1'><strong>Спасибо!</strong></p><p>Наш менеджер свяжется с вами в ближайшее время!</p>
    <a href=\"\" class=\"mb-0 btn btn-gradient\" data-bs-dismiss=\"modal\" aria-label=\"Close\">Закрыть</a>
    ";
        }
        // line 21
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
        return array (  79 => 21,  74 => 18,  71 => 17,  62 => 11,  55 => 9,  49 => 5,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/thanks-msg.html", "/home/tamarix/public_html/views/widgets/thanks-msg.html");
    }
}
