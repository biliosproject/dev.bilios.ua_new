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

/* revolution/template/common/cart_mobi.twig */
class __TwigTemplate_61d131a7f512c540fd7bb19cf6dca0ba18bde836edb9d24c66d61c982fe4c910 extends \Twig\Template
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
        echo "<div id=\"cart_mobi\" class=\"btn-group show-on-hover w100 ";
        echo ($context["mini_header_cart_class"] ?? null);
        echo "\">
\t";
        // line 2
        if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["setting_header_cart"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["type"] ?? null) : null) == "redirect")) {
            echo " 
\t\t<button class=\"cart\" onclick=\"get_revpopup_cart('', 'redirect_cart', '');\">
\t\t\t<span id=\"cart-total_mobi\">";
            // line 4
            echo ($context["text_items"] ?? null);
            echo "</span>
\t\t</button>
\t";
        } else {
            // line 6
            echo " 
\t\t<button class=\"cart\" onclick=\"get_revpopup_cart('', 'show_cart', '');\">
\t\t\t<span id=\"cart-total_mobi\">";
            // line 8
            echo ($context["text_items"] ?? null);
            echo "</span>
\t\t</button>
\t";
        }
        // line 10
        echo " 
</div>";
    }

    public function getTemplateName()
    {
        return "revolution/template/common/cart_mobi.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  57 => 8,  53 => 6,  47 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/template/common/cart_mobi.twig", "");
    }
}
