<!doctype html>
<html>
  <header>
    <link rel="stylesheet" type="text/css" href="stylesheets/main.css" />
</header>
  <body>
    <div id="conteneur">
      <h1>Les équipes de National League</h1>    
      <table border= "1">
      <tr>
        <td>ID</td>
        <td>Club</td>
      </tr>
      <?php
      class Equipes {
        private $refCtrl;
        private $equipes;

        public function __construct() {
          require_once('Ctrl.php');
          $this->refCtrl = new Ctrl();
          $this->equipes = $this->refCtrl->getEquipes();
        }

        function ajouteCelluleHtml($contenu, $id){
          echo "<tr><td>{$id}</td><td>{$contenu}</td></tr>";
        }

        function equipe() {
          for ($i=0; $i < count($this->equipes); $i++) { 
            ajouteCelluleHtml($this->equipes[$i],$i);
          }
        }
      }
      ?>
      </table>
    </div>
  </body>
</html>