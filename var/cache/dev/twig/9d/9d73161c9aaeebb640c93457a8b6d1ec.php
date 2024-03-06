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

/* base.html.twig */
class __TwigTemplate_0679a7e320a55c4cabca169aca36bb87 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "    </head>
    <body>
        ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "
             <link rel=\"stylesheet\" type=\"text/css\" href=\"styles/bootstrap4/bootstrap.min.css\">
<link href=\"plugins/font-awesome-4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/owl.carousel.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/owl.theme.default.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/animate.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/main_styles.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/responsive.css\">


<link rel=\"stylesheet\" href=\"vendors/feather/feather.css\">
  <link rel=\"stylesheet\" href=\"vendors/ti-icons/css/themify-icons.css\">
  <link rel=\"stylesheet\" href=\"vendors/css/vendor.bundle.base.css\">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel=\"stylesheet\" href=\"vendors/datatables.net-bs4/dataTables.bootstrap4.css\">
  <link rel=\"stylesheet\" href=\"vendors/ti-icons/css/themify-icons.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"js/select.dataTables.min.css\">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel=\"stylesheet\" href=\"css/vertical-layout-light/style.css\">

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "             <script src=\"js/jquery-3.2.1.min.js\"></script>
             <script src=\"styles/bootstrap4/popper.js\"></script>
             <script src=\"styles/bootstrap4/bootstrap.min.js\"></script>
             <script src=\"plugins/OwlCarousel2-2.2.1/owl.carousel.js\"></script>
             <script src=\"plugins/easing/easing.js\"></script>
             <script src=\"js/custom.js\"></script>


             <script src=\"vendors/js/vendor.bundle.base.js\"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src=\"vendors/chart.js/Chart.min.js\"></script>
  <script src=\"vendors/datatables.net/jquery.dataTables.js\"></script>
  <script src=\"vendors/datatables.net-bs4/dataTables.bootstrap4.js\"></script>
  <script src=\"js/dataTables.select.min.js\"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src=\"js/off-canvas.js\"></script>
  <script src=\"js/hoverable-collapse.js\"></script>
  <script src=\"js/template.js\"></script>
  <script src=\"js/settings.js\"></script>
  <script src=\"js/todolist.js\"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=\"js/dashboard.js\"></script>
  <script src=\"js/Chart.roundedBarCharts.js\"></script>

  
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 66
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  194 => 66,  155 => 34,  145 => 33,  113 => 9,  103 => 8,  84 => 5,  72 => 67,  70 => 66,  66 => 64,  64 => 33,  61 => 32,  58 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}

             <link rel=\"stylesheet\" type=\"text/css\" href=\"styles/bootstrap4/bootstrap.min.css\">
<link href=\"plugins/font-awesome-4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/owl.carousel.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/owl.theme.default.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/animate.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/main_styles.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/responsive.css\">


<link rel=\"stylesheet\" href=\"vendors/feather/feather.css\">
  <link rel=\"stylesheet\" href=\"vendors/ti-icons/css/themify-icons.css\">
  <link rel=\"stylesheet\" href=\"vendors/css/vendor.bundle.base.css\">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel=\"stylesheet\" href=\"vendors/datatables.net-bs4/dataTables.bootstrap4.css\">
  <link rel=\"stylesheet\" href=\"vendors/ti-icons/css/themify-icons.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"js/select.dataTables.min.css\">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel=\"stylesheet\" href=\"css/vertical-layout-light/style.css\">

        {% endblock %}

        {% block javascripts %}
             <script src=\"js/jquery-3.2.1.min.js\"></script>
             <script src=\"styles/bootstrap4/popper.js\"></script>
             <script src=\"styles/bootstrap4/bootstrap.min.js\"></script>
             <script src=\"plugins/OwlCarousel2-2.2.1/owl.carousel.js\"></script>
             <script src=\"plugins/easing/easing.js\"></script>
             <script src=\"js/custom.js\"></script>


             <script src=\"vendors/js/vendor.bundle.base.js\"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src=\"vendors/chart.js/Chart.min.js\"></script>
  <script src=\"vendors/datatables.net/jquery.dataTables.js\"></script>
  <script src=\"vendors/datatables.net-bs4/dataTables.bootstrap4.js\"></script>
  <script src=\"js/dataTables.select.min.js\"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src=\"js/off-canvas.js\"></script>
  <script src=\"js/hoverable-collapse.js\"></script>
  <script src=\"js/template.js\"></script>
  <script src=\"js/settings.js\"></script>
  <script src=\"js/todolist.js\"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=\"js/dashboard.js\"></script>
  <script src=\"js/Chart.roundedBarCharts.js\"></script>

  
        {% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
    </body>
</html>
", "base.html.twig", "D:\\Xnewxampp\\htdocs\\projettest-main\\projettest-main\\user\\templates\\base.html.twig");
    }
}
