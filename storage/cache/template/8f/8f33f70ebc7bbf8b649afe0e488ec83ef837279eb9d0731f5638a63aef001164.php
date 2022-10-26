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

/* common/column_left.twig */
class __TwigTemplate_075ab7e8d2c03fde15c9926304c33f077ab6906d7ca53231087d1587d4ec2a1b extends \Twig\Template
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
        echo "<nav id=\"column-left\">
  <div id=\"navigation\"><span class=\"fa fa-bars\"></span> ";
        // line 2
        echo ($context["text_navigation"] ?? null);
        echo "</div>
  <ul id=\"menu\">

\t\t\t\t<li id=\"revtheme\"><a href=\"#collapse_revall\" data-toggle=\"collapse\" class=\"parent collapsed\"><i class=\"fa fa-registered fa-fw\"></i> <span>";
        // line 5
        echo ($context["text_revtheme"] ?? null);
        echo "</span></a>
\t\t\t\t\t<ul id=\"collapse_revall\" class=\"collapse\">
\t\t\t\t\t\t<li><a href=\"";
        // line 7
        echo ($context["revtheme_setting"] ?? null);
        echo "\">";
        echo ($context["text_revtheme_setting"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 8
        echo ($context["revfilter"] ?? null);
        echo "\">";
        echo ($context["text_revfilter"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 9
        echo ($context["producttab"] ?? null);
        echo "\">";
        echo ($context["text_product_tab"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 10
        echo ($context["producttextblocks"] ?? null);
        echo "\">";
        echo ($context["text_product_textblocks"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 11
        echo ($context["revpopupphone"] ?? null);
        echo "\">";
        echo ($context["text_revpopupphone"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 12
        echo ($context["href_revanswers"] ?? null);
        echo "\">";
        echo ($context["text_revanswers"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 13
        echo ($context["revsubscribe"] ?? null);
        echo "\">";
        echo ($context["text_revsubscribe"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li id=\"revblog\"><a href=\"#collapse_revnews\" data-toggle=\"collapse\" class=\"parent collapsed\"><span>";
        // line 14
        echo ($context["text_revblog"] ?? null);
        echo "</span></a>
\t\t\t\t\t\t\t<ul id=\"collapse_revnews\" class=\"collapse\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 16
        echo ($context["revblog_setting"] ?? null);
        echo "\">";
        echo ($context["text_revblog_setting"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 17
        echo ($context["revblog_category_list"] ?? null);
        echo "\">";
        echo ($context["text_revblog_category_list"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 18
        echo ($context["revblog_list"] ?? null);
        echo "\">";
        echo ($context["text_revblog_list"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 19
        echo ($context["revblog_reviews"] ?? null);
        echo "\">";
        echo ($context["text_revblog_reviews"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t
    ";
        // line 25
        $context["i"] = 0;
        // line 26
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 27
            echo "    <li id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 27);
            echo "\">
        ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 28)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 28);
                echo "\"><i class=\"fa ";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 28);
                echo " fw\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 28);
                echo "</a>";
            } else {
                echo "<a href=\"#collapse";
                echo ($context["i"] ?? null);
                echo "\" data-toggle=\"collapse\" class=\"parent collapsed\"><i class=\"fa ";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 28);
                echo " fw\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 28);
                echo "</a>";
            }
            // line 29
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 29)) {
                // line 30
                echo "          <ul id=\"collapse";
                echo ($context["i"] ?? null);
                echo "\" class=\"collapse\">
            ";
                // line 31
                $context["j"] = 0;
                // line 32
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 32));
                foreach ($context['_seq'] as $context["_key"] => $context["children_1"]) {
                    // line 33
                    echo "              <li>";
                    if (twig_get_attribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 33)) {
                        // line 34
                        echo "                  <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 34);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 34);
                        echo "</a>
                ";
                    } else {
                        // line 36
                        echo "                  <a href=\"#collapse";
                        echo ($context["i"] ?? null);
                        echo "-";
                        echo ($context["j"] ?? null);
                        echo "\" data-toggle=\"collapse\" class=\"parent collapsed\">";
                        echo twig_get_attribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 36);
                        echo "</a>
                ";
                    }
                    // line 38
                    echo "
                ";
                    // line 39
                    if (twig_get_attribute($this->env, $this->source, $context["children_1"], "children", [], "any", false, false, false, 39)) {
                        // line 40
                        echo "                  <ul id=\"collapse";
                        echo ($context["i"] ?? null);
                        echo "-";
                        echo ($context["j"] ?? null);
                        echo "\" class=\"collapse\">
                    ";
                        // line 41
                        $context["k"] = 0;
                        // line 42
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["children_1"], "children", [], "any", false, false, false, 42));
                        foreach ($context['_seq'] as $context["_key"] => $context["children_2"]) {
                            // line 43
                            echo "                      <li>";
                            if (twig_get_attribute($this->env, $this->source, $context["children_2"], "href", [], "any", false, false, false, 43)) {
                                // line 44
                                echo "                          <a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["children_2"], "href", [], "any", false, false, false, 44);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["children_2"], "name", [], "any", false, false, false, 44);
                                echo "</a>
                        ";
                            } else {
                                // line 46
                                echo "                          <a href=\"#collapse-";
                                echo ($context["i"] ?? null);
                                echo "-";
                                echo ($context["j"] ?? null);
                                echo "-";
                                echo ($context["k"] ?? null);
                                echo "\" data-toggle=\"collapse\" class=\"parent collapsed\">";
                                echo twig_get_attribute($this->env, $this->source, $context["children_2"], "name", [], "any", false, false, false, 46);
                                echo "</a>
                        ";
                            }
                            // line 48
                            echo "                        ";
                            if (twig_get_attribute($this->env, $this->source, $context["children_2"], "children", [], "any", false, false, false, 48)) {
                                // line 49
                                echo "                          <ul id=\"collapse-";
                                echo ($context["i"] ?? null);
                                echo "-";
                                echo ($context["j"] ?? null);
                                echo "-";
                                echo ($context["k"] ?? null);
                                echo "\" class=\"collapse\">
                            ";
                                // line 50
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["children_2"], "children", [], "any", false, false, false, 50));
                                foreach ($context['_seq'] as $context["_key"] => $context["children_3"]) {
                                    // line 51
                                    echo "                              <li><a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["children_3"], "href", [], "any", false, false, false, 51);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["children_3"], "name", [], "any", false, false, false, 51);
                                    echo "</a></li>
                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_3'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 53
                                echo "                          </ul>
                        ";
                            }
                            // line 54
                            echo "</li>
                      ";
                            // line 55
                            $context["k"] = (($context["k"] ?? null) + 1);
                            // line 56
                            echo "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 57
                        echo "                  </ul>
                ";
                    }
                    // line 58
                    echo " </li>
              ";
                    // line 59
                    $context["j"] = (($context["j"] ?? null) + 1);
                    // line 60
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "          </ul>
        ";
            }
            // line 63
            echo "      </li>
    ";
            // line 64
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 65
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "  </ul>
  <div id=\"stats\">
    <ul>
      <li>
        <div>";
        // line 70
        echo ($context["text_complete_status"] ?? null);
        echo " <span class=\"pull-right\">";
        echo ($context["complete_status"] ?? null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"";
        // line 72
        echo ($context["complete_status"] ?? null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo ($context["complete_status"] ?? null);
        echo "%\"> <span class=\"sr-only\">";
        echo ($context["complete_status"] ?? null);
        echo "%</span></div>
        </div>
      </li>
      <li>
        <div>";
        // line 76
        echo ($context["text_processing_status"] ?? null);
        echo " <span class=\"pull-right\">";
        echo ($context["processing_status"] ?? null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"";
        // line 78
        echo ($context["processing_status"] ?? null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo ($context["processing_status"] ?? null);
        echo "%\"> <span class=\"sr-only\">";
        echo ($context["processing_status"] ?? null);
        echo "%</span></div>
        </div>
      </li>
      <li>
        <div>";
        // line 82
        echo ($context["text_other_status"] ?? null);
        echo " <span class=\"pull-right\">";
        echo ($context["other_status"] ?? null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"";
        // line 84
        echo ($context["other_status"] ?? null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo ($context["other_status"] ?? null);
        echo "%\"> <span class=\"sr-only\">";
        echo ($context["other_status"] ?? null);
        echo "%</span></div>
        </div>
      </li>
    </ul>
  </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "common/column_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 84,  349 => 82,  338 => 78,  331 => 76,  320 => 72,  313 => 70,  307 => 66,  301 => 65,  299 => 64,  296 => 63,  292 => 61,  286 => 60,  284 => 59,  281 => 58,  277 => 57,  271 => 56,  269 => 55,  266 => 54,  262 => 53,  251 => 51,  247 => 50,  238 => 49,  235 => 48,  223 => 46,  215 => 44,  212 => 43,  207 => 42,  205 => 41,  198 => 40,  196 => 39,  193 => 38,  183 => 36,  175 => 34,  172 => 33,  167 => 32,  165 => 31,  160 => 30,  157 => 29,  139 => 28,  134 => 27,  129 => 26,  127 => 25,  116 => 19,  110 => 18,  104 => 17,  98 => 16,  93 => 14,  87 => 13,  81 => 12,  75 => 11,  69 => 10,  63 => 9,  57 => 8,  51 => 7,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/column_left.twig", "");
    }
}
