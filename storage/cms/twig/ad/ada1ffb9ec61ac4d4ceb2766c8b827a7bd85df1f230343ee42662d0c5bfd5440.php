<?php

/* /mnt/volume_lon1_01/html/glovtex.com/themes/glovtex-v3/layouts/Layout/default.htm */
class __TwigTemplate_73fbed70928ded74af5523d948735efcd7be7f00ede6ad6ce92fbef4f7dcfe96 extends Twig_Template
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
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.12.1, https://mobirise.com -->
";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("layout/css"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "</head>
<body>
";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("layout/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 9
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 10
        echo "
";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("layout/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("layout/javascript"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 13
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 14
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 15
        echo "  
  
  <input name=\"animation\" type=\"hidden\">
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/mnt/volume_lon1_01/html/glovtex.com/themes/glovtex-v3/layouts/Layout/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 15,  57 => 14,  50 => 13,  46 => 12,  42 => 11,  39 => 10,  37 => 9,  33 => 8,  29 => 6,  25 => 5,  19 => 1,);
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
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.12.1, https://mobirise.com -->
{% partial 'layout/css' %}
</head>
<body>
{% partial 'layout/header' %}
{% page %}

{% partial 'layout/footer' %}
{% partial 'layout/javascript' %}
{% framework extras %}
{% scripts %}
  
  
  <input name=\"animation\" type=\"hidden\">
  </body>
</html>", "/mnt/volume_lon1_01/html/glovtex.com/themes/glovtex-v3/layouts/Layout/default.htm", "");
    }
}
