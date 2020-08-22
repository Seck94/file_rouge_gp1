<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Brief extends \App\Entity\Brief implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'langue', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'contexte', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'livrablesAttendus', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'modalitesPedagogiques', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'criteresDePerformance', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'modalitesEvaluation', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'avatar', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'dateCreation', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'statut', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'livrableAttendus', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'ressources', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'promoBriefs', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'referentiel', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'niveaux', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'tags', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'formateur', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'groupes'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'langue', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'contexte', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'livrablesAttendus', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'modalitesPedagogiques', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'criteresDePerformance', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'modalitesEvaluation', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'avatar', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'dateCreation', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'statut', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'livrableAttendus', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'ressources', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'promoBriefs', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'referentiel', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'niveaux', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'tags', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'formateur', '' . "\0" . 'App\\Entity\\Brief' . "\0" . 'groupes'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Brief $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getLangue(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLangue', []);

        return parent::getLangue();
    }

    /**
     * {@inheritDoc}
     */
    public function setLangue(string $langue): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLangue', [$langue]);

        return parent::setLangue($langue);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre(string $titre): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getContexte(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContexte', []);

        return parent::getContexte();
    }

    /**
     * {@inheritDoc}
     */
    public function setContexte(string $contexte): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContexte', [$contexte]);

        return parent::setContexte($contexte);
    }

    /**
     * {@inheritDoc}
     */
    public function getLivrablesAttendus(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLivrablesAttendus', []);

        return parent::getLivrablesAttendus();
    }

    /**
     * {@inheritDoc}
     */
    public function setLivrablesAttendus(string $livrablesAttendus): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLivrablesAttendus', [$livrablesAttendus]);

        return parent::setLivrablesAttendus($livrablesAttendus);
    }

    /**
     * {@inheritDoc}
     */
    public function getModalitesPedagogiques(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModalitesPedagogiques', []);

        return parent::getModalitesPedagogiques();
    }

    /**
     * {@inheritDoc}
     */
    public function setModalitesPedagogiques(string $modalitesPedagogiques): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModalitesPedagogiques', [$modalitesPedagogiques]);

        return parent::setModalitesPedagogiques($modalitesPedagogiques);
    }

    /**
     * {@inheritDoc}
     */
    public function getCriteresDePerformance(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCriteresDePerformance', []);

        return parent::getCriteresDePerformance();
    }

    /**
     * {@inheritDoc}
     */
    public function setCriteresDePerformance(string $criteresDePerformance): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCriteresDePerformance', [$criteresDePerformance]);

        return parent::setCriteresDePerformance($criteresDePerformance);
    }

    /**
     * {@inheritDoc}
     */
    public function getModalitesEvaluation(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModalitesEvaluation', []);

        return parent::getModalitesEvaluation();
    }

    /**
     * {@inheritDoc}
     */
    public function setModalitesEvaluation(string $modalitesEvaluation): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModalitesEvaluation', [$modalitesEvaluation]);

        return parent::setModalitesEvaluation($modalitesEvaluation);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvatar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvatar', []);

        return parent::getAvatar();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvatar($avatar): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvatar', [$avatar]);

        return parent::setAvatar($avatar);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreation(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreation', []);

        return parent::getDateCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreation(\DateTimeInterface $dateCreation): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreation', [$dateCreation]);

        return parent::setDateCreation($dateCreation);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatut(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatut', []);

        return parent::getStatut();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatut(?string $statut): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatut', [$statut]);

        return parent::setStatut($statut);
    }

    /**
     * {@inheritDoc}
     */
    public function getLivrableAttendus(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLivrableAttendus', []);

        return parent::getLivrableAttendus();
    }

    /**
     * {@inheritDoc}
     */
    public function addLivrableAttendu(\App\Entity\LivrableAttendu $livrableAttendu): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLivrableAttendu', [$livrableAttendu]);

        return parent::addLivrableAttendu($livrableAttendu);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLivrableAttendu(\App\Entity\LivrableAttendu $livrableAttendu): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLivrableAttendu', [$livrableAttendu]);

        return parent::removeLivrableAttendu($livrableAttendu);
    }

    /**
     * {@inheritDoc}
     */
    public function getRessources(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRessources', []);

        return parent::getRessources();
    }

    /**
     * {@inheritDoc}
     */
    public function addRessource(\App\Entity\Ressource $ressource): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRessource', [$ressource]);

        return parent::addRessource($ressource);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRessource(\App\Entity\Ressource $ressource): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRessource', [$ressource]);

        return parent::removeRessource($ressource);
    }

    /**
     * {@inheritDoc}
     */
    public function getPromoBriefs(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPromoBriefs', []);

        return parent::getPromoBriefs();
    }

    /**
     * {@inheritDoc}
     */
    public function addPromoBrief(\App\Entity\PromoBrief $promoBrief): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPromoBrief', [$promoBrief]);

        return parent::addPromoBrief($promoBrief);
    }

    /**
     * {@inheritDoc}
     */
    public function removePromoBrief(\App\Entity\PromoBrief $promoBrief): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePromoBrief', [$promoBrief]);

        return parent::removePromoBrief($promoBrief);
    }

    /**
     * {@inheritDoc}
     */
    public function getReferentiel(): ?\App\Entity\Referentiel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReferentiel', []);

        return parent::getReferentiel();
    }

    /**
     * {@inheritDoc}
     */
    public function setReferentiel(?\App\Entity\Referentiel $referentiel): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReferentiel', [$referentiel]);

        return parent::setReferentiel($referentiel);
    }

    /**
     * {@inheritDoc}
     */
    public function getNiveaux(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNiveaux', []);

        return parent::getNiveaux();
    }

    /**
     * {@inheritDoc}
     */
    public function addNiveau(\App\Entity\Niveau $niveau): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNiveau', [$niveau]);

        return parent::addNiveau($niveau);
    }

    /**
     * {@inheritDoc}
     */
    public function removeNiveau(\App\Entity\Niveau $niveau): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeNiveau', [$niveau]);

        return parent::removeNiveau($niveau);
    }

    /**
     * {@inheritDoc}
     */
    public function getTags(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTags', []);

        return parent::getTags();
    }

    /**
     * {@inheritDoc}
     */
    public function addTag(\App\Entity\Tag $tag): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTag', [$tag]);

        return parent::addTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTag(\App\Entity\Tag $tag): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTag', [$tag]);

        return parent::removeTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function getFormateur(): ?\App\Entity\Formateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormateur', []);

        return parent::getFormateur();
    }

    /**
     * {@inheritDoc}
     */
    public function setFormateur(?\App\Entity\Formateur $formateur): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFormateur', [$formateur]);

        return parent::setFormateur($formateur);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupes(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupes', []);

        return parent::getGroupes();
    }

    /**
     * {@inheritDoc}
     */
    public function addGroupe(\App\Entity\Groupe $groupe): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGroupe', [$groupe]);

        return parent::addGroupe($groupe);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGroupe(\App\Entity\Groupe $groupe): \App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGroupe', [$groupe]);

        return parent::removeGroupe($groupe);
    }

}
