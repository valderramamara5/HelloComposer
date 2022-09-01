<?php
namespace Angelica\HelloPackage\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * CustomersTypes
 *
 * @ORM\Table(name="customer_types")
 * @ORM\Entity
 */

class CustomerTypes{
   /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="customer_types_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }
}