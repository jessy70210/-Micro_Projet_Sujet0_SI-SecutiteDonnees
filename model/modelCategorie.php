<?php
	require_once(File::build_path(array("model", "model.php")));

	class modelCategorie
	{
		/** ATTRIBUTS **/
		private int $id;
		private string $libelle;
		private string $logoPath;
		private string $decription;

		/** CONSTRUCTEUR
		 * @param int $id
		 * @param string $libelle
		 * @param string|NULL $decription
		 * @param string|NULL $logoPath
		 */
		public function __construct(int $id, string $libelle, string $decription = NULL, string $logoPath = NULL)
		{
			$this->id = $id;
			$this->libelle = $this->libelle;
			if (is_null($decription)) $this->decription = 'Pas de decription disponible pour le moment';
			else $this->decription = $decription;
			if (is_null($logoPath)) $this->logoPath = 'URLDeflaut';
			else $this->logoPath = $this->logoPath;
		}

		/** METHODES **/
		public static function readAll()
		{
			$sql = "SELECT * FROM types";
			$rep = model::$pdo->query($sql);
			$rep->setFetchMode(PDO::FETCH_CLASS, 'modelTypes');
			return $rep->fetchAll();
		}

		/**
		 * GETTERS Id
		 * @return int
		 */
		public function getId(): int { return $this->id; }

		/**
		 * SETTERS Id
		 * @param int $id
		 */
		public function setId(int $id): void { $this->id = $id; }

		/**
		 * GETTERS Libelle
		 * @return string
		 */
		public function getLibelle(): string { return $this->libelle; }

		/**
		 * SETTERS Libelle
		 * @param string $libelle
		 */
		public function setLibelle(string $libelle): void { $this->libelle = $libelle; }

		/**
		 * GETTERS LogoPath
		 * @return string
		 */
		public function getLogoPath(): string { return $this->logoPath; }

		/**
		 * SETTERS LogoPath
		 * @param string $logoPath
		 */
		public function setLogoPath(string $logoPath): void { $this->logoPath = $logoPath; }

		/**
		 * GETTERS Description
		 * @return string
		 */
		public function getDecription(): string { return $this->decription; }

		/**
		 * SETTERS Decription
		 * @param string $decription
		 */
		public function setDecription(string $decription): void { $this->decription = $decription; }

		public function create()
		{
			$sql = "INSERT INTO types(idType, nomType) VALUES (:idT, :nomT)";
			$req_prep = model::$pdo->prepare($sql);
			$values = array("idT" => NULL, "nomT" => $this->nomType);
			$req_prep->execute($values);
		}

		public function update()
		{
			$sql = 'UPDATE types SET nomType = :nomT';
			$req_prep = model::$pdo->prepare($sql);
			$values = array("nomT" => $this->nomType);
			$req_prep->execute($values);
		}

		public function delete()
		{
			$sql = "DELETE FROM types WHERE nomType = :nomT";
			$req_prep = model::$pdo->prepare($sql);
			$values = array("nomT" => $this->nomType);
			$req_prep->execute($values);
		}
	}
