<?php
namespace Application\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="post_reaction", schema="public")
 **/
class PostReaction {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;
    
    /** @ORM\Column(type="string") */
    protected $social_media_service_id;
    
    /** 
     * @ORM\ManyToOne(targetEntity="Post", inversedBy="reactions")
     * @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     */
    protected $post;
    
    /** @ORM\Column(type="string") */
    protected $author_id;
    
    /** @ORM\Column(type="string") */
    protected $reaction_type;
    
    /** @ORM\Column(type="datetime") */
    protected $last_updated;
    
    /** @ORM\Column(type="datetime", options={"default": 0})*/
    protected $created;

    // getters/setters
    
    public function __construct(){
        $this->created = new \DateTime();
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
     * Set socialMediaServiceId
     *
     * @param string $socialMediaServiceId
     *
     * @return Comment
     */
    public function setSocialMediaServiceId($socialMediaServiceId)
    {
        $this->social_media_service_id = $socialMediaServiceId;
        $this->last_updated = new \DateTime();

        return $this;
    }

    /**
     * Get socialMediaServiceId
     *
     * @return string
     */
    public function getSocialMediaServiceId()
    {
        return $this->social_media_service_id;
    }

    /**
     * Set authorId
     *
     * @param string $authorId
     *
     * @return Comment
     */
    public function setAuthorId($authorId)
    {
        $this->author_id = $authorId;
        $this->last_updated = new \DateTime();

        return $this;
    }

    /**
     * Get authorId
     *
     * @return string
     */
    public function getAuthorId()
    {
        return $this->author_id;
    }

    /**
     * Set reaction_type
     *
     * @param string $reaction
     *
     * @return Comment
     */
    public function setReactionType($reaction)
    {
        $this->reaction_type = $reaction;
        $this->last_updated = new \DateTime();

        return $this;
    }

    /**
     * Get reaction_type
     *
     * @return string
     */
    public function getReactionType()
    {
        return $this->reaction_type;
    }

    /**
     * Get lastUpdated
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->last_updated;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set post
     *
     * @param \Application\Entity\Post $post
     *
     * @return PostReaction
     */
    public function setPost(\Application\Entity\Post $post = null)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \Application\Entity\Post
     */
    public function getPost()
    {
        return $this->post;
    }


    /**
     * Stub to prevent auto-generation
     */
    private function setLastUpdated()
    {
    }

    /**
     * Stub to prevent auto-generation
     */
    private function setCreated()
    {
    }
}
