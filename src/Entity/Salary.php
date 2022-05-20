<?php

namespace App\Entity;

use App\Repository\SalaryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SalaryRepository::class)
 */
class Salary
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $slip_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_employe;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_departement;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_date_payslips;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $amount;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSlipId(): ?int
    {
        return $this->slip_id;
    }

    public function setSlipId(int $slip_id): self
    {
        $this->slip_id = $slip_id;

        return $this;
    }

    public function getIdEmploye(): ?int
    {
        return $this->id_employe;
    }

    public function setIdEmploye(int $id_employe): self
    {
        $this->id_employe = $id_employe;

        return $this;
    }

    public function getIdDepartement(): ?int
    {
        return $this->id_departement;
    }

    public function setIdDepartement(int $id_departement): self
    {
        $this->id_departement = $id_departement;

        return $this;
    }

    public function getIdDatePayslips(): ?int
    {
        return $this->id_date_payslips;
    }

    public function setIdDatePayslips(int $id_date_payslips): self
    {
        $this->id_date_payslips = $id_date_payslips;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }
}
