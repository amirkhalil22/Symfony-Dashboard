<?php

namespace App\Entity;

use App\Repository\DatePayslipsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DatePayslipsRepository::class)
 */
class DatePayslips
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date_from;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $year_from;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $month_from;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $day_from;

    /**
     * @ORM\Column(type="date")
     */
    private $date_to;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $year_to;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $month_to;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $day_to;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateFrom(): ?\DateTimeInterface
    {
        return $this->date_from;
    }

    public function setDateFrom(\DateTimeInterface $date_from): self
    {
        $this->date_from = $date_from;

        return $this;
    }

    public function getYearFrom(): ?string
    {
        return $this->year_from;
    }

    public function setYearFrom(?string $year_from): self
    {
        $this->year_from = $year_from;

        return $this;
    }

    public function getMonthFrom(): ?string
    {
        return $this->month_from;
    }

    public function setMonthFrom(?string $month_from): self
    {
        $this->month_from = $month_from;

        return $this;
    }

    public function getDayFrom(): ?string
    {
        return $this->day_from;
    }

    public function setDayFrom(?string $day_from): self
    {
        $this->day_from = $day_from;

        return $this;
    }

    public function getDateTo(): ?\DateTimeInterface
    {
        return $this->date_to;
    }

    public function setDateTo(\DateTimeInterface $date_to): self
    {
        $this->date_to = $date_to;

        return $this;
    }

    public function getYearTo(): ?string
    {
        return $this->year_to;
    }

    public function setYearTo(?string $year_to): self
    {
        $this->year_to = $year_to;

        return $this;
    }

    public function getMonthTo(): ?string
    {
        return $this->month_to;
    }

    public function setMonthTo(?string $month_to): self
    {
        $this->month_to = $month_to;

        return $this;
    }

    public function getDayTo(): ?string
    {
        return $this->day_to;
    }

    public function setDayTo(?string $day_to): self
    {
        $this->day_to = $day_to;

        return $this;
    }
}
