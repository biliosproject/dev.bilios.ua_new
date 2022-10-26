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

/* revolution/template/common/cart.twig */
class __TwigTemplate_2e80bdc6fe125d7f219d6b64aecb5be6368389b132d70ed301059b3f52d951f4 extends \Twig\Template
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
        echo "<div id=\"cart\" class=\"btn-group show-on-hover w100 ";
        echo ($context["mini_header_cart_class"] ?? null);
        echo "\">
\t";
        // line 2
        if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["setting_header_cart"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["type"] ?? null) : null) == "standart")) {
            echo " 
\t\t";
            // line 3
            if (($context["is_desctope"] ?? null)) {
                echo " 
\t\t<button type=\"button\" class=\"cart dropdown-toggle hidden-xs hidden-sm\" data-toggle=\"dropdown\">
\t\t\t<span id=\"cart-total\">";
                // line 5
                echo ($context["text_items"] ?? null);
                echo "</span>
\t\t\t<span class=\"icorightmenu\"><i class=\"fa fa-chevron-down\"></i></span>
\t\t</button>
\t\t";
            }
            // line 8
            echo " 
\t\t";
            // line 9
            if (($context["is_mobile"] ?? null)) {
                echo " 
\t\t<button class=\"cart hidden-md hidden-lg\" onclick=\"get_revpopup_cart('', 'show_cart', '');\">
\t\t\t<span id=\"cart-total-popup\">";
                // line 11
                echo ($context["text_items"] ?? null);
                echo "</span>
\t\t</button>
\t\t";
            }
            // line 13
            echo " 
\t";
        } elseif (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =         // line 14
($context["setting_header_cart"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["type"] ?? null) : null) == "redirect")) {
            echo " 
\t\t<button class=\"cart\" onclick=\"get_revpopup_cart('', 'redirect_cart', '');\">
\t\t\t<span id=\"cart-total\">";
            // line 16
            echo ($context["text_items"] ?? null);
            echo "</span>
\t\t</button>
\t";
        } else {
            // line 18
            echo " 
\t\t<button class=\"cart\" onclick=\"get_revpopup_cart('', 'show_cart', '');\">
\t\t\t<span id=\"cart-total\">";
            // line 20
            echo ($context["text_items"] ?? null);
            echo "</span>
\t\t</button>
\t";
        }
        // line 22
        echo " 
\t";
        // line 23
        if ((((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["setting_header_cart"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["type"] ?? null) : null) == "standart") && ($context["is_desctope"] ?? null))) {
            echo " 
\t<ul class=\"dropdown-menu pull-right hidden-xs hidden-sm dblock22\">
    ";
            // line 25
            if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
                echo " 
    <li>
      <table class=\"table display-products-cart porder\">
        ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    echo " 
        <tr>
          <td class=\"image\">";
                    // line 30
                    if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["product"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["thumb"] ?? null) : null)) {
                        echo " 
            <a href=\"";
                        // line 31
                        echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["product"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["href"] ?? null) : null);
                        echo "\"><img src=\"";
                        echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["product"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["thumb"] ?? null) : null);
                        echo "\" alt=\"";
                        echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["product"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["name"] ?? null) : null);
                        echo "\" title=\"";
                        echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["product"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["name"] ?? null) : null);
                        echo "\" /></a>
            ";
                    }
                    // line 32
                    echo "</td>
          <td class=\"name\"><a href=\"";
                    // line 33
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["product"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["href"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["product"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["name"] ?? null) : null);
                    echo "</a>
            ";
                    // line 34
                    if ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["product"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["option"] ?? null) : null)) {
                        echo " 
            ";
                        // line 35
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["product"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["option"] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                            echo " 
            <br />
            - <small>";
                            // line 37
                            echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["option"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["name"] ?? null) : null);
                            echo " ";
                            echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["option"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["value"] ?? null) : null);
                            echo "</small>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 38
                        echo " 
            ";
                    }
                    // line 39
                    echo " 
            ";
                    // line 40
                    if ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["product"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["recurring"] ?? null) : null)) {
                        echo " 
            <br />
            - <small>";
                        // line 42
                        echo ($context["text_recurring"] ?? null);
                        echo " ";
                        echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["product"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["recurring"] ?? null) : null);
                        echo "</small>
            ";
                    }
                    // line 43
                    echo "</td>
\t\t\t<td class=\"qt\">
\t\t\t\t<div class=\"number\">
\t\t\t\t\t<div class=\"frame-change-count\">
\t\t\t\t\t\t<div class=\"btn-plus\">
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"validate_pole_cart(this,";
                    // line 48
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["product"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["cart_id"] ?? null) : null);
                    echo ",'+',";
                    echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["product"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["minimum"] ?? null) : null);
                    echo ",";
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["product"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["quantity_pr"] ?? null) : null);
                    echo ");\">+</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-minus\">
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"validate_pole_cart(this,";
                    // line 51
                    echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["product"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["cart_id"] ?? null) : null);
                    echo ",'-',";
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["product"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["minimum"] ?? null) : null);
                    echo ",";
                    echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["product"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["quantity_pr"] ?? null) : null);
                    echo ");\">-</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"text\" name=\"quantity[";
                    // line 54
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["product"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["cart_id"] ?? null) : null);
                    echo "]\" value=\"";
                    echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["product"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["quantity"] ?? null) : null);
                    echo "\" onchange=\"update_cart_manual(this, '";
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["product"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["cart_id"] ?? null) : null);
                    echo "', '";
                    echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["product"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["minimum"] ?? null) : null);
                    echo "', '";
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["product"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["quantity_pr"] ?? null) : null);
                    echo "');\" onkeyup=\"update_cart_manual(this, '";
                    echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["product"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["cart_id"] ?? null) : null);
                    echo "', '";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["product"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["minimum"] ?? null) : null);
                    echo "', '";
                    echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["product"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["quantity_pr"] ?? null) : null);
                    echo "');\" size=\"1\" class=\"plus-minus cartid_";
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["product"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["cart_id"] ?? null) : null);
                    echo "\" /> 
\t\t\t\t</div>
\t\t\t</td>
          <td class=\"totals\">";
                    // line 57
                    echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["product"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["total"] ?? null) : null);
                    echo "</td>
          <td class=\"remove\"><button type=\"button\" onclick=\"cart.remove('";
                    // line 58
                    echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["product"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["cart_id"] ?? null) : null);
                    echo "', '";
                    echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["product"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["product_id"] ?? null) : null);
                    echo "');\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\"><i class=\"fa fa-trash-o\"></i></button></td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo " 
        ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                    echo " 
        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                    // line 64
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["voucher"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["description"] ?? null) : null);
                    echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                    // line 66
                    echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["voucher"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["amount"] ?? null) : null);
                    echo "</td>
          <td class=\"text-center remove\"><button type=\"button\" onclick=\"voucher.remove('";
                    // line 67
                    echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["voucher"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["key"] ?? null) : null);
                    echo "');\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\"><i class=\"fa fa-trash-o\"></i></button></td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo " 
      </table>
    </li>
    <li>
        <div class=\"all-total\">
\t\t  ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                    echo " 
\t\t\t<div class=\"clear-total\">
\t\t\t<div class=\"totals-right\">";
                    // line 76
                    echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["total"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["text"] ?? null) : null);
                    echo "</div>
\t\t\t<div class=\"totals-left\">";
                    // line 77
                    echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["total"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["title"] ?? null) : null);
                    echo ":</div>     
\t\t\t</div>
\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo " 
\t\t</div>
\t\t<div class=\"cartfooter\">
\t\t\t";
                // line 82
                if ((($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["setting_header_cart"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["cart_carturl"] ?? null) : null)) {
                    echo " 
\t\t\t\t<a class=\"btn btn-default btn-sm\" href=\"";
                    // line 83
                    echo ($context["cart"] ?? null);
                    echo "\">";
                    echo ($context["text_cart"] ?? null);
                    echo "</a>
\t\t\t";
                }
                // line 84
                echo " 
\t\t\t";
                // line 85
                if ((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["setting_header_cart"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["cart_quick"] ?? null) : null)) {
                    echo " 
\t\t\t\t<a class=\"btn btn-default btn-sm\" href=\"javascript:void(0)\" onclick=\"get_revpopup_cartquick();\">";
                    // line 86
                    echo ($context["text_rev_buy_quick"] ?? null);
                    echo "</a>
\t\t\t";
                }
                // line 87
                echo " 
\t\t\t<a class=\"btn btn-danger\" href=\"";
                // line 88
                echo ($context["checkout"] ?? null);
                echo "\">";
                echo ($context["text_checkout"] ?? null);
                echo "</a>
\t\t</div>
    </li>
    ";
            } else {
                // line 91
                echo " 
    <li>
      <p class=\"text-center\">";
                // line 93
                echo ($context["text_empty"] ?? null);
                echo "</p>
    </li>
    ";
            }
            // line 95
            echo " 
  </ul>
  ";
        }
        // line 97
        echo " 
</div>
<script><!--
";
        // line 100
        if ((($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["setting_revtheme_header_menu"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["zadergka"] ?? null) : null)) {
            echo " 
\t\$('#top3 #cart .dropdown-menu').removeClass('dblock22');
\tvar global_cart_button;
\t\$(\"#top3 #cart\").hover(function(){
\t\tglobal_cart_button = setTimeout(function() {
\t\t\$('#top3 #cart .dropdown-menu').addClass('dblock');
\t\t\$('#top3 #cart .dropdown-menu').removeClass('dblock22');
\t}, 250)
\t},function(){
\t\t\$('#top3 #cart .dropdown-menu').removeClass('dblock');
\t\tclearTimeout(global_cart_button);
\t\t\$('#top3 #cart .dropdown-menu').removeClass('dblock22');
\t});
\t\$('#top2 #cart .dropdown-menu').removeClass('dblock');
\t\$(\"#top2 #cart\").hover(function(){
\t\tglobal_cart_button = setTimeout(function() {
\t\t\$('#top2 #cart .dropdown-menu').addClass('dblock');
\t\t\$('#top2 #cart .dropdown-menu').removeClass('dblock22');
\t}, 0)
\t},function(){
\t\t\$('#top2 #cart .dropdown-menu').removeClass('dblock');
\t\tclearTimeout(global_cart_button);
\t\t\$('#top2 #cart .dropdown-menu').removeClass('dblock22');
\t});
";
        }
        // line 124
        echo " 
function masked(element, status) {
\tif (status == true) {
\t\t\$('<div/>')
\t\t.attr({ 'class':'masked' })
\t\t.prependTo(element);
\t\t\$('<div class=\"masked_loading\" />').insertAfter(\$('.masked'));
\t} else {
\t\t\$('.masked').remove();
\t\t\$('.masked_loading').remove();
\t}
}
function cart_update() {
return;
}
function update_cart_manual(val, product_id, minimumvalue, maximumvalue) {
\tval.value = val.value.replace(/[^\\d,]/g, '');
\tinput_val = \$('#cart input.plus-minus.cartid_'+product_id);
\tquantity = parseInt(input_val.val());
\tif (quantity <= minimumvalue) {
\t\tinput_val.val(minimumvalue);
\t\treturn;
\t}
\t";
        // line 147
        if (($context["q_zavisimost"] ?? null)) {
            echo " 
\t\tif (quantity > maximumvalue) {
\t\t\tinput_val.val(maximumvalue);
\t\t\treturn;
\t\t}
\t";
        }
        // line 152
        echo " 
\tcart.update(product_id, input_val.val());
\tcart_update();
}
function validate_pole_cart(val, product_id, znak, minimumvalue, maximumvalue) {
\tval.value = val.value.replace(/[^\\d,]/g, '');
\tif (val.value == '') val.value = minimumvalue;
\tinput_val = \$('#cart input.plus-minus.cartid_'+product_id);
\tquantity = parseInt(input_val.val());
\t";
        // line 161
        if (($context["q_zavisimost"] ?? null)) {
            echo " 
\t\tif (znak=='+' && input_val.val() < maximumvalue) input_val.val(quantity+1);
\t\telse if (znak=='-' && input_val.val() > minimumvalue) input_val.val(quantity-1);
\t\telse if (znak=='=' && input_val.val() < maximumvalue && input_val.val() < maximumvalue) input_val.val(input_val.val());
\t\tif (quantity < 1 || quantity < minimumvalue) {
\t\t\tinput_val.val(minimumvalue);
\t\t\tval.value = minimumvalue;
\t\t} else if (quantity > maximumvalue) {
\t\t\tinput_val.val(maximumvalue);
\t\t\tval.value = maximumvalue;
\t\t}
\t";
        } else {
            // line 172
            echo " 
\t\tif (znak=='+') input_val.val(quantity+1);
\t\telse if (znak=='-' && input_val.val() > minimumvalue) input_val.val(quantity-1);
\t\telse if (znak=='=' && input_val.val() > minimumvalue) input_val.val(input_val.val());
\t\tif (quantity < 1 || quantity < minimumvalue) {
\t\t\tinput_val.val(minimumvalue);
\t\t\tval.value = minimumvalue;
\t\t}
\t";
        }
        // line 180
        echo " 
\tcart.update(product_id, input_val.val());
\tcart_update();
}
//--></script>";
    }

    public function getTemplateName()
    {
        return "revolution/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 180,  453 => 172,  438 => 161,  427 => 152,  418 => 147,  393 => 124,  365 => 100,  360 => 97,  355 => 95,  349 => 93,  345 => 91,  336 => 88,  333 => 87,  328 => 86,  324 => 85,  321 => 84,  314 => 83,  310 => 82,  305 => 79,  296 => 77,  292 => 76,  285 => 74,  278 => 69,  267 => 67,  263 => 66,  258 => 64,  250 => 61,  247 => 60,  234 => 58,  230 => 57,  208 => 54,  198 => 51,  188 => 48,  181 => 43,  174 => 42,  169 => 40,  166 => 39,  162 => 38,  152 => 37,  145 => 35,  141 => 34,  135 => 33,  132 => 32,  121 => 31,  117 => 30,  110 => 28,  104 => 25,  99 => 23,  96 => 22,  90 => 20,  86 => 18,  80 => 16,  75 => 14,  72 => 13,  66 => 11,  61 => 9,  58 => 8,  51 => 5,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/template/common/cart.twig", "");
    }
}
