<?php

class Armas{
    public $armas;
    public $STATS;

    function __Construct($ARMAS_USER){
        $this->armas= $ARMAS_USER;

    }
   public function stats_armas(){
        if ($this->armas=="M4A1") {
            $this->STATS='<div class="card" style="width: 18rem;">
            <img src="https://http2.mlstatic.com/D_NQ_NP_804965-MLA25570991883_052017-O.jpg

            " class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">M4A1</h5>
              <p class="card-text">Fusil de asalto del bando antiterrorista, se podria decir que es de los mejores.<br> Tiene muy buena cadencia o control, pero balance de daño</p>
            </div>
          </div>';
          return $this->STATS;
        }
        elseif ($this->armas=="AWP") {
            $this->STATS='<div class="card" style="width: 18rem;">
            <img src="https://afkgaming.com/media/images/74043-Cover%20Image%20-%20User%20Throws%20AWP%20Half%20Way%20Across%20Anubis.jpg

            " class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Awp</h5>
              <p class="card-text">Es el mejor fusil francotirador de todo el juego, el arma favorita de muchos</p>
            </div>
          </div>';
          return $this->STATS;
        }
        elseif ($this->armas=="P90") {
            $this->STATS='<div class="card" style="width: 18rem;">
            <img src="https://media.graphcms.com/9aGPjHpQ3WcZHzjxXfZD
            " class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">P90</h5>
              <p class="card-text">Subfusil con gran cadencia, bastante equilibrado pero no es meta .<br> Se usa bastante en rangos bajos por su facilidad de uso</p>
            </div>
          </div>';
          return $this->STATS;
        }
        elseif ($this->armas=="DEAGLE") {
            $this->STATS='<div class="card" style="width: 18rem;">
            <img src="https://media.graphcms.com/07lK02obQV6RIfatg8Sp
            " class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Deagle</h5>
              <p class="card-text">Pistola con bastante daño y poca cadencia. <br>Un arma barata pero difícil de utilizar</p>
            </div>
          </div>';
          return $this->STATS;
        }
        elseif ($this->armas=="KARAMBIT") {
            $this->STATS='<div class="card" style="width: 18rem;">
            <img src="https://media.graphcms.com/swrGLMbJTXe4QpsSu77v
            " class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Karambit</h5>
              <p class="card-text">Es un cuchillo muy popular más que todo por su rareza y su hermoso diseño</p>
            </div>
          </div>';
          return $this->STATS;
        }
    }





}