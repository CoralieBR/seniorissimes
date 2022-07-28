<?php

namespace App\Entity;

use App\Repository\WeatherRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WeatherRepository::class)
 */
class Weather
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $openweather_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $openweather_name;

    /**
     * @ORM\ManyToMany(targetEntity=activities::class, inversedBy="weather")
     */
    private $activities;

    public function __construct()
    {
        $this->activities = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getOpenweatherId(): ?int
    {
        return $this->openweather_id;
    }

    public function setOpenweatherId(?int $openweather_id): self
    {
        $this->openweather_id = $openweather_id;

        return $this;
    }

    public function getOpenweatherName(): ?string
    {
        return $this->openweather_name;
    }

    public function setOpenweatherName(?string $openweather_name): self
    {
        $this->openweather_name = $openweather_name;

        return $this;
    }

    /**
     * @return Collection<int, activities>
     */
    public function getActivities(): Collection
    {
        return $this->activities;
    }

    public function addActivity(activities $activity): self
    {
        if (!$this->activities->contains($activity)) {
            $this->activities[] = $activity;
        }

        return $this;
    }

    public function removeActivity(activities $activity): self
    {
        $this->activities->removeElement($activity);

        return $this;
    }
}
