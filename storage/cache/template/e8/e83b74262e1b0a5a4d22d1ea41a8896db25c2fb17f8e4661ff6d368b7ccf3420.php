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

/* revolution/template/common/simple_footer.twig */
class __TwigTemplate_3ea39b2fdeec79490aa31b75e31f8be66ecdc1d6797c7c0aa56b68eee9d55a0d extends \Twig\Template
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
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 2
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 4
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "revolution/template/common/simple_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/template/common/simple_footer.twig", "/home/xandr4ik/web/dev.bilios.ua/public_html/catalog/view/theme/revolution/template/common/simple_footer.twig");
    }
}
