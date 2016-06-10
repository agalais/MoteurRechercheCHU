<?php

namespace MoteurRechercheBundle\Entity;

/**
 * Tube
 */
class Tube
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomImageTube;

    /**
     * @var string
     */
    private $contenantAnalyse;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomImageTube
     *
     * @param string $nomImageTube
     *
     * @return Tube
     */
    public function setNomImageTube($nomImageTube)
    {
        $this->nomImageTube = $nomImageTube;

        return $this;
    }

    /**
     * Get nomImageTube
     *
     * @return string
     */
    public function getNomImageTube()
    {
        return $this->nomImageTube;
    }

    /**
     * Set contenantAnalyse
     *
     * @param string $contenantAnalyse
     *
     * @return Tube
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $analyses;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->analyses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add analysis
     *
     * @param \MoteurRechercheBundle\Entity\Analyse $analysis
     *
     * @return Tube
     */
    public function addAnalysis(\MoteurRechercheBundle\Entity\Analyse $analysis)
    {
        $this->analyses[] = $analysis;

        return $this;
    }

    /**
     * Remove analysis
     *
     * @param \MoteurRechercheBundle\Entity\Analyse $analysis
     */
    public function removeAnalysis(\MoteurRechercheBundle\Entity\Analyse $analysis)
    {
        $this->analyses->removeElement($analysis);
    }

    /**
     * Get analyses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnalyses()
    {
        return $this->analyses;
    }
}
