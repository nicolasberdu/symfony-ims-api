<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
#[ORM\Table('categories')]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private string $code;
    
    #[ORM\Column]
    private string $category;
    
    #[ORM\Column]
    private ?string $description = null;
    
    #[ORM\ManyToOne(targetEntity: Category::class, inversedBy: 'products')]
    private Collection $products; 
    
    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId($id): void{
        $this->id = $id;
    }
    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode($code): void{
        $this->code = $code;
    }
    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory($category): void{
        $this->category = $category;
    }
    public function getDescription(): ?int
    {
        return $this->description;
    }

    public function setDescription($description): void{
        $this->description = $description;
    }

    public function getProducts(): Collection
    {
        return $this->products;
    }
/*
    public function addProduct(Product $product): self
    {
        if (!$this->products->contains($product)) {
            $this->products[] = $product;
            $product->setCategory($this);
        }

        return $this;
    }

    public function removeProduct(Product $product): self
    {
        if ($this->products->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getCategory() === $this) {
                $product->setCategory(null);
            }
        }

        return $this;
    }*/
}
