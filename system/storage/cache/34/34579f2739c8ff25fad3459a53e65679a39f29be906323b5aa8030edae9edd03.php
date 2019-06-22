<?php

/* basecart/template/common/search.twig */
class __TwigTemplate_078314abcdf271e99e954873d5e6593b6c9d9b14db40df4f70f37bc7c7581e03 extends Twig_Template
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
        echo "<div id=\"search\" class=\"input-group\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control\" />
  <span class=\"input-group-btn\">
    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
  </span>
</div>
";
    }

    public function getTemplateName()
    {
        return "basecart/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div id="search" class="input-group">*/
/*   <input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" class="form-control" />*/
/*   <span class="input-group-btn">*/
/*     <button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>*/
/*   </span>*/
/* </div>*/
/* */
