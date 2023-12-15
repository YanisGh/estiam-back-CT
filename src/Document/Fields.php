<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\EmbeddedDocument]
class Fields {
    #[MongoDB\Field(type: 'string')]
    private $cat_vehicule_libelle;

    #[MongoDB\Field(type: 'string')]
    private $cct_code_dept;

    #[MongoDB\Field(type: 'int')]
    private $date_application_visite;

    #[MongoDB\Field(type: 'int')]
    private $code_postal;

    #[MongoDB\Field(type: 'string')]
    private $cct_adresse;

    #[MongoDB\Field(type: 'string')]
    private $latitude;

    #[MongoDB\Field(type: 'int')]
    private $cct_tel;

    #[MongoDB\Field(type: 'string')]
    private $cct_code_commune;

    #[MongoDB\Field(type: 'string')]
    private $cct_statut;

    #[MongoDB\Field(type: 'string')]
    private $cat_energie_libelle;

    #[MongoDB\Field(type: 'int')]
    private $cct_siret;

    #[MongoDB\Field(type: 'int')]
    private $cat_vehicule_id;

    #[MongoDB\Field(type: 'int')]
    private $date_application_contre_visite;

    #[MongoDB\Field(type: 'int')]
    private $code_insee_commune;

    #[MongoDB\Field(type: 'string')]
    private $cct_denomination;

    #[MongoDB\Field(type: 'int')]
    private $cat_energie_id;

    #[MongoDB\Field(type: 'int')]
    private $prix_visite;

    #[MongoDB\Field(type: 'int')]
    private $prix_contre_visite_min;

    #[MongoDB\Field(type: 'int')]
    private $prix_contre_visite_max;

    // Getters and Setters
    public function getCatVehiculeLibelle(): ?string {
        return $this->cat_vehicule_libelle;
    }

    public function setCatVehiculeLibelle(?string $catVehiculeLibelle): void {
        $this->cat_vehicule_libelle = $catVehiculeLibelle;
    }

    public function getCctCodeDept(): ?string {
        return $this->cct_code_dept;
    }

    public function setCctCodeDept(?string $cctCodeDept): void {
        $this->cct_code_dept = $cctCodeDept;
    }

    public function getDateApplicationVisite(): ?int {
        return $this->date_application_visite;
    }

    public function setDateApplicationVisite(?int $dateApplicationVisite): void {
        $this->date_application_visite = $dateApplicationVisite;
    }

    public function getCodePostal(): ?int {
        return $this->code_postal;
    }

    public function setCodePostal(?int $codePostal): void {
        $this->code_postal = $codePostal;
    }

    public function getCctAdresse(): ?string {
        return $this->cct_adresse;
    }

    public function setCctAdresse(?string $cctAdresse): void {
        $this->cct_adresse = $cctAdresse;
    }

    public function getLatitude(): ?string {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): void {
        $this->latitude = $latitude;
    }

    public function getCctTel(): ?int {
        return $this->cct_tel;
    }

    public function setCctTel(?int $cctTel): void {
        $this->cct_tel = $cctTel;
    }

    public function getCctCodeCommune(): ?string {
        return $this->cct_code_commune;
    }

    public function setCctCodeCommune(?string $cctCodeCommune): void {
        $this->cct_code_commune = $cctCodeCommune;
    }

    public function getCctStatut(): ?string {
        return $this->cct_statut;
    }

    public function setCctStatut(?string $cctStatut): void {
        $this->cct_statut = $cctStatut;
    }

    public function getCatEnergieLibelle(): ?string {
        return $this->cat_energie_libelle;
    }

    public function setCatEnergieLibelle(?string $catEnergieLibelle): void {
        $this->cat_energie_libelle = $catEnergieLibelle;
    }

    public function getCctSiret(): ?int {
        return $this->cct_siret;
    }

    public function setCctSiret(?int $cctSiret): void {
        $this->cct_siret = $cctSiret;
    }

    public function getCatVehiculeId(): ?int {
        return $this->cat_vehicule_id;
    }

    public function setCatVehiculeId(?int $catVehiculeId): void {
        $this->cat_vehicule_id = $catVehiculeId;
    }

    public function getDateApplicationContreVisite(): ?int {
        return $this->date_application_contre_visite;
    }

    public function setDateApplicationContreVisite(?int $dateApplicationContreVisite): void {
        $this->date_application_contre_visite = $dateApplicationContreVisite;
    }

    public function getCodeInseeCommune(): ?int {
        return $this->code_insee_commune;
    }

    public function setCodeInseeCommune(?int $codeInseeCommune): void {
        $this->code_insee_commune = $codeInseeCommune;
    }

    public function getCctDenomination(): ?string {
        return $this->cct_denomination;
    }

    public function setCctDenomination(?string $cctDenomination): void {
        $this->cct_denomination = $cctDenomination;
    }

    public function getCatEnergieId(): ?int {
        return $this->cat_energie_id;
    }

    public function setCatEnergieId(?int $catEnergieId): void {
        $this->cat_energie_id = $catEnergieId;
    }

    public function getPrixVisite(): ?int {
        return $this->prix_visite;
    }

    public function setPrixVisite(?int $prixVisite): void {
        $this->prix_visite = $prixVisite;
    }

    public function getPrixContreVisiteMin(): ?int {
        return $this->prix_contre_visite_min;
    }

    public function setPrixContreVisiteMin(?int $prixContreVisiteMin): void {
        $this->prix_contre_visite_min = $prixContreVisiteMin;
    }

    public function getPrixContreVisiteMax(): ?int {
        return $this->prix_contre_visite_max;
    }

    public function setPrixContreVisiteMax(?int $prixContreVisiteMax): void {
        $this->prix_contre_visite_max = $prixContreVisiteMax;
    }
}