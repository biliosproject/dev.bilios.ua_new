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

/* revolution/template/checkout/simplecheckout_shipping_address.twig */
class __TwigTemplate_324d772cd218e0e1f5529dc8e9ce9350bd0beefbc2a19b1a5b79417ce0bc6f69 extends \Twig\Template
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
        echo "<div class=\"simplecheckout-block\" id=\"simplecheckout_shipping_address\" ";
        echo ((($context["hide"] ?? null)) ? ("data-hide=\"true\"") : (""));
        echo " ";
        echo (((($context["display_error"] ?? null) && ($context["has_error"] ?? null))) ? ("data-error=\"true\"") : (""));
        echo ">
  ";
        // line 2
        if (($context["display_header"] ?? null)) {
            // line 3
            echo "    <div class=\"checkout-heading panel-heading\">";
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo "</div>
  ";
        }
        // line 5
        echo "  <div class=\"simplecheckout-block-content\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 7
            echo "      ";
            echo $context["row"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hidden_rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 10
            echo "      ";
            echo $context["row"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "revolution/template/checkout/simplecheckout_shipping_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 12,  73 => 10,  68 => 9,  59 => 7,  55 => 6,  52 => 5,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/template/checkout/simplecheckout_shipping_address.twig", "");
    }
}
