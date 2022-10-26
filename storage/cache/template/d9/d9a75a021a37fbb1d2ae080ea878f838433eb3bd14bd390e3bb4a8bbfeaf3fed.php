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

/* revolution/template/revolution/checkout/user.twig */
class __TwigTemplate_2c71ef517b38c8619e64bad41ec88a91a838e97364d77d521ebc0dc92b2bed04 extends \Twig\Template
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
        echo "<div class=\"row\">
\t<input type=\"hidden\" name=\"fax\" value=\"\" />
\t<input type=\"hidden\" name=\"company\" value=\"\" />
\t<input type=\"hidden\" name=\"address_2\" value=\"\" />
\t";
        // line 5
        if ((((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["settings"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["revcheckout_register"] ?? null) : null) == "1") &&  !($context["logged"] ?? null))) {
            echo " 
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-xs-5 t-ar control-label\">";
            // line 7
            echo ($context["text_register"] ?? null);
            echo ":</label>
\t\t\t<div class=\"col-xs-7\">
\t\t\t\t<input type=\"checkbox\" name=\"register\" onclick=\"jQuery('.register-form').toggle(); ";
            // line 9
            if (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["settings"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["revcheckout_mail"] ?? null) : null) == "1")) {
                echo "jQuery('.revcheckout_mail_reg_on').toggle()";
            }
            echo "\" value=\"1\" ";
            if (($context["register"] ?? null)) {
                echo " checked ";
            }
            echo ">
\t\t\t</div>
\t\t</div>    
\t\t<div class=\"register-form\" style=\"";
            // line 12
            if ( !($context["register"] ?? null)) {
                echo "display: none;";
            }
            echo "clear: both;\">
\t\t\t";
            // line 13
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["settings"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["revcheckout_customer_group"] ?? null) : null)) {
                echo " 
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-xs-5 t-ar control-label\">";
                // line 15
                echo ($context["entry_customer_group"] ?? null);
                echo ":</label>
\t\t\t\t\t<div class=\"col-xs-7\">
\t\t\t\t\t\t<select name=\"customer_group_id\" class=\"form-control\">
\t\t\t\t\t\t\t";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 19
                    if (((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["customer_group"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["customer_group_id"] ?? null) : null) == ($context["customer_group_id"] ?? null))) {
                        echo " 
\t\t\t\t\t\t\t\t\t<option value=\"";
                        // line 20
                        echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["customer_group"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["customer_group_id"] ?? null) : null);
                        echo "\" selected=\"selected\">";
                        echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["customer_group"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["name"] ?? null) : null);
                        echo "</option>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 21
                        echo " 
\t\t\t\t\t\t\t\t\t<option value=\"";
                        // line 22
                        echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["customer_group"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["customer_group_id"] ?? null) : null);
                        echo "\">";
                        echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["customer_group"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["name"] ?? null) : null);
                        echo "</option>
\t\t\t\t\t\t\t\t";
                    }
                    // line 23
                    echo " 
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo " 
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 28
            echo " 
\t\t\t";
            // line 29
            if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["settings"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["revcheckout_mail"] ?? null) : null)) {
                echo " 
\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t<label class=\"col-xs-5 t-ar control-label\">";
                // line 31
                echo ($context["entry_email"] ?? null);
                echo ":</label>
\t\t\t\t\t<div class=\"col-xs-7\">
\t\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
                // line 33
                echo (((isset($context["email"]) || array_key_exists("email", $context))) ? (($context["email"] ?? null)) : (""));
                echo "\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 36
            echo " 
\t\t\t<div class=\"form-group required\">
\t\t\t\t<label class=\"col-xs-5 t-ar control-label\">";
            // line 38
            echo ($context["entry_password"] ?? null);
            echo ":</label>
\t\t\t\t<div class=\"col-xs-7\">
\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<div class=\"clearfix\"></div>
\t";
        } elseif ((((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 =         // line 45
($context["settings"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["revcheckout_register"] ?? null) : null) == "2") &&  !($context["logged"] ?? null))) {
            echo " 
\t\t";
            // line 46
            if ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["settings"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["revcheckout_mail"] ?? null) : null)) {
                echo " 
\t\t\t<div class=\"form-group required\">
\t\t\t\t<label class=\"col-xs-5 t-ar control-label\">";
                // line 48
                echo ($context["entry_email"] ?? null);
                echo ":</label>
\t\t\t\t<div class=\"col-xs-7\">
\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
                // line 50
                echo (((isset($context["email"]) || array_key_exists("email", $context))) ? (($context["email"] ?? null)) : (""));
                echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 53
            echo " 
\t\t<div class=\"form-group required\">
\t\t\t<label class=\"col-xs-5 t-ar control-label\">";
            // line 55
            echo ($context["entry_password"] ?? null);
            echo ":</label>
\t\t\t<div class=\"col-xs-7\">
\t\t\t\t<input type=\"password\" name=\"password\" value=\"\" class=\"form-control\" />
\t\t\t</div>
\t\t</div>
\t\t<div class=\"clearfix\"></div>
\t";
        } else {
            // line 61
            echo " 
\t\t<input type=\"hidden\" name=\"email\" value=\"";
            // line 62
            echo (((isset($context["email"]) || array_key_exists("email", $context))) ? (($context["email"] ?? null)) : (""));
            echo "\" class=\"form-control\" />
\t";
        }
        // line 63
        echo " 
\t";
        // line 64
        if ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["settings"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["revcheckout_family"] ?? null) : null)) {
            echo " 
\t\t<div class=\"form-group ";
            // line 65
            if (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["settings"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["revcheckout_family"] ?? null) : null) == "2")) {
                echo "required";
            }
            echo "\">
\t\t\t<label class=\"col-xs-5 t-ar control-label\">";
            // line 66
            echo ($context["entry_lastname"] ?? null);
            echo ":</label>
\t\t\t<div class=\"col-xs-7\">
\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"";
            // line 68
            echo (((isset($context["lastname"]) || array_key_exists("lastname", $context))) ? (($context["lastname"] ?? null)) : (""));
            echo "\" class=\"form-control\" />
\t\t\t</div>
\t\t</div>
\t";
        } else {
            // line 71
            echo " 
\t\t<input type=\"hidden\" name=\"lastname\" value=\"\" />
\t";
        }
        // line 73
        echo " 
\t";
        // line 74
        if ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["settings"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["revcheckout_name"] ?? null) : null)) {
            echo " 
\t\t<div class=\"form-group ";
            // line 75
            if (((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["settings"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["revcheckout_name"] ?? null) : null) == "2")) {
                echo "required";
            }
            echo "\">
\t\t\t<label class=\"col-xs-5 t-ar control-label\">";
            // line 76
            echo ($context["entry_firstname"] ?? null);
            echo ":</label>
\t\t\t<div class=\"col-xs-7\">
\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"";
            // line 78
            echo (((isset($context["firstname"]) || array_key_exists("firstname", $context))) ? (($context["firstname"] ?? null)) : (""));
            echo "\" class=\"form-control\" />
\t\t\t</div>
\t\t</div>
\t";
        } else {
            // line 81
            echo " 
\t\t<input type=\"hidden\" name=\"firstname\" value=\"\" />
\t";
        }
        // line 83
        echo " 
\t";
        // line 84
        if ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["settings"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["revcheckout_telephone"] ?? null) : null)) {
            echo " 
\t\t<div class=\"form-group ";
            // line 85
            if (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["settings"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["revcheckout_telephone"] ?? null) : null) == "2")) {
                echo "required";
            }
            echo "\">
\t\t\t<label class=\"col-xs-5 t-ar control-label\">";
            // line 86
            echo ($context["entry_telephone"] ?? null);
            echo ":</label>
\t\t\t<div class=\"col-xs-7\">
\t\t\t\t<input type=\"text\" name=\"telephone\" value=\"";
            // line 88
            echo (((isset($context["telephone"]) || array_key_exists("telephone", $context))) ? (($context["telephone"] ?? null)) : (""));
            echo "\" class=\"form-control\" ";
            if ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["settings"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["revcheckout_telephone_mask"] ?? null) : null)) {
                echo " data-mask=\"";
                echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["settings"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["revcheckout_telephone_mask"] ?? null) : null);
                echo "\" ";
            }
            echo " />
\t\t\t</div>
\t\t</div>
\t";
        } else {
            // line 91
            echo " 
\t\t<input type=\"hidden\" name=\"telephone\" value=\"\" />
\t";
        }
        // line 93
        echo " 
\t";
        // line 94
        if (((( !($context["register"] ?? null) && ((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["settings"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["revcheckout_register"] ?? null) : null) == "1")) ||  !(($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["settings"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["revcheckout_register"] ?? null) : null)) && (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["settings"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["revcheckout_mail"] ?? null) : null))) {
            echo " 
\t\t<div class=\"form-group ";
            // line 95
            if (((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["settings"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["revcheckout_mail"] ?? null) : null) == "2")) {
                echo "required";
            }
            echo "\">
\t\t\t<label class=\"col-xs-5 t-ar control-label\">";
            // line 96
            echo ($context["entry_email"] ?? null);
            echo ":</label>
\t\t\t<div class=\"col-xs-7\">
\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
            // line 98
            echo (((isset($context["email"]) || array_key_exists("email", $context))) ? (($context["email"] ?? null)) : (""));
            echo "\" class=\"form-control\" />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 101
        echo " 
\t";
        // line 102
        if ((isset($context["custom_fields"]) || array_key_exists("custom_fields", $context))) {
            echo " 
\t\t";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                echo " 
\t\t\t";
                // line 104
                if (((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["custom_field"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["location"] ?? null) : null) == "account")) {
                    echo " 
\t\t\t\t";
                    // line 105
                    if (((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["custom_field"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["type"] ?? null) : null) == "select")) {
                        echo " 
\t\t\t\t\t<div class=\"form-group";
                        // line 106
                        echo (((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["custom_field"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["required"] ?? null) : null)) ? (" required") : (""));
                        echo " custom-field\">
\t\t\t\t\t\t<label class=\"col-xs-5 t-ar control-label\" for=\"input-custom-field";
                        // line 107
                        echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["custom_field"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["custom_field_id"] ?? null) : null);
                        echo "\">";
                        echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["custom_field"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["name"] ?? null) : null);
                        echo ":</label>
\t\t\t\t\t\t<div class=\"col-xs-7\">
\t\t\t\t\t\t\t<select name=\"custom_field[account][";
                        // line 109
                        echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["custom_field"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["custom_field_id"] ?? null) : null);
                        echo "]\" id=\"input-custom-field";
                        echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["custom_field"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["custom_field_id"] ?? null) : null);
                        echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"\">";
                        // line 110
                        echo ($context["text_select"] ?? null);
                        echo "</option>
\t\t\t\t\t\t\t\t";
                        // line 111
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["custom_field"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["custom_field_value"] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            echo " 
\t\t\t\t\t\t\t\t\t<option value=\"";
                            // line 112
                            echo (((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["custom_field"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["name"] ?? null) : null) . ": ") . (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["custom_field_value"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["name"] ?? null) : null));
                            echo "\">";
                            echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["custom_field_value"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["name"] ?? null) : null);
                            echo "</option>
\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 113
                        echo " 
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    // line 117
                    echo " 
\t\t\t\t";
                    // line 118
                    if (((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["custom_field"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["type"] ?? null) : null) == "radio")) {
                        echo " 
\t\t\t\t\t<div class=\"form-group";
                        // line 119
                        echo (((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["custom_field"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["required"] ?? null) : null)) ? (" required") : (""));
                        echo " custom-field\">
\t\t\t\t\t\t<label class=\"col-xs-5 t-ar control-label\" for=\"input-custom-field";
                        // line 120
                        echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["custom_field"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["custom_field_id"] ?? null) : null);
                        echo "\">";
                        echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["custom_field"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["name"] ?? null) : null);
                        echo ":</label>
\t\t\t\t\t\t<div class=\"col-xs-7\">
\t\t\t\t\t\t\t<div id=\"input-custom-field";
                        // line 122
                        echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["custom_field"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["custom_field_id"] ?? null) : null);
                        echo "\">
\t\t\t\t\t\t\t\t";
                        // line 123
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["custom_field"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["custom_field_value"] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            echo " 
\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t<label class=\"input\"><input type=\"radio\" name=\"custom_field[account][";
                            // line 125
                            echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["custom_field"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["custom_field_id"] ?? null) : null);
                            echo "]\" value=\"";
                            echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["custom_field_value"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["custom_field_value_id"] ?? null) : null);
                            echo "\" /><span>";
                            echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["custom_field_value"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["name"] ?? null) : null);
                            echo "</span></label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 127
                        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    // line 131
                    echo " 
\t\t\t\t";
                    // line 132
                    if (((($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["custom_field"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["type"] ?? null) : null) == "checkbox")) {
                        echo " 
\t\t\t\t\t<div class=\"form-group";
                        // line 133
                        echo (((($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["custom_field"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["required"] ?? null) : null)) ? (" required") : (""));
                        echo " custom-field\">
\t\t\t\t\t\t<label class=\"col-xs-5 t-ar control-label\" for=\"input-custom-field";
                        // line 134
                        echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["custom_field"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["custom_field_id"] ?? null) : null);
                        echo "\">";
                        echo (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["custom_field"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["name"] ?? null) : null);
                        echo ":</label>
\t\t\t\t\t\t<div class=\"col-xs-7\">
\t\t\t\t\t\t\t<div id=\"input-custom-field";
                        // line 136
                        echo (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["custom_field"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["custom_field_id"] ?? null) : null);
                        echo "\">
\t\t\t\t\t\t\t\t";
                        // line 137
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["custom_field"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["custom_field_value"] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            echo " 
\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<label class=\"input\"><input type=\"checkbox\" name=\"custom_field[account][";
                            // line 139
                            echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["custom_field"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["custom_field_id"] ?? null) : null);
                            echo "][]\" value=\"";
                            echo (((($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["custom_field"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["name"] ?? null) : null) . ": ") . (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["custom_field_value"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["name"] ?? null) : null));
                            echo "\" /><span>";
                            echo (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = $context["custom_field_value"]) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["name"] ?? null) : null);
                            echo "</span></label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 141
                        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    // line 145
                    echo " 
\t\t\t\t";
                    // line 146
                    if (((($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = $context["custom_field"]) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["type"] ?? null) : null) == "text")) {
                        echo " 
\t\t\t\t\t<div class=\"form-group";
                        // line 147
                        echo (((($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = $context["custom_field"]) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["required"] ?? null) : null)) ? (" required") : (""));
                        echo " custom-field\">
\t\t\t\t\t\t<label class=\"col-xs-5 t-ar control-label\" for=\"input-custom-field";
                        // line 148
                        echo (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = $context["custom_field"]) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["custom_field_id"] ?? null) : null);
                        echo "\">";
                        echo (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = $context["custom_field"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["name"] ?? null) : null);
                        echo ":</label>
\t\t\t\t\t\t<div class=\"col-xs-7\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[account][";
                        // line 150
                        echo (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = $context["custom_field"]) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["custom_field_id"] ?? null) : null);
                        echo "]\" value=\"\" placeholder=\"";
                        echo (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = $context["custom_field"]) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["value"] ?? null) : null);
                        echo "\" id=\"input-custom-field";
                        echo (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = $context["custom_field"]) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["custom_field_id"] ?? null) : null);
                        echo "\" class=\"form-control\" ";
                        if ((($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = $context["custom_field"]) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["mask"] ?? null) : null)) {
                            echo " data-mask=\"";
                            echo (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = $context["custom_field"]) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["mask"] ?? null) : null);
                            echo "\" ";
                        }
                        echo " />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    // line 153
                    echo " 
\t\t\t\t";
                    // line 154
                    if (((($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = $context["custom_field"]) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["type"] ?? null) : null) == "textarea")) {
                        echo " 
\t\t\t\t\t<div class=\"form-group";
                        // line 155
                        echo (((($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = $context["custom_field"]) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["required"] ?? null) : null)) ? (" required") : (""));
                        echo " custom-field\">
\t\t\t\t\t\t<label class=\"col-xs-5 t-ar control-label\" for=\"input-custom-field";
                        // line 156
                        echo (($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = $context["custom_field"]) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["custom_field_id"] ?? null) : null);
                        echo "\">";
                        echo (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = $context["custom_field"]) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["name"] ?? null) : null);
                        echo ":</label>
\t\t\t\t\t\t<div class=\"col-xs-7\">
\t\t\t\t\t\t\t<textarea name=\"custom_field[account][";
                        // line 158
                        echo (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = $context["custom_field"]) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["custom_field_id"] ?? null) : null);
                        echo "]\" rows=\"3\" id=\"input-custom-field";
                        echo (($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = $context["custom_field"]) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["custom_field_id"] ?? null) : null);
                        echo "\" class=\"form-control\" placeholder=\"";
                        echo (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = $context["custom_field"]) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["value"] ?? null) : null);
                        echo "\" ";
                        if ((($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = $context["custom_field"]) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["mask"] ?? null) : null)) {
                            echo " data-mask=\"";
                            echo (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = $context["custom_field"]) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["mask"] ?? null) : null);
                            echo "\" ";
                        }
                        echo "></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    // line 161
                    echo " 
\t\t\t\t";
                    // line 162
                    if (((($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = $context["custom_field"]) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["type"] ?? null) : null) == "file")) {
                        echo " 
\t\t\t\t\t<div class=\"form-group";
                        // line 163
                        echo (((($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = $context["custom_field"]) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["required"] ?? null) : null)) ? (" required") : (""));
                        echo " custom-field\">
\t\t\t\t\t\t<label class=\"col-xs-5 t-ar control-label\" for=\"input-custom-field";
                        // line 164
                        echo (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = $context["custom_field"]) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["custom_field_id"] ?? null) : null);
                        echo "\">";
                        echo (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = $context["custom_field"]) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["name"] ?? null) : null);
                        echo ":</label>
\t\t\t\t\t\t<div class=\"col-xs-7\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-shipping-custom-field";
                        // line 166
                        echo (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = $context["custom_field"]) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["custom_field_id"] ?? null) : null);
                        echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"custom_field[account][";
                        // line 167
                        echo (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = $context["custom_field"]) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["custom_field_id"] ?? null) : null);
                        echo "]\" value=\"";
                        echo (($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = $context["custom_field"]) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["value"] ?? null) : null);
                        echo "\" id=\"input-custom-field";
                        echo (($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = $context["custom_field"]) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c["custom_field_id"] ?? null) : null);
                        echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    // line 170
                    echo " 
\t\t\t\t";
                    // line 171
                    if (((($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = $context["custom_field"]) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c["type"] ?? null) : null) == "date")) {
                        echo " 
\t\t\t\t\t<div class=\"form-group";
                        // line 172
                        echo (((($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = $context["custom_field"]) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["required"] ?? null) : null)) ? (" required") : (""));
                        echo " custom-field\">
\t\t\t\t\t\t<label class=\"col-xs-5 t-ar control-label\" for=\"input-custom-field";
                        // line 173
                        echo (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = $context["custom_field"]) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8["custom_field_id"] ?? null) : null);
                        echo "\">";
                        echo (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = $context["custom_field"]) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["name"] ?? null) : null);
                        echo ":</label>
\t\t\t\t\t\t<div class=\"col-xs-7\">
\t\t\t\t\t\t\t<input type=\"date\" name=\"custom_field[account][";
                        // line 175
                        echo (($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = $context["custom_field"]) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9["custom_field_id"] ?? null) : null);
                        echo "]\" value=\"";
                        echo (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = $context["custom_field"]) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac["value"] ?? null) : null);
                        echo "\" id=\"input-custom-field";
                        echo (($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = $context["custom_field"]) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768["custom_field_id"] ?? null) : null);
                        echo "\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    // line 178
                    echo " 
\t\t\t\t";
                    // line 179
                    if (((($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = $context["custom_field"]) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57["type"] ?? null) : null) == "datetime")) {
                        echo " 
\t\t\t\t\t<div class=\"form-group";
                        // line 180
                        echo (((($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = $context["custom_field"]) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898["required"] ?? null) : null)) ? (" required") : (""));
                        echo " custom-field\">
\t\t\t\t\t\t<label class=\"col-xs-5 t-ar control-label\" for=\"input-custom-field";
                        // line 181
                        echo (($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = $context["custom_field"]) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["custom_field_id"] ?? null) : null);
                        echo "\">";
                        echo (($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = $context["custom_field"]) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a["name"] ?? null) : null);
                        echo ":</label>
\t\t\t\t\t\t<div class=\"col-xs-7\">
\t\t\t\t\t\t\t<input type=\"datetime-local\" name=\"custom_field[account][";
                        // line 183
                        echo (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = $context["custom_field"]) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3["custom_field_id"] ?? null) : null);
                        echo "]\" value=\"";
                        echo (($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = $context["custom_field"]) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4["value"] ?? null) : null);
                        echo "\" id=\"input-custom-field";
                        echo (($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = $context["custom_field"]) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9["custom_field_id"] ?? null) : null);
                        echo "\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    // line 186
                    echo " 
\t\t\t\t";
                    // line 187
                    if (((($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = $context["custom_field"]) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7["type"] ?? null) : null) == "time")) {
                        echo " 
\t\t\t\t\t<div class=\"form-group";
                        // line 188
                        echo (((($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = $context["custom_field"]) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416["required"] ?? null) : null)) ? (" required") : (""));
                        echo " custom-field\">
\t\t\t\t\t\t<label class=\"col-xs-5 t-ar control-label\" for=\"input-custom-field";
                        // line 189
                        echo (($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = $context["custom_field"]) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e["custom_field_id"] ?? null) : null);
                        echo "\">";
                        echo (($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = $context["custom_field"]) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f["name"] ?? null) : null);
                        echo ":</label>
\t\t\t\t\t\t<div class=\"col-xs-7\">
\t\t\t\t\t\t\t<input type=\"time\" name=\"custom_field[account][";
                        // line 191
                        echo (($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = $context["custom_field"]) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b["custom_field_id"] ?? null) : null);
                        echo "]\" value=\"";
                        echo (($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = $context["custom_field"]) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75["value"] ?? null) : null);
                        echo "\" id=\"input-custom-field";
                        echo (($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = $context["custom_field"]) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c["custom_field_id"] ?? null) : null);
                        echo "\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    // line 194
                    echo " 
\t\t\t";
                }
                // line 195
                echo " 
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo " 
\t";
        }
        // line 197
        echo " 
\t";
        // line 198
        if ((($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = ($context["settings"] ?? null)) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1["revcheckout_comment"] ?? null) : null)) {
            echo " 
\t\t<div class=\"form-group ";
            // line 199
            if (((($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = ($context["settings"] ?? null)) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24["revcheckout_comment"] ?? null) : null) == "2")) {
                echo "required";
            }
            echo "\">
\t\t\t<label class=\"col-xs-5 t-ar control-label\">";
            // line 200
            echo ($context["text_revcheckout_comment"] ?? null);
            echo ":</label>
\t\t\t<div class=\"col-xs-7\">
\t\t\t\t<textarea name=\"comment\" rows=\"3\" class=\"form-control\">";
            // line 202
            echo ($context["comment"] ?? null);
            echo "</textarea>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 205
        echo " 
\t<script>
\t\$('select[name=\\'customer_group_id\\']').on('change', function() {
\t\tupdate_user();
\t});
\t\$('[name=\\'register\\']').on('change', function() {
\t\tupdate_user();
\t});
\t</script>
</div>";
    }

    public function getTemplateName()
    {
        return "revolution/template/revolution/checkout/user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  716 => 205,  709 => 202,  704 => 200,  698 => 199,  694 => 198,  691 => 197,  687 => 196,  680 => 195,  676 => 194,  665 => 191,  658 => 189,  654 => 188,  650 => 187,  647 => 186,  636 => 183,  629 => 181,  625 => 180,  621 => 179,  618 => 178,  607 => 175,  600 => 173,  596 => 172,  592 => 171,  589 => 170,  578 => 167,  572 => 166,  565 => 164,  561 => 163,  557 => 162,  554 => 161,  537 => 158,  530 => 156,  526 => 155,  522 => 154,  519 => 153,  502 => 150,  495 => 148,  491 => 147,  487 => 146,  484 => 145,  477 => 141,  464 => 139,  457 => 137,  453 => 136,  446 => 134,  442 => 133,  438 => 132,  435 => 131,  428 => 127,  415 => 125,  408 => 123,  404 => 122,  397 => 120,  393 => 119,  389 => 118,  386 => 117,  379 => 113,  369 => 112,  363 => 111,  359 => 110,  353 => 109,  346 => 107,  342 => 106,  338 => 105,  334 => 104,  328 => 103,  324 => 102,  321 => 101,  314 => 98,  309 => 96,  303 => 95,  299 => 94,  296 => 93,  291 => 91,  278 => 88,  273 => 86,  267 => 85,  263 => 84,  260 => 83,  255 => 81,  248 => 78,  243 => 76,  237 => 75,  233 => 74,  230 => 73,  225 => 71,  218 => 68,  213 => 66,  207 => 65,  203 => 64,  200 => 63,  195 => 62,  192 => 61,  182 => 55,  178 => 53,  171 => 50,  166 => 48,  161 => 46,  157 => 45,  147 => 38,  143 => 36,  136 => 33,  131 => 31,  126 => 29,  123 => 28,  116 => 24,  109 => 23,  102 => 22,  99 => 21,  92 => 20,  88 => 19,  82 => 18,  76 => 15,  71 => 13,  65 => 12,  53 => 9,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/template/revolution/checkout/user.twig", "");
    }
}
