<?php

namespace App\Entity;

use App\Repository\ActivitiesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActivitiesRepository::class)
 */
class Activities
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
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $temperature_min;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $temperature_max;

    /**
     * @ORM\ManyToMany(targetEntity=Weather::class, mappedBy="activities")
     */
    private $weather;

    public function __construct()
    {
        $this->weather = new ArrayCollection();
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

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getTemperatureMin(): ?int
    {
        return $this->temperature_min;
    }

    public function setTemperatureMin(?int $temperature_min): self
    {
        $this->temperature_min = $temperature_min;

        return $this;
    }

    public function getTemperatureMax(): ?int
    {
        return $this->temperature_max;
    }

    public function setTemperatureMax(?int $temperature_max): self
    {
        $this->temperature_max = $temperature_max;

        return $this;
    }

    /**
     * @return Collection<int, Weather>
     */
    public function getWeather(): Collection
    {
        return $this->weather;
    }

    public function addWeather(Weather $weather): self
    {
        if (!$this->weather->contains($weather)) {
            $this->weather[] = $weather;
            $weather->addActivity($this);
        }

        return $this;
    }

    public function removeWeather(Weather $weather): self
    {
        if ($this->weather->removeElement($weather)) {
            $weather->removeActivity($this);
        }

        return $this;
    }
}
