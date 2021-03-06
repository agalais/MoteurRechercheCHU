<?php

namespace MoteurRechercheBundle\Entity;

/**
 * Analyse
 */
class Analyse
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomAnalyse;

    /**
     * @var string
     */
    private $analyte;

    /**
     * @var string
     */
    private $natureAnalyse;

    /**
     * @var string
     */
    private $volumeAnalyse;

    /**
     * @var string
     */
    private $contenantAnalyse;

    /**
     * @var string
     */
    private $urlTube;

    /**
     * @var string
     */
    private $volumeContenantAnalyse;

    /**
     * @var \MoteurRechercheBundle\Entity\FichePrescription
     */
    private $fichePrescription;

    /**
     * @var \MoteurRechercheBundle\Entity\PrincipeMethode
     */
    private $principeMethode;

    /**
     * @var \MoteurRechercheBundle\Entity\NaturePrelevement
     */
    private $naturePrelevement;

    /**
     * @var \MoteurRechercheBundle\Entity\RenseignementClinique
     */
    private $renseignementClinique;

    /**
     * @var \MoteurRechercheBundle\Entity\DelaiResultat
     */
    private $delaiResultat;

    /**
     * @var \MoteurRechercheBundle\Entity\ConservationAvantTransport
     */
    private $conservationAvantTransport;

    /**
     * @var \MoteurRechercheBundle\Entity\NatureMatrice
     */
    private $natureMatrice;

    /**
     * @var \MoteurRechercheBundle\Entity\Transport
     */
    private $transport;

    /**
     * @var \MoteurRechercheBundle\Entity\ConditionPrelevement
     */
    private $conditionPrelevement;

    /**
     * @var \MoteurRechercheBundle\Entity\Laboratoire
     */
    private $laboratoire;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $microOrganisme_analyse;

    /**
     * @var \MoteurRechercheBundle\Entity\NomenclatureBBhn
     */
    private $nomenclatureBBhn;

    /**
     * @var string
     */
    private $volumeMinimum;

    /**
     * @var string
     */
    private $analyseSaintJulien;

    /**
     * @var string
     */
    private $codeNomenclature;

    /**
     * @var string
     */
    private $refGedi;

        /**
     * @var string
     */
    private $matriceConservationAvantTransport;

    /**
     * @var string
     */
    private $matriceDelaiAcheminement;

    /**
     * @var string
     */
    private $matriceTemperatureTransport;

    /**
     * @var \MoteurRechercheBundle\Entity\Tube
     */
    private $tube;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->microOrganisme_analyse = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomAnalyse
     *
     * @param string $nomAnalyse
     *
     * @return Analyse
     */
    public function setNomAnalyse($nomAnalyse)
    {
        $this->nomAnalyse = $nomAnalyse;

        return $this;
    }

    /**
     * Get nomAnalyse
     *
     * @return string
     */
    public function getNomAnalyse()
    {
        return $this->nomAnalyse;
    }

    /**
     * Set analyte
     *
     * @param string $analyte
     *
     * @return Analyse
     */
    public function setAnalyte($analyte)
    {
        $this->analyte = $analyte;

        return $this;
    }

    /**
     * Get analyte
     *
     * @return string
     */
    public function getAnalyte()
    {
        return $this->analyte;
    }

    /**
     * Set natureAnalyse
     *
     * @param string $natureAnalyse
     *
     * @return Analyse
     */
    public function setNatureAnalyse($natureAnalyse)
    {
        $this->natureAnalyse = $natureAnalyse;

        return $this;
    }

    /**
     * Get natureAnalyse
     *
     * @return string
     */
    public function getNatureAnalyse()
    {
        return $this->natureAnalyse;
    }

    /**
     * Set volumeAnalyse
     *
     * @param string $volumeAnalyse
     *
     * @return Analyse
     */
    public function setVolumeAnalyse($volumeAnalyse)
    {
        $this->volumeAnalyse = $volumeAnalyse;

        return $this;
    }

    /**
     * Get volumeAnalyse
     *
     * @return string
     */
    public function getVolumeAnalyse()
    {
        return $this->volumeAnalyse;
    }

    /**
     * Set contenantAnalyse
     *
     * @param string $contenantAnalyse
     *
     * @return Analyse
     */
    public function setContenantAnalyse($contenantAnalyse)
    {
        $this->contenantAnalyse = $contenantAnalyse;

        return $this;
    }

    /**
     * Get contenantAnalyse
     *
     * @return string
     */
    public function getContenantAnalyse()
    {
        return $this->contenantAnalyse;
    }

    /**
     * Set volumeContenantAnalyse
     *
     * @param string $volumeContenantAnalyse
     *
     * @return Analyse
     */
    public function setVolumeContenantAnalyse($volumeContenantAnalyse)
    {
        $this->volumeContenantAnalyse = $volumeContenantAnalyse;

        return $this;
    }

    /**
     * Get volumeContenantAnalyse
     *
     * @return string
     */
    public function getVolumeContenantAnalyse()
    {
        return $this->volumeContenantAnalyse;
    }

    /**
     * Set fichePrescription
     *
     * @param \MoteurRechercheBundle\Entity\FichePrescription $fichePrescription
     *
     * @return Analyse
     */
    public function setFichePrescription(\MoteurRechercheBundle\Entity\FichePrescription $fichePrescription = null)
    {
        $this->fichePrescription = $fichePrescription;

        return $this;
    }

    /**
     * Get fichePrescription
     *
     * @return \MoteurRechercheBundle\Entity\FichePrescription
     */
    public function getFichePrescription()
    {
        return $this->fichePrescription;
    }

    /**
     * Set principeMethode
     *
     * @param \MoteurRechercheBundle\Entity\PrincipeMethode $principeMethode
     *
     * @return Analyse
     */
    public function setPrincipeMethode(\MoteurRechercheBundle\Entity\PrincipeMethode $principeMethode = null)
    {
        $this->principeMethode = $principeMethode;

        return $this;
    }

    /**
     * Get principeMethode
     *
     * @return \MoteurRechercheBundle\Entity\PrincipeMethode
     */
    public function getPrincipeMethode()
    {
        return $this->principeMethode;
    }

    /**
     * Set naturePrelevement
     *
     * @param \MoteurRechercheBundle\Entity\NaturePrelevement $naturePrelevement
     *
     * @return Analyse
     */
    public function setNaturePrelevement(\MoteurRechercheBundle\Entity\NaturePrelevement $naturePrelevement = null)
    {
        $this->naturePrelevement = $naturePrelevement;

        return $this;
    }

    /**
     * Get naturePrelevement
     *
     * @return \MoteurRechercheBundle\Entity\NaturePrelevement
     */
    public function getNaturePrelevement()
    {
        return $this->naturePrelevement;
    }

    /**
     * Set renseignementClinique
     *
     * @param \MoteurRechercheBundle\Entity\RenseignementClinique $renseignementClinique
     *
     * @return Analyse
     */
    public function setRenseignementClinique(\MoteurRechercheBundle\Entity\RenseignementClinique $renseignementClinique = null)
    {
        $this->renseignementClinique = $renseignementClinique;

        return $this;
    }

    /**
     * Get renseignementClinique
     *
     * @return \MoteurRechercheBundle\Entity\RenseignementClinique
     */
    public function getRenseignementClinique()
    {
        return $this->renseignementClinique;
    }


    /**
     * Set delaiResultat
     *
     * @param \MoteurRechercheBundle\Entity\DelaiResultat $delaiResultat
     *
     * @return Analyse
     */
    public function setDelaiResultat(\MoteurRechercheBundle\Entity\DelaiResultat $delaiResultat = null)
    {
        $this->delaiResultat = $delaiResultat;

        return $this;
    }

    /**
     * Get delaiResultat
     *
     * @return \MoteurRechercheBundle\Entity\DelaiResultat
     */
    public function getDelaiResultat()
    {
        return $this->delaiResultat;
    }

    /**
     * Set conservationAvantTransport
     *
     * @param \MoteurRechercheBundle\Entity\ConservationAvantTransport $conservationAvantTransport
     *
     * @return Analyse
     */
    public function setConservationAvantTransport(\MoteurRechercheBundle\Entity\ConservationAvantTransport $conservationAvantTransport = null)
    {
        $this->conservationAvantTransport = $conservationAvantTransport;

        return $this;
    }

    /**
     * Get conservationAvantTransport
     *
     * @return \MoteurRechercheBundle\Entity\ConservationAvantTransport
     */
    public function getConservationAvantTransport()
    {
        return $this->conservationAvantTransport;
    }

    /**
     * Set natureMatrice
     *
     * @param \MoteurRechercheBundle\Entity\NatureMatrice $natureMatrice
     *
     * @return Analyse
     */
    public function setNatureMatrice(\MoteurRechercheBundle\Entity\NatureMatrice $natureMatrice = null)
    {
        $this->natureMatrice = $natureMatrice;

        return $this;
    }

    /**
     * Get natureMatrice
     *
     * @return \MoteurRechercheBundle\Entity\NatureMatrice
     */
    public function getNatureMatrice()
    {
        return $this->natureMatrice;
    }

    /**
     * Set transport
     *
     * @param \MoteurRechercheBundle\Entity\Transport $transport
     *
     * @return Analyse
     */
    public function setTransport(\MoteurRechercheBundle\Entity\Transport $transport = null)
    {
        $this->transport = $transport;

        return $this;
    }

    /**
     * Get transport
     *
     * @return \MoteurRechercheBundle\Entity\Transport
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Set conditionPrelevement
     *
     * @param \MoteurRechercheBundle\Entity\ConditionPrelevement $conditionPrelevement
     *
     * @return Analyse
     */
    public function setConditionPrelevement(\MoteurRechercheBundle\Entity\ConditionPrelevement $conditionPrelevement = null)
    {
        $this->conditionPrelevement = $conditionPrelevement;

        return $this;
    }

    /**
     * Get conditionPrelevement
     *
     * @return \MoteurRechercheBundle\Entity\ConditionPrelevement
     */
    public function getConditionPrelevement()
    {
        return $this->conditionPrelevement;
    }

    /**
     * Set laboratoire
     *
     * @param \MoteurRechercheBundle\Entity\Laboratoire $laboratoire
     *
     * @return Analyse
     */
    public function setLaboratoire(\MoteurRechercheBundle\Entity\Laboratoire $laboratoire = null)
    {
        $this->laboratoire = $laboratoire;

        return $this;
    }

    /**
     * Get laboratoire
     *
     * @return \MoteurRechercheBundle\Entity\Laboratoire
     */
    public function getLaboratoire()
    {
        return $this->laboratoire;
    }

    /**
     * Add microOrganismeAnalyse
     *
     * @param \MoteurRechercheBundle\Entity\MicroOrganisme $microOrganismeAnalyse
     *
     * @return Analyse
     */
    public function addMicroOrganismeAnalyse(\MoteurRechercheBundle\Entity\MicroOrganisme $microOrganismeAnalyse)
    {
        $this->microOrganisme_analyse[] = $microOrganismeAnalyse;

        return $this;
    }

    /**
     * Remove microOrganismeAnalyse
     *
     * @param \MoteurRechercheBundle\Entity\MicroOrganisme $microOrganismeAnalyse
     */
    public function removeMicroOrganismeAnalyse(\MoteurRechercheBundle\Entity\MicroOrganisme $microOrganismeAnalyse)
    {
        $this->microOrganisme_analyse->removeElement($microOrganismeAnalyse);
    }

    /**
     * Get microOrganismeAnalyse
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMicroOrganismeAnalyse()
    {
        return $this->microOrganisme_analyse;
    }


    public function getUrlTube()
    {
        return $this->urlTube;
    }


    public function setUrlTube($url)
    {
        $this->urlTube = $url;

        return $this;
    }

    // Test d'ajout
    public function __toString()
    {
        return $this->nomAnalyse;
    }


    /**
     * Set nomenclatureBBhn
     *
     * @param \MoteurRechercheBundle\Entity\NomenclatureBBhn $nomenclatureBBhn
     *
     * @return Analyse
     */
    public function setNomenclatureBBhn(\MoteurRechercheBundle\Entity\NomenclatureBBhn $nomenclatureBBhn = null)
    {
        $this->nomenclatureBBhn = $nomenclatureBBhn;

        return $this;
    }

    /**
     * Get nomenclatureBBhn
     *
     * @return \MoteurRechercheBundle\Entity\NomenclatureBBhn
     */
    public function getNomenclatureBBhn()
    {
        return $this->nomenclatureBBhn;
    }



    /**
     * Set matriceConservationAvantTransport
     *
     * @param string $matriceConservationAvantTransport
     *
     * @return Analyse
     */
    public function setMatriceConservationAvantTransport($matriceConservationAvantTransport)
    {
        $this->matriceConservationAvantTransport = $matriceConservationAvantTransport;

        return $this;
    }

    /**
     * Get matriceConservationAvantTransport
     *
     * @return string
     */
    public function getMatriceConservationAvantTransport()
    {
        return $this->matriceConservationAvantTransport;
    }

    /**
     * Set matriceDelaiAcheminement
     *
     * @param string $matriceDelaiAcheminement
     *
     * @return Analyse
     */
    public function setMatriceDelaiAcheminement($matriceDelaiAcheminement)
    {
        $this->matriceDelaiAcheminement = $matriceDelaiAcheminement;

        return $this;
    }

    /**
     * Get matriceDelaiAcheminement
     *
     * @return string
     */
    public function getMatriceDelaiAcheminement()
    {
        return $this->matriceDelaiAcheminement;
    }

    /**
     * Set matriceTemperatureTransport
     *
     * @param string $matriceTemperatureTransport
     *
     * @return Analyse
     */
    public function setMatriceTemperatureTransport($matriceTemperatureTransport)
    {
        $this->matriceTemperatureTransport = $matriceTemperatureTransport;

        return $this;
    }

    /**
     * Get matriceTemperatureTransport
     *
     * @return string
     */
    public function getMatriceTemperatureTransport()
    {
        return $this->matriceTemperatureTransport;
    }

    /**
     * Set tube
     *
     * @param \MoteurRechercheBundle\Entity\Tube $tube
     *
     * @return Analyse
     */
    public function setTube(\MoteurRechercheBundle\Entity\Tube $tube = null)
    {
        $this->tube = $tube;

        return $this;
    }

    /**
     * Get tube
     *
     * @return \MoteurRechercheBundle\Entity\Tube
     */
    public function getTube()
    {
        return $this->tube;
    }


    /**
     * Set refGedi
     *
     * @param string $refGedi
     *
     * @return Analyse
     */
    public function setRefGedi($refGedi)
    {
        $this->refGedi = $refGedi;

        return $this;
    }

    /**
     * Get refGedi
     *
     * @return string
     */
    public function getRefGedi()
    {
        return $this->refGedi;
    }



    /**
     * Set codeNomenclature
     *
     * @param string $codeNomenclature
     *
     * @return Analyse
     */
    public function setCodeNomenclature($codeNomenclature)
    {
        $this->codeNomenclature = $codeNomenclature;

        return $this;
    }

    /**
     * Get codeNomenclature
     *
     * @return string
     */
    public function getCodeNomenclature()
    {
        return $this->codeNomenclature;
    }



    /**
     * Set volumeMinimum
     *
     * @param string $volumeMinimum
     *
     * @return Analyse
     */
    public function setVolumeMinimum($volumeMinimum)
    {
        $this->volumeMinimum = $volumeMinimum;

        return $this;
    }

    /**
     * Get volumeMinimum
     *
     * @return string
     */
    public function getVolumeMinimum()
    {
        return $this->volumeMinimum;
    }

    /**
     * Set analyseSaintJulien
     *
     * @param string $analyseSaintJulien
     *
     * @return Analyse
     */
    public function setAnalyseSaintJulien($analyseSaintJulien)
    {
        $this->analyseSaintJulien = $analyseSaintJulien;

        return $this;
    }

    /**
     * Get analyseSaintJulien
     *
     * @return string
     */
    public function getAnalyseSaintJulien()
    {
        return $this->analyseSaintJulien;
    }


}
