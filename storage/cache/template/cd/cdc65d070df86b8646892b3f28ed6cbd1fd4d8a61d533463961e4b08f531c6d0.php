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

/* revolution/template/common/simple_row_hidden.twig */
class __TwigTemplate_c97366481c3dd3d928126adbfa4044ebf6c1639f3316b8b528156bcf6abd9853 extends \Twig\Template
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
        echo "<input type=\"hidden\" name=\"";
        echo ($context["name"] ?? null);
        echo "\" id=\"";
        echo ($context["id"] ?? null);
        echo "\" value=\"";
        echo ($context["value"] ?? null);
        echo "\">";
    }

    public function getTemplateName()
    {
        return "revolution/template/common/simple_row_hidden.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/template/common/simple_row_hidden.twig", "");
    }
}
