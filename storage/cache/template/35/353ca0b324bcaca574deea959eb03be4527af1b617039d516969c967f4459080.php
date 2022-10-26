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

/* revolution/template/revolution/revpopupcart.twig */
class __TwigTemplate_93192e5d47f1421679b127c3d861168e512e1c4c48ed9b2745e975a425dcf711 extends \Twig\Template
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
        echo "<div id=\"popup-okno\">
<div id=\"popup-okno-inner\">
";
        // line 3
        if (($context["products"] ?? null)) {
            echo " 
  <div class=\"popup-heading\">";
            // line 4
            echo ($context["heading_cartpopup_title"] ?? null);
            echo "</div>
  <div class=\"popup-center\">
    ";
            // line 6
            if (($context["attention"] ?? null)) {
                echo " 
    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
                // line 7
                echo ($context["attention"] ?? null);
                echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
            }
            // line 10
            echo " 
    ";
            // line 11
            if (($context["success"] ?? null)) {
                echo " 
    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
                // line 12
                echo ($context["success"] ?? null);
                echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
            } else {
                // line 15
                echo " 
    <div id=\"success-message\"></div>
    ";
            }
            // line 17
            echo " 
    ";
            // line 18
            if (($context["error_warning"] ?? null)) {
                echo " 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
                // line 19
                echo ($context["error_warning"] ?? null);
                echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
            }
            // line 22
            echo " 
    <table class=\"display-products-cart\">
      <tbody>
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                echo " 
        <tr>
          <td class=\"image\">
            ";
                // line 28
                if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["product"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["thumb"] ?? null) : null)) {
                    echo " 
            <a href=\"";
                    // line 29
                    echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["product"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["href"] ?? null) : null);
                    echo "\"><img src=\"";
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["product"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["thumb"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["product"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["name"] ?? null) : null);
                    echo "\" title=\"";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["product"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["name"] ?? null) : null);
                    echo "\" class=\"img-thumbnail\" /></a>
            ";
                }
                // line 30
                echo " 
          </td>
          <td class=\"name\">
            <a href=\"";
                // line 33
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["product"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["href"] ?? null) : null);
                echo "\">";
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["product"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["name"] ?? null) : null);
                echo "</a>
            ";
                // line 34
                if ( !(($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["product"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["stock"] ?? null) : null)) {
                    echo " 
            <span class=\"text-danger\">***</span>
            ";
                }
                // line 36
                echo " 
            ";
                // line 37
                if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["product"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["option"] ?? null) : null)) {
                    echo " 
            ";
                    // line 38
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["product"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["option"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " 
            <br />
            ";
                        // line 40
                        echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["option"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["name"] ?? null) : null);
                        echo ": ";
                        echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["option"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["value"] ?? null) : null);
                        echo " 
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo " 
            ";
                }
                // line 42
                echo " 
            ";
                // line 43
                if ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["product"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["reward"] ?? null) : null)) {
                    echo " 
            <br />
            ";
                    // line 45
                    echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["product"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["reward"] ?? null) : null);
                    echo " 
            ";
                }
                // line 46
                echo " 
          </td>
          <td class=\"qt\">
            <div class=\"number\">
              <input name=\"product_id\" value=\"";
                // line 50
                echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["product"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["key"] ?? null) : null);
                echo "\" style=\"display: none;\" type=\"hidden\" />
              <div class=\"frame-change-count\">
                <div class=\"btn-plus\">
                  <button type=\"button\" onclick=\"\$(this).parent().parent().next().val(~~\$(this).parent().parent().next().val()+1); update(this, 'update', '";
                // line 53
                echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["product"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["quantity_pr"] ?? null) : null);
                echo "');\">+</button>
                </div>
                <div class=\"btn-minus\">
                  <button type=\"button\" onclick=\"\$(this).parent().parent().next().val(~~\$(this).parent().parent().next().val()-1); update(this, 'update', '";
                // line 56
                echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["product"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["quantity_pr"] ?? null) : null);
                echo "');\">-</button>
                </div>
              </div>
              <input type=\"text\" name=\"quantity\" value=\"";
                // line 59
                echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["product"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["quantity"] ?? null) : null);
                echo "\" class=\"plus-minus\" onchange=\"update_manual(this, '";
                echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["product"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["key"] ?? null) : null);
                echo "', '";
                echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["product"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["quantity_pr"] ?? null) : null);
                echo "'); return validate(this);\" onkeyup=\"update_manual(this, '";
                echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["product"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["key"] ?? null) : null);
                echo "', '";
                echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["product"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["quantity_pr"] ?? null) : null);
                echo "'); return validate(this);\" />
            </div>
          </td>
          <td class=\"totals\">";
                // line 62
                echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["product"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["total"] ?? null) : null);
                echo "</td>
\t\t  <td class=\"remove\">
            <button type=\"button\" onclick=\"update(this, 'remove'); cart.remove('";
                // line 64
                echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["product"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["key"] ?? null) : null);
                echo "', '";
                echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["product"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["product_id"] ?? null) : null);
                echo "')\"><i class=\"fa fa-trash-o\"></i></button>
            <input name=\"product_key\" value=\"";
                // line 65
                echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["product"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["key"] ?? null) : null);
                echo "\" style=\"display: none;\" hidden />           
          </td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo " 
      </tbody>
    </table>
    <div class=\"mobile-products-cart\">
    ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                echo " 
      <div>
        <div class=\"image\">
          ";
                // line 75
                if ((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["product"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["thumb"] ?? null) : null)) {
                    echo " 
          <a href=\"";
                    // line 76
                    echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["product"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["href"] ?? null) : null);
                    echo "\"><img src=\"";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["product"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["thumb"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["product"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["name"] ?? null) : null);
                    echo "\" title=\"";
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["product"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["name"] ?? null) : null);
                    echo "\" class=\"img-thumbnail\" /></a>
          ";
                }
                // line 77
                echo " 
        </div>
        <div class=\"name\">
          <a href=\"";
                // line 80
                echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["product"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["href"] ?? null) : null);
                echo "\">";
                echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["product"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["name"] ?? null) : null);
                echo "</a>
          ";
                // line 81
                if ( !(($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["product"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["stock"] ?? null) : null)) {
                    echo " 
          <span class=\"text-danger\">***</span>
          ";
                }
                // line 83
                echo " 
          ";
                // line 84
                if ((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["product"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["option"] ?? null) : null)) {
                    echo " 
          ";
                    // line 85
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["product"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["option"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " 
          <br />
          ";
                        // line 87
                        echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["option"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["name"] ?? null) : null);
                        echo ": ";
                        echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["option"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["value"] ?? null) : null);
                        echo " 
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    echo " 
          ";
                }
                // line 89
                echo " 
          ";
                // line 90
                if ((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["product"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["reward"] ?? null) : null)) {
                    echo " 
          <br />
          ";
                    // line 92
                    echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["product"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["reward"] ?? null) : null);
                    echo " 
          ";
                }
                // line 93
                echo " 
        </div>
        <div class=\"qt\">
          <div class=\"number\">
              <input name=\"product_id\" value=\"";
                // line 97
                echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["product"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["key"] ?? null) : null);
                echo "\" style=\"display: none;\" type=\"hidden\" />
              <div class=\"frame-change-count\">
                <div class=\"btn-plus\">
                  <button type=\"button\" onclick=\"\$(this).parent().parent().next().val(~~\$(this).parent().parent().next().val()+1); update(this, 'update', '";
                // line 100
                echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["product"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["quantity_pr"] ?? null) : null);
                echo "');\">+</button>
                </div>
                <div class=\"btn-minus\">
                  <button type=\"button\" onclick=\"\$(this).parent().parent().next().val(~~\$(this).parent().parent().next().val()-1); update(this, 'update', '";
                // line 103
                echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["product"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["quantity_pr"] ?? null) : null);
                echo "');\">-</button>
                </div>
              </div>
              <input type=\"text\" name=\"quantity\" value=\"";
                // line 106
                echo (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["product"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["quantity"] ?? null) : null);
                echo "\" class=\"plus-minus\" onchange=\"update_manual(this, '";
                echo (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["product"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["key"] ?? null) : null);
                echo "', '";
                echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["product"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["quantity_pr"] ?? null) : null);
                echo "'); return validate(this);\" onkeyup=\"update_manual(this, '";
                echo (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["product"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["key"] ?? null) : null);
                echo "', '";
                echo (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["product"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["quantity_pr"] ?? null) : null);
                echo "'); return validate(this);\" />
            </div>
\t\t\t<span class=\"remove\">
\t\t\t  <button type=\"button\" onclick=\"update(this, 'remove'); cart.remove('";
                // line 109
                echo (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["product"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["key"] ?? null) : null);
                echo "', '";
                echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["product"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["product_id"] ?? null) : null);
                echo "')\"><i class=\"fa fa-trash-o\"></i></button>
\t\t\t  <input name=\"product_key\" value=\"";
                // line 110
                echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["product"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["key"] ?? null) : null);
                echo "\" style=\"display: none;\" hidden />
\t\t\t</span>
        </div>
        <div class=\"totals\">
          ";
                // line 114
                echo (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["product"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["total"] ?? null) : null);
                echo " 
        </div>\t\t
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo " 
    </div>
    <div class=\"all-total\">
      ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                echo " 
\t\t<div class=\"clear-total\">
\t\t<div class=\"totals-right\">";
                // line 122
                echo (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = $context["total"]) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["text"] ?? null) : null);
                echo "</div>
        <div class=\"totals-left\">";
                // line 123
                echo (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = $context["total"]) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["title"] ?? null) : null);
                echo ":</div>     
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo " 
    </div>    
  </div>
  <div class=\"popup-footer\">
    <button onclick=\"\$.magnificPopup.close();\">";
            // line 129
            echo ($context["button_shopping"] ?? null);
            echo "</button>
    <a href=\"";
            // line 130
            echo ($context["checkout_link"] ?? null);
            echo "\">";
            echo ($context["button_checkout"] ?? null);
            echo "</a>
\t";
            // line 131
            if ((($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = ($context["setting_header_cart"] ?? null)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["cart_quick"] ?? null) : null)) {
                echo " 
\t\t<button class=\"quickorder_b btn btn-default btn-sm\" onclick=\"get_revpopup_pre_cartquick();\">";
                // line 132
                echo ($context["text_rev_buy_quick"] ?? null);
                echo "</button>
\t";
            }
            // line 133
            echo " 
  </div>
";
        } else {
            // line 135
            echo " 
  <div class=\"popup-heading\">";
            // line 136
            echo ($context["heading_cartpopup_title_empty"] ?? null);
            echo "</div>
  <div class=\"popup-center empty-cart\">";
            // line 137
            echo ($context["text_cartpopup_empty"] ?? null);
            echo "</div>
  <div class=\"popup-footer\">
    <button onclick=\"\$.magnificPopup.close();\">";
            // line 139
            echo ($context["button_shopping"] ?? null);
            echo "</button>
  </div>
";
        }
        // line 141
        echo " 
</div>
<script><!--
function get_revpopup_pre_cartquick(product_id) {
\t\$.magnificPopup.close();
\tsetTimeout(function() {
\t\tget_revpopup_cartquick(product_id);
\t}, 300);
}
function validate( input ) {
  input.value = input.value.replace( /[^\\d,]/g, '' );
}

function update(target, status, pr_quantity) {
  masked('#popup-okno-inner', true);
  var input_val    = \$(target).parent().parent().parent().children('input[name=quantity]').val(),
      quantity     = parseInt(input_val),
      product_id   = \$(target).parent().parent().parent().children('input[name=product_id]').val(),
      product_key  = \$(target).next().val(),
      urls         = null;

  if (quantity <= 0) {
    masked('#popup-okno-inner', false);
    quantity = \$(target).parent().parent().parent().children('input[name=quantity]').val(1);
    return;
  }
  ";
        // line 167
        if (($context["q_zavisimost"] ?? null)) {
            echo " 
  if (quantity > pr_quantity && pr_quantity > 0 ) {
    masked('#popup-okno-inner', false);
\tquantity = \$(target).parent().parent().parent().children('input[name=quantity]').val(pr_quantity);
    return;
  }
  ";
        }
        // line 173
        echo " 

  if (status == 'update') {
    urls = 'index.php?route=revolution/revpopupcart&update=' + product_id + '&quantity=' + quantity;
  } else if (status == 'add') {
    urls = 'index.php?route=revolution/revpopupcart&add=' + target + '&quantity=1';
  } else {
    urls = 'index.php?route=revolution/revpopupcart&remove=' + product_key;
  }
      
  \$.ajax({
    url: urls,
    type: 'get',
    dataType: 'html',
    success: function( data ) {
      \$.ajax({
        url: 'index.php?route=revolution/revpopupcart/status_cart',
        type: 'get',
        dataType: 'json',
        success: function( json ) {
          masked('#popup-okno-inner', false);
          if (json['total']) {
\t\t\t\$('#top #cart-total_mobi').html(json['total']);
            \$('#top #cart-total').html(json['total']);
\t\t\t\$('#top3 #cart-total').html(json['total']);
\t\t\t\$('#top2 #cart-total').html(json['total']);
\t\t\t\$('#top #cart-total-popup').html(json['total']);
\t\t\t\$('#top3 #cart-total-popup').html(json['total']);
\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
          }
          \$('#popup-okno-inner').html( \$( data ).find( '#popup-okno-inner > *' ) );
        } 
      });
    } 
  });
}
function update_manual(target, product_id, pr_quantity) {
  masked('#popup-okno-inner', true);
  var input_val = \$( target ).val(),
      quantity  = parseInt( input_val );
    
  if (quantity <= 0) {
    masked('#popup-okno-inner', false);
    quantity = \$( target ).val( 1 );
    return;
  }
  ";
        // line 219
        if (($context["q_zavisimost"] ?? null)) {
            echo " 
  if (quantity > pr_quantity && pr_quantity > 0 ) {
    masked('#popup-okno-inner', false);
\tquantity = \$(target).parent().parent().parent().children('input[name=quantity]').val(pr_quantity);
    return;
  }
  ";
        }
        // line 225
        echo " 
  
  \$.ajax({
    url: 'index.php?route=revolution/revpopupcart&update=' + product_id + '&quantity=' + quantity,
    type: 'get',
    dataType: 'html',
    success: function( data ) {
      \$.ajax({
        url: 'index.php?route=revolution/revpopupcart/status_cart',
        type: 'get',
        dataType: 'json',
        success: function( json ) {
          masked('#popup-okno-inner', false);
          if (json['total']) {
            \$('#top #cart-total').html(json['total']);
\t\t\t\$('#top3 #cart-total').html(json['total']);
\t\t\t\$('#top2 #cart-total').html(json['total']);
\t\t\t\$('#top #cart-total-popup').html(json['total']);
\t\t\t\$('#top3 #cart-total-popup').html(json['total']);
            \$('#cart > ul').load('index.php?route=common/cart/info ul li');
          }
          \$('#popup-okno-inner').html( \$( data ).find( '#popup-okno-inner > *' ) );
        } 
      });
    } 
  });
}
//--></script>
</div>";
    }

    public function getTemplateName()
    {
        return "revolution/template/revolution/revpopupcart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  556 => 225,  546 => 219,  498 => 173,  488 => 167,  460 => 141,  454 => 139,  449 => 137,  445 => 136,  442 => 135,  437 => 133,  432 => 132,  428 => 131,  422 => 130,  418 => 129,  412 => 125,  403 => 123,  399 => 122,  392 => 120,  387 => 117,  377 => 114,  370 => 110,  364 => 109,  350 => 106,  344 => 103,  338 => 100,  332 => 97,  326 => 93,  321 => 92,  316 => 90,  313 => 89,  309 => 88,  299 => 87,  292 => 85,  288 => 84,  285 => 83,  279 => 81,  273 => 80,  268 => 77,  257 => 76,  253 => 75,  245 => 72,  239 => 68,  229 => 65,  223 => 64,  218 => 62,  204 => 59,  198 => 56,  192 => 53,  186 => 50,  180 => 46,  175 => 45,  170 => 43,  167 => 42,  163 => 41,  153 => 40,  146 => 38,  142 => 37,  139 => 36,  133 => 34,  127 => 33,  122 => 30,  111 => 29,  107 => 28,  99 => 25,  94 => 22,  87 => 19,  83 => 18,  80 => 17,  75 => 15,  68 => 12,  64 => 11,  61 => 10,  54 => 7,  50 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/template/revolution/revpopupcart.twig", "");
    }
}
