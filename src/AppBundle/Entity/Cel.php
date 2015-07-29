<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="cel")
 */
class Cel
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    protected $eventtype;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $eventtime;

    /**
     * @ORM\Column(type="string", length=80)
     */
    protected $cid_name;

    /**
     * @ORM\Column(type="string", length=80)
     */
    protected $cid_num;

    /**
     * @ORM\Column(type="string", length=80)
     */
    protected $cid_ani;

    /**
     * @ORM\Column(type="string", length=80)
     */
    protected $cid_rdnis;

    /**
     * @ORM\Column(type="string", length=80)
     */
    protected $cid_dnid;

    /**
     * @ORM\Column(type="string", length=80)
     */
    protected $exten;

    /**
     * @ORM\Column(type="string", length=80)
     */
    protected $context;

    /**
     * @ORM\Column(type="string", length=80)
     */
    protected $channame;

    /**
     * @ORM\Column(type="string", length=80)
     */
    protected $src;

    /**
     * @ORM\Column(type="string", length=80)
     */
    protected $dst;

    /**
     * @ORM\Column(type="string", length=80)
     */
    protected $channel;

    /**
     * @ORM\Column(type="string", length=80)
     */
    protected $dstchannel;

    /**
     * @ORM\Column(type="string", length=80)
     */
    protected $appname;

    /**
     * @ORM\Column(type="string", length=80)
     */
    protected $appdata;

    /**
     * @ORM\Column(type="integer")
     */
    protected $amaflags;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $accountcode;

    /**
     * @ORM\Column(type="string", length=32)
     */
    protected $uniqueid;

    /**
     * @ORM\Column(type="string", length=32)
     */
    protected $linkedid;

    /**
     * @ORM\Column(type="string", length=80)
     */
    protected $peer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $userdeftype;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $eventextra;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $userfield;

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
     * Set eventtype
     *
     * @param string $eventtype
     * @return Cel
     */
    // public function setEventtype($eventtype)
    // {
    //     $this->eventtype = $eventtype;

    //     return $this;
    // }

    /**
     * Get eventtype
     *
     * @return string 
     */
    public function getEventtype()
    {
        return $this->eventtype;
    }

    /**
     * Set eventtime
     *
     * @param \DateTime $eventtime
     * @return Cel
     */
    // public function setEventtime($eventtime)
    // {
    //     $this->eventtime = $eventtime;

    //     return $this;
    // }

    /**
     * Get eventtime
     *
     * @return \DateTime 
     */
    public function getEventtime()
    {
        // return $this->eventtime->setTimeZone(new \DateTimeZone('Europe/Kiev'));

        return $this->eventtime;
    }

    /**
     * Set cid_name
     *
     * @param string $cidName
     * @return Cel
     */
    // public function setCidName($cidName)
    // {
    //     $this->cid_name = $cidName;

    //     return $this;
    // }

    /**
     * Get cid_name
     *
     * @return string 
     */
    public function getCidName()
    {
        return $this->cid_name;
    }

    /**
     * Set cid_num
     *
     * @param string $cidNum
     * @return Cel
     */
    // public function setCidNum($cidNum)
    // {
    //     $this->cid_num = $cidNum;

    //     return $this;
    // }

    /**
     * Get cid_num
     *
     * @return string 
     */
    public function getCidNum()
    {
        return $this->cid_num;
    }

    /**
     * Set cid_ani
     *
     * @param string $cidAni
     * @return Cel
     */
    // public function setCidAni($cidAni)
    // {
    //     $this->cid_ani = $cidAni;

    //     return $this;
    // }

    /**
     * Get cid_ani
     *
     * @return string 
     */
    public function getCidAni()
    {
        return $this->cid_ani;
    }

    /**
     * Set cid_rdnis
     *
     * @param string $cidRdnis
     * @return Cel
     */
    // public function setCidRdnis($cidRdnis)
    // {
    //     $this->cid_rdnis = $cidRdnis;

    //     return $this;
    // }

    /**
     * Get cid_rdnis
     *
     * @return string 
     */
    public function getCidRdnis()
    {
        return $this->cid_rdnis;
    }

    /**
     * Set cid_dnid
     *
     * @param string $cidDnid
     * @return Cel
     */
    // public function setCidDnid($cidDnid)
    // {
    //     $this->cid_dnid = $cidDnid;

    //     return $this;
    // }

    /**
     * Get cid_dnid
     *
     * @return string 
     */
    public function getCidDnid()
    {
        return $this->cid_dnid;
    }

    /**
     * Set exten
     *
     * @param string $exten
     * @return Cel
     */
    // public function setExten($exten)
    // {
    //     $this->exten = $exten;

    //     return $this;
    // }

    /**
     * Get exten
     *
     * @return string 
     */
    public function getExten()
    {
        return $this->exten;
    }

    /**
     * Set context
     *
     * @param string $context
     * @return Cel
     */
    // public function setContext($context)
    // {
    //     $this->context = $context;

    //     return $this;
    // }

    /**
     * Get context
     *
     * @return string 
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set channame
     *
     * @param string $channame
     * @return Cel
     */
    // public function setChanname($channame)
    // {
    //     $this->channame = $channame;

    //     return $this;
    // }

    /**
     * Get channame
     *
     * @return string 
     */
    public function getChanname()
    {
        return $this->channame;
    }

    /**
     * Set src
     *
     * @param string $src
     * @return Cel
     */
    // public function setSrc($src)
    // {
    //     $this->src = $src;

    //     return $this;
    // }

    /**
     * Get src
     *
     * @return string 
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Set dst
     *
     * @param string $dst
     * @return Cel
     */
    // public function setDst($dst)
    // {
    //     $this->dst = $dst;

    //     return $this;
    // }

    /**
     * Get dst
     *
     * @return string 
     */
    public function getDst()
    {
        return $this->dst;
    }

    /**
     * Set channel
     *
     * @param string $channel
     * @return Cel
     */
    // public function setChannel($channel)
    // {
    //     $this->channel = $channel;

    //     return $this;
    // }

    /**
     * Get channel
     *
     * @return string 
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set dstchannel
     *
     * @param string $dstchannel
     * @return Cel
     */
    // public function setDstchannel($dstchannel)
    // {
    //     $this->dstchannel = $dstchannel;

    //     return $this;
    // }

    /**
     * Get dstchannel
     *
     * @return string 
     */
    public function getDstchannel()
    {
        return $this->dstchannel;
    }

    /**
     * Set appname
     *
     * @param string $appname
     * @return Cel
     */
    // public function setAppname($appname)
    // {
    //     $this->appname = $appname;

    //     return $this;
    // }

    /**
     * Get appname
     *
     * @return string 
     */
    public function getAppname()
    {
        return $this->appname;
    }

    /**
     * Set appdata
     *
     * @param string $appdata
     * @return Cel
     */
    // public function setAppdata($appdata)
    // {
    //     $this->appdata = $appdata;

    //     return $this;
    // }

    /**
     * Get appdata
     *
     * @return string 
     */
    public function getAppdata()
    {
        return $this->appdata;
    }

    /**
     * Set amaflags
     *
     * @param integer $amaflags
     * @return Cel
     */
    // public function setAmaflags($amaflags)
    // {
    //     $this->amaflags = $amaflags;

    //     return $this;
    // }

    /**
     * Get amaflags
     *
     * @return integer 
     */
    public function getAmaflags()
    {
        return $this->amaflags;
    }

    /**
     * Set accountcode
     *
     * @param string $accountcode
     * @return Cel
     */
    // public function setAccountcode($accountcode)
    // {
    //     $this->accountcode = $accountcode;

    //     return $this;
    // }

    /**
     * Get accountcode
     *
     * @return string 
     */
    public function getAccountcode()
    {
        return $this->accountcode;
    }

    /**
     * Set uniqueid
     *
     * @param string $uniqueid
     * @return Cel
     */
    // public function setUniqueid($uniqueid)
    // {
    //     $this->uniqueid = $uniqueid;

    //     return $this;
    // }

    /**
     * Get uniqueid
     *
     * @return string 
     */
    public function getUniqueid()
    {
        return $this->uniqueid;
    }

    /**
     * Set linkedid
     *
     * @param string $linkedid
     * @return Cel
     */
    // public function setLinkedid($linkedid)
    // {
    //     $this->linkedid = $linkedid;

    //     return $this;
    // }

    /**
     * Get linkedid
     *
     * @return string 
     */
    public function getLinkedid()
    {
        return $this->linkedid;
    }

    /**
     * Set peer
     *
     * @param string $peer
     * @return Cel
     */
    // public function setPeer($peer)
    // {
    //     $this->peer = $peer;

    //     return $this;
    // }

    /**
     * Get peer
     *
     * @return string 
     */
    public function getPeer()
    {
        return $this->peer;
    }

    /**
     * Set userdeftype
     *
     * @param string $userdeftype
     * @return Cel
     */
    // public function setUserdeftype($userdeftype)
    // {
    //     $this->userdeftype = $userdeftype;

    //     return $this;
    // }

    /**
     * Get userdeftype
     *
     * @return string 
     */
    public function getUserdeftype()
    {
        return $this->userdeftype;
    }

    /**
     * Set eventextra
     *
     * @param string $eventextra
     * @return Cel
     */
    // public function setEventextra($eventextra)
    // {
    //     $this->eventextra = $eventextra;

    //     return $this;
    // }

    /**
     * Get eventextra
     *
     * @return string 
     */
    public function getEventextra()
    {
        return $this->eventextra;
    }

    /**
     * Set userfield
     *
     * @param string $userfield
     * @return Cel
     */
    // public function setUserfield($userfield)
    // {
    //     $this->userfield = $userfield;

    //     return $this;
    // }

    /**
     * Get userfield
     *
     * @return string 
     */
    public function getUserfield()
    {
        return $this->userfield;
    }
}
