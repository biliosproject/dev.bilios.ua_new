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

/* revolution/template/revolution/revmenu.twig */
class __TwigTemplate_c26086f9b17dc3b3f1c305847eadb15d50edc9f3250db0273c7422d2fbef211d extends \Twig\Template
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
        echo "<div id=\"menu2_button\" ";
        if (($context["module_class"] ?? null)) {
            echo "class=\"page-fader ";
            echo ($context["module_class"] ?? null);
            echo "\"";
        }
        echo ">
<div class=\"box-heading hidden-md hidden-lg\" data-toggle=\"offcanvas\" data-target=\".navmenu.mobcats\" data-canvas=\"body\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "<span class=\"icorightmenu\"><i class=\"fa fa-chevron-down\"></i></span></div>
";
        // line 3
        if (($context["is_desctope"] ?? null)) {
            echo " 
<div class=\"box-heading hidden-xs hidden-sm\" onclick=\"return false;\">";
            // line 4
            echo ($context["heading_title"] ?? null);
            echo "<span class=\"icorightmenu\"><i class=\"fa fa-chevron-down\"></i></span></div>
<div class=\"box-content am hidden-xs hidden-sm\">
<div id=\"menu2\" ";
            // line 6
            if (($context["module_class"] ?? null)) {
                echo "class=\"";
                echo ($context["module_class"] ?? null);
                echo "\"";
            }
            echo ">
<div class=\"podmenu2\"></div>
<div class=\"catalog_list catalog_list_popup catalog_as_popup\">
";
            // line 9
            if (($context["revtheme_dop_menus"] ?? null)) {
                echo " 
\t";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["revtheme_dop_menus"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["revtheme_dop_menu"]) {
                    echo " 
\t\t<div class=\"revlevel_1 hasChildren closed menu2dopmenu\">
\t\t\t";
                    // line 12
                    if (twig_get_attribute($this->env, $this->source, $context["revtheme_dop_menu"], "children", [], "array", true, true, false, 12)) {
                        echo " 
\t\t\t\t<div class=\"title with-child\">
\t\t\t\t\t<a href=\"";
                        // line 14
                        echo ((((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["revtheme_dop_menu"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[("href" . ($context["config_language_id"] ?? null))] ?? null) : null) != "")) ? ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["revtheme_dop_menu"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[("href" . ($context["config_language_id"] ?? null))] ?? null) : null)) : ("#"));
                        echo "\" ";
                        echo ((((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["revtheme_dop_menu"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[("href" . ($context["config_language_id"] ?? null))] ?? null) : null) != "")) ? ("") : ("onclick='return false;' class='cursor_default_menu'"));
                        echo ">
\t\t\t\t\t";
                        // line 15
                        if (((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["revtheme_dop_menu"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["icontype"] ?? null) : null) == "iconka")) {
                            echo " <i class=\"am_category_icon ";
                            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["revtheme_dop_menu"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["dop_menu_iconka"] ?? null) : null);
                            echo "\"></i> ";
                        } else {
                            echo " ";
                            if ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["revtheme_dop_menu"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["dop_menu_image"] ?? null) : null)) {
                                echo " <span class=\"am_category_image\"><img src=\"";
                                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["revtheme_dop_menu"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["dop_menu_image"] ?? null) : null);
                                echo "\" alt=\"\"><span class=\"mask\"></span></span> ";
                            }
                            echo " ";
                        }
                        echo " ";
                        echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["revtheme_dop_menu"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                        echo "
\t\t\t\t\t<span class=\"arrow-btn\"><i class=\"fa fa-angle-right\"></i></span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t ";
                    } else {
                        // line 20
                        echo "\t\t\t\t<div class=\"title\">
\t\t\t\t\t<a href=\"";
                        // line 21
                        echo ((((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["revtheme_dop_menu"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[("href" . ($context["config_language_id"] ?? null))] ?? null) : null) != "")) ? ((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["revtheme_dop_menu"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[("href" . ($context["config_language_id"] ?? null))] ?? null) : null)) : ("#"));
                        echo "\" ";
                        echo ((((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["revtheme_dop_menu"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[("href" . ($context["config_language_id"] ?? null))] ?? null) : null) != "")) ? ("") : ("onclick='return false;' class='cursor_default_menu'"));
                        echo ">
\t\t\t\t\t";
                        // line 22
                        if (((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["revtheme_dop_menu"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["icontype"] ?? null) : null) == "iconka")) {
                            echo " <i class=\"am_category_icon ";
                            echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["revtheme_dop_menu"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["dop_menu_iconka"] ?? null) : null);
                            echo "\"></i> ";
                        } else {
                            echo " ";
                            if ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["revtheme_dop_menu"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["dop_menu_image"] ?? null) : null)) {
                                echo " <span class=\"am_category_image\"><img src=\"";
                                echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["revtheme_dop_menu"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["dop_menu_image"] ?? null) : null);
                                echo "\" alt=\"\"><span class=\"mask\"></span></span> ";
                            }
                            echo " ";
                        }
                        echo " ";
                        echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["revtheme_dop_menu"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                        echo "</a>
\t\t\t\t</div>
\t\t\t";
                    }
                    // line 24
                    echo " 
\t\t\t";
                    // line 25
                    if (twig_get_attribute($this->env, $this->source, $context["revtheme_dop_menu"], "children", [], "array", true, true, false, 25)) {
                        // line 26
                        echo "\t\t\t\t<div class=\"childrenList\">
\t\t\t\t\t";
                        // line 27
                        if (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["revtheme_dop_menu"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["column"] ?? null) : null) == 1)) {
                            // line 28
                            echo "\t\t\t\t\t\t";
                            $context["box_class"] = "box-col-1";
                            echo " ";
                            $context["col_class"] = "col-1";
                            echo " ";
                            $context["image_in_ico_class"] = "col-sm-12 col-lg-6";
                            // line 29
                            echo "\t\t\t\t\t";
                        } elseif (((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["revtheme_dop_menu"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["column"] ?? null) : null) == 2)) {
                            // line 30
                            echo "\t\t\t\t\t\t";
                            $context["box_class"] = "box-col-2";
                            echo " ";
                            $context["col_class"] = "col-2";
                            echo " ";
                            $context["image_in_ico_class"] = "col-sm-4 col-lg-3";
                            // line 31
                            echo "\t\t\t\t\t";
                        } elseif (((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["revtheme_dop_menu"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["column"] ?? null) : null) == 3)) {
                            // line 32
                            echo "\t\t\t\t\t\t";
                            $context["box_class"] = "box-col-3";
                            echo " ";
                            $context["col_class"] = "col-3";
                            echo " ";
                            $context["image_in_ico_class"] = "col-sm-3 col-lg-2";
                            // line 33
                            echo "\t\t\t\t\t";
                        } else {
                            echo " 
\t\t\t\t\t\t";
                            // line 34
                            $context["box_class"] = "box-col-4";
                            echo " ";
                            $context["col_class"] = "col-4";
                            echo " ";
                            $context["image_in_ico_class"] = "col-sm-12 col-lg-6";
                            // line 35
                            echo "\t\t\t\t\t";
                        }
                        echo " 
\t\t\t\t\t<div class=\"child-box ";
                        // line 36
                        echo ($context["box_class"] ?? null);
                        echo "\">
\t\t\t\t\t\t";
                        // line 37
                        if (($context["image_in_ico"] ?? null)) {
                            echo " 
\t\t\t\t\t\t\t<div class=\"image_in_ico_dop_";
                            // line 38
                            echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["revtheme_dop_menu"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["id"] ?? null) : null);
                            echo " refine_categories clearfix\">
\t\t\t\t\t\t\t\t";
                            // line 39
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["revtheme_dop_menu"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["children"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                echo " 
\t\t\t\t\t\t\t\t\t<a class=\"";
                                // line 40
                                echo ($context["image_in_ico_class"] ?? null);
                                echo "\" href=\"";
                                echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["child"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[("href" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                // line 41
                                echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["child"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["dop_menu_image"] ?? null) : null);
                                echo "\" alt=\"";
                                echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["child"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                echo "\" /><span>";
                                echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["child"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 43
                            echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                        } else {
                            // line 45
                            echo " 
\t\t\t\t\t\t\t<ul class=\"ul_block";
                            // line 46
                            echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["revtheme_dop_menu"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["id"] ?? null) : null);
                            echo " cat_dop ";
                            echo ($context["col_class"] ?? null);
                            echo "\">
\t\t\t\t\t\t\t";
                            // line 47
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["revtheme_dop_menu"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["children"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                echo " 
\t\t\t\t\t\t\t\t<li class=\"glavli\"><a href=\"";
                                // line 48
                                echo ((((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["child"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[("href" . ($context["config_language_id"] ?? null))] ?? null) : null) != "")) ? ((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["child"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[("href" . ($context["config_language_id"] ?? null))] ?? null) : null)) : ("#"));
                                echo "\" ";
                                echo ((((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["child"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[("href" . ($context["config_language_id"] ?? null))] ?? null) : null) != "")) ? ("") : ("onclick='return false;' class='cursor_default_menu'"));
                                echo ">";
                                if (((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["child"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["icontype"] ?? null) : null) == "iconka")) {
                                    echo " <i class=\"am_category_icon ";
                                    echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["child"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["dop_menu_iconka"] ?? null) : null);
                                    echo "\"></i> ";
                                } else {
                                    echo " ";
                                    if ((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["child"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["dop_menu_image"] ?? null) : null)) {
                                        echo " <span class=\"am_category_image\"><img src=\"";
                                        echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["child"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["dop_menu_image"] ?? null) : null);
                                        echo "\" alt=\"\"><span class=\"mask\"></span></span> ";
                                    }
                                    echo " ";
                                }
                                echo " ";
                                echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["child"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                echo "</a>
\t\t\t\t\t\t\t\t\t";
                                // line 49
                                if ((($context["tri_level"] ?? null) && twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "array", true, true, false, 49))) {
                                    // line 50
                                    echo "\t\t\t\t\t\t\t\t\t<ul class=\"lastul\">
\t\t\t\t\t\t\t\t\t\t";
                                    // line 51
                                    $context["arr_child3"] = twig_slice($this->env, (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["child"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["children"] ?? null) : null), 0, (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["setting_revtheme_header_menu"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["ogranich_count"] ?? null) : null));
                                    echo " 
\t\t\t\t\t\t\t\t\t\t";
                                    // line 52
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(($context["arr_child3"] ?? null));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child2"]) {
                                        // line 53
                                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                                        if (((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["child2"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["id"] ?? null) : null) == ($context["child2_id"] ?? null))) {
                                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"category-";
                                            // line 54
                                            echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["child2"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["id"] ?? null) : null);
                                            echo " active\"><a href=\"";
                                            echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["child2"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[("href" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                            echo "\" class=\"active\"><i class=\"fa fa-minus\"></i>";
                                            echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["child2"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
                                        } else {
                                            // line 56
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"category-";
                                            echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["child2"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["id"] ?? null) : null);
                                            echo "\"><a href=\"";
                                            echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["child2"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[("href" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                            echo "\"><i class=\"fa fa-minus\"></i>";
                                            echo (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["child2"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 58
                                        echo "\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child2'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 59
                                    echo "\t\t\t\t\t\t\t\t\t\t";
                                    if ((($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = ($context["setting_revtheme_header_menu"] ?? null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["ogranich"] ?? null) : null)) {
                                        echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 60
                                        $context["child_count"] = twig_length_filter($this->env, (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["child"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["children"] ?? null) : null));
                                        echo " ";
                                        $context["arr_child4"] = twig_slice($this->env, (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["child"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["children"] ?? null) : null), (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["setting_revtheme_header_menu"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["ogranich_count"] ?? null) : null), null);
                                        echo " ";
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable((($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["child"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["children"] ?? null) : null));
                                        foreach ($context['_seq'] as $context["_key"] => $context["child4"]) {
                                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 61
                                            if (((($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = ($context["child2"] ?? null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["id"] ?? null) : null) == ($context["child2_id"] ?? null))) {
                                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"category-";
                                                // line 62
                                                echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = ($context["child2"] ?? null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["id"] ?? null) : null);
                                                echo " active categoryoff\"><a href=\"";
                                                echo (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = ($context["child2"] ?? null)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4[("href" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                                echo "\" class=\"active\"><i class=\"fa fa-minus\"></i>";
                                                echo (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = ($context["child2"] ?? null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                            } else {
                                                // line 64
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"category-";
                                                echo (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = ($context["child2"] ?? null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["id"] ?? null) : null);
                                                echo " categoryoff\"><a href=\"";
                                                echo (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = ($context["child2"] ?? null)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a[("href" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                                echo "\"><i class=\"fa fa-minus\"></i>";
                                                echo (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = ($context["child2"] ?? null)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 66
                                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child4'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 67
                                        if ((($context["child_count"] ?? null) > (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = ($context["setting_revtheme_header_menu"] ?? null)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["ogranich_count"] ?? null) : null))) {
                                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"show_categoryoff show_coff\">";
                                            // line 68
                                            echo ($context["text_show_all"] ?? null);
                                            echo "</li>
\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 69
                                        echo " 
\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 70
                                    echo " 
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 72
                                echo " 
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 75
                            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                        }
                        // line 76
                        echo "  
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                    }
                    // line 79
                    echo " 
\t\t</div>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revtheme_dop_menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo " 
";
            }
            // line 82
            echo " 
";
            // line 83
            if (($context["cats_status"] ?? null)) {
                echo " 
\t";
                // line 84
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    echo " 
\t\t<div class=\"revlevel_1 hasChildren closed menu2categories\">
\t\t\t";
                    // line 86
                    if ((($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = $context["category"]) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["children"] ?? null) : null)) {
                        echo " 
\t\t\t\t<div class=\"title with-child\">
\t\t\t\t<a href=\"";
                        // line 88
                        echo (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = $context["category"]) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["href"] ?? null) : null);
                        echo "\">
\t\t\t\t";
                        // line 89
                        if ((($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = $context["category"]) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["category_image"] ?? null) : null)) {
                            echo " ";
                            echo (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = $context["category"]) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["category_image"] ?? null) : null);
                            echo " ";
                        }
                        echo (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = $context["category"]) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["name"] ?? null) : null);
                        echo " 
\t\t\t\t<span class=\"arrow-btn\"><i class=\"fa fa-angle-right\"></i></span>
\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t";
                    } else {
                        // line 93
                        echo " 
\t\t\t\t<div class=\"title\">
\t\t\t\t<a href=\"";
                        // line 95
                        echo (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = $context["category"]) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["href"] ?? null) : null);
                        echo "\">";
                        if ((($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = $context["category"]) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["category_image"] ?? null) : null)) {
                            echo " ";
                            echo (($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = $context["category"]) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["category_image"] ?? null) : null);
                            echo " ";
                        }
                        echo (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = $context["category"]) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["name"] ?? null) : null);
                        echo "</a>
\t\t\t\t</div>
\t\t\t";
                    }
                    // line 97
                    echo " 
\t\t\t";
                    // line 98
                    if ((($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = $context["category"]) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["children"] ?? null) : null)) {
                        echo "\t
\t\t\t<div class=\"childrenList\">
\t\t\t\t";
                        // line 100
                        if (((($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = $context["category"]) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["column"] ?? null) : null) == 1)) {
                            // line 101
                            echo "\t\t\t\t\t";
                            $context["box_class"] = "box-col-1";
                            echo " ";
                            $context["col_class"] = "col-1";
                            echo " ";
                            $context["image_in_ico_class"] = "col-sm-12 col-lg-6";
                            // line 102
                            echo "\t\t\t\t";
                        } elseif (((($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = $context["category"]) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["column"] ?? null) : null) == 2)) {
                            // line 103
                            echo "\t\t\t\t\t";
                            $context["box_class"] = "box-col-2";
                            echo " ";
                            $context["col_class"] = "col-2";
                            echo " ";
                            $context["image_in_ico_class"] = "col-sm-4 col-lg-3";
                            // line 104
                            echo "\t\t\t\t";
                        } elseif (((($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = $context["category"]) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["column"] ?? null) : null) == 3)) {
                            // line 105
                            echo "\t\t\t\t\t";
                            $context["box_class"] = "box-col-3";
                            echo " ";
                            $context["col_class"] = "col-3";
                            echo " ";
                            $context["image_in_ico_class"] = "col-sm-3 col-lg-2";
                            // line 106
                            echo "\t\t\t\t";
                        } else {
                            echo " 
\t\t\t\t\t";
                            // line 107
                            $context["box_class"] = "box-col-4";
                            echo " ";
                            $context["col_class"] = "col-4";
                            echo " ";
                            $context["image_in_ico_class"] = "col-sm-12 col-lg-6";
                            // line 108
                            echo "\t\t\t\t";
                        }
                        echo " 
\t\t\t\t<div class=\"child-box ";
                        // line 109
                        echo ($context["box_class"] ?? null);
                        echo "\">
\t\t\t\t";
                        // line 110
                        if (($context["image_in_ico"] ?? null)) {
                            echo " 
\t\t\t\t\t<div class=\"image_in_ico_";
                            // line 111
                            echo (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = $context["category"]) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["category_id"] ?? null) : null);
                            echo " refine_categories clearfix\">
\t\t\t\t\t\t";
                            // line 112
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = $context["category"]) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["children"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                echo " 
\t\t\t\t\t\t\t<a class=\"";
                                // line 113
                                echo ($context["image_in_ico_class"] ?? null);
                                echo "\" href=\"";
                                echo (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = $context["child"]) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["href"] ?? null) : null);
                                echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                                // line 114
                                echo (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = $context["child"]) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["thumb"] ?? null) : null);
                                echo "\" alt=\"";
                                echo (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = $context["child"]) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["name"] ?? null) : null);
                                echo "\" /><span>";
                                echo (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = $context["child"]) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["name"] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 116
                            echo " 
\t\t\t\t\t</div>
\t\t\t\t";
                        } else {
                            // line 118
                            echo " 
\t\t\t\t\t<ul class=\"ul_block";
                            // line 119
                            echo (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = $context["category"]) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["category_id"] ?? null) : null);
                            echo " ";
                            echo ($context["col_class"] ?? null);
                            echo "\">
\t\t\t\t\t";
                            // line 120
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = $context["category"]) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["children"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                echo " 
\t\t\t\t\t\t<li class=\"glavli\"><a href=\"";
                                // line 121
                                echo (($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = $context["child"]) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c["href"] ?? null) : null);
                                echo "\">";
                                if ((($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = $context["child"]) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c["category_image"] ?? null) : null)) {
                                    echo " ";
                                    echo (($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = $context["child"]) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["category_image"] ?? null) : null);
                                    echo " ";
                                }
                                echo (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = $context["child"]) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8["name"] ?? null) : null);
                                echo "</a>
\t\t\t\t\t\t\t";
                                // line 122
                                if ((($context["tri_level"] ?? null) && (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = $context["child"]) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["children"] ?? null) : null))) {
                                    echo " 
\t\t\t\t\t\t\t<ul class=\"lastul\">
\t\t\t\t\t\t\t\t";
                                    // line 124
                                    if ((($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = ($context["setting_revtheme_header_menu"] ?? null)) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9["ogranich"] ?? null) : null)) {
                                        echo " ";
                                        $context["arr_child"] = twig_slice($this->env, (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = $context["child"]) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac["children"] ?? null) : null), 0, (($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = ($context["setting_revtheme_header_menu"] ?? null)) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768["ogranich_count"] ?? null) : null));
                                        echo " ";
                                    } else {
                                        echo " ";
                                        $context["arr_child"] = (($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = $context["child"]) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57["children"] ?? null) : null);
                                        echo " ";
                                    }
                                    // line 125
                                    echo "\t\t\t\t\t\t\t\t";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(($context["arr_child"] ?? null));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child2"]) {
                                        echo " 
\t\t\t\t\t\t\t\t\t";
                                        // line 126
                                        if (((($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = $context["child2"]) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898["category_id"] ?? null) : null) == ($context["child2_id"] ?? null))) {
                                            echo " 
\t\t\t\t\t\t\t\t\t\t<li class=\"category-";
                                            // line 127
                                            echo (($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = $context["child2"]) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["category_id"] ?? null) : null);
                                            echo " active\"><a href=\"";
                                            echo (($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = $context["child2"]) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a["href"] ?? null) : null);
                                            echo "\" class=\"active\"><i class=\"fa fa-minus\"></i>";
                                            echo (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = $context["child2"]) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3["name"] ?? null) : null);
                                            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                                        } else {
                                            // line 128
                                            echo " 
\t\t\t\t\t\t\t\t\t\t<li class=\"category-";
                                            // line 129
                                            echo (($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = $context["child2"]) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4["category_id"] ?? null) : null);
                                            echo "\"><a href=\"";
                                            echo (($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = $context["child2"]) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9["href"] ?? null) : null);
                                            echo "\"><i class=\"fa fa-minus\"></i>";
                                            echo (($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = $context["child2"]) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7["name"] ?? null) : null);
                                            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 130
                                        echo " 
\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child2'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 131
                                    echo " 
\t\t\t\t\t\t\t\t";
                                    // line 132
                                    if ((($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = ($context["setting_revtheme_header_menu"] ?? null)) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416["ogranich"] ?? null) : null)) {
                                        echo " 
\t\t\t\t\t\t\t\t\t";
                                        // line 133
                                        $context["child_count"] = twig_length_filter($this->env, (($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = $context["child"]) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e["children"] ?? null) : null));
                                        echo " ";
                                        $context["arr_child2"] = twig_slice($this->env, (($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = $context["child"]) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f["children"] ?? null) : null), (($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = ($context["setting_revtheme_header_menu"] ?? null)) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b["ogranich_count"] ?? null) : null), null);
                                        echo " ";
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(($context["arr_child2"] ?? null));
                                        foreach ($context['_seq'] as $context["_key"] => $context["child2"]) {
                                            echo " 
\t\t\t\t\t\t\t\t\t\t";
                                            // line 134
                                            if (((($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = $context["child2"]) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75["category_id"] ?? null) : null) == ($context["child2_id"] ?? null))) {
                                                echo " 
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category-";
                                                // line 135
                                                echo (($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = $context["child2"]) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c["category_id"] ?? null) : null);
                                                echo " active categoryoff\"><a href=\"";
                                                echo (($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = $context["child2"]) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1["href"] ?? null) : null);
                                                echo "\" class=\"active\"><i class=\"fa fa-minus\"></i>";
                                                echo (($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = $context["child2"]) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24["name"] ?? null) : null);
                                                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
                                            } else {
                                                // line 136
                                                echo " 
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category-";
                                                // line 137
                                                echo (($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = $context["child2"]) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850["category_id"] ?? null) : null);
                                                echo " categoryoff\"><a href=\"";
                                                echo (($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = $context["child2"]) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34["href"] ?? null) : null);
                                                echo "\"><i class=\"fa fa-minus\"></i>";
                                                echo (($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = $context["child2"]) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df["name"] ?? null) : null);
                                                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 138
                                            echo " 
\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child2'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 139
                                        echo " 
\t\t\t\t\t\t\t\t\t";
                                        // line 140
                                        if ((($context["child_count"] ?? null) > (($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = ($context["setting_revtheme_header_menu"] ?? null)) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4["ogranich_count"] ?? null) : null))) {
                                            echo " 
\t\t\t\t\t\t\t\t\t\t<li class=\"show_categoryoff show_coff\">";
                                            // line 141
                                            echo ($context["text_show_all"] ?? null);
                                            echo "</li>
\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 142
                                        echo " 
\t\t\t\t\t\t\t\t";
                                    }
                                    // line 143
                                    echo " 
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
                                }
                                // line 145
                                echo " 
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 147
                            echo " \t 
\t\t\t\t\t</ul>
\t\t\t\t";
                        }
                        // line 149
                        echo "  
\t\t\t\t";
                        // line 150
                        if ((($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = $context["category"]) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36["thumb2"] ?? null) : null)) {
                            echo " 
\t\t\t\t\t<img class=\"img_sub\" src=\"";
                            // line 151
                            echo (($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = $context["category"]) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b["thumb2"] ?? null) : null);
                            echo "\" alt=\"";
                            echo (($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e = $context["category"]) && is_array($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e) || $__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e instanceof ArrayAccess ? ($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e["name"] ?? null) : null);
                            echo "\" />\t
\t\t\t\t";
                        }
                        // line 152
                        echo " 
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                    }
                    // line 155
                    echo "  
\t\t</div>\t\t
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 157
                echo "  
";
            }
            // line 158
            echo "  
";
            // line 159
            if (($context["manuf_status"] ?? null)) {
                echo " 
\t";
                // line 160
                if (($context["categories_m"] ?? null)) {
                    echo " 
\t<div class=\"revlevel_1 hasChildren closed i_rhml_manufs\">
\t\t<div class=\"title with-child\">
\t\t<a href=\"";
                    // line 163
                    echo ($context["url_revmenu_manufs"] ?? null);
                    echo "\">";
                    if (($context["manuf_image"] ?? null)) {
                        echo " ";
                        echo ($context["manuf_image"] ?? null);
                        echo " ";
                    }
                    echo ($context["text_revmenu_manufs"] ?? null);
                    echo "<span class=\"arrow-btn\"><i class=\"fa fa-angle-right\"></i></span></a>
\t\t</div>
\t\t<div class=\"childrenList\">
\t\t\t";
                    // line 166
                    if ((($context["n_column"] ?? null) == 1)) {
                        // line 167
                        echo "\t\t\t\t";
                        $context["box_class_m"] = "box-col-1";
                        echo " ";
                        $context["col_class_m"] = "col-1";
                        echo " ";
                        $context["image_in_ico_class"] = "col-sm-12 col-lg-6";
                        // line 168
                        echo "\t\t\t";
                    } elseif ((($context["n_column"] ?? null) == 2)) {
                        // line 169
                        echo "\t\t\t\t";
                        $context["box_class_m"] = "box-col-2";
                        echo " ";
                        $context["col_class_m"] = "col-2";
                        echo " ";
                        $context["image_in_ico_class"] = "col-sm-4 col-lg-3";
                        // line 170
                        echo "\t\t\t";
                    } elseif ((($context["n_column"] ?? null) == 3)) {
                        // line 171
                        echo "\t\t\t\t";
                        $context["box_class_m"] = "box-col-3";
                        echo " ";
                        $context["col_class_m"] = "col-3";
                        echo " ";
                        $context["image_in_ico_class"] = "col-sm-3 col-lg-2";
                        // line 172
                        echo "\t\t\t";
                    } else {
                        echo " 
\t\t\t\t";
                        // line 173
                        $context["box_class_m"] = "box-col-4";
                        echo " ";
                        $context["col_class_m"] = "col-4";
                        echo " ";
                        $context["image_in_ico_class"] = "col-sm-12 col-lg-6";
                        // line 174
                        echo "\t\t\t";
                    }
                    echo " 
\t\t\t<div class=\"child-box ";
                    // line 175
                    echo ($context["box_class_m"] ?? null);
                    echo "\">
\t\t\t\t";
                    // line 176
                    if (($context["image_in_ico_m"] ?? null)) {
                        echo " 
\t\t\t\t\t<div class=\"image_in_ico_manufacturers refine_categories clearfix\">
\t\t\t\t\t\t";
                        // line 178
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories_m"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories_m"] ?? null)) / ($context["n_column"] ?? null)))));
                        foreach ($context['_seq'] as $context["_key"] => $context["categorys"]) {
                            echo " 
\t\t\t\t\t\t\t";
                            // line 179
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["categorys"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                                echo " 
\t\t\t\t\t\t\t\t";
                                // line 180
                                if ((($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 = $context["category"]) && is_array($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7) || $__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 instanceof ArrayAccess ? ($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7["manufacturer"] ?? null) : null)) {
                                    echo " 
\t\t\t\t\t\t\t\t\t";
                                    // line 181
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable((($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 = $context["category"]) && is_array($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606) || $__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 instanceof ArrayAccess ? ($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606["manufacturer"] ?? null) : null));
                                    foreach ($context['_seq'] as $context["_key"] => $context["manufacturers"]) {
                                        echo " 
\t\t\t\t\t\t\t\t\t\t<a class=\"";
                                        // line 182
                                        echo ($context["image_in_ico_class"] ?? null);
                                        echo "\" href=\"";
                                        echo (($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd = $context["manufacturers"]) && is_array($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd) || $__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd instanceof ArrayAccess ? ($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd["href"] ?? null) : null);
                                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                        // line 183
                                        echo (($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e = $context["manufacturers"]) && is_array($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e) || $__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e instanceof ArrayAccess ? ($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e["thumb"] ?? null) : null);
                                        echo "\" title=\"";
                                        echo (($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 = $context["manufacturers"]) && is_array($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1) || $__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 instanceof ArrayAccess ? ($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1["name"] ?? null) : null);
                                        echo "\" alt=\"";
                                        echo (($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb = $context["manufacturers"]) && is_array($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb) || $__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb instanceof ArrayAccess ? ($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb["name"] ?? null) : null);
                                        echo "\" /><span>";
                                        echo (($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf = $context["manufacturers"]) && is_array($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf) || $__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf instanceof ArrayAccess ? ($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf["name"] ?? null) : null);
                                        echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturers'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 185
                                    echo " 
\t\t\t\t\t\t\t\t";
                                }
                                // line 186
                                echo " 
\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 187
                            echo " 
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorys'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 188
                        echo " 
\t\t\t\t\t</div>
\t\t\t\t";
                    } else {
                        // line 190
                        echo "\t
\t\t\t\t\t<ul class=\"ul_block cat_m ";
                        // line 191
                        echo ($context["col_class_m"] ?? null);
                        echo "\">
\t\t\t\t\t\t";
                        // line 192
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["categories_m"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                            echo " 
\t\t\t\t\t\t\t<li class=\"glavli\">";
                            // line 193
                            echo (($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b = $context["category"]) && is_array($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b) || $__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b instanceof ArrayAccess ? ($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b["name"] ?? null) : null);
                            echo " 
\t\t\t\t\t\t\t\t<ul class=\"lastul\">
\t\t\t\t\t\t\t\t\t";
                            // line 195
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 = $context["category"]) && is_array($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980) || $__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 instanceof ArrayAccess ? ($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980["manufacturer"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["manufacturers"]) {
                                echo " 
\t\t\t\t\t\t\t\t\t  <li class=\"category\"><a href=\"";
                                // line 196
                                echo (($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 = $context["manufacturers"]) && is_array($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345) || $__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 instanceof ArrayAccess ? ($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345["href"] ?? null) : null);
                                echo "\"><i class=\"fa fa-minus\"></i>";
                                echo (($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 = $context["manufacturers"]) && is_array($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3) || $__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 instanceof ArrayAccess ? ($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3["name"] ?? null) : null);
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturers'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 197
                            echo "\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 200
                        echo " 
\t\t\t\t\t</ul>
\t\t\t\t";
                    }
                    // line 202
                    echo " 
\t\t\t</div>\t\t
\t\t</div>
\t</div>
\t";
                }
                // line 206
                echo " 
";
            }
            // line 207
            echo " 
";
            // line 208
            if (($context["revblog_status"] ?? null)) {
                echo " 
\t";
                // line 209
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["blog_categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    echo " 
\t\t<div class=\"revlevel_1 hasChildren closed i_rhml_revblog\">
\t\t\t";
                    // line 211
                    if ((($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 = $context["category"]) && is_array($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0) || $__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 instanceof ArrayAccess ? ($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0["children"] ?? null) : null)) {
                        echo " 
\t\t\t\t<div class=\"title with-child\">
\t\t\t\t<a href=\"";
                        // line 213
                        echo (($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 = $context["category"]) && is_array($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938) || $__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 instanceof ArrayAccess ? ($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938["href"] ?? null) : null);
                        echo "\">
\t\t\t\t";
                        // line 214
                        echo (($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 = $context["category"]) && is_array($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3) || $__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 instanceof ArrayAccess ? ($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3["name"] ?? null) : null);
                        echo " 
\t\t\t\t<span class=\"arrow-btn\"><i class=\"fa fa-angle-right\"></i></span>
\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t";
                    } else {
                        // line 218
                        echo " 
\t\t\t\t<div class=\"title\">
\t\t\t\t<a href=\"";
                        // line 220
                        echo (($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa = $context["category"]) && is_array($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa) || $__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa instanceof ArrayAccess ? ($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa["href"] ?? null) : null);
                        echo "\">";
                        echo (($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb = $context["category"]) && is_array($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb) || $__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb instanceof ArrayAccess ? ($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb["name"] ?? null) : null);
                        echo "</a>
\t\t\t\t</div>
\t\t\t";
                    }
                    // line 222
                    echo " 
\t\t\t";
                    // line 223
                    if ((($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c = $context["category"]) && is_array($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c) || $__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c instanceof ArrayAccess ? ($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c["children"] ?? null) : null)) {
                        echo "\t
\t\t\t<div class=\"childrenList\">
\t\t\t\t";
                        // line 225
                        if ((($context["revblog_column"] ?? null) == 1)) {
                            // line 226
                            echo "\t\t\t\t\t";
                            $context["box_class_revblog"] = "box-col-1";
                            echo " ";
                            $context["col_class_revblog"] = "col-1";
                            echo " ";
                            $context["image_in_ico_class_revblog"] = "col-sm-12 col-lg-6";
                            // line 227
                            echo "\t\t\t\t";
                        } elseif ((($context["revblog_column"] ?? null) == 2)) {
                            // line 228
                            echo "\t\t\t\t\t";
                            $context["box_class_revblog"] = "box-col-2";
                            echo " ";
                            $context["col_class_revblog"] = "col-2";
                            echo " ";
                            $context["image_in_ico_class_revblog"] = "col-sm-4 col-lg-3";
                            // line 229
                            echo "\t\t\t\t";
                        } elseif ((($context["revblog_column"] ?? null) == 3)) {
                            // line 230
                            echo "\t\t\t\t\t";
                            $context["box_class_revblog"] = "box-col-3";
                            echo " ";
                            $context["col_class_revblog"] = "col-3";
                            echo " ";
                            $context["image_in_ico_class_revblog"] = "col-sm-3 col-lg-2";
                            // line 231
                            echo "\t\t\t\t";
                        } else {
                            echo " 
\t\t\t\t\t";
                            // line 232
                            $context["box_class_revblog"] = "box-col-4";
                            echo " ";
                            $context["col_class_revblog"] = "col-4";
                            echo " ";
                            $context["image_in_ico_class_revblog"] = "col-sm-12 col-lg-6";
                            // line 233
                            echo "\t\t\t\t";
                        }
                        echo " 
\t\t\t\t<div class=\"child-box ";
                        // line 234
                        echo ($context["box_class_revblog"] ?? null);
                        echo "\">
\t\t\t\t";
                        // line 235
                        if (($context["image_in_ico_revblog"] ?? null)) {
                            echo " 
\t\t\t\t\t<div class=\"image_in_ico_revblog refine_categories clearfix\">
\t\t\t\t\t\t";
                            // line 237
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a = $context["category"]) && is_array($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a) || $__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a instanceof ArrayAccess ? ($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a["children"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                echo " 
\t\t\t\t\t\t\t<a class=\"";
                                // line 238
                                echo ($context["image_in_ico_class_revblog"] ?? null);
                                echo "\" href=\"";
                                echo (($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 = $context["child"]) && is_array($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6) || $__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 instanceof ArrayAccess ? ($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6["href"] ?? null) : null);
                                echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                                // line 239
                                echo (($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b = $context["child"]) && is_array($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b) || $__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b instanceof ArrayAccess ? ($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b["thumb"] ?? null) : null);
                                echo "\" alt=\"";
                                echo (($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 = $context["child"]) && is_array($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526) || $__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 instanceof ArrayAccess ? ($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526["name"] ?? null) : null);
                                echo "\" /><span>";
                                echo (($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f = $context["child"]) && is_array($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f) || $__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f instanceof ArrayAccess ? ($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f["name"] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 241
                            echo " 
\t\t\t\t\t</div>
\t\t\t\t";
                        } else {
                            // line 243
                            echo " 
\t\t\t\t\t<ul class=\"ul_block cat_revblog ";
                            // line 244
                            echo ($context["col_class_revblog"] ?? null);
                            echo "\">
\t\t\t\t\t";
                            // line 245
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c = $context["category"]) && is_array($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c) || $__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c instanceof ArrayAccess ? ($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c["children"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                echo " 
\t\t\t\t\t\t<li class=\"glavli\"><a href=\"";
                                // line 246
                                echo (($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 = $context["child"]) && is_array($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74) || $__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 instanceof ArrayAccess ? ($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74["href"] ?? null) : null);
                                echo "\">";
                                echo (($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff = $context["child"]) && is_array($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff) || $__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff instanceof ArrayAccess ? ($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff["name"] ?? null) : null);
                                echo "</a>
\t\t\t\t\t\t\t";
                                // line 247
                                if ((($context["tri_level"] ?? null) && (($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 = $context["child"]) && is_array($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918) || $__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 instanceof ArrayAccess ? ($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918["children"] ?? null) : null))) {
                                    echo " 
\t\t\t\t\t\t\t<ul class=\"lastul\">
\t\t\t\t\t\t\t\t";
                                    // line 249
                                    $context["i_count"] = 0;
                                    echo " ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable((($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 = $context["child"]) && is_array($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5) || $__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 instanceof ArrayAccess ? ($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5["children"] ?? null) : null));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child2"]) {
                                        echo " 
\t\t\t\t\t\t\t\t\t ";
                                        // line 250
                                        if (((($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 = $context["child2"]) && is_array($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219) || $__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 instanceof ArrayAccess ? ($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219["category_id"] ?? null) : null) == ($context["child2_id"] ?? null))) {
                                            echo " 
\t\t\t\t\t\t\t\t\t\t<li class=\"category-";
                                            // line 251
                                            echo (($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 = $context["child2"]) && is_array($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20) || $__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 instanceof ArrayAccess ? ($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20["category_id"] ?? null) : null);
                                            echo " active\"><a href=\"";
                                            echo (($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 = $context["child2"]) && is_array($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16) || $__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 instanceof ArrayAccess ? ($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16["href"] ?? null) : null);
                                            echo "\" class=\"active\"><i class=\"fa fa-minus\"></i>";
                                            echo (($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 = $context["child2"]) && is_array($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0) || $__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 instanceof ArrayAccess ? ($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0["name"] ?? null) : null);
                                            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                                        } else {
                                            // line 252
                                            echo " 
\t\t\t\t\t\t\t\t\t\t<li class=\"category-";
                                            // line 253
                                            echo (($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 = $context["child2"]) && is_array($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1) || $__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 instanceof ArrayAccess ? ($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1["category_id"] ?? null) : null);
                                            echo "\"><a href=\"";
                                            echo (($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 = $context["child2"]) && is_array($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008) || $__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 instanceof ArrayAccess ? ($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008["href"] ?? null) : null);
                                            echo "\"><i class=\"fa fa-minus\"></i>";
                                            echo (($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 = $context["child2"]) && is_array($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00) || $__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 instanceof ArrayAccess ? ($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00["name"] ?? null) : null);
                                            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 254
                                        echo " 
\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child2'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 255
                                    echo " 
\t\t\t\t\t\t\t\t";
                                    // line 256
                                    if ((($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 = ($context["setting_revtheme_header_menu"] ?? null)) && is_array($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315) || $__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 instanceof ArrayAccess ? ($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315["ogranich"] ?? null) : null)) {
                                        echo " 
\t\t\t\t\t\t\t\t\t";
                                        // line 257
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable((($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb = $context["child"]) && is_array($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb) || $__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb instanceof ArrayAccess ? ($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb["children"] ?? null) : null));
                                        foreach ($context['_seq'] as $context["_key"] => $context["child2"]) {
                                            echo " 
\t\t\t\t\t\t\t\t\t\t";
                                            // line 258
                                            if (((($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde = $context["child2"]) && is_array($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde) || $__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde instanceof ArrayAccess ? ($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde["category_id"] ?? null) : null) == ($context["child2_id"] ?? null))) {
                                                echo " 
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category-";
                                                // line 259
                                                echo (($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 = $context["child2"]) && is_array($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5) || $__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 instanceof ArrayAccess ? ($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5["category_id"] ?? null) : null);
                                                echo " active categoryoff\"><a href=\"";
                                                echo (($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f = $context["child2"]) && is_array($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f) || $__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f instanceof ArrayAccess ? ($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f["href"] ?? null) : null);
                                                echo "\" class=\"active\"><i class=\"fa fa-minus\"></i>";
                                                echo (($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b = $context["child2"]) && is_array($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b) || $__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b instanceof ArrayAccess ? ($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b["name"] ?? null) : null);
                                                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
                                            } else {
                                                // line 260
                                                echo " 
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category-";
                                                // line 261
                                                echo (($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d = $context["child2"]) && is_array($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d) || $__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d instanceof ArrayAccess ? ($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d["category_id"] ?? null) : null);
                                                echo " categoryoff\"><a href=\"";
                                                echo (($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d = $context["child2"]) && is_array($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d) || $__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d instanceof ArrayAccess ? ($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d["href"] ?? null) : null);
                                                echo "\"><i class=\"fa fa-minus\"></i>";
                                                echo (($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 = $context["child2"]) && is_array($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2) || $__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 instanceof ArrayAccess ? ($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2["name"] ?? null) : null);
                                                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 262
                                            echo " 
\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child2'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 263
                                        echo " 
\t\t\t\t\t\t\t\t";
                                    }
                                    // line 264
                                    echo " 
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
                                }
                                // line 266
                                echo " 
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 268
                            echo " 
\t\t\t\t\t</ul>
\t\t\t\t";
                        }
                        // line 270
                        echo " 
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                    }
                    // line 273
                    echo " 
\t\t</div>\t\t
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 275
                echo " 
";
            }
            // line 276
            echo " 
";
            // line 277
            if (($context["revtheme_header_menu_links"] ?? null)) {
                echo " 
\t";
                // line 278
                $context["i_rhml"] = 1;
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["revtheme_header_menu_links"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["revtheme_header_menu_link"]) {
                    echo " 
\t\t<div class=\"revlevel_1 hasChildren closed i_rhml_";
                    // line 279
                    echo ($context["i_rhml"] ?? null);
                    echo "\">
\t\t\t<div class=\"title\">
\t\t\t\t<a href=\"";
                    // line 281
                    echo (($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 = $context["revtheme_header_menu_link"]) && is_array($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6) || $__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 instanceof ArrayAccess ? ($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6["link"] ?? null) : null);
                    echo "\">";
                    if ((($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a = $context["revtheme_header_menu_link"]) && is_array($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a) || $__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a instanceof ArrayAccess ? ($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a["image"] ?? null) : null)) {
                        echo " ";
                        echo (($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee = $context["revtheme_header_menu_link"]) && is_array($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee) || $__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee instanceof ArrayAccess ? ($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee["image"] ?? null) : null);
                        echo " ";
                    }
                    echo (($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 = $context["revtheme_header_menu_link"]) && is_array($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523) || $__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 instanceof ArrayAccess ? ($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523["title"] ?? null) : null);
                    echo "</a>
\t\t\t</div>
\t\t</div>\t
\t";
                    // line 284
                    $context["i_rhml"] = (($context["i_rhml"] ?? null) + 1);
                    echo " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revtheme_header_menu_link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
";
            }
            // line 285
            echo " 
</div>
</div>
</div>
";
        }
        // line 289
        echo " 
</div>
";
        // line 291
        if (($context["is_desctope"] ?? null)) {
            echo " 
<script><!--
var defaults = {
\tcolumns: 4,
\tclassname: 'column',
\tmin: 1
};
\$.fn.autocolumnlist = function(params){        
\tvar options = \$.extend({}, defaults, params);        
\treturn this.each(function() {        
\t\tvar els = \$(this).find('li.glavli');
\t\tvar dimension = els.size();
\t\tif (dimension > 0) {
\t\t\tvar elCol = Math.ceil(dimension/options.columns);
\t\t\tif (elCol < options.min) {
\t\t\t\telCol = options.min;
\t\t\t}
\t\t\tvar start = 0;
\t\t\tvar end = elCol;
\t\t\tfor (i=0; i<options.columns; i++) {
\t\t\t\tif ((i + 1) == options.columns) {
\t\t\t\t\tels.slice(start, end).wrapAll('<div class=\"'+options.classname+' last\" />');
\t\t\t\t} else {
\t\t\t\t\t\tels.slice(start, end).wrapAll('<div class=\"'+options.classname+'\" />');
\t\t\t\t}
\t\t\t\tstart = start+elCol;
\t\t\t\tend = end+elCol;
\t\t\t}
\t   }
\t});
};
";
            // line 322
            if ((($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc = ($context["setting_revtheme_header_menu"] ?? null)) && is_array($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc) || $__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc instanceof ArrayAccess ? ($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc["ogranich"] ?? null) : null)) {
                echo " 
var container_lastul = \$(\"#menu2\");
container_lastul.find(\".show_categoryoff\").each(function () {
\t\$(this).on('click', function () {
\t\tif (\$(this).hasClass(\"show_coff\")){
\t\t\t\$(this).removeClass(\"show_coff\");
\t\t\t\$(this).parent(\".lastul\").find(\".categoryoff\").show();
\t\t\t\$(this).html('";
                // line 329
                echo ($context["text_hide_all"] ?? null);
                echo "');
\t\t} else {
\t\t\t\$(this).addClass(\"show_coff\");
\t\t\t\$(this).parent(\".lastul\").find(\".categoryoff\").hide();
\t\t\t\$(this).html('";
                // line 333
                echo ($context["text_show_all"] ?? null);
                echo "');
\t\t}
\t\tvar m2inh = \$('.revlevel_1.open .childrenList').outerHeight();
\t\t\$('#menu2 .podmenu2').css('height', m2inh);
\t});
});
";
            }
            // line 339
            echo " 
";
            // line 340
            if (((($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a = ($context["setting_revtheme_header_menu"] ?? null)) && is_array($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a) || $__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a instanceof ArrayAccess ? ($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a["zadergka"] ?? null) : null) || (($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f = ($context["setting_revtheme_header_menu"] ?? null)) && is_array($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f) || $__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f instanceof ArrayAccess ? ($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f["onclick"] ?? null) : null))) {
                echo " 
\tvar global_menu2_button;
\t\$(\"#top3 #menu2_button\").hover(function(){
\t\tglobal_menu2_button = setTimeout(function() {
\t\t";
                // line 344
                if ( !(($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d = ($context["setting_revtheme_header_menu"] ?? null)) && is_array($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d) || $__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d instanceof ArrayAccess ? ($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d["onclick"] ?? null) : null)) {
                    echo " 
\t\t\t\$('#top3 #menu2').addClass('dblock');
\t\t";
                }
                // line 346
                echo " 
\t}, 250)
\t},function(){
\t\t\$('#top3 #menu2').removeClass('dblock');
\t\tclearTimeout(global_menu2_button);
\t});
";
            }
            // line 352
            echo " 
";
            // line 353
            if (($context["cats_status"] ?? null)) {
                echo " 
\tfunction autocol_cats(cat_id, cat_col) {
\t\t\$('.ul_block'+cat_id).autocolumnlist({  
\t\t\tcolumns: cat_col,
\t\t\tmin: 1
\t\t});
\t}
\t";
                // line 360
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    echo " 
\t\tautocol_cats(";
                    // line 361
                    echo (($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e = $context["category"]) && is_array($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e) || $__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e instanceof ArrayAccess ? ($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e["category_id"] ?? null) : null);
                    echo ", ";
                    echo (($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81 = $context["category"]) && is_array($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81) || $__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81 instanceof ArrayAccess ? ($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81["column"] ?? null) : null);
                    echo ");
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 362
                echo " 
";
            }
            // line 363
            echo " 
";
            // line 364
            if (($context["revtheme_dop_menus"] ?? null)) {
                echo " 
\tfunction autocol_dop_menus(dop_menu_id, cat_col) {
\t\t\$('.ul_block'+dop_menu_id+'.cat_dop').autocolumnlist({  
\t\t\tcolumns: cat_col,
\t\t\tmin: 1
\t\t});
\t}
\t";
                // line 371
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["revtheme_dop_menus"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["revtheme_dop_menu"]) {
                    echo " 
\t\tautocol_dop_menus(";
                    // line 372
                    echo (($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d = $context["revtheme_dop_menu"]) && is_array($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d) || $__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d instanceof ArrayAccess ? ($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d["id"] ?? null) : null);
                    echo ", ";
                    echo (($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786 = $context["revtheme_dop_menu"]) && is_array($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786) || $__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786 instanceof ArrayAccess ? ($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786["column"] ?? null) : null);
                    echo ");
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revtheme_dop_menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 373
                echo " 
";
            }
            // line 374
            echo " 
";
            // line 375
            if (($context["manuf_status"] ?? null)) {
                echo " 
\t";
                // line 376
                if (($context["categories_m"] ?? null)) {
                    echo " 
\t\t\$('.ul_block.cat_m').autocolumnlist({  
\t\t\tcolumns: ";
                    // line 378
                    echo ($context["n_column"] ?? null);
                    echo ",
\t\t\tmin: 1
\t\t});
\t";
                }
                // line 381
                echo " 
";
            }
            // line 382
            echo " 
";
            // line 383
            if ((($context["revblog_status"] ?? null) && ($context["blog_categories"] ?? null))) {
                echo " 
\t\$('.ul_block.cat_revblog').autocolumnlist({  
\t\tcolumns: ";
                // line 385
                echo ($context["revblog_column"] ?? null);
                echo ",
\t\tmin: 1
\t});
";
            }
            // line 388
            echo " 
";
            // line 389
            if (($context["image_in_ico"] ?? null)) {
                echo " 
\t\$('#menu2').css('display', 'block');
\t";
                // line 391
                if (($context["cats_status"] ?? null)) {
                    echo " 
\t\t";
                    // line 392
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        echo " 
\t\t\t";
                        // line 393
                        if ((($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4 = $context["category"]) && is_array($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4) || $__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4 instanceof ArrayAccess ? ($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4["children"] ?? null) : null)) {
                            echo "\t
\t\t\t\tvar div = '.childrenList .image_in_ico_";
                            // line 394
                            echo (($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1 = $context["category"]) && is_array($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1) || $__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1 instanceof ArrayAccess ? ($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1["category_id"] ?? null) : null);
                            echo ".refine_categories span';
\t\t\t\tvar maxheight = 0;
\t\t\t\t\$(div).each(function(){
\t\t\t\t\t\$(this).removeAttr('style');
\t\t\t\t\tif(\$(this).height() > maxheight) {
\t\t\t\t\t\tmaxheight = \$(this).height();
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t\$(div).height(maxheight);
\t\t\t";
                        }
                        // line 403
                        echo " 
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 404
                    echo " 
\t";
                }
                // line 405
                echo " 
\t";
                // line 406
                if (($context["revtheme_dop_menus"] ?? null)) {
                    echo " 
\t\t";
                    // line 407
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["revtheme_dop_menus"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["revtheme_dop_menu"]) {
                        echo " 
\t\t\t";
                        // line 408
                        if (twig_get_attribute($this->env, $this->source, $context["revtheme_dop_menu"], "children", [], "array", true, true, false, 408)) {
                            echo " 
\t\t\t\tvar div1 = '.childrenList .image_in_ico_dop_";
                            // line 409
                            echo (($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc = $context["revtheme_dop_menu"]) && is_array($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc) || $__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc instanceof ArrayAccess ? ($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc["id"] ?? null) : null);
                            echo ".refine_categories span';
\t\t\t\tvar maxheight = 0;
\t\t\t\t\$(div1).each(function(){
\t\t\t\t\t\$(this).removeAttr('style');
\t\t\t\t\tif(\$(this).height() > maxheight) {
\t\t\t\t\t\tmaxheight = \$(this).height();
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t\$(div1).height(maxheight);
\t\t\t";
                        }
                        // line 418
                        echo " 
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revtheme_dop_menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 419
                    echo " 
\t";
                }
                // line 420
                echo " 
\t\$('#menu2').css('display', '');
";
            }
            // line 422
            echo " 
";
            // line 423
            if (($context["image_in_ico_m"] ?? null)) {
                echo " 
\t";
                // line 424
                if (($context["manuf_status"] ?? null)) {
                    echo " 
\t\tvar div2 = '.image_in_ico_manufacturers.refine_categories > a > span';
\t\tvar maxheight = 0;
\t\t\$(div2).each(function(){
\t\t\t\$(this).removeAttr('style');
\t\t\tif(\$(this).height() > maxheight) {
\t\t\t\tmaxheight = \$(this).height();
\t\t\t}
\t\t});
\t\t\$(div2).height(maxheight);
\t";
                }
                // line 434
                echo " 
";
            }
            // line 435
            echo " 
";
            // line 436
            if (($context["revblog_status"] ?? null)) {
                echo " 
\t";
                // line 437
                if (($context["image_in_ico_revblog"] ?? null)) {
                    echo " 
\t\tvar div3 = '.image_in_ico_revblog.refine_categories > a > span';
\t\tvar maxheight = 0;
\t\t\$(div3).each(function(){
\t\t\t\$(this).removeAttr('style');
\t\t\tif(\$(this).height() > maxheight) {
\t\t\t\tmaxheight = \$(this).height();
\t\t\t}
\t\t});
\t\t\$(div3).height(maxheight);
\t";
                }
                // line 447
                echo " 
";
            }
            // line 448
            echo " 
//--></script>
";
        }
        // line 450
        echo " ";
    }

    public function getTemplateName()
    {
        return "revolution/template/revolution/revmenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1634 => 450,  1629 => 448,  1625 => 447,  1611 => 437,  1607 => 436,  1604 => 435,  1600 => 434,  1586 => 424,  1582 => 423,  1579 => 422,  1574 => 420,  1570 => 419,  1563 => 418,  1550 => 409,  1546 => 408,  1540 => 407,  1536 => 406,  1533 => 405,  1529 => 404,  1522 => 403,  1509 => 394,  1505 => 393,  1499 => 392,  1495 => 391,  1490 => 389,  1487 => 388,  1480 => 385,  1475 => 383,  1472 => 382,  1468 => 381,  1461 => 378,  1456 => 376,  1452 => 375,  1449 => 374,  1445 => 373,  1435 => 372,  1429 => 371,  1419 => 364,  1416 => 363,  1412 => 362,  1402 => 361,  1396 => 360,  1386 => 353,  1383 => 352,  1374 => 346,  1368 => 344,  1361 => 340,  1358 => 339,  1348 => 333,  1341 => 329,  1331 => 322,  1297 => 291,  1293 => 289,  1286 => 285,  1276 => 284,  1263 => 281,  1258 => 279,  1250 => 278,  1246 => 277,  1243 => 276,  1239 => 275,  1231 => 273,  1225 => 270,  1220 => 268,  1212 => 266,  1207 => 264,  1203 => 263,  1196 => 262,  1187 => 261,  1184 => 260,  1175 => 259,  1171 => 258,  1165 => 257,  1161 => 256,  1158 => 255,  1151 => 254,  1142 => 253,  1139 => 252,  1130 => 251,  1126 => 250,  1118 => 249,  1113 => 247,  1107 => 246,  1101 => 245,  1097 => 244,  1094 => 243,  1089 => 241,  1076 => 239,  1070 => 238,  1064 => 237,  1059 => 235,  1055 => 234,  1050 => 233,  1044 => 232,  1039 => 231,  1032 => 230,  1029 => 229,  1022 => 228,  1019 => 227,  1012 => 226,  1010 => 225,  1005 => 223,  1002 => 222,  994 => 220,  990 => 218,  982 => 214,  978 => 213,  973 => 211,  966 => 209,  962 => 208,  959 => 207,  955 => 206,  948 => 202,  943 => 200,  934 => 197,  924 => 196,  918 => 195,  913 => 193,  907 => 192,  903 => 191,  900 => 190,  895 => 188,  888 => 187,  881 => 186,  877 => 185,  862 => 183,  856 => 182,  850 => 181,  846 => 180,  840 => 179,  834 => 178,  829 => 176,  825 => 175,  820 => 174,  814 => 173,  809 => 172,  802 => 171,  799 => 170,  792 => 169,  789 => 168,  782 => 167,  780 => 166,  767 => 163,  761 => 160,  757 => 159,  754 => 158,  750 => 157,  742 => 155,  736 => 152,  729 => 151,  725 => 150,  722 => 149,  717 => 147,  709 => 145,  704 => 143,  700 => 142,  695 => 141,  691 => 140,  688 => 139,  681 => 138,  672 => 137,  669 => 136,  660 => 135,  656 => 134,  646 => 133,  642 => 132,  639 => 131,  632 => 130,  623 => 129,  620 => 128,  611 => 127,  607 => 126,  600 => 125,  590 => 124,  585 => 122,  574 => 121,  568 => 120,  562 => 119,  559 => 118,  554 => 116,  541 => 114,  535 => 113,  529 => 112,  525 => 111,  521 => 110,  517 => 109,  512 => 108,  506 => 107,  501 => 106,  494 => 105,  491 => 104,  484 => 103,  481 => 102,  474 => 101,  472 => 100,  467 => 98,  464 => 97,  451 => 95,  447 => 93,  434 => 89,  430 => 88,  425 => 86,  418 => 84,  414 => 83,  411 => 82,  407 => 81,  399 => 79,  393 => 76,  389 => 75,  381 => 72,  376 => 70,  372 => 69,  367 => 68,  363 => 67,  355 => 66,  345 => 64,  336 => 62,  332 => 61,  322 => 60,  317 => 59,  311 => 58,  301 => 56,  292 => 54,  287 => 53,  283 => 52,  279 => 51,  276 => 50,  274 => 49,  252 => 48,  246 => 47,  240 => 46,  237 => 45,  232 => 43,  219 => 41,  213 => 40,  207 => 39,  203 => 38,  199 => 37,  195 => 36,  190 => 35,  184 => 34,  179 => 33,  172 => 32,  169 => 31,  162 => 30,  159 => 29,  152 => 28,  150 => 27,  147 => 26,  145 => 25,  142 => 24,  122 => 22,  116 => 21,  113 => 20,  91 => 15,  85 => 14,  80 => 12,  73 => 10,  69 => 9,  59 => 6,  54 => 4,  50 => 3,  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/template/revolution/revmenu.twig", "");
    }
}
