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

/* revolution/template/revolution/revpopuplogin.twig */
class __TwigTemplate_dd74fe23aa408a7e7e194f6fdf7d060a974f26c1e38fdec1a9aed49837b5f3cf extends \Twig\Template
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
        echo "<div id=\"popup-order-okno\" class=\"account_login\">
<div class=\"popup-heading\">";
        // line 2
        echo ($context["text_revpopuplogin_autoriz"] ?? null);
        echo "</div>
<div class=\"popup-center\">
\t<form method=\"post\" enctype=\"multipart/form-data\" id=\"login-form\">
\t\t<div class=\"payment-info\">
\t\t\t<div>
\t\t\t\t<label><span class=\"required\">*</span>";
        // line 7
        echo ($context["text_revpopuplogin_email"] ?? null);
        echo "</label>
\t\t\t\t<input name=\"email\" />
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<label><span class=\"required\">*</span>";
        // line 11
        echo ($context["text_revpopuplogin_pass"] ?? null);
        echo "</label>
\t\t\t\t<input type=\"password\" name=\"password\" />
\t\t\t</div>
\t\t\t<div style=\"text-align: right;\">
\t\t\t\t<a href=\"";
        // line 15
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_revpopuplogin_forgotten"] ?? null);
        echo "</a>
\t\t\t</div>
\t\t</div>
\t</form>
</div>
<div class=\"popup-footer\">
\t<button class=\"account_login_close\" onclick=\"\$.magnificPopup.close();\">";
        // line 21
        echo ($context["text_revpopuplogin_otmena"] ?? null);
        echo "</button>
\t<a id=\"popup-checkout-button\">";
        // line 22
        echo ($context["text_revpopuplogin_enter"] ?? null);
        echo "</a>
</div>
<script><!--
\$('#popup-order-okno.account_login input[name=\\'password\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#popup-checkout-button').trigger('click');
\t}
});

function masked(element, status) {
  if (status == true) {
    \$('<div/>')
    .attr({ 'class':'masked' })
    .prependTo(element);
    \$('<div class=\"masked_loading\" />').insertAfter(\$('.masked'));
  } else {
    \$('.masked').remove();
    \$('.masked_loading').remove();
  }
}

\$('#popup-checkout-button').on('click', function() {
  masked('#popup-order-okno', true);
  \$.ajax({
      type: 'post',
      url:  'index.php?route=revolution/revpopuplogin/login',
      dataType: 'json',
      data: \$('#login-form').serialize(),
      success: function(json) {
        if (json['error']) {
            masked('#popup-order-okno', false);
            \$('.text-danger').remove();
            \$('.payment-info').after('<div class=\"text-danger text-right\">' + json['error'] + '</div>');
        } else {
\t\t\tif (json['output']) {
\t\t\t\tmasked('#popup-order-okno', false);
\t\t\t\t\$('#popup-checkout-button').remove();
\t\t\t\t\$('#popup-order-okno .popup-center').html(json['output']);
\t\t\t\t\$('.account_login_close').remove();
\t\t\t\t\$('.account_login_close').remove();
\t\t\t\tlocation.reload();
\t\t\t\t//\$('.account_login_close').after('<a id=\"popup-checkout-button\" href=\"' + json['output_button1'] + '\">' + json['output_button2'] + '</a');
\t\t\t\t//\$('.account_login_close').attr('onclick', '\$.magnificPopup.close(); location.reload();');
\t\t\t\t//\$('.account_login_close').html('";
        // line 65
        echo ($context["text_revpopuplogin_close"] ?? null);
        echo "');
\t\t\t\t//\$('#popup-order-okno .popup-center').html(json['output']);
\t\t\t}
        }
      }
  });
});
//--></script>
</div>
";
    }

    public function getTemplateName()
    {
        return "revolution/template/revolution/revpopuplogin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 65,  77 => 22,  73 => 21,  62 => 15,  55 => 11,  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/template/revolution/revpopuplogin.twig", "");
    }
}
