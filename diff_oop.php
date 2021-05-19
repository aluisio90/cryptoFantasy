<?php
	class Actor{
		private $primo;
		private $base;
		private $segreto;
		private $sessione;
		private $excangeKey;
		private $sendKey;
		public function Actor($p, $g){
			$this->primo = $p;
			$this->base = $g;
			$this->segreto = rand(1, rand(1, 15));
		}

		public function set_primo($primo){
			$this->primo = $primo;
		}
		public function get_primo(){
			return $this->primo;
		}

		public function set_base($base){
			$this->base = $base;
		}
		public function get_base(){
			return $this->base;
		}

		public function set_segreto($segreto){
			$this->segreto = $segreto;
		}

		public function get_segreto(){
			return $this->segreto;
		}

		public function send(){
			$this->sendKey = ( $this->base ** $this->segreto ) % $this->primo;
			return $this->sendKey;
		}

		public function getKey($key){
			$this->excangeKey = $key;
		}

		public function session(){
			$this->sessione = ($this->excangeKey ** $this->segreto) % $this->primo;
		}

		public function get_session(){
			return $this->sessione;
		}
		
		public function get_excange(){
			return $this->excangeKey;
		}

	}
