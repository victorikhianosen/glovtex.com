<?php

/* /var/www/html/glovtex.com/themes/glovtex/layouts/default.htm */
class __TwigTemplate_2f41f53736825f6fa27e1e99a269bcac9dc744f7912764fd283a94f2aa6fbc08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">
  <title>Glovtex | ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
  ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("home/css"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "
  <!--[if lt IE 9]>
    <script src=\"js/html5shiv.js\"></script>
    <script src=\"js/respond.min.js\"></script>
  <![endif]-->
  
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class=\"preloader\"> <i class=\"fa fa-circle-o-notch fa-spin\"></i></div>
  <!--/.preloader-->
  </div><!--/#home-slider-->
    ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("home/nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "
  <!--/#home-->
  ";
        // line 27
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 28
        echo " 
    ";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("home/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "  <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/jquery.js", 1 => "assets/js/bootstrap.min.js", 2 => "assets/js/jquery.inview.min.js", 3 => "assets/js/wow.min.js", 4 => "assets/js/mousescroll.js", 5 => "assets/js/smoothscroll.js", 6 => "assets/js/jquery.countTo.js", 7 => "assets/js/lightbox.min.js", 8 => "assets/js/main.js"));
        // line 41
        echo "\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glovtex.com/themes/glovtex/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 41,  72 => 31,  69 => 30,  65 => 29,  62 => 28,  60 => 27,  56 => 25,  52 => 24,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">
  <title>Glovtex | {{ this.page.title }}</title>
  {% partial 'home/css' %}

  <!--[if lt IE 9]>
    <script src=\"js/html5shiv.js\"></script>
    <script src=\"js/respond.min.js\"></script>
  <![endif]-->
  
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class=\"preloader\"> <i class=\"fa fa-circle-o-notch fa-spin\"></i></div>
  <!--/.preloader-->
  </div><!--/#home-slider-->
    {% partial 'home/nav' %}

  <!--/#home-->
  {% page %}
 
    {% partial 'home/footer' %}
  <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
  <script type=\"text/javascript\" src=\"{{ [
        'assets/js/jquery.js',
        'assets/js/bootstrap.min.js',
        'assets/js/jquery.inview.min.js',
        'assets/js/wow.min.js',
        'assets/js/mousescroll.js',
        'assets/js/smoothscroll.js',
        'assets/js/jquery.countTo.js',
        'assets/js/lightbox.min.js',
        'assets/js/main.js'
  ]|theme }}\"></script>

</body>
</html>", "/var/www/html/glovtex.com/themes/glovtex/layouts/default.htm", "");
    }
}
