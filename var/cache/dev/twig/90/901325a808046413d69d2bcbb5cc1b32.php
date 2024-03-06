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

/* utilisateur/adduser.html.twig */
class __TwigTemplate_085ea650a88523a8fea16719aa345c1a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
            'navbar' => [$this, 'block_navbar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/adduser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/adduser.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/adduser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "</title>
";
        // line 11
        $this->displayBlock('navbar', $context, $blocks);
        // line 308
        echo " 

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "register";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 12
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"Travelix Project\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
</head>

<body>

<div class=\"super_container\">
\t
\t<!-- Header -->

\t<header class=\"header\">

\t\t<!-- Top Bar -->

\t\t<div class=\"top_bar\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col d-flex flex-row\">
\t\t\t\t\t\t<div class=\"user_box ml-auto\">
\t\t\t\t\t\t\t<div class=\"user_box_login user_box_link\"><a href=\"login.html\">login</a></div>
\t\t\t\t\t\t\t<div class=\"user_box_register user_box_link\"><a href=\"register.html\">register</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t
\t\t</div>

\t\t<!-- Main Navigation -->

\t\t<nav class=\"main_nav\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col main_nav_col d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t<div class=\"logo_container\">
\t\t\t\t\t\t\t<div class=\"logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\"></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"main_nav_container ml-auto\">
\t\t\t\t\t\t\t<ul class=\"main_nav_list\">
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"index.html\">home</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"recommandation.htmls\">recommandation</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"trasport.html\">transport</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"hebergement.html\">hebergement</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"blog.html\">blog</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"evenement.html\">evenement</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content_search ml-lg-0 ml-auto\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\twidth=\"17px\" height=\"17px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t<path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
\t\t\t\t\t\t\t\t\t\t\ts112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
\t\t\t\t\t\t\t\t\t\t\tC407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
\t\t\t\t\t\t\t\t\t\t\tM119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
\t\t\t\t\t\t\t\t\t\t\tc0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z\"/>
\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t<path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
\t\t\t\t\t\t\t\t\t\t\tc8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
\t\t\t\t\t\t\t\t\t\t\tC-2.019,484.77-2.019,497.865,6.057,505.942z\"/>
\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<form id=\"search_form\" class=\"search_form bez_1\">
\t\t\t\t\t\t\t<input type=\"search\" class=\"search_content_input bez_1\">
\t\t\t\t\t\t</form>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"hamburger\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars trans_200\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</nav>

\t</header>

\t<div class=\"menu trans_500\">
\t\t<div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
\t\t\t<div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
\t\t\t<div class=\"logo menu_logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\"></a></div>
\t\t\t<ul>
\t\t\t\t<li class=\"main_nav_item\"><a href=\"#\">home</a></li>
\t\t\t\t<li class=\"main_nav_item\"><a href=\"recommandation.htmls\">recommandation</a></li>
\t\t\t\t<li class=\"main_nav_item\"><a href=\"about.html\">transport</a></li>
\t\t\t\t<li class=\"main_nav_item\"><a href=\"offers.html\">hebergement</a></li>
\t\t\t\t<li class=\"main_nav_item\"><a href=\"blog.html\">blog</a></li>
\t\t\t\t<li class=\"main_nav_item\"><a href=\"contact.html\">evenement</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>

\t<!-- Home -->

\t<div class=\"home\">
\t\t<div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/add.jpg\"></div>
\t\t<div class=\"home_content\">
\t\t\t<div class=\"home_title\">register</div>
\t\t</div>
\t</div>

\t<!-- Contact -->

\t<div class=\"contact_form_section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">

\t\t\t\t\t<!-- register Form -->
\t\t\t\t\t<div class=\"contact_form_container\">
\t\t\t\t\t\t<div class=\"contact_title text-center\">register</div>
\t\t\t\t\t\t  ";
        // line 132
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 132, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 133, $this->source); })()), "nom", [], "any", false, false, false, 133), 'widget', ["attr" => ["class" => "contact_form_name input_field", "placeholder" => "nom"]]);
        echo "
                            ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 134, $this->source); })()), "prenom", [], "any", false, false, false, 134), 'widget', ["attr" => ["class" => "class=\"contact_form_email input_field", "placeholder" => "prenom"]]);
        echo "
                            ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 135, $this->source); })()), "username", [], "any", false, false, false, 135), 'widget', ["attr" => ["class" => "contact_form_subject input_field", "placeholder" => "username"]]);
        echo "
                            ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 136, $this->source); })()), "email", [], "any", false, false, false, 136), 'widget', ["attr" => ["class" => "contact_form_subject input_field", "placeholder" => "email"]]);
        echo "
                            ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 137, $this->source); })()), "mot_de_passe", [], "any", false, false, false, 137), 'widget', ["attr" => ["class" => "contact_form_name input_field", "placeholder" => "mot de passe"]]);
        echo "
                            ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 138, $this->source); })()), "image", [], "any", false, false, false, 138), 'widget', ["attr" => ["class" => "contact_form_name input_field", "placeholder" => "image de profile"]]);
        echo "
                            ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 139, $this->source); })()), "typeu", [], "any", false, false, false, 139), 'widget', ["attr" => ["class" => "contact_form_name input_field", "placeholder" => "type"]]);
        echo "
\t\t\t\t\t\t\t
                            ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 141, $this->source); })()), "save", [], "any", false, false, false, 141), 'widget', ["attr" => ["class" => "form_submit_button button trans_200", "placeholder" => "enregistrer"]]);
        echo "
\t\t\t\t\t\t\t<span></span><span></span><span></span>
\t\t\t\t\t\t";
        // line 143
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 143, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"contact_form_section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">

\t\t\t\t\t<!-- login Form -->
\t\t\t\t\t<div class=\"contact_form_container\">
\t\t\t\t\t\t<div class=\"contact_title text-center\">login</div>
\t\t\t\t\t\t<form action=\"#\" id=\"contact_form\" class=\"contact_form text-center\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_form_nom\" class=\"contact_form_name input_field\" placeholder=\"user-name\" required=\"required\" data-error=\"nom is required.\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_form_prenom\" class=\"contact_form_email input_field\" placeholder=\"mot-de-pass\" required=\"required\" data-error=\"prenom is required.\">
\t\t\t\t\t\t\t<button type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button trans_200\">enregistrer<span></span><span></span><span></span></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- About -->
\t<div class=\"about\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Google Map -->
\t\t
\t<div class=\"travelix_map\">
\t\t<div id=\"google_map\" class=\"google_map\">
\t\t\t<div class=\"map_container\">
\t\t\t\t<div id=\"map\"></div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Footer -->

\t<footer class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_content footer_about\">
\t\t\t\t\t\t\t<div class=\"logo_container footer_logo\">
\t\t\t\t\t\t\t\t<div class=\"logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\"></a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"footer_about_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
\t\t\t\t\t\t\t<ul class=\"footer_social_list\">
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_title\">blog posts</div>
\t\t\t\t\t\t<div class=\"footer_content footer_blog\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Footer blog item -->
\t\t\t\t\t\t\t<div class=\"footer_blog_item clearfix\">
\t\t\t\t\t\t\t\t<div class=\"footer_blog_image\"><img src=\"images/footer_blog_1.jpg\" alt=\"https://unsplash.com/@avidenov\"></div>
\t\t\t\t\t\t\t\t<div class=\"footer_blog_content\">
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_date\">Nov 29, 2017</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Footer blog item -->
\t\t\t\t\t\t\t<div class=\"footer_blog_item clearfix\">
\t\t\t\t\t\t\t\t<div class=\"footer_blog_image\"><img src=\"images/footer_blog_2.jpg\" alt=\"https://unsplash.com/@deannaritchie\"></div>
\t\t\t\t\t\t\t\t<div class=\"footer_blog_content\">
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_title\"><a href=\"blog.html\">New destinations for you</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_date\">Nov 29, 2017</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Footer blog item -->
\t\t\t\t\t\t\t<div class=\"footer_blog_item clearfix\">
\t\t\t\t\t\t\t\t<div class=\"footer_blog_image\"><img src=\"images/footer_blog_3.jpg\" alt=\"https://unsplash.com/@bergeryap87\"></div>
\t\t\t\t\t\t\t\t<div class=\"footer_blog_content\">
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_date\">Nov 29, 2017</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_title\">tags</div>
\t\t\t\t\t\t<div class=\"footer_content footer_tags\">
\t\t\t\t\t\t\t<ul class=\"tags_list clearfix\">
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">design</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">fashion</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">music</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">video</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">party</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">photography</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">adventure</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">travel</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_title\">contact info</div>
\t\t\t\t\t\t<div class=\"footer_content footer_contact\">
\t\t\t\t\t\t\t<ul class=\"contact_info_list\">
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/placeholder.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/phone-call.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\">2556-808-8613</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/message.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/planet-earth.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\"><a href=\"https://colorlib.com\">www.colorlib.com</a></div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</footer>


</div>
</body>

</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "utilisateur/adduser.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  284 => 143,  279 => 141,  274 => 139,  270 => 138,  266 => 137,  262 => 136,  258 => 135,  254 => 134,  250 => 133,  246 => 132,  124 => 12,  114 => 11,  95 => 9,  83 => 308,  81 => 11,  78 => 10,  76 => 9,  70 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>{% block title %}register{% endblock %}
</title>
{% block navbar %}
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"Travelix Project\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
</head>

<body>

<div class=\"super_container\">
\t
\t<!-- Header -->

\t<header class=\"header\">

\t\t<!-- Top Bar -->

\t\t<div class=\"top_bar\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col d-flex flex-row\">
\t\t\t\t\t\t<div class=\"user_box ml-auto\">
\t\t\t\t\t\t\t<div class=\"user_box_login user_box_link\"><a href=\"login.html\">login</a></div>
\t\t\t\t\t\t\t<div class=\"user_box_register user_box_link\"><a href=\"register.html\">register</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t
\t\t</div>

\t\t<!-- Main Navigation -->

\t\t<nav class=\"main_nav\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col main_nav_col d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t<div class=\"logo_container\">
\t\t\t\t\t\t\t<div class=\"logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\"></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"main_nav_container ml-auto\">
\t\t\t\t\t\t\t<ul class=\"main_nav_list\">
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"index.html\">home</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"recommandation.htmls\">recommandation</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"trasport.html\">transport</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"hebergement.html\">hebergement</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"blog.html\">blog</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"evenement.html\">evenement</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content_search ml-lg-0 ml-auto\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\twidth=\"17px\" height=\"17px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t<path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
\t\t\t\t\t\t\t\t\t\t\ts112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
\t\t\t\t\t\t\t\t\t\t\tC407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
\t\t\t\t\t\t\t\t\t\t\tM119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
\t\t\t\t\t\t\t\t\t\t\tc0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z\"/>
\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t<path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
\t\t\t\t\t\t\t\t\t\t\tc8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
\t\t\t\t\t\t\t\t\t\t\tC-2.019,484.77-2.019,497.865,6.057,505.942z\"/>
\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<form id=\"search_form\" class=\"search_form bez_1\">
\t\t\t\t\t\t\t<input type=\"search\" class=\"search_content_input bez_1\">
\t\t\t\t\t\t</form>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"hamburger\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars trans_200\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</nav>

\t</header>

\t<div class=\"menu trans_500\">
\t\t<div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
\t\t\t<div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
\t\t\t<div class=\"logo menu_logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\"></a></div>
\t\t\t<ul>
\t\t\t\t<li class=\"main_nav_item\"><a href=\"#\">home</a></li>
\t\t\t\t<li class=\"main_nav_item\"><a href=\"recommandation.htmls\">recommandation</a></li>
\t\t\t\t<li class=\"main_nav_item\"><a href=\"about.html\">transport</a></li>
\t\t\t\t<li class=\"main_nav_item\"><a href=\"offers.html\">hebergement</a></li>
\t\t\t\t<li class=\"main_nav_item\"><a href=\"blog.html\">blog</a></li>
\t\t\t\t<li class=\"main_nav_item\"><a href=\"contact.html\">evenement</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>

\t<!-- Home -->

\t<div class=\"home\">
\t\t<div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/add.jpg\"></div>
\t\t<div class=\"home_content\">
\t\t\t<div class=\"home_title\">register</div>
\t\t</div>
\t</div>

\t<!-- Contact -->

\t<div class=\"contact_form_section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">

\t\t\t\t\t<!-- register Form -->
\t\t\t\t\t<div class=\"contact_form_container\">
\t\t\t\t\t\t<div class=\"contact_title text-center\">register</div>
\t\t\t\t\t\t  {{ form_start(f) }}
\t\t\t\t\t\t\t{{ form_widget(f.nom, {'attr': {'class': 'contact_form_name input_field','placeholder': 'nom'}}) }}
                            {{ form_widget(f.prenom, {'attr': {'class': 'class=\"contact_form_email input_field','placeholder': 'prenom'}}) }}
                            {{ form_widget(f.username, {'attr': {'class': 'contact_form_subject input_field','placeholder': 'username'}}) }}
                            {{ form_widget(f.email, {'attr': {'class': 'contact_form_subject input_field','placeholder': 'email'}}) }}
                            {{ form_widget(f.mot_de_passe, {'attr': {'class': 'contact_form_name input_field','placeholder': 'mot de passe'}}) }}
                            {{ form_widget(f.image, {'attr': {'class': 'contact_form_name input_field','placeholder': 'image de profile'}}) }}
                            {{ form_widget(f.typeu, {'attr': {'class': 'contact_form_name input_field','placeholder': 'type'}}) }}
\t\t\t\t\t\t\t
                            {{ form_widget(f.save, {'attr': {'class': 'form_submit_button button trans_200','placeholder': 'enregistrer'}}) }}
\t\t\t\t\t\t\t<span></span><span></span><span></span>
\t\t\t\t\t\t{{ form_end(f) }}
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"contact_form_section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">

\t\t\t\t\t<!-- login Form -->
\t\t\t\t\t<div class=\"contact_form_container\">
\t\t\t\t\t\t<div class=\"contact_title text-center\">login</div>
\t\t\t\t\t\t<form action=\"#\" id=\"contact_form\" class=\"contact_form text-center\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_form_nom\" class=\"contact_form_name input_field\" placeholder=\"user-name\" required=\"required\" data-error=\"nom is required.\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_form_prenom\" class=\"contact_form_email input_field\" placeholder=\"mot-de-pass\" required=\"required\" data-error=\"prenom is required.\">
\t\t\t\t\t\t\t<button type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button trans_200\">enregistrer<span></span><span></span><span></span></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- About -->
\t<div class=\"about\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Google Map -->
\t\t
\t<div class=\"travelix_map\">
\t\t<div id=\"google_map\" class=\"google_map\">
\t\t\t<div class=\"map_container\">
\t\t\t\t<div id=\"map\"></div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Footer -->

\t<footer class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_content footer_about\">
\t\t\t\t\t\t\t<div class=\"logo_container footer_logo\">
\t\t\t\t\t\t\t\t<div class=\"logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\"></a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"footer_about_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
\t\t\t\t\t\t\t<ul class=\"footer_social_list\">
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_title\">blog posts</div>
\t\t\t\t\t\t<div class=\"footer_content footer_blog\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Footer blog item -->
\t\t\t\t\t\t\t<div class=\"footer_blog_item clearfix\">
\t\t\t\t\t\t\t\t<div class=\"footer_blog_image\"><img src=\"images/footer_blog_1.jpg\" alt=\"https://unsplash.com/@avidenov\"></div>
\t\t\t\t\t\t\t\t<div class=\"footer_blog_content\">
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_date\">Nov 29, 2017</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Footer blog item -->
\t\t\t\t\t\t\t<div class=\"footer_blog_item clearfix\">
\t\t\t\t\t\t\t\t<div class=\"footer_blog_image\"><img src=\"images/footer_blog_2.jpg\" alt=\"https://unsplash.com/@deannaritchie\"></div>
\t\t\t\t\t\t\t\t<div class=\"footer_blog_content\">
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_title\"><a href=\"blog.html\">New destinations for you</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_date\">Nov 29, 2017</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Footer blog item -->
\t\t\t\t\t\t\t<div class=\"footer_blog_item clearfix\">
\t\t\t\t\t\t\t\t<div class=\"footer_blog_image\"><img src=\"images/footer_blog_3.jpg\" alt=\"https://unsplash.com/@bergeryap87\"></div>
\t\t\t\t\t\t\t\t<div class=\"footer_blog_content\">
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_date\">Nov 29, 2017</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_title\">tags</div>
\t\t\t\t\t\t<div class=\"footer_content footer_tags\">
\t\t\t\t\t\t\t<ul class=\"tags_list clearfix\">
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">design</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">fashion</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">music</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">video</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">party</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">photography</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">adventure</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">travel</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_title\">contact info</div>
\t\t\t\t\t\t<div class=\"footer_content footer_contact\">
\t\t\t\t\t\t\t<ul class=\"contact_info_list\">
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/placeholder.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/phone-call.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\">2556-808-8613</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/message.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/planet-earth.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\"><a href=\"https://colorlib.com\">www.colorlib.com</a></div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</footer>


</div>
</body>

</html>
{% endblock %} 

{% endblock %}

", "utilisateur/adduser.html.twig", "D:\\Xnewxampp\\htdocs\\projettest-main\\projettest-main\\user\\templates\\utilisateur\\adduser.html.twig");
    }
}
