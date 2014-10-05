<?php

/* NenadTestBundle:Default:index.html.twig */
class __TwigTemplate_367cc3b6189a1ba752925501a80d3592954522e1e781c1a7cfc92b630b7d3ec8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nenadtest/js/jquery.js"), "html", null, true);
        echo "\"></script>
    \t<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nenadtest/js/bjqs-1.3.min.js"), "html", null, true);
        echo "\"></script>
      
\t<script class=\"secret-source\">
        jQuery(document).ready(function(\$) {

          \$('#banner-fade').bjqs({
            height      : 500,
            width       : 980,
            responsive  : true
          });

        });
      \t</script>
\t
\t";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "
<div id=\"container\">
  
      <div id=\"banner-fade\">

        <!-- start Basic Jquery Slider -->
        <ul class=\"bjqs\">
          <li><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nenadtest/images/01.jpg"), "html", null, true);
        echo "\" title=\"zephyr_skateboards\"></li>
          <li><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nenadtest/images/02.png"), "html", null, true);
        echo "\"title=\"zephyr_skateboards\"></li>
          <li><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nenadtest/images/03.jpg"), "html", null, true);
        echo "\" title=\"zephyr_skateboards\"></li>
\t  <li><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nenadtest/images/04.jpg"), "html", null, true);
        echo "\" title=\"zephyr_skateboards\"></li>
\t  <li><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nenadtest/images/05.jpg"), "html", null, true);
        echo "\" title=\"zephyr_skateboards\"></li>
\t  <li><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nenadtest/images/06.jpg"), "html", null, true);
        echo "\" title=\"zephyr_skateboards\"></li>
        </ul>
        <!-- end Basic jQuery Slider -->

      </div>
      <!-- End outer wrapper -->
\t
    </div>
 
";
    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("nenad_test_email");
        echo "\">Contact owner</a>";
    }

    public function getTemplateName()
    {
        return "NenadTestBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 45,  89 => 35,  85 => 34,  81 => 33,  77 => 32,  73 => 31,  69 => 30,  60 => 23,  57 => 22,  38 => 5,  33 => 4,  30 => 3,);
    }
}
