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

/* revolution/template/common/home.twig */
class __TwigTemplate_c65ca0bca5f282578e635dd36accb9822ca2b9918024aaadc5ba3ab691b418a0 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo " 
<div id=\"top5\" class=\"clearfix\">
";
        // line 3
        if (($context["slideshow"] ?? null)) {
            echo " 
<div id=\"top4\" class=\"clearfix\">
\t";
            // line 5
            if ((((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["setting_home_slideshow"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["allwide"] ?? null) : null) &&  !($context["amazon"] ?? null)) || (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["setting_home_slideshow"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["allwide"] ?? null) : null) && ($context["amazon"] ?? null)) &&  !($context["allwide"] ?? null)))) {
                echo " 
\t";
            } else {
                // line 6
                echo " 
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t";
            }
            // line 9
            echo " 
\t\t\t";
            // line 10
            if ((($context["allwide"] ?? null) && ($context["amazon"] ?? null))) {
                echo " 
\t\t\t\t";
                // line 11
                if (($context["h1_home"] ?? null)) {
                    echo " 
\t\t\t\t\t<div class=\"col-md-offset-3\"><h1 class=\"home_h1\">";
                    // line 12
                    echo ($context["h1_home"] ?? null);
                    echo "</h1></div>
\t\t\t\t";
                }
                // line 13
                echo " 
\t\t\t\t<div class=\"hidden-xs hidden-sm col-md-3\"></div>
\t\t\t\t<div class=\"col-sm-12 col-md-9\">";
                // line 15
                echo ($context["slideshow"] ?? null);
                echo "</div>
\t\t\t";
            } else {
                // line 16
                echo " 
\t\t\t\t";
                // line 17
                if (($context["h1_home"] ?? null)) {
                    echo " 
\t\t\t\t\t<h1 class=\"home_h1\">";
                    // line 18
                    echo ($context["h1_home"] ?? null);
                    echo "</h1>
\t\t\t\t";
                }
                // line 19
                echo "\t
\t\t\t\t<div class=\"col-sm-12 col-md-12\">";
                // line 20
                echo ($context["slideshow"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 21
            echo " 
\t\t";
            // line 22
            if ((((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["setting_home_slideshow"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["allwide"] ?? null) : null) &&  !($context["amazon"] ?? null)) || (((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["setting_home_slideshow"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["allwide"] ?? null) : null) && ($context["amazon"] ?? null)) &&  !($context["allwide"] ?? null)))) {
                echo " 
\t\t";
            } else {
                // line 23
                echo " 
\t\t</div>
\t</div>
\t";
            }
            // line 26
            echo " 
</div>
";
        } else {
            // line 28
            echo " 
\t";
            // line 29
            if ((($context["h1_home"] ?? null) && ($context["is_desctope"] ?? null))) {
                echo " 
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
                // line 32
                if ((($context["allwide"] ?? null) && ($context["amazon"] ?? null))) {
                    echo " 
\t\t\t\t<div class=\"hidden-xs hidden-sm col-md-offset-3\"><h1 class=\"home2_h1\">";
                    // line 33
                    echo ($context["h1_home"] ?? null);
                    echo "</h1></div>
\t\t\t\t";
                } else {
                    // line 34
                    echo " 
\t\t\t\t<div class=\"hidden-xs hidden-sm\"><h1 class=\"home2_h1\">";
                    // line 35
                    echo ($context["h1_home"] ?? null);
                    echo "</h1></div>
\t\t\t\t";
                }
                // line 36
                echo " 
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 39
            echo " 
";
        }
        // line 40
        echo " 
";
        // line 41
        if (($context["blocks"] ?? null)) {
            echo " 
<div id=\"top6\" class=\"clearfix\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t";
            // line 45
            echo ($context["blocks"] ?? null);
            echo " 
\t\t</div>
\t</div>
</div>\t
";
        } else {
            // line 49
            echo " 
";
            // line 50
            if ((($context["allwide"] ?? null) && ($context["amazon"] ?? null))) {
                echo " 
<div style=\"height:70px; width:100%; clear:both\"></div>
";
            } else {
                // line 52
                echo " 
<div style=\"height:30px; width:100%; clear:both\"></div>
";
            }
            // line 54
            echo " 
";
        }
        // line 55
        echo " 
</div>

<div class=\"container\">
\t<div class=\"row\">
\t";
        // line 60
        echo ($context["column_left"] ?? null);
        echo " 
\t
\t";
        // line 62
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            echo " 
\t";
            // line 63
            $context["class"] = "col-sm-6";
            echo " 
\t";
        } elseif ((        // line 64
($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            echo " 
\t";
            // line 65
            $context["class"] = "col-sm-9";
            echo " 
\t";
        } else {
            // line 66
            echo " 
\t";
            // line 67
            $context["class"] = "col-sm-12";
            echo " 
\t";
        }
        // line 68
        echo " 
\t
\t<div id=\"content\" class=\"";
        // line 70
        echo ($context["class"] ?? null);
        echo "\">
\t
\t";
        // line 72
        echo ($context["content_top"] ?? null);
        echo " 
\t
\t";
        // line 74
        echo ($context["revcategorywall"] ?? null);
        echo " 
\t";
        // line 75
        echo ($context["ptabs"] ?? null);
        echo " 
\t";
        // line 76
        echo ($context["pbest"] ?? null);
        echo " 
\t";
        // line 77
        echo ($context["pspec"] ?? null);
        echo " 
\t";
        // line 78
        echo ($context["plast"] ?? null);
        echo " 
\t";
        // line 79
        echo ($context["slider_tabs"] ?? null);
        echo " 
\t";
        // line 80
        echo ($context["slider_1"] ?? null);
        echo " 
\t";
        // line 81
        echo ($context["slider_2"] ?? null);
        echo " 
\t";
        // line 82
        echo ($context["slider_3"] ?? null);
        echo " 
\t";
        // line 83
        echo ($context["slider_4"] ?? null);
        echo " 
\t
\t";
        // line 85
        if (($context["blog"] ?? null)) {
            echo " 
\t</div>
\t</div>
\t</div>
\t<div id=\"top7\" class=\"clearfix\">
\t<div class=\"container\">
\t";
            // line 91
            echo ($context["blog"] ?? null);
            echo " 
\t</div>
\t</div>
\t<div class=\"container\">
\t<div class=\"row\">
\t<div class=\"col-sm-12\">
\t";
        }
        // line 98
        echo "\t
\t";
        // line 99
        if (($context["aboutstore"] ?? null)) {
            echo " 
\t";
            // line 100
            if ((((($context["socv"] ?? null) || ($context["socfb"] ?? null)) || ($context["socok"] ?? null)) || (($context["socvinsta"] ?? null) && ($context["right_insta"] ?? null)))) {
                $context["aboutclass1"] = "col-sm-12 col-md-8 col-lg-9 aboutstore";
                $context["aboutclass2"] = "col-sm-12 col-md-4 col-lg-3";
            } else {
                echo " ";
                $context["aboutclass1"] = "col-sm-12 aboutstore2";
                $context["aboutclass2"] = "";
            }
            echo " 
\t<div class=\"row\">
\t<div class=\"";
            // line 102
            echo ($context["aboutclass1"] ?? null);
            echo "\">
\t";
            // line 103
            echo ($context["aboutstore"] ?? null);
            echo " 
\t";
            // line 104
            if ( !($context["right_insta"] ?? null)) {
                echo " 
\t";
                // line 105
                echo ($context["socvinsta"] ?? null);
                echo " 
\t";
            }
            // line 106
            echo " 
\t</div>
\t<div class=\"";
            // line 108
            echo ($context["aboutclass2"] ?? null);
            echo "\">
\t";
            // line 109
            echo ($context["socv"] ?? null);
            echo " 
\t";
            // line 110
            echo ($context["socfb"] ?? null);
            echo " 
\t";
            // line 111
            echo ($context["socok"] ?? null);
            echo " 
\t";
            // line 112
            if (($context["right_insta"] ?? null)) {
                echo " 
\t";
                // line 113
                echo ($context["socvinsta"] ?? null);
                echo " 
\t";
            }
            // line 114
            echo " 
\t</div>
\t</div>
\t";
        }
        // line 117
        echo " 
\t
\t";
        // line 119
        echo ($context["storereview"] ?? null);
        echo " 
\t";
        // line 120
        echo ($context["viewed_products"] ?? null);
        echo " 
\t
\t";
        // line 122
        echo ($context["content_bottom"] ?? null);
        echo " 
\t
\t</div>
\t";
        // line 125
        echo ($context["column_right"] ?? null);
        echo " 
\t</div>
</div>

";
        // line 129
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "revolution/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 129,  395 => 125,  389 => 122,  384 => 120,  380 => 119,  376 => 117,  370 => 114,  365 => 113,  361 => 112,  357 => 111,  353 => 110,  349 => 109,  345 => 108,  341 => 106,  336 => 105,  332 => 104,  328 => 103,  324 => 102,  312 => 100,  308 => 99,  305 => 98,  295 => 91,  286 => 85,  281 => 83,  277 => 82,  273 => 81,  269 => 80,  265 => 79,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  240 => 72,  235 => 70,  231 => 68,  226 => 67,  223 => 66,  218 => 65,  214 => 64,  210 => 63,  206 => 62,  201 => 60,  194 => 55,  190 => 54,  185 => 52,  179 => 50,  176 => 49,  168 => 45,  161 => 41,  158 => 40,  154 => 39,  148 => 36,  143 => 35,  140 => 34,  135 => 33,  131 => 32,  125 => 29,  122 => 28,  117 => 26,  111 => 23,  106 => 22,  103 => 21,  98 => 20,  95 => 19,  90 => 18,  86 => 17,  83 => 16,  78 => 15,  74 => 13,  69 => 12,  65 => 11,  61 => 10,  58 => 9,  52 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/template/common/home.twig", "");
    }
}
