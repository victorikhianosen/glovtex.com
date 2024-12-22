<?php

/* /mnt/volume_lon1_01/html/glovtex.com/themes/glovtex-v3/partials/layout/css.htm */
class __TwigTemplate_1ed632709c075badd83549777e53d9269f4ceeae7164e5666c323d653af503ed extends Twig_Template
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
        echo "<meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"generator\" content=\"Mobirise v3.12.1, mobirise.com\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"shortcut icon\" href=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/glovtex-logo-188x128.png");
        echo "\" type=\"image/x-icon\">
  <meta name=\"description\" content=\"home\">
  <title>Glovtex |";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin\">
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\">
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i\">
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/bootstrap-material-design-font/css/material.css");
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/web/assets/mobirise-icons/mobirise-icons.css");
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/et-line-font-plugin/style.css");
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/tether/tether.min.css");
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/bootstrap/css/bootstrap.min.css");
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/animate.css/animate.min.css");
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/dropdown/css/style.css");
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/socicon/css/styles.css");
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/theme/css/style.css");
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/mobirise-gallery/style.css");
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/mobirise/css/mbr-additional.css");
        echo "\" type=\"text/css\">";
    }

    public function getTemplateName()
    {
        return "/mnt/volume_lon1_01/html/glovtex.com/themes/glovtex-v3/partials/layout/css.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  57 => 16,  53 => 15,  49 => 14,  45 => 13,  41 => 12,  37 => 11,  30 => 7,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"generator\" content=\"Mobirise v3.12.1, mobirise.com\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"shortcut icon\" href=\"{{ 'assets/images/glovtex-logo-188x128.png'|theme }}\" type=\"image/x-icon\">
  <meta name=\"description\" content=\"home\">
  <title>Glovtex | {{ this.page.title }}</title>
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin\">
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\">
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/bootstrap-material-design-font/css/material.css'|theme }}\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/web/assets/mobirise-icons/mobirise-icons.css'|theme }}\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/et-line-font-plugin/style.css'|theme }}\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/tether/tether.min.css'|theme }}\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/bootstrap/css/bootstrap.min.css'|theme }}\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/animate.css/animate.min.css'|theme }}\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/dropdown/css/style.css'|theme }}\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/socicon/css/styles.css'|theme }}\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/theme/css/style.css'|theme }}\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/mobirise-gallery/style.css'|theme }}\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/mobirise/css/mbr-additional.css'|theme }}\" type=\"text/css\">", "/mnt/volume_lon1_01/html/glovtex.com/themes/glovtex-v3/partials/layout/css.htm", "");
    }
}
