<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $mobile_number;

    /**
     * @ORM\Column(type="datetime")
     */
    private $reservation_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $explanation;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"default" : 0})
     */
    private $dutch_bike;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"default" : 0})
     */
    private $city_bike;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"default" : 0})
     */
    private $e_bike;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"default" : 0})
     */
    private $hybrid_bike;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"default" : 0})
     */
    private $tandem_bike;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"default" : 0})
     */
    private $touring_bike;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"default" : 0})
     */
    private $kids_bike;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"default" : 0})
     */
    private $kids_cargo;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"default" : 0})
     */
    private $kids_child_seat;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"default" : 0})
     */
    private $kids_tandem;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMobileNumber(): ?int
    {
        return $this->mobile_number;
    }

    public function setMobileNumber(int $mobile_number): self
    {
        $this->mobile_number = $mobile_number;

        return $this;
    }

    public function getReservationDate(): ?\DateTimeInterface
    {
        return $this->reservation_date;
    }

    public function setReservationDate(\DateTimeInterface $reservation_date): self
    {
        $this->reservation_date = $reservation_date;

        return $this;
    }

    public function getExplanation(): ?string
    {
        return $this->explanation;
    }

    public function setExplanation(string $explanation): self
    {
        $this->explanation = $explanation;

        return $this;
    }

    public function getDutchBike(): ?int
    {
        return $this->dutch_bike;
    }

    public function setDutchBike(int $dutch_bike): self
    {
        $this->dutch_bike = $dutch_bike;

        return $this;
    }

    public function getCityBike(): ?int
    {
        return $this->city_bike;
    }

    public function setCityBike(int $city_bike): self
    {
        $this->city_bike = $city_bike;

        return $this;
    }

    public function getEBike(): ?int
    {
        return $this->e_bike;
    }

    public function setEBike(int $e_bike): self
    {
        $this->e_bike = $e_bike;

        return $this;
    }

    public function getHybridBike(): ?int
    {
        return $this->hybrid_bike;
    }

    public function setHybridBike(int $hybrid_bike): self
    {
        $this->hybrid_bike = $hybrid_bike;

        return $this;
    }

    public function getTandemBike(): ?int
    {
        return $this->tandem_bike;
    }

    public function setTandemBike(int $tandem_bike): self
    {
        $this->tandem_bike = $tandem_bike;

        return $this;
    }

    public function getTouringBike(): ?int
    {
        return $this->touring_bike;
    }

    public function setTouringBike(int $touring_bike): self
    {
        $this->touring_bike = $touring_bike;

        return $this;
    }

    public function getKidsBike(): ?int
    {
        return $this->kids_bike;
    }

    public function setKidsBike(int $kids_bike): self
    {
        $this->kids_bike = $kids_bike;

        return $this;
    }

    public function getKidsCargo(): ?int
    {
        return $this->kids_cargo;
    }

    public function setKidsCargo(int $kids_cargo): self
    {
        $this->kids_cargo = $kids_cargo;

        return $this;
    }

    public function getKidsChildSeat(): ?int
    {
        return $this->kids_child_seat;
    }

    public function setKidsChildSeat(int $kids_child_seat): self
    {
        $this->kids_child_seat = $kids_child_seat;

        return $this;
    }

    public function getKidsTandem(): ?int
    {
        return $this->kids_tandem;
    }

    public function setKidsTandem(int $kids_tandem): self
    {
        $this->kids_tandem = $kids_tandem;

        return $this;
    }
}
