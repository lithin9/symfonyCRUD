<?php

namespace App\Entity;

use App\Repository\ItemRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ItemRepository::class)]
class Item
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $itemAttribute1;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $itemAttribute2;

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

    public function getItemAttribute1(): ?string
    {
        return $this->itemAttribute1;
    }

    public function setItemAttribute1(?string $itemAttribute1): self
    {
        $this->itemAttribute1 = $itemAttribute1;

        return $this;
    }

    public function getItemAttribute2(): ?string
    {
        return $this->itemAttribute2;
    }

    public function setItemAttribute2(?string $itemAttribute2): self
    {
        $this->itemAttribute2 = $itemAttribute2;

        return $this;
    }
}
