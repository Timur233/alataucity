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

/* index.twig */
class __TwigTemplate_71cec4c0b47e9ab68f6576b12eadbf01360e615c0d704da8a84a315cab65c8d2 extends \Twig\Template
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
    <link rel=\"stylesheet\" href=\"assets/css/bootstrap.css?v=5\" />
    <link rel=\"stylesheet\" href=\"assets/css/swiper.min.css\" />
    <link rel=\"stylesheet\" href=\"assets/css/libs/animate.css\">
    <link rel=\"stylesheet\" href=\"assets/css/all.min.css\" />
    <link rel=\"stylesheet\" href=\"assets/css/style.css?v=28\" />
    <link rel=\"stylesheet\" href=\"assets/css/new-styles.css\" />

    <meta name=\"facebook-domain-verification\" content=\"0z9880hvdcrsy9upz53gffnpu7uz7l\" />

    ";
        // line 17
        echo ($context["site_scripts_in_head"] ?? null);
        echo "
  
  </head>
  <body class=\"nightMode\">

  ";
        // line 22
        echo ($context["site_scripts_in_body"] ?? null);
        echo "
  
  <div id=\"shadow\" onclick=\"frontend.sidebar('open'); return false\"></div>

    <div id=\"preloader\">
      <div class=\"preloader-content\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"151\" height=\"151\" viewBox=\"0 0 151 151\" fill=\"none\" class=\"preloader-image\">
          <g clip-path=\"url(#clip0)\">
            <path class=\"level-1\" d=\"M113.5 83.5H126C126.5 83.5 127.5 83 127.5 81.75C127.5 80.5 126.5 80 126 80H80C79.5 80 79 80.5 79 81.25C79 82 79.5 82.5 80 82.5H112C113.5 82.5 113.5 83.5 113.5 83.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-2\" d=\"M113.5 77.5H126C126.5 77.5 127.5 77 127.5 75.75C127.5 74.5 126.5 74 126 74H80C79.5 74 79 74.5 79 75.25C79 76 79.5 76.5 80 76.5H112C113.5 76.5 113.5 77.5 113.5 77.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-3\" d=\"M113 71.5H125.5C126 71.5 127 71 127 69.75C127 68.5 126 68 125.5 68H80C79.5 68 79 68.5 79 69.25C79 70 79.5 70.5 80 70.5H111.5C113 70.5 113 71.5 113 71.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-3\" d=\"M55 71.5H67.5C68 71.5 69 71 69 69.75C69 68.5 68 68 67.5 68H20.5C20 68 19.5 68.5 19.5 69.25C19.5 70 20 70.5 20.5 70.5H53.5C55 70.5 55 71.5 55 71.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-1\" d=\"M55 83.5H67.5C68 83.5 69 83 69 81.75C69 80.5 68 80 67.5 80H20.5C20 80 19.5 80.5 19.5 81.25C19.5 82 20 82.5 20.5 82.5H53.5C55 82.5 55 83.5 55 83.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-2\" d=\"M55 77.5H67.5C68 77.5 69 77 69 75.75C69 74.5 68 74 67.5 74H20.5C20 74 19.5 74.5 19.5 75.25C19.5 76 20 76.5 20.5 76.5H53.5C55 76.5 55 77.5 55 77.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-4\" d=\"M113 65.5H125.5C126 65.5 127 65 127 63.75C127 62.5 126 62 125.5 62H80C79.5 62 79 62.5 79 63.25C79 64 79.5 64.5 80 64.5H111.5C113 64.5 113 65.5 113 65.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-4\" d=\"M55 65.5H67.5C68 65.5 69 65 69 63.75C69 62.5 68 62 67.5 62H20.5C20 62 19.5 62.5 19.5 63.25C19.5 64 20 64.5 20.5 64.5H53.5C55 64.5 55 65.5 55 65.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-5\" d=\"M112 59.5H124.5C125 59.5 126 59 126 57.75C126 56.5 125 56 124.5 56H80C79.5 56 79 56.5 79 57.25C79 58 79.5 58.5 80 58.5H110.5C112 58.5 112 59.5 112 59.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-5\" d=\"M55 59.5H67.5C68 59.5 69 59 69 57.75C69 56.5 68 56 67.5 56H20.5C20 56 19.5 56.5 19.5 57.25C19.5 58 20 58.5 20.5 58.5H53.5C55 58.5 55 59.5 55 59.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-6\" d=\"M112 53.5H124.5C125 53.5 126 53 126 51.75C126 50.5 125 50 124.5 50H80C79.5 50 79 50.5 79 51.25C79 52 79.5 52.5 80 52.5H110.5C112 52.5 112 53.5 112 53.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-6\" d=\"M55 53.5H67.5C68 53.5 69 53 69 51.75C69 50.5 68 50 67.5 50H23C22.5 50 22 50.5 22 51.25C22 52 22.5 52.5 23 52.5H53.5C55 52.5 55 53.5 55 53.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-7\" d=\"M111 47.5H123.5C124 47.5 125 47 125 45.75C125 44.5 124 44 123.5 44H80C79.5 44 79 44.5 79 45.25C79 46 79.5 46.5 80 46.5H109.5C111 46.5 111 47.5 111 47.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-7\" d=\"M55 47.5H67.5C68 47.5 69 47 69 45.75C69 44.5 68 44 67.5 44H26C25.5 44 25 44.5 25 45.25C25 46 25.5 46.5 26 46.5H53.5C55 46.5 55 47.5 55 47.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-8\" d=\"M111 41.5H123.5C124 41.5 125 41 125 39.75C125 38.5 124 38 123.5 38H80C79.5 38 79 38.5 79 39.25C79 40 79.5 40.5 80 40.5H109.5C111 40.5 111 41.5 111 41.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-8\" d=\"M55 41.5H67.5C68 41.5 69 41 69 39.75C69 38.5 68 38 67.5 38H29C28.5 38 28 38.5 28 39.25C28 40 28.5 40.5 29 40.5H53.5C55 40.5 55 41.5 55 41.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-9\" d=\"M110 35.5H122.5C123 35.5 124 35 124 33.75C124 32.5 123 32 122.5 32H80C79.5 32 79 32.5 79 33.25C79 34 79.5 34.5 80 34.5H108.5C110 34.5 110 35.5 110 35.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-9\" d=\"M55 35.5H67.5C68 35.5 69 35 69 33.75C69 32.5 68 32 67.5 32H32C31.5 32 31 32.5 31 33.25C31 34 31.5 34.5 32 34.5H53.5C55 34.5 55 35.5 55 35.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-10\" d=\"M110 29.5H122.5C123 29.5 124 29 124 27.75C124 26.5 123 26 122.5 26H80C79.5 26 79 26.5 79 27.25C79 28 79.5 28.5 80 28.5H108.5C110 28.5 110 29.5 110 29.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-10\" d=\"M55 29.5H67.5C68 29.5 69 29 69 27.75C69 26.5 68 26 67.5 26H34.5C34 26 33.5 26.5 33.5 27.25C33.5 28 34 28.5 34.5 28.5H53.5C55 28.5 55 29.5 55 29.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-11\" d=\"M109 23.5H121.5C122 23.5 123 23 123 21.75C123 20.5 122 20 121.5 20H80C79.5 20 79 20.5 79 21.25C79 22 79.5 22.5 80 22.5H107.5C109 22.5 109 23.5 109 23.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-11\" d=\"M55 23.5H67.5C68 23.5 69 23 69 21.75C69 20.5 68 20 67.5 20H38C37.5 20 37 20.5 37 21.25C37 22 37.5 22.5 38 22.5H53.5C55 22.5 55 23.5 55 23.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-12\" d=\"M109 17.5H121.5C122 17.5 123 17 123 15.75C123 14.5 122 14 121.5 14H80C79.5 14 79 14.5 79 15.25C79 16 79.5 16.5 80 16.5H107.5C109 16.5 109 17.5 109 17.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-13\" d=\"M109 11.5H121.5C122 11.5 123 11 123 9.75C123 8.5 122 8 121.5 8H80C79.5 8 79 8.5 79 9.25C79 10 79.5 10.5 80 10.5H107.5C109 10.5 109 11.5 109 11.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-14\" d=\"M108.5 5.5H113.5C114 5.5 115 5 115 3.75C115 2.5 114 2 113.5 2H99.5C99 2 98.5 2.5 98.5 3.25C98.5 4 99 4.5 99.5 4.5H107C108.5 4.5 108.5 5.5 108.5 5.5Z\" fill=\"#153A47\"></path>
            <path class=\"level-12\" fill=\"#153A47\" d=\"M55 17.5H60C60.5 17.5 61.5 17 61.5 15.75C61.5 14.5 60.5 14 60 14H40.5C40 14 39.5 14.5 39.5 15.25C39.5 16 40 16.5 40.5 16.5H53.5C55 16.5 55 17.5 55 17.5Z\"></path>
            <path fill-rule=\"evenodd\" class=\"text\" clip-rule=\"evenodd\" d=\"M120.994 144.9V147.282H111.577C111.262 147.282 110.966 147.282 110.665 147.222C110.351 147.159 110.057 147.026 109.782 146.765C109.498 146.494 109.344 146.173 109.262 145.839C109.185 145.522 109.174 145.208 109.174 144.921V134.952C109.174 134.639 109.225 134.325 109.318 134.04C109.411 133.754 109.551 133.497 109.728 133.301C110.001 133.003 110.334 132.842 110.679 132.758C111.008 132.679 111.334 132.667 111.619 132.667H120.914V135.322H113.045C112.94 135.322 112.826 135.327 112.726 135.348C112.642 135.367 112.565 135.397 112.505 135.451C112.374 135.569 112.372 135.782 112.372 135.933V138.495H120.714V141.15H112.372V144.173C112.372 144.247 112.386 144.322 112.409 144.387C112.43 144.446 112.458 144.492 112.484 144.518C112.523 144.555 112.6 144.581 112.7 144.597C112.831 144.62 113.003 144.625 113.204 144.625H120.994V144.898V144.9ZM70.4338 141.602H73.3591V144.8H70.1611V141.602H70.4338ZM70.4338 135.159H73.3591V138.357H70.1611V135.159H70.4338ZM39.8149 135.322V147.28H36.6169V135.322H31.1299V132.667H45.3205V135.322H39.8149ZM97.1065 136.217L97.0482 136.353L93.4493 145.739C93.2302 146.31 93.0204 146.725 92.6801 147.012C92.3328 147.306 91.8782 147.443 91.186 147.443C90.4354 147.443 89.9599 147.254 89.6172 146.937C89.2839 146.627 89.1021 146.215 88.9203 145.739L85.3237 136.353L85.2841 136.262L85.347 147.28H82.149V134.789C82.149 133.737 82.6921 133.204 83.2935 132.931C83.8645 132.672 84.4752 132.667 84.692 132.667C85.5801 132.667 86.1605 132.901 86.5754 133.274C86.9833 133.639 87.2117 134.127 87.4169 134.651L91.0554 144.038C91.0974 144.145 91.1417 144.238 91.1836 144.308C91.2279 144.236 91.2722 144.143 91.3118 144.038L94.9504 134.651C95.2814 133.798 95.687 133.304 96.1508 133.019C96.6193 132.733 97.1298 132.667 97.6752 132.667C98.4188 132.667 99.0691 132.842 99.5283 133.215C99.9619 133.57 100.218 134.087 100.218 134.789V147.28H97.0202L97.1041 136.215L97.1065 136.217ZM91.186 144.385L91.1813 144.383C91.1766 144.385 91.1743 144.385 91.186 144.385ZM91.1883 144.385C91.1999 144.385 91.1976 144.385 91.1929 144.383L91.1883 144.385ZM91.1929 144.383H91.186H91.1929ZM85.2398 136.066L85.2281 136.071C85.2491 136.068 85.2631 136.066 85.2398 136.066ZM59.4855 132.94V147.28H56.2875V132.667H59.4855V132.94Z\" fill=\"#153A47\"></path>
            <path class=\"text\" d=\"M18.307 122.383H6.59649C4.56627 122.383 2.98824 121.889 1.86007 120.903C0.622355 119.859 0 118.353 0 116.379V100.442C0 98.4984 0.550096 96.9693 1.65029 95.8551C2.75048 94.7433 4.27024 94.1862 6.21656 94.1862H18.307V98.2443H7.6524C5.28652 98.2443 4.10241 99.3096 4.10241 101.433V106.277H18.307V110.337H4.10241V115.097C4.10241 117.248 5.3005 118.325 7.69436 118.325H18.3047V122.386L18.307 122.383ZM152.12 109.531L138.212 115.195V115.829C138.212 116.957 138.524 117.759 139.146 118.237C139.571 118.575 140.305 118.745 141.351 118.745H152.123V122.381H140.68C138.701 122.381 137.249 121.987 136.314 121.197C135.128 120.211 134.536 118.689 134.536 116.631V106.612C134.536 103.004 136.466 101.2 140.328 101.2H146.713C150.318 101.2 152.125 103.088 152.125 106.864V109.528L152.12 109.531ZM148.4 107.475V107.137C148.4 105.549 147.444 104.755 145.538 104.755H141.538C139.321 104.755 138.212 105.661 138.212 107.475V111.687L148.4 107.475ZM132.872 101.202L124.713 120.903C124.233 122.059 123.417 122.637 122.261 122.637C121.105 122.637 120.289 122.059 119.809 120.903L111.607 101.202H115.371L122.219 117.733L129.151 101.202H132.872ZM109.842 95.5801C109.842 96.2281 109.602 96.7922 109.122 97.27C108.642 97.7502 108.08 97.9879 107.432 97.9879C106.782 97.9879 106.227 97.7548 105.761 97.2887C105.295 96.8248 105.061 96.27 105.061 95.6197C105.061 94.9438 105.288 94.3657 105.74 93.8855C106.19 93.41 106.754 93.1699 107.432 93.1699C108.108 93.1699 108.679 93.4007 109.143 93.8669C109.609 94.3307 109.842 94.9018 109.842 95.5801ZM109.292 122.381H105.7V101.202H109.292V122.381ZM102.444 104.752H92.88C92.0083 104.752 91.3626 104.894 90.9431 105.176C90.3533 105.575 90.0596 106.116 90.0596 106.799V107.65C90.0596 109.13 91.0316 109.866 92.9756 109.866H97.712C99.0919 109.866 100.227 110.332 101.115 111.26C102.003 112.193 102.446 113.346 102.446 114.729V117.39C102.446 118.717 101.996 119.901 101.097 120.943C100.56 121.563 100.001 121.973 99.4089 122.169C98.9311 122.311 98.2295 122.381 97.3018 122.381H86.4654V118.745H96.3251C97.3368 118.745 98.0104 118.465 98.346 117.899C98.6001 117.502 98.726 116.77 98.726 115.701C98.726 114.234 97.9358 113.503 96.3554 113.503H91.8754C90.3533 113.503 89.0993 113.095 88.1133 112.276C87.0155 111.405 86.463 110.235 86.463 108.768V105.936C86.463 104.358 87.097 103.076 88.3604 102.09C89.1179 101.498 90.302 101.202 91.9034 101.202H102.444V104.755V104.752ZM83.2673 117.055C83.2673 120.607 81.3653 122.379 77.5613 122.379H71.347C67.5406 122.379 65.6409 120.605 65.6409 117.055V101.202H69.2329V115.997C69.2329 116.871 69.5033 117.575 70.0441 118.111C70.4683 118.535 71.2911 118.745 72.5148 118.745H76.4354C78.5962 118.745 79.6754 117.843 79.6754 116.039V101.2H83.2697V117.052L83.2673 117.055ZM62.035 122.381H58.4407V93.7177H62.035V122.381ZM55.4222 122.381H47.1778C43.2315 122.381 41.2596 120.507 41.2596 116.756V106.526C41.2596 102.974 42.9238 101.2 46.2477 101.2H55.3383V104.752H47.7395C46.665 104.752 45.9121 104.95 45.4902 105.347C45.0659 105.741 44.8538 106.461 44.8538 107.507V115.903C44.8538 117.798 45.8724 118.745 47.9097 118.745H55.4222V122.381ZM39.6839 122.381H35.3297L30.1714 114.983L25.0154 122.381H20.7032L28.1854 111.472L21.1694 101.2H25.4396L30.1318 108.006L34.9078 101.2H39.1781L32.2459 111.472L39.6839 122.381Z\" fill=\"#153A47\"></path>

          </g>
          <defs>
            <clipPath id=\"clip0\">
              <rect width=\"151\" height=\"151\" fill=\"white\"></rect>
            </clipPath>
          </defs>
        </svg>
      </div>
    </div>

    <div class=\"sidebar position-fixed\">
      <nav class=\"p-4 text-center h-100\" style=\"display: flex; flex-direction: column;\">
        <a href=\"#\" class=\"close\" onclick=\"frontend.sidebar('open'); return false\"><span></span><span></span></a>
        <div class=\"lang-switcher px-4 pb-5\">
          <a href=\"";
        // line 73
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
        // line 74
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
        <ul>
          <li>
            <a href=\"#about\" onclick=\"frontend.sidebar('open');\">";
        // line 78
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["translate"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["about_of_project"] ?? null) : null), "html", null, true);
        echo "</a>
          </li>
          <li>
            <a href=\"#advantages\" onclick=\"frontend.sidebar('open');\">";
        // line 81
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["translate"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["advantages"] ?? null) : null), "html", null, true);
        echo "</a>
          </li>
          <li>
            <a href=\"#gallery\" onclick=\"frontend.sidebar('open');\">";
        // line 84
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["translate"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["gallery"] ?? null) : null), "html", null, true);
        echo "</a>
          </li>
          <li>
            <a href=\"#flats\" onclick=\"frontend.sidebar('open');\">";
        // line 87
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["translate"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["flats"] ?? null) : null), "html", null, true);
        echo "</a>
          </li>
          <li>
            <a href=\"#aboutOfCompany\" onclick=\"frontend.sidebar('open');\">";
        // line 90
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["translate"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["about_of_company"] ?? null) : null), "html", null, true);
        echo "</a>
          </li>
          <li>
            <a href=\"#contacts\" onclick=\"frontend.sidebar('open');\">";
        // line 93
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["translate"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["contacts"] ?? null) : null), "html", null, true);
        echo "</a>
          </li>
        </ul>
        <div class=\"row mt-3 d-none\">
          <div class=\"col-4\">
            <a href=\"https://exin.kz/\" target=\"_blank\" onclick=\"frontend.sidebar('open');\">
              <img src=\"https://cms.abpx.kz";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exin_second_logo"] ?? null), "path", [], "any", false, false, false, 99), "html", null, true);
        echo "\" class=\"w-75 h-80\" alt=\"\">
            </a>
          </div>
          <div class=\"col-4\">
            <a href=\"#\" onclick=\"frontend.sidebar('open');\">
              <img src=\"https://cms.abpx.kz";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site_second_logo"] ?? null), "path", [], "any", false, false, false, 104), "html", null, true);
        echo "\" class=\"w-75 h-80\" alt=\"\">
            </a>
          </div>
          <div class=\"col-4\">
            <a href=\"#\" onclick=\"frontend.sidebar('open');\">
              <img src=\"https://cms.abpx.kz";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["halyk_second_logo"] ?? null), "path", [], "any", false, false, false, 109), "html", null, true);
        echo "\" class=\"w-75 h-80\" alt=\"\">
            </a>
          </div>
        </div>
        <div class=\"call mt-auto\">
          <a href=\"https://instagram.com/";
        // line 114
        echo twig_escape_filter($this->env, ($context["site_insta"] ?? null), "html", null, true);
        echo "\" target=\"_blank\" class=\"insta\"><i class=\"fab fa-instagram me-2\"></i> ";
        echo twig_escape_filter($this->env, ($context["site_insta"] ?? null), "html", null, true);
        echo "</a>
          <a href=\"tel:";
        // line 115
        echo twig_escape_filter($this->env, ($context["site_phone"] ?? null), "html", null, true);
        echo "\" class=\"phone\" onclick=\"frontend.sidebar('open');\"><i class=\"fas fa-phone-alt me-2\"></i> ";
        echo twig_escape_filter($this->env, ($context["site_phone"] ?? null), "html", null, true);
        echo "</a>
          <a href=\"\" class=\"btn btn-gradient\" data-bs-toggle=\"modal\" data-bs-target=\"#callbackModal\" onclick=\"frontend.sidebar('open');\">Оставить заявку</a>
        </div>
      </nav>
    </div>

    ";
        // line 121
        echo twig_include($this->env, $context, "widgets/_header.twig");
        echo "

    ";
        // line 123
        echo twig_include($this->env, $context, "widgets/slider.twig");
        echo "

    ";
        // line 125
        if (($context["reasons_gallery"] ?? null)) {
            // line 126
            echo "      <section id=\"reasons\" class=\"reasons pt-6 pb-6 pb-md-0\">
      <div class=\"container\">
        <h2 class=\"sectionTitle\">
          <span class=\"color\">";
            // line 129
            echo twig_escape_filter($this->env, ($context["reasons_color_title"] ?? null), "html", null, true);
            echo "</span>
          ";
            // line 130
            echo twig_escape_filter($this->env, ($context["reasons_title"] ?? null), "html", null, true);
            echo "
          <span class=\"ghostTitle\">";
            // line 131
            echo twig_escape_filter($this->env, ($context["reasons_ghost_title"] ?? null), "html", null, true);
            echo "</span>
        </h2>
        <div class=\"gallery-swiper swiper-container py-4\">
          <div class=\"swiper-wrapper\">
            ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reasons_gallery"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 136
                echo "              <div class=\"swiper-slide\">
                <a data-fslightbox=\"first-lightbox\" href=\"https://cms.abpx.kz";
                // line 137
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, false, 137), "html", null, true);
                echo "\">
                  <img src=\"https://cms.abpx.kz";
                // line 138
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, false, 138), "html", null, true);
                echo "\" alt=\"\">
                </a>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "          </div>
        <div class=\"swiper-button-next\"></div>
      \t<div class=\"swiper-button-prev\"></div>
        </div>
      </div>
    </section>
    ";
        }
        // line 149
        echo "  
  \t";
        // line 150
        if (($context["discounst"] ?? null)) {
            // line 151
            echo "    <section id=\"discount\" class=\"discount pt-0 pb-6 pt-md-6 pb-md-0\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-12 mb-5 mb-md-0 mу-auto d-flex align-items-center\">
            <div class=\"about_block\">
              <h2 class=\"sectionTitle\">
                ";
            // line 158
            echo twig_escape_filter($this->env, ($context["discounst_title"] ?? null), "html", null, true);
            echo "
                <span class=\"color\">";
            // line 159
            echo twig_escape_filter($this->env, ($context["discounst_color_title"] ?? null), "html", null, true);
            echo "</span>
                <span class=\"ghostTitle\">";
            // line 160
            echo twig_escape_filter($this->env, ($context["discounst_ghost_title"] ?? null), "html", null, true);
            echo "</span>
              </h2>
              ";
            // line 162
            echo ($context["discounst_text"] ?? null);
            echo "
            </div>
          </div>

          <div class=\"col-12 text-center mt-3\">
              <picture>
                <source media=\"(max-width: 550px)\" srcset=\"https://cms.abpx.kz";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["discounst_image_phone"] ?? null), "path", [], "any", false, false, false, 168), "html", null, true);
            echo "\">
                <source media=\"(max-width: 768px)\" srcset=\"https://cms.abpx.kz";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["discounst_image_ipad"] ?? null), "path", [], "any", false, false, false, 169), "html", null, true);
            echo "\">
                <img src=\"https://cms.abpx.kz";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["discounst_image"] ?? null), "path", [], "any", false, false, false, 170), "html", null, true);
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
        // line 178
        echo "
    <section id=\"about\" class=\"aboutUsBlock pb-6 pt-0 py-md-6\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-md-12 col-lg-6 order-1 order-md-1 order-lg-0 mt-5 mt-md-5 mb-lg-0 mt-lg-0\">
            <div class=\"img-block\">
              <img src=\"https://cms.abpx.kz";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["about_image"] ?? null), "path", [], "any", false, false, false, 185), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["about_title"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["about_title_color"] ?? null), "html", null, true);
        echo "\">
            </div>
          </div>

          <div class=\"col-md-12 col-lg-6 d-flex align-items-center order-0 order-md-0 order-lg-1\">
            <div class=\"about_block\">
              <h2 class=\"sectionTitle\">
                ";
        // line 192
        echo twig_escape_filter($this->env, ($context["about_title"] ?? null), "html", null, true);
        echo "
                <span class=\"color\">";
        // line 193
        echo twig_escape_filter($this->env, ($context["about_title_color"] ?? null), "html", null, true);
        echo "</span>
                <span class=\"ghostTitle\">";
        // line 194
        echo twig_escape_filter($this->env, ($context["about_ghost_title"] ?? null), "html", null, true);
        echo "</span>
              </h2>
              ";
        // line 196
        echo ($context["about_desc"] ?? null);
        echo "
              <a href=\"#flats\" class=\"btn btn-gradient mt-3\">Выбрать квартиру</a>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id=\"advantages\" class=\"advantages pb-6\">
      <div class=\"container position-relative\">

        <h2 class=\"sectionTitle text-center mb-5\">
          ";
        // line 210
        echo twig_escape_filter($this->env, ($context["advantages_title"] ?? null), "html", null, true);
        echo "
          <span class=\"color\">";
        // line 211
        echo twig_escape_filter($this->env, ($context["advantages_title_color"] ?? null), "html", null, true);
        echo "</span>
        </h2>

        <div class=\"advantages-swiper swiper-container \">
          <div class=\"swiper-wrapper\">

            ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["advantages_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 218
            echo "
            <div class=\"swiper-slide advantage-item\">
                <div class=\"advantage-img\" style=\"background-image: url(https://cms.abpx.kz";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 220)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[0] ?? null) : null), "settings", [], "any", false, false, false, 220), "image", [], "any", false, false, false, 220), "path", [], "any", false, false, false, 220), "html", null, true);
            echo ")\"></div>
                <h4>";
            // line 221
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 221)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[1] ?? null) : null), "settings", [], "any", false, false, false, 221), "text", [], "any", false, false, false, 221), "html", null, true);
            echo "</h4>
            </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "
          </div>
          <div class=\"swiper-pagination\"></div>
        </div>
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>

      </div>
    </section>

    <section id=\"customMap\" class=\"custom-map pb-6 d-none d-lg-block\">
      <div class=\"map-container container\">

        <div class=\"map dragscroll\">

          <div class=\"promo\">
            <img src=\"assets/img/map/logo2%201.svg\" alt=\"logo\" class=\"promo__logo\">
            <h2>4 км</h2>
            <h3 class=\"promo__separator\">";
        // line 243
        echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["translate"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["cso"] ?? null) : null), "html", null, true);
        echo "</h3>
            <h4><span class=\"promo__addres\">";
        // line 244
        echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["translate"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["kabanbay_batyr"] ?? null) : null), "html", null, true);
        echo "</span><span class=\"promo__number\">104</span></h4>
          </div>

          <img src=\"assets/img/map/esentai mall.svg\" alt=\"\" class=\"map_container__esentai\">
          <img src=\"assets/img/map/koktobe.svg\" alt=\"\" class=\"map-container__koktobe\">
          <img src=\"assets/img/map/center-in.svg\" alt=\"\" class=\"map-container__center-in\">
          <img src=\"assets/img/map/center-out.svg\" alt=\"\" class=\"map-container__center-out\">

          <img class=\"map-image\" src=\"https://cms.abpx.kz/storage/uploads/2021/10/07/615eae52af6fcmap1.png\" alt=\"\">

        </div>
      </div>
      <div class=\"map-data-container container\">
        <div class=\"row map-data\">
          <div class=\"map-data__map-informer\">
            <img src=\"assets/img/map/childs.svg\" alt=\"\">
            <h4>";
        // line 260
        echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["translate"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["kindergarden"] ?? null) : null), "html", null, true);
        echo "</h4>
          </div>
          <div class=\"map-data__map-informer\">
            <img src=\"assets/img/map/school.svg\" alt=\"\">
            <h4>";
        // line 264
        echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["translate"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["school"] ?? null) : null), "html", null, true);
        echo "</h4>
          </div>
          <div class=\"map-data__map-informer\">
            <img src=\"assets/img/map/med.svg\" alt=\"\">
            <h4>";
        // line 268
        echo twig_escape_filter($this->env, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["translate"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["medical"] ?? null) : null), "html", null, true);
        echo "</h4>
          </div>
          <div class=\"map-data__map-informer\">
            <img src=\"assets/img/map/fitnes.svg\" alt=\"\">
            <h4>";
        // line 272
        echo twig_escape_filter($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["translate"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["fitnes"] ?? null) : null), "html", null, true);
        echo "</h4>
          </div>
          <div class=\"map-data__map-informer\">
            <img src=\"assets/img/map/mall.svg\" alt=\"\">
            <h4>";
        // line 276
        echo twig_escape_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["translate"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["mall"] ?? null) : null), "html", null, true);
        echo "</h4>
          </div>
        </div>
      </div>
    </section>
  
    <section id=\"flats\" class=\"selectFloor py-6 bg-light\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12 col-lg-6 mb-4 mb-lg-0\">
            <h2 class=\"sectionTitle\">Выбор <span class=\"color\">квартиры</span></h2>
            <p class=\"mb-2\">";
        // line 287
        echo twig_escape_filter($this->env, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["translate"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["count_rooms"] ?? null) : null), "html", null, true);
        echo ":</p>
            <div id=\"roomButtons\" class=\"d-inline-block w-100\">
              <a class=\"btn btn-outline-shahar me-2 mb-3 rooms\" data-filter=\"1\" href=\"#\">1 комнатные</a>
              <a class=\"btn btn-outline-shahar active me-2 mb-3 rooms\" data-filter=\"2\" href=\"#\">2-х комнатные</a>
              <a class=\"btn btn-outline-shahar me-2 mb-3 rooms\" data-filter=\"3\" href=\"#\">3-х комнатные</a>
              <a class=\"btn btn-outline-shahar me-2 mb-3 rooms\" data-filter=\"4\" href=\"#\">4-х комнатные</a>
            </div>
            <p class=\"mb-2\">";
        // line 294
        echo twig_escape_filter($this->env, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["translate"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["floor"] ?? null) : null), "html", null, true);
        echo ":</p>
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
            <p class=\"mb-2\">";
        // line 369
        echo twig_escape_filter($this->env, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["translate"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["square"] ?? null) : null), "html", null, true);
        echo ":</p>
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
          <div class=\"col-12 col-lg-6 d-inline-block d-md-flex plans-swiper\">
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

                <div class=\"swiper-button-next flat-next\"></div>
                <div class=\"swiper-button-prev flat-prev\"></div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <script type=\"text/javascript\">
        var offersAll = ";
        // line 491
        echo ($context["offers"] ?? null);
        echo "
      </script>

    </section>

    <section id=\"callbackBottom\" class=\"callback-bottom py-6 my-3\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12\">
          <form class=\"mb-0 dark-form\" action=\"\">
            <div class=\"row position-relative py-4\">
              <div class=\"col-md-4 col-xl-3 py-3\">
                <div class=\"form-group\">
                  <i class=\"fa fa-user\"></i>
                  <input type=\"text\" class=\"form-control\" id=\"staticTopFormNameBottom\" name=\"name\" placeholder=\"";
        // line 505
        echo twig_escape_filter($this->env, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["translate"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["name"] ?? null) : null), "html", null, true);
        echo "\" fieldname=\"Имя\">
                </div>
              </div>
              <div class=\"col-md-4 col-xl-3 py-3\">
                <div class=\"form-group\">
                  <i class=\"fa fa-phone\"></i>
                  <input type=\"text\" class=\"form-control\" id=\"staticTopFormPhoneBottom\" name=\"phone\" placeholder=\"";
        // line 511
        echo twig_escape_filter($this->env, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["translate"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["phone"] ?? null) : null), "html", null, true);
        echo "\" fieldname=\"Телефон\" required=\"required\">
                </div>
              </div>
              <div class=\"col-md-4 col-xl-3 form-bg py-3\">
                <a href=\"#\" class=\"btn btn-gradient float-start sendFormButton\" onclick=\"frontend.form(this); return false\">";
        // line 515
        echo twig_escape_filter($this->env, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["translate"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["call_back_me"] ?? null) : null), "html", null, true);
        echo " <i class=\"fa fa-chevron-right ms-2\"></i></a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

    ";
        // line 524
        echo twig_include($this->env, $context, "widgets/gallery.twig");
        echo "

    ";
        // line 526
        echo twig_include($this->env, $context, "widgets/horisontal_callback.twig");
        echo "

    ";
        // line 528
        echo twig_include($this->env, $context, "widgets/building_steps.twig");
        echo "

    ";
        // line 530
        echo twig_include($this->env, $context, "widgets/about_developer.twig");
        echo "

    ";
        // line 532
        echo twig_include($this->env, $context, "widgets/footer.twig");
        echo "

    <!-- Modal -->
    <div class=\"modal fade\" id=\"callbackModal\" tabindex=\"-1\" aria-labelledby=\"callbackModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
          <div class=\"modal-body\">
            <a href=\"#\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></a>
            <h5 class=\"modal-title\" id=\"callbackModalLabel\">Оставить заявку</h5>
            <form action=\"\">
              <div class=\"mb-3\">
                <input type=\"text\" class=\"form-control\" id=\"formName\" name=\"name\" placeholder=\"";
        // line 543
        echo twig_escape_filter($this->env, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["translate"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["name"] ?? null) : null), "html", null, true);
        echo "\" fieldname=\"Имя\">
              </div>
              <div class=\"mb-3\">
                <input type=\"text\" class=\"form-control\" id=\"formPhone\" name=\"phone\" placeholder=\"";
        // line 546
        echo twig_escape_filter($this->env, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["translate"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["phone"] ?? null) : null), "html", null, true);
        echo "\" fieldname=\"Телефон\" required=\"\">
              </div>
              <div>
                <a href=\"#\" class=\"btn btn-gradient float-start sendFormButton\" onclick=\"frontend.form(this); return false\">";
        // line 549
        echo twig_escape_filter($this->env, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["translate"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["send"] ?? null) : null), "html", null, true);
        echo "</a>
              </div>
              <!--div class=\"preloader\" style=\"display: none\">
                <img src=\"../assets/img/preloader\" alt=\"\">
              </div-->
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Fixed Button -->
    <div class=\"fixed-callback\">
      <a href=\"#\" class=\"fix-button\" data-bs-toggle=\"modal\" data-bs-target=\"#callbackModal\">
        <i class=\"fas fa-phone\"></i>
      </a>
    </div>

    ";
        // line 567
        if (($context["notification_modal_on"] ?? null)) {
            // line 568
            echo "    <!-- Modal -->
    <div class=\"modal fade\" id=\"notificationModal\" tabindex=\"-1\" aria-labelledby=\"notificationModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
          <div class=\"modal-body\">
            <a href=\"#\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></a>
            <h5 class=\"modal-title\" id=\"notificationModalLabel\" style=\"line-height: 1.2\">";
            // line 574
            echo twig_escape_filter($this->env, ($context["notification_modal_title"] ?? null), "html", null, true);
            echo "</h5>
            <div class=\"emojies\">
              <img src=\"assets/img/emoji/1.png\" class=\"wow bounceIn\" data-wow-delay=\"0s\">
              <img src=\"assets/img/emoji/2.png\" class=\"wow bounceIn\" data-wow-delay=\"0.1s\">
              <img src=\"assets/img/emoji/3.png\" class=\"wow bounceIn\" data-wow-delay=\"0.2s\">
              <img src=\"assets/img/emoji/4.png\" class=\"wow bounceIn\" data-wow-delay=\"0.3s\">
              <img src=\"assets/img/emoji/5.png\" class=\"wow bounceIn\" data-wow-delay=\"0.4s\">
            </div>
            <p>";
            // line 582
            echo twig_escape_filter($this->env, ($context["notification_modal_text"] ?? null), "html", null, true);
            echo "</p>
            <b>";
            // line 583
            echo ($context["notification_modal_contact"] ?? null);
            echo "</b>
            <div class=\"d-inline-block w-100 mt-3\">
              <a href=\"#contacts\" class=\"mb-0 btn btn-gradient closeNotification\">";
            // line 585
            echo twig_escape_filter($this->env, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["translate"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["contacts"] ?? null) : null), "html", null, true);
            echo "</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    ";
        }
        // line 592
        echo "
  </body>

  <script src=\"assets/js/bootstrap.min.js\"></script>
  <script src=\"assets/js/swiper.min.js\"></script>
  <script src=\"assets/js/fslightbox.js\"></script>
  <script src=\"assets/js/wow.min.js\"></script>

  <script>
    new WOW().init();
  </script>

  <script
    src=\"https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=c931e95f-6835-4672-9786-8ec02a9db87a\"
    type=\"text/javascript\"
  ></script>

  <script>

    var translater = new Object({
      count_rooms: \"";
        // line 612
        echo twig_escape_filter($this->env, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["translate"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["count_rooms"] ?? null) : null), "html", null, true);
        echo "\",
      floor: \"";
        // line 613
        echo twig_escape_filter($this->env, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["translate"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["floor"] ?? null) : null), "html", null, true);
        echo "\",
      square: \"";
        // line 614
        echo twig_escape_filter($this->env, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["translate"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["square"] ?? null) : null), "html", null, true);
        echo "\",
      download_plan: \"";
        // line 615
        echo twig_escape_filter($this->env, (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["translate"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["download_plan"] ?? null) : null), "html", null, true);
        echo "\",
      leave_a_request: \"";
        // line 616
        echo twig_escape_filter($this->env, (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["translate"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["leave_a_request"] ?? null) : null), "html", null, true);
        echo "\",
      no_valid_number: \"";
        // line 617
        echo twig_escape_filter($this->env, (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["translate"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["no_valid_number"] ?? null) : null), "html", null, true);
        echo "\",
      multiplier: \"";
        // line 618
        echo twig_escape_filter($this->env, (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["translate"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["multiplier"] ?? null) : null), "html", null, true);
        echo "\",
      multiplierX1: \"";
        // line 619
        echo twig_escape_filter($this->env, (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["translate"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["multiplierX1"] ?? null) : null), "html", null, true);
        echo "\"
    })

    var frontend = (function frontendModule() {

      function authorMarker() {
        console.log(\"%cExclusive Qurylys with Iskandarov Timur\", \"color:#fff; background-color:#7eb621; padding: 8px 15px; font-size: 14px; border-radius: 4px; text-align:center\")
      }

      function paralaxSlider(offset) {
        if (offset <= 650) {
          const paralaxLayers = document.querySelectorAll('.parallax__layer');

          paralaxLayers.forEach((layer) => {
            const speed = layer.getAttribute('data-speed');
            const duration = layer.getAttribute('data-duration');
            const transform = offset/duration;

            layer.style.transition = speed + \"s all\";
            layer.style.transform = layer.style.transform.split(' ')[0] + \" translateY(-\" + transform + \"px)\";
          });
        }
      }

      function creiateMap() {
        var map = document.querySelector('.dragscroll>img.map-image');
        var container = document.querySelector('.dragscroll');

        showCenterMap()

        function showCenterMap() {
          map.style.position = 'absolute';
          let left = ((map.offsetWidth - container.offsetWidth) / 2) * -1
          let top = ((map.offsetHeight - container.offsetHeight) / 2) * -1
          map.style.left = left + 'px'
          map.style.top = top + 'px'
        }

        map.onmousedown = function(e) {

          var coords = getCoords(map);
          var shiftX = e.pageX - coords.left;
          var shiftY = e.pageY - coords.top;

          moveAt(e);

          function moveAt(e) {
            map.style.left = getLmits(e).left + 'px';
            map.style.top = getLmits(e).top + 'px';
          }

          function getLmits(e) {

            let left = e.pageX - container.offsetLeft - shiftX
            let top = e.pageY - container.offsetTop - shiftY

            if (left > 0) {
              left = 0
            }

            if (left < ((map.offsetWidth - container.offsetWidth) * -1))     {
              left = ((map.offsetWidth - container.offsetWidth) * -1)
            }

            if (top > 0) {
              top = 0
            }

            if (top < ((map.offsetHeight - container.offsetHeight) * -1))     {
              top = ((map.offsetHeight - container.offsetHeight) * -1)
            }

            return {
              left: left,
              top: top
            }

          }

          document.onmousemove = function(e) {
            moveAt(e);
          };

          map.onmouseup = function() {
            document.onmousemove = null;
            map.onmouseup = null;
          };

        }

        map.ondragstart = function() {
          return false;
        };

        function getCoords(elem) {   // кроме IE8-
          var box = elem.getBoundingClientRect();
          return {
            top: box.top + pageYOffset,
            left: box.left + pageXOffset
          };
        }
      }

      function yandexMap() {
        searchMap = new ymaps.Map('map', {
          center: [43.227735, 76.955971], //43.318978, 76.897165
          zoom: 17,
          controls: [],
        });

        (marker = new ymaps.Placemark([43.227735, 76.955971],
                {
                  hintContent: 'Exclusive Time',
                  balloonContent: 'Exclusive Time',
                },
                {
                  iconLayout: 'default#image',
                  iconImageHref: 'assets/img/map-icon.png',
                  iconImageSize: [120, 120],
                  iconImageOffset: [-60, -130],
                }
        )),

                searchMap.geoObjects.add(marker);
        searchMap.behaviors.disable('scrollZoom');

      }

      function closePreloader() {

        setTimeout( () => {
          fade(document.getElementById('preloader'))
        }
        ,100)

      }

      function creiateUserNotification() {
        if (localStorage.getItem('notificationCheck') != 'yes') {
          var notificationModalEl = document.getElementById('notificationModal')
          if (notificationModalEl) {
            let notificationModal = new bootstrap.Modal(notificationModalEl, {
              keyboard: false
            })
            notificationModal.show()

            let closeNotification = document.querySelector('#notificationModal .btn-close')
            closeNotification.addEventListener('click', () => { localStorage.setItem('notificationCheck', 'yes') })
            notificationModalEl.addEventListener('click', () => { localStorage.setItem('notificationCheck', 'yes') })
          }
        }
      }

      function fade(element) {
        var op = 1;  // initial opacity
        var timer = setInterval(function () {
          if (op <= 0.1){
            clearInterval(timer);
            element.style.display = 'none';
          }
          element.style.opacity = op;
          element.style.filter = 'alpha(opacity=' + op * 100 + \")\";
          op -= op * 0.01;
        }, 0.1);
      }

      function sideBarToggle(condition) {
        let button = document.getElementById('sidebarToggle')
        let sideBar = document.querySelector('.sidebar')
        let bars = document.querySelector('.ham5')
        let sideBarPhone = document.querySelector('.call .phone')
        let mainPhone = document.querySelector('.contact-block__phone')

        sideBarPhone.href = 'tel:' + mainPhone.textContent
        sideBarPhone.textContent = mainPhone.textContent

        if (condition == 'open') {
          document.body.classList.remove('sidebarOpen')
          sideBar.classList.remove('open')
          button.setAttribute('data-condition', '')
        } else {
          document.body.classList.add('sidebarOpen')
          sideBar.classList.add('open')
          button.setAttribute('data-condition', 'open')
        }

        bars.classList.toggle('active')
      }

      function buildingStepsCarousel() {
        //Building Steps
        let slidesPerView = 3;
        let center = false;
        let margin = 1;

        if (window.innerWidth < 1350) {
          slidesPerView = 3;
        }

        if (window.innerWidth < 990) {
          slidesPerView = 2.3;
        }

        if (window.innerWidth < 768) {
          slidesPerView = 1.3;
          center = false
          margin = 10
        }

        if (window.innerWidth < 576) {
          slidesPerView = 1.2
          center = false
          margin = 10
        }

        var steps = new Swiper('.steps-swiper', {
          effect: null,
          loop: true,
          slidesPerView: slidesPerView,
          initialSlide: 0,
          keyboardControl: true,
          mousewheelControl: true,
          lazyLoading: true,
          centeredSlides: center,
          preventClicks: false,
          preventClicksPropagation: false,
          lazyLoadingInPrevNext: true,
          spaceBetween: margin,
        });

        buildingStepsAutoHeight();

      }

      function buildingStepsAutoHeight() {

        //Set autoHeight
        let steps_items = document.querySelectorAll('.steps-swiper .swiper-slide');

        steps_items.forEach(function (step) {
          let height = (step.offsetWidth / 10) * 11;
          step.style.height = height;
        })

      }

      function advantagesCarousel() {
        //Advantages-swiper
        let advantagesCount = 4

        if (window.innerWidth < 1220) {
          advantagesCount = 3
        }
        if (window.innerWidth < 990) {
          advantagesCount = 2
        }
        if (window.innerWidth < 768) {
          advantagesCount = 1.3
        }
        if (window.innerWidth < 576) {
          advantagesCount = 1
        }

        var advantages = new Swiper('.advantages-swiper', {
          effect: false,
          loop: false,
          centeredSlides: false,
          slidesPerView: advantagesCount,
          initialSlide: 0,
          keyboardControl: true,
          mousewheelControl: true,
          lazyLoading: true,
          preventClicks: false,
          preventClicksPropagation: false,
          lazyLoadingInPrevNext: true,
          spaceBetween: 30,
          navigation: {
            nextEl: \".swiper-button-next\",
            prevEl: \".swiper-button-prev\",
          },
          pagination: {
            el: \".swiper-pagination\",
          },
        })
      }

      function galleryCarousel() {

        var galery = new Swiper('.gallery-swiper', {
          effect: false,
          loop: false,
          autoHeight: true,
          centeredSlides: false,
          slidesPerView: 1.3,
          initialSlide: 0,
          keyboardControl: true,
          mousewheelControl: true,
          lazyLoading: false,
          preventClicks: false,
          preventClicksPropagation: false,
          lazyLoadingInPrevNext: false,
          spaceBetween: 25,
          navigation: {
            nextEl: \".gallery-next\",
            prevEl: \".gallery-prev\",
          }
        })

      }

      function creiateLightbox(data) {

        var lightbox = new FsLightbox()
        data = data.split(',')
        lightbox.props.sources = data
        lightbox.props.onInit
        lightbox.open()

      }

      function phoneValidator(){

        var phoneInputs = document.querySelectorAll('input[name=\"phone\"]')
        phoneInputs.forEach((el) => {
          el.addEventListener('input', function (e) {
            clearMessages()
            let numberCodes = ['710','711','712','713','714','715','716','717','718','721','722','723','724','725','726','727','728','729','736','700','701','702','703','704','705','706','707','708','709','747','750','751','760','761','762','763','764','771','775','776','777','778']
            let x = e.target.value.replace(/\\D/g, '').match(/(^\\d{0,1})(\\d{0,3})(\\d{0,3})(\\d{0,2})(\\d{0,2})/);

            e.target.value = !x[3] ? \"+\" + x[1] + x[2] : \"+\" + x[1] + ' (' + x[2] + ') ' + x[3] + (x[4] ? '-' + x[4] : '') + (x[5] ? '-' + x[5] : '');

            let errMess = document.createElement('span')
            errMess.classList.add('input-err')
            errMess.textContent = translater.no_valid_number

            //console.log(numberCodes.indexOf(x[2]))
            if (x[3] && ((x[1] != '7') || (numberCodes.indexOf(x[2]) == -1))) {
              el.parentNode.appendChild(errMess)
            } else {
              clearMessages()
            }

          });
        })

      }

      function validatePhoneNumber(number) {
        if (number.match(/^\\+\\d{1} \\(\\d{3}\\) \\d{3}\\-\\d{2}\\-\\d{2}\$/)) {
          return true
        } else {
          return false
        }
      }

      function clearMessages() {
        let messAll = document.querySelectorAll('.input-err')
        messAll.forEach((el) => {
          el.remove()
        })
      }

      function formValidator(element) {
        let errors = false
        let form = element.parentNode.parentNode
        let inputs = form.querySelectorAll('input, textarea')
        let userName = form.querySelector('[name=\"name\"]')
        let formQuery = new Object()

        let preloader = document.createElement('div')
        preloader.classList.add('form-preloader')
        form.appendChild(preloader)

        if (userName.value == '') {
          userName.value = 'Не указано'
        }

        inputs.forEach(function (el) {

          if (el.hasAttribute(\"required\") && el.value != \"\" || !el.hasAttribute(\"required\") && el.value != \"\") {
            let id = el.id
            let name = el.getAttribute('fieldname')
            let data = el.value
            formQuery[''+id] = {name, data}
          } else {
            if (el.hasAttribute(\"required\")) {
              el.setAttribute('style', 'border: 2px solid red;')
              errors = true
            }
          }

          if (el.name == 'phone') {
            if (!validatePhoneNumber(el.value)) {
              clearMessages()
              let errMess = document.createElement('span')
              errMess.classList.add('input-err')
              errMess.textContent = translater.no_valid_number
              el.parentNode.appendChild(errMess)
              errors = true
            } else {
              clearMessages()
            }
          }

        })

        if (!errors) {
          let user_data = collect_user_data()
          formQuery = Object.assign(formQuery, user_data)
          formSendData(formQuery, form)
        } else {
          preloader.remove()
        }

      }

      function collect_user_data(){

        const url = new URL(document.location.href)
        let user_data = new Object()

        //UTM DATA
        if (url.searchParams.get('utm_source')) {
          let name = 'utm_source'
          let data = url.searchParams.get('utm_source')
          user_data['utm_source'] = {name: name, data: data}
        }

        if (url.searchParams.get('utm_medium')) {
          let name = 'utm_medium'
          let data = url.searchParams.get('utm_medium')
          user_data['utm_medium'] = {name: name, data: data}
        }

        if (url.searchParams.get('utm_campaign')) {
          let name = 'utm_campaign'
          let data = url.searchParams.get('utm_campaign')
          user_data['utm_campaign'] = {name: name, data: data}
        }

        if (url.searchParams.get('utm_term')) {
          let name = 'utm_term'
          let data = url.searchParams.get('utm_term')
          user_data['utm_term'] = {name: name, data: data}
        }

        if (url.searchParams.get('utm_content')) {
          let name = 'utm_content'
          let data = url.searchParams.get('utm_content')
          user_data['utm_content'] = {name: name, data: data}
        }

        //UserAgent
        if (window.navigator.userAgent) {
          let name = 'userAgent'
          let data = window.navigator.userAgent
          user_data['userAgent'] = {name: name, data: data}
        }

        //Cookie
        if (get_cookie('_ga')) {
          let name = '_ga'
          let data = get_cookie('_ga').split('.')
          data = data[data.length - 2] + '.' + data[data.length - 1]
          user_data['_ga'] = {name: name, data: data}
        }

        //GetCookie Function
        function get_cookie ( cookie_name )
        {
          var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|\$)' );

          if ( results )
            return ( unescape ( results[2] ) );
          else
            return null;
        }

        return user_data

      }

      async function formSendData(formQuery, form) {
        let response = await fetch('?form=send_form', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json;charset=utf-8'
          },
          body: JSON.stringify(formQuery)
        });

        form.innerHTML = await response.text()

      }

      var newFilter = (function creiateFilter() {

        function getRooms(offers, filters) {
          //console.log(offersAll)
          let roomsBtnHtml = \"\"
          let roomsNumberArray = []
          for (var offer in offersAll) {
            if (!roomsNumberArray.includes(offersAll[offer].rooms)) {
              roomsNumberArray.push(offersAll[offer].rooms)
              roomsBtnHtml = roomsBtnHtml + '<a class=\"btn btn-outline-shahar me-2 mb-3 rooms\" data-filter=\"' + offersAll[offer].rooms + '\" href=\"#\" onclick=\"frontend.filterClick(\\'#roomButtons\\' ,this.getAttribute(\\'data-filter\\')); frontend.filterCreiate(offersAll); return false\">' + offersAll[offer].rooms + (offersAll[offer].rooms != 1 ? translater.multiplier : translater.multiplierX1) + '</a>'
            }
          }
          let rooms = document.getElementById('roomButtons')
          rooms.innerHTML = roomsBtnHtml
          if (filters.room == '') {
            let activeRoom = document.querySelector('#roomButtons .btn:first-child')
            activeRoom.classList.add(\"active\")
          } else {
            let activeRoom = document.querySelector('#roomButtons [data-filter=\"' + filters.room + '\"]')
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
                floorsBtnHtml = floorsBtnHtml + '<a class=\"btn btn-outline-shahar gold me-2 mb-3 sections\" data-filter=\"' + offers[offer].floors[floor] + '\" href=\"#\" onclick=\"frontend.filterClick(\\'#floorButtons\\', this.getAttribute(\\'data-filter\\')); frontend.filterCreiate(offersAll); return false\">' + offers[offer].floors[floor] + '</a>'
              }
            }
          }
          let floors = document.getElementById('floorButtons')
          floors.innerHTML = floorsBtnHtml
          if (filters.floor != '') {
            let activeFloor = document.querySelector('#floorButtons [data-filter=\"' + filters.floor + '\"]')
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
              squareBtnHtml = squareBtnHtml + '<a class=\"btn btn-outline-shahar me-2 mb-3 square\" data-filter=\"' + offers[offer].square + '\" href=\"#\" onclick=\"frontend.filterClick(\\'#squareButtons\\', this.getAttribute(\\'data-filter\\')); frontend.filterCreiate(offersAll); return false\">' + offers[offer].square + ' м2</a>'
            }
          }
          let square = document.getElementById('squareButtons')
          square.innerHTML = squareBtnHtml
          if (filters.square != '') {
            let activeSquare = document.querySelector('#squareButtons [data-filter=\"' + filters.square + '\"]')
            if (activeSquare) {
              activeSquare.classList.add(\"active\")
            } else {
              square.firstElementChild.classList.add(\"active\")
            }
          }
        }

        function filterOffers(offersAll) {

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
          itemsArray.sort(function (nodeA, nodeB) {
            var textA = nodeA.getAttribute('data-filter');
            var textB = nodeB.getAttribute('data-filter');
            var numberA = parseInt(textA);
            var numberB = parseInt(textB);
            if (numberA < numberB) return -1;
            if (numberA > numberB) return 1;
            return 0;
          })
                  .forEach(function (node) {
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
            offersHtml += '                <h4>' + el.rooms + ((el.rooms != 1) ? translater.multiplier : translater.multiplierX1) + '</h4>';
            offersHtml += '                <p>' + translater.square + ': <b>' + el.square + ' м2</b></p>';
            offersHtml += '                <a class=\"downloadPlan\" data-caption=\"' + el.title + '\" href=\"https://cms.abpx.kz' + el.plan.path + '\" onclick=\"frontend.lightBox(this.href); return false\">' + translater.download_plan + '</a>';
            //offersHtml += '                <div class=\"mb-3\">';
            //offersHtml += '                  <span>Стоимость от: </span>';
            //offersHtml += '                  <h6>18 530 000 тг</h6>';
            //offersHtml += '                  <b>от 306 280 за м2</b>';
            //offersHtml += '                </div>';
            offersHtml += '              </div>';
            offersHtml +=
                    '              <div class=\"orderBottons mt-auto align-items-end\">';
            offersHtml +=
                    '                <a href=\"#\" class=\"btn btn-gradient mb-3\" data-bs-toggle=\"modal\" data-bs-target=\"#callbackModal\">' + translater.leave_a_request + ' <i class=\"fas fa-chevron-right\"></i></a>';
            offersHtml += '              </div>';
            offersHtml += '            </div>';
            offersHtml += '            <div class=\"col-md-7 p-3 floor-plan d-flex\">';
            offersHtml += '              <a href=\"https://cms.abpx.kz' + el.plan.path + '\" onclick=\"frontend.lightBox(this.href); return false\">';
            offersHtml += '                <img data-src=\"https://cms.abpx.kz/' + el.plan.path + '\" class=\"swiper-lazy\">';
            offersHtml += '\t\t\t\t   <div class=\"swiper-lazy-preloader swiper-lazy-preloader-pink\"></div>';
            offersHtml += '              </a>';
            offersHtml += '            </div>';
            offersHtml += '          </div>';
            offersHtml += '        </div>';
            offersHtml += '      </div>';
          });
          offersHtml += '</div><div class=\"swiper-button-next flat-next\"></div><div class=\"swiper-button-prev flat-prev\"></div></div>';
          let offersCarousel = document.querySelector('.plansCarousel')
          offersCarousel.innerHTML = offersHtml
          startNewSwiper()
        }

        function startNewSwiper(offersAll) {
          let flats = new Swiper('.swiper-flats', {
            spaceBetween: 20,
            lazy: true,
            navigation: {
              nextEl: \".flat-next\",
              prevEl: \".flat-prev\",
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

        return {
          filterOffers: filterOffers,
          activateButton: activateButton
        }

      })()

      function frontendReady() {
        authorMarker();
        creiateMap();
        buildingStepsCarousel();
        advantagesCarousel();
        galleryCarousel();
        closePreloader();
        //creiateUserNotification();
        phoneValidator();
      }

      function frontendResize() {
        buildingStepsCarousel()
        advantagesCarousel()
        creiateMap()
      }

      function frontendScroll() {
        paralaxSlider(window.pageYOffset);

        //Slider paralax
        var scrollPosition = 0
        //var decor1 = document.querySelector('.decor1')
        //var decor2 = document.querySelector('.decor2')
        var header = document.querySelector('header')
        //var logo = document.querySelector('header a.navbar-brand img')

        if (window.pageYOffset < 700) {
          scroll1 = window.pageYOffset / 4
          scroll2 = window.pageYOffset / 20
          //decor1.style.transform = \"translateY(-\" + scroll1 + \"px)\"
          //decor2.style.transform = \"translateY(-\" + scroll2 + \"px)\"
        } else {
          if (!header.classList.contains('ymap')) {
            header.classList.add('ymap')
            ymaps.ready(frontend.yandex)
          }
        }

        if (window.pageYOffset > 450)\t{
          header.classList.add('fixed')

        } else {
          header.classList.remove('fixed')
        }

        if (window.pageYOffset > 650)\t{
          if (!header.classList.contains('sticky')) {
            header.classList.add('sticky')
          }
        } else {
          if (header.classList.contains('sticky')) {
            header.classList.remove('sticky')
          }
        }
      }

      return {
        marker: authorMarker,
        steps: buildingStepsCarousel,
        advantages: advantagesCarousel,
        filterCreiate: newFilter.filterOffers,
        filterClick: newFilter.activateButton,
        lightBox: creiateLightbox,
        sidebar: sideBarToggle,
        map: creiateMap,
        yandex: yandexMap,
        form: formValidator,
        ready: frontendReady,
        resize: frontendResize,
        scroll: frontendScroll
      }

    })()

  \tdocument.addEventListener(\"DOMContentLoaded\", ()=>{ frontend.ready() })
  \twindow.addEventListener(\"resize\", ()=>{ frontend.resize() })
  \tdocument.addEventListener(\"scroll\", ()=>{ frontend.scroll() })

    frontend.filterCreiate(offersAll)

  </script>

  <style>
  .gallery-swiper img {
      max-width:100%;
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

  .form-preloader {
    position: absolute;
    left: 0px;
    right: 0px;
    top: 0px;
    bottom: 0px;
    background: rgb(255 255 255 / 45%) url(https://cms.abpx.kz/storage/uploads/2021/09/01/612f182cd48ad35.gif);
    background-repeat: no-repeat;
    background-position: center;
    background-size: 40px;
  }

  span.input-err:before {content: '';position: absolute;width: 10px;height: 10px;background: #efd37d; top: -5px;left: 15px;transform: rotate(45deg);}
  </style>

  ";
        // line 1455
        echo ($context["site_scripts_in_footer"] ?? null);
        echo "

</html>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1778 => 1455,  939 => 619,  935 => 618,  931 => 617,  927 => 616,  923 => 615,  919 => 614,  915 => 613,  911 => 612,  889 => 592,  879 => 585,  874 => 583,  870 => 582,  859 => 574,  851 => 568,  849 => 567,  828 => 549,  822 => 546,  816 => 543,  802 => 532,  797 => 530,  792 => 528,  787 => 526,  782 => 524,  770 => 515,  763 => 511,  754 => 505,  737 => 491,  612 => 369,  534 => 294,  524 => 287,  510 => 276,  503 => 272,  496 => 268,  489 => 264,  482 => 260,  463 => 244,  459 => 243,  439 => 225,  429 => 221,  425 => 220,  421 => 218,  417 => 217,  408 => 211,  404 => 210,  387 => 196,  382 => 194,  378 => 193,  374 => 192,  360 => 185,  351 => 178,  336 => 170,  332 => 169,  328 => 168,  319 => 162,  314 => 160,  310 => 159,  306 => 158,  297 => 151,  295 => 150,  292 => 149,  283 => 142,  273 => 138,  269 => 137,  266 => 136,  262 => 135,  255 => 131,  251 => 130,  247 => 129,  242 => 126,  240 => 125,  235 => 123,  230 => 121,  219 => 115,  213 => 114,  205 => 109,  197 => 104,  189 => 99,  180 => 93,  174 => 90,  168 => 87,  162 => 84,  156 => 81,  150 => 78,  135 => 74,  123 => 73,  69 => 22,  61 => 17,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "C:\\xampp\\htdocs\\alatau-two\\views\\index.twig");
    }
}
