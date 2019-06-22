<?php

/* extension/module/sms_alert.twig */
class __TwigTemplate_d13b89928bdb37b9e103ed3e28c98dccfb014bed403a52a4c3517ede1f0f137e extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-google-hangouts\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
\t  
\t <div class=\"row\">
\t  <div class=\"col-sm-6\">
        <form action=\"";
        // line 30
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
         
          <div class=\"form-group required\">
            <label class=\"col-sm-4 control-label\" for=\"sms_alert_tel\">";
        // line 33
        echo (isset($context["entry_sms_alert_tel"]) ? $context["entry_sms_alert_tel"] : null);
        echo "</label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"module_sms_alert_tel\" value=\"";
        // line 35
        echo (isset($context["sms_alert_tel"]) ? $context["sms_alert_tel"] : null);
        echo "\" placeholder=\"79272000000\" id=\"sms_alert_tel\" class=\"form-control\" />
              ";
        // line 36
        if ((isset($context["error_sms_alert_tel"]) ? $context["error_sms_alert_tel"] : null)) {
            // line 37
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_sms_alert_tel"]) ? $context["error_sms_alert_tel"] : null);
            echo "</div>
              ";
        }
        // line 39
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-4 control-label\" for=\"sms_alert_id\">";
        // line 42
        echo (isset($context["entry_sms_alert_id"]) ? $context["entry_sms_alert_id"] : null);
        echo "</label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"module_sms_alert_id\" value=\"";
        // line 44
        echo (isset($context["sms_alert_id"]) ? $context["sms_alert_id"] : null);
        echo "\" placeholder=\"4a1dc787-5f12-8814-fd11-XXXXXXXXXXXX\" id=\"sms_alert_id\" class=\"form-control\" />
              ";
        // line 45
        if ((isset($context["error_sms_alert_id"]) ? $context["error_sms_alert_id"] : null)) {
            // line 46
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_sms_alert_id"]) ? $context["error_sms_alert_id"] : null);
            echo "</div>
              ";
        }
        // line 48
        echo "            </div>
          </div>
\t\t  
\t\t<div class=\"form-group\">
\t\t  <label class=\"col-sm-4 control-label\" for=\"input-process-status\">";
        // line 52
        echo (isset($context["entry_processing_status"]) ? $context["entry_processing_status"] : null);
        echo "</label>
\t\t  <div class=\"col-sm-8\">
\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t  ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 56
            echo "\t\t\t  <div class=\"checkbox\">
\t\t\t\t<label>
\t\t\t\t  ";
            // line 58
            if (twig_in_filter($this->getAttribute($context["order_status"], "order_status_id", array()), (isset($context["sms_alert_processing_status"]) ? $context["sms_alert_processing_status"] : null))) {
                // line 59
                echo "\t\t\t\t  <input type=\"checkbox\" name=\"module_sms_alert_processing_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" checked=\"checked\" />
\t\t\t\t  ";
                // line 60
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
\t\t\t\t  ";
            } else {
                // line 62
                echo "\t\t\t\t  <input type=\"checkbox\" name=\"module_sms_alert_processing_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" />
\t\t\t\t  ";
                // line 63
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
\t\t\t\t  ";
            }
            // line 65
            echo "\t\t\t\t</label>
\t\t\t  </div>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t</div>
\t\t\t";
        // line 69
        if ((isset($context["error_sms_alert_processing_status"]) ? $context["error_sms_alert_processing_status"] : null)) {
            // line 70
            echo "\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_sms_alert_processing_status"]) ? $context["error_sms_alert_processing_status"] : null);
            echo "</div>
\t\t\t";
        }
        // line 72
        echo "\t\t  </div>
\t\t</div>  

          <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\" for=\"input-status\">";
        // line 76
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-8\">
              <select name=\"module_sms_alert_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 79
        if ((isset($context["module_sms_alert_status"]) ? $context["module_sms_alert_status"] : null)) {
            // line 80
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 81
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 83
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 84
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 86
        echo "              </select>
            </div>
          </div>
        </form>
\t\t</div>
\t\t
\t\t<div class=\"col-sm-6\">\t\t
\t\t\t<div class=\"alert alert-info\" role=\"alert\">
\t\t\t";
        // line 94
        echo (isset($context["sms_alert_help"]) ? $context["sms_alert_help"] : null);
        echo "
\t\t\t</div>
\t\t</div>
\t\t
\t</div>
\t
\t\t
      </div>
    </div>
  </div>
</div>

<!-- opencart-russia.ru -->

";
        // line 108
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/sms_alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 108,  237 => 94,  227 => 86,  222 => 84,  217 => 83,  212 => 81,  207 => 80,  205 => 79,  199 => 76,  193 => 72,  187 => 70,  185 => 69,  182 => 68,  174 => 65,  169 => 63,  164 => 62,  159 => 60,  154 => 59,  152 => 58,  148 => 56,  144 => 55,  138 => 52,  132 => 48,  126 => 46,  124 => 45,  120 => 44,  115 => 42,  110 => 39,  104 => 37,  102 => 36,  98 => 35,  93 => 33,  87 => 30,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-google-hangouts" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/* 	  */
/* 	 <div class="row">*/
/* 	  <div class="col-sm-6">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-module" class="form-horizontal">*/
/*          */
/*           <div class="form-group required">*/
/*             <label class="col-sm-4 control-label" for="sms_alert_tel">{{ entry_sms_alert_tel }}</label>*/
/*             <div class="col-sm-8">*/
/*               <input type="text" name="module_sms_alert_tel" value="{{ sms_alert_tel }}" placeholder="79272000000" id="sms_alert_tel" class="form-control" />*/
/*               {% if error_sms_alert_tel %}*/
/*               <div class="text-danger">{{ error_sms_alert_tel }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-4 control-label" for="sms_alert_id">{{ entry_sms_alert_id }}</label>*/
/*             <div class="col-sm-8">*/
/*               <input type="text" name="module_sms_alert_id" value="{{ sms_alert_id }}" placeholder="4a1dc787-5f12-8814-fd11-XXXXXXXXXXXX" id="sms_alert_id" class="form-control" />*/
/*               {% if error_sms_alert_id %}*/
/*               <div class="text-danger">{{ error_sms_alert_id }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/* 		  */
/* 		<div class="form-group">*/
/* 		  <label class="col-sm-4 control-label" for="input-process-status">{{ entry_processing_status }}</label>*/
/* 		  <div class="col-sm-8">*/
/* 			<div class="well well-sm" style="height: 150px; overflow: auto;">*/
/* 			  {% for order_status in order_statuses %}*/
/* 			  <div class="checkbox">*/
/* 				<label>*/
/* 				  {% if order_status.order_status_id in sms_alert_processing_status %}*/
/* 				  <input type="checkbox" name="module_sms_alert_processing_status[]" value="{{ order_status.order_status_id }}" checked="checked" />*/
/* 				  {{ order_status.name }}*/
/* 				  {% else %}*/
/* 				  <input type="checkbox" name="module_sms_alert_processing_status[]" value="{{ order_status.order_status_id }}" />*/
/* 				  {{ order_status.name }}*/
/* 				  {% endif %}*/
/* 				</label>*/
/* 			  </div>*/
/* 			  {% endfor %}*/
/* 			</div>*/
/* 			{% if error_sms_alert_processing_status %}*/
/* 			<div class="text-danger">{{ error_sms_alert_processing_status }}</div>*/
/* 			{% endif %}*/
/* 		  </div>*/
/* 		</div>  */
/* */
/*           <div class="form-group">*/
/*             <label class="col-sm-4 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-8">*/
/*               <select name="module_sms_alert_status" id="input-status" class="form-control">*/
/*                 {% if module_sms_alert_status %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/* 		</div>*/
/* 		*/
/* 		<div class="col-sm-6">		*/
/* 			<div class="alert alert-info" role="alert">*/
/* 			{{ sms_alert_help }}*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* 	*/
/* 		*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <!-- opencart-russia.ru -->*/
/* */
/* {{ footer }}*/
