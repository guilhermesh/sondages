<?php 

require_once("models/SurveysModel.inc.php");
require_once("actions/Action.inc.php");

class SearchAction extends Action {

	/**
	 * Construit la liste des sondages dont la question contient le mot clé
	 * contenu dans la variable $_POST["keyword"]. Cette liste est stockée dans un modèle
	 * de type "SurveysModel". L'utilisateur est ensuite dirigé vers la vue "SurveysView"
	 * permettant d'afficher les sondages.
	 *
	 * Si la variable $_POST["keyword"] est "vide", le message "Vous devez entrer un mot clé
	 * avant de lancer la recherche." est affiché à l'utilisateur.
	 *
	 * @see Action::run()
	 */
	public function run() {
		$keyword = $_POST["keyword"];

		if(strlen($keyword) == ' '){
			$this->setModel(new MessageModel());
			$this->getModel()->setMessage('Vous devez entrer un mot clé
			* avant de lancer la recherche.');
		} else {
			$this->setModel(new Model());
			$this->getModel()->
		}
	}

}

?>
