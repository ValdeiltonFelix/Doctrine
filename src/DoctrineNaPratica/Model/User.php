<?php
//src/DoctrineNaPratica/Model/User.php


namespace DoctrineNaPratica\Model;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="User")
*/
class User
{
	/**
	 * @ORM\Id @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 * @var integer
	 */
	protected $id;
	
	/**
	 * @ORM\Column(type="string", length=150)
	 *
	 * @var string
	 */
	private $name;
	
	/**
	 * @ORM\Column(type="string", length=20, unique=true)
	 *
	 * @var string
	 */
	private $login;
	
	/**
	 * @ORM\Column(type="string", length=150, nullable=true)
	 *
	 * @var string
	 */
	private $email;
	
	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 *
	 * @var string
	 */
	private $avatar;
	
	/**
	 * @return integer
	 */
	public function getId()
	{
	    return $this->id;
	}
	
	public function getName()
	{
	    return $this->name;
	}
	
	public function setName($name)
	{
	    return $this->name = $name;
	}
	
	public function getLogin()
	{
	    return $this->login;
	}
	
	public function setLogin($login)
	{
	    return $this->login = $login;
	}
	
	public function getEmail()
	{
	    return $this->email;
	}
	
	public function setEmail($email)
	{
	    return $this->email = $email;
	}
	
	public function getAvatar()
	{
	    return $this->avatar;
	}
	
	public function setAvatar($avatar)
	{
	    return $this->avatar = $avatar;
	}
}
