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

/* index.html */
class __TwigTemplate_d1bee87e92ed8c2a5b73410694d9f815b7dc90b2c1884a24da5c9e355c27718b extends \Twig\Template
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
        echo "<html lang=\"ru\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

    <title>";
        // line 6
        echo twig_escape_filter($this->env, ($context["site_title"] ?? null), "html", null, true);
        echo "</title>
    <link rel=\"shortcut icon\" href=\"https://cms.abpx.kz/";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site_favicon"] ?? null), "path", [], "any", false, false, false, 7), "html", null, true);
        echo "\" type=\"image/png\">
    <link rel=\"stylesheet\" href=\"assets/css/bootstrap.css?v=3\" />
    <link rel=\"stylesheet\" href=\"assets/css/swiper.min.css\" />
    <link rel=\"stylesheet\" href=\"assets/css/all.min.css\" />
    <link rel=\"stylesheet\" href=\"assets/css/style.css?v=21\" />
  
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KGRKTW4');</script>
<!-- End Google Tag Manager -->
  
  </head>
  <body class=\"nightMode\">
  
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-KGRKTW4\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  
  <div id=\"shadow\" onclick=\"sideBarToggle('open'); return false\"></div>

    <div id=\"preloader\">
      <div class=\"preloader-content\">
        <img src=\"https://cms.abpx.kz";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["advantages_logo"] ?? null), "path", [], "any", false, false, false, 33), "html", null, true);
        echo "\" alt=\"\">
      </div>
    </div>

    <div class=\"sidebar position-fixed\">
      <nav class=\"p-4 text-center h-100\" style=\"display: flex; flex-direction: column;\">
        <a href=\"#\" class=\"close\" onclick=\"sideBarToggle('open'); return false\"><span></span><span></span></a>
        <a href=\"#\" onclick=\"sideBarToggle('open');\">
          <img src=\"https://cms.abpx.kz";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site_second_logo"] ?? null), "path", [], "any", false, false, false, 41), "html", null, true);
        echo "\" alt=\"\">
        </a>
        <ul>
          <li>
            <a href=\"#home\" onclick=\"sideBarToggle('open');\">Главная</a>
          </li>
          <li>
            <a href=\"#about\" onclick=\"sideBarToggle('open');\">О проекте</a>
          </li>
          <li>
            <a href=\"#concept\" onclick=\"sideBarToggle('open');\">Концепция</a>
          </li>
          <li>
            <a href=\"#flats\" onclick=\"sideBarToggle('open');\">Выбрать квартиру</a>
          </li>
          <li>
            <a href=\"#architec\" onclick=\"sideBarToggle('open');\">Архитектура</a>
          </li>
          <li>
            <a href=\"#buildingSteps\" onclick=\"sideBarToggle('open');\">Ход строительства</a>
          </li>
          <li>
            <a href=\"#contacts\" onclick=\"sideBarToggle('open');\">Контакты</a>
          </li>
        </ul>
        <div class=\"call\">
          <a href=\"tel:";
        // line 67
        echo twig_escape_filter($this->env, ($context["site_phone"] ?? null), "html", null, true);
        echo "\" class=\"phone\" onclick=\"sideBarToggle('open');\"><i class=\"fas fa-phone-alt me-2\"></i> ";
        echo twig_escape_filter($this->env, ($context["site_phone"] ?? null), "html", null, true);
        echo "</a>
          <a href=\"\" class=\"btn btn-gradient\" data-bs-toggle=\"modal\" data-bs-target=\"#callbackModal\" onclick=\"sideBarToggle('open');\">Оставить заявку</a>
        </div>
      </nav>
    </div>

    <header class=\"position-absolute align-items-center w-100\" style=\"z-index: 999\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-4 col-md-5 col-lg d-flex align-items-center justify-content-start menu\">
            <a href=\"tel:";
        // line 77
        echo twig_escape_filter($this->env, ($context["site_phone"] ?? null), "html", null, true);
        echo "\" id=\"phoneGroup\">
              <img src=\"assets/img/phone.svg\" alt=\"\">
              <span class=\"phoneNumber\">";
        // line 79
        echo twig_escape_filter($this->env, ($context["site_phone"] ?? null), "html", null, true);
        echo "</span><br>
              <span class=\"info\">Отдел продаж</span>
            </a>
          </div>
          <div class=\"d-none d-lg-flex col-lg-2 col-xl-3 pe-lg-4 pe-xxl-5 d-flex align-items-center justify-content-end\">
            <ul class=\"nav-menu left text-end\">
              <li>
                <a href=\"#about\">
                  О Комплексе
                </a>
              </li>
              <li>
                <a href=\"#flats\">
                  Квартиры
                </a>
              </li>
            </ul>
          </div>
          <div class=\"col-4 col-md-2 col-lg-2 col-xl-1 col-xxl-1 d-flex brand align-items-center justify-content-center\">
            <a class=\"navbar-brand d-inline-block rounded-bottom px-4 py-2 m-0\" href=\"#home\">
              <img src=\"https://cms.abpx.kz";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site_logo"] ?? null), "path", [], "any", false, false, false, 99), "html", null, true);
        echo "\" data-first=\"https://cms.abpx.kz";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site_logo"] ?? null), "path", [], "any", false, false, false, 99), "html", null, true);
        echo "\" data-second=\"https://cms.abpx.kz";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site_second_logo"] ?? null), "path", [], "any", false, false, false, 99), "html", null, true);
        echo "\" class=\"px-2 py-1\" alt=\"\" />
            </a>
          </div>
          <div class=\"d-none d-lg-flex col-lg-2 col-xl-3 ps-lg-4 ps-xxl-5 d-flex align-items-center justify-content-start\">
            <ul class=\"nav-menu right text-start\">
              <li>
                <a href=\"#concept\">
                  Концепция
                </a>
              </li>
              <li>
                <a href=\"#contacts\">
                  Контакты
                </a>
              </li>
            </ul>
          </div>
          <div class=\"col-4 col-md-5 col-lg d-flex align-items-center justify-content-end\">
            <a href=\"\" class=\"d-none d-lg-inline-block btn btn-gradient\" data-bs-toggle=\"modal\" data-bs-target=\"#callbackModal\">Оставить заявку</a>
            <a href=\"#\" id=\"sidebarToggle\" class=\"d-inline-block d-lg-none\" onclick=\"sideBarToggle(this.getAttribute('condition')); return false\">
              <svg class=\"ham hamRotate180 ham5\" viewBox=\"0 0 100 100\" width=\"80\" style=\"width: 50px;\">
                <path class=\"line top\" d=\"m 10,33 h 40 c 0,0 8.5,-0.68551 8.5,10.375 0,8.292653 -6.122707,9.002293 -8.5,6.625 l -11.071429,-11.071429\"></path>
                <path class=\"line middle\" d=\"m 70,50 h -40\"></path>
                <path class=\"line bottom\" d=\"m 10,67 h 40 c 0,0 8.5,0.68551 8.5,-10.375 0,-8.292653 -6.122707,-9.002293 -8.5,-6.625 l -11.071429,11.071429\"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </header>

    <section id=\"home\" class=\"slider h-100\" style=\"/*background: linear-gradient(90deg, #7F98AE 0%, #6E869C 53.84%, #6C8398 100%);*/     background: linear-gradient(to bottom, #5280a0 0%,#66a2e8 70%,#5b7983 100%);\">
      <div class=\"cloud decor1 parallax__layer\" style=\"background-image: url('assets/img/decor1.png')\" data-speed=\"30\"></div>
      <div class=\"cloud decor2 parallax__layer\" style=\"background-image: url('assets/img/decor2.png')\" data-speed=\"30\"></div>
      <div class=\"city parallax__layer\" style=\"background-image: url('https://cms.abpx.kz";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slide_img"] ?? null), "path", [], "any", false, false, false, 133), "html", null, true);
        echo "')\" data-speed=\"50\"></div>
      <div class=\"crop\" style=\"background-image: url('https://cms.abpx.kz";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slide_bottom"] ?? null), "path", [], "any", false, false, false, 134), "html", null, true);
        echo "')\"></div>
      <div class=\"container position-relative d-flex align-items-center h-100\">
        <div class=\"section-slider-content\">
          <div class=\"row\">
            <div class=\"col-md-12 col-lg-12 text-center\">
              <h1>";
        // line 139
        echo twig_escape_filter($this->env, ($context["slide_title"] ?? null), "html", null, true);
        echo "</h1>
              <div class=\"slider_content py-4 px-5\">
                <span>";
        // line 141
        echo twig_escape_filter($this->env, ($context["slide_desc"] ?? null), "html", null, true);
        echo "</span>
                <h3>";
        // line 142
        echo twig_escape_filter($this->env, ($context["slide_desc_2"] ?? null), "html", null, true);
        echo "</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
  \t<section id=\"reasons\" class=\"reasons pt-6 pb-6 pb-md-0\">
      <div class=\"container\">
        <h2 class=\"sectionTitle\">
          <span class=\"color\">";
        // line 153
        echo twig_escape_filter($this->env, ($context["reasons_color_title"] ?? null), "html", null, true);
        echo "</span>
          ";
        // line 154
        echo twig_escape_filter($this->env, ($context["reasons_title"] ?? null), "html", null, true);
        echo "
          <span class=\"ghostTitle\">";
        // line 155
        echo twig_escape_filter($this->env, ($context["reasons_ghost_title"] ?? null), "html", null, true);
        echo "</span>
        </h2>
        <div class=\"gallery-swiper swiper-container py-4\">
          <div class=\"swiper-wrapper\">
            ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reasons_gallery"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 160
            echo "              <div class=\"swiper-slide\">
                <a data-fslightbox=\"first-lightbox\" href=\"https://cms.abpx.kz";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, false, 161), "html", null, true);
            echo "\">
                  <img src=\"https://cms.abpx.kz";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, false, 162), "html", null, true);
            echo "\" alt=\"\">
                </a>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "          </div>
        <div class=\"swiper-button-next\"></div>
      \t<div class=\"swiper-button-prev\"></div>
        </div>
      </div>
    </section>
  
  \t";
        // line 173
        if (($context["discounst"] ?? null)) {
            // line 174
            echo "    <section id=\"discount\" class=\"discount pt-0 pb-6 pt-md-6 pb-md-0\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-12 mb-5 mb-md-0 mу-auto d-flex align-items-center\">
            <div class=\"about_block\">
              <h2 class=\"sectionTitle\">
                ";
            // line 181
            echo twig_escape_filter($this->env, ($context["discounst_title"] ?? null), "html", null, true);
            echo "
                <span class=\"color\">";
            // line 182
            echo twig_escape_filter($this->env, ($context["discounst_color_title"] ?? null), "html", null, true);
            echo "</span>
                <span class=\"ghostTitle\">";
            // line 183
            echo twig_escape_filter($this->env, ($context["discounst_ghost_title"] ?? null), "html", null, true);
            echo "</span>
              </h2>
              ";
            // line 185
            echo ($context["discounst_text"] ?? null);
            echo "
            </div>
          </div>

          <div class=\"col-12 text-center mt-3\">
              <picture>
                <source media=\"(max-width: 550px)\" srcset=\"https://cms.abpx.kz";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["discounst_image_phone"] ?? null), "path", [], "any", false, false, false, 191), "html", null, true);
            echo "\">
                <source media=\"(max-width: 768px)\" srcset=\"https://cms.abpx.kz";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["discounst_image_ipad"] ?? null), "path", [], "any", false, false, false, 192), "html", null, true);
            echo "\">
                <img src=\"https://cms.abpx.kz";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["discounst_image"] ?? null), "path", [], "any", false, false, false, 193), "html", null, true);
            echo "\" class=\"w-100\" alt=\"";
            echo twig_escape_filter($this->env, ($context["discounst_title"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["discounst_color_title"] ?? null), "html", null, true);
            echo "\">
              </picture>
          </div>

        </div>
      </div>
    </section>
    ";
        }
        // line 201
        echo "
    <section id=\"about\" class=\"aboutUsBlock pb-6 pt-0 py-md-6\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-md-12 col-lg-5 order-1 order-md-1 order-lg-0 mt-5 mt-md-5 mb-lg-0 mt-lg-0\">
            <div class=\"img-block\">
              <img src=\"https://cms.abpx.kz";
        // line 208
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["about_image"] ?? null), "path", [], "any", false, false, false, 208), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["about_title"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["about_title_color"] ?? null), "html", null, true);
        echo "\">
            </div>
          </div>

          <div class=\"col-md-12 col-lg-7 px-lg-5 d-flex align-items-center order-0 order-md-0 order-lg-1\">
            <div class=\"about_block\">
              <h2 class=\"sectionTitle\">
                ";
        // line 215
        echo twig_escape_filter($this->env, ($context["about_title"] ?? null), "html", null, true);
        echo "
                <span class=\"color\">";
        // line 216
        echo twig_escape_filter($this->env, ($context["about_title_color"] ?? null), "html", null, true);
        echo "</span>
                <span class=\"ghostTitle\">";
        // line 217
        echo twig_escape_filter($this->env, ($context["about_ghost_title"] ?? null), "html", null, true);
        echo "</span>
              </h2>
              ";
        // line 219
        echo ($context["about_desc"] ?? null);
        echo "
              <a href=\"#flats\" class=\"btn btn-gradient mt-3\">Выбрать квартиру</a>
            </div>
          </div>

        </div>

      </div>
    </section>
  
    <section id=\"flats\" class=\"selectFloor py-6 bg-light\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12 col-lg-6 mb-4 mb-lg-0\">
            <h2 class=\"sectionTitle\">Выбор <span class=\"color\">квартиры</span></h2>
            <p class=\"mb-2\">Количество комнат:</p>
            <div id=\"roomButtons\" class=\"d-inline-block w-100\">
              <a class=\"btn btn-outline-shahar me-2 mb-3 rooms\" data-filter=\"1\" href=\"#\">1 комнатные</a>
              <a class=\"btn btn-outline-shahar active me-2 mb-3 rooms\" data-filter=\"2\" href=\"#\">2-х комнатные</a>
              <a class=\"btn btn-outline-shahar me-2 mb-3 rooms\" data-filter=\"3\" href=\"#\">3-х комнатные</a>
              <a class=\"btn btn-outline-shahar me-2 mb-3 rooms\" data-filter=\"4\" href=\"#\">4-х комнатные</a>
            </div>
            <p class=\"mb-2\">Этаж:</p>
            <div id=\"floorButtons\" class=\"d-inline-block w-100\">
              <a
                class=\"btn btn-outline-shahar gold me-2 mb-3 sections\"
                data-filter=\"1\"
                href=\"#\"
                >1</a
              >
              <a
                class=\"btn btn-outline-shahar gold me-2 mb-3 sections\"
                data-filter=\"2\"
                href=\"#\"
                >2</a
              >
              <a
                class=\"btn btn-outline-shahar gold me-2 mb-3 sections\"
                data-filter=\"3\"
                href=\"#\"
                >3</a
              >
              <a
                class=\"btn btn-outline-shahar gold me-2 mb-3 sections\"
                data-filter=\"4\"
                href=\"#\"
                >4</a
              >
              <a
                class=\"btn btn-outline-shahar gold me-2 mb-3 sections\"
                data-filter=\"5\"
                href=\"#\"
                >5</a
              >
              <a
                class=\"btn btn-outline-shahar gold me-2 mb-3 sections\"
                data-filter=\"6\"
                href=\"#\"
                >6</a
              >
              <a
                class=\"btn btn-outline-shahar gold me-2 mb-3 sections\"
                data-filter=\"7\"
                href=\"#\"
                >7</a
              >
              <a
                class=\"btn btn-outline-shahar gold me-2 mb-3 sections\"
                data-filter=\"8\"
                href=\"#\"
                >8</a
              >
              <a
                class=\"btn btn-outline-shahar gold me-2 mb-3 sections\"
                data-filter=\"9\"
                href=\"#\"
                >9</a
              >
              <a
                class=\"btn btn-outline-shahar gold me-2 mb-3 sections\"
                data-filter=\"10\"
                href=\"#\"
                >10</a
              >
              <a
                class=\"btn btn-outline-shahar gold me-2 mb-3 sections\"
                data-filter=\"11\"
                href=\"#\"
                >11</a
              >
              <a
                class=\"btn btn-outline-shahar gold me-2 mb-3 sections\"
                data-filter=\"12\"
                href=\"#\"
                >12</a
              >
            </div>
            <p class=\"mb-2\">Площадь:</p>
            <div id=\"squareButtons\" class=\"d-inline-block w-100\">
              <a
                class=\"btn btn-outline-shahar me-2 mb-3 square\"
                data-filter=\"122.5\"
                href=\"#\"
                >122.5 м2</a
              >
              <a
                class=\"btn btn-outline-shahar me-2 mb-3 square\"
                data-filter=\"95.5\"
                href=\"#\"
                >95.5 м2</a
              >
              <a
                class=\"btn btn-outline-shahar me-2 mb-3 square\"
                data-filter=\"150.5\"
                href=\"#\"
                >150.5 м2</a
              >
              <a
                class=\"btn btn-outline-shahar me-2 mb-3 square\"
                data-filter=\"60.5\"
                href=\"#\"
                >60.5 м2</a
              >
            </div>
          </div>
          <div class=\"col-12 col-lg-6 d-inline-block d-md-flex\">
            <div class=\"w-100 overflow-hidden plansCarousel position-relative\">
              <div class=\"swiper-flats\">
                <div class=\"swiper-wrapper\">
                  <div class=\"swiper-slide\">
                    <div class=\"bg-white w-100 h-100 p-4\">
                      <div class=\"row h-100\">
                        <div class=\"col-md-5 floot-info d-flex flex-wrap\">
                          <div class=\"floor-data align-items-start\">
                            <h4>1 комнатная</h4>
                            <p>Площадь: <b>60.5 м2</b></p>
                            <p>Дата сдачи: <b>2022/первый квартал</b></p>
                            <div>
                              <span>Стоимость от: </span>
                              <h6>18 530 000 тг</h6>
                              <b>от 306 280 за м2</b>
                            </div>
                          </div>
                          <div class=\"orderBottons mt-auto align-items-end\">
                            <a href=\"\" class=\"btn btn-gradient\"
                            >Оставить заявку <i class=\"fas fa-chevron-right\"></i
                            ></a>
                            <a
                                    class=\"downloadPlan\"
                                    data-fancybox
                                    data-caption=\"3-х комнатная\"
                                    href=\"assets/img/plan.png\"
                            >Скачать планировку</a
                            >
                          </div>
                        </div>
                        <div class=\"col-md-7 floor-plan\">
                          <a
                                  href=\"assets/img/plan.png\"
                                  data-fancybox
                                  data-caption=\"3-х комнатная\"
                          >
                            <img src=\"assets/img/plan.png\" />
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"swiper-slide\">
                    <div class=\"bg-white w-100 h-100 p-4\">
                      <div class=\"row h-100\">
                        <div class=\"col-md-5 floot-info d-flex flex-wrap\">
                          <div class=\"floor-data align-items-start\">
                            <h4>1 комнатная</h4>
                            <p>Площадь: <b>60.5 м2</b></p>
                            <p>Дата сдачи: <b>2022/первый квартал</b></p>
                            <div>
                              <span>Стоимость от: </span>
                              <h6>18 530 000 тг</h6>
                              <b>от 306 280 за м2</b>
                            </div>
                          </div>
                          <div class=\"orderBottons mt-auto align-items-end\">
                            <a href=\"\" class=\"btn btn-gradient\"
                            >Оставить заявку <i class=\"fas fa-chevron-right\"></i
                            ></a>
                            <a
                                    class=\"downloadPlan\"
                                    data-fancybox
                                    data-caption=\"3-х комнатная\"
                                    href=\"assets/img/plan.png\"
                            >Скачать планировку</a
                            >
                          </div>
                        </div>
                        <div class=\"col-md-7 floor-plan\">
                          <a
                                  href=\"assets/img/plan.png\"
                                  data-fancybox
                                  data-caption=\"3-х комнатная\"
                          >
                            <img src=\"assets/img/plan.png\" />
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"swiper-button-next\"></div>
                <div class=\"swiper-button-prev\"></div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <script type=\"text/javascript\">
        var offersAll = ";
        // line 438
        echo ($context["offers"] ?? null);
        echo "
      </script>

    </section>

    <section id=\"advantages\" class=\"advantages py-6\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12 col-lg-4 pe-lg-5\">
            ";
        // line 447
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 448
            echo "            <div class=\"advantage text-end bg-light mb-3 p-4\">
              <span>";
            // line 449
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</span>
              <h3>";
            // line 450
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["advantages_items"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "children", [], "any", false, false, false, 450)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "settings", [], "any", false, false, false, 450), "text", [], "any", false, false, false, 450), "html", null, true);
            echo "</h3>
              ";
            // line 451
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["advantages_items"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "children", [], "any", false, false, false, 451)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[1] ?? null) : null), "settings", [], "any", false, false, false, 451), "text", [], "any", false, false, false, 451);
            echo "
              <img src=\"assets/img/arrow.svg\" class=\"arrow\">
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 455
        echo "          </div>
          <div class=\"col-md-12 col-lg-4 px-6 px-lg-2 d-flex align-content-center px-5 advantage-logo py-3 py-sm-5 py-lg-0 mb-2 mb-lg-0\">
            <img src=\"https://cms.abpx.kz";
        // line 457
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["advantages_logo"] ?? null), "path", [], "any", false, false, false, 457), "html", null, true);
        echo "\" class=\"advantagesLogo w-100\">
          </div>
          <div class=\"col-md-12 col-lg-4 ps-lg-5\">
            ";
        // line 460
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(3, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 461
            echo "            <div class=\"advantage text-start bg-light mb-3 p-4\">
              <span>";
            // line 462
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</span>
              <h3>";
            // line 463
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["advantages_items"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[$context["i"]] ?? null) : null), "children", [], "any", false, false, false, 463)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null), "settings", [], "any", false, false, false, 463), "text", [], "any", false, false, false, 463), "html", null, true);
            echo "</h3>
              ";
            // line 464
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["advantages_items"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[$context["i"]] ?? null) : null), "children", [], "any", false, false, false, 464)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[1] ?? null) : null), "settings", [], "any", false, false, false, 464), "text", [], "any", false, false, false, 464);
            echo "
              <img src=\"assets/img/arrow.svg\" class=\"arrow\">
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 468
        echo "          </div>
        </div>
      </div>
    </section>

    <section id=\"concept\" class=\"concept bg-green\">
      <div class=\"container-fluid container-xxl\">
        <div class=\"row\">
          <div class=\"col-12 col-md-6 col-lg-6 align-items-center d-flex order-0 order-md-0\">
            <div class=\"content ps-4 pe-4 ps-md-5 py-5 py-md-5\">
              <h2 class=\"sectionTitle\">
                ";
        // line 479
        echo twig_escape_filter($this->env, ($context["concept_title_1"] ?? null), "html", null, true);
        echo "
                <span class=\"color\">";
        // line 480
        echo twig_escape_filter($this->env, ($context["concept_color_title_1"] ?? null), "html", null, true);
        echo "</span>
                <span class=\"ghostTitle\">";
        // line 481
        echo twig_escape_filter($this->env, ($context["concept_ghost_title_1"] ?? null), "html", null, true);
        echo "</span>
              </h2>
              ";
        // line 483
        echo ($context["concept_text_1"] ?? null);
        echo "
            </div>
          </div>
          <div class=\"col-12 col-md-6 col-lg-6 col-xl-6 px-0 order-1 order-md-1\">
            <div class=\"img-block\">
              <img src=\"https://cms.abpx.kz";
        // line 488
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["concept_image_1"] ?? null), "path", [], "any", false, false, false, 488), "html", null, true);
        echo "\" alt=\"\">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id=\"architec\" class=\"architec bg-light\">
      <div class=\"container-fluid container-xxl\">
        <div class=\"row\">
          <div class=\"col-md-6 col-lg-6 col-xl-6 px-0 order-1 order-md-0\">
            <div class=\"img-block\">
              <img src=\"https://cms.abpx.kz";
        // line 500
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["concept_image_2"] ?? null), "path", [], "any", false, false, false, 500), "html", null, true);
        echo "\" alt=\"\">
            </div>
          </div>
          <div class=\"col-md-6 col-lg-6 align-items-center d-flex order-0 order-md-1\">
            <div class=\"content ps-4 pe-4 ps-md-5 py-5 py-md-5\">
              <h2 class=\"sectionTitle\">
                ";
        // line 506
        echo twig_escape_filter($this->env, ($context["contept_title_2"] ?? null), "html", null, true);
        echo "
                <span class=\"color\">";
        // line 507
        echo twig_escape_filter($this->env, ($context["concept_color_title_2"] ?? null), "html", null, true);
        echo "</span>
                <span class=\"ghostTitle\">";
        // line 508
        echo twig_escape_filter($this->env, ($context["concept_ghost_title_2"] ?? null), "html", null, true);
        echo "</span>
              </h2>
              ";
        // line 510
        echo ($context["concept_text_2"] ?? null);
        echo "
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id=\"buildingSteps\" class=\"buildingSteps py-6\">
      <div class=\"container\">

        <h2 class=\"sectionTitle mt-5\">
          ";
        // line 521
        echo twig_escape_filter($this->env, ($context["steps_title"] ?? null), "html", null, true);
        echo "
          <span class=\"color\">";
        // line 522
        echo twig_escape_filter($this->env, ($context["steps_color_title"] ?? null), "html", null, true);
        echo "</span>
          <span class=\"ghostTitle\">";
        // line 523
        echo twig_escape_filter($this->env, ($context["steps_ghost_title"] ?? null), "html", null, true);
        echo "</span>
        </h2>

        <div class=\"steps-swiper swiper-container py-4\">
          <div class=\"swiper-wrapper\">
            ";
        // line 528
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["steps_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 529
            echo "            <div class=\"swiper-slide\" style=\"background-image: url(https://cms.abpx.kz";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 529)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[2] ?? null) : null), "settings", [], "any", false, false, false, 529), "image", [], "any", false, false, false, 529), "path", [], "any", false, false, false, 529), "html", null, true);
            echo ")\">
                <div class=\"step-information\">
                  <h3>";
            // line 531
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 531)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[0] ?? null) : null), "settings", [], "any", false, false, false, 531), "text", [], "any", false, false, false, 531), "html", null, true);
            echo "</h3>
                  ";
            // line 532
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 532)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[1] ?? null) : null), "settings", [], "any", false, false, false, 532), "gallery", [], "any", false, false, false, 532)) {
                // line 533
                echo "                    <a href=\"#\" class=\"btn btn-gradient\" data-gallery-images=\"";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 533)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[1] ?? null) : null), "settings", [], "any", false, false, false, 533), "gallery", [], "any", false, false, false, 533));
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
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, false, 533), "html", null, true);
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 533) == false)) {
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
                echo "\"  onclick=\"creiateLightbox(this.getAttribute('data-gallery-images')); return false\">Открыть</a>
                  ";
            }
            // line 535
            echo "                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 538
        echo "          </div>

        </div>

      </div>
    </section>

    <section id=\"contacts\" class=\"new-map\">
      <div class=\"container-fluid\">
        <div id=\"map\" style=\"height: 600px\"></div>
        <div class=\"contacts-content align-items-center d-flex\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-8 col-lg-5 ms-auto\">
                <div class=\"callback-form p-xl-6 p-lg-5 p-md-5 p-6 bg-white\">
                  <form class=\"mb-0\" action=\"\">
                    <h2 class=\"sectionTitle\">
                      Оставить
                      <span class=\"color\">заявку</span>
                    </h2>
                    <div class=\"mb-3\">
                      <input type=\"text\" class=\"form-control\" id=\"staticFormName\" name=\"name\" placeholder=\"Имя\">
                    </div>
                    <div class=\"mb-3\">
                      <input type=\"text\" class=\"form-control\" id=\"staticFormPhone\" name=\"phone\" placeholder=\"Телефон\" required=\"required\">
                    </div>
                    <div class=\"d-inline-block\">
                      <a href=\"#\" class=\"btn btn-gradient float-start sendFormButton\" onclick=\"validateForm(this); return false\">Отправить</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer id=\"footer\" class=\"py-4\">
      <div class=\"container text-center text-sm-start\">
        <div class=\"row\">
          <div class=\"col-md-4 me-auto\">
            <a href=\"https://exin.kz/\" target=\"_blank\">
              <img src=\"assets/img/ex-logo-gr.svg\" class=\"logo\">
            </a>
          </div>
          <div class=\"col-md-8\">
            <ul class=\"footer-menu\">
              <li>
                <a href=\"tel:";
        // line 587
        echo twig_escape_filter($this->env, ($context["site_phone"] ?? null), "html", null, true);
        echo "\"
                ><i class=\"fas fa-phone-alt me-2\"></i> ";
        // line 588
        echo twig_escape_filter($this->env, ($context["site_phone"] ?? null), "html", null, true);
        echo "</a
                >
              </li>
              <li>
                ";
        // line 592
        if (($context["site_insta"] ?? null)) {
            // line 593
            echo "                <a href=\"https://instagram.com/";
            echo twig_escape_filter($this->env, ($context["site_insta"] ?? null), "html", null, true);
            echo "\" target=\"_blank\"
                ><i class=\"fab fa-instagram me-2\"></i> ";
            // line 594
            echo twig_escape_filter($this->env, ($context["site_insta"] ?? null), "html", null, true);
            echo "</a
                >
                ";
        }
        // line 597
        echo "              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"callbackModal\" tabindex=\"-1\" aria-labelledby=\"callbackModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
          <div class=\"modal-body\">
            <a href=\"#\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></a>
            <h5 class=\"modal-title\" id=\"callbackModalLabel\">Оставить заявку</h5>
            <form action=\"\">
              <div class=\"mb-3\">
                <input type=\"text\" class=\"form-control\" id=\"formName\" name=\"name\" placeholder=\"Имя\">
              </div>
              <div class=\"mb-3\">
                <input type=\"text\" class=\"form-control\" id=\"formPhone\" name=\"phone\" placeholder=\"Телефон\" required=\"\">
              </div>
              <div>
                <a href=\"#\" class=\"btn btn-gradient float-start sendFormButton\" onclick=\"validateForm(this); return false\">Отправить</a>
              </div>
              <!--div class=\"preloader\" style=\"display: none\">
                <img src=\"../assets/img/preloader\" alt=\"\">
              </div-->
            </form>
          </div>
        </div>
      </div>
    </div>

  </body>
  <script src=\"assets/js/bootstrap.min.js\"></script>
  <script src=\"assets/js/swiper.min.js\"></script>
  <script src=\"assets/js/fslightbox.js\"></script>
  <script
    src=\"https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=c931e95f-6835-4672-9786-8ec02a9db87a\"
    type=\"text/javascript\"
  ></script>
  <script>
  \tdocument.addEventListener(\"DOMContentLoaded\", domReady)

    function domReady() {
    
    \t
  
  \t//Photo Gallery
    var gallery = new Swiper('.gallery-swiper', {
        loop: false,
        slidesPerView: slides,
        initialSlide: 0,
        keyboardControl: true,
        mousewheelControl: true,
        autoHeight: true,
      \tspaceBetween: margin,
    \tnavigation: {
          nextEl: \".swiper-button-next\",
          prevEl: \".swiper-button-prev\",
        },
      })

      //Marker
      console.log(\"%cExclusive Qurylys with Iskandarov Timur\", \"color:#fff; background-color:#7eb621; padding: 8px 15px; font-size: 14px; border-radius: 4px; text-align:center\")

      //Slider paralax
      var scrollPosition = 0
      var decor1 = document.querySelector('.decor1')
      var decor2 = document.querySelector('.decor2')
      var header = document.querySelector('header')
      var logo = document.querySelector('header a.navbar-brand img')
      
      document.addEventListener('scroll', function () {
        
      \tif (window.pageYOffset < 700) {
       \t\tscroll1 = window.pageYOffset / 4
        \tscroll2 = window.pageYOffset / 20
        \tdecor1.style.transform = \"translateY(-\" + scroll1 + \"px)\"
        \tdecor2.style.transform = \"translateY(-\" + scroll2 + \"px)\"
        } else {
        \tif (!header.classList.contains('ymap')) {
            \theader.classList.add('ymap')
        \t\tymaps.ready(init)
            }
        }
      \t
      \tif (window.pageYOffset > 150)\t{
        \theader.classList.add('fixed')
        \tlogo.src = logo.getAttribute('data-second')
        \t
        } else {
        \theader.classList.remove('fixed')
        \tlogo.src = logo.getAttribute('data-first')
        }
      \t
      \tif (window.pageYOffset > 350)\t{
        \tif (!header.classList.contains('sticky')) {
        \t\theader.classList.add('sticky')
            }
        } else {
        \tif (header.classList.contains('sticky')) {
        \t\theader.classList.remove('sticky')
            }
        }
      
      })

      //Swiper Flats
      var flats = new Swiper('.swiper-flats', {
        spaceBetween: 20,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      })

      let steps_items = document.querySelectorAll('.steps-swiper .swiper-slide')
      steps_items.forEach(function (step) {
        let height = (step.offsetWidth / 16) * 12
        step.style.height = height
      })

      //Preloader
      fade(document.getElementById('preloader'))
      function fade(element) {
        var op = 1;  // initial opacity
        var timer = setInterval(function () {
          if (op <= 0.1){
            clearInterval(timer);
            element.style.display = 'none';
          }
          element.style.opacity = op;
          element.style.filter = 'alpha(opacity=' + op * 100 + \")\";
          op -= op * 0.1;
        }, 0.1);
      }

    }

      //Building Steps
  \t  let slidesPerView = 2
      let effect = 'coverflow'
      let center = true
      let margin = 0
  \t  if (window.innerWidth < 768) {
      \tslidesPerView = 1.3
      \teffect = ''
      \tcenter = false
     \tmargin = 25
      } 
  \t  if (window.innerWidth < 576) {
\t\t   slidesPerView = 1.2
      }
      var steps = new Swiper('.steps-swiper', {
        effect: effect,
        loop: false,
        centeredSlides: center,
        slidesPerView: slidesPerView,
        initialSlide: 0,
        keyboardControl: true,
        mousewheelControl: true,
        lazyLoading: true,
        centeredSlides: center,
        preventClicks: false,
        preventClicksPropagation: false,
        lazyLoadingInPrevNext: true,
      \tspaceBetween: margin,
        coverflow: {
          rotate: 0,
          stretch: 150,
          depth: 200,
          modifier: 1,
          slideShadows: false,
        },
      })

    //Steps Gallery
    function creiateLightbox(data) {

      var lightbox = new FsLightbox()
      data = data.split(',')
      lightbox.props.sources = data
      lightbox.props.onInit
      lightbox.open()

    }

    //appartaments
    filterOffers(offersAll)

    function getRooms(offers, filters) {
      //console.log(offersAll)
      let roomsBtnHtml = \"\"
      let roomsNumberArray = []
      for (var offer in offersAll) {
        if (!roomsNumberArray.includes(offersAll[offer].rooms)) {
          roomsNumberArray.push(offersAll[offer].rooms)
          roomsBtnHtml = roomsBtnHtml + '<a class=\"btn btn-outline-shahar me-2 mb-3 rooms\" data-filter=\"'+offersAll[offer].rooms+'\" href=\"#\" onclick=\"activateButton(\\'#roomButtons\\' ,this.getAttribute(\\'data-filter\\')); filterOffers(offersAll); return false\">'+offersAll[offer].rooms + (offersAll[offer].rooms != 1 ? '-х' : '') + ' комнатные</a>'
        }
      }
      let rooms = document.getElementById('roomButtons')
      rooms.innerHTML = roomsBtnHtml
      if (filters.room == '') {
        let activeRoom = document.querySelector('#roomButtons .btn:first-child')
        activeRoom.classList.add(\"active\")
      } else {
        let activeRoom = document.querySelector('#roomButtons [data-filter=\"'+filters.room+'\"]')
        activeRoom.classList.add(\"active\")
      }
    }

    function getFloors(offers, filters) {
      let floorsBtnHtml = \"\"
      let floorsNumberArray = []
      for (var offer in offers) {
        for (var floor in offers[offer].floors) {
          if (!floorsNumberArray.includes(offers[offer].floors[floor])) {
            floorsNumberArray.push(offers[offer].floors[floor])
            floorsBtnHtml = floorsBtnHtml + '<a class=\"btn btn-outline-shahar gold me-2 mb-3 sections\" data-filter=\"'+offers[offer].floors[floor]+'\" href=\"#\" onclick=\"activateButton(\\'#floorButtons\\', this.getAttribute(\\'data-filter\\')); filterOffers(offersAll); return false\">'+offers[offer].floors[floor]+'</a>'
          }
        }
      }
      let floors = document.getElementById('floorButtons')
      floors.innerHTML = floorsBtnHtml
      if (filters.floor != '') {
        let activeFloor = document.querySelector('#floorButtons [data-filter=\"'+filters.floor+'\"]')
        if (activeFloor) {
          activeFloor.classList.add(\"active\")
        } else {
          floors.firstElementChild.classList.add(\"active\")
        }
      }
    }

    function getSquare(offers, filters) {
      let squareBtnHtml = \"\"
      let squareNumberArray = []
      for (var offer in offers) {
        if (!squareNumberArray.includes(offers[offer].square)) {
          squareNumberArray.push(offers[offer].square)
          squareBtnHtml = squareBtnHtml + '<a class=\"btn btn-outline-shahar me-2 mb-3 square\" data-filter=\"'+offers[offer].square+'\" href=\"#\" onclick=\"activateButton(\\'#squareButtons\\', this.getAttribute(\\'data-filter\\')); filterOffers(offersAll); return false\">'+offers[offer].square+' м2</a>'
        }
      }
      let square = document.getElementById('squareButtons')
      square.innerHTML = squareBtnHtml
      if (filters.square != '') {
        let activeSquare = document.querySelector('#squareButtons [data-filter=\"'+filters.square+'\"]')
        if (activeSquare) {
          activeSquare.classList.add(\"active\")
        } else {
          square.firstElementChild.classList.add(\"active\")
        }
      }
    }

    function filterOffers (offersAll) {

      let offers = []
      for (let key in offersAll) {
        offers[key] = offersAll[key];
      }

      //
      // console.log(offers)

      let filters = {
        room: document.querySelector('#roomButtons a.active').getAttribute('data-filter'),
        floor: document.querySelector('#floorButtons a.active') != null ? document.querySelector('#floorButtons a.active').getAttribute('data-filter') : '',
        square: document.querySelector('#squareButtons a.active') != null ? document.querySelector('#squareButtons a.active').getAttribute('data-filter') : ''
      }

      getRooms(offers, filters)
      if (filters.room != '') {
        for (var offer in offers) {
          if (offers[offer].rooms != filters.room) {
            delete offers[offer]
          }
        }
      }
      getFloors(offers, filters)

      if (filters.floor != '') {
        for (var offer in offers) {
          if (!offers[offer].floors.includes(filters.floor)) {
            delete offers[offer]
          }
        }
      }
      getSquare(offers, filters)

      if (filters.square != '') {
        for (var offer in offers) {
          if (offers[offer].square != filters.square) {
            delete offers[offer]
          }
        }
      }

      renderOffers(offers)
      sortButtons('#roomButtons a')
      sortButtons('#floorButtons a')
      sortButtons('#squareButtons a')

    }

    function sortButtons(selector) {
      var nodeList = document.querySelectorAll(selector);
      var itemsArray = [];
      var parent = nodeList[0].parentNode;
      for (var i = 0; i < nodeList.length; i++) {
        itemsArray.push(parent.removeChild(nodeList[i]));
      }
      itemsArray.sort(function(nodeA, nodeB) {
        var textA = nodeA.getAttribute('data-filter');
        var textB = nodeB.getAttribute('data-filter');
        var numberA = parseInt(textA);
        var numberB = parseInt(textB);
        if (numberA < numberB) return -1;
        if (numberA > numberB) return 1;
        return 0;
      })
              .forEach(function(node) {
                parent.appendChild(node)
              });
    }

    function renderOffers(offers) {
      var offersHtml = '';
      offersHtml += '<div class=\"swiper-flats\"><div class=\"swiper-wrapper\">';
      offers.forEach(function (el) {
        offersHtml += '\t\t<div class=\"swiper-slide\">';
        offersHtml += '        <div class=\"bg-white w-100 h-100 p-4\">';
        offersHtml += '          <div class=\"row h-100\">';
        offersHtml +=
                '            <div class=\"col-md-5 floot-info d-flex flex-wrap\">';
        offersHtml += '              <div class=\"floor-data align-items-start mt-2\">';
        offersHtml += '                <h4>' + el.title + '-комнатная</h4>';
        offersHtml += '                <p>Площадь: <b>' + el.square + ' м2</b></p>';
        offersHtml += '                <a class=\"downloadPlan\" data-caption=\"' + el.title + '\" href=\"https://cms.abpx.kz' + el.plan.path + '\" onclick=\"creiateLightbox(this.href); return false\">Скачать планировку</a>';
        //offersHtml += '                <div class=\"mb-3\">';
        //offersHtml += '                  <span>Стоимость от: </span>';
        //offersHtml += '                  <h6>18 530 000 тг</h6>';
        //offersHtml += '                  <b>от 306 280 за м2</b>';
        //offersHtml += '                </div>';
        offersHtml += '              </div>';
        offersHtml +=
                '              <div class=\"orderBottons mt-auto align-items-end\">';
        offersHtml +=
                '                <a href=\"\" class=\"btn btn-gradient mb-3\" data-bs-toggle=\"modal\" data-bs-target=\"#callbackModal\">Оставить заявку <i class=\"fas fa-chevron-right\"></i></a>';
        offersHtml += '              </div>';
        offersHtml += '            </div>';
        offersHtml += '            <div class=\"col-md-7 p-3 floor-plan d-flex\">';
        offersHtml += '              <a href=\"https://cms.abpx.kz' + el.plan.path + '\" onclick=\"creiateLightbox(this.href); return false\">';
        offersHtml += '                <img data-src=\"https://cms.abpx.kz/' + el.plan.path + '\" class=\"swiper-lazy\">';
      \toffersHtml += '\t\t\t\t   <div class=\"swiper-lazy-preloader swiper-lazy-preloader-pink\"></div>';
        offersHtml += '              </a>';
        offersHtml += '            </div>';
        offersHtml += '          </div>';
        offersHtml += '        </div>';
        offersHtml += '      </div>';
      });
      offersHtml += '</div><div class=\"swiper-button-next\"></div><div class=\"swiper-button-prev\"></div></div>';
      let offersCarousel = document.querySelector('.plansCarousel')
      offersCarousel.innerHTML = offersHtml
      startNewSwiper()
    }

    function startNewSwiper () {
      let flats = new Swiper('.swiper-flats', {
        spaceBetween: 20,
      \tlazy: true,
        navigation: {
          nextEl: \".swiper-button-next\",
          prevEl: \".swiper-button-prev\",
        },
      })
    }

    function activateButton(parent, dataFilter) {
      let then = document.querySelector(parent + ' .active')
      let now = document.querySelector(parent + ' [data-filter=\"' + dataFilter + '\"]')

      if (then != null) {
        then.classList.remove('active')
      }
      if (now != null) {
        now.classList.add('active')
      }

      if (parent == \"#roomButtons\") {
        let floorActive = document.querySelector('#floorButtons .active')
        let squareActive = document.querySelector('#squareButtons .active')
        if (floorActive != null) {
          floorActive.classList.remove('active')
        }
        if (squareActive != null)
          squareActive.classList.remove('active')
        }

      if (parent == \"#floorButtons\") {
        let squareActive = document.querySelector('#squareButtons .active')
        if (squareActive != null) {
            squareActive.classList.remove('active')
        }
      }

    }

    /* Карта */
    function init() {
      searchMap = new ymaps.Map('map', {
        center: [43.3018527525946,77.00994916348445], //43.318978, 76.897165
        zoom: 15,
        controls: [],
      });

      /*cildrenCollection = new ymaps.GeoObjectCollection(null)
      medicalShopCollection = new ymaps.GeoObjectCollection(null)
      medicalCollection = new ymaps.GeoObjectCollection(null)
      schoolCollection = new ymaps.GeoObjectCollection(null)
      sportCollection = new ymaps.GeoObjectCollection(null)
      shopCollection = new ymaps.GeoObjectCollection(null)

      let cildren = [[43.327464, 76.896974], [43.311123, 76.902510], [43.315549, 76.910670], [43.320427, 76.911147], [43.317535, 76.912817], [43.322482, 76.915108], [43.326001, 76.916873], [43.315270, 76.923220], [43.309068, 76.921788],
        [43.303840, 76.921072],[43.318315, 76.894036],[43.313030, 76.875275],]
      let medicalShop = [[43.316631, 76.887716], [43.311558, 76.897726], [43.326375, 76.909213], [43.323740, 76.911510], [43.315513, 76.911838],
        [43.320984, 76.917034], [43.325776, 76.922778], [43.319786, 76.929123], [43.307684, 76.923379], [43.313502, 76.879851], [43.311701, 76.876569], [43.304750, 76.880836]]
      let medical = [[43.320752, 76.916157], [43.313940, 76.875500], [43.305558, 76.923475], [43.316502, 76.938783], [43.338820, 76.908290], [43.296187, 76.870736]]
      let school = [[43.322503, 76.885417], [43.337250, 76.882315], [43.337250, 76.882315], [43.335508, 76.913173], [43.335508, 76.913173],
        [43.317568, 76.910230], [43.304384, 76.899812], [43.308043, 76.922478], [43.321516, 76.930669], [43.300725, 76.872533], [43.297182, 76.861160]]
      let sport = [[43.326937, 76.909533], [43.329120, 76.922178], [43.322187, 76.913993], [43.303451, 76.924644], [43.305252, 76.940753]]
      let shop = [[43.301133, 76.871379], [43.311474, 76.876906], [43.302668, 76.899015], [43.307872, 76.894447], [43.316811, 76.883256],
        [43.311208, 76.898284], [43.318279, 76.903308], [43.321580, 76.916692], [43.321580, 76.916692], [43.306304, 76.924092],
        [43.317345, 76.930943]]
      for (var i = 0, l = cildren.length; i < l; i++) {
        cildrenCollection.add(new ymaps.Placemark(cildren[i], {hintContent: 'Детский сад',balloonContent: ''},{iconLayout: 'default#image',
          iconImageHref: 'assets/img/map/childrens.svg',iconImageSize: [40, 54.6],iconImageOffset: [-20, -54.6],}));
      }
      for (var i = 0, l = medicalShop.length; i < l; i++) {
        medicalShopCollection.add(new ymaps.Placemark(medicalShop[i], {hintContent: 'Аптека',balloonContent: ''},{iconLayout: 'default#image',
          iconImageHref: 'assets/img/map/medical_shop.svg',iconImageSize: [40, 54.6],iconImageOffset: [-20, -54.6],}));
      }
      for (var i = 0, l = medical.length; i < l; i++) {
        medicalCollection.add(new ymaps.Placemark(medical[i], {hintContent: 'Поликлиника',balloonContent: ''},{iconLayout: 'default#image',
          iconImageHref: 'assets/img/map/medical_red.svg',iconImageSize: [40, 54.6],iconImageOffset: [-20, -54.6],}));
      }
      for (var i = 0, l = school.length; i < l; i++) {
        schoolCollection.add(new ymaps.Placemark(school[i], {hintContent: 'Школа',balloonContent: ''},{iconLayout: 'default#image',
          iconImageHref: 'assets/img/map/school.svg',iconImageSize: [40, 54.6],iconImageOffset: [-20, -54.6],}));
      }
      for (var i = 0, l = sport.length; i < l; i++) {
        sportCollection.add(new ymaps.Placemark(sport[i], {hintContent: 'Фитнес-центр',balloonContent: ''},{iconLayout: 'default#image',
          iconImageHref: 'assets/img/map/sport.svg',iconImageSize: [40, 54.6],iconImageOffset: [-20, -54.6],}));
      }
      for (var i = 0, l = shop.length; i < l; i++) {
        shopCollection.add(new ymaps.Placemark(shop[i], {hintContent: ' Супермаркет',balloonContent: ''},{iconLayout: 'default#image',
          iconImageHref: 'assets/img/map/shop.svg',iconImageSize: [40, 54.6],iconImageOffset: [-20, -54.6],}));
      }
      */

      (marker = new ymaps.Placemark([43.30191543885065,76.99917741208067],
              {
                hintContent: 'Tamarix City',
                balloonContent: 'Tamarix City',
              },
              {
                iconLayout: 'default#image',
                iconImageHref: 'assets/img/map/tamarix.svg',
                iconImageSize: [120, 120],
                iconImageOffset: [-60, -60],
              }
      )),
              /*searchMap.geoObjects.add(cildrenCollection);
      searchMap.geoObjects.add(medicalShopCollection);
      searchMap.geoObjects.add(medicalCollection);
      searchMap.geoObjects.add(schoolCollection);
      searchMap.geoObjects.add(sportCollection);
      searchMap.geoObjects.add(shopCollection);*/
      searchMap.geoObjects.add(marker);
      searchMap.behaviors.disable('scrollZoom');
    
    if (window.innerWidth < 768) {
    \tsearchMap.setCenter([43.30191543885065,76.99917741208067])
    }

    }

    //Forms
    function validateForm(element) {
      let errors = false
      let form = element.parentNode.parentNode
      let inputs = form.querySelectorAll('input, textarea')
      let formQuery = new Object()

      inputs.forEach(function (el) {
        if (el.hasAttribute(\"required\") && el.value != \"\" || !el.hasAttribute(\"required\") && el.value != \"\") {
          let id = el.id
          let name = el.placeholder
          let data = el.value
          formQuery[''+id] = {name, data}
        } else {
          if (el.hasAttribute(\"required\")) {
            el.setAttribute('style', 'border: 2px solid red;')
            errors = true
          }
        }
      })

      if (!errors) {
        send_data(formQuery, form)
      }

    }

    async function send_data(formQuery, form) {
      let response = await fetch('?form=send_form', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(formQuery)
      });

      form.innerHTML = await response.text()

    }
  
  
  \t//SideBar Toggle
  \tfunction sideBarToggle(condition) {
    \tlet button = document.getElementById('sidebarToggle')
        let sideBar = document.querySelector('.sidebar')
        let bars = document.querySelector('.ham5')
        let sideBarPhone = document.querySelector('.call .phone')
        let mainPhone = document.querySelector('.phoneNumber')
        
        sideBarPhone.href = 'tel:' + mainPhone.textContent
   \t\tsideBarPhone.textContent = mainPhone.textContent
        
        if (condition == 'open') {
        \tdocument.body.classList.remove('sidebarOpen')
        \tsideBar.classList.remove('open')
        \tbutton.setAttribute('data-condition', '')
        } else {
        \tdocument.body.classList.add('sidebarOpen')
        \tsideBar.classList.add('open')
        \tbutton.setAttribute('data-condition', 'open')
        }
    
    \tbars.classList.toggle('active')
    }
  
  \t  let slides = 2.8
      margin = 25
  \t  if (window.innerWidth < 768) {
      \tslides = 1.3
     \tmargin = 25
      } 
  \t  if (window.innerWidth < 576) {
\t\tslides = 1.2
      }
    
      var phoneInputs = document.querySelectorAll('input[name=\"phone\"]')

      phoneInputs.forEach((el) => {
          el.addEventListener('input', function (e) {
              clearMessages()
              let numberCodes = ['710','711','712','713','714','715','716','717','718','721','722','723','724','725','726','727','728','729','736','700','701','702','703','704','705','706','707','708','709','747','750','751','760','761','762','763','764','771','775','776','777','778']
              let x = e.target.value.replace(/\\D/g, '').match(/(^\\d{0,1})(\\d{0,3})(\\d{0,3})(\\d{0,2})(\\d{0,2})/);

              e.target.value = !x[3] ? \"+\" + x[1] + x[2] : \"+\" + x[1] + ' (' + x[2] + ') ' + x[3] + (x[4] ? '-' + x[4] : '') + (x[5] ? '-' + x[5] : '');

              let errMess = document.createElement('span')
              errMess.classList.add('input-err')
              errMess.textContent = 'Пожалуйста, проверьте, правильность введённого вами номера!'

            console.log(numberCodes.indexOf(x[2]))
              if (x[3] && ((x[1] != '7') || (numberCodes.indexOf(x[2]) == -1))) {
                  el.parentNode.appendChild(errMess)
              } else {
                  clearMessages()
              }

          });
      })

      function clearMessages() {
  \t    let messAll = document.querySelectorAll('.input-err')
        messAll.forEach((el) => {
          el.remove()
        })
      }
  </script>

<style>
.gallery-swiper img {
\tmax-width:100%;
}
span.input-err {
  position: relative;
  background: #efd37d;
  padding: 8px 10px;
  display: inline-flex;
  border-radius: 4px;
  margin-top: 15px;
  line-height: 1.2;
  font-size: .86rem;
  width: 100%;
}

span.input-err:before {content: '';position: absolute;width: 10px;height: 10px;background: #efd37d; top: -5px;left: 15px;transform: rotate(45deg);}
</style>
  <!--script src=\"assets/js/main.js?v=4\"></script-->
</html>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  905 => 597,  899 => 594,  894 => 593,  892 => 592,  885 => 588,  881 => 587,  830 => 538,  822 => 535,  784 => 533,  782 => 532,  778 => 531,  772 => 529,  768 => 528,  760 => 523,  756 => 522,  752 => 521,  738 => 510,  733 => 508,  729 => 507,  725 => 506,  716 => 500,  701 => 488,  693 => 483,  688 => 481,  684 => 480,  680 => 479,  667 => 468,  657 => 464,  653 => 463,  649 => 462,  646 => 461,  642 => 460,  636 => 457,  632 => 455,  622 => 451,  618 => 450,  614 => 449,  611 => 448,  607 => 447,  595 => 438,  373 => 219,  368 => 217,  364 => 216,  360 => 215,  346 => 208,  337 => 201,  322 => 193,  318 => 192,  314 => 191,  305 => 185,  300 => 183,  296 => 182,  292 => 181,  283 => 174,  281 => 173,  272 => 166,  262 => 162,  258 => 161,  255 => 160,  251 => 159,  244 => 155,  240 => 154,  236 => 153,  222 => 142,  218 => 141,  213 => 139,  205 => 134,  201 => 133,  160 => 99,  137 => 79,  132 => 77,  117 => 67,  88 => 41,  77 => 33,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html", "/home/tamarix/public_html/views/index.html");
    }
}
