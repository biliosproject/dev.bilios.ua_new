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

/* revolution/template/revolution/account/revaccountmod.twig */
class __TwigTemplate_28395d0ead1dc5a6f36bed4855102d8b894a08c285d13449b39bfa4cf241edd9 extends \Twig\Template
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
        echo "<div class=\"list-group\">
\t";
        // line 2
        if ( !($context["logged"] ?? null)) {
            echo " 
\t\t<a href=\"";
            // line 3
            echo ($context["login"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
\t\t<a href=\"";
            // line 4
            echo ($context["register"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
\t\t<a href=\"";
            // line 5
            echo ($context["forgotten"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_forgotten"] ?? null);
            echo "</a>
\t";
        }
        // line 6
        echo " 
\t";
        // line 7
        if (($context["logged"] ?? null)) {
            echo " 
\t\t<a href=\"";
            // line 8
            echo ($context["edit"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_edit"] ?? null);
            echo "</a>
\t\t";
            // line 9
            if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["settings"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["revaccount_wishlist"] ?? null) : null)) {
                echo " 
\t\t\t<a href=\"";
                // line 10
                echo ($context["wishlist"] ?? null);
                echo "\" class=\"list-group-item\">";
                echo ($context["text_wishlist"] ?? null);
                echo "</a>
\t\t";
            }
            // line 11
            echo " 
\t\t";
            // line 12
            if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["settings"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["revaccount_orders"] ?? null) : null)) {
                echo " 
\t\t\t<a href=\"";
                // line 13
                echo ($context["order"] ?? null);
                echo "\" class=\"list-group-item\">";
                echo ($context["text_order"] ?? null);
                echo "</a>
\t\t";
            }
            // line 14
            echo " 
\t\t";
            // line 15
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["settings"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["revaccount_files"] ?? null) : null)) {
                echo " 
\t\t\t<a href=\"";
                // line 16
                echo ($context["download"] ?? null);
                echo "\" class=\"list-group-item\">";
                echo ($context["text_download"] ?? null);
                echo "</a>
\t\t";
            }
            // line 17
            echo " 
\t\t";
            // line 18
            if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["settings"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["revaccount_bonus"] ?? null) : null)) {
                echo " 
\t\t\t<a href=\"";
                // line 19
                echo ($context["reward"] ?? null);
                echo "\" class=\"list-group-item\">";
                echo ($context["text_reward"] ?? null);
                echo "</a>
\t\t";
            }
            // line 20
            echo " 
\t\t";
            // line 21
            if ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["settings"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["revaccount_returns"] ?? null) : null)) {
                echo " 
\t\t\t<a href=\"";
                // line 22
                echo ($context["return"] ?? null);
                echo "\" class=\"list-group-item\">";
                echo ($context["text_return"] ?? null);
                echo "</a>
\t\t";
            }
            // line 23
            echo " 
\t\t";
            // line 24
            if ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["settings"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["revaccount_pay_history"] ?? null) : null)) {
                echo " 
\t\t\t<a href=\"";
                // line 25
                echo ($context["transaction"] ?? null);
                echo "\" class=\"list-group-item\">";
                echo ($context["text_transaction"] ?? null);
                echo "</a>
\t\t";
            }
            // line 26
            echo " 
\t\t";
            // line 27
            if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["settings"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["revaccount_pay_regular"] ?? null) : null)) {
                echo " 
\t\t\t<a href=\"";
                // line 28
                echo ($context["recurring"] ?? null);
                echo "\" class=\"list-group-item\">";
                echo ($context["text_recurring"] ?? null);
                echo "</a>
\t\t";
            }
            // line 29
            echo " 
\t\t<a href=\"";
            // line 30
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
\t";
        }
        // line 31
        echo " 
</div>";
    }

    public function getTemplateName()
    {
        return "revolution/template/revolution/account/revaccountmod.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 31,  174 => 30,  171 => 29,  164 => 28,  160 => 27,  157 => 26,  150 => 25,  146 => 24,  143 => 23,  136 => 22,  132 => 21,  129 => 20,  122 => 19,  118 => 18,  115 => 17,  108 => 16,  104 => 15,  101 => 14,  94 => 13,  90 => 12,  87 => 11,  80 => 10,  76 => 9,  70 => 8,  66 => 7,  63 => 6,  56 => 5,  50 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/template/revolution/account/revaccountmod.twig", "");
    }
}
