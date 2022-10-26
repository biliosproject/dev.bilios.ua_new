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

/* revolution/template/common/footer.twig */
class __TwigTemplate_0b5094ed33fcf4681b1ec8d48c9e66836a86aeb349b886e4180e09a50cdd4421 extends \Twig\Template
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
        echo "</section>
";
        // line 2
        if (( !(($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["setting_all_settings"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["all_document_width"] ?? null) : null) && (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["setting_all_settings"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["all_document_h_f_width"] ?? null) : null))) {
            echo " 
</div>
";
        }
        // line 4
        echo " 
<footer>
";
        // line 6
        if ((($context["f_map"] ?? null) && ($context["is_desctope"] ?? null))) {
            echo " 
\t<div id=\"map-wrapper\" class=\"hidden-xs\">
\t\t<div class=\"contact-info\">
\t\t\t<div class=\"item\">
\t\t\t\t<div class=\"label_fconts\">";
            // line 10
            echo ($context["text_contact_ourcontacts"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 11
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["settings_all_settings"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["m_conts"] ?? null) : null)) {
                echo " 
\t\t\t\t\t<p class=\"hid_address\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>";
                // line 12
                echo ($context["address"] ?? null);
                echo "</p>
\t\t\t\t\t<p class=\"hid_telephone\"><i class=\"fa fa fa-phone\" aria-hidden=\"true\"></i>";
                // line 13
                echo ($context["telephone"] ?? null);
                echo "</p>
\t\t\t\t\t<p class=\"hid_email\"><i class=\"fa fa fa-envelope\" aria-hidden=\"true\"></i>";
                // line 14
                echo ($context["config_email"] ?? null);
                echo "</p>
\t\t\t\t";
            }
            // line 15
            echo " 
\t\t\t\t";
            // line 16
            if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["settings_all_settings"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["dop_conts"] ?? null) : null)) {
                echo " 
\t\t\t\t\t";
                // line 17
                if ((($context["header_phone_number"] ?? null) != "")) {
                    echo " 
\t\t\t\t\t\t<p class=\"dop_contact_tel1\"><i class=\"fa fa fa-phone\" aria-hidden=\"true\"></i>";
                    // line 18
                    echo ($context["header_phone_cod"] ?? null);
                    echo " ";
                    echo ($context["header_phone_number"] ?? null);
                    echo "</p>
\t\t\t\t\t";
                }
                // line 19
                echo " 
\t\t\t\t\t";
                // line 20
                if ((($context["header_phone_number2"] ?? null) != "")) {
                    echo " 
\t\t\t\t\t\t<p class=\"dop_contact_tel2\"><i class=\"fa fa fa-phone\" aria-hidden=\"true\"></i>";
                    // line 21
                    echo ($context["header_phone_cod2"] ?? null);
                    echo " ";
                    echo ($context["header_phone_number2"] ?? null);
                    echo "<p>
\t\t\t\t\t";
                }
                // line 22
                echo " 
\t\t\t\t\t";
                // line 23
                if (($context["dop_contacts"] ?? null)) {
                    echo " ";
                    $context["i_dc"] = 1;
                    echo " 
\t\t\t\t\t\t";
                    // line 24
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["dop_contacts"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["dop_contact"]) {
                        echo " 
\t\t\t\t\t\t\t";
                        // line 25
                        if (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["dop_contact"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["href"] ?? null) : null) != "")) {
                            echo " 
\t\t\t\t\t\t\t\t<p class=\"dop_contact_";
                            // line 26
                            echo ($context["i_dc"] ?? null);
                            echo "\">";
                            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["dop_contact"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["icon"] ?? null) : null);
                            echo "<a href=\"";
                            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["dop_contact"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["href"] ?? null) : null);
                            echo "\">";
                            echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["dop_contact"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["number"] ?? null) : null);
                            echo "</a></p>
\t\t\t\t\t\t\t";
                        } else {
                            // line 27
                            echo " 
\t\t\t\t\t\t\t\t<p class=\"dop_contact_";
                            // line 28
                            echo ($context["i_dc"] ?? null);
                            echo "\">";
                            echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["dop_contact"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["icon"] ?? null) : null);
                            echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["dop_contact"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["number"] ?? null) : null);
                            echo "</p>
\t\t\t\t\t\t\t";
                        }
                        // line 29
                        echo " 
\t\t\t\t\t\t";
                        // line 30
                        $context["i_dc"] = (($context["i_dc"] ?? null) + 1);
                        echo " ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dop_contact'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " 
\t\t\t\t\t";
                }
                // line 31
                echo " 
\t\t\t\t";
            }
            // line 32
            echo " 
\t\t\t\t";
            // line 33
            if ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["settings_all_settings"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["soc_conts"] ?? null) : null)) {
                echo " 
\t\t\t\t\t";
                // line 34
                if (($context["revtheme_footer_socs_p"] ?? null)) {
                    echo " 
\t\t\t\t\t\t";
                    // line 35
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["revtheme_footer_socs_p"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["revtheme_footer_soc"]) {
                        echo " 
\t\t\t\t\t\t\t<p><i class=\"";
                        // line 36
                        echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["revtheme_footer_soc"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["image"] ?? null) : null);
                        echo "\" aria-hidden=\"true\"></i><a href=\"";
                        echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["revtheme_footer_soc"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["link"] ?? null) : null);
                        echo "\" rel=\"nofollow\" target=\"_blank\">";
                        echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["revtheme_footer_soc"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["link_t"] ?? null) : null);
                        echo "</a></p>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revtheme_footer_soc'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo " 
\t\t\t\t\t";
                }
                // line 38
                echo " 
\t\t\t\t";
            }
            // line 39
            echo " 
\t\t\t</div>
\t\t</div>
\t\t<div id=\"yamap\">
\t\t\t";
            // line 43
            if (($context["yamap"] ?? null)) {
                echo " ";
                echo ($context["yamap"] ?? null);
            }
            echo " 
\t\t</div>
\t</div>
";
        }
        // line 46
        echo " 
\t";
        // line 47
        echo ($context["revsubscribe"] ?? null);
        echo " 
\t<div class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 51
        $context["dops_class"] = "not_dops_snot_dops_s";
        echo " ";
        if ( !(($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["revtheme_custom_footer"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["dops_pc_status"] ?? null) : null)) {
            echo " ";
            $context["dops_class"] = "not_dops_s hidden-md hidden-lg";
            echo " ";
        }
        echo " 
\t\t\t\t";
        // line 52
        if ((($context["is_mobile"] ?? null) || (($context["dops_class"] ?? null) == "not_dops_snot_dops_s"))) {
            echo " 
\t\t\t\t<div class=\"";
            // line 53
            echo ($context["dops_class"] ?? null);
            echo "\">
\t\t\t\t\t";
            // line 54
            if ((($context["informations"] ?? null) || ($context["revtheme_footer_links"] ?? null))) {
                echo " 
\t\t\t\t\t\t";
                // line 55
                $context["class_informations"] = "col-sm-12";
                // line 56
                echo "\t\t\t\t\t\t";
                if (((($context["informations"] ?? null) || ($context["revtheme_footer_links"] ?? null)) && ($context["revtheme_footer_socs"] ?? null))) {
                    echo " ";
                    $context["class_informations"] = "col-sm-8";
                    echo " ";
                }
                echo " 
\t\t\t\t\t\t<div class=\"footer_links ";
                // line 57
                echo ($context["class_informations"] ?? null);
                echo " col-xs-12 ";
                if (((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["setting_all_settings"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["mobile_header"] ?? null) : null) == "2")) {
                    echo "hidden-xs";
                }
                echo "\">
\t\t\t\t\t\t\t";
                // line 58
                if (($context["informations"] ?? null)) {
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 59
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                        echo " 
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 60
                        echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["information"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["href"] ?? null) : null);
                        echo "\">";
                        echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["information"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["title"] ?? null) : null);
                        echo "</a>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo " 
\t\t\t\t\t\t\t";
                }
                // line 62
                echo " 
\t\t\t\t\t\t\t";
                // line 63
                if (($context["revtheme_footer_links"] ?? null)) {
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 64
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["revtheme_footer_links"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["revtheme_footer_link"]) {
                        echo " 
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 65
                        echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["revtheme_footer_link"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["link"] ?? null) : null);
                        echo "\">";
                        echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["revtheme_footer_link"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["title"] ?? null) : null);
                        echo "</a>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revtheme_footer_link'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 66
                    echo " 
\t\t\t\t\t\t\t";
                }
                // line 67
                echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 69
            echo " 
\t\t\t\t\t";
            // line 70
            if (($context["revtheme_footer_socs"] ?? null)) {
                echo " 
\t\t\t\t\t\t";
                // line 71
                $context["class_footer_socs"] = "col-sm-12";
                // line 72
                echo "\t\t\t\t\t\t";
                if (((($context["informations"] ?? null) || ($context["revtheme_footer_links"] ?? null)) && ($context["revtheme_footer_socs"] ?? null))) {
                    echo " ";
                    $context["class_footer_socs"] = "col-sm-4";
                    echo " ";
                }
                echo " 
\t\t\t\t\t\t<div class=\"soc_s ";
                // line 73
                echo ($context["class_footer_socs"] ?? null);
                echo " col-xs-12 ";
                if (((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["setting_all_settings"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["mobile_header"] ?? null) : null) == "2")) {
                    echo "hidden-xs";
                }
                echo "\">
\t\t\t\t\t\t\t";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["revtheme_footer_socs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["revtheme_footer_soc"]) {
                    echo " 
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 75
                    echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["revtheme_footer_soc"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["link"] ?? null) : null);
                    echo "\" rel=\"nofollow\" target=\"_blank\"><i class=\"";
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["revtheme_footer_soc"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["image"] ?? null) : null);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["revtheme_footer_soc"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["title"] ?? null) : null);
                    echo "\"></i></a>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revtheme_footer_soc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 78
            echo " 
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 80
        echo " 
\t\t\t\t";
        // line 81
        if (((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["revtheme_custom_footer"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["status"] ?? null) : null) && ($context["is_desctope"] ?? null))) {
            echo " 
\t\t\t\t\t<div class=\"footer_cfs hidden-sm\">
\t\t\t\t\t\t";
            // line 83
            if ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["revtheme_custom_footer"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["cf_1_status"] ?? null) : null)) {
                echo " 
\t\t\t\t\t\t\t";
                // line 84
                if ((($context["revtheme_dop_menus_cf"] ?? null) || (twig_length_filter($this->env, ($context["cf_1_description"] ?? null)) > 15))) {
                    echo " 
\t\t\t\t\t\t\t\t<div ";
                    // line 85
                    echo ($context["cf_1_width"] ?? null);
                    echo ">
\t\t\t\t\t\t\t\t\t";
                    // line 86
                    if (($context["revtheme_dop_menus_cf"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 88
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["revtheme_dop_menus_cf"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["revtheme_dop_menu"]) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"zag_dm_cf_li\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"zag_dm_cf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 91
                            if (((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["revtheme_dop_menu"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[("href" . ($context["config_language_id"] ?? null))] ?? null) : null) != "")) {
                                // line 92
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["revtheme_dop_menu"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[("href" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                echo "\">";
                                if ((((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["revtheme_dop_menu"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["icontype"] ?? null) : null) == "iconka") && ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["revtheme_dop_menu"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["dop_menu_iconka_cf"] ?? null) : null) != ""))) {
                                    echo " <span class=\"am_category_image\"><i class=\"";
                                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["revtheme_dop_menu"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["dop_menu_iconka_cf"] ?? null) : null);
                                    echo "\"></i></span> ";
                                } else {
                                    echo " ";
                                    if ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["revtheme_dop_menu"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["dop_menu_image_cf"] ?? null) : null)) {
                                        echo " <span class=\"am_category_image\"><img src=\"";
                                        echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["revtheme_dop_menu"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["dop_menu_image_cf"] ?? null) : null);
                                        echo "\" alt=\"\"></span> ";
                                    }
                                    echo " ";
                                }
                                echo " ";
                                echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["revtheme_dop_menu"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                            } else {
                                // line 94
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                if ((((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["revtheme_dop_menu"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["icontype"] ?? null) : null) == "iconka") && ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["revtheme_dop_menu"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["dop_menu_iconka_cf"] ?? null) : null) != ""))) {
                                    echo " <span class=\"am_category_image\"><i class=\"";
                                    echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["revtheme_dop_menu"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["dop_menu_iconka_cf"] ?? null) : null);
                                    echo "\"></i></span> ";
                                } else {
                                    echo " ";
                                    if ((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["revtheme_dop_menu"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["dop_menu_image_cf"] ?? null) : null)) {
                                        echo " <span class=\"am_category_image\"><img src=\"";
                                        echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["revtheme_dop_menu"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["dop_menu_image_cf"] ?? null) : null);
                                        echo "\" alt=\"\"></span> ";
                                    }
                                    echo " ";
                                }
                                echo " ";
                                echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["revtheme_dop_menu"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 96
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 97
                            if (twig_get_attribute($this->env, $this->source, $context["revtheme_dop_menu"], "children", [], "array", true, true, false, 97)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled last_ul_cf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 99
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["revtheme_dop_menu"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["children"] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 101
                                    if (((($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["child"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b[("href" . ($context["config_language_id"] ?? null))] ?? null) : null) != "")) {
                                        // line 102
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["child"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[("href" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                        echo "\">";
                                        if ((((($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["child"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["icontype"] ?? null) : null) == "iconka") && ((($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["child"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["dop_menu_iconka_cf"] ?? null) : null) != ""))) {
                                            echo " <span class=\"am_category_image\"><i class=\"";
                                            echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["child"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["dop_menu_iconka_cf"] ?? null) : null);
                                            echo "\"></i></span> ";
                                        } else {
                                            echo " ";
                                            if ((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["child"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["dop_menu_image_cf"] ?? null) : null)) {
                                                echo " <span class=\"am_category_image\"><img src=\"";
                                                echo (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["child"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["dop_menu_image_cf"] ?? null) : null);
                                                echo "\" alt=\"\"></span> ";
                                            }
                                            echo " ";
                                        }
                                        echo " ";
                                        echo (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["child"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                                    } else {
                                        // line 104
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        if ((((($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["child"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["icontype"] ?? null) : null) == "iconka") && ((($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["child"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["dop_menu_iconka_cf"] ?? null) : null) != ""))) {
                                            echo " <span class=\"am_category_image\"><i class=\"";
                                            echo (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["child"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["dop_menu_iconka_cf"] ?? null) : null);
                                            echo "\"></i></span> ";
                                        } else {
                                            echo " ";
                                            if ((($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = $context["child"]) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["dop_menu_image_cf"] ?? null) : null)) {
                                                echo " <span class=\"am_category_image\"><img src=\"";
                                                echo (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = $context["child"]) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["dop_menu_image_cf"] ?? null) : null);
                                                echo "\" alt=\"\"></span> ";
                                            }
                                            echo " ";
                                        }
                                        echo " ";
                                        echo (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = $context["child"]) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 106
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 107
                                echo "  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 110
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revtheme_dop_menu'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 111
                        echo " 
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 114
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((twig_length_filter($this->env, ($context["cf_1_description"] ?? null)) > 15)) {
                        echo " ";
                        echo ($context["cf_1_description"] ?? null);
                        echo " ";
                    }
                    echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 116
                echo " 
\t\t\t\t\t\t";
            }
            // line 117
            echo "  
\t\t\t\t\t\t";
            // line 118
            if ((($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = ($context["revtheme_custom_footer"] ?? null)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["cf_2_status"] ?? null) : null)) {
                echo " 
\t\t\t\t\t\t\t";
                // line 119
                if ((($context["revtheme_dop_menus_cf_2"] ?? null) || (twig_length_filter($this->env, ($context["cf_2_description"] ?? null)) > 15))) {
                    echo " 
\t\t\t\t\t\t\t\t<div ";
                    // line 120
                    echo ($context["cf_2_width"] ?? null);
                    echo ">
\t\t\t\t\t\t\t\t\t";
                    // line 121
                    if (($context["revtheme_dop_menus_cf_2"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 123
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["revtheme_dop_menus_cf_2"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["revtheme_dop_menu"]) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"zag_dm_cf_li\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"zag_dm_cf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 126
                            if (((($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = $context["revtheme_dop_menu"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38[("href" . ($context["config_language_id"] ?? null))] ?? null) : null) != "")) {
                                // line 127
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                echo (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = $context["revtheme_dop_menu"]) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec[("href" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                echo "\">";
                                if ((((($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = $context["revtheme_dop_menu"]) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["icontype"] ?? null) : null) == "iconka") && ((($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = $context["revtheme_dop_menu"]) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["dop_menu_iconka_cf_2"] ?? null) : null) != ""))) {
                                    echo " <span class=\"am_category_image\"><i class=\"";
                                    echo (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = $context["revtheme_dop_menu"]) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["dop_menu_iconka_cf_2"] ?? null) : null);
                                    echo "\"></i></span> ";
                                } else {
                                    echo " ";
                                    if ((($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = $context["revtheme_dop_menu"]) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["dop_menu_image_cf_2"] ?? null) : null)) {
                                        echo " <span class=\"am_category_image\"><img src=\"";
                                        echo (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = $context["revtheme_dop_menu"]) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["dop_menu_image_cf_2"] ?? null) : null);
                                        echo "\" alt=\"\"></span> ";
                                    }
                                    echo " ";
                                }
                                echo " ";
                                echo (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = $context["revtheme_dop_menu"]) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                            } else {
                                // line 129
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                if ((((($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = $context["revtheme_dop_menu"]) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["icontype"] ?? null) : null) == "iconka") && ((($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = $context["revtheme_dop_menu"]) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["dop_menu_iconka_cf_2"] ?? null) : null) != ""))) {
                                    echo " <span class=\"am_category_image\"><i class=\"";
                                    echo (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = $context["revtheme_dop_menu"]) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["dop_menu_iconka_cf_2"] ?? null) : null);
                                    echo "\"></i></span> ";
                                } else {
                                    echo " ";
                                    if ((($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = $context["revtheme_dop_menu"]) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["dop_menu_image_cf_2"] ?? null) : null)) {
                                        echo " <span class=\"am_category_image\"><img src=\"";
                                        echo (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = $context["revtheme_dop_menu"]) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["dop_menu_image_cf_2"] ?? null) : null);
                                        echo "\" alt=\"\"></span> ";
                                    }
                                    echo " ";
                                }
                                echo " ";
                                echo (($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = $context["revtheme_dop_menu"]) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 131
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 132
                            if (twig_get_attribute($this->env, $this->source, $context["revtheme_dop_menu"], "children", [], "array", true, true, false, 132)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled last_ul_cf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 134
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = $context["revtheme_dop_menu"]) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["children"] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 136
                                    if (((($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = $context["child"]) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a[("href" . ($context["config_language_id"] ?? null))] ?? null) : null) != "")) {
                                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        // line 137
                                        echo (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = $context["child"]) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4[("href" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                        echo "\">";
                                        if ((((($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = $context["child"]) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["icontype"] ?? null) : null) == "iconka") && ((($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = $context["child"]) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["dop_menu_iconka_cf_2"] ?? null) : null) != ""))) {
                                            echo " <span class=\"am_category_image\"><i class=\"";
                                            echo (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = $context["child"]) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["dop_menu_iconka_cf_2"] ?? null) : null);
                                            echo "\"></i></span> ";
                                        } else {
                                            echo " ";
                                            if ((($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = $context["child"]) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["dop_menu_image_cf_2"] ?? null) : null)) {
                                                echo " <span class=\"am_category_image\"><img src=\"";
                                                echo (($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = $context["child"]) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["dop_menu_image_cf_2"] ?? null) : null);
                                                echo "\" alt=\"\"></span> ";
                                            }
                                            echo " ";
                                        }
                                        echo " ";
                                        echo (($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = $context["child"]) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                                    } else {
                                        // line 138
                                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 139
                                        if ((((($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = $context["child"]) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c["icontype"] ?? null) : null) == "iconka") && ((($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = $context["child"]) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["dop_menu_iconka_cf_2"] ?? null) : null) != ""))) {
                                            echo " <span class=\"am_category_image\"><i class=\"";
                                            echo (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = $context["child"]) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8["dop_menu_iconka_cf_2"] ?? null) : null);
                                            echo "\"></i></span> ";
                                        } else {
                                            echo " ";
                                            if ((($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = $context["child"]) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["dop_menu_image_cf_2"] ?? null) : null)) {
                                                echo " <span class=\"am_category_image\"><img src=\"";
                                                echo (($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = $context["child"]) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9["dop_menu_image_cf_2"] ?? null) : null);
                                                echo "\" alt=\"\"></span> ";
                                            }
                                            echo " ";
                                        }
                                        echo " ";
                                        echo (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = $context["child"]) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 140
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 142
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 144
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revtheme_dop_menu'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 146
                        echo " 
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 148
                    echo " 
\t\t\t\t\t\t\t\t\t";
                    // line 149
                    if ((twig_length_filter($this->env, ($context["cf_2_description"] ?? null)) > 15)) {
                        echo " ";
                        echo ($context["cf_2_description"] ?? null);
                        echo " ";
                    }
                    echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 151
                echo " 
\t\t\t\t\t\t";
            }
            // line 152
            echo " 
\t\t\t\t\t\t";
            // line 153
            if ((($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = ($context["revtheme_custom_footer"] ?? null)) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768["cf_3_status"] ?? null) : null)) {
                echo " 
\t\t\t\t\t\t\t";
                // line 154
                if ((($context["revtheme_dop_menus_cf_3"] ?? null) || (twig_length_filter($this->env, ($context["cf_3_description"] ?? null)) > 15))) {
                    echo " 
\t\t\t\t\t\t\t\t<div ";
                    // line 155
                    echo ($context["cf_3_width"] ?? null);
                    echo ">
\t\t\t\t\t\t\t\t\t";
                    // line 156
                    if (($context["revtheme_dop_menus_cf_3"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 158
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["revtheme_dop_menus_cf_3"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["revtheme_dop_menu"]) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"zag_dm_cf_li\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"zag_dm_cf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 161
                            if (((($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = $context["revtheme_dop_menu"]) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57[("href" . ($context["config_language_id"] ?? null))] ?? null) : null) != "")) {
                                // line 162
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                echo (($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = $context["revtheme_dop_menu"]) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898[("href" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                echo "\">";
                                if ((((($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = $context["revtheme_dop_menu"]) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["icontype"] ?? null) : null) == "iconka") && ((($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = $context["revtheme_dop_menu"]) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a["dop_menu_iconka_cf_3"] ?? null) : null) != ""))) {
                                    echo " <span class=\"am_category_image\"><i class=\"";
                                    echo (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = $context["revtheme_dop_menu"]) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3["dop_menu_iconka_cf_3"] ?? null) : null);
                                    echo "\"></i></span> ";
                                } else {
                                    echo " ";
                                    if ((($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = $context["revtheme_dop_menu"]) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4["dop_menu_image_cf_3"] ?? null) : null)) {
                                        echo " <span class=\"am_category_image\"><img src=\"";
                                        echo (($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = $context["revtheme_dop_menu"]) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9["dop_menu_image_cf_3"] ?? null) : null);
                                        echo "\" alt=\"\"></span> ";
                                    }
                                    echo " ";
                                }
                                echo " ";
                                echo (($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = $context["revtheme_dop_menu"]) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                            } else {
                                // line 163
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 164
                                if ((((($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = $context["revtheme_dop_menu"]) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416["icontype"] ?? null) : null) == "iconka") && ((($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = $context["revtheme_dop_menu"]) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e["dop_menu_iconka_cf_3"] ?? null) : null) != ""))) {
                                    echo " <span class=\"am_category_image\"><i class=\"";
                                    echo (($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = $context["revtheme_dop_menu"]) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f["dop_menu_iconka_cf_3"] ?? null) : null);
                                    echo "\"></i></span> ";
                                } else {
                                    echo " ";
                                    if ((($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = $context["revtheme_dop_menu"]) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b["dop_menu_image_cf_3"] ?? null) : null)) {
                                        echo " <span class=\"am_category_image\"><img src=\"";
                                        echo (($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = $context["revtheme_dop_menu"]) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75["dop_menu_image_cf_3"] ?? null) : null);
                                        echo "\" alt=\"\"></span> ";
                                    }
                                    echo " ";
                                }
                                echo " ";
                                echo (($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = $context["revtheme_dop_menu"]) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 165
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 167
                            if (twig_get_attribute($this->env, $this->source, $context["revtheme_dop_menu"], "children", [], "array", true, true, false, 167)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled last_ul_cf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 169
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = $context["revtheme_dop_menu"]) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1["children"] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 171
                                    if (((($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = $context["child"]) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24[("href" . ($context["config_language_id"] ?? null))] ?? null) : null) != "")) {
                                        // line 172
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        echo (($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = $context["child"]) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850[("href" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                        echo "\">";
                                        if ((((($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = $context["child"]) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34["icontype"] ?? null) : null) == "iconka") && ((($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = $context["child"]) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df["dop_menu_iconka_cf_3"] ?? null) : null) != ""))) {
                                            echo " <span class=\"am_category_image\"><i class=\"";
                                            echo (($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = $context["child"]) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4["dop_menu_iconka_cf_3"] ?? null) : null);
                                            echo "\"></i></span> ";
                                        } else {
                                            echo " ";
                                            if ((($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = $context["child"]) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36["dop_menu_image_cf_3"] ?? null) : null)) {
                                                echo " <span class=\"am_category_image\"><img src=\"";
                                                echo (($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = $context["child"]) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b["dop_menu_image_cf_3"] ?? null) : null);
                                                echo "\" alt=\"\"></span> ";
                                            }
                                            echo " ";
                                        }
                                        echo " ";
                                        echo (($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e = $context["child"]) && is_array($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e) || $__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e instanceof ArrayAccess ? ($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                                    } else {
                                        // line 173
                                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 174
                                        if ((((($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 = $context["child"]) && is_array($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7) || $__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 instanceof ArrayAccess ? ($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7["icontype"] ?? null) : null) == "iconka") && ((($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 = $context["child"]) && is_array($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606) || $__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 instanceof ArrayAccess ? ($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606["dop_menu_iconka_cf_3"] ?? null) : null) != ""))) {
                                            echo " <span class=\"am_category_image\"><i class=\"";
                                            echo (($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd = $context["child"]) && is_array($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd) || $__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd instanceof ArrayAccess ? ($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd["dop_menu_iconka_cf_3"] ?? null) : null);
                                            echo "\"></i></span> ";
                                        } else {
                                            echo " ";
                                            if ((($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e = $context["child"]) && is_array($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e) || $__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e instanceof ArrayAccess ? ($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e["dop_menu_image_cf_3"] ?? null) : null)) {
                                                echo " <span class=\"am_category_image\"><img src=\"";
                                                echo (($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 = $context["child"]) && is_array($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1) || $__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 instanceof ArrayAccess ? ($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1["dop_menu_image_cf_3"] ?? null) : null);
                                                echo "\" alt=\"\"></span> ";
                                            }
                                            echo " ";
                                        }
                                        echo " ";
                                        echo (($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb = $context["child"]) && is_array($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb) || $__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb instanceof ArrayAccess ? ($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 176
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 177
                                echo "  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 179
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revtheme_dop_menu'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 181
                        echo " 
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 183
                    echo " 
\t\t\t\t\t\t\t\t\t";
                    // line 184
                    if ((twig_length_filter($this->env, ($context["cf_3_description"] ?? null)) > 15)) {
                        echo " ";
                        echo ($context["cf_3_description"] ?? null);
                        echo " ";
                    }
                    echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 186
                echo " 
\t\t\t\t\t\t";
            }
            // line 187
            echo " 
\t\t\t\t\t\t";
            // line 188
            if ((($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf = ($context["revtheme_custom_footer"] ?? null)) && is_array($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf) || $__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf instanceof ArrayAccess ? ($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf["cf_4_status"] ?? null) : null)) {
                echo " 
\t\t\t\t\t\t\t";
                // line 189
                if ((($context["revtheme_dop_menus_cf_4"] ?? null) || (twig_length_filter($this->env, ($context["cf_4_description"] ?? null)) > 15))) {
                    echo " 
\t\t\t\t\t\t\t\t<div ";
                    // line 190
                    echo ($context["cf_4_width"] ?? null);
                    echo ">
\t\t\t\t\t\t\t\t\t";
                    // line 191
                    if (($context["revtheme_dop_menus_cf_4"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 193
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["revtheme_dop_menus_cf_4"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["revtheme_dop_menu"]) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"zag_dm_cf_li\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"zag_dm_cf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 196
                            if (((($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b = $context["revtheme_dop_menu"]) && is_array($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b) || $__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b instanceof ArrayAccess ? ($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b[("href" . ($context["config_language_id"] ?? null))] ?? null) : null) != "")) {
                                // line 197
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                echo (($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 = $context["revtheme_dop_menu"]) && is_array($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980) || $__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 instanceof ArrayAccess ? ($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980[("href" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                echo "\">";
                                if ((((($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 = $context["revtheme_dop_menu"]) && is_array($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345) || $__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 instanceof ArrayAccess ? ($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345["icontype"] ?? null) : null) == "iconka") && ((($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 = $context["revtheme_dop_menu"]) && is_array($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3) || $__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 instanceof ArrayAccess ? ($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3["dop_menu_iconka_cf_4"] ?? null) : null) != ""))) {
                                    echo " <span class=\"am_category_image\"><i class=\"";
                                    echo (($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 = $context["revtheme_dop_menu"]) && is_array($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0) || $__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 instanceof ArrayAccess ? ($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0["dop_menu_iconka_cf_4"] ?? null) : null);
                                    echo "\"></i></span> ";
                                } else {
                                    echo " ";
                                    if ((($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 = $context["revtheme_dop_menu"]) && is_array($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938) || $__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 instanceof ArrayAccess ? ($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938["dop_menu_image_cf_4"] ?? null) : null)) {
                                        echo " <span class=\"am_category_image\"><img src=\"";
                                        echo (($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 = $context["revtheme_dop_menu"]) && is_array($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3) || $__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 instanceof ArrayAccess ? ($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3["dop_menu_image_cf_4"] ?? null) : null);
                                        echo "\" alt=\"\"></span> ";
                                    }
                                    echo " ";
                                }
                                echo " ";
                                echo (($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa = $context["revtheme_dop_menu"]) && is_array($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa) || $__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa instanceof ArrayAccess ? ($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                            } else {
                                // line 198
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 199
                                if ((((($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb = $context["revtheme_dop_menu"]) && is_array($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb) || $__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb instanceof ArrayAccess ? ($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb["icontype"] ?? null) : null) == "iconka") && ((($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c = $context["revtheme_dop_menu"]) && is_array($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c) || $__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c instanceof ArrayAccess ? ($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c["dop_menu_iconka_cf_4"] ?? null) : null) != ""))) {
                                    echo " <span class=\"am_category_image\"><i class=\"";
                                    echo (($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a = $context["revtheme_dop_menu"]) && is_array($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a) || $__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a instanceof ArrayAccess ? ($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a["dop_menu_iconka_cf_4"] ?? null) : null);
                                    echo "\"></i></span> ";
                                } else {
                                    echo " ";
                                    if ((($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 = $context["revtheme_dop_menu"]) && is_array($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6) || $__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 instanceof ArrayAccess ? ($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6["dop_menu_image_cf_4"] ?? null) : null)) {
                                        echo " <span class=\"am_category_image\"><img src=\"";
                                        echo (($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b = $context["revtheme_dop_menu"]) && is_array($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b) || $__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b instanceof ArrayAccess ? ($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b["dop_menu_image_cf_4"] ?? null) : null);
                                        echo "\" alt=\"\"></span> ";
                                    }
                                    echo " ";
                                }
                                echo " ";
                                echo (($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 = $context["revtheme_dop_menu"]) && is_array($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526) || $__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 instanceof ArrayAccess ? ($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 200
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 202
                            if (twig_get_attribute($this->env, $this->source, $context["revtheme_dop_menu"], "children", [], "array", true, true, false, 202)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled last_ul_cf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 204
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f = $context["revtheme_dop_menu"]) && is_array($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f) || $__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f instanceof ArrayAccess ? ($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f["children"] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 206
                                    if (((($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c = $context["child"]) && is_array($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c) || $__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c instanceof ArrayAccess ? ($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c[("href" . ($context["config_language_id"] ?? null))] ?? null) : null) != "")) {
                                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        // line 207
                                        echo (($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 = $context["child"]) && is_array($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74) || $__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 instanceof ArrayAccess ? ($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74[("href" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                        echo "\">";
                                        if ((((($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff = $context["child"]) && is_array($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff) || $__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff instanceof ArrayAccess ? ($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff["icontype"] ?? null) : null) == "iconka") && ((($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 = $context["child"]) && is_array($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918) || $__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 instanceof ArrayAccess ? ($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918["dop_menu_iconka_cf_4"] ?? null) : null) != ""))) {
                                            echo " <span class=\"am_category_image\"><i class=\"";
                                            echo (($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 = $context["child"]) && is_array($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5) || $__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 instanceof ArrayAccess ? ($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5["dop_menu_iconka_cf_4"] ?? null) : null);
                                            echo "\"></i></span> ";
                                        } else {
                                            echo " ";
                                            if ((($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 = $context["child"]) && is_array($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219) || $__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 instanceof ArrayAccess ? ($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219["dop_menu_image_cf_4"] ?? null) : null)) {
                                                echo " <span class=\"am_category_image\"><img src=\"";
                                                echo (($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 = $context["child"]) && is_array($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20) || $__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 instanceof ArrayAccess ? ($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20["dop_menu_image_cf_4"] ?? null) : null);
                                                echo "\" alt=\"\"></span> ";
                                            }
                                            echo " ";
                                        }
                                        echo " ";
                                        echo (($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 = $context["child"]) && is_array($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16) || $__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 instanceof ArrayAccess ? ($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                                    } else {
                                        // line 208
                                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 209
                                        if ((((($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 = $context["child"]) && is_array($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0) || $__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 instanceof ArrayAccess ? ($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0["icontype"] ?? null) : null) == "iconka") && ((($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 = $context["child"]) && is_array($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1) || $__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 instanceof ArrayAccess ? ($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1["dop_menu_iconka_cf_4"] ?? null) : null) != ""))) {
                                            echo " <span class=\"am_category_image\"><i class=\"";
                                            echo (($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 = $context["child"]) && is_array($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008) || $__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 instanceof ArrayAccess ? ($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008["dop_menu_iconka_cf_4"] ?? null) : null);
                                            echo "\"></i></span> ";
                                        } else {
                                            echo " ";
                                            if ((($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 = $context["child"]) && is_array($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00) || $__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 instanceof ArrayAccess ? ($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00["dop_menu_image_cf_4"] ?? null) : null)) {
                                                echo " <span class=\"am_category_image\"><img src=\"";
                                                echo (($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 = $context["child"]) && is_array($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315) || $__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 instanceof ArrayAccess ? ($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315["dop_menu_image_cf_4"] ?? null) : null);
                                                echo "\" alt=\"\"></span> ";
                                            }
                                            echo " ";
                                        }
                                        echo " ";
                                        echo (($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb = $context["child"]) && is_array($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb) || $__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb instanceof ArrayAccess ? ($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 211
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 212
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 214
                            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revtheme_dop_menu'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 216
                        echo " 
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 218
                    echo "  
\t\t\t\t\t\t\t\t\t";
                    // line 219
                    if ((twig_length_filter($this->env, ($context["cf_4_description"] ?? null)) > 15)) {
                        echo " ";
                        echo ($context["cf_4_description"] ?? null);
                        echo " ";
                    }
                    echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 221
                echo "  
\t\t\t\t\t\t";
            }
            // line 222
            echo "  
\t\t\t\t\t\t";
            // line 223
            if ((($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde = ($context["revtheme_custom_footer"] ?? null)) && is_array($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde) || $__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde instanceof ArrayAccess ? ($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde["cf_5_status"] ?? null) : null)) {
                echo " 
\t\t\t\t\t\t\t";
                // line 224
                if ((($context["revtheme_dop_menus_cf_5"] ?? null) || (twig_length_filter($this->env, ($context["cf_5_description"] ?? null)) > 15))) {
                    echo " 
\t\t\t\t\t\t\t\t<div ";
                    // line 225
                    echo ($context["cf_5_width"] ?? null);
                    echo ">
\t\t\t\t\t\t\t\t\t";
                    // line 226
                    if (($context["revtheme_dop_menus_cf_5"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 228
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["revtheme_dop_menus_cf_5"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["revtheme_dop_menu"]) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"zag_dm_cf_li\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"zag_dm_cf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 231
                            if (((($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 = $context["revtheme_dop_menu"]) && is_array($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5) || $__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 instanceof ArrayAccess ? ($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5[("href" . ($context["config_language_id"] ?? null))] ?? null) : null) != "")) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 232
                                echo (($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f = $context["revtheme_dop_menu"]) && is_array($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f) || $__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f instanceof ArrayAccess ? ($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f[("href" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                echo "\">";
                                if ((((($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b = $context["revtheme_dop_menu"]) && is_array($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b) || $__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b instanceof ArrayAccess ? ($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b["icontype"] ?? null) : null) == "iconka") && ((($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d = $context["revtheme_dop_menu"]) && is_array($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d) || $__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d instanceof ArrayAccess ? ($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d["dop_menu_iconka_cf_5"] ?? null) : null) != ""))) {
                                    echo " <span class=\"am_category_image\"><i class=\"";
                                    echo (($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d = $context["revtheme_dop_menu"]) && is_array($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d) || $__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d instanceof ArrayAccess ? ($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d["dop_menu_iconka_cf_5"] ?? null) : null);
                                    echo "\"></i></span> ";
                                } else {
                                    echo " ";
                                    if ((($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 = $context["revtheme_dop_menu"]) && is_array($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2) || $__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 instanceof ArrayAccess ? ($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2["dop_menu_image_cf_5"] ?? null) : null)) {
                                        echo " <span class=\"am_category_image\"><img src=\"";
                                        echo (($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 = $context["revtheme_dop_menu"]) && is_array($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6) || $__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 instanceof ArrayAccess ? ($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6["dop_menu_image_cf_5"] ?? null) : null);
                                        echo "\" alt=\"\"></span> ";
                                    }
                                    echo " ";
                                }
                                echo " ";
                                echo (($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a = $context["revtheme_dop_menu"]) && is_array($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a) || $__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a instanceof ArrayAccess ? ($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                            } else {
                                // line 233
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 234
                                if ((((($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee = $context["revtheme_dop_menu"]) && is_array($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee) || $__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee instanceof ArrayAccess ? ($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee["icontype"] ?? null) : null) == "iconka") && ((($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 = $context["revtheme_dop_menu"]) && is_array($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523) || $__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 instanceof ArrayAccess ? ($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523["dop_menu_iconka_cf_5"] ?? null) : null) != ""))) {
                                    echo " <span class=\"am_category_image\"><i class=\"";
                                    echo (($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc = $context["revtheme_dop_menu"]) && is_array($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc) || $__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc instanceof ArrayAccess ? ($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc["dop_menu_iconka_cf_5"] ?? null) : null);
                                    echo "\"></i></span> ";
                                } else {
                                    echo " ";
                                    if ((($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a = $context["revtheme_dop_menu"]) && is_array($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a) || $__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a instanceof ArrayAccess ? ($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a["dop_menu_image_cf_5"] ?? null) : null)) {
                                        echo " <span class=\"am_category_image\"><img src=\"";
                                        echo (($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f = $context["revtheme_dop_menu"]) && is_array($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f) || $__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f instanceof ArrayAccess ? ($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f["dop_menu_image_cf_5"] ?? null) : null);
                                        echo "\" alt=\"\"></span> ";
                                    }
                                    echo " ";
                                }
                                echo " ";
                                echo (($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d = $context["revtheme_dop_menu"]) && is_array($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d) || $__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d instanceof ArrayAccess ? ($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 235
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 237
                            if (twig_get_attribute($this->env, $this->source, $context["revtheme_dop_menu"], "children", [], "array", true, true, false, 237)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled last_ul_cf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 239
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e = $context["revtheme_dop_menu"]) && is_array($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e) || $__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e instanceof ArrayAccess ? ($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e["children"] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 241
                                    if (((($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81 = $context["child"]) && is_array($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81) || $__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81 instanceof ArrayAccess ? ($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81[("href" . ($context["config_language_id"] ?? null))] ?? null) : null) != "")) {
                                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        // line 242
                                        echo (($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d = $context["child"]) && is_array($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d) || $__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d instanceof ArrayAccess ? ($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d[("href" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                        echo "\">";
                                        if ((((($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786 = $context["child"]) && is_array($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786) || $__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786 instanceof ArrayAccess ? ($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786["icontype"] ?? null) : null) == "iconka") && ((($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4 = $context["child"]) && is_array($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4) || $__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4 instanceof ArrayAccess ? ($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4["dop_menu_iconka_cf_5"] ?? null) : null) != ""))) {
                                            echo " <span class=\"am_category_image\"><i class=\"";
                                            echo (($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1 = $context["child"]) && is_array($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1) || $__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1 instanceof ArrayAccess ? ($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1["dop_menu_iconka_cf_5"] ?? null) : null);
                                            echo "\"></i></span> ";
                                        } else {
                                            echo " ";
                                            if ((($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc = $context["child"]) && is_array($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc) || $__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc instanceof ArrayAccess ? ($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc["dop_menu_image_cf_5"] ?? null) : null)) {
                                                echo " <span class=\"am_category_image\"><img src=\"";
                                                echo (($__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6 = $context["child"]) && is_array($__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6) || $__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6 instanceof ArrayAccess ? ($__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6["dop_menu_image_cf_5"] ?? null) : null);
                                                echo "\" alt=\"\"></span> ";
                                            }
                                            echo " ";
                                        }
                                        echo " ";
                                        echo (($__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181 = $context["child"]) && is_array($__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181) || $__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181 instanceof ArrayAccess ? ($__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                                    } else {
                                        // line 243
                                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 244
                                        if ((((($__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9 = $context["child"]) && is_array($__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9) || $__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9 instanceof ArrayAccess ? ($__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9["icontype"] ?? null) : null) == "iconka") && ((($__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af = $context["child"]) && is_array($__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af) || $__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af instanceof ArrayAccess ? ($__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af["dop_menu_iconka_cf_5"] ?? null) : null) != ""))) {
                                            echo " <span class=\"am_category_image\"><i class=\"";
                                            echo (($__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab = $context["child"]) && is_array($__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab) || $__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab instanceof ArrayAccess ? ($__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab["dop_menu_iconka_cf_5"] ?? null) : null);
                                            echo "\"></i></span> ";
                                        } else {
                                            echo " ";
                                            if ((($__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94 = $context["child"]) && is_array($__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94) || $__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94 instanceof ArrayAccess ? ($__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94["dop_menu_image_cf_5"] ?? null) : null)) {
                                                echo " <span class=\"am_category_image\"><img src=\"";
                                                echo (($__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c = $context["child"]) && is_array($__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c) || $__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c instanceof ArrayAccess ? ($__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c["dop_menu_image_cf_5"] ?? null) : null);
                                                echo "\" alt=\"\"></span> ";
                                            }
                                            echo " ";
                                        }
                                        echo " ";
                                        echo (($__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd = $context["child"]) && is_array($__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd) || $__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd instanceof ArrayAccess ? ($__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd[("name" . ($context["config_language_id"] ?? null))] ?? null) : null);
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 245
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 247
                                echo "  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 249
                            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revtheme_dop_menu'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 251
                        echo "  
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 253
                    echo "  
\t\t\t\t\t\t\t\t\t";
                    // line 254
                    if ((twig_length_filter($this->env, ($context["cf_5_description"] ?? null)) > 15)) {
                        echo " ";
                        echo ($context["cf_5_description"] ?? null);
                        echo " ";
                    }
                    echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 256
                echo "  
\t\t\t\t\t\t";
            }
            // line 257
            echo "  
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 259
        echo "  
\t\t\t\t";
        // line 260
        if (($context["revtheme_footer_icons"] ?? null)) {
            echo " 
\t\t\t\t\t";
            // line 261
            $context["style_powered"] = "text-align:right";
            echo " ";
            $context["class_powered"] = "col-sm-6";
            // line 262
            echo "\t\t\t\t\t<div class=\"ficons col-sm-6 col-xs-12\">
\t\t\t\t\t\t";
            // line 263
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["revtheme_footer_icons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["revtheme_footer_icon"]) {
                echo " 
\t\t\t\t\t\t\t<span class=\"revtheme_footer_icon\">
\t\t\t\t\t\t\t\t";
                // line 265
                if ((twig_get_attribute($this->env, $this->source, $context["revtheme_footer_icon"], "href", [], "array", true, true, false, 265) && ((($__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0 = $context["revtheme_footer_icon"]) && is_array($__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0) || $__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0 instanceof ArrayAccess ? ($__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0["href"] ?? null) : null) != ""))) {
                    echo " 
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 266
                    echo (($__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b = $context["revtheme_footer_icon"]) && is_array($__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b) || $__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b instanceof ArrayAccess ? ($__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b["href"] ?? null) : null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 267
                    echo (($__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070 = $context["revtheme_footer_icon"]) && is_array($__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070) || $__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070 instanceof ArrayAccess ? ($__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070["image"] ?? null) : null);
                    echo "\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 269
                    echo " 
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 270
                    echo (($__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf = $context["revtheme_footer_icon"]) && is_array($__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf) || $__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf instanceof ArrayAccess ? ($__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf["image"] ?? null) : null);
                    echo "\" alt=\"\"/>
\t\t\t\t\t\t\t\t";
                }
                // line 271
                echo " 
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revtheme_footer_icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 273
            echo " 
\t\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 275
            echo " 
\t\t\t\t\t";
            // line 276
            $context["style_powered"] = "text-align:left";
            echo " ";
            $context["class_powered"] = "col-sm-12";
            // line 277
            echo "\t\t\t\t";
        }
        echo " 
\t\t\t\t<div style=\"";
        // line 278
        echo ($context["style_powered"] ?? null);
        echo "\" class=\"powered ";
        echo ($context["class_powered"] ?? null);
        echo " col-xs-12\">";
        echo ($context["powered"] ?? null);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>\t
</footer>
";
        // line 283
        if (( !(($__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e = ($context["setting_all_settings"] ?? null)) && is_array($__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e) || $__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e instanceof ArrayAccess ? ($__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e["all_document_width"] ?? null) : null) &&  !(($__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4 = ($context["setting_all_settings"] ?? null)) && is_array($__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4) || $__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4 instanceof ArrayAccess ? ($__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4["all_document_h_f_width"] ?? null) : null))) {
            echo " 
</div>
";
        }
        // line 285
        echo " 
</div>
";
        // line 287
        if (($context["popup_phone"] ?? null)) {
            echo " 
\t<div class=\"popup-phone-wrapper\" data-toggle=\"tooltip\" data-placement=\"left\"  title=\"";
            // line 288
            echo ($context["text_footer_popup_phone_tooltip"] ?? null);
            echo "\">
\t\t<span class=\"scroll-top-inner\">
\t\t\t<i class=\"fa fa-phone\"></i>
\t\t</span>
\t</div>
";
        }
        // line 293
        echo " 
";
        // line 294
        if (($context["in_top"] ?? null)) {
            echo " 
\t<div class=\"scroll-top-wrapper \">
\t\t<span class=\"scroll-top-inner\">
\t\t\t<i class=\"fa fa-arrow-circle-up\"></i>
\t\t</span>
\t</div>
";
        }
        // line 300
        echo " 
";
        // line 301
        if ( !(($__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825 = ($context["setting_all_settings"] ?? null)) && is_array($__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825) || $__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825 instanceof ArrayAccess ? ($__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825["minif_on"] ?? null) : null)) {
            echo " 
\t<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\"></script>
\t<script src=\"catalog/view/javascript/revolution/common.js\"></script>
\t";
            // line 304
            if ((($__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308 = ($context["setting_all_settings"] ?? null)) && is_array($__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308) || $__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308 instanceof ArrayAccess ? ($__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308["all_document_snow_on"] ?? null) : null)) {
                echo " 
\t\t<script src=\"catalog/view/javascript/revolution/snow.min.js\"></script>
\t";
            }
            // line 306
            echo " 
\t";
            // line 307
            if (((($__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb = ($context["setting_all_settings"] ?? null)) && is_array($__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb) || $__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb instanceof ArrayAccess ? ($__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb["mobile_header"] ?? null) : null) == "2")) {
                echo "  
\t\t<script src=\"catalog/view/javascript/revolution/jquery.mmenu.js\"></script>
\t";
            }
            // line 309
            echo " 
\t<script src=\"catalog/view/javascript/revolution/js_change.js\"></script>
";
        } else {
            // line 311
            echo " 
\t<script src=\"catalog/view/javascript/revolution/javascript_min.js\"></script>
";
        }
        // line 313
        echo " 
<script><!--
\t";
        // line 315
        if (( !(($__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7 = ($context["revtheme_filter"] ?? null)) && is_array($__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7) || $__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7 instanceof ArrayAccess ? ($__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7["status"] ?? null) : null) || ($context["revfilter_route"] ?? null))) {
            echo " 
\t\t";
            // line 316
            if (((($__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9 = ($context["setting_catalog_all"] ?? null)) && is_array($__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9) || $__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9 instanceof ArrayAccess ? ($__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9["pagination"] ?? null) : null) != "standart")) {
                echo " 
\t\t\t";
                // line 317
                if (((($__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446 = ($context["setting_catalog_all"] ?? null)) && is_array($__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446) || $__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446 instanceof ArrayAccess ? ($__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446["pagination"] ?? null) : null) == "standart_knopka")) {
                    echo " 
\t\t\tvar button_more = true; var pagination_exist = true; var autoscroll = false;
\t\t\t";
                } elseif (((($__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d =                 // line 319
($context["setting_catalog_all"] ?? null)) && is_array($__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d) || $__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d instanceof ArrayAccess ? ($__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d["pagination"] ?? null) : null) == "auto")) {
                    echo " 
\t\t\tvar button_more = false; var pagination_exist = true; var autoscroll = true;
\t\t\t";
                } else {
                    // line 321
                    echo " 
\t\t\tvar button_more = true; var pagination_exist = false; var autoscroll = false;
\t\t\t";
                }
                // line 323
                echo " 
\t\t\tvar window_height = 0; var product_block_offset = 0; var product_block = '.row > .product-layout'; var pages_count = 0; var pages = [];
\t\t\tfunction gettNextProductPage(pages, pages_count) {
\t\t\t\tif (pages_count >= pages.length) return;
\t\t\t\tmasked('.row > .product-layout > .product-thumb', true);
\t\t\t\t\$.ajax({
\t\t\t\t\turl:pages[pages_count], 
\t\t\t\t\ttype:\"GET\", 
\t\t\t\t\tdata:'',
\t\t\t\t\tbeforeSend: function(){
\t\t\t\t\t\t\$('.load_more .fa-refresh').addClass('fa-spin');
\t\t\t\t\t},
\t\t\t\t\tsuccess:function (data) {
\t\t\t\t\t\t\$data = \$(data);
\t\t\t\t\t\tmasked('.row > .product-layout > .product-thumb', false);
\t\t\t\t\t\t\$data.find('.row > .product-layout > .product-thumb').addClass('op_dblock1');
\t\t\t\t\t\tif (\$data) {
\t\t\t\t\t\t\tif (localStorage.getItem('display') == 'list') {
\t\t\t\t\t\t\t\t\$(product_block).parent().append(\$data.find('#content .product-layout').parent().html());
\t\t\t\t\t\t\t\tlist_view();
\t\t\t\t\t\t\t\tif (product_block == '.product-grid') {grid_view();};
\t\t\t\t\t\t\t} else if (localStorage.getItem('display') == 'price') {
\t\t\t\t\t\t\t\t\$(product_block).parent().append(\$data.find('#content .product-layout').parent().html());
\t\t\t\t\t\t\t\tprice_view();
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\$(product_block).parent().append(\$data.find('#content .product-layout').parent().html());
\t\t\t\t\t\t\t\tgrid_view();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif (pagination_exist) {
\t\t\t\t\t\t\t\t\$('.pagination').html(\$data.find('.pagination'));
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\$('.load_more .fa-refresh').removeClass('fa-spin').css('hover');
\t\t\t\t\t\t\tif (pages_count+1 >= pages.length) {\$('.load_more').hide();};
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\t\$('.row > .product-layout > .product-thumb').removeClass('op_dblock1').addClass('op_dblock2');
\t\t\t\t\t\t\t}, 220)
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t\t\$(document).ready(function(){
\t\t\t\twindow_height = \$(window).height();
\t\t\t\tvar button_more_block = \$('#load_more').html();
\t\t\t\tif (\$(product_block).length > 0) {
\t\t\t\t\tproduct_block_offset = \$(product_block).offset().top;
\t\t\t\t\tvar href = \$('.pagination').find('li:last a').attr('href');
\t\t\t\t\t\$('.pagination').each(function(){
\t\t\t\t\t\tif (href) {
\t\t\t\t\t\t\tTotalPages = href.substring(href.indexOf(\"page=\")+5);
\t\t\t\t\t\t\tFirst_index = \$(this).find('li.active span').html();
\t\t\t\t\t\t\ti = parseInt(First_index) + 1;
\t\t\t\t\t\t\twhile (i <= TotalPages) {
\t\t\t\t\t\t\t\tpages.push(href.substring(0,href.indexOf(\"page=\")+5) + i);
\t\t\t\t\t\t\t\ti++;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}\t\t
\t\t\t\t\t});\t
\t\t\t\t\tif (button_more && href) {
\t\t\t\t\t\t\$('.pagination').parent().parent().before(button_more_block);
\t\t\t\t\t\tif (!pagination_exist) {
\t\t\t\t\t\t\t\$('.pagpages').addClass('dnone');
\t\t\t\t\t\t}
\t\t\t\t\t\t\$(\".load_more\").click(function(event) {
\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\tgettNextProductPage(pages, pages_count);
\t\t\t\t\t\t\tpages_count++;
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\tif (pages_count > 0) {
\t\t\t\t\t\t\t\t\tvar \$next = \$(\".pagpages .pagination li.active\").next(\"li\").children(\"a\");
\t\t\t\t\t\t\t\t\tif (\$next.length == 0) return;
\t\t\t\t\t\t\t\t\t\$.get(\$next.attr(\"href\"), function(data) {
\t\t\t\t\t\t\t\t\t\t\$data = \$(data);
\t\t\t\t\t\t\t\t\t\tvar pag = \$data.find(\".pagpages > *\");
\t\t\t\t\t\t\t\t\t\tvar pag2 = pag.filter(\".text-right\").html();
\t\t\t\t\t\t\t\t\t\tvar pag_ch =  pag2.substr(0,pag2.indexOf(\" по\")).replace(/[^\\d.]/ig, '');
\t\t\t\t\t\t\t\t\t\tpag2 = pag2.replace(pag_ch, \"1\");
\t\t\t\t\t\t\t\t\t\t\$(\".pagpages\").html(pag);
\t\t\t\t\t\t\t\t\t\t\$(\".pagpages .text-right\").html(pag2);
\t\t\t\t\t\t\t\t\t\t\$(\".owlproduct\").not(\".owl-theme\").owlCarousel({
\t\t\t\t\t\t\t\t\t\t\tbeforeInit: true,
\t\t\t\t\t\t\t\t\t\t\titems: 1,
\t\t\t\t\t\t\t\t\t\t\tsingleItem: true,
\t\t\t\t\t\t\t\t\t\t\tmouseDrag: false,
\t\t\t\t\t\t\t\t\t\t\tautoPlay: false,
\t\t\t\t\t\t\t\t\t\t\tnavigation: true,
\t\t\t\t\t\t\t\t\t\t\tnavigationText: ['<i class=\"fa fa-chevron-left fa-3x\"></i>', '<i class=\"fa fa-chevron-right fa-3x\"></i>'],
\t\t\t\t\t\t\t\t\t\t\tpagination: false
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t}, \"html\")
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}, 350);
\t\t\t\t\t\t});
\t\t\t\t\t} else if (autoscroll) {
\t\t\t\t\t\t\$('.pagpages .pagination').hide();
\t\t\t\t\t\tautoscroll_loading = false;
\t\t\t\t\t\t\$(window).scroll(function() {
\t\t\t\t\t\t\tif(inZone('.pagpages') && !autoscroll_loading) {
\t\t\t\t\t\t\t\tautoscroll_loading = true;
\t\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\t\tgettNextProductPage(pages, pages_count);
\t\t\t\t\t\t\t\t\tpages_count++;
\t\t\t\t\t\t\t\t\tif (pages_count > 0) {
\t\t\t\t\t\t\t\t\t\tvar \$next = \$(\".pagpages .pagination li.active\").next(\"li\").children(\"a\");
\t\t\t\t\t\t\t\t\t\tif (\$next.length == 0) return;
\t\t\t\t\t\t\t\t\t\t\$.get(\$next.attr(\"href\"), function(data) {
\t\t\t\t\t\t\t\t\t\t\t\$data = \$(data);
\t\t\t\t\t\t\t\t\t\t\tvar pag = \$data.find(\".pagpages > *\");
\t\t\t\t\t\t\t\t\t\t\tvar pag2 = pag.filter(\".text-right\").html();
\t\t\t\t\t\t\t\t\t\t\tvar pag_ch =  pag2.substr(0,pag2.indexOf(\" по\")).replace(/[^\\d.]/ig, '');
\t\t\t\t\t\t\t\t\t\t\tpag2 = pag2.replace(pag_ch, \"1\");
\t\t\t\t\t\t\t\t\t\t\t\$(\".pagpages .text-right\").html(pag2);
\t\t\t\t\t\t\t\t\t\t\t\$(\".owlproduct\").not(\".owl-theme\").owlCarousel({
\t\t\t\t\t\t\t\t\t\t\t\tbeforeInit: true,
\t\t\t\t\t\t\t\t\t\t\t\titems: 1,
\t\t\t\t\t\t\t\t\t\t\t\tsingleItem: true,
\t\t\t\t\t\t\t\t\t\t\t\tmouseDrag: false,
\t\t\t\t\t\t\t\t\t\t\t\tautoPlay: false,
\t\t\t\t\t\t\t\t\t\t\t\tnavigation: true,
\t\t\t\t\t\t\t\t\t\t\t\tnavigationText: ['<i class=\"fa fa-chevron-left fa-3x\"></i>', '<i class=\"fa fa-chevron-right fa-3x\"></i>'],
\t\t\t\t\t\t\t\t\t\t\t\tpagination: false
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\tautoscroll_loading = false;
\t\t\t\t\t\t\t\t\t\t}, \"html\")
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}, 350);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t\tfunction inZone(el){
\t\t\t\tif(\$(el).length) {
\t\t\t\t\tvar scrollTop = \$(window).scrollTop();
\t\t\t\t\tvar windowHeight = \$(window).height();
\t\t\t\t\tvar offset = \$(el).offset();
\t\t\t\t\tif(scrollTop <= offset.top && (\$(el).height() + offset.top) < (scrollTop + windowHeight))
\t\t\t\t\treturn true;
\t\t\t\t};
\t\t\t\treturn false;
\t\t\t}
\t\t";
            }
            // line 463
            echo " 
\t";
        }
        // line 464
        echo " 
\t";
        // line 465
        if ((($__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e = ($context["revtheme_filter"] ?? null)) && is_array($__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e) || $__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e instanceof ArrayAccess ? ($__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e["status"] ?? null) : null)) {
            echo " 
\t\t(function(\$){
\t\t\t\$.fn.revFilter = function(f) {
\t\t\t\tvar g = this.selector;
\t\t\t\tvar h = \$(g).attr('action');
\t\t\t\t\$(document).ready(function() {
\t\t\t\t\tinit_revfilter();
\t\t\t\t});
\t\t\t\t\$(document).on('submit', g, function(e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tvar a = \$(this).serialize();
\t\t\t\t\tloadProds(h,a,f.revload);
\t\t\t\t});
\t\t\t\t\$(document).on('click', '#'+f.reset_id, function(e) {
\t\t\t\t\t\$(g+' input, '+g+' select').not('[type=hidden]').each(function(a) {
\t\t\t\t\t\tif (\$(this).hasClass('irs-hidden-input')) {
\t\t\t\t\t\t\tvar b = \$(this).data('ionRangeSlider');
\t\t\t\t\t\t\tb.reset();
\t\t\t\t\t\t\t}
\t\t\t\t\t\tif (\$(this).is(':checkbox') || \$(this).is(':radio')) {
\t\t\t\t\t\t\t\$(this).removeAttr(\"checked\");
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(this).val('');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tvar c = \$(g).serialize();
\t\t\t\t\tloadProds(h,c,f.revload);
\t\t\t\t});
\t\t\t\tif (f.mode == 'auto') {
\t\t\t\t\t\$(document).on('change', g+' input:not([type=hidden]):not(.irs-hidden-input), '+g+' select', function() {
\t\t\t\t\t\t\$(g).submit();
\t\t\t\t\t})
\t\t\t\t}
\t\t\t\tfunction init_revfilter() {
\t\t\t\t\t";
            // line 499
            if (((($__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f = ($context["setting_catalog_all"] ?? null)) && is_array($__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f) || $__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f instanceof ArrayAccess ? ($__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f["pagination"] ?? null) : null) == "knopka")) {
                echo " 
\t\t\t\t\t\t\$('.pagpages').addClass('dnone');
\t\t\t\t\t";
            }
            // line 501
            echo " 
\t\t\t\t\t";
            // line 502
            if ((((($__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996 = ($context["setting_catalog_all"] ?? null)) && is_array($__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996) || $__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996 instanceof ArrayAccess ? ($__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996["pagination"] ?? null) : null) == "standart_knopka") || ((($__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330 = ($context["setting_catalog_all"] ?? null)) && is_array($__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330) || $__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330 instanceof ArrayAccess ? ($__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330["pagination"] ?? null) : null) == "knopka"))) {
                echo " 
\t\t\t\t\t\tvar a = \$('#load_more').html();
\t\t\t\t\t\t\$('.pagination').parent().parent().before(a);
\t\t\t\t\t";
            }
            // line 505
            echo " 
\t\t\t\t\t\$('#input-sort').removeAttr('onchange');
\t\t\t\t\t\$('#input-limit').removeAttr('onchange');
\t\t\t\t\t\$(f.selector).addClass('revcontainer');
\t\t\t\t\tif (localStorage.getItem('display') == 'list') {
\t\t\t\t\t\tlist_view();
\t\t\t\t\t} else if (localStorage.getItem('display') == 'price') {
\t\t\t\t\t\tprice_view();
\t\t\t\t\t} else if (localStorage.getItem('display') == 'grid') {
\t\t\t\t\t\tgrid_view();
\t\t\t\t\t} else {
\t\t\t\t\t\t";
            // line 516
            if (((($__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae = ($context["setting_catalog_all"] ?? null)) && is_array($__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae) || $__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae instanceof ArrayAccess ? ($__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae["vid_default"] ?? null) : null) == "vid_price")) {
                echo " 
\t\t\t\t\t\t\tprice_view();
\t\t\t\t\t\t";
            } elseif (((($__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409 =             // line 518
($context["setting_catalog_all"] ?? null)) && is_array($__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409) || $__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409 instanceof ArrayAccess ? ($__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409["vid_default"] ?? null) : null) == "vid_list")) {
                echo " 
\t\t\t\t\t\t\tlist_view();
\t\t\t\t\t\t";
            } elseif (((($__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26 =             // line 520
($context["setting_catalog_all"] ?? null)) && is_array($__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26) || $__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26 instanceof ArrayAccess ? ($__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26["vid_default"] ?? null) : null) == "vid_grid")) {
                echo " 
\t\t\t\t\t\t\tgrid_view();
\t\t\t\t\t\t";
            }
            // line 522
            echo " 
\t\t\t\t\t}
\t\t\t\t\t";
            // line 524
            if ((($__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d = ($context["setting_catalog_all"] ?? null)) && is_array($__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d) || $__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d instanceof ArrayAccess ? ($__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d["img_slider"] ?? null) : null)) {
                echo " 
\t\t\t\t\t\t\$('#content .owlproduct').owlCarousel( {
\t\t\t\t\t\t\tbeforeInit: true,
\t\t\t\t\t\t\titems: 1,
\t\t\t\t\t\t\tsingleItem: true,
\t\t\t\t\t\t\tmouseDrag: false,
\t\t\t\t\t\t\tautoPlay: false,
\t\t\t\t\t\t\tnavigation: true,
\t\t\t\t\t\t\tnavigationText: ['<i class=\"fa fa-chevron-left fa-3x\"></i>','<i class=\"fa fa-chevron-right fa-3x\"></i>'],
\t\t\t\t\t\t\tpagination: false
\t\t\t\t\t\t});
\t\t\t\t\t\t";
                // line 535
                if ( !(($__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408 = ($context["setting_catalog_all"] ?? null)) && is_array($__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408) || $__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408 instanceof ArrayAccess ? ($__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408["chislo_ryad"] ?? null) : null)) {
                    echo " 
\t\t\t\t\t\t\tif (localStorage.getItem('display')=='grid') {
\t\t\t\t\t\t\t\t\$('.product-thumb > .image').css('width','initial');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t";
                }
                // line 539
                echo " 
\t\t\t\t\t\tpodgon_img();
\t\t\t\t\t";
            } else {
                // line 541
                echo " 
\t\t\t\t\t\t\$('.owl-carousel.owlproduct').remove();
\t\t\t\t\t";
            }
            // line 543
            echo " 
\t\t\t\t\tpodgon_fona();
\t\t\t\t\t\$('#column-left #revfilter_box .mobil_wellsm .well.well-sm').remove();
\t\t\t\t\tif (\$(window).width() < 991) {
\t\t\t\t\t\t\$('#column-left #revfilter_box .mobil_wellsm .collapsible').append(\$('.revfilter_container > .well.well-sm'));
\t\t\t\t\t}
\t\t\t\t\t";
            // line 549
            echo ((twig_get_attribute($this->env, $this->source, ($context["revtheme_filter"] ?? null), "scripts", [], "array", true, true, false, 549)) ? ((($__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0 = ($context["revtheme_filter"] ?? null)) && is_array($__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0) || $__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0 instanceof ArrayAccess ? ($__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0["scripts"] ?? null) : null)) : (""));
            echo " 
\t\t\t\t}
\t\t\t\tfunction loadProds(c,d,e) {
\t\t\t\t\td = d || '';
\t\t\t\t\te = e || false;
\t\t\t\t\tfilterurl = c + '&isrevfilter=1';
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: filterurl,
\t\t\t\t\t\ttype: 'get',
\t\t\t\t\t\tdata: d,
\t\t\t\t\t\tprocessData: false,
\t\t\t\t\t\tdataType: e ? 'json' : 'html',
\t\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\t\$(g+' button').button('loading');
\t\t\t\t\t\t\tmasked('.products_category > .product-layout > .product-thumb',true);
\t\t\t\t\t\t\t\$('.load_more .fa-refresh').addClass('fa-spin');
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(a) {
\t\t\t\t\t\t\tvar b = \$.parseHTML((e && (typeof a.html != 'undefined')) ? a.html : a);
\t\t\t\t\t\t\t\$(f.selector).children().remove();
\t\t\t\t\t\t\t\$(f.selector).append(\$(b).find(f.selector).children());
\t\t\t\t\t\t\t";
            // line 570
            if ((twig_get_attribute($this->env, $this->source, ($context["revtheme_filter"] ?? null), "filter_recount", [], "array", true, true, false, 570) && (($__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b = ($context["revtheme_filter"] ?? null)) && is_array($__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b) || $__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b instanceof ArrayAccess ? ($__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b["filter_recount"] ?? null) : null))) {
                // line 571
                echo "\t\t\t\t\t\t\t\tif(typeof a.filters != 'undefined') {
\t\t\t\t\t\t\t\t\treloadFilter(a.filters);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 575
            echo "\t\t\t\t\t\t\tinit_revfilter();
\t\t\t\t\t\t},
\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\tmasked('.products_category > .product-layout > .product-thumb',false);
\t\t\t\t\t\t\t\tautoscroll_loading = false;
\t\t\t\t\t\t\t\t\$(g+' button').button('reset');
\t\t\t\t\t\t\t\tvar pr_opts_cat = \$('.products_category .options_buy')
\t\t\t\t\t\t\t\tpr_opts_cat.find('select:first').each(function() {
\t\t\t\t\t\t\t\t\tthis.onchange();
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t";
            // line 586
            if ((($__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084 = ($context["revtheme_product_all"] ?? null)) && is_array($__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084) || $__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084 instanceof ArrayAccess ? ($__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084["option_f_auto"] ?? null) : null)) {
                echo " 
\t\t\t\t\t\t\t\t\tvar pr_opts_cat = \$('.description_options .product-info .form-group');
\t\t\t\t\t\t\t\t\tpr_opts_cat.find('input[type=\"checkbox\"]:first, .radio:first-child input[type=\"radio\"]').each(function() {
\t\t\t\t\t\t\t\t\t\tthis.checked = true;
\t\t\t\t\t\t\t\t\t\tthis.onchange();
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\tpr_opts_cat.find('select:first').each(function() {
\t\t\t\t\t\t\t\t\t\tif (\$(this).find('option:selected').length < 1) {
\t\t\t\t\t\t\t\t\t\t\tthis.options[1].selected=true;
\t\t\t\t\t\t\t\t\t\t\tthis.onchange();
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t";
            }
            // line 599
            echo "\t\t\t\t\t\t\t},250);
\t\t\t\t\t\t\tif (f.mode == 'manual' && \$(window).width() > 767) {
\t\t\t\t\t\t\t\telement = \$('.breadcrumb');
\t\t\t\t\t\t\t\toffset = element.offset();
\t\t\t\t\t\t\t\toffsetTop = offset.top;
\t\t\t\t\t\t\t\t//\$('html, body').animate({scrollTop:offsetTop}, 250, 'linear');
\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\$('.load_more .fa-refresh').removeClass('fa-spin').css('hover');
\t\t\t\t\t\t\t";
            // line 607
            if (((($__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb = ($context["setting_catalog_all"] ?? null)) && is_array($__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb) || $__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb instanceof ArrayAccess ? ($__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb["pagination"] ?? null) : null) == "auto")) {
                echo " 
\t\t\t\t\t\t\t\t\$('.pagpages .pagination').hide();
\t\t\t\t\t\t\t";
            }
            // line 609
            echo " 
\t\t\t\t\t\t\t";
            // line 610
            if ((twig_get_attribute($this->env, $this->source, ($context["revtheme_filter"] ?? null), "filter_brstroka", [], "array", true, true, false, 610) && (($__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b = ($context["revtheme_filter"] ?? null)) && is_array($__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b) || $__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b instanceof ArrayAccess ? ($__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b["filter_brstroka"] ?? null) : null))) {
                echo " 
\t\t\t\t\t\t\t\tvar urlfull = c + (d ? ((c.indexOf('?') > 0 ? '&' : '?') + d) : '');
\t\t\t\t\t\t\t\turlfull = decodeURIComponent(urlfull);
\t\t\t\t\t\t\t\thistory.pushState('', '', urlfull);
\t\t\t\t\t\t\t";
            }
            // line 615
            echo "\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t}
\t\t\t\t";
            // line 618
            if ((twig_get_attribute($this->env, $this->source, ($context["revtheme_filter"] ?? null), "filter_recount", [], "array", true, true, false, 618) && (($__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9 = ($context["revtheme_filter"] ?? null)) && is_array($__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9) || $__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9 instanceof ArrayAccess ? ($__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9["filter_recount"] ?? null) : null))) {
                // line 619
                echo "\t\t\t\t\tfunction reloadFilter(filters) {
\t\t\t\t\t\tjQuery.each(f.filter_data, function(id, values) {
\t\t\t\t\t\t\tvar group = \$('#' + id);
\t\t\t\t\t\t\tif(typeof filters[id] == 'undefined') {
\t\t\t\t\t\t\t\tgroup.addClass('not-active');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tjQuery.each(values, function(i, val_id) {
\t\t\t\t\t\t\t\tvar val = \$('#' + val_id);
\t\t\t\t\t\t\t\tif(typeof filters[id] != 'undefined' && typeof filters[id][val_id] != 'undefined') {
\t\t\t\t\t\t\t\t\tval.fadeTo('fast', 1);
\t\t\t\t\t\t\t\t\tval.find('input').prop('disabled', false);
\t\t\t\t\t\t\t\t\t";
                // line 630
                if (((($__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698 = ($context["revtheme_filter"] ?? null)) && is_array($__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698) || $__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698 instanceof ArrayAccess ? ($__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698["filter_count_products"] ?? null) : null) && (twig_get_attribute($this->env, $this->source, ($context["revtheme_filter"] ?? null), "filter_recount", [], "array", true, true, false, 630) && (($__internal_92fcb416502b1fa6b6aa86d134b215b0a0167587977f219666cd2b1758225f4f = ($context["revtheme_filter"] ?? null)) && is_array($__internal_92fcb416502b1fa6b6aa86d134b215b0a0167587977f219666cd2b1758225f4f) || $__internal_92fcb416502b1fa6b6aa86d134b215b0a0167587977f219666cd2b1758225f4f instanceof ArrayAccess ? ($__internal_92fcb416502b1fa6b6aa86d134b215b0a0167587977f219666cd2b1758225f4f["filter_recount"] ?? null) : null)))) {
                    // line 631
                    echo "\t\t\t\t\t\t\t\t\t\tval.find('.revlabel').html(filters[id][val_id]['count']);
\t\t\t\t\t\t\t\t\t";
                }
                // line 633
                echo "\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tval.fadeTo('slow', 0.5);
\t\t\t\t\t\t\t\t\tval.find('input').prop('disabled', true);
\t\t\t\t\t\t\t\t\t";
                // line 636
                if (((($__internal_3fa297d61bb53522f6d7d26865df531fe2c9cae5868ad00df3d7a18c25fe92a1 = ($context["revtheme_filter"] ?? null)) && is_array($__internal_3fa297d61bb53522f6d7d26865df531fe2c9cae5868ad00df3d7a18c25fe92a1) || $__internal_3fa297d61bb53522f6d7d26865df531fe2c9cae5868ad00df3d7a18c25fe92a1 instanceof ArrayAccess ? ($__internal_3fa297d61bb53522f6d7d26865df531fe2c9cae5868ad00df3d7a18c25fe92a1["filter_count_products"] ?? null) : null) && (twig_get_attribute($this->env, $this->source, ($context["revtheme_filter"] ?? null), "filter_recount", [], "array", true, true, false, 636) && (($__internal_333cfa7af4c7ecc6093fcfedc8157b964c096bbb3ba6a10d8cc88e54d983911a = ($context["revtheme_filter"] ?? null)) && is_array($__internal_333cfa7af4c7ecc6093fcfedc8157b964c096bbb3ba6a10d8cc88e54d983911a) || $__internal_333cfa7af4c7ecc6093fcfedc8157b964c096bbb3ba6a10d8cc88e54d983911a instanceof ArrayAccess ? ($__internal_333cfa7af4c7ecc6093fcfedc8157b964c096bbb3ba6a10d8cc88e54d983911a["filter_recount"] ?? null) : null)))) {
                    // line 637
                    echo "\t\t\t\t\t\t\t\t\t\tval.find('.revlabel').html('0');
\t\t\t\t\t\t\t\t\t";
                }
                // line 639
                echo "\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 644
            echo "\t\t\t\t\$(document).on('click', '.pagination a', function(e) {
\t\t\t\t\tloadProds(\$(this).attr('href'), null, true);
\t\t\t\t\telement = \$('.breadcrumb');
\t\t\t\t\toffset = element.offset();
\t\t\t\t\toffsetTop = offset.top;
\t\t\t\t\t\$('html, body').animate({scrollTop:offsetTop}, 250, 'linear');
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t\t\$(document).on('change', '#input-sort', function(e) {
\t\t\t\t\tvar a = \$(this).val();
\t\t\t\t\tsort = a.match('sort=([A-Za-z.]+)');
\t\t\t\t\t\$('input[name=\"sort\"]').val(sort[1]);
\t\t\t\t\torder = a.match('order=([A-Z]+)');
\t\t\t\t\t\$('input[name=\"order\"]').val(order[1]);
\t\t\t\t\t\$(g).submit();
\t\t\t\t});
\t\t\t\t\$(document).on('change', '#input-limit', function(e) {
\t\t\t\t\tvar a = \$(this).val();
\t\t\t\t\tif (a) {
\t\t\t\t\t\tlimit = a.match('limit=([0-9]+)');
\t\t\t\t\t\t\$('input[name=\"limit\"]').val(limit[1]);
\t\t\t\t\t}
\t\t\t\t\t\$(g).submit();
\t\t\t\t});
\t\t\t\t";
            // line 668
            if ((((($__internal_6391199dedb1e4756012dc154b4a82c23dc574efa73d05e7c8a74a972a0cd12c = ($context["setting_catalog_all"] ?? null)) && is_array($__internal_6391199dedb1e4756012dc154b4a82c23dc574efa73d05e7c8a74a972a0cd12c) || $__internal_6391199dedb1e4756012dc154b4a82c23dc574efa73d05e7c8a74a972a0cd12c instanceof ArrayAccess ? ($__internal_6391199dedb1e4756012dc154b4a82c23dc574efa73d05e7c8a74a972a0cd12c["pagination"] ?? null) : null) == "standart_knopka") || ((($__internal_749c2c9fadf4e0ad0ec949be406986f08318112ea607adc63270dc234ee0a8d7 = ($context["setting_catalog_all"] ?? null)) && is_array($__internal_749c2c9fadf4e0ad0ec949be406986f08318112ea607adc63270dc234ee0a8d7) || $__internal_749c2c9fadf4e0ad0ec949be406986f08318112ea607adc63270dc234ee0a8d7 instanceof ArrayAccess ? ($__internal_749c2c9fadf4e0ad0ec949be406986f08318112ea607adc63270dc234ee0a8d7["pagination"] ?? null) : null) == "knopka"))) {
                echo " 
\t\t\t\t\tvar i = \$('#input-limit').val();
\t\t\t\t\tif (i) {
\t\t\t\t\t\tlimit = i.match('limit=([0-9]+)');
\t\t\t\t\t\t\$i = limit[1];
\t\t\t\t\t}
\t\t\t\t\t\$(document).on('click', '.load_more', function(e) {
\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\tvar a = \$('#input-limit').val();
\t\t\t\t\t\tif (a) {
\t\t\t\t\t\t\tlimit = a.match('limit=([0-9]+)');
\t\t\t\t\t\t}
\t\t\t\t\t\tlimit3 = \$('#revfilter input[name=\"limit\"]').val();
\t\t\t\t\t\tif (limit3) {
\t\t\t\t\t\t\tlimit21 = limit3;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tlimit21 = limit[1];
\t\t\t\t\t\t\t\$('#revfilter input[name=\"limit\"]').val(limit21);
\t\t\t\t\t\t}
\t\t\t\t\t\tlimit2 = Number(limit21)+Number(\$i);
\t\t\t\t\t\tlimitnumber = 'limit='+limit21;
\t\t\t\t\t\ta = a.replace('limit='+\$i,'');
\t\t\t\t\t\ta = a.replace(limitnumber,'');
\t\t\t\t\t\tvar b = a+'limit='+limit2;
\t\t\t\t\t\t\$('#revfilter input[name=\"limit\"]').val(limit2);
\t\t\t\t\t\t\$(g).submit();
\t\t\t\t\t});
\t\t\t\t";
            }
            // line 695
            echo " 
\t\t\t\t";
            // line 696
            if (((($__internal_60b5864c736e546c33a0f9b12abb5977adf552ba2293b4dc12dad0a2be607351 = ($context["setting_catalog_all"] ?? null)) && is_array($__internal_60b5864c736e546c33a0f9b12abb5977adf552ba2293b4dc12dad0a2be607351) || $__internal_60b5864c736e546c33a0f9b12abb5977adf552ba2293b4dc12dad0a2be607351 instanceof ArrayAccess ? ($__internal_60b5864c736e546c33a0f9b12abb5977adf552ba2293b4dc12dad0a2be607351["pagination"] ?? null) : null) == "auto")) {
                echo " 
\t\t\t\t\tvar i = \$('#input-limit').val();
\t\t\t\t\tlimit = i.match('limit=([0-9]+)');
\t\t\t\t\t\$i = limit[1];
\t\t\t\t\tautoscroll_loading = false;
\t\t\t\t\t\$('.pagpages .pagination').hide();
\t\t\t\t\t\$(window).scroll(function() {
\t\t\t\t\t\tif (inZone('.pagpages') && !autoscroll_loading) {
\t\t\t\t\t\t\tautoscroll_loading = true;
\t\t\t\t\t\t\tvar c = \$(\".pagpages .pagination li.active\").next(\"li\").children(\"a\");
\t\t\t\t\t\t\tif (c.length==0) return;
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\tvar a = \$('#input-limit').val();
\t\t\t\t\t\t\t\tlimit = a.match('limit=([0-9]+)');
\t\t\t\t\t\t\t\tlimit3 = \$('#revfilter input[name=\"limit\"]').val();
\t\t\t\t\t\t\t\tif (limit3) {
\t\t\t\t\t\t\t\t\tlimit21 = limit3;
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tlimit21 = limit[1];
\t\t\t\t\t\t\t\t\t\$('#revfilter input[name=\"limit\"]').val(limit21);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tlimit2 = Number(limit21)+Number(\$i);
\t\t\t\t\t\t\t\tlimitnumber = 'limit='+limit21;
\t\t\t\t\t\t\t\ta = a.replace('limit='+\$i,'');
\t\t\t\t\t\t\t\ta = a.replace(limitnumber,'');
\t\t\t\t\t\t\t\tvar b = a+'limit='+limit2;
\t\t\t\t\t\t\t\t\$('#revfilter input[name=\"limit\"]').val(limit2);
\t\t\t\t\t\t\t\t\$(g).submit();
\t\t\t\t\t\t\t}, 250);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t";
            }
            // line 727
            echo " 
\t\t\t\tfunction inZone(a) {
\t\t\t\t\tif (\$(a).length) {
\t\t\t\t\tvar b = \$(window).scrollTop();
\t\t\t\t\tvar c = \$(window).height();
\t\t\t\t\tvar d = \$(a).offset();
\t\t\t\t\tif (b<=d.top&&(\$(a).height()+d.top)<(b+c)) return true
\t\t\t\t\t};
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$(document).on('click','#list-view',function() {
\t\t\t\t\tlist_view();
\t\t\t\t});
\t\t\t\t\$(document).on('click', '#grid-view', function() {
\t\t\t\t\tgrid_view();
\t\t\t\t});
\t\t\t\t\$(document).on('click', '#price-view', function() {
\t\t\t\t\tprice_view();
\t\t\t\t});
\t\t\t}
\t\t})(jQuery);
\t";
        }
        // line 748
        echo " 
//--></script>
";
        // line 750
        if (($context["user_scripts"] ?? null)) {
            echo " 
\t";
            // line 751
            echo ($context["user_scripts"] ?? null);
            echo " 
";
        }
        // line 752
        echo " 
";
        // line 753
        if (((($__internal_a2f5b9ff51b59bc9f3b025aa1e1c1e1b0fc91f36187c566a410229bf83ca6d15 = ($context["setting_catalog_all"] ?? null)) && is_array($__internal_a2f5b9ff51b59bc9f3b025aa1e1c1e1b0fc91f36187c566a410229bf83ca6d15) || $__internal_a2f5b9ff51b59bc9f3b025aa1e1c1e1b0fc91f36187c566a410229bf83ca6d15 instanceof ArrayAccess ? ($__internal_a2f5b9ff51b59bc9f3b025aa1e1c1e1b0fc91f36187c566a410229bf83ca6d15["pagination"] ?? null) : null) != "standart")) {
            echo " 
\t<div id=\"load_more\" style=\"display:none;\"><div class=\"col-sm-12 text-center\"><a href=\"#\" class=\"load_more btn btn-primary\" rel=\"nofollow\"><i class=\"fa fa-refresh\"></i>";
            // line 754
            echo ($context["text_loadmore"] ?? null);
            echo "</a></div></div>
";
        }
        // line 755
        echo " 
";
        // line 756
        if ((($__internal_e321fd256ed911201cceb1f23ee74e2ae71106dc9d38b9aa9d3ae1c4726dc46f = ($context["setting_all_settings"] ?? null)) && is_array($__internal_e321fd256ed911201cceb1f23ee74e2ae71106dc9d38b9aa9d3ae1c4726dc46f) || $__internal_e321fd256ed911201cceb1f23ee74e2ae71106dc9d38b9aa9d3ae1c4726dc46f instanceof ArrayAccess ? ($__internal_e321fd256ed911201cceb1f23ee74e2ae71106dc9d38b9aa9d3ae1c4726dc46f["cookies"] ?? null) : null)) {
            echo " 
\t<!--noindex-->
\t<div class=\"bottom_cookie_block\">
\t\t<span>";
            // line 759
            echo ($context["cookies_text"] ?? null);
            echo "</span>
\t\t<a href=\"javascript:void(0);\" class=\"bottom_cookie_block_ok btn-sm btn-primary\">Ok</a>
\t</div>
\t<script><!--
\t\tvar Cookie = {
\t\t\tset: function(name, value, days) {
\t\t\t\tvar domain, domainParts, date, expires, host;
\t\t\t\tif (days) {
\t\t\t\t\tdate = new Date();
\t\t\t\t\tdate.setTime(date.getTime()+(days*24*60*60*1000));
\t\t\t\t\texpires = \"; expires=\"+date.toGMTString();
\t\t\t\t} else {
\t\t\t\t\texpires = \"\";
\t\t\t\t}
\t\t\t\thost = location.host;
\t\t\t\tif (host.split('.').length === 1) {
\t\t\t\t\tdocument.cookie = name+\"=\"+value+expires+\"; path=/\";
\t\t\t\t} else {
\t\t\t\t\tdomainParts = host.split('.');
\t\t\t\t\tdomainParts.shift();
\t\t\t\t\tdomain = '.'+domainParts.join('.');
\t\t\t\t\tdocument.cookie = name+\"=\"+value+expires+\"; path=/\";
\t\t\t\t\tif (Cookie.get(name) == null || Cookie.get(name) != value) {
\t\t\t\t\t\tdomain = '.'+host;
\t\t\t\t\t\tdocument.cookie = name+\"=\"+value+expires+\"; path=/\";
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn domain;
\t\t\t},
\t\t\tget: function(name) {
\t\t\t\tvar nameEQ = name + \"=\";
\t\t\t\tvar ca = document.cookie.split(';');
\t\t\t\tfor (var i=0; i < ca.length; i++) {
\t\t\t\t\tvar c = ca[i];
\t\t\t\t\twhile (c.charAt(0)==' ') {
\t\t\t\t\t\tc = c.substring(1,c.length);
\t\t\t\t\t}
\t\t\t\t\tif (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
\t\t\t\t}
\t\t\t\treturn null;
\t\t\t}
\t\t};
\t\tif(!Cookie.get('revcookie')) {
\t\t\tsetTimeout(\"document.querySelector('.bottom_cookie_block').style.display='block'\", 500);
\t\t}
\t\t\$('.bottom_cookie_block_ok').click(function(){
\t\t\t\$('.bottom_cookie_block').fadeOut();
\t\t\tCookie.set('revcookie', true, '120');
\t\t});
\t//--></script>
\t<!--/noindex-->
";
        }
        // line 810
        echo " 
</body></html>";
    }

    public function getTemplateName()
    {
        return "revolution/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2071 => 810,  2016 => 759,  2010 => 756,  2007 => 755,  2002 => 754,  1998 => 753,  1995 => 752,  1990 => 751,  1986 => 750,  1982 => 748,  1958 => 727,  1923 => 696,  1920 => 695,  1889 => 668,  1863 => 644,  1856 => 639,  1852 => 637,  1850 => 636,  1845 => 633,  1841 => 631,  1839 => 630,  1826 => 619,  1824 => 618,  1819 => 615,  1811 => 610,  1808 => 609,  1802 => 607,  1792 => 599,  1776 => 586,  1763 => 575,  1757 => 571,  1755 => 570,  1731 => 549,  1723 => 543,  1718 => 541,  1713 => 539,  1705 => 535,  1691 => 524,  1687 => 522,  1681 => 520,  1676 => 518,  1671 => 516,  1658 => 505,  1651 => 502,  1648 => 501,  1642 => 499,  1605 => 465,  1602 => 464,  1598 => 463,  1455 => 323,  1450 => 321,  1444 => 319,  1439 => 317,  1435 => 316,  1431 => 315,  1427 => 313,  1422 => 311,  1417 => 309,  1411 => 307,  1408 => 306,  1402 => 304,  1396 => 301,  1393 => 300,  1383 => 294,  1380 => 293,  1371 => 288,  1367 => 287,  1363 => 285,  1357 => 283,  1345 => 278,  1340 => 277,  1336 => 276,  1333 => 275,  1328 => 273,  1320 => 271,  1315 => 270,  1312 => 269,  1306 => 267,  1302 => 266,  1298 => 265,  1291 => 263,  1288 => 262,  1284 => 261,  1280 => 260,  1277 => 259,  1272 => 257,  1268 => 256,  1258 => 254,  1255 => 253,  1250 => 251,  1242 => 249,  1237 => 247,  1229 => 245,  1210 => 244,  1207 => 243,  1186 => 242,  1182 => 241,  1175 => 239,  1170 => 237,  1166 => 235,  1147 => 234,  1144 => 233,  1123 => 232,  1119 => 231,  1111 => 228,  1106 => 226,  1102 => 225,  1098 => 224,  1094 => 223,  1091 => 222,  1087 => 221,  1077 => 219,  1074 => 218,  1069 => 216,  1061 => 214,  1056 => 212,  1049 => 211,  1030 => 209,  1027 => 208,  1006 => 207,  1002 => 206,  995 => 204,  990 => 202,  986 => 200,  967 => 199,  964 => 198,  942 => 197,  940 => 196,  932 => 193,  927 => 191,  923 => 190,  919 => 189,  915 => 188,  912 => 187,  908 => 186,  898 => 184,  895 => 183,  890 => 181,  882 => 179,  877 => 177,  870 => 176,  851 => 174,  848 => 173,  826 => 172,  824 => 171,  817 => 169,  812 => 167,  808 => 165,  789 => 164,  786 => 163,  764 => 162,  762 => 161,  754 => 158,  749 => 156,  745 => 155,  741 => 154,  737 => 153,  734 => 152,  730 => 151,  720 => 149,  717 => 148,  712 => 146,  704 => 144,  699 => 142,  691 => 140,  672 => 139,  669 => 138,  648 => 137,  644 => 136,  637 => 134,  632 => 132,  629 => 131,  609 => 129,  587 => 127,  585 => 126,  577 => 123,  572 => 121,  568 => 120,  564 => 119,  560 => 118,  557 => 117,  553 => 116,  542 => 114,  537 => 111,  530 => 110,  525 => 107,  518 => 106,  498 => 104,  476 => 102,  474 => 101,  467 => 99,  462 => 97,  459 => 96,  439 => 94,  417 => 92,  415 => 91,  407 => 88,  402 => 86,  398 => 85,  394 => 84,  390 => 83,  385 => 81,  382 => 80,  377 => 78,  372 => 76,  360 => 75,  354 => 74,  346 => 73,  337 => 72,  335 => 71,  331 => 70,  328 => 69,  323 => 67,  319 => 66,  309 => 65,  303 => 64,  299 => 63,  296 => 62,  292 => 61,  282 => 60,  276 => 59,  272 => 58,  264 => 57,  255 => 56,  253 => 55,  249 => 54,  245 => 53,  241 => 52,  231 => 51,  224 => 47,  221 => 46,  211 => 43,  205 => 39,  201 => 38,  197 => 37,  185 => 36,  179 => 35,  175 => 34,  171 => 33,  168 => 32,  164 => 31,  154 => 30,  151 => 29,  143 => 28,  140 => 27,  129 => 26,  125 => 25,  119 => 24,  113 => 23,  110 => 22,  103 => 21,  99 => 20,  96 => 19,  89 => 18,  85 => 17,  81 => 16,  78 => 15,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  50 => 6,  46 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/template/common/footer.twig", "");
    }
}
