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

/* revolution/template/revolution/checkout/cart.twig */
class __TwigTemplate_155759689c70a5c1db698b5f3bbdf930f89a319d0304b3e263f32e438f41f576 extends \Twig\Template
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
        if (($context["error_warning"] ?? null)) {
            echo " 
\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 2
            echo ($context["error_warning"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
";
        }
        // line 3
        echo " 
";
        // line 4
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            echo " 
\t<div class=\"table_wrap\">
\t\t<table class=\"table table-responsive revcart_table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t";
            // line 9
            if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["settings"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["revcheckout_foto"] ?? null) : null)) {
                echo " 
\t\t\t\t\t\t<td class=\"revcart_image image hidden-xs\">";
                // line 10
                echo ($context["column_revcheckout_image"] ?? null);
                echo "</td>
\t\t\t\t\t";
            }
            // line 11
            echo " 
\t\t\t\t\t<td class=\"text-left\">";
            // line 12
            echo ($context["column_name"] ?? null);
            echo "</td>
\t\t\t\t\t";
            // line 13
            if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["settings"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["revcheckout_model"] ?? null) : null)) {
                echo " 
\t\t\t\t\t\t<td class=\"revcart_model hidden-xs\">";
                // line 14
                echo ($context["column_model"] ?? null);
                echo "</td>
\t\t\t\t\t";
            }
            // line 15
            echo " 
\t\t\t\t\t";
            // line 16
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["settings"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["revcheckout_sku"] ?? null) : null)) {
                echo " 
\t\t\t\t\t\t<td class=\"revcart_sku hidden-xs\">";
                // line 17
                echo ($context["column_sku"] ?? null);
                echo "</td>
\t\t\t\t\t";
            }
            // line 18
            echo " 
\t\t\t\t\t";
            // line 19
            if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["settings"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["revcheckout_kolvo"] ?? null) : null)) {
                echo " 
\t\t\t\t\t\t<td class=\"revcart_kolvo quantity\">";
                // line 20
                echo ($context["column_quantity"] ?? null);
                echo "</td>
\t\t\t\t\t";
            }
            // line 21
            echo " 
\t\t\t\t\t<td class=\"revcart_price text-right\">";
            // line 22
            echo ($context["column_revcheckout_price"] ?? null);
            echo "</td>
\t\t\t\t\t";
            // line 23
            if ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["settings"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["revcheckout_vsego"] ?? null) : null)) {
                echo " 
\t\t\t\t\t\t<td class=\"revcart_vsego total hidden-xs\">";
                // line 24
                echo ($context["column_revcheckout_total"] ?? null);
                echo "</td>
\t\t\t\t\t";
            }
            // line 25
            echo " 
\t\t\t\t\t<td class=\"revcart_delete delete\"></td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                echo " 
\t\t\t\t\t<tr>
\t\t\t\t\t\t";
                // line 32
                if ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["settings"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["revcheckout_foto"] ?? null) : null)) {
                    echo " 
\t\t\t\t\t\t\t<td class=\"revcart_image image hidden-xs\"><img src=\"";
                    // line 33
                    echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["product"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["thumb"] ?? null) : null);
                    echo "\" class=\"img-thumbnail\" title=\"";
                    echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["product"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["name"] ?? null) : null);
                    echo "\" /></td>
\t\t\t\t\t\t";
                }
                // line 34
                echo " 
\t\t\t\t\t\t<td class=\"name\"><a href=\"";
                // line 35
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["product"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["href"] ?? null) : null);
                echo "\">";
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["product"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["name"] ?? null) : null);
                echo "</a>
\t\t\t\t\t\t\t";
                // line 36
                if ( !(($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["product"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["stock"] ?? null) : null)) {
                    echo "<span class=\"text-danger\">***</span>";
                }
                echo " 
\t\t\t\t\t\t";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["product"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["option"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " 
\t\t\t\t\t\t\t<br /><small>";
                    // line 38
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["option"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["name"] ?? null) : null);
                    echo ": ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "option_value", [], "array", true, true, false, 38) &&  !twig_test_empty((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["option"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["option_value"] ?? null) : null)))) {
                        echo " ";
                        echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["option"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["option_value"] ?? null) : null);
                    } elseif (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "array", true, true, false, 38)) {
                        echo " ";
                        echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["option"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["value"] ?? null) : null);
                    }
                    echo "</small>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo " 
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                // line 41
                if ((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["settings"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["revcheckout_model"] ?? null) : null)) {
                    echo " 
\t\t\t\t\t\t\t<td class=\"revcart_model hidden-xs\">";
                    // line 42
                    if (((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["product"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["option"] ?? null) : null) && (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["option"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["model"] ?? null) : null))) {
                        echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["option"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["model"] ?? null) : null);
                    } else {
                        echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["product"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["model"] ?? null) : null);
                    }
                    echo "</td>
\t\t\t\t\t\t";
                }
                // line 43
                echo " 
\t\t\t\t\t\t";
                // line 44
                if ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["settings"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["revcheckout_sku"] ?? null) : null)) {
                    echo " 
\t\t\t\t\t\t\t<td class=\"revcart_sku hidden-xs\">";
                    // line 45
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["product"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["sku"] ?? null) : null);
                    echo "</td>
\t\t\t\t\t\t";
                }
                // line 46
                echo " 
\t\t\t\t\t\t";
                // line 47
                if ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["settings"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["revcheckout_kolvo"] ?? null) : null)) {
                    echo " 
\t\t\t\t\t\t\t<td class=\"revcart_kolvo quantity\">
\t\t\t\t\t\t\t\t<div class=\"quantity number\">
\t\t\t\t\t\t\t\t\t<div class=\"frame-change-count\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-plus\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"validate_pole_cart2(this,";
                    // line 52
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["product"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["cart_id"] ?? null) : null);
                    echo ",'+',";
                    echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["product"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["minimum"] ?? null) : null);
                    echo ",";
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["product"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["quantity_pr"] ?? null) : null);
                    echo ");\">+</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-minus\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"validate_pole_cart2(this,";
                    // line 55
                    echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["product"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["cart_id"] ?? null) : null);
                    echo ",'-',";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["product"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["minimum"] ?? null) : null);
                    echo ",";
                    echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["product"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["quantity_pr"] ?? null) : null);
                    echo ");\">-</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity[";
                    // line 58
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["product"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["cart_id"] ?? null) : null);
                    echo "]\" value=\"";
                    echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["product"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["quantity"] ?? null) : null);
                    echo "\" onchange=\"update_cart_manual2(this, '";
                    echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["product"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["cart_id"] ?? null) : null);
                    echo "', '";
                    echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["product"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["minimum"] ?? null) : null);
                    echo "', '";
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["product"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["quantity_pr"] ?? null) : null);
                    echo "');\" size=\"1\" class=\"plus-minus\" /> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                }
                // line 61
                echo " 
\t\t\t\t\t\t<td class=\"revcart_price\">";
                // line 62
                echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["product"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["price"] ?? null) : null);
                echo (((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["product"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["ed_izm"] ?? null) : null)) ? ((("<span class=\"ed_izm\">" . (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["product"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["ed_izm"] ?? null) : null)) . "</span>")) : (""));
                echo "</td>
\t\t\t\t\t\t";
                // line 63
                if ((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["settings"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["revcheckout_vsego"] ?? null) : null)) {
                    echo " 
\t\t\t\t\t\t\t<td class=\"revcart_vsego total text-right hidden-xs\">";
                    // line 64
                    echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["product"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["total"] ?? null) : null);
                    echo "</td>
\t\t\t\t\t\t";
                }
                // line 65
                echo " 
\t\t\t\t\t\t<td class=\"revcart_delete delete text-center\"><button type=\"button\" onclick=\"cart_update('";
                // line 66
                echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["product"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["cart_id"] ?? null) : null);
                echo "', 0);\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"\"><i class=\"fa fa-trash-o\"></i></button></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo " 
\t\t\t\t";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                echo " 
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"image text-center\"></td>
\t\t\t\t\t\t<td class=\"text-left\">";
                // line 72
                echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["voucher"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["description"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-left hidden-xs\"></td>
\t\t\t\t\t\t<td class=\"text-center hidden-xs\">1</td>
\t\t\t\t\t\t<td class=\"text-right hidden-xs\">";
                // line 75
                echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["voucher"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["amount"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-right\">";
                // line 76
                echo (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["voucher"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["amount"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t<td class=\"delete text-center\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 77
                echo (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["voucher"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["key"] ?? null) : null);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"\"><i class=\"fa fa-times\"></i></button></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo " 
\t\t\t<tbody>
\t\t</table>
\t</div>
\t";
            // line 83
            if (((($context["coupon_status"] ?? null) || ($context["voucher_status"] ?? null)) || ($context["reward_status"] ?? null))) {
                echo " 
\t\t<table class=\"coupon_table\">
\t\t\t";
                // line 85
                if (($context["coupon_status"] ?? null)) {
                    echo " 
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"coupon input-group\">
\t\t\t\t\t\t\t<!--<span class=\"revc_text\">";
                    // line 89
                    echo "</span>--><input type=\"text\" name=\"coupon\" value=\"";
                    echo ($context["coupon"] ?? null);
                    echo "\" id=\"input-coupon\" class=\"form-control\" placeholder=\"";
                    echo ($context["text_revcheckout_coupon"] ?? null);
                    echo "\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button id=\"button-coupon\" class=\"btn btn-primary\">";
                    // line 91
                    echo ($context["text_revcheckout_apply"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
                }
                // line 96
                echo " 
\t\t\t";
                // line 97
                if (($context["reward_status"] ?? null)) {
                    echo " 
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"coupon input-group\">
\t\t\t\t\t\t\t<!--<span class=\"revc_text\">";
                    // line 101
                    echo "</span>--><input type=\"text\" name=\"reward\" value=\"\" placeholder=\"";
                    echo ($context["text_revcheckout_reward"] ?? null);
                    echo "\" id=\"input-reward\" class=\"form-control\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button id=\"button-reward\" class=\"btn btn-primary\">";
                    // line 103
                    echo ($context["text_revcheckout_apply"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
                }
                // line 108
                echo " 
\t\t\t";
                // line 109
                if (($context["voucher_status"] ?? null)) {
                    echo " 
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"coupon input-group\">
\t\t\t\t\t\t\t<!--<span class=\"revc_text\">";
                    // line 113
                    echo "</span>--><input type=\"text\" name=\"voucher\" value=\"";
                    echo ($context["voucher"] ?? null);
                    echo "\" id=\"input-voucher\" class=\"form-control\" placeholder=\"";
                    echo ($context["text_revcheckout_voucher"] ?? null);
                    echo "\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button id=\"button-voucher\" class=\"btn btn-primary\">";
                    // line 115
                    echo ($context["text_revcheckout_apply"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
                }
                // line 120
                echo " 
\t\t</table>
\t";
            }
            // line 122
            echo " 
\t<table class=\"total_table\">
\t\t";
            // line 124
            if (($context["weight"] ?? null)) {
                echo " 
\t\t\t<tr>
\t\t\t\t<td class=\"text-right hidden-xs\">";
                // line 126
                echo ($context["text_revcheckout_products_weight"] ?? null);
                echo ":</td>
\t\t\t\t<td class=\"text-right visible-xs\">";
                // line 127
                echo ($context["text_revcheckout_products_weight"] ?? null);
                echo ":</td>
\t\t\t\t<td>";
                // line 128
                echo ($context["weight"] ?? null);
                echo " ";
                echo ($context["weight_format"] ?? null);
                echo "</td>
\t\t\t</tr>
\t\t";
            }
            // line 130
            echo " 
\t\t";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                echo " 
\t\t\t<tr>
\t\t\t  <td class=\"text-right hidden-xs\">";
                // line 133
                echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["total"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["title"] ?? null) : null);
                echo ":</td>
\t\t\t  <td class=\"text-right visible-xs\">";
                // line 134
                echo (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["total"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["title"] ?? null) : null);
                echo ":</td>
\t\t\t  <td class=\"text-right\">";
                // line 135
                echo (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["total"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["text"] ?? null) : null);
                echo "</td>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo " 
\t</table>
\t<script><!--
\tfunction update_cart_manual2(val, product_id, minimumvalue, maximumvalue) {
\t\tinput_val = val.value.replace(/[^\\d,]/g, '');
\t\tquantity = parseInt(input_val);
\t\tif (quantity < minimumvalue) {
\t\t\tinput_val(minimumvalue);
\t\t\treturn;
\t\t}
\t\t";
            // line 147
            if (($context["q_zavisimost"] ?? null)) {
                echo " 
\t\t\tif (quantity > maximumvalue) {
\t\t\t\tinput_val(maximumvalue);
\t\t\t}
\t\t";
            }
            // line 151
            echo " 
\t\tcart.update(product_id, input_val);
\t\tcart_update();
\t}
\tfunction validate_pole_cart2(val, product_id, znak, minimumvalue, maximumvalue) {
\t\tval.value = val.value.replace(/[^\\d,]/g, '');
\t\tif (val.value == '') val.value = minimumvalue;
\t\tinput_val = \$(val).parent().parent().parent().children('.plus-minus');
\t\tquantity = parseInt(input_val.val());
\t\t";
            // line 160
            if (($context["q_zavisimost"] ?? null)) {
                echo " 
\t\t\tif (znak=='+' && input_val.val() < maximumvalue) input_val.val(quantity+1);
\t\t\telse if (znak=='-' && input_val.val() > minimumvalue) input_val.val(quantity-1);
\t\t\telse if (znak=='=' && input_val.val() < maximumvalue && input_val.val() < maximumvalue) input_val.val(input_val.val());
\t\t\tif (quantity < 1 || quantity < minimumvalue) {
\t\t\t\tinput_val.val(minimumvalue);
\t\t\t\tval.value = minimumvalue;
\t\t\t} else if (quantity > maximumvalue) {
\t\t\t\tinput_val.val(maximumvalue);
\t\t\t\tval.value = maximumvalue;
\t\t\t}
\t\t";
            } else {
                // line 171
                echo " 
\t\t\tif (znak=='+') input_val.val(quantity+1);
\t\t\telse if (znak=='-' && input_val.val() > minimumvalue) input_val.val(quantity-1);
\t\t\telse if (znak=='=' && input_val.val() > minimumvalue) input_val.val(input_val.val());
\t\t\tif (quantity < 1 || quantity < minimumvalue) {
\t\t\t\tinput_val.val(minimumvalue);
\t\t\t\tval.value = minimumvalue;
\t\t\t}
\t\t";
            }
            // line 179
            echo " 
\t\tcart.update(product_id, input_val.val());
\t\tcart_update();
\t}
\t//--></script>
";
        } else {
            // line 184
            echo " 
\t<script><!--
\t\twindow.location = 'index.php?route=checkout/cart';
\t--></script>
";
        }
        // line 188
        echo " 
";
    }

    public function getTemplateName()
    {
        return "revolution/template/revolution/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  542 => 188,  535 => 184,  527 => 179,  516 => 171,  501 => 160,  490 => 151,  482 => 147,  470 => 137,  461 => 135,  457 => 134,  453 => 133,  446 => 131,  443 => 130,  435 => 128,  431 => 127,  427 => 126,  422 => 124,  418 => 122,  413 => 120,  404 => 115,  396 => 113,  389 => 109,  386 => 108,  377 => 103,  371 => 101,  364 => 97,  361 => 96,  352 => 91,  344 => 89,  337 => 85,  332 => 83,  326 => 79,  315 => 77,  311 => 76,  307 => 75,  301 => 72,  293 => 69,  290 => 68,  279 => 66,  276 => 65,  271 => 64,  267 => 63,  262 => 62,  259 => 61,  244 => 58,  234 => 55,  224 => 52,  216 => 47,  213 => 46,  208 => 45,  204 => 44,  201 => 43,  192 => 42,  188 => 41,  184 => 39,  168 => 38,  162 => 37,  156 => 36,  150 => 35,  147 => 34,  140 => 33,  136 => 32,  129 => 30,  122 => 25,  117 => 24,  113 => 23,  109 => 22,  106 => 21,  101 => 20,  97 => 19,  94 => 18,  89 => 17,  85 => 16,  82 => 15,  77 => 14,  73 => 13,  69 => 12,  66 => 11,  61 => 10,  57 => 9,  49 => 4,  46 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/template/revolution/checkout/cart.twig", "");
    }
}
