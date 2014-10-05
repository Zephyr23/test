<?php

/* ::base.html.twig */
class __TwigTemplate_88c72d2768066242da2993581f8fe46807bb447116aa8d686f09b0b6b780aaab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("email.php"), "html", null, true);
        echo "\"/>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nenadtest/css/layout.css"), "html", null, true);
        echo "\" />
\t ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "806ffd2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_806ffd2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/806ffd2_part_1_bjqs_1.css");
            // line 11
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
 \t";
            // asset "806ffd2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_806ffd2_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/806ffd2_part_1_demo_2.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
 \t";
            // asset "806ffd2_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_806ffd2_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/806ffd2_part_1_izgled_3.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
 \t";
            // asset "806ffd2_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_806ffd2_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/806ffd2_part_1_layout_4.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
 \t";
            // asset "806ffd2_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_806ffd2_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/806ffd2_part_1_layout_5.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
 \t";
        } else {
            // asset "806ffd2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_806ffd2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/806ffd2.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
 \t";
        }
        unset($context["asset_url"]);
        // line 13
        echo " 
\t";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "\t
    </head>
    <body>
\t<div class=\"wrapper\">
\t<div class=\"header\">
\t<div id=\"innerheader\">
\t\t<div class=\"header_l\">
\t\t<a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("nenad_test_homepage");
        echo "\">zephyr</a>
\t \t</div>
\t\t
\t\t<div class=\"header_r\">

\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t
\t\t\t\t
\t\t\t\t<table cellspacing=\"0\">
\t\t\t\t<tr >
\t\t\t\t\t<td class=\"txt\">
\t\t\t\t\t<label>Username</label>  
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"txt\">
\t\t\t\t\t<label>Password</label>
\t\t\t\t\t</td>
   \t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t<input type=\"text\" name=\"email\" class=\"log\">
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t<input  type=\"password\" name=\"password\" class=\"log\">
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t<input type=\"submit\" id=\"login\" value=\"Log in\" name=\"login\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</form>
\t\t</div>
\t\t
\t\t

\t</div>
\t</div>
\t<div class=\"body\">
        ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "\t</div>
\t</div>
\t
    </body>
\t<footer>";
        // line 65
        $this->displayBlock('footer', $context, $blocks);
        echo "</footer>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        // line 60
        echo "\t";
    }

    // line 65
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 65,  171 => 60,  168 => 59,  163 => 14,  157 => 6,  150 => 65,  144 => 61,  142 => 59,  102 => 22,  93 => 15,  91 => 14,  88 => 13,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  34 => 7,  30 => 6,  23 => 1,);
    }
}
