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

/* __string_template__fd6d0ce76e85e21505bc747a702bb395 */
class __TwigTemplate_e16bcffa471305ff52b371dc3f6ee7d1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/Pagina-web/Prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/Pagina-web/Prestashop/img/app_icon.png\" />

<title>Temas • Chronicles of Warhammer</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPsxDesignThemeGeneral';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es-es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'ES';
    var _PS_VERSION_ = '8.0.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '5dc143434d88689c078efd3816074550';
    var token_admin_orders = tokenAdminOrders = 'd28b7effe8595962d137c0c831ec4a95';
    var token_admin_customers = 'a9477ba4fc3f8ba3f0b65829f5ebf670';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '1c85147224017d106051e20520524b3d';
    var currentIndex = 'index.php?controller=AdminPsxDesignThemeGeneral';
    var employee_token = '8aae49b4964543cc7a49986514bd5444';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '1';
    var admin_modules_link = '/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/improve/modules/manage?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk';
    var admin_notification_get_lin";
        // line 42
        echo "k = '/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/common/notifications?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk';
    var admin_notification_push_link = adminNotificationPushLink = '/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/common/notifications/ack?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk';
    var tab_modules_list = '';
    var update_success_msg = 'Actualización correcta';
    var search_product_msg = 'Buscar un producto';
  </script>



<link
      rel=\"preload\"
      href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/themes/new-theme/public/703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Pagina-web/Prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Pagina-web/Prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Pagina-web/Prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.9d2d6ef1.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Pagina-web/Prestashop/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Pagina-web/Prestashop/modules/psxdesign/views/css/admin/index.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Pagina-web/Prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Pagina-we";
        // line 67
        echo "b/Prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/Pagina-web\\/Prestashop\\/admin1752864ggqext4hkrmf\\/\";
var baseDir = \"\\/Pagina-web\\/Prestashop\\/\";
var changeFormLanguageUrl = \"\\/Pagina-web\\/Prestashop\\/admin1752864ggqext4hkrmf\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var getUuidAjaxUrl = \"\\/Pagina-web\\/Prestashop\\/admin1752864ggqext4hkrmf\\/index.php\\/modules\\/improve\\/design\\/user\\/userId?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\";
var importThemeLink = \"\\/Pagina-web\\/Prestashop\\/admin1752864ggqext4hkrmf\\/index.php\\/modules\\/improve\\/design\\/themes\\/import?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\";
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/Pagina-web/Prestashop/modules/ps_edition_basic/views/js/favicon.js\"></script>
<scr";
        // line 85
        echo "ipt type=\"text/javascript\" src=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/Pagina-web/Prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/Pagina-web/Prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/Pagina-web/Prestashop/js/admin.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/Pagina-web/Prestashop/js/tools.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/Pagina-web/Prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/Pagina-web/Prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/Pagina-web/Prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/Pagina-web/Prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=4.12.0\"></script>
<script type=\"text/javascript\" src=\"/Pagina-web/Prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/Pagina-web/Prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/Pagina-web\\/Prestashop\\/admin1752864ggqext4hkrmf\\/index.php?controller=AdminGamification&token=8571f23f240110c5e0b13a3e67d51b7f\";
            var current_id_tab = 136;
        </script><script type=\"module\" src=\"/Pagina-web/Prestashop/modules/psxdesign/views/js/upgrade-notification.js\"></script>
<script type=\"module\" src=\"/Pagina-web/Prestashop/modules/psxdesign/views/js/index-themes.js\"></script>
    <script>";
        // line 104
        echo "
        window.userLocale  = 'es';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/common/notifications?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 123
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-es adminpsxdesignthemegeneral\"
  data-base-url=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php\"  data-token=\"-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/modules/pseditionbasic/homepage?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\"></a>
      <span id=\"shop_version\">8.0.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=f158bc74e07dd43bd6f77a1cc7a1b688\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/improve/modules/manage?token=2a676143d5c066bb355be4c8fece91e3\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/sell/catalog/categories/new?token=2a676143d5c066bb355be4c8fece91e3\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/Pagina-web/Prestashop/admin175286";
        // line 157
        echo "4ggqext4hkrmf/index.php/sell/catalog/products/new?token=2a676143d5c066bb355be4c8fece91e3\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=8c156a5f25c8ade169852a9b84e961f5\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/sell/orders?token=2a676143d5c066bb355be4c8fece91e3\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"133\"
        data-icon=\"icon-AdminPsxDesignParentTab\"
        data-method=\"add\"
        data-url=\"index.php/modules/improve/design/themes?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\"
        data-post-link=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminQuickAccesses&token=947b0a80cc13f0407540a182c1bbb8e0\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Temas - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminQuickAccesses&token=947b0a80cc13f0407540a182c1bbb8e0\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dro";
        // line 194
        echo "pdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminSearch&amp;token=89f38b045043a087040fe0556ed830f2\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" aria-label=\"Barra de búsqueda\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Nombre\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-v";
        // line 212
        echo "alue=\"4\" data-placeholder=\"Numero de Factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acceso rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=f158bc74e07dd43bd6f77a1cc7a1b688\"
             data-item=\"Evaluación del catálogo\"
    >Evaluación del catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/improve/modules/manage?token=2a676143d5c066bb355be4c8fece91e3\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/sell/catalog/categories/new?token=2a676143d5c066bb355be4c8fece91e3\"
             data-item=\"Nueva categoría\"
    >Nueva categoría</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localh";
        // line 246
        echo "ost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/sell/catalog/products/new?token=2a676143d5c066bb355be4c8fece91e3\"
             data-item=\"Nuevo\"
    >Nuevo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=8c156a5f25c8ade169852a9b84e961f5\"
             data-item=\"Nuevo cupón de descuento\"
    >Nuevo cupón de descuento</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/sell/orders?token=2a676143d5c066bb355be4c8fece91e3\"
             data-item=\"Pedidos\"
    >Pedidos</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"115\"
      data-icon=\"icon-AdminPsxDesignParentTab\"
      data-method=\"add\"
      data-url=\"index.php/modules/improve/design/themes?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\"
      data-post-link=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminQuickAccesses&token=947b0a80cc13f0407540a182c1bbb8e0\"
      data-prompt-text=\"Por favor, renombre este acceso rápido:\"
      data-link=\"Temas - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Añadir página actual al Acceso Rápido
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminQuickAccesses&token=947b0a80cc13f0407540a182c1bbb8e0\">
    <i class=\"material-icons\">settings</i>
    Administrar accesos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
              <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"ps";
        // line 286
        echo "tooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Tu tienda está en mantenimiento.</strong></p><p class=&quot;text-left&quot;>Tus visitantes y clientes no pueden acceder a tu tienda mientras está en modo mantenimiento. &amp;lt;br /&amp;gt; Para gestionar los ajustes de mantenimiento dirígete a la pestaña Parámetros de la tienda &amp;gt; Mantenimiento.</p>\" href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/configure/shop/maintenance/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\"
          >
            <i class=\"material-icons\">build</i>
            <span>Modo mantenimiento</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/Pagina-web/Prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Ver mi tienda</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
      ";
        // line 324
        echo "      </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus <strong><a href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=9ac2325dcaf35611b38509479fe130fd\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notificatio";
        // line 369
        echo "n\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/Pagina-web/Prestashop/img/pr/default.jpg\" alt=\"Daniel\" /></span>
        <span class=\"employee_profile\">Bienvenido de nuevo, Daniel</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/configure/advanced/employees/1/edit?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\">
      <i class=\"material-i";
        // line 417
        echo "cons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/es/cursos?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=training-es\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Formación
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/es/expertos?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=expert-es\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Encuentra un experto
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=JJ3n9lvn4ycrnguRIVoaIgR6FYClxaiO6_-KAloAUzI&utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=addons-es\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> PrestaShop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=help-center-es\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centro de ayuda
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=";
        // line 441
        echo "\"header_logout\" href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminLogin&amp;logout=1&amp;token=dcfc424f61cf149f0b2c024cd279e4f2\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/configure/advanced/employees/toggle-navigation?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/modules/pseditionbasic/homepage?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.4</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"150\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"151\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/modules/pseditionbasic/homepage?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"";
        // line 483
        echo "material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminDashboard&amp;token=e6c1b6c9a5cf2b39fdc64d4dad0d2b12\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Inicio
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/sell/orders/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
     ";
        // line 521
        echo "                 Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/sell/orders/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/sell/orders/invoices/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/sell/orders/credit-slips/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Facturas por abono
                    ";
        // line 549
        echo "            </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/sell/orders/delivery-slips/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Albaranes de entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminCarts&amp;token=9ac2325dcaf35611b38509479fe130fd\" class=\"link\"> Carritos de compra
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/sell/catalog/products?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                       ";
        // line 581
        echo "                                             keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/sell/catalog/products?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/sell/catalog/categories?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/sell/catalog/monitoring/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Monitoreo
                                </a>
                              </li>

                                                                                  
                  ";
        // line 610
        echo "            
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminAttributesGroups&amp;token=bf9adc8aca3560eb8e6863fcc5b4891c\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/sell/catalog/brands/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/sell/attachments/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/i";
        // line 637
        echo "ndex.php?controller=AdminCartRules&amp;token=8c156a5f25c8ade169852a9b84e961f5\" class=\"link\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/sell/stocks/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/sell/customers/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                  ";
        // line 669
        echo "            <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/sell/customers/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/sell/addresses/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminCustomerThreads&amp;token=1c85147224017d106051e20520524b3d\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
               ";
        // line 698
        echo "                               <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminCustomerThreads&amp;token=1c85147224017d106051e20520524b3d\" class=\"link\"> Servicio al Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/sell/customer-service/order-messages/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminReturn&amp;token=f905928209964082dbe516769f89510b\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                  ";
        // line 727
        echo "                                    
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/modules/metrics/legacy/stats?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"166\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/modules/metrics/legacy/stats?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Estadísticas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"167\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/modules/metrics?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> PrestaShop Metrics
                                </a>
                       ";
        // line 754
        echo "       </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/modules/mbo/modules/catalog/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"159\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/modules/mbo/modules/catalog/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Marketplace
        ";
        // line 788
        echo "                        </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/improve/modules/manage?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Administrador de módulos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=c97050099c4100f42bf64abbf71a6326\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Diseño
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                         ";
        // line 818
        echo "                                   
                              <li class=\"link-leveltwo\" data-submenu=\"168\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=c97050099c4100f42bf64abbf71a6326\" class=\"link\"> Modulos del tema
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/modules/mbo/themes/catalog/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Catálogo de Temas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"135\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/modules/improve/design/themes?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Personalización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/improve/design/mail_";
        // line 844
        echo "theme/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/improve/design/cms-pages/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/improve/design/modules/positions/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminImages&amp;token=6e5a5964b0191deb8abdb788b480059b\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                                  
                              
                                           ";
        // line 874
        echo "                 
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/modules/link-widget/list?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Lista de enlaces
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminCarriers&amp;token=07422317f4199d3d481ce6238240216c\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Transporte
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminCarriers&amp;token=07422317f4199d3d481ce6238240216c\" class=\"link\"> Transportistas
 ";
        // line 902
        echo "                               </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/improve/shipping/preferences/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"127\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminMbeConfiguration&amp;token=47434bbdfd694902d4cdce769bf1d21e\" class=\"link\"> MBE - Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminMbeShipping&amp;token=4fb2e6fc3b089280018fdb9b9d359d82\" class=\"link\"> MBE - Listado de envíos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                   ";
        // line 931
        echo "                           
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/improve/payment/payment_methods?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/improve/payment/payment_methods?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/improve/payment/preferences?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Preferencias
         ";
        // line 959
        echo "                       </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/improve/international/localization/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/improve/international/localization/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Localización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-";
        // line 990
        echo "AdminParentCountries\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/improve/international/zones/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Ubicaciones Geográficas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/improve/international/taxes/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/improve/international/translations/settings?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"140\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=c7b57bf0786bfacb0e75ea8d172d19";
        // line 1018
        echo "95\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-140\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"141\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=c7b57bf0786bfacb0e75ea8d172d1995\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminPsfacebookModule&amp;token=9d7d7456a4abb45368374acf9ee14c2f\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
    ";
        // line 1052
        echo "        <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"152\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/modules/pseditionbasic/settings?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Ajustes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/configure/shop/preferences/preferences?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parámetros de la tienda
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                  ";
        // line 1085
        echo "                            <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/configure/shop/preferences/preferences?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/configure/shop/order-preferences/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Configuración de pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/configure/shop/product-preferences/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Configuración de Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                      ";
        // line 1113
        echo "        <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/configure/shop/customer-preferences/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Configuración de clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/configure/shop/contacts/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/configure/shop/seo-urls/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminSearchConf&amp;token=ae691c1a75fbc6e2aab8414cbd657ce6\" class=\"link\"> Bus";
        // line 1138
        echo "car
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/configure/advanced/system-information/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/configure/advanced/system-information/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Información
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li c";
        // line 1170
        echo "lass=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/configure/advanced/performance/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/configure/advanced/administration/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/configure/advanced/emails/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/configure/advanced/import/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Importar
                                </a>
               ";
        // line 1197
        echo "               </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/configure/advanced/employees/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/configure/advanced/sql-requests/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Base de datos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/configure/advanced/logs/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Registros/Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                 ";
        // line 1227
        echo "               <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/configure/advanced/webservice-keys/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/configure/advanced/feature-flags/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Características nuevas y experimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/configure/advanced/security/?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"126\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php";
        // line 1254
        echo "?controller=AdminKlaviyoPsConfig&amp;token=f745591f4018606d6cc66624cedc4bec\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"172\" id=\"subtab-AdminPsAssistantSettings\">
                    <a href=\"http://localhost/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php?controller=AdminPsAssistantSettings&amp;token=ebda7a4dd30b40c8bf249d01fdb4d3bb\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Assistance By PrestaShop
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Personalización</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/Pagina-web/Prestashop/admin175286";
        // line 1297
        echo "4ggqext4hkrmf/index.php/modules/improve/design/themes?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" aria-current=\"page\">Temas</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Temas          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help\" href=\"https://help.prestashop-project.org/es/doc/AdminPsxDesignThemeGeneral?version=8.0.4&amp;country=es\" title=\"Ayuda\">
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li class=\"nav-item\">
                    <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/modules/improve/design/themes?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" id=\"subtab-AdminPsxDesignThemeGeneral\" class=\"nav-link tab active current\" data-submenu=\"136\">";
        // line 1329
        echo "
                      Temas
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/modules/improve/design/logos?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" id=\"subtab-AdminPsxDesignLogos\" class=\"nav-link tab \" data-submenu=\"137\">
                      Logos
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/modules/improve/design/colors?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" id=\"subtab-AdminPsxDesignColors\" class=\"nav-link tab \" data-submenu=\"138\">
                      Colores
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/modules/improve/design/fonts?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" id=\"subtab-AdminPsxDesignFonts\" class=\"nav-link tab \" data-submenu=\"139\">
                      Fuentes
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                         ";
        // line 1360
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help\" href=\"https://help.prestashop-project.org/es/doc/AdminPsxDesignThemeGeneral?version=8.0.4&amp;country=es\" title=\"Ayuda\">
              Ayuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1391
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"/Pagina-web/Prestashop/admin1752864ggqext4hkrmf/index.php/modules/pseditionbasic/homepage?_token=-Vi7TrEKh2IROiZujlpFBnLhtrm-8ODL9k0KOkfAQPk\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1425
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 123
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1391
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1425
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__fd6d0ce76e85e21505bc747a702bb395";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1610 => 1425,  1589 => 1391,  1578 => 123,  1569 => 1425,  1529 => 1391,  1496 => 1360,  1463 => 1329,  1429 => 1297,  1384 => 1254,  1355 => 1227,  1323 => 1197,  1294 => 1170,  1260 => 1138,  1233 => 1113,  1203 => 1085,  1168 => 1052,  1132 => 1018,  1102 => 990,  1069 => 959,  1039 => 931,  1008 => 902,  978 => 874,  946 => 844,  918 => 818,  886 => 788,  850 => 754,  821 => 727,  790 => 698,  759 => 669,  725 => 637,  696 => 610,  665 => 581,  631 => 549,  601 => 521,  561 => 483,  517 => 441,  491 => 417,  441 => 369,  394 => 324,  354 => 286,  312 => 246,  276 => 212,  256 => 194,  217 => 157,  178 => 123,  157 => 104,  136 => 85,  116 => 67,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__fd6d0ce76e85e21505bc747a702bb395", "");
    }
}
