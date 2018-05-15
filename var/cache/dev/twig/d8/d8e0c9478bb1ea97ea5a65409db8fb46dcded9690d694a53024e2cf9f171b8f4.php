<?php

/* home/index.html.twig */
class __TwigTemplate_d274ae40fbc65fc541d26267ff4df149302cd5e7ef9ecabdead9a90b069e4bb2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Easy Wedding ";
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new Twig_Error_Runtime('Variable "controller_name" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>





    <div class=\"container-fluid\">

        <div class=\"row\">
            <div id=\"fondlogo\" class=\"col-sm-8 col-lg-8\">
                <div id=\"logo\">
                    <img src=\"img/Logo.png\">
                </div>
            </div>
            <div id=\"infocompte\" class=\"col-sm-4 col-lg-4\">
                <div class=\"compte\"><h2>Mon Compte</h2></div>
                <div class=\"compte\"><h2>Inscrivez-vous</h2></div>
            </div>
        </div>
        <div class=\"row\">
            <div id=\"menu1\" class=\"col-sm-12 col-lg-12\">
                <nav class=\"menu\">
                    <ul>
                        <li>
                            <a>Accueil</a>
                        </li>
                        <li>
                            <a>Prestations</a>
                        </li>
                        <li>
                            <a>Lieux</a>
                        </li>
                        <li>
                            <a>Lien2</a>
                        </li>
                        <li>
                            <a>lien3</a>
                        </li>
                        <li>
                            <a>Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <main>
            <div class=\"row\">
                <div id=\"slideshow\" class=\"offset-lg-2 col-sm-10 col-lg-10\">

                    <div id=\"defilement\" class=\"carousel slide\" data-ride=\"carousel\">
                        <ol class=\"carousel-indicators\">
                            <li data-target=\"#defilement\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#defilement\" data-slide-to=\"1\"></li>
                            <li data-target=\"#defilement\" data-slide-to=\"2\"></li>
                            <li data-target=\"#defilement\" data-slide-to=\"3\"></li>
                            <li data-target=\"#defilement\" data-slide-to=\"4\"></li>
                        </ol>
                        <div class=\"carousel-inner\">
                            <div class=\"carousel-item active\">
                                <img src=\"img/pix1-0.jpg\" alt=\"chat\" width=\"1100\" height=\"500\">
                                <div class=\"carousel-caption\">
                                    <h3>Mariage1</h3>
                                </div>
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"img/pix3-1.jpg\" alt=\"chat\" width=\"1100\" height=\"500\">
                                <div class=\"carousel-caption\">
                                    <h3>Mariage2</h3>
                                </div>
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"img/pix4-3.jpg\" alt=\"Chat\" width=\"1100\" height=\"500\">
                                <div class=\"carousel-caption\">
                                    <h3>Mariage3</h3>
                                </div>
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"img/pix2-2.jpg\" alt=\"Chat\" width=\"1100\" height=\"500\">
                                <div class=\"carousel-caption\">
                                    <h3>Mariage4</h3>
                                </div>
                            </div>

                        </div>
                        <a class=\"carousel-control-prev\" href=\"#defilement\" data-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\"></span>
                        </a>
                        <a class=\"carousel-control-next\" href=\"#defilement\" data-slide=\"next\">
                            <span class=\"carousel-control-next-icon\"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"row\">

                <div id=\"centre\" class=\"offset-lg-2 col-sm-12 col-lg-8\" >
                    <section id=\"illustrations\">
                        <img src=\"img/robe.png\">
                        <img src=\"img/bague.png\">
                        <img src=\"img/champ.png\">
                        <img src=\"img/costume.png\">
                        <img src=\"img/dj.png\">
                        <img src=\"img/repas.png\">
                    </section>
                </div>



            </div>
        </main>
        <footer>
            <div id=\"rose\" class=\"row\">
                <div id=\"blue\" class=\"offset-lg-2 col-sm-4 col-lg-2\"><h2>RESEAUX SOCIAUX</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam aspernatur blanditiis consequuntur dolor dolore earum esse hic ipsa labore magni nam natus praesentium quae quaerat quod similique, ullam vel.
                </div>
                <div id=\"blue\" class=\"offset-lg-1 col-sm-4 col-lg-2\"><h2>QUI SOMMES NOUS</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur cumque doloremque doloribus iusto molestiae mollitia ut vitae? Doloribus eveniet ex laboriosam libero magni, minus natus quis repellat sapiente sunt.
                </div>
                <div id=\"blue\" class=\"offset-lg-1 col-sm-4 col-lg-2\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41101.894107878936!2d1.0484701373485654!3d49.920045177734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e0a207670619f9%3A0xaea20a3d78418545!2s76200+Dieppe!5e0!3m2!1sfr!2sfr!4v1526308758965\" width=\"300\" height=\"400\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                </div>
            </div>
        </footer>

    </div>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\"></script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 6,  65 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Easy Wedding {{ controller_name }}!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>





    <div class=\"container-fluid\">

        <div class=\"row\">
            <div id=\"fondlogo\" class=\"col-sm-8 col-lg-8\">
                <div id=\"logo\">
                    <img src=\"img/Logo.png\">
                </div>
            </div>
            <div id=\"infocompte\" class=\"col-sm-4 col-lg-4\">
                <div class=\"compte\"><h2>Mon Compte</h2></div>
                <div class=\"compte\"><h2>Inscrivez-vous</h2></div>
            </div>
        </div>
        <div class=\"row\">
            <div id=\"menu1\" class=\"col-sm-12 col-lg-12\">
                <nav class=\"menu\">
                    <ul>
                        <li>
                            <a>Accueil</a>
                        </li>
                        <li>
                            <a>Prestations</a>
                        </li>
                        <li>
                            <a>Lieux</a>
                        </li>
                        <li>
                            <a>Lien2</a>
                        </li>
                        <li>
                            <a>lien3</a>
                        </li>
                        <li>
                            <a>Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <main>
            <div class=\"row\">
                <div id=\"slideshow\" class=\"offset-lg-2 col-sm-10 col-lg-10\">

                    <div id=\"defilement\" class=\"carousel slide\" data-ride=\"carousel\">
                        <ol class=\"carousel-indicators\">
                            <li data-target=\"#defilement\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#defilement\" data-slide-to=\"1\"></li>
                            <li data-target=\"#defilement\" data-slide-to=\"2\"></li>
                            <li data-target=\"#defilement\" data-slide-to=\"3\"></li>
                            <li data-target=\"#defilement\" data-slide-to=\"4\"></li>
                        </ol>
                        <div class=\"carousel-inner\">
                            <div class=\"carousel-item active\">
                                <img src=\"img/pix1-0.jpg\" alt=\"chat\" width=\"1100\" height=\"500\">
                                <div class=\"carousel-caption\">
                                    <h3>Mariage1</h3>
                                </div>
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"img/pix3-1.jpg\" alt=\"chat\" width=\"1100\" height=\"500\">
                                <div class=\"carousel-caption\">
                                    <h3>Mariage2</h3>
                                </div>
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"img/pix4-3.jpg\" alt=\"Chat\" width=\"1100\" height=\"500\">
                                <div class=\"carousel-caption\">
                                    <h3>Mariage3</h3>
                                </div>
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"img/pix2-2.jpg\" alt=\"Chat\" width=\"1100\" height=\"500\">
                                <div class=\"carousel-caption\">
                                    <h3>Mariage4</h3>
                                </div>
                            </div>

                        </div>
                        <a class=\"carousel-control-prev\" href=\"#defilement\" data-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\"></span>
                        </a>
                        <a class=\"carousel-control-next\" href=\"#defilement\" data-slide=\"next\">
                            <span class=\"carousel-control-next-icon\"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"row\">

                <div id=\"centre\" class=\"offset-lg-2 col-sm-12 col-lg-8\" >
                    <section id=\"illustrations\">
                        <img src=\"img/robe.png\">
                        <img src=\"img/bague.png\">
                        <img src=\"img/champ.png\">
                        <img src=\"img/costume.png\">
                        <img src=\"img/dj.png\">
                        <img src=\"img/repas.png\">
                    </section>
                </div>



            </div>
        </main>
        <footer>
            <div id=\"rose\" class=\"row\">
                <div id=\"blue\" class=\"offset-lg-2 col-sm-4 col-lg-2\"><h2>RESEAUX SOCIAUX</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam aspernatur blanditiis consequuntur dolor dolore earum esse hic ipsa labore magni nam natus praesentium quae quaerat quod similique, ullam vel.
                </div>
                <div id=\"blue\" class=\"offset-lg-1 col-sm-4 col-lg-2\"><h2>QUI SOMMES NOUS</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur cumque doloremque doloribus iusto molestiae mollitia ut vitae? Doloribus eveniet ex laboriosam libero magni, minus natus quis repellat sapiente sunt.
                </div>
                <div id=\"blue\" class=\"offset-lg-1 col-sm-4 col-lg-2\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41101.894107878936!2d1.0484701373485654!3d49.920045177734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e0a207670619f9%3A0xaea20a3d78418545!2s76200+Dieppe!5e0!3m2!1sfr!2sfr!4v1526308758965\" width=\"300\" height=\"400\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                </div>
            </div>
        </footer>

    </div>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\"></script>


{% endblock %}
", "home/index.html.twig", "C:\\Users\\Dell\\Documents\\Projets\\Shortconso\\templates\\home\\index.html.twig");
    }
}
