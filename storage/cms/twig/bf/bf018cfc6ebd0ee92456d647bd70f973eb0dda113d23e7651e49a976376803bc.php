<?php

/* /mnt/volume_lon1_01/html/glovtex.com/themes/glovtex-v3/layouts/fallback.htm */
class __TwigTemplate_1c5233ba361cec1b23c7d55ea52009380b7986f8fca1a34cade7a609f1291726 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/mnt/volume_lon1_01/html/glovtex.com/themes/glovtex-v3/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/mnt/volume_lon1_01/html/glovtex.com/themes/glovtex-v3/layouts/fallback.htm", "");
    }
}
