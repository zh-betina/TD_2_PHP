<?php
            class Compte {
                private $montant;
                private $interet;

                public function __construct($montantInit, $interetInit)
                {
                    $this->montant = $montantInit;
                    $this->interet = $interetInit;
                }

                public function get_montant() {
                    return $this->montant;
                }

                public function un_an() {
                    $interet_decimal = $this->interet/100;
                    $this->montant = $this->montant * $interet_decimal + $this->montant;
                }

            }