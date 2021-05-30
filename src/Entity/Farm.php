<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\FarmRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=FarmRepository::class)
 *  @ApiResource(
 *     denormalizationContext={"disable_type_enforcement"=true},
 *     normalizationContext={
 *          "groups"={"farms_read"}
 *     },
 *     collectionOperations={
 *          "GET",
 *          "POST"={"security"="is_granted('ROLE_ADMIN')"}
 *     },
 *     itemOperations={
 *          "GET",
 *          "PUT"={"security"="is_granted('ROLE_ADMIN')"},
 *          "PATCH"={"security"="is_granted('ROLE_ADMIN')"},
 *          "DELETE"={"security"="is_granted('ROLE_ADMIN')"}
 *     },
 * )
 */
class Farm
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"farms_read", "ads_read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     * @Groups({"farms_read", "ads_read"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     * @Groups({"farms_read", "ads_read"})
     */
    private $city;

    /**
     * @ORM\Column(type="array", nullable=true)
     * @Groups({"farms_read", "ads_read"})
     */
    private $position = [];

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     * @Groups({"farms_read", "ads_read"})
     */
    private $zipcode;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"farms_read", "ads_read"})
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"farms_read", "ads_read"})
     */
    private $address2;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups({"farms_read", "ads_read"})
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"farms_read", "ads_read"})
     */
    private $energy;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     * @Groups({"farms_read", "ads_read"})
     */
    private $beginAt;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups({"farms_read", "ads_read"})
     */
    private $investmentCost;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"farms_read", "ads_read"})
     */
    private $computer;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"farms_read", "ads_read"})
     */
    private $power;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups({"farms_read", "ads_read"})
     */
    private $dailyProfit;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups({"farms_read", "ads_read"})
     */
    private $profitPercent;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups({"farms_read", "ads_read"})
     */
    private $partPrice;

    /**
     * @ORM\OneToOne(targetEntity=Picture::class, cascade={"persist", "remove"})
     * @Groups({"farms_read", "ads_read"})
     */
    private $picture;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getPosition(): ?array
    {
        return $this->position;
    }

    public function setPosition(?array $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    public function setZipcode(?string $zipcode): self
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    public function setAddress2(?string $address2): self
    {
        $this->address2 = $address2;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getEnergy(): ?string
    {
        return $this->energy;
    }

    public function setEnergy(?string $energy): self
    {
        $this->energy = $energy;

        return $this;
    }

    public function getBeginAt(): ?string
    {
        return $this->beginAt;
    }

    public function setBeginAt(?string $beginAt): self
    {
        $this->beginAt = $beginAt;

        return $this;
    }

    public function getInvestmentCost(): ?float
    {
        return $this->investmentCost;
    }

    public function setInvestmentCost(?float $investmentCost): self
    {
        $this->investmentCost = $investmentCost;

        return $this;
    }

    public function getComputer(): ?int
    {
        return $this->computer;
    }

    public function setComputer(?int $computer): self
    {
        $this->computer = $computer;

        return $this;
    }

    public function getPower(): ?string
    {
        return $this->power;
    }

    public function setPower(?string $power): self
    {
        $this->power = $power;

        return $this;
    }

    public function getDailyProfit(): ?float
    {
        return $this->dailyProfit;
    }

    public function setDailyProfit(?float $dailyProfit): self
    {
        $this->dailyProfit = $dailyProfit;

        return $this;
    }

    public function getProfitPercent(): ?float
    {
        return $this->profitPercent;
    }

    public function setProfitPercent(?float $profitPercent): self
    {
        $this->profitPercent = $profitPercent;

        return $this;
    }

    public function getPartPrice(): ?float
    {
        return $this->partPrice;
    }

    public function setPartPrice(?float $partPrice): self
    {
        $this->partPrice = $partPrice;

        return $this;
    }

    public function getPicture(): ?Picture
    {
        return $this->picture;
    }

    public function setPicture(?Picture $picture): self
    {
        $this->picture = $picture;

        return $this;
    }
}
