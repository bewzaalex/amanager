<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="cdr")
 */
class Cdr
{
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * @ORM\Column(type="datetime")
    */
    protected $calldate;

	/**
    * @ORM\Column(type="string", length=32)
    */
    protected $uniqueid;

    /**
    * @ORM\Column(type="string", length=20)
    */
    protected $accountcode;

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
    protected $dcontext;

    /**
    * @ORM\Column(type="string", length=80)
    */
    protected $clid;

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
    protected $lastapp;

    /**
    * @ORM\Column(type="string", length=80)
    */
    protected $lastdata;

    /**
    * @ORM\Column(type="integer")
    */
    protected $duration;

    /**
    * @ORM\Column(type="integer")
    */
    protected $billsec;

    /**
    * @ORM\Column(type="string", length=20)
    */
    protected $disposition;

    /**
    * @ORM\Column(type="string", length=16)
    */
    protected $amaflags;

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
     * Set calldate
     *
     * @param \DateTime $calldate
     * @return Cdr
     */
    // public function setCalldate($calldate)
    // {
    //     $this->calldate = $calldate;

    //     return $this;
    // }

    /**
     * Get calldate
     *
     * @return \DateTime 
     */
    public function getCalldate()
    {
        return $this->calldate;
    }

    /**
     * Set uniqueid
     *
     * @param string $uniqueid
     * @return Cdr
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
     * Set accountcode
     *
     * @param string $accountcode
     * @return Cdr
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
     * Set src
     *
     * @param string $src
     * @return Cdr
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
     * @return Cdr
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
     * Set dcontext
     *
     * @param string $dcontext
     * @return Cdr
     */
    // public function setDcontext($dcontext)
    // {
    //     $this->dcontext = $dcontext;

    //     return $this;
    // }

    /**
     * Get dcontext
     *
     * @return string 
     */
    public function getDcontext()
    {
        return $this->dcontext;
    }

    /**
     * Set clid
     *
     * @param string $clid
     * @return Cdr
     */
    // public function setClid($clid)
    // {
    //     $this->clid = $clid;

    //     return $this;
    // }

    /**
     * Get clid
     *
     * @return string 
     */
    public function getClid()
    {
        return $this->clid;
    }

    /**
     * Set channel
     *
     * @param string $channel
     * @return Cdr
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
     * @return Cdr
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
     * Set lastapp
     *
     * @param string $lastapp
     * @return Cdr
     */
    // public function setLastapp($lastapp)
    // {
    //     $this->lastapp = $lastapp;

    //     return $this;
    // }

    /**
     * Get lastapp
     *
     * @return string 
     */
    public function getLastapp()
    {
        return $this->lastapp;
    }

    /**
     * Set lastdata
     *
     * @param string $lastdata
     * @return Cdr
     */
    // public function setLastdata($lastdata)
    // {
    //     $this->lastdata = $lastdata;

    //     return $this;
    // }

    /**
     * Get lastdata
     *
     * @return string 
     */
    public function getLastdata()
    {
        return $this->lastdata;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return Cdr
     */
    // public function setDuration($duration)
    // {
    //     $this->duration = $duration;

    //     return $this;
    // }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set billsec
     *
     * @param integer $billsec
     * @return Cdr
     */
    // public function setBillsec($billsec)
    // {
    //     $this->billsec = $billsec;

    //     return $this;
    // }

    /**
     * Get billsec
     *
     * @return integer 
     */
    public function getBillsec()
    {
        return $this->billsec;
    }

    /**
     * Set disposition
     *
     * @param string $disposition
     * @return Cdr
     */
    // public function setDisposition($disposition)
    // {
    //     $this->disposition = $disposition;

    //     return $this;
    // }

    /**
     * Get disposition
     *
     * @return string 
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    /**
     * Set amaflags
     *
     * @param string $amaflags
     * @return Cdr
     */
    // public function setAmaflags($amaflags)
    // {
    //     $this->amaflags = $amaflags;

    //     return $this;
    // }

    /**
     * Get amaflags
     *
     * @return string 
     */
    public function getAmaflags()
    {
        return $this->amaflags;
    }

    /**
     * Set userfield
     *
     * @param string $userfield
     * @return Cdr
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
