<?php

namespace App\Entity;

use App\Repository\HomeRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Form\PdfConversionType;
#[ORM\Entity(repositoryClass: HomeRepository::class)]
class Home
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pdfFile = null;

    #[ORM\Column(length: 255)]
    private ?string $PdfFileName = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPdfFile(): ?string
    {
        return $this->pdfFile;
    }

    public function setPdfFile(?string $pdfFile): static
    {
        $this->pdfFile = $pdfFile;

        return $this;
    }

    public function getPdfFileName(): ?string
    {
        return $this->PdfFileName;
    }

    public function setPdfFileName(string $PdfFileName): static
    {
        $this->PdfFileName = $PdfFileName;

        return $this;
    }
}
