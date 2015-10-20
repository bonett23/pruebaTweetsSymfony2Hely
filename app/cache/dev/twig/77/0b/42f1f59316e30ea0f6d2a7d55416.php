<?php

/* pruebatweetsBundle:Default:tweets.html.twig */
class __TwigTemplate_770b42f1f59316e30ea0f6d2a7d55416 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("pruebatweetsBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "pruebatweetsBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row col-md-6\">
        <h1>Prueba Symfony2 - Tweets</h1>
        <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("_prueba_tweets");
        echo "\" method=\"POST\">
            ";
        // line 8
        echo "            <div class=\"form-group\">
                <label class=\"col-md-1 control-label\">Key:</label>
                <div class=\"col-md-11\">
                    <p class=\"input-group\">
                        <input type=\"text\" id=\"key\" name=\"key\" class=\"form-control\" placeholder=\"Key\">
                        <span class=\"input-group-btn\">
                            <button type=\"submit\" class=\"btn btn-default\">Search</button>
                        </span>
                    </p>
                </div>
                ";
        // line 19
        echo "            </div>
        </form>
    </div>

    <div class=\"row col-md-12\">
        <div class=\"col-md-6\">
            <table class=\"table table-striped table-bordered\">
                <thead>
                    <tr class=\"heading text-center\">
                        <th class=\"text-center\">
                            Fecha
                        </th>
                        <th class=\"text-center\">
                            Contenido
                        </th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 37
        if ((twig_length_filter($this->env, (isset($context["tweets"]) ? $context["tweets"] : $this->getContext($context, "tweets"))) == 0)) {
            // line 38
            echo "                        <tr>
                            <td class=\"text-left\" colspan=\"2\"><font color=\"red\">No se Encontraron Registros</font></td>
                        </tr>
                    ";
        } else {
            // line 42
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tweets"]) ? $context["tweets"] : $this->getContext($context, "tweets")));
            foreach ($context['_seq'] as $context["_key"] => $context["tweet"]) {
                // line 43
                echo "                            <tr>
                                <td class=\"text-center\"><font>";
                // line 44
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tweet"]) ? $context["tweet"] : $this->getContext($context, "tweet")), "fechaCreacion"), "Y-m-d H:m:s"), "html", null, true);
                echo "</font></td>
                                <td class=\"text-center\"><font>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tweet"]) ? $context["tweet"] : $this->getContext($context, "tweet")), "descripcion"), "html", null, true);
                echo "</font></td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tweet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                    ";
        }
        // line 49
        echo "                </tbody>
            </table>
        </div>
        <div class=\"col-md-3\">
            <table class=\"scroll table table-striped table-bordered table-advance table-hover\">
                <thead>
                    <tr>
                        <th class=\"text-center\">Palabras Buscadas</th>
                    </tr>                
                </thead>
                <tbody>
                    ";
        // line 60
        if ((twig_length_filter($this->env, (isset($context["records"]) ? $context["records"] : $this->getContext($context, "records"))) == 0)) {
            // line 61
            echo "                        <tr>
                            <td class=\"text-left\" colspan=\"2\"><font color=\"red\">Cero Busquedas</font></td>
                        </tr>
                    ";
        } else {
            // line 65
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : $this->getContext($context, "records")));
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 66
                echo "                            <tr>
                                <td class=\"text-center\"><font>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "palabra"), "html", null, true);
                echo "</font></td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                    ";
        }
        // line 71
        echo "                </tbody>
            </table> 
        </div>
    </div>    

";
    }

    public function getTemplateName()
    {
        return "pruebatweetsBundle:Default:tweets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 71,  141 => 70,  132 => 67,  129 => 66,  124 => 65,  118 => 61,  116 => 60,  103 => 49,  100 => 48,  91 => 45,  87 => 44,  84 => 43,  79 => 42,  73 => 38,  71 => 37,  51 => 19,  39 => 8,  35 => 6,  31 => 4,  28 => 3,);
    }
}
