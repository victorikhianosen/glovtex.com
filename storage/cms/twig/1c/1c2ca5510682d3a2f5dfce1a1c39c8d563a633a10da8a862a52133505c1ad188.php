<?php

/* /var/www/html/glovtex.com/themes/glovtex/partials/home/css.htm */
class __TwigTemplate_81fd3c7a9b97c7de4c13250b9b4a8fbf4be05c36a353180e31374e253fe27f2d extends Twig_Template
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
        echo "<link href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/animate.min.css");
        echo "\" rel=\"stylesheet\"> 
  <link href=\"";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/font-awesome.min.css");
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/lightbox.css");
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/main.css\" rel=\"stylesheet");
        echo "\">
  <link id=\"css-preset\" href=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/presets/preset6.css");
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/responsive.css");
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/custom.css");
        echo "\" rel=\"stylesheet\">
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/favicon.ico");
        echo "\">";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glovtex.com/themes/glovtex/partials/home/css.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\" rel=\"stylesheet\">
  <link href=\"{{ 'assets/css/animate.min.css'|theme }}\" rel=\"stylesheet\"> 
  <link href=\"{{ 'assets/css/font-awesome.min.css'|theme }}\" rel=\"stylesheet\">
  <link href=\"{{ 'assets/css/lightbox.css'|theme }}\" rel=\"stylesheet\">
  <link href=\"{{ 'assets/css/main.css\" rel=\"stylesheet'|theme }}\">
  <link id=\"css-preset\" href=\"{{ 'assets/css/presets/preset6.css'|theme }}\" rel=\"stylesheet\">
  <link href=\"{{ 'assets/css/responsive.css'|theme }}\" rel=\"stylesheet\">
  <link href=\"{{ 'assets/css/custom.css'|theme }}\" rel=\"stylesheet\">
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel=\"shortcut icon\" href=\"{{ 'assets/images/favicon.ico'|theme }}\">", "/var/www/html/glovtex.com/themes/glovtex/partials/home/css.htm", "");
    }
}
