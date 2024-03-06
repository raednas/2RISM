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

/* utilisateur/modifuser.html.twig */
class __TwigTemplate_d7c64164762b1776849881ade117a5b5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'navbar' => [$this, 'block_navbar'],
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/modifuser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/modifuser.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('navbar', $context, $blocks);
        // line 119
        echo "

";
        // line 121
        $this->displayBlock('sidebar', $context, $blocks);
        // line 218
        echo "
       
";
        // line 220
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello FrontController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "            <!-- plugins:css -->
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/feather/feather.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/css/vendor.bundle.base.css"), "html", null, true);
        echo "\">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/datatables.net-bs4/dataTables.bootstrap4.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/text/css\" href=\"js/select.dataTables.min.css"), "html", null, true);
        echo "\">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/vertical-layout-light/style.css"), "html", null, true);
        echo "\">
  <!-- endinject -->
  <link rel=\"shortcut icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/favicon.png"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 21
        echo "<nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
      <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
        <a class=\"navbar-brand brand-logo mr-5\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/base.html.twig"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/logo.png"), "html", null, true);
        echo "\" class=\"mr-2\" alt=\"logo\"/></a>
        <a class=\"navbar-brand brand-logo-mini\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/base.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
      </div>
      <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
        <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
          <span class=\"icon-menu\"></span>
        </button>
        <ul class=\"navbar-nav mr-lg-2\">
          <li class=\"nav-item nav-search d-none d-lg-block\">
            <div class=\"input-group\">
              <div class=\"input-group-prepend hover-cursor\" id=\"navbar-search-icon\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"icon-search\"></i>
                </span>
              </div>
              <input type=\"text\" class=\"form-control\" id=\"navbar-search-input\" placeholder=\"Search now\" aria-label=\"search\" aria-describedby=\"search\">
            </div>
          </li>
        </ul>
        <ul class=\"navbar-nav navbar-nav-right\">
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"icon-bell mx-0\"></i>
              <span class=\"count\"></span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
              <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-success\">
                    <i class=\"ti-info-alt mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    Just now
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-warning\">
                    <i class=\"ti-settings mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">Settings</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    Private message
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-info\">
                    <i class=\"ti-user mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class=\"nav-item nav-profile dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
              <img src=\"images/faces/face28.jpg\" alt=\"profile\"/>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
              <a class=\"dropdown-item\">
                <i class=\"ti-settings text-primary\"></i>
                Settings
              </a>
              <a class=\"dropdown-item\">
                <i class=\"ti-power-off text-primary\"></i>
                Logout
              </a>
            </div>
          </li>
          <li class=\"nav-item nav-settings d-none d-lg-flex\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"icon-ellipsis\"></i>
            </a>
          </li>
        </ul>
        <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
          <span class=\"icon-menu\"></span>
        </button>
      </div>
    </nav>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 121
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 122
        echo "<div class=\"container-fluid page-body-wrapper\">
<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <ul class=\"nav\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"index.html'>
              <i class=\"icon-grid menu-icon\"></i>
              <span class=\"menu-title\">Dashboard</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#PACK\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"icon-layout menu-icon\"></i>
              <span class=\"menu-title\"> Gestion Pack </span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"PACK\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/ui-features/buttons.html"), "html", null, true);
        echo "\">Buttons</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/ui-features/dropdowns.html"), "html", null, true);
        echo "\">Dropdowns</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/ui-features/typography.html"), "html", null, true);
        echo "\">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#transport\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"icon-layout menu-icon\"></i>
              <span class=\"menu-title\">Gestion Transport</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"transport\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/ui-features/buttons.html"), "html", null, true);
        echo "\">Buttons</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/ui-features/dropdowns.html"), "html", null, true);
        echo "\">Dropdowns</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/ui-features/typography.html"), "html", null, true);
        echo "\">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#blog\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"icon-layout menu-icon\"></i>
              <span class=\"menu-title\">Gestion Blog</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"blog\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/ui-features/buttons.html"), "html", null, true);
        echo "\">Buttons</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/ui-features/dropdowns.html"), "html", null, true);
        echo "\">Dropdowns</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/ui-features/typography.html"), "html", null, true);
        echo "\">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#Utilisateur\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"icon-layout menu-icon\"></i>
              <span class=\"menu-title\">Gestion Utilisateur</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"Utilisateur\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/ui-features/buttons.html"), "html", null, true);
        echo "\">Buttons</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/ui-features/dropdowns.html"), "html", null, true);
        echo "\">Dropdowns</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/ui-features/typography.html"), "html", null, true);
        echo "\">Typography</a></li>
              </ul>
            </div>
          </li>
           <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#evenement\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"icon-layout menu-icon\"></i>
              <span class=\"menu-title\">Gestion Evenement</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"evenement\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/ui-features/buttons.html"), "html", null, true);
        echo "\">Buttons</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/ui-features/dropdowns.html"), "html", null, true);
        echo "\">Dropdowns</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/ui-features/typography.html"), "html", null, true);
        echo "\">Typography</a></li>
              </ul>
            </div>
          </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#Hebergement\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"icon-layout menu-icon\"></i>
              <span class=\"menu-title\">Gestion Hebergement</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"Hebergement\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/ui-features/buttons.html"), "html", null, true);
        echo "\">Buttons</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/ui-features/dropdowns.html"), "html", null, true);
        echo "\">Dropdowns</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/ui-features/typography.html"), "html", null, true);
        echo "\">Typography</a></li>
              </ul>
            </div>
          </li>
         </nav> 
         
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 220
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 221
        echo "
    <div class=\"main-panel\">
      <div class=\"content-wrapper\">
      <div class=\"row\">
            <div class=\"col-md-12 grid-margin stretch-card\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <p class=\"card-title\">Advanced Table</p>
                  <div class=\"row\">
                    <div class=\"col-12\">
                      <div class=\"table-responsive\">
                        <div id=\"example_wrapper\" class=\"dataTables_wrapper dt-bootstrap4 no-footer\"><div class=\"row\"><div class=\"col-sm-12 col-md-6\"></div><div class=\"col-sm-12 col-md-6\"></div></div><div class=\"row\"><div class=\"col-sm-12\"><table id=\"example\" class=\"display expandable-table dataTable no-footer\" style=\"width: 100%;\" role=\"grid\">
                          
                      <tbody>
                      
        
        ";
        // line 237
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 237, $this->source); })()), 'form_start');
        echo "

";
        // line 239
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 239, $this->source); })()), 'form_end');
        echo "
                           
                        
                      </tbody>
                      </table></div></div><div class=\"row\"><div class=\"col-sm-12 col-md-5\"></div><div class=\"col-sm-12 col-md-7\"></div></div></div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>

                
              </div>
            </div>
            </div>
            </div>
            </div>
            
  

 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "utilisateur/modifuser.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  486 => 239,  481 => 237,  463 => 221,  453 => 220,  436 => 211,  432 => 210,  428 => 209,  413 => 197,  409 => 196,  405 => 195,  390 => 183,  386 => 182,  382 => 181,  367 => 169,  363 => 168,  359 => 167,  344 => 155,  340 => 154,  336 => 153,  321 => 141,  317 => 140,  313 => 139,  294 => 122,  284 => 121,  177 => 24,  171 => 23,  167 => 21,  157 => 20,  145 => 17,  140 => 15,  134 => 12,  130 => 11,  126 => 10,  120 => 7,  116 => 6,  112 => 5,  109 => 4,  99 => 3,  80 => 2,  70 => 220,  66 => 218,  64 => 121,  60 => 119,  58 => 20,  55 => 19,  53 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block title %}Hello FrontController!{% endblock %}
{% block stylesheets %}
            <!-- plugins:css -->
  <link rel=\"stylesheet\" href=\"{{asset('back/vendors/feather/feather.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('back/vendors/ti-icons/css/themify-icons.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('back/vendors/css/vendor.bundle.base.css')}}\">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel=\"stylesheet\" href=\"{{asset('back/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('back/vendors/ti-icons/css/themify-icons.css')}}\">
  <link rel=\"stylesheet\" type=\"{{asset('back/text/css\" href=\"js/select.dataTables.min.css')}}\">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel=\"stylesheet\" href=\"{{asset('back/css/vertical-layout-light/style.css')}}\">
  <!-- endinject -->
  <link rel=\"shortcut icon\" href=\"{{asset('back/images/favicon.png')}}\" />
        {% endblock %}

{% block navbar %}
<nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
      <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
        <a class=\"navbar-brand brand-logo mr-5\" href=\"{{asset('back/base.html.twig')}}\"><img src=\"{{asset('back/images/logo.png')}}\" class=\"mr-2\" alt=\"logo\"/></a>
        <a class=\"navbar-brand brand-logo-mini\" href=\"{{asset('back/base.html')}}\"><img src=\"{{asset('images/logo.png')}}\" alt=\"logo\"/></a>
      </div>
      <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
        <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
          <span class=\"icon-menu\"></span>
        </button>
        <ul class=\"navbar-nav mr-lg-2\">
          <li class=\"nav-item nav-search d-none d-lg-block\">
            <div class=\"input-group\">
              <div class=\"input-group-prepend hover-cursor\" id=\"navbar-search-icon\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"icon-search\"></i>
                </span>
              </div>
              <input type=\"text\" class=\"form-control\" id=\"navbar-search-input\" placeholder=\"Search now\" aria-label=\"search\" aria-describedby=\"search\">
            </div>
          </li>
        </ul>
        <ul class=\"navbar-nav navbar-nav-right\">
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"icon-bell mx-0\"></i>
              <span class=\"count\"></span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
              <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-success\">
                    <i class=\"ti-info-alt mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    Just now
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-warning\">
                    <i class=\"ti-settings mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">Settings</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    Private message
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-info\">
                    <i class=\"ti-user mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class=\"nav-item nav-profile dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
              <img src=\"images/faces/face28.jpg\" alt=\"profile\"/>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
              <a class=\"dropdown-item\">
                <i class=\"ti-settings text-primary\"></i>
                Settings
              </a>
              <a class=\"dropdown-item\">
                <i class=\"ti-power-off text-primary\"></i>
                Logout
              </a>
            </div>
          </li>
          <li class=\"nav-item nav-settings d-none d-lg-flex\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"icon-ellipsis\"></i>
            </a>
          </li>
        </ul>
        <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
          <span class=\"icon-menu\"></span>
        </button>
      </div>
    </nav>

{% endblock %}


{% block sidebar %}
<div class=\"container-fluid page-body-wrapper\">
<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <ul class=\"nav\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"index.html'>
              <i class=\"icon-grid menu-icon\"></i>
              <span class=\"menu-title\">Dashboard</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#PACK\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"icon-layout menu-icon\"></i>
              <span class=\"menu-title\"> Gestion Pack </span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"PACK\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{asset('back/pages/ui-features/buttons.html')}}\">Buttons</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{asset('back/pages/ui-features/dropdowns.html')}}\">Dropdowns</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{asset('back/pages/ui-features/typography.html')}}\">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#transport\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"icon-layout menu-icon\"></i>
              <span class=\"menu-title\">Gestion Transport</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"transport\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{asset('back/pages/ui-features/buttons.html')}}\">Buttons</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{asset('back/pages/ui-features/dropdowns.html')}}\">Dropdowns</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{asset('back/pages/ui-features/typography.html')}}\">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#blog\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"icon-layout menu-icon\"></i>
              <span class=\"menu-title\">Gestion Blog</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"blog\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{asset('back/pages/ui-features/buttons.html')}}\">Buttons</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{asset('back/pages/ui-features/dropdowns.html')}}\">Dropdowns</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{asset('back/pages/ui-features/typography.html')}}\">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#Utilisateur\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"icon-layout menu-icon\"></i>
              <span class=\"menu-title\">Gestion Utilisateur</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"Utilisateur\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{asset('back/pages/ui-features/buttons.html')}}\">Buttons</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{asset('back/pages/ui-features/dropdowns.html')}}\">Dropdowns</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{asset('back/pages/ui-features/typography.html')}}\">Typography</a></li>
              </ul>
            </div>
          </li>
           <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#evenement\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"icon-layout menu-icon\"></i>
              <span class=\"menu-title\">Gestion Evenement</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"evenement\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{asset('back/pages/ui-features/buttons.html')}}\">Buttons</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{asset('back/pages/ui-features/dropdowns.html')}}\">Dropdowns</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{asset('back/pages/ui-features/typography.html')}}\">Typography</a></li>
              </ul>
            </div>
          </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#Hebergement\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"icon-layout menu-icon\"></i>
              <span class=\"menu-title\">Gestion Hebergement</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"Hebergement\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{asset('back/pages/ui-features/buttons.html')}}\">Buttons</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{asset('back/pages/ui-features/dropdowns.html')}}\">Dropdowns</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{asset('back/pages/ui-features/typography.html')}}\">Typography</a></li>
              </ul>
            </div>
          </li>
         </nav> 
         
{% endblock %}

       
{% block body %}

    <div class=\"main-panel\">
      <div class=\"content-wrapper\">
      <div class=\"row\">
            <div class=\"col-md-12 grid-margin stretch-card\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <p class=\"card-title\">Advanced Table</p>
                  <div class=\"row\">
                    <div class=\"col-12\">
                      <div class=\"table-responsive\">
                        <div id=\"example_wrapper\" class=\"dataTables_wrapper dt-bootstrap4 no-footer\"><div class=\"row\"><div class=\"col-sm-12 col-md-6\"></div><div class=\"col-sm-12 col-md-6\"></div></div><div class=\"row\"><div class=\"col-sm-12\"><table id=\"example\" class=\"display expandable-table dataTable no-footer\" style=\"width: 100%;\" role=\"grid\">
                          
                      <tbody>
                      
        
        {{ form_start(f) }}

{{ form_end(f) }}
                           
                        
                      </tbody>
                      </table></div></div><div class=\"row\"><div class=\"col-sm-12 col-md-5\"></div><div class=\"col-sm-12 col-md-7\"></div></div></div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>

                
              </div>
            </div>
            </div>
            </div>
            </div>
            
  

 {% endblock %}", "utilisateur/modifuser.html.twig", "D:\\Xnewxampp\\htdocs\\projettest-main\\projettest-main\\user\\templates\\utilisateur\\modifuser.html.twig");
    }
}
