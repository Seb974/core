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
 *          "GET"={"security"="is_granted('ROLE_ADMIN')"},
 *          "POST"
 *     },
 *     itemOperations={
 *          "GET"={"security"="is_granted('ROLE_ADMIN')"},
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
     * @Groups({"farms_read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     * @Groups({"farms_read"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     * @Groups({"farms_read"})
     */
    private $city;

    /**
     * @ORM\Column(type="array", nullable=true)
     * @Groups({"farms_read"})
     */
    private $position = [];

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
}
